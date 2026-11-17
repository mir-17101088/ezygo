<?php
require_once __DIR__ . '/helpers.php';
$siteUrl   = 'https://www.ezygobd.com';
$pageTitle = $pageTitle ?? 'Ezygo — Electric bike rental in Bangladesh';
$pageDesc  = $pageDesc  ?? 'Rent an electric scooter or e-bike by the day, week or month from Tk 299 a day. Insurance and 24/7 rider support included.';
$canonical = $siteUrl . '/' . ($pagePath ?? '');
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <link rel="canonical" href="<?= $canonical ?>">
  <meta name="color-scheme" content="light dark">
  <meta name="theme-color" content="#F3F4F6" media="(prefers-color-scheme: light)">
  <meta name="theme-color" content="#141518" media="(prefers-color-scheme: dark)">

  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon-32.png">
  <link rel="apple-touch-icon" href="assets/img/icon-180.png">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="Ezygo">
  <meta property="og:url" content="<?= $canonical ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:image" content="<?= $siteUrl ?>/assets/img/og-cover.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="twitter:image" content="<?= $siteUrl ?>/assets/img/og-cover.jpg">

  <!-- Set the theme before paint: saved choice, else the device setting -->
  <script>try{var t=localStorage.getItem('ezygo-theme');if(t==='dark'||t==='light')document.documentElement.setAttribute('data-theme',t)}catch(e){}</script>
  <link rel="preload" href="assets/fonts/archivo-var.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="assets/css/v2.css?v=2">
<?php if (!empty($preloadImg)): ?>
  <link rel="preload" as="image" type="image/avif" imagesrcset="<?= $preloadImg ?>" imagesizes="<?= $preloadSizes ?? '100vw' ?>">
<?php endif; ?>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "Ezygo",
    "legalName": "Ezygo Mobility Holdings Limited",
    "url": "<?= $siteUrl ?>/",
    "logo": "<?= $siteUrl ?>/assets/img/logo-480.png",
    "image": "<?= $siteUrl ?>/assets/img/og-cover.jpg",
    "description": "Electric scooter and e-bike rental in Bangladesh, from Tk 299 a day.",
    "telephone": "+8801828721222",
    "email": "hello@ezygobd.com",
    "priceRange": "Tk 299+ per day",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Plot 34, 7th Floor, Sonargaon Janapath Road",
      "addressLocality": "Dhaka",
      "addressCountry": "BD"
    },
    "sameAs": [
      "https://www.facebook.com/share/198cbcDwWD/",
      "https://www.instagram.com/rent_ezygo",
      "https://www.linkedin.com/company/ezygo-mobility-holdings-limited/"
    ]
  }
  </script>
