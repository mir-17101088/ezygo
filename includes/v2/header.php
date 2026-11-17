<?php $cur = basename($_SERVER['SCRIPT_NAME'], '.php'); ?>
  <a class="skip" href="#main">Skip to content</a>
  <header class="site-header">
    <div class="wrap bar">
      <a class="brand" href="index.php" aria-label="Ezygo home">
        <picture><source type="image/webp" srcset="assets/img/logo-240.webp 1x, assets/img/logo-480.webp 2x"><img src="assets/img/logo-240.png" width="120" height="32" alt="Ezygo"></picture>
      </a>
      <nav class="nav" aria-label="Main">
        <a href="evs.php"<?= $cur === 'evs' ? ' aria-current="page"' : '' ?>>Bikes</a>
        <a href="index.php#how">How it works</a>
        <a href="services.php"<?= $cur === 'services' ? ' aria-current="page"' : '' ?>>For business</a>
        <a href="about.php"<?= $cur === 'about' ? ' aria-current="page"' : '' ?>>About</a>
        <a href="contact.php"<?= $cur === 'contact' ? ' aria-current="page"' : '' ?>>Contact</a>
      </nav>
      <div class="bar-actions">
        <button class="icon-btn theme-btn" type="button" aria-label="Switch to dark mode" data-theme-toggle>
          <span class="when-light"><?= icon('moon') ?></span><span class="when-dark"><?= icon('sun') ?></span>
        </button>
        <a class="btn btn-primary btn-sm" href="index.php#book">Book a bike</a>
        <button class="icon-btn menu-btn" type="button" aria-label="Open menu" aria-expanded="false" aria-controls="menu" data-menu-open><?= icon('menu') ?></button>
      </div>
    </div>
  </header>

  <div class="menu" id="menu" hidden>
    <div class="menu-panel" role="dialog" aria-modal="true" aria-label="Menu">
      <div class="menu-top">
        <span class="menu-title">Menu</span>
        <button class="icon-btn" type="button" aria-label="Close menu" data-menu-close><?= icon('close') ?></button>
      </div>
      <nav aria-label="All pages">
        <p class="menu-group">Rent</p>
        <a href="evs.php">Bikes and specs</a>
        <a href="services.php#riders">Rental plans</a>
        <a href="index.php#how">How it works</a>
        <a href="index.php#book">Book a bike</a>
        <p class="menu-group">Business</p>
        <a href="services.php">Services</a>
        <a href="franchise.php">Franchise</a>
        <a href="advertising.php">Advertising</a>
        <p class="menu-group">Company</p>
        <a href="about.php">About</a>
        <a href="team.php">Team</a>
        <a href="join.php">Join us</a>
        <a href="contact.php">Contact</a>
      </nav>
    </div>
  </div>
