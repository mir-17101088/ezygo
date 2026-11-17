<?php
$pageTitle = 'Ezygo services — rental plans and electric fleets for business';
$pageDesc  = 'Daily and monthly e-bike rental, rent-to-own scooters, delivery fleets, white-label EV fleets, franchise hubs and advertising on the Ezygo fleet.';
$pagePath  = 'services.php';
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
        <h1>Plans for riders. Fleets for business.</h1>
        <p class="lede">Rent a bike for a day, take one home on a monthly plan, or put a whole electric fleet to work for your company.</p>
        <nav class="jump" aria-label="Sections on this page">
          <a href="#riders">For riders</a>
          <a href="#business">For business</a>
        </nav>
      </div>
      <div class="stage"><?= bike_pic('eco-ride', 'Eco Ride electric bike in the studio', '(min-width: 900px) 48vw, 100vw', true) ?></div>
    </div>
  </section>

  <!-- Riders -->
  <section class="section" id="riders" aria-labelledby="riders-h">
    <div class="wrap">
      <div class="head">
        <h2 id="riders-h">For riders</h2>
        <p class="sub">Lowest rent, no extra charges and unlimited kilometres.</p>
      </div>
      <div class="tiles tiles-4">
        <article class="tile">
          <?= icon('clock') ?>
          <h3>Daily rental</h3>
          <p>Rent an e-bike for the day. No fuel cost, just ride.</p>
          <div class="tile-foot"><span class="amount">Tk 299<small>a day for EM1</small></span></div>
        </article>
        <article class="tile">
          <?= icon('bolt') ?>
          <h3>Monthly plan</h3>
          <p>Lock in a low monthly rate and keep the scooter at home. Unlimited km.</p>
          <div class="tile-foot"><span class="amount">Tk 2,100<small>a month</small></span></div>
        </article>
        <article class="tile feature">
          <?= icon('check') ?>
          <h3>Take one home</h3>
          <p>Pay a one-time fee, then a monthly rent for a year.</p>
          <ul class="checks">
            <li><?= icon('check') ?>One-time fee Tk 4,999*</li>
            <li><?= icon('check') ?>Monthly rent Tk 2,100</li>
            <li><?= icon('check') ?>Runs for 1 year</li>
          </ul>
        </article>
        <article class="tile">
          <?= icon('route') ?>
          <h3>E-rickshaw earning plan</h3>
          <p>Drive an Ezygo e-rickshaw and earn a steady monthly income.</p>
          <div class="tile-foot"><span class="amount">Tk 25,000–35,000<small>a month in earnings</small></span></div>
        </article>
      </div>
      <p class="fine">*Terms and conditions apply. Every plan includes third-party insurance and 24/7 rider support.</p>
      <div class="ctas" style="margin-top:28px">
        <a class="btn btn-primary" href="index.php#book">Book a bike</a>
        <a class="btn btn-ghost" href="evs.php">Compare the bikes</a>
      </div>
    </div>
  </section>

  <!-- Business -->
  <section class="section" id="business" aria-labelledby="biz-h">
    <div class="wrap split">
      <div class="split-head">
        <h2 id="biz-h">For business</h2>
        <p class="sub">Electric vehicles for your team, with GPS tracking and reports built in.</p>
      </div>
      <div class="tiles">
        <article class="tile" id="delivery">
          <?= icon('route') ?>
          <h3>Delivery fleets</h3>
          <p>An electric delivery fleet for your riders, with real-time GPS tracking and analytics.</p>
          <div class="tile-foot"><span class="amount">Custom pricing</span><a class="link" href="contact.php">Talk to us</a></div>
        </article>
        <article class="tile" id="corporate">
          <?= icon('building') ?>
          <h3>White label</h3>
          <p>Branded vehicles, a booking app, IoT hardware and an analytics dashboard, deployed under your brand in weeks.</p>
          <div class="tile-foot"><span class="amount">Custom pricing</span><a class="link" href="contact.php">Talk to us</a></div>
        </article>
        <article class="tile">
          <?= icon('users') ?>
          <h3>Franchise</h3>
          <p>Own an Ezygo hub. We can run it for you, or you can run it yourself.</p>
          <div class="tile-foot"><span class="amount">From Tk 4.5 lakh</span><a class="link" href="franchise.php">See the models</a></div>
        </article>
        <article class="tile">
          <?= icon('chart') ?>
          <h3>Advertising</h3>
          <p>Wrap our scooters and e-rickshaws in your brand and reach people across the city.</p>
          <div class="tile-foot"><span class="amount">From Tk 8,000<small>a month per vehicle</small></span><a class="link" href="advertising.php">See formats</a></div>
        </article>
        <article class="tile">
          <?= icon('wrench') ?>
          <h3>EzyFleet platform</h3>
          <p>Fleet management software: charge scheduling, rider scoring and remote diagnostics.</p>
          <div class="tile-foot"><span class="amount">Subscription</span><a class="link" href="contact.php">Ask for a demo</a></div>
        </article>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="cta-band">
        <div>
          <h2>Not sure which plan fits?</h2>
          <p class="sub">Tell us what you need and we'll suggest one. Call, WhatsApp or send a message.</p>
        </div>
        <div class="ctas">
          <a class="btn btn-primary" href="contact.php">Contact us</a>
          <a class="btn btn-ghost" href="https://wa.me/8801828721222" target="_blank" rel="noopener"><?= icon('whatsapp') ?>WhatsApp</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
