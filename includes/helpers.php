<?php
/* Shared helpers: icons, responsive pictures, contact details. */

/* Inline SVG icons on a 24px grid, one stroke weight. Decorative unless a label is passed. */
function icon(string $name, string $label = ''): string {
    static $p = [
        'menu'      => '<path d="M3.5 8h17M3.5 16h11"/>',
        'close'     => '<path d="M6 6l12 12M18 6L6 18"/>',
        'sun'       => '<circle cx="12" cy="12" r="4"/><path d="M12 2.5v2M12 19.5v2M4.6 4.6l1.4 1.4M18 18l1.4 1.4M2.5 12h2M19.5 12h2M4.6 19.4L6 18M18 6l1.4-1.4"/>',
        'moon'      => '<path d="M20 14.5A8 8 0 0 1 9.5 4a8 8 0 1 0 10.5 10.5z"/>',
        'arrow'     => '<path d="M4.5 12h15M13.5 6l6 6-6 6"/>',
        'arrow-up'  => '<path d="M12 19.5v-15M6 10.5l6-6 6 6"/>',
        'arrow-ne'  => '<path d="M7 17L17 7M8.5 7H17v8.5"/>',
        'chevron'   => '<path d="M6 9l6 6 6-6"/>',
        'plus'      => '<path d="M12 5v14M5 12h14"/>',
        'play'      => '<path d="M8 5.5v13l10.5-6.5L8 5.5z"/>',
        'bolt'      => '<path d="M13 2.5L4.5 13.5h6.5l-1 8 8.5-11h-6.5l1-8z"/>',
        'user'      => '<circle cx="12" cy="8" r="4"/><path d="M4 21a8 8 0 0 1 16 0"/>',
        'users'     => '<circle cx="9" cy="8" r="3.5"/><path d="M2.5 20a6.5 6.5 0 0 1 13 0M16 4.6a3.5 3.5 0 0 1 0 6.8M18 14a6.5 6.5 0 0 1 3.5 6"/>',
        'pin'       => '<path d="M12 21s-7-6.2-7-11.5a7 7 0 0 1 14 0C19 14.8 12 21 12 21z"/><circle cx="12" cy="9.5" r="2.5"/>',
        'leaf'      => '<path d="M5 19c0-8 5-14 15-14 0 10-6 15-14 15"/><path d="M5 19l8-8"/>',
        'wrench'    => '<path d="M14.7 6.3a4 4 0 0 0 5 5L11 20a2.1 2.1 0 0 1-3-3l8.7-8.7z"/><path d="M14.7 6.3a4 4 0 0 1 5-2.8l-2.6 2.6.4 2.2 2.2.4 2.6-2.6a4 4 0 0 1-2.8 5"/>',
        'chart'     => '<path d="M3.5 20.5h17M5 16l4.5-5 4 3L20 6.5"/><path d="M15.5 6.5H20V11"/>',
        'bars'      => '<path d="M4 20.5h16M6.5 17V11M11 17V6M15.5 17v-8M20 17v-4"/>',
        'shield'    => '<path d="M12 3l8 3v6c0 4.5-3.4 8.3-8 9-4.6-.7-8-4.5-8-9V6l8-3z"/><path d="M8.5 12l2.5 2.5 4.5-5"/>',
        'taka'      => '<circle cx="12" cy="12" r="9"/><path d="M8.5 8.5h1.7c.6 0 1 .4 1 1v6a1.5 1.5 0 0 0 3 0V14M8 11.5h6"/>',
        'support'   => '<path d="M4 13v-1a8 8 0 0 1 16 0v1"/><rect x="3" y="13" width="4" height="6" rx="1.5"/><rect x="17" y="13" width="4" height="6" rx="1.5"/><path d="M19 19c0 1.5-2 2.5-5 2.5"/>',
        'folder'    => '<path d="M3 7.5V18a1.5 1.5 0 0 0 1.5 1.5h15A1.5 1.5 0 0 0 21 18V9.5A1.5 1.5 0 0 0 19.5 8H12l-2-2.5H4.5A1.5 1.5 0 0 0 3 7z"/>',
        'id'        => '<rect x="2.5" y="5" width="19" height="14" rx="2"/><circle cx="8.5" cy="11" r="2"/><path d="M5.5 16a3 3 0 0 1 6 0M14 10h4.5M14 13.5h3"/>',
        'camera'    => '<path d="M4 8h3l1.5-2.5h7L17 8h3a1 1 0 0 1 1 1v9.5a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/><circle cx="12" cy="13" r="3.5"/>',
        'family'    => '<circle cx="7.5" cy="7" r="2.5"/><circle cx="16.5" cy="7" r="2.5"/><path d="M3 19v-3.5a4.5 4.5 0 0 1 9 0M12 15.5a4.5 4.5 0 0 1 9 0V19"/>',
        'bill'      => '<path d="M6 2.5h12v19l-3-2-3 2-3-2-3 2v-19z"/><path d="M9 7.5h6M9 11h6M9 14.5h3.5"/>',
        'mobile'    => '<rect x="6.5" y="2.5" width="11" height="19" rx="2.5"/><path d="M10.5 18.5h3"/>',
        'scooter'   => '<circle cx="5.5" cy="17" r="2.5"/><circle cx="18.5" cy="17" r="2.5"/><path d="M8 17h7.5l3-6.5H21M15 4.5h2l1.5 6M5.5 14.5l2-4h6"/>',
        'info'      => '<circle cx="12" cy="12" r="9"/><path d="M12 11v5.5M12 7.8v.1"/>',
        'send'      => '<path d="M21 3L10 14M21 3l-6.5 18-4.5-7-7-4.5L21 3z"/>',
        'star'      => '<path d="M12 3.5l2.6 5.3 5.9.9-4.2 4.1 1 5.8L12 16.9l-5.3 2.7 1-5.8-4.2-4.1 5.9-.9L12 3.5z"/>',
        'chip'      => '<rect x="6" y="6" width="12" height="12" rx="2"/><rect x="9.5" y="9.5" width="5" height="5" rx=".5"/><path d="M9.5 2.5V6M14.5 2.5V6M9.5 18v3.5M14.5 18v3.5M2.5 9.5H6M2.5 14.5H6M18 9.5h3.5M18 14.5h3.5"/>',
        'check'     => '<path d="M5 12.5l4.5 4.5L19 7.5"/>',
        'check-c'   => '<circle cx="12" cy="12" r="9"/><path d="M8 12.3l2.7 2.7L16 9.5"/>',
        'mail'      => '<rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3.5 7l8.5 6 8.5-6"/>',
        'phone'     => '<path d="M5 4h4l2 5-2.5 1.5a11 11 0 0 0 5 5L15 13l5 2v4a2 2 0 0 1-2 2A16 16 0 0 1 3 6a2 2 0 0 1 2-2z"/>',
        'clock'     => '<circle cx="12" cy="12" r="9"/><path d="M12 7v5l3 2"/>',
        'road'      => '<path d="M6 21L9 3M18 21L15 3M12 4v2.5M12 10.5v3M12 17.5V20"/>',
        'gauge'     => '<path d="M4 16a8 8 0 1 1 16 0"/><path d="M12 16l4-5"/><circle cx="12" cy="16" r="1"/>',
        'weight'    => '<path d="M6.5 8h11l2.5 12.5H4L6.5 8z"/><circle cx="12" cy="5.5" r="2.5"/>',
        'battery'   => '<rect x="2.5" y="7" width="17" height="10" rx="2"/><path d="M21.5 10.5v3M6 10v4M9.5 10v4M13 10v4"/>',
        'plug'      => '<path d="M9 2.5v5M15 2.5v5M6.5 7.5h11V11a5.5 5.5 0 0 1-11 0V7.5zM12 16.5v5"/>',
        'truck'     => '<path d="M2.5 6h11v10h-11zM13.5 9.5h4l3 3.5V16h-7"/><circle cx="6.5" cy="17.5" r="2"/><circle cx="17" cy="17.5" r="2"/>',
        'crown'     => '<path d="M3.5 8l4.5 4 4-6.5 4 6.5 4.5-4-1.5 10.5h-14L3.5 8z"/><path d="M5.5 21h13"/>',
        'map'       => '<path d="M9 4.5L3.5 6.5v13L9 17.5l6 2 5.5-2v-13L15 6.5l-6-2zM9 4.5v13M15 6.5v13"/>',
        'bell'      => '<path d="M6 16.5V11a6 6 0 0 1 12 0v5.5l1.5 2h-15L6 16.5zM10 21h4"/>',
        'team'      => '<circle cx="12" cy="7.5" r="3"/><circle cx="5" cy="10" r="2"/><circle cx="19" cy="10" r="2"/><path d="M6.5 20a5.5 5.5 0 0 1 11 0M1.5 18a3.5 3.5 0 0 1 4.5-3.3M22.5 18a3.5 3.5 0 0 0-4.5-3.3"/>',
        'satellite' => '<path d="M4 20a9 9 0 0 1 0-9M8 20a5 5 0 0 1 0-5"/><path d="M13 4l7 7-3 3-7-7 3-3zM14 13l-3.5 3.5"/>',
        'signal'    => '<path d="M4 20v-3M9 20v-7M14 20V9M19 20V4"/>',
        'lock'      => '<rect x="4.5" y="10.5" width="15" height="10" rx="2"/><path d="M8 10.5V7.5a4 4 0 0 1 8 0v3"/>',
        'rotate'    => '<path d="M20 11.5A8 8 0 0 0 5.6 7M4 12.5A8 8 0 0 0 18.4 17"/><path d="M5 3v4.5h4.5M19 21v-4.5h-4.5"/>',
        'box'       => '<path d="M3.5 7.5L12 3l8.5 4.5v9L12 21l-8.5-4.5v-9z"/><path d="M3.5 7.5L12 12l8.5-4.5M12 12v9"/>',
        'card'      => '<rect x="2.5" y="5" width="19" height="14" rx="2"/><path d="M2.5 9.5h19M6 15h4"/>',
        'download'  => '<path d="M12 3.5v12M7 10.5l5 5 5-5M4 20.5h16"/>',
        'qr'        => '<rect x="4" y="4" width="6" height="6" rx="1"/><rect x="14" y="4" width="6" height="6" rx="1"/><rect x="4" y="14" width="6" height="6" rx="1"/><path d="M14 14h2v2h-2zM18 18h2v2h-2zM14 18v2M18 14h2"/>',
        'quote'     => '<path d="M10 7H6.5A2.5 2.5 0 0 0 4 9.5V12h5v5H4v-5M20 7h-3.5A2.5 2.5 0 0 0 14 9.5V12h5v5h-5v-5"/>',
        'building'  => '<path d="M5 21V5a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1v16M15 10h3a1 1 0 0 1 1 1v10M3 21h18M8.5 8h3M8.5 12h3M8.5 16h3"/>',
        'globe'     => '<circle cx="12" cy="12" r="9"/><path d="M3 12h18M12 3c2.5 2.7 3.5 5.7 3.5 9s-1 6.3-3.5 9c-2.5-2.7-3.5-5.7-3.5-9s1-6.3 3.5-9z"/>',
        'route'     => '<circle cx="6" cy="18" r="2.5"/><circle cx="18" cy="6" r="2.5"/><path d="M8.5 18H16a3 3 0 0 0 0-6H8a3 3 0 0 1 0-6h7.5"/>',
        'sun-up'    => '<path d="M4 18a8 8 0 0 1 16 0M2 21.5h20M12 3v3M4.5 7.5l2 2M19.5 7.5l-2 2"/>',
        'eye'       => '<path d="M2.5 12S6 5 12 5s9.5 7 9.5 7-3.5 7-9.5 7-9.5-7-9.5-7z"/><circle cx="12" cy="12" r="3"/>',
        'megaphone' => '<path d="M3.5 10v4a1 1 0 0 0 1 1H7l9 5V4L7 9H4.5a1 1 0 0 0-1 1zM7 15l1.5 5.5M19.5 9.5a3.5 3.5 0 0 1 0 5"/>',
        'handshake' => '<path d="M2.5 11.5l4-4 3 1 3-2 4 1.5 5 3.5M2.5 11.5l3 3M21.5 11l-3.5 3.5M8.5 13.5l3 3a1.4 1.4 0 0 0 2-2M11 12l3.5 3.5a1.4 1.4 0 0 0 2-2L14 11"/>',
        'award'     => '<circle cx="12" cy="9" r="6"/><path d="M8.5 13.8L7 21.5l5-3 5 3-1.5-7.7"/>',
        'doc'       => '<path d="M7 3h7l5 5v13H7z"/><path d="M14 3v5h5M10 13h6M10 17h6"/>',
        'x'         => '<path d="M4 4l16 16M20 4L4 20"/>',
        'cert'      => '<rect x="3" y="3.5" width="18" height="13" rx="1.5"/><path d="M7 8h10M7 11.5h6"/><circle cx="16.5" cy="16" r="2.5"/><path d="M15 18l-.5 3.5 2-1 2 1-.5-3.5"/>',
        'video'     => '<rect x="2.5" y="6" width="13.5" height="12" rx="2"/><path d="M16 10.5l5.5-3v9l-5.5-3"/>',
        'news'      => '<path d="M4 4.5h13v15a1.5 1.5 0 0 1-1.5 1.5H5.5A1.5 1.5 0 0 1 4 19.5v-15zM17 8.5h3v11a1.5 1.5 0 0 1-3 0"/><path d="M7.5 8.5h6M7.5 12h6M7.5 15.5h4"/>',
        'book'      => '<path d="M4 4.5A1.5 1.5 0 0 1 5.5 3H20v15H5.5A1.5 1.5 0 0 0 4 19.5v-15zM4 19.5A1.5 1.5 0 0 0 5.5 21H20"/>',
        'briefcase' => '<rect x="3" y="7" width="18" height="13" rx="2"/><path d="M8.5 7V5a1.5 1.5 0 0 1 1.5-1.5h4A1.5 1.5 0 0 1 15.5 5v2M3 12.5h18"/>',
        'code'      => '<path d="M8.5 7L3.5 12l5 5M15.5 7l5 5-5 5M13.5 4.5l-3 15"/>',
        'target'    => '<circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1"/>',
        'cart'      => '<path d="M3 4h2.5l2 11.5h11L21 7.5H7"/><circle cx="9" cy="19.5" r="1.5"/><circle cx="17.5" cy="19.5" r="1.5"/>',
        'coins'     => '<ellipse cx="9" cy="7" rx="6" ry="2.5"/><path d="M3 7v4.5C3 12.9 5.7 14 9 14s6-1.1 6-2.5V7M3 11.5V16c0 1.4 2.7 2.5 6 2.5"/><ellipse cx="15" cy="15" rx="6" ry="2.5"/><path d="M9 15v4.5c0 1.4 2.7 2.5 6 2.5s6-1.1 6-2.5V15"/>',
        'home'      => '<path d="M3.5 11L12 4l8.5 7M5.5 9.5V20h13V9.5M10 20v-5.5h4V20"/>',
        'station'   => '<rect x="4" y="3" width="10" height="18" rx="1.5"/><path d="M4 21h10M14 9.5h2.5a1.5 1.5 0 0 1 1.5 1.5v5a1.5 1.5 0 0 0 3 0V8l-2.5-3M9.5 7.5l-2 3.5h3l-2 3.5"/>',
        'sparkle'   => '<path d="M12 3c.6 4.3 2.7 6.4 7 7-4.3.6-6.4 2.7-7 7-.6-4.3-2.7-6.4-7-7 4.3-.6 6.4-2.7 7-7zM19 16c.3 1.6 1 2.3 2.5 2.5-1.6.3-2.3 1-2.5 2.5-.3-1.6-1-2.3-2.5-2.5 1.6-.3 2.3-1 2.5-2.5z"/>',
        'whatsapp'  => '<path d="M3.5 20.5l1.3-4.3A8.5 8.5 0 1 1 8 19.4l-4.5 1.1z"/><path d="M9 8.5c-.3 0-.8.4-.8 1.3 0 2.2 2.8 5.5 5.8 5.8 1 .1 1.5-.6 1.5-1l-.1-.6-1.8-.8-.9 1c-1.2-.5-2.3-1.5-2.8-2.7l.9-.9-.7-1.9-1.1-.2z"/>',
        'facebook'  => '<path d="M14 8h3V4h-3a4 4 0 0 0-4 4v2H7v4h3v7h4v-7h3l1-4h-4V8z"/>',
        'instagram' => '<rect x="3.5" y="3.5" width="17" height="17" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r=".6" fill="currentColor"/>',
        'linkedin'  => '<rect x="3.5" y="3.5" width="17" height="17" rx="3"/><path d="M8 10.5V16M8 7.8v.1M11.5 16v-3.2a2.3 2.3 0 0 1 4.6 0V16M11.5 10.5V16"/>',
        'youtube'   => '<rect x="2.5" y="5.5" width="19" height="13" rx="4"/><path d="M10 9v6l5-3-5-3z"/>',
        'android'   => '<path d="M5 10.5h14V18a1.5 1.5 0 0 1-1.5 1.5h-11A1.5 1.5 0 0 1 5 18v-7.5zM5 10.5a7 7 0 0 1 14 0M8 4.5l1.5 2.2M16 4.5l-1.5 2.2"/>',
        'apple'     => '<path d="M15.5 3c0 1.7-1.3 3.2-3 3.3-.2-1.6 1.3-3.2 3-3.3zM17.5 12.4c0-2 1.6-3 1.7-3a3.8 3.8 0 0 0-3-1.6c-1.3-.1-2.5.8-3.2.8-.7 0-1.7-.7-2.8-.7a4.2 4.2 0 0 0-3.5 2.1c-1.5 2.6-.4 6.5 1.1 8.6.7 1 1.5 2.2 2.6 2.1 1-.1 1.4-.7 2.7-.7s1.6.7 2.7.6c1.1 0 1.8-1 2.5-2a8 8 0 0 0 1.1-2.4 3.5 3.5 0 0 1-1.9-3.8z"/>',
        'gplay'     => '<path d="M4.5 3.5l11 8.5-11 8.5V3.5zM4.5 3.5L18.5 10a2.2 2.2 0 0 1 0 4l-14 6.5M4.5 3.5l11 8.5"/>',
    ];
    $aria = $label !== '' ? 'role="img" aria-label="' . htmlspecialchars($label) . '"' : 'aria-hidden="true" focusable="false"';
    return '<svg class="ic" viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round" ' . $aria . '>' . ($p[$name] ?? '') . '</svg>';
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

/* Any image with AVIF + WebP files at the listed widths: assets/img/{base}-{w}.{ext} */
function pic(string $base, array $widths, int $w, int $h, string $alt, string $sizes, string $class = ''): string {
    $set = fn($ext) => implode(', ', array_map(fn($x) => "assets/img/$base-$x.$ext {$x}w", $widths));
    return '<picture' . ($class ? ' class="' . $class . '"' : '') . '>'
        . '<source type="image/avif" srcset="' . $set('avif') . '" sizes="' . $sizes . '">'
        . '<source type="image/webp" srcset="' . $set('webp') . '" sizes="' . $sizes . '">'
        . '<img src="assets/img/' . $base . '-' . $widths[0] . '.webp" width="' . $w . '" height="' . $h . '" alt="' . htmlspecialchars($alt) . '" loading="lazy" decoding="async">'
        . '</picture>';
}

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

/* Background video used by the page heroes. Pauses off-screen; poster only for reduced motion / Save-Data (site.js). */
function hero_video(string $class = 'hero__video'): string {
    return '<video class="' . $class . '" muted loop playsinline preload="none" aria-hidden="true" tabindex="-1" poster="assets/video/ezygo-hero-poster.webp" data-autoplay>'
        . '<source src="assets/video/ezygo-hero-480.mp4" type="video/mp4" media="(max-width: 640px)">'
        . '<source src="assets/video/ezygo-hero-720.mp4" type="video/mp4">'
        . '</video>';
}

/* Count-up number: the real figure is in the HTML; site.js animates it on first view. */
function num(string $value): string {
    return '<span class="countup" data-count="' . htmlspecialchars($value) . '">' . htmlspecialchars($value) . '</span>';
}

/* Optional links from includes/config.php ('links'). */
function site_link(string $key): string {
    static $links = null;
    if ($links === null) { $c = require __DIR__ . '/config.php'; $links = $c['links'] ?? []; }
    return trim((string) ($links[$key] ?? ''));
}
/* Icon-only social link: hidden until a real address is set. */
function social(string $key, string $ic, string $label): string {
    $u = site_link($key);
    if ($u === '') return '';
    $ext = preg_match('#^https?://#', $u);
    return '<a href="' . htmlspecialchars($u) . '" aria-label="' . htmlspecialchars($label) . '"' . ($ext ? ' target="_blank" rel="noopener noreferrer"' : '') . '>' . icon($ic) . '</a>';
}
/* Text link or card: a real link when set, otherwise a "Coming soon" label (no dead click). */
function soon(string $key, string $inner, string $class): string {
    $u = site_link($key);
    if ($u !== '') {
        $ext = preg_match('#^https?://#', $u);
        return '<a href="' . htmlspecialchars($u) . '" class="' . $class . '"' . ($ext ? ' target="_blank" rel="noopener noreferrer"' : '') . '>' . $inner . '</a>';
    }
    return '<span class="' . $class . ' is-soon" aria-disabled="true">' . $inner . '<small class="soon">Coming soon</small></span>';
}

/* Spam guard for every form: a hidden honeypot field and the time the page was served. */
function form_guard(): string {
    return '<div class="hp" aria-hidden="true"><label for="hp-' . ($GLOBALS['__hp'] = ($GLOBALS['__hp'] ?? 0) + 1) . '">Leave this empty</label>'
        . '<input type="text" id="hp-' . $GLOBALS['__hp'] . '" name="website" tabindex="-1" autocomplete="off"></div>'
        . '<input type="hidden" name="_t" value="' . time() . '">';
}
