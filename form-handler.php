<?php
/**
 * EzygoBD — central form handler.
 * Every site form posts here with a hidden form_type. The submission is checked,
 * saved to a private folder outside the website, optionally emailed, and the
 * visitor is sent back to the page with ?status=success|error&form=<type>.
 * Settings: includes/config.php
 */

ini_set('display_errors', '0');
ini_set('log_errors', '1');
date_default_timezone_set('Asia/Dhaka');

$cfg = require __DIR__ . '/includes/config.php';

// ── Only accept POST ──
if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    header('Location: index.php', true, 303);
    exit;
}

// ── Helpers ──
function field(string $key, int $max = 500): string {
    $v = $_POST[$key] ?? '';
    if (!is_string($v)) { return ''; }
    $v = trim($v);
    // drop control characters and text-direction overrides; keep new lines, tabs and Bengali joiners
    $v = preg_replace('/[^\P{Cc}\n\t]|[\x{202A}-\x{202E}\x{2066}-\x{2069}]/u', '', $v) ?? '';
    return function_exists('mb_substr') ? mb_substr($v, 0, $max, 'UTF-8') : substr($v, 0, $max);
}
function one_line(string $v): string { return trim(preg_replace('/[\r\n\t]+/', ' ', $v)); }

// Redirect only back to a page on this site (no open redirects)
function back_url(string $status, string $form): string {
    $ref  = $_SERVER['HTTP_REFERER'] ?? '';
    $host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));
    $page = 'index.php';
    if ($ref !== '' && strtolower((string) parse_url($ref, PHP_URL_HOST)) === $host) {
        $p = ltrim((string) parse_url($ref, PHP_URL_PATH), '/');
        if (preg_match('/^[a-z0-9-]+\.php$/', $p)) { $page = $p; }
    }
    $anchor = ['rent_ev' => '#rent-ev', 'contact' => '#message', 'evs_contact' => '#contact', 'franchise' => '#fr-contact',
               'advertising' => '#ad-contact', 'join' => '#join-form', 'support' => '#message', 'partnership' => '#message'][$form] ?? '';
    return $page . '?status=' . $status . ($form !== '' ? '&form=' . $form : '') . $anchor;
}
function finish(string $status, string $form): void {
    header('Location: ' . back_url($status, $form), true, 303);
    exit;
}

$ft = $_POST['form_type'] ?? '';
$formType = is_string($ft) ? preg_replace('/[^a-z_]/', '', $ft) : '';

// ── Same-site check: browsers send Origin on POST; reject posts from other sites ──
$host   = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));
$origin = $_SERVER['HTTP_ORIGIN'] ?? '';
if ($origin === 'null' || ($origin !== '' && strtolower((string) parse_url($origin, PHP_URL_HOST)) !== $host)
    || ($_SERVER['HTTP_SEC_FETCH_SITE'] ?? '') === 'cross-site') {
    finish('error', $formType);
}

// ── Spam traps: hidden "website" field must stay empty; a form can't be filled in under 3 seconds ──
if (field('website', 200) !== '') { finish('success', $formType); }       // quietly drop bots
$t = (int) ($_POST['_t'] ?? 0);
if ($t <= 0 || (time() - $t) < 3) { finish('success', $formType); }

// ── Private storage (outside the web root: /home/<account>/ezygo-submissions) ──
$logDir = dirname(__DIR__) . '/ezygo-submissions';
if (!is_dir($logDir)) { @mkdir($logDir, 0700, true); }
if (!is_dir($logDir) || !is_writable($logDir)) {
    error_log('ezygo: submissions folder is missing or not writable: ' . $logDir);
    finish('error', $formType);
}

// ── Rate limits: per visitor (IPv6 counted per /64) and for the whole site ──
function hit(string $file, int $window, int $max): bool {   // true = allowed
    $fh = @fopen($file, 'c+');
    if (!$fh) { return true; }
    flock($fh, LOCK_EX);
    $now  = time();
    $hits = array_filter(array_map('intval', explode(',', (string) stream_get_contents($fh))), function ($x) use ($now, $window) { return $x > $now - $window; });
    $ok   = count($hits) < $max;
    if ($ok) { $hits[] = $now; }
    ftruncate($fh, 0); rewind($fh); fwrite($fh, implode(',', $hits));
    flock($fh, LOCK_UN); fclose($fh);
    return $ok;
}
$ip = $_SERVER['REMOTE_ADDR'] ?? '0.0.0.0';
if (strpos($ip, ':') !== false) { $ip = implode(':', array_slice(explode(':', $ip), 0, 4)) . '::/64'; }
$rlFile = $logDir . '/.rate-' . substr(hash_hmac('sha256', $ip, (string) $cfg['secret']), 0, 20);
if (!hit($logDir . '/.rate-site', 3600, (int) ($cfg['site_limit'] ?? 60)) || !hit($rlFile, 600, (int) $cfg['rate_limit'])) {
    finish('error', $formType);
}
if (mt_rand(1, 50) === 1) {   // tidy old per-visitor counters now and then
    foreach ((array) glob($logDir . '/.rate-*') as $f) { if ($f !== $logDir . '/.rate-site' && @filemtime($f) < time() - 86400) { @unlink($f); } }
}

// ── Forms: field => [label, required, max length, kind]   kind: text | multi | email | phone | sensitive ──
$forms = [
    'rent_ev' => ['EV Rental Request', [
        'name' => ['Name', true, 120, 'text'], 'phone' => ['Phone', true, 30, 'phone'], 'email' => ['Email', true, 160, 'email'],
        'nid' => ['NID', true, 40, 'sensitive'], 'gender' => ['Gender', true, 20, 'text'],
        'vehicle_type' => ['Vehicle Type', false, 40, 'text'], 'rental_plan' => ['Rental Plan', false, 40, 'text'],
        'address' => ['Address', true, 500, 'sensitive']]],
    'contact' => ['Contact Message', [
        'name' => ['Name', true, 120, 'text'], 'phone' => ['Phone', false, 30, 'phone'], 'email' => ['Email', true, 160, 'email'],
        'inquiry_type' => ['I am a', false, 60, 'text'], 'subject' => ['Subject', false, 160, 'text'], 'message' => ['Message', false, 3000, 'multi']]],
    'evs_contact' => ['Website Contact', [
        'name' => ['Name', true, 120, 'text'], 'phone' => ['Phone', true, 30, 'phone'], 'email' => ['Email', false, 160, 'email'],
        'inquiry_type' => ['I am a', false, 60, 'text'], 'message' => ['Message', false, 3000, 'multi']]],
    'support' => ['Rider Support Request', [
        'name' => ['Name', true, 120, 'text'], 'phone' => ['Registered Phone', true, 30, 'phone'],
        'issue_type' => ['Issue Type', false, 40, 'text'], 'message' => ['Description', true, 3000, 'multi']]],
    'partnership' => ['Partnership Enquiry', [
        'name' => ['Name', true, 120, 'text'], 'company' => ['Company', true, 160, 'text'], 'email' => ['Email', true, 160, 'email'],
        'partnership_type' => ['Partnership Type', false, 40, 'text'], 'message' => ['Message', true, 3000, 'multi']]],
    'franchise' => ['Franchise Application', [
        'name' => ['Name', true, 120, 'text'], 'phone' => ['Phone', true, 30, 'phone'], 'email' => ['Email', true, 160, 'email'],
        'city' => ['City / Area', false, 120, 'text'], 'model' => ['Model', false, 20, 'text'], 'message' => ['Message', false, 3000, 'multi']]],
    'advertising' => ['Advertising Enquiry', [
        'name' => ['Name', true, 120, 'text'], 'phone' => ['Phone', true, 30, 'phone'], 'email' => ['Email', true, 160, 'email'],
        'brand' => ['Brand', true, 160, 'text'], 'format' => ['Format', false, 20, 'text'], 'budget' => ['Budget', false, 20, 'text'],
        'message' => ['Campaign Goal', false, 3000, 'multi']]],
    'join' => ['Join Us Application', [
        'interest_type' => ['Interest', true, 60, 'text'], 'name' => ['Name', true, 120, 'text'], 'phone' => ['Phone', true, 30, 'phone'],
        'email' => ['Email', true, 160, 'email'], 'company' => ['Company', false, 160, 'text'], 'city' => ['City', false, 120, 'text'],
        'message' => ['Message', false, 3000, 'multi']]],
];
if (!isset($forms[$formType])) { finish('error', ''); }
[$title, $spec] = $forms[$formType];

// ── Validate ──
$vals = [];
foreach ($spec as $key => [$label, $required, $max, $kind]) {
    $v = field($key, $max);
    if ($kind !== 'multi' && $key !== 'address') { $v = one_line($v); }
    if ($required && $v === '') { finish('error', $formType); }
    if ($v !== '' && $kind === 'email' && !filter_var($v, FILTER_VALIDATE_EMAIL)) { finish('error', $formType); }
    if ($v !== '' && $kind === 'phone' && !preg_match('/^\+?[0-9][0-9 ()\-]{5,24}$/', $v)) { finish('error', $formType); }
    $vals[$key] = $v;
}

// ── Save the full record privately ──
$who   = $vals['name'] ?? '';
$lines = [];
foreach ($spec as $key => [$label]) { $lines[] = str_pad($label . ':', 18) . str_replace("\n", "\n" . str_repeat(' ', 18), $vals[$key]); }
$entry   = "\n" . str_repeat('=', 60) . "\nTime: " . date('Y-m-d H:i:s') . "\nForm: $formType ($title)\n" . str_repeat('-', 60) . "\n" . implode("\n", $lines) . "\n";
$logFile = $logDir . '/' . date('Y-m-d') . '.log';
if (is_file($logFile) && filesize($logFile) > 5000000) { error_log('ezygo: daily log over 5 MB, not saving'); finish('error', $formType); }
$saved   = @file_put_contents($logFile, $entry, FILE_APPEND | LOCK_EX) !== false;
if ($saved) { @chmod($logFile, 0600); }

// ── Email a notification (never the NID or home address unless the owner turns that on) ──
$mailed = false;
if (!empty($cfg['mail_enabled'])) {
    $mlines = [];
    foreach ($spec as $key => [$label, , , $kind]) {
        $v = $vals[$key];
        if ($kind === 'sensitive' && empty($cfg['mail_sensitive']) && $v !== '') { $v = '(saved privately on the server — see the ezygo-submissions folder)'; }
        $mlines[] = str_pad($label . ':', 18) . $v;
    }
    $subject = one_line("[Ezygo website] $title — " . ($who !== '' ? $who : 'new'));
    $subject = function_exists('mb_encode_mimeheader') ? mb_encode_mimeheader(mb_substr($subject, 0, 150, 'UTF-8'), 'UTF-8', 'B') : substr($subject, 0, 150);
    $body    = "A new form was submitted on ezygobd.com.\n\n" . implode("\n", $mlines) . "\n\nSent: " . date('Y-m-d H:i') . "\n";
    $from    = preg_replace('/[^a-z0-9@._-]/i', '', (string) $cfg['mail_from']);
    $headers = "From: EzygoBD Website <$from>\r\nMIME-Version: 1.0\r\nContent-Type: text/plain; charset=UTF-8\r\nContent-Transfer-Encoding: base64\r\n";
    $reply   = $vals['email'] ?? '';
    if ($reply !== '' && filter_var($reply, FILTER_VALIDATE_EMAIL)) { $headers .= "Reply-To: $reply\r\n"; }
    $mailed = @mail((string) $cfg['mail_to'], $subject, chunk_split(base64_encode($body)), $headers, '-f' . $from);
}

// Received if it was saved or emailed
finish(($saved || $mailed) ? 'success' : 'error', $formType);
