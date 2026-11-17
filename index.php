<?php
$pageTitle = "EzygoBD — Bangladesh's #1 EV Rental Network";
$pageDesc  = "Efficient, eco-friendly, and affordable electric vehicle rentals across Bangladesh. Rent e-scooters, e-bikes, and e-rickshaws at your fingertips.";
$pagePath  = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
  <link rel="preload" as="image" href="assets/video/ezygo-hero-poster.webp" type="image/webp">
</head>
<body>
<?php include 'includes/header.php'; ?>

<main id="main">

  <!-- ============ HERO ============ -->
  <section class="hero hero--home">
    <?= hero_video() ?>
    <div class="glow"></div>
    <div class="hero__in wrap">
      <div>
        <p class="kick" data-reveal style="--i:0">EV Rental Platform</p>
        <h1 class="d1 balance" data-reveal style="--i:1">Bangladesh First <em>2W EV</em> Rental Fleet Platform</h1>
        <p class="lead" data-reveal style="--i:2">EzygoBD's smart electric vehicle platform connects riders, operators and businesses across Bangladesh — reducing costs, emissions and complexity.</p>
        <div class="hero__ctas" data-reveal style="--i:3">
          <a href="#rent-ev" class="btn btn--lime"><?= icon('bolt') ?> Get Started Now</a>
          <a href="#evs-platform" class="btn btn--glass"><?= icon('play') ?> How It Works</a>
        </div>
        <div class="riders" data-reveal style="--i:4">
          <div class="riders__faces" aria-hidden="true"><span><?= icon('user') ?></span><span><?= icon('user') ?></span><span><?= icon('user') ?></span></div>
          <p><strong>120+</strong> active riders across Bangladesh</p>
        </div>
        <ul class="facts" data-reveal style="--i:5" aria-label="At a glance">
          <li><b>Tk 299/day</b>daily rent, EM1</li>
          <li><b>Fully insured</b>every rental plan</li>
          <li><b>24/7</b>rider support</li>
          <li><b>2 hours</b>booking confirmation</li>
        </ul>
      </div>
      <a href="#ev-specs" class="hero__frame" data-reveal="pop" style="--i:3">
        <?= bike_pic('sparky', 'Sparky electric scooter from the EzygoBD fleet', '(min-width: 960px) 380px, 96px', true) ?>
        <span class="hero__chip"><?= icon('bolt') ?><span><b>Sparky</b>120km+/Charge · 70km/h</span></span>
      </a>
    </div>
  </section>

  <!-- ============ PLATFORM STRIP ============ -->
  <section class="sec" id="evs-platform">
    <div class="wrap">
      <div class="head head--split">
        <h2 class="d2 balance" data-reveal>Smart Platform for EV Infrastructure.</h2>
        <p class="lead" data-reveal style="--i:1">Everything you need to deploy, operate and scale an electric vehicle fleet — in one unified system.</p>
      </div>
      <div class="feats feats--4" data-stagger>
        <div class="feat"><span class="feat__n">01</span><div class="feat__ic"><?= icon('pin') ?></div><h3 class="h4">EV Tracking</h3><p>Real-time GPS on every vehicle. Live battery, speed and trip data at your fingertips.</p></div>
        <div class="feat"><span class="feat__n">02</span><div class="feat__ic"><?= icon('leaf') ?></div><h3 class="h4">Zero-Emission Fleet</h3><p>100% electric. Reduce carbon footprint and fuel costs simultaneously.</p></div>
        <div class="feat"><span class="feat__n">03</span><div class="feat__ic"><?= icon('wrench') ?></div><h3 class="h4">Smart Maintenance</h3><p>Predictive alerts flag issues before breakdowns. Service scheduling, auto-assigned.</p></div>
        <div class="feat"><span class="feat__n">04</span><div class="feat__ic"><?= icon('chart') ?></div><h3 class="h4">Rapid Scaling</h3><p>Add vehicles, hubs or cities in minutes. Modular pricing grows with your business.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ RENT OUR EV ============ -->
<?php include 'includes/rent.php'; ?>

  <!-- ============ VEHICLE SPECIFICATIONS ============ -->
  <section class="sec sec--glass" id="ev-specs">
    <div class="blobs" aria-hidden="true"><span></span><span></span><span></span></div>
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Know Your Ride</p>
          <h2 class="d2" data-reveal style="--i:1">Vehicle Specifications</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Compare our electric vehicles and find the perfect fit for your needs.</p>
      </div>
      <div class="bikes" data-stagger="pop">
        <article class="bike" data-tilt>
          <div class="bike__pic"><?= bike_pic('sparky', 'Sparky Electric Bike', '(min-width: 1080px) 400px, (min-width: 720px) 50vw, 100vw') ?></div>
          <div class="bike__body">
            <h3 class="bike__name">Sparky</h3>
            <p class="bike__line">High-performance electric scooter</p>
            <dl class="specs">
              <div><dt><?= icon('road') ?>Range:</dt><dd>120km+/Charge</dd></div>
              <div><dt><?= icon('bolt') ?>Charge Time:</dt><dd>3-3.5 Hours</dd></div>
              <div><dt><?= icon('gauge') ?>Top Speed:</dt><dd>70km/h</dd></div>
              <div><dt><?= icon('weight') ?>Weight/Payload:</dt><dd>300 KG</dd></div>
              <div><dt><?= icon('battery') ?>Battery:</dt><dd>Lithium / Graphene</dd></div>
            </dl>
            <div class="bike__foot">
              <p class="price">Contact for Pricing</p>
              <a href="#rent-ev" class="btn btn--ink btn--sm">Rent Now <?= icon('arrow') ?></a>
            </div>
          </div>
        </article>
        <article class="bike bike--feat" data-tilt>
          <span class="bike__flag"><?= icon('star') ?> Top Pick</span>
          <div class="bike__pic"><?= bike_pic('eco-ride', 'Eco Ride Electric Bike', '(min-width: 1080px) 400px, (min-width: 720px) 50vw, 100vw') ?></div>
          <div class="bike__body">
            <h3 class="bike__name">Eco Ride</h3>
            <p class="bike__line">Eco-friendly electric bike</p>
            <dl class="specs">
              <div><dt><?= icon('road') ?>Range:</dt><dd>90km+/Charge</dd></div>
              <div><dt><?= icon('bolt') ?>Charge Time:</dt><dd>5-5.5 Hours</dd></div>
              <div><dt><?= icon('gauge') ?>Top Speed:</dt><dd>60km/h</dd></div>
              <div><dt><?= icon('weight') ?>Weight/Payload:</dt><dd>300 KG</dd></div>
              <div><dt><?= icon('battery') ?>Battery:</dt><dd>Graphene Battery</dd></div>
            </dl>
            <div class="bike__foot">
              <p class="price">Contact for Pricing</p>
              <a href="#rent-ev" class="btn btn--lime btn--sm">Rent Now <?= icon('arrow') ?></a>
            </div>
          </div>
        </article>
        <article class="bike" data-tilt>
          <div class="bike__pic"><?= bike_pic('em1', 'EM1 Electric Bike', '(min-width: 1080px) 400px, (min-width: 720px) 50vw, 100vw') ?></div>
          <div class="bike__body">
            <h3 class="bike__name">EM1</h3>
            <p class="bike__line">Compact electric bike for daily use</p>
            <dl class="specs">
              <div><dt><?= icon('road') ?>Range:</dt><dd>80km+/Charge</dd></div>
              <div><dt><?= icon('bolt') ?>Charge Time:</dt><dd>4-5 hours</dd></div>
              <div><dt><?= icon('gauge') ?>Top Speed:</dt><dd>40km/h</dd></div>
              <div><dt><?= icon('weight') ?>Weight/Payload:</dt><dd>150 KG</dd></div>
              <div><dt><?= icon('battery') ?>Battery:</dt><dd>Graphene</dd></div>
              <div><dt><?= icon('plug') ?>Motor:</dt><dd>1000w</dd></div>
            </dl>
            <div class="bike__foot">
              <p class="price">Daily rent - 299 BDT</p>
              <a href="#rent-ev" class="btn btn--ink btn--sm">Rent Now <?= icon('arrow') ?></a>
            </div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ WHITE LABEL SOLUTIONS ============ -->
<?php include 'includes/whitelabel.php'; ?>

  <!-- ============ PARTNERS ============ -->
<?php include 'includes/clients.php'; ?>

  <!-- ============ GET IN TOUCH ============ -->
<?php include 'includes/reach.php'; ?>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
