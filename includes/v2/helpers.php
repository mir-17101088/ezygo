<?php
/* Shared helpers for the redesigned pages. */

/* Inline SVG icons (stroke style, 24px grid). Decorative unless a label is passed. */
function icon(string $name, string $label = ''): string {
    $p = [
        'menu'      => '<path d="M4 7h16M4 12h16M4 17h16"/>',
        'close'     => '<path d="M6 6l12 12M18 6L6 18"/>',
        'sun'       => '<circle cx="12" cy="12" r="4"/><path d="M12 2v2M12 20v2M4.9 4.9l1.4 1.4M17.7 17.7l1.4 1.4M2 12h2M20 12h2M4.9 19.1l1.4-1.4M17.7 6.3l1.4-1.4"/>',
        'moon'      => '<path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/>',
        'shield'    => '<path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M8.5 12l2.5 2.5 4.5-5"/>',
        'support'   => '<path d="M4 13v-1a8 8 0 0 1 16 0v1"/><rect x="3" y="13" width="4" height="6" rx="1.5"/><rect x="17" y="13" width="4" height="6" rx="1.5"/><path d="M19 19c0 1.5-2 2.5-5 2.5"/>',
        'clock'     => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'pin'       => '<path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/>',
        'phone'     => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/>',
        'mail'      => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3 7l9 6 9-6"/>',
        'check'     => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
        'chevron'   => '<path d="M6 9l6 6 6-6"/>',
        'doc'       => '<path d="M7 3h7l5 5v13H7z"/><path d="M14 3v5h5M10 13h6M10 17h6"/>',
        'whatsapp'  => '<path d="M4 20l1.3-4A8 8 0 1 1 8.4 19z"/><path d="M9 9.5c0 3 2.5 5.5 5.5 5.5l1.2-1.4-2-1-1 .9c-1-.5-1.7-1.2-2.2-2.2l.9-1-1-2z"/>',
        'facebook'  => '<path d="M14 8h3V4h-3a4 4 0 0 0-4 4v2H7v4h3v7h4v-7h3l1-4h-4V8z"/>',
        'instagram' => '<rect x="3.5" y="3.5" width="17" height="17" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".6" fill="currentColor"/>',
        'bolt'      => '<path d="M13 3L5 13.5h6L10 21l8-10.5h-6L13 3z"/>',
        'chart'     => '<path d="M4 20V4M4 20h16M8 16v-4M12 16V8M16 16v-6"/>',
        'wrench'    => '<path d="M14.5 6.5a4 4 0 0 0 5 5L12 19a2.1 2.1 0 0 1-3-3l7.5-7.5a4 4 0 0 0-2-2z" transform="translate(-2 0)"/>',
        'users'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0M16 4.6a3.5 3.5 0 0 1 0 6.8M18 14a6.5 6.5 0 0 1 3.5 6"/>',
        'leaf'      => '<path d="M5 19c0-8 5-14 15-14 0 10-6 15-14 15"/><path d="M5 19l8-8"/>',
        'qr'        => '<rect x="4" y="4" width="6" height="6" rx="1"/><rect x="14" y="4" width="6" height="6" rx="1"/><rect x="4" y="14" width="6" height="6" rx="1"/><path d="M14 14h2v2h-2zM18 18h2v2h-2zM14 18v2M18 14h2"/>',
        'route'     => '<circle cx="6" cy="18" r="2.5"/><circle cx="18" cy="6" r="2.5"/><path d="M8.5 18H16a3 3 0 0 0 0-6H8a3 3 0 0 1 0-6h7.5"/>',
        'building'  => '<path d="M5 21V5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16M15 10h3a1 1 0 0 1 1 1v10M3 21h18M8.5 8h3M8.5 12h3M8.5 16h3"/>',
        'linkedin'  => '<rect x="3.5" y="3.5" width="17" height="17" rx="3"/><path d="M8 10.5V16M8 7.8v.1M11.5 16v-3.2a2.3 2.3 0 0 1 4.6 0V16M11.5 10.5V16"/>',
    ];
    $aria = $label !== '' ? 'role="img" aria-label="' . htmlspecialchars($label) . '"' : 'aria-hidden="true" focusable="false"';
    return '<svg class="ic" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" ' . $aria . '>' . ($p[$name] ?? '') . '</svg>';
}

/* Responsive bike photo: AVIF + WebP at 480/800/1200, explicit size, lazy by default. */
function bike_pic(string $slug, string $alt, string $sizes, bool $eager = false): string {
    $h = ['sparky' => 1102, 'eco-ride' => 1096, 'em1' => 1067][$slug] ?? 1067;
    $set = fn($ext) => "assets/img/$slug-480.$ext 480w, assets/img/$slug-800.$ext 800w, assets/img/$slug-1200.$ext 1200w";
    $load = $eager ? 'fetchpriority="high"' : 'loading="lazy" decoding="async"';
    return '<picture>'
        . '<source type="image/avif" srcset="' . $set('avif') . '" sizes="' . $sizes . '">'
        . '<source type="image/webp" srcset="' . $set('webp') . '" sizes="' . $sizes . '">'
        . '<img src="assets/img/' . $slug . '-800.webp" width="800" height="' . $h . '" alt="' . htmlspecialchars($alt) . '" ' . $load . '>'
        . '</picture>';
}

/* The rental fleet. Copy and figures come from the existing site. */
$BIKES = [
    'sparky' => [
        'name' => 'Sparky', 'line' => 'High-performance electric scooter',
        'range' => '120 km+', 'speed' => '70 km/h', 'charge' => '3–3.5 h',
        'payload' => '300 kg', 'battery' => 'Lithium / graphene', 'motor' => null,
        'price' => 'Ask for price',
    ],
    'eco-ride' => [
        'name' => 'Eco Ride', 'line' => 'Eco-friendly electric bike',
        'range' => '90 km+', 'speed' => '60 km/h', 'charge' => '5–5.5 h',
        'payload' => '300 kg', 'battery' => 'Graphene', 'motor' => null,
        'price' => 'Ask for price',
    ],
    'em1' => [
        'name' => 'EM1', 'line' => 'Compact electric bike for daily use',
        'range' => '80 km+', 'speed' => '40 km/h', 'charge' => '4–5 h',
        'payload' => '150 kg', 'battery' => 'Graphene', 'motor' => '1000 W',
        'price' => 'Tk 299 / day',
    ],
];

/* Team portrait (4:5). Widths are what the source photo allows. */
function team_pic(string $slug, string $alt): string {
    $w = ['sazzatul' => [400, 444], 'evan' => [400, 800], 'jinia' => [400, 800]][$slug];
    $set = fn($ext) => implode(', ', array_map(fn($x) => "assets/img/team-$slug-$x.$ext {$x}w", $w));
    $sizes = '(min-width: 1000px) 30vw, (min-width: 640px) 45vw, 100vw';
    return '<picture>'
        . '<source type="image/avif" srcset="' . $set('avif') . '" sizes="' . $sizes . '">'
        . '<source type="image/webp" srcset="' . $set('webp') . '" sizes="' . $sizes . '">'
        . '<img src="assets/img/team-' . $slug . '-400.webp" width="400" height="500" alt="' . htmlspecialchars($alt) . '" loading="lazy" decoding="async">'
        . '</picture>';
}

/* Contact details used across pages */
$PHONE = ['01828-721222', '+8801828721222'];
$PHONE2 = ['01576-597666', '+8801576597666'];
$ADDRESS = 'Plot 34, 7th Floor, Sonargaon Janapath Road, Dhaka';
