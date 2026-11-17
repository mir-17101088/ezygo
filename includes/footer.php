  <footer class="foot">
    <div class="wrap">
      <div class="foot__grid">
        <div class="foot__brand">
          <img src="assets/img/logo-480.webp" width="200" height="54" alt="Ezygo Electric Limited logo" loading="lazy">
          <p class="foot__tag">Bangladesh First 2W EV Rental Fleet Platform</p>
          <p class="foot__about">Bangladesh's #1 electric vehicle rental network — building a greener future, one ride at a time.</p>
          <div class="socials">
            <a href="https://www.facebook.com/share/198cbcDwWD/" aria-label="Facebook" rel="noopener noreferrer" target="_blank"><?= icon('facebook') ?></a>
            <a href="https://www.instagram.com/rent_ezygo" aria-label="Instagram" rel="noopener noreferrer" target="_blank"><?= icon('instagram') ?></a>
            <a href="https://www.linkedin.com/company/ezygo-mobility-holdings-limited/" aria-label="LinkedIn" rel="noopener noreferrer" target="_blank"><?= icon('linkedin') ?></a>
            <a href="#" aria-label="YouTube" rel="noopener noreferrer"><?= icon('youtube') ?></a>
          </div>
        </div>
        <nav class="foot__col" aria-label="Riders">
          <h2>Riders</h2>
          <ul>
            <li><a href="services.php">Daily Rental</a></li>
            <li><a href="services.php">Monthly Plan</a></li>
            <li><a href="services.php">E-Rickshaw Plan</a></li>
            <li><a href="contact.php">Find a Hub</a></li>
          </ul>
        </nav>
        <nav class="foot__col" aria-label="Partners">
          <h2>Partners</h2>
          <ul>
            <li><a href="services.php">Delivery Fleet</a></li>
            <li><a href="join.php#franchise">Franchise</a></li>
            <li><a href="join.php#advertising">Advertising</a></li>
            <li><a href="evs.php#ezyfleet">EzyFleet</a></li>
          </ul>
        </nav>
        <nav class="foot__col" aria-label="Company">
          <h2>Company</h2>
          <ul>
            <li><a href="about.php">Our Story</a></li>
            <li><a href="contact.php">Contact Us</a></li>
            <li><a href="join.php">Join Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </nav>
      </div>
      <div class="foot__base">
        <p>&copy; <?= date('Y') ?> Ezygo Electric Limited. All rights reserved. Serving Bangladesh with clean mobility.</p>
        <p>Trade License: TRAD/DSCC/037731/2025</p>
      </div>
    </div>
    <p class="foot__word" aria-hidden="true">ezygo</p>
  </footer>

  <button class="to-top" type="button" id="toTop" aria-label="Back to top"><?= icon('arrow-up') ?></button>

  <!-- WhatsApp: floating button on larger screens, bottom bar on phones -->
  <a href="https://wa.me/8801828721222" class="wa-float" target="_blank" rel="noopener noreferrer" aria-label="Chat on WhatsApp"><?= icon('whatsapp') ?></a>
  <div class="dock" role="group" aria-label="Quick actions">
    <a href="index.php#rent-ev" class="btn btn--lime">Book Now</a>
    <a href="https://wa.me/8801828721222" class="btn btn--glass" target="_blank" rel="noopener noreferrer"><?= icon('whatsapp') ?> WhatsApp</a>
  </div>

  <script src="assets/js/site.js?v=<?= $cssVer ?? '3.0' ?>" defer></script>
