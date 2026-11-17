<?php
$pageTitle = "Services — EzygoBD | EV Rental Plans, Delivery Fleet, Franchise & Advertising";
$pageDesc  = "EzygoBD services for riders and partners: daily rental, monthly subscription, rent-to-own e-scooter, e-rickshaw earning plan, delivery fleets, franchise, EV advertising and the EzyFleet platform.";
$pagePath  = 'services.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>

<main id="main">

  <!-- ============ SERVICES HERO ============ -->
  <section class="hero hero--svc">
    <?= hero_video() ?>
    <div class="glow"></div>
    <div class="hero__in wrap">
      <h1 class="sr-only">EzygoBD services for riders and partners</h1>
      <div class="svc">
        <div class="svc__col" id="riders">
          <h2 class="svc__title" data-reveal><?= icon('user') ?> For Riders</h2>
          <div class="svc__grid svc__grid--riders" data-stagger="pop">
            <a href="index.php#rent-ev" class="offer">
              <span class="offer__tag"><?= icon('taka') ?> Earn More</span>
              <div class="offer__body">
                <p class="offer__kick">Kom Khorche Beshi Dao</p>
                <h3 class="offer__h">Earn More <br>with EzygoBD</h3>
                <ul class="offer__ticks"><li><?= icon('check-c') ?> Lowest rent</li><li><?= icon('check-c') ?> Zero extra charges</li><li><?= icon('check-c') ?> Unlimited km</li></ul>
              </div>
              <span class="offer__bg"><?= icon('scooter') ?></span>
            </a>
            <a href="index.php#rent-ev" class="offer offer--feat" id="rent-to-own">
              <span class="offer__tag offer__tag--lime"><?= icon('star') ?> Featured</span>
              <div class="offer__body">
                <p class="offer__kick">Nao Ghor Nieo Apnar</p>
                <h3 class="offer__h">Take Home an<br><em>E-Scooter</em></h3>
                <dl class="offer__price">
                  <div><dt>One-time fee</dt><dd>Tk 4,999*</dd></div>
                  <div><dt>Monthly rent</dt><dd>Tk 2,100</dd></div>
                  <div><dt>Duration</dt><dd>1 Year</dd></div>
                </dl>
              </div>
              <span class="offer__bg"><?= icon('scooter') ?></span>
            </a>
            <a href="index.php#rent-ev" class="offer">
              <span class="offer__tag"><?= icon('truck') ?> 3-Wheeler</span>
              <div class="offer__body">
                <p class="offer__kick">Earn Tk 25,000 – Tk 35,000</p>
                <h3 class="offer__h">Monthly with an<br>E-Rickshaw</h3>
              </div>
              <span class="offer__bg"><?= icon('truck') ?></span>
            </a>
          </div>
        </div>
        <div class="svc__col" id="business">
          <h2 class="svc__title" data-reveal><?= icon('handshake') ?> For Partners</h2>
          <div class="svc__grid" data-stagger="pop">
            <a href="contact.php" class="offer" id="delivery">
              <span class="offer__tag"><?= icon('truck') ?> Delivery</span>
              <div class="offer__body"><p class="offer__kick">Last-mile EV fleet</p><h3 class="offer__h">Delivery Solution<br>for Your Business</h3></div>
              <span class="offer__bg"><?= icon('truck') ?></span>
            </a>
            <a href="franchise.php" class="offer">
              <span class="offer__tag"><?= icon('crown') ?> Franchise</span>
              <div class="offer__body">
                <p class="offer__kick">Introducing EzygoBD Franchise (FOCO) Model</p>
                <h3 class="offer__h">Earn <em>90%* ROI</em><br>in Just 3 Years</h3>
                <p class="offer__note">Starting investment <strong>Tk 4.5 Lakhs</strong><br><small>with 10 scooters</small></p>
              </div>
              <span class="offer__bg"><?= icon('crown') ?></span>
            </a>
            <a href="advertising.php" class="offer">
              <span class="offer__tag"><?= icon('megaphone') ?> Advertising</span>
              <div class="offer__body">
                <p class="offer__kick">Drive Your <strong>BRAND</strong> Forward</p>
                <h3 class="offer__h">with EzygoBD<br>Electric</h3>
                <p class="offer__stats"><span><strong>250M+</strong> Impressions</span><span><strong>5M+</strong> Deliveries</span></p>
              </div>
              <span class="offer__bg"><?= icon('megaphone') ?></span>
            </a>
            <a href="evs.php#ezyfleet" class="offer">
              <span class="offer__tag"><?= icon('chip') ?> FleetTech</span>
              <div class="offer__body"><p class="offer__kick">Smart IoT Fleet Management</p><h3 class="offer__h">EzyFleet<br>Platform</h3></div>
              <span class="offer__bg"><?= icon('chip') ?></span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FULL SERVICE LIST ============ -->
  <section class="sec">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Everything We Offer</p>
          <h2 class="d2" data-reveal style="--i:1">Complete Service Catalogue</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">From daily commuters to enterprise fleet managers — EzygoBD has a plan for everyone.</p>
      </div>

      <div class="cat" data-reveal>
        <div class="cat__head"><span class="cat__ic"><?= icon('user') ?></span><div><h3 class="d3">For Riders</h3><p class="muted">Affordable EV rentals that put money back in your pocket</p></div></div>
        <div class="cards4" data-stagger="pop">
          <div class="mini"><span class="mini__ic"><?= icon('scooter') ?></span><h4 class="h4">Daily Rental</h4><p>Rent an e-scooter for the day. No deposit, no fuel cost. Just ride.</p><span class="mini__badge">From Tk 150/day</span></div>
          <div class="mini"><span class="mini__ic"><?= icon('clock') ?></span><h4 class="h4">Monthly Subscription</h4><p>Lock in a low monthly rate and take the scooter home. Unlimited km.</p><span class="mini__badge">From Tk 2,100/mo</span></div>
          <div class="mini"><span class="mini__ic"><?= icon('truck') ?></span><h4 class="h4">E-Rickshaw Earning Plan</h4><p>Partner with EzygoBD as an e-rickshaw operator and earn a steady income.</p><span class="mini__badge">Up to Tk 35K/mo</span></div>
          <div class="mini"><span class="mini__ic"><?= icon('shield') ?></span><h4 class="h4">Rider Insurance</h4><p>Every EzygoBD rider gets complimentary accident &amp; theft protection.</p><span class="mini__badge">Included Free</span></div>
        </div>
      </div>

      <div class="cat" id="corporate" data-reveal>
        <div class="cat__head"><span class="cat__ic cat__ic--night"><?= icon('handshake') ?></span><div><h3 class="d3">For Partners</h3><p class="muted">Business-grade EV solutions designed to scale</p></div></div>
        <div class="cards4" data-stagger="pop">
          <div class="mini"><span class="mini__ic"><?= icon('truck') ?></span><h4 class="h4">Last-Mile Delivery Fleet</h4><p>Deploy a branded EV delivery fleet with real-time GPS tracking and analytics.</p><span class="mini__badge">Custom Pricing</span></div>
          <div class="mini"><span class="mini__ic"><?= icon('crown') ?></span><h4 class="h4">Franchise (FOCO Model)</h4><p>Own an EzygoBD franchise hub with our Full Operate Company Own model — 90%* ROI in 3 years.</p><span class="mini__badge">Tk 4.5 Lakhs+</span></div>
          <div class="mini"><span class="mini__ic"><?= icon('megaphone') ?></span><h4 class="h4">EV Advertising Network</h4><p>Wrap our scooters and rickshaws with your brand. 250M+ monthly impressions.</p><span class="mini__badge">From Tk 12K/mo</span></div>
          <div class="mini"><span class="mini__ic"><?= icon('chip') ?></span><h4 class="h4">EzyFleet Platform</h4><p>IoT-powered fleet management dashboard — charge scheduling, driver scoring, remote diagnostics.</p><span class="mini__badge">SaaS Plan</span></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CTA STRIP ============ -->
  <section class="sec sec--tight">
    <div class="wrap">
      <div class="band on-night" data-reveal>
        <div class="glow"></div>
        <div class="band__text">
          <h2 class="d2">Ready to get started?</h2>
          <p class="lead">Download the EzygoBD app or talk to our team today.</p>
        </div>
        <div class="band__btns">
          <a href="evs.php#app" class="btn btn--lime"><?= icon('download') ?> Get the App</a>
          <a href="index.php#contact" class="btn btn--glass"><?= icon('phone') ?> Talk to Sales</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
