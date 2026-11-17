<?php
$pageTitle = 'Advertise on the Ezygo electric fleet';
$pageDesc  = 'Put your brand on Ezygo electric scooters and e-rickshaws: body wraps, panel boards, in-app ads and QR campaigns, from Tk 5,000 a month.';
$pagePath  = 'advertising.php';
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
    <div class="wrap page-hero-grid">
      <div>
        <h1>Your brand, riding through the city all day.</h1>
        <p class="lede">Our electric scooters and e-rickshaws run 10–14 hours a day through markets, offices and neighbourhoods. Put your brand on them.</p>
        <div class="ctas">
          <a class="btn btn-primary" href="#enquire">Get a proposal</a>
          <a class="btn btn-ghost" href="#formats">See formats</a>
        </div>
      </div>
      <div class="stage"><?= bike_pic('sparky', 'Sparky electric scooter, the kind used for body-wrap ads', '(min-width: 900px) 48vw, 100vw', true) ?></div>
    </div>
  </section>

  <!-- Formats -->
  <section class="section" id="formats" aria-labelledby="formats-h">
    <div class="wrap">
      <div class="head">
        <h2 id="formats-h">Ad formats</h2>
        <p class="sub">Choose one, or combine them. Our team can design the artwork for you at no charge.</p>
      </div>
      <div class="tiles tiles-4">
        <article class="tile">
          <?= icon('bolt') ?>
          <h3>Scooter body wrap</h3>
          <p>Full or partial vinyl wraps on our scooters. Each one covers 80–120 km a day.</p>
          <ul class="checks"><li><?= icon('check') ?>Full or partial wrap</li><li><?= icon('check') ?>GPS route reports</li></ul>
          <div class="tile-foot"><span class="amount">Tk 8,000<small>a month per vehicle</small></span></div>
        </article>
        <article class="tile feature">
          <?= icon('route') ?>
          <h3>E-rickshaw panel board</h3>
          <p>Large panels on the sides of our e-rickshaws, in busy markets and commercial streets. Our most popular format.</p>
          <ul class="checks"><li><?= icon('check') ?>Front, side and rear panels</li><li><?= icon('check') ?>Reflective prints, visible at night</li></ul>
          <div class="tile-foot"><span class="amount">Tk 12,000<small>a month per vehicle</small></span></div>
        </article>
        <article class="tile">
          <?= icon('phone') ?>
          <h3>In-app ads</h3>
          <p>Banners, push notifications and splash screens in the Ezygo rider and partner apps.</p>
          <ul class="checks"><li><?= icon('check') ?>Local targeting</li><li><?= icon('check') ?>Click and view reports</li></ul>
          <div class="tile-foot"><span class="amount">Tk 5,000<small>a month</small></span></div>
        </article>
        <article class="tile">
          <?= icon('qr') ?>
          <h3>QR code campaigns</h3>
          <p>QR codes on our vehicles that open your website, offer page or WhatsApp.</p>
          <ul class="checks"><li><?= icon('check') ?>Scan reports</li><li><?= icon('check') ?>Good for launches and offers</li></ul>
          <div class="tile-foot"><span class="amount">Add-on<small>to any format</small></span></div>
        </article>
      </div>
      <p class="fine">Prices are starting prices.</p>
    </div>
  </section>

  <!-- Why -->
  <section class="section" aria-labelledby="why-h">
    <div class="wrap split">
      <div class="split-head">
        <h2 id="why-h">Why advertise on an electric fleet</h2>
      </div>
      <div class="tiles">
        <div class="tile"><?= icon('route') ?><h3>Busy routes</h3><p>Our vehicles work the busiest corridors: markets, business districts and residential areas.</p></div>
        <div class="tile"><?= icon('clock') ?><h3>All-day exposure</h3><p>Vehicles run 10–14 hours a day, so your brand is seen from morning to night.</p></div>
        <div class="tile"><?= icon('leaf') ?><h3>A green brand</h3><p>Your name on zero-emission vehicles tells customers you care about clean air.</p></div>
        <div class="tile"><?= icon('chart') ?><h3>Monthly reports</h3><p>GPS route data, estimated impressions, QR scans and in-app ad results every month.</p></div>
      </div>
    </div>
  </section>

  <!-- Steps -->
  <section class="section" aria-labelledby="steps-h">
    <div class="wrap">
      <h2 id="steps-h" class="head">On the road in three steps</h2>
      <ol class="flow flow-3">
        <li><span class="n">Step 1</span><h3>Choose your format</h3><p>Pick the vehicle, ad size and campaign length that fit your budget.</p></li>
        <li><span class="n">Step 2</span><h3>Send your design</h3><p>Send us your artwork, or our creative team will design the wrap or panel free of charge.</p></li>
        <li><span class="n">Step 3</span><h3>Launch and track</h3><p>Your brand is on the road in 5–7 days. Reports arrive by email every month.</p></li>
      </ol>
    </div>
  </section>

  <!-- Enquiry -->
  <section class="section" id="enquire" aria-labelledby="enq-h">
    <div class="wrap book-grid">
      <div class="book-intro">
        <h2 id="enq-h">Get a proposal</h2>
        <p class="lede">Tell us about your brand and our advertising team will send a proposal within 24 hours.</p>
        <ul class="contact-list">
          <li><?= icon('phone') ?><div><span>Phone</span><a href="tel:+8801828721222">01828-721222</a></div></li>
          <li><?= icon('mail') ?><div><span>Email</span><a href="mailto:ads@ezygobd.com">ads@ezygobd.com</a></div></li>
        </ul>
      </div>
      <form class="form" action="form-handler.php" method="post" data-form="advertising" novalidate>
        <input type="hidden" name="form_type" value="advertising">
        <div class="notice ok" role="status" hidden data-notice="success"><?= icon('check') ?><span>Thank you. Our advertising team will send you a proposal within 24 hours.</span></div>
        <div class="notice err" role="alert" hidden data-notice="error"><span>Your enquiry didn't go through. Please try again, or call 01828-721222.</span></div>
        <div class="fields fields-2">
          <div class="field"><label for="a-name">Full name</label><input id="a-name" name="name" autocomplete="name" required></div>
          <div class="field"><label for="a-brand">Brand or company</label><input id="a-brand" name="brand" autocomplete="organization" required></div>
          <div class="field"><label for="a-phone">Mobile number</label><input id="a-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="01XXXXXXXXX" required></div>
          <div class="field"><label for="a-email">Email</label><input id="a-email" name="email" type="email" autocomplete="email" required></div>
          <div class="field">
            <label for="a-format">Format</label>
            <select id="a-format" name="format">
              <option>Scooter body wrap</option><option>E-rickshaw panel board</option><option>In-app ads</option><option>QR code campaign</option><option>A mix of formats</option>
            </select>
          </div>
          <div class="field">
            <label for="a-budget">Monthly budget</label>
            <select id="a-budget" name="budget">
              <option>Tk 5,000–20,000</option><option>Tk 20,000–50,000</option><option>Tk 50,000–1,00,000</option><option>Over Tk 1,00,000</option>
            </select>
          </div>
        </div>
        <div class="fields" style="margin:16px 0 24px">
          <div class="field"><label for="a-msg">What do you want the campaign to do? <span class="opt">(optional)</span></label><textarea id="a-msg" name="message"></textarea></div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Send enquiry</button>
      </form>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
