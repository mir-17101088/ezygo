<?php
$pageTitle = 'Join Ezygo — franchise, advertising and careers';
$pageDesc  = 'Open an Ezygo franchise hub, advertise on our electric fleet, or build your career with Ezygo in Bangladesh.';
$pagePath  = 'join.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/v2/head.php'; ?>
</head>
<body>
<?php include 'includes/v2/header.php'; ?>

<main id="main">

  <section class="page-hero">
    <div class="wrap">
      <h1>Grow with Ezygo.</h1>
      <p class="lede">Invest in a hub, put your brand on our fleet, or join the team building Bangladesh's cleanest way to get around.</p>
      <nav class="jump" aria-label="Ways to join">
        <a href="#partner">Franchise</a>
        <a href="#partner">Advertising</a>
        <a href="#careers">Careers</a>
        <a href="#apply">Apply</a>
      </nav>
    </div>
  </section>

  <section class="section" id="partner" aria-labelledby="partner-h">
    <div class="wrap">
      <h2 id="partner-h" class="head">Partner with us</h2>
      <div class="tiles">
        <article class="tile">
          <?= icon('users') ?>
          <h3>Open a franchise hub</h3>
          <p>Start from Tk 4.5 lakh with 10 scooters. Let us run the hub (FOCO, up to 90% projected return in 3 years*) or run it yourself (FOFO, 45–65%*).</p>
          <div class="tile-foot"><a class="btn btn-ghost btn-sm" href="franchise.php">Franchise details</a></div>
        </article>
        <article class="tile">
          <?= icon('chart') ?>
          <h3>Advertise on our fleet</h3>
          <p>Scooter wraps, e-rickshaw panels, in-app ads and QR campaigns, from Tk 5,000 a month.</p>
          <div class="tile-foot"><a class="btn btn-ghost btn-sm" href="advertising.php">Advertising details</a></div>
        </article>
      </div>
      <p class="fine">*Terms and conditions apply. Return figures are projections based on current operating data.</p>
    </div>
  </section>

  <section class="section" id="careers" aria-labelledby="careers-h">
    <div class="wrap split">
      <div class="split-head">
        <h2 id="careers-h">Careers</h2>
        <p class="sub">We're always looking for talented people. These are the areas we hire in.</p>
      </div>
      <div class="tiles tiles-3">
        <div class="tile"><?= icon('wrench') ?><h3>Operations and fleet</h3><p>Fleet managers, hub supervisors, mechanics and logistics coordinators.</p></div>
        <div class="tile"><?= icon('bolt') ?><h3>Technology</h3><p>Software engineers, IoT developers, data analysts and product designers.</p></div>
        <div class="tile"><?= icon('chart') ?><h3>Marketing and sales</h3><p>Digital marketers, content creators, and business and partnership managers.</p></div>
      </div>
    </div>
  </section>

  <section class="section" id="apply" aria-labelledby="apply-h">
    <div class="wrap book-grid">
      <div class="book-intro">
        <h2 id="apply-h">Apply or ask a question</h2>
        <p class="lede">Fill in the form and our team will get back to you within 48 hours.</p>
        <ul class="contact-list">
          <li><?= icon('phone') ?><div><span>Phone or WhatsApp</span><a href="tel:+8801828721222">01828-721222</a></div></li>
          <li><?= icon('mail') ?><div><span>Email</span><a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></div></li>
        </ul>
      </div>
      <form class="form" action="form-handler.php" method="post" data-form="join" novalidate>
        <input type="hidden" name="form_type" value="join">
        <div class="notice ok" role="status" hidden data-notice="success"><?= icon('check') ?><span>Thank you. Our team will get back to you within 48 hours.</span></div>
        <div class="notice err" role="alert" hidden data-notice="error"><span>Your application didn't go through. Please try again, or call 01828-721222.</span></div>
        <div class="fields" style="margin-bottom:16px">
          <div class="field">
            <label for="j-type">I'm interested in</label>
            <select id="j-type" name="interest_type" required>
              <option value="">Select one</option>
              <option>Franchise: FOCO</option><option>Franchise: FOFO</option><option>Advertising</option><option>A job at Ezygo</option><option>Another partnership</option>
            </select>
          </div>
        </div>
        <div class="fields fields-2">
          <div class="field"><label for="j-name">Full name</label><input id="j-name" name="name" autocomplete="name" required></div>
          <div class="field"><label for="j-phone">Mobile number</label><input id="j-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="01XXXXXXXXX" required></div>
          <div class="field"><label for="j-email">Email</label><input id="j-email" name="email" type="email" autocomplete="email" required></div>
          <div class="field"><label for="j-city">City <span class="opt">(optional)</span></label><input id="j-city" name="city" autocomplete="address-level2"></div>
          <div class="field"><label for="j-company">Company <span class="opt">(optional)</span></label><input id="j-company" name="company" autocomplete="organization"></div>
        </div>
        <div class="fields" style="margin:16px 0 24px">
          <div class="field"><label for="j-msg">Message <span class="opt">(optional)</span></label><textarea id="j-msg" name="message"></textarea></div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Send</button>
      </form>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
