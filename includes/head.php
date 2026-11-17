<?php
require_once __DIR__ . '/helpers.php';
$siteUrl   = 'https://www.ezygobd.com';
$pageTitle = $pageTitle ?? "EzygoBD — Bangladesh's #1 EV Rental Network";
$pageDesc  = $pageDesc  ?? 'Efficient, eco-friendly, and affordable electric vehicle rentals across Bangladesh.';
$canonical = $siteUrl . '/' . ($pagePath ?? '');
$cssVer    = '3.1';
?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
  <title><?= htmlspecialchars($pageTitle) ?></title>
  <meta name="description" content="<?= htmlspecialchars($pageDesc) ?>">
  <link rel="canonical" href="<?= $canonical ?>">
  <meta name="color-scheme" content="light dark">
  <meta name="theme-color" content="#0C120E">

  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/icon-32.png">
  <link rel="apple-touch-icon" href="assets/img/icon-180.png">

  <meta property="og:type" content="website">
  <meta property="og:site_name" content="EzygoBD">
  <meta property="og:locale" content="en_US">
  <meta property="og:url" content="<?= $canonical ?>">
  <meta property="og:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta property="og:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta property="og:image" content="<?= $siteUrl ?>/assets/img/og-cover.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="EzygoBD — Bangladesh First 2W EV Rental Fleet Platform">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= htmlspecialchars($pageTitle) ?>">
  <meta name="twitter:description" content="<?= htmlspecialchars($pageDesc) ?>">
  <meta name="twitter:image" content="<?= $siteUrl ?>/assets/img/og-cover.jpg">

  <!-- Theme before paint (saved choice, else device setting); intro only once per visit -->
  <script>(function(d){var e=d.documentElement;e.className+=' js';setTimeout(function(){if(!window.ezygoReady)e.className=e.className.replace(' js','')},4000);try{var t=localStorage.getItem('ezygo-theme');if(t==='dark'||t==='light')e.setAttribute('data-theme',t);if(sessionStorage.getItem('ezygo-intro'))e.className+=' seen';sessionStorage.setItem('ezygo-intro','1')}catch(x){}})(document)</script>
  <link rel="preload" href="assets/fonts/cabinet-800.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="assets/fonts/satoshi-400.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="assets/css/site.css?v=<?= $cssVer ?>">
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "LocalBusiness",
    "name": "EzygoBD",
    "legalName": "Ezygo Mobility Holdings Limited",
    "url": "<?= $siteUrl ?>/",
    "logo": "<?= $siteUrl ?>/assets/img/logo-480.png",
    "image": "<?= $siteUrl ?>/assets/img/og-cover.jpg",
    "description": "Bangladesh First 2W EV Rental Fleet Platform: electric scooter and e-bike rental, delivery fleets, franchise and advertising.",
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
