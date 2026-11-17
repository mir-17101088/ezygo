<?php
/**
 * EzygoBD — Central Form Handler
 * Receives POST data from all site forms, builds an email, and sends via mail().
 * Redirects back to the referring page with ?status=success or ?status=error.
 */

// ── Only accept POST ──
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

// ── Recipient email ──
$to = 'info@ezygobd.com';

// ── Sanitise helper ──
function clean(string $val): string {
    return htmlspecialchars(strip_tags(trim($val)), ENT_QUOTES, 'UTF-8');
}

// ── Redirect only back to a page on this site (blocks open redirects) ──
function back_url(string $status): string {
    $ref  = $_SERVER['HTTP_REFERER'] ?? '';
    $host = strtolower(preg_replace('/:\d+$/', '', $_SERVER['HTTP_HOST'] ?? ''));
    $path = 'index.php';
    if ($ref !== '' && strtolower((string) parse_url($ref, PHP_URL_HOST)) === $host) {
        $path = parse_url($ref, PHP_URL_PATH) ?: '/';
        $q = parse_url($ref, PHP_URL_QUERY);
        if ($q) {
            parse_str($q, $params);
            unset($params['status'], $params['form']);
            if ($params) { $path .= '?' . http_build_query($params); }
        }
    }
    $form   = preg_replace('/[^a-z_]/', '', $_POST['form_type'] ?? '');
    $anchor = ['rent_ev' => '#rent-ev', 'contact' => '#message', 'evs_contact' => '#contact', 'franchise' => '#fr-contact', 'advertising' => '#ad-contact', 'join' => '#join-form', 'support' => '#message', 'partnership' => '#message'][$form] ?? '';
    return $path . (strpos($path, '?') !== false ? '&' : '?') . 'status=' . $status . ($form ? '&form=' . $form : '') . $anchor;
}

// ── Read form type ──
$formType = isset($_POST['form_type']) ? clean($_POST['form_type']) : '';

// ── Build email subject & body per form type ──
switch ($formType) {

    case 'contact':
        $name    = clean($_POST['name']    ?? '');
        $phone   = clean($_POST['phone']   ?? '');
        $email   = clean($_POST['email']   ?? '');
        $type    = clean($_POST['inquiry_type'] ?? '');
        $subj    = clean($_POST['subject'] ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "New Contact Message from $name";
        $body    = "Name:    $name\nPhone:   $phone\nEmail:   $email\nI am a:  $type\nSubject: $subj\n\nMessage:\n$message";
        break;

    case 'driver':
        $name  = clean($_POST['name']  ?? '');
        $phone = clean($_POST['phone'] ?? '');
        $city  = clean($_POST['city']  ?? '');
        $subject = "New Driver Registration — $name";
        $body    = "Name:  $name\nPhone: $phone\nCity:  $city";
        break;

    case 'enterprise':
        $name    = clean($_POST['name']    ?? '');
        $company = clean($_POST['company'] ?? '');
        $email   = clean($_POST['email']   ?? '');
        $fleet   = clean($_POST['fleet']   ?? '');
        $subject = "Enterprise Inquiry from $company";
        $body    = "Name:     $name\nCompany:  $company\nEmail:    $email\nFleet Size: $fleet";
        break;

    case 'franchise':
        $name    = clean($_POST['name']    ?? '');
        $phone   = clean($_POST['phone']   ?? '');
        $email   = clean($_POST['email']   ?? '');
        $city    = clean($_POST['city']    ?? '');
        $model   = clean($_POST['model']   ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "Franchise Application — $name ($model)";
        $body    = "Name:    $name\nPhone:   $phone\nEmail:   $email\nCity:    $city\nModel:   $model\n\nMessage:\n$message";
        break;

    case 'advertising':
        $name    = clean($_POST['name']    ?? '');
        $phone   = clean($_POST['phone']   ?? '');
        $email   = clean($_POST['email']   ?? '');
        $brand   = clean($_POST['brand']   ?? '');
        $format  = clean($_POST['format']  ?? '');
        $budget  = clean($_POST['budget']  ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "Advertising Enquiry from $brand";
        $body    = "Name:    $name\nPhone:   $phone\nEmail:   $email\nBrand:   $brand\nFormat:  $format\nBudget:  $budget\n\nCampaign Goal:\n$message";
        break;

    case 'evs_contact':
        $name    = clean($_POST['name']    ?? '');
        $phone   = clean($_POST['phone']   ?? '');
        $email   = clean($_POST['email']   ?? '');
        $type    = clean($_POST['inquiry_type'] ?? '');
        $message = clean($_POST['message'] ?? '');
        $subject = "Website Contact from $name";
        $body    = "Name:    $name\nPhone:   $phone\nEmail:   $email\nI am a:  $type\n\nMessage:\n$message";
        break;

    case 'support':
        $name       = clean($_POST['name']       ?? '');
        $phone      = clean($_POST['phone']      ?? '');
        $issueType  = clean($_POST['issue_type'] ?? '');
        $message    = clean($_POST['message']    ?? '');
        $subject    = "Rider Support Request — $issueType ($name)";
        $body       = "Name:       $name\nPhone:      $phone\nIssue Type: $issueType\n\nDescription:\n$message";
        break;

    case 'rent_ev':
        $name        = clean($_POST['name']         ?? '');
        $phone       = clean($_POST['phone']        ?? '');
        $email       = clean($_POST['email']        ?? '');
        $nid         = clean($_POST['nid']          ?? '');
        $gender      = clean($_POST['gender']       ?? '');
        $address     = clean($_POST['address']      ?? '');
        $vehicleType = clean($_POST['vehicle_type'] ?? 'Any');
        $rentalPlan  = clean($_POST['rental_plan']  ?? 'Not specified');
        $subject = "EV Rental Request — $name ($vehicleType)";
        $body    = "Name:         $name\nPhone:        $phone\nEmail:        $email\nNID:          $nid\nGender:       $gender\nAddress:      $address\nVehicle Type: $vehicleType\nRental Plan:  $rentalPlan";
        break;

    case 'partnership':
        $name            = clean($_POST['name']             ?? '');
        $company         = clean($_POST['company']          ?? '');
        $email           = clean($_POST['email']            ?? '');
        $partnershipType = clean($_POST['partnership_type'] ?? '');
        $message         = clean($_POST['message']          ?? '');
        $subject         = "Partnership Enquiry — $partnershipType ($company)";
        $body            = "Name:              $name\nCompany:           $company\nEmail:             $email\nPartnership Type:  $partnershipType\n\nMessage:\n$message";
        break;

    case 'join':
        $interestType = clean($_POST['interest_type'] ?? '');
        $name         = clean($_POST['name']          ?? '');
        $phone        = clean($_POST['phone']         ?? '');
        $email        = clean($_POST['email']         ?? '');
        $company      = clean($_POST['company']       ?? '');
        $city         = clean($_POST['city']           ?? '');
        $message      = clean($_POST['message']       ?? '');
        $subject      = "Join Us Application — $interestType ($name)";
        $body         = "Interest:  $interestType\nName:      $name\nPhone:     $phone\nEmail:     $email\nCompany:   $company\nCity:      $city\n\nMessage:\n$message";
        break;

    default:
        // Unknown form type — redirect back
        header('Location: ' . back_url('error'));
        exit;
}

// ── DEV MODE: Email disabled ──
$devMode = true;

// ── Save to file ──
// Stored OUTSIDE the public web folder so it can never be downloaded.
// On cPanel this is /home/<account>/ezygo-submissions (next to public_html).
$logDir = dirname(__DIR__) . '/ezygo-submissions';
if (!is_dir($logDir)) {
    mkdir($logDir, 0700, true);
}
$logFile = $logDir . '/' . date('Y-m-d') . '.log';
$logEntry = "\n" . str_repeat('=', 60) . "\n";
$logEntry .= "Time: " . date('Y-m-d H:i:s') . "\n";
$logEntry .= "Form: $formType\n";
$logEntry .= "Subject: $subject\n";
$logEntry .= str_repeat('-', 60) . "\n";
$logEntry .= $body . "\n";
file_put_contents($logFile, $logEntry, FILE_APPEND | LOCK_EX);

// ── Send email (only in production) ──
if (!$devMode) {
    $senderEmail = filter_var($_POST['email'] ?? '', FILTER_VALIDATE_EMAIL)
        ? $_POST['email']
        : 'noreply@ezygobd.com';
    $headers  = "From: EzygoBD Website <noreply@ezygobd.com>\r\n";
    $headers .= "Reply-To: $senderEmail\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    @mail($to, $subject, $body, $headers);
}

// ── Redirect back ──
header('Location: ' . back_url('success'));
exit;
