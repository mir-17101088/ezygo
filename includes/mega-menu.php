<?php
// Build active class helper — $currentPage comes from header.php
$_mp = isset($currentPage) ? $currentPage : '';
function megaActive($page) { global $_mp; return ($_mp === $page) ? ' mega-active' : ''; }
?>
  <div class="mega-menu" id="megaMenu" aria-hidden="true">
  <div class="mega-menu-inner">
    <div class="mega-top">
      <a href="index.php" class="mega-logo">
        <div class="logo-emblem"><i class="fa-solid fa-bolt"></i></div>
        <div class="logo-wordmark">
          <span class="logo-main">EZYGO</span>
          <span class="logo-tagline">Bangladesh First 2W EV Rental Fleet Platform</span>
        </div>
      </a>
      <button class="mega-close" id="megaClose" aria-label="Close menu"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="mega-body">

      <div class="mega-col">
        <h3 class="mega-col-title mega-col-title--green">Home</h3>
        <ul>
          <li><a href="index.php" class="<?= megaActive('index') ?>">Home</a></li>
          <li><a href="index.php#rent-ev">Rent an EV</a></li>
          <li><a href="index.php#ev-specs">Vehicle Specs</a></li>
          <li><a href="index.php#ezyfleet">EzyFleet</a></li>
        </ul>
      </div>

      <div class="mega-col">
        <h3 class="mega-col-title mega-col-title--dark">Our Story</h3>
        <ul>
          <li><a href="about.php" class="<?= megaActive('about') ?>">About Us</a></li>
          <li><a href="about.php#certificates">Certificates</a></li>
          <li><a href="about.php#awards">Winning Awards</a></li>
        </ul>
      </div>

      <div class="mega-col">
        <!-- <h3 class="mega-col-title mega-col-title--blue">Team</h3> -->
        <ul>
          <li><a href="team.php" class="<?= megaActive('team') ?>">Team</a></li>
        </ul>
      </div>

      <div class="mega-col">
        <h3 class="mega-col-title mega-col-title--orange">Services</h3>
        <ul>
          <li><a href="services.php" class="<?= megaActive('services') ?>">EV Rental Plans</a></li>
          <li><a href="services.php#delivery">Delivery Fleet</a></li>
          <li><a href="services.php#corporate">Corporate Fleet</a></li>
          <li><a href="services.php#rent-to-own">Rent to Own</a></li>
        </ul>
      </div>

      <div class="mega-col">
        <h3 class="mega-col-title mega-col-title--green">Contact Us</h3>
        <ul>
          <li><a href="contact.php" class="<?= megaActive('contact') ?>">Contact Us</a></li>
        </ul>
      </div>

      <div class="mega-col">
        <h3 class="mega-col-title mega-col-title--orange">Join Us</h3>
        <ul>
          <li><a href="join.php" class="<?= megaActive('join') ?>">Join Us</a></li>
          <li><a href="join.php#franchise">Franchise (FOCO)</a></li>
          <li><a href="join.php#franchise">Franchise (FOFO)</a></li>
        </ul>
      </div>

    </div>

    <div class="mega-bottom">
      <div class="mega-cards">
        <a href="index.php#rent-ev" class="mega-svc-card">
          <div class="mega-card-img"><i class="fa-solid fa-motorcycle"></i></div>
          <span class="mega-svc-label">Rent an EV</span>
        </a>
        <a href="services.php" class="mega-svc-card">
          <div class="mega-card-img"><i class="fa-solid fa-truck-fast"></i></div>
          <span class="mega-svc-label">Delivery Fleet</span>
        </a>
        <a href="join.php#franchise" class="mega-svc-card">
          <div class="mega-card-img"><i class="fa-solid fa-crown"></i></div>
          <span class="mega-svc-label">Franchise</span>
        </a>
        <a href="contact.php" class="mega-svc-card">
          <div class="mega-card-img"><i class="fa-solid fa-headset"></i></div>
          <span class="mega-svc-label">Contact Us</span>
        </a>
      </div>
    </div>
  </div><!-- /.mega-menu-inner -->
  </div><!-- /.mega-menu -->
