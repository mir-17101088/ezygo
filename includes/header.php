<?php
$currentPage = basename($_SERVER['SCRIPT_NAME'], '.php');
?>
  <!-- Preloader -->
  <div class="preloader" id="preloader">
    <div>
      <img src="assets/photo/logo.png" alt="" srcset="" style="max-width: 150px; height: auto; padding: 10px;">
    </div>
    <!-- <div class="preloader-text">
      <span class="preloader-letter">E</span>
      <span class="preloader-letter">Z</span>
      <span class="preloader-letter">Y</span>
      <span class="preloader-letter">G</span>
      <span class="preloader-letter">O</span>
    </div> -->
    <div class="preloader-bar"><div class="preloader-bar-fill"></div></div>
    <p class="preloader-tagline">Bangladesh First EV Network</p>
  </div>

  <header id="header">
    <nav class="navbar container">
      <a href="index.php" class="logo" aria-label="EzygoBD Home">
        <div style = "padding: 10px;"><img src="assets/photo/logo.png" alt="" srcset="" style="max-width: 150px; height: auto;">
          <span class="logo-tagline">EZYGO MOBILITY HOLDINGS LIMITED</span>
      </div>
        <!-- <div class="logo-wordmark">
          <span class="logo-main">EZYGO</span>
          <span class="logo-tagline">EZYGO MOBILITY HOLDINGS LIMITED</span>
        </div> -->
      </a>

      <div class="nav-actions">
        <a href="index.php#rent-ev" class="btn-nav-cta">Book Now</a>
        <button class="theme-toggle" id="themeToggle" aria-label="Toggle dark mode" aria-pressed="false">
          <i class="fa-solid fa-sun"></i>
          <i class="fa-solid fa-moon"></i>
          <span class="toggle-thumb"></span>
        </button>
        <button class="hamburger" id="hamburger" aria-label="Open menu" aria-expanded="false">
          <span></span><span></span><span></span>
        </button>
      </div>
    </nav>
  </header>
