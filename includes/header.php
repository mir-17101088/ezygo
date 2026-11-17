<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');
$navOn = fn($p) => $currentPage === $p ? ' aria-current="page"' : '';
$megaOn = fn($p) => $currentPage === $p ? ' class="is-on" aria-current="page"' : '';
?>
  <a class="skip" href="#main">Skip to content</a>

  <!-- Intro: once per visit, CSS only -->
  <div class="intro" aria-hidden="true">
    <img src="assets/img/logo-480.webp" width="240" height="65" alt="">
    <span class="intro__bar"><span></span></span>
    <p class="intro__tag">Bangladesh First EV Network</p>
  </div>

  <header class="site-head<?= !empty($headLight) ? ' site-head--light' : '' ?>" id="top">
    <div class="site-head__in wrap">
      <a href="index.php" class="brand" aria-label="EzygoBD home">
        <picture><source type="image/webp" srcset="assets/img/logo-240.webp 1x, assets/img/logo-480.webp 2x"><img src="assets/img/logo-240.png" width="120" height="33" alt="EzygoBD"></picture>
        <span class="brand__tag">Ezygo Mobility Holdings Limited</span>
      </a>

      <nav class="nav" aria-label="Main">
        <a href="index.php#rent-ev">Rent an EV</a>
        <a href="evs.php"<?= $navOn('evs') ?>>Our EVs</a>
        <a href="services.php"<?= $navOn('services') ?>>Services</a>
        <a href="about.php"<?= $navOn('about') ?>>Our Story</a>
        <a href="contact.php"<?= $navOn('contact') ?>>Contact</a>
      </nav>

      <div class="site-head__act">
        <a href="index.php#rent-ev" class="btn btn--lime btn--sm site-head__cta">Book Now</a>
        <button class="icon-btn theme-btn" type="button" id="themeToggle" aria-label="Switch to dark mode" aria-pressed="false">
          <?= icon('moon') ?><?= icon('sun') ?>
        </button>
        <button class="icon-btn menu-btn" type="button" id="menuBtn" aria-label="Open menu" aria-expanded="false" aria-controls="megaMenu">
          <span class="menu-btn__lines"><span></span><span></span></span>
          <span class="menu-btn__txt">Menu</span>
        </button>
      </div>
    </div>
  </header>

  <!-- Full-screen menu -->
  <div class="mega" id="megaMenu" role="dialog" aria-modal="true" aria-label="Site menu" hidden>
    <div class="mega__in wrap">
      <div class="mega__top">
        <a href="index.php" class="mega__brand">
          <img src="assets/img/logo-240.webp" width="120" height="33" alt="EzygoBD">
          <span>Bangladesh First 2W EV Rental Fleet Platform</span>
        </a>
        <button class="icon-btn mega__close" type="button" id="megaClose" aria-label="Close menu"><?= icon('close') ?></button>
      </div>

      <div class="mega__cols">
        <div class="mega__col">
          <h3>Home</h3>
          <ul>
            <li><a href="index.php"<?= $megaOn('index') ?>>Home</a></li>
            <li><a href="index.php#rent-ev">Rent an EV</a></li>
            <li><a href="index.php#ev-specs">Vehicle Specs</a></li>
            <li><a href="evs.php#ezyfleet">EzyFleet</a></li>
          </ul>
        </div>
        <div class="mega__col">
          <h3>Our Story</h3>
          <ul>
            <li><a href="about.php"<?= $megaOn('about') ?>>About Us</a></li>
            <li><a href="about.php#certificates">Certificates</a></li>
            <li><a href="about.php#awards">Winning Awards</a></li>
          </ul>
        </div>
        <div class="mega__col">
          <h3 class="mega__ghost">Team</h3>
          <ul>
            <li><a href="team.php"<?= $megaOn('team') ?>>Team</a></li>
          </ul>
        </div>
        <div class="mega__col">
          <h3>Services</h3>
          <ul>
            <li><a href="services.php"<?= $megaOn('services') ?>>EV Rental Plans</a></li>
            <li><a href="services.php#delivery">Delivery Fleet</a></li>
            <li><a href="services.php#corporate">Corporate Fleet</a></li>
            <li><a href="services.php#rent-to-own">Rent to Own</a></li>
          </ul>
        </div>
        <div class="mega__col">
          <h3>Contact Us</h3>
          <ul>
            <li><a href="contact.php"<?= $megaOn('contact') ?>>Contact Us</a></li>
          </ul>
        </div>
        <div class="mega__col">
          <h3>Join Us</h3>
          <ul>
            <li><a href="join.php"<?= $megaOn('join') ?>>Join Us</a></li>
            <li><a href="join.php#franchise">Franchise (FOCO)</a></li>
            <li><a href="join.php#franchise">Franchise (FOFO)</a></li>
          </ul>
        </div>
      </div>

      <div class="mega__cards">
        <a href="index.php#rent-ev" class="mega__card"><?= icon('scooter') ?><span>Rent an EV</span><?= icon('arrow-ne') ?></a>
        <a href="services.php" class="mega__card"><?= icon('truck') ?><span>Delivery Fleet</span><?= icon('arrow-ne') ?></a>
        <a href="join.php#franchise" class="mega__card"><?= icon('crown') ?><span>Franchise</span><?= icon('arrow-ne') ?></a>
        <a href="contact.php" class="mega__card"><?= icon('support') ?><span>Contact Us</span><?= icon('arrow-ne') ?></a>
      </div>
    </div>
  </div>
