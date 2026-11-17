<?php
$pageTitle = "Advertising — EzygoBD | Put Your Brand on Our EV Fleet";
$pageDesc  = "Advertise on EzygoBD's electric fleet: scooter body wraps, rickshaw panel boards, in-app ads and QR code campaigns across Bangladesh.";
$pagePath  = 'advertising.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>

<main id="main">

  <!-- ============ HERO ============ -->
  <section class="hero hero--page">
    <?= hero_video() ?>
    <div class="hero__in wrap">
      <p class="kick" data-reveal style="--i:0">Drive Your Brand Forward</p>
      <h1 class="d1 balance" data-reveal style="--i:1">Generate Business Leads<br><em>on Wheels</em></h1>
      <p class="lead" data-reveal style="--i:2">Put your brand on Bangladesh's largest EV fleet. Reach millions of riders, commuters, and households every single day.</p>
      <div class="hero__ctas" data-reveal style="--i:3"><a href="#ad-contact" class="btn btn--lime"><?= icon('megaphone') ?> Advertise your Brand</a></div>
    </div>
  </section>

  <!-- ============ STATS STRIP ============ -->
  <section class="statbar-wrap">
    <div class="wrap">
      <div class="statbar" data-stagger="pop">
        <div><p class="stat__v"><?= num('250') ?><small>M+</small></p><p class="stat__l">Monthly Impressions</p></div>
        <div><p class="stat__v"><?= num('5') ?><small>M+</small></p><p class="stat__l">Deliveries Covered</p></div>
        <div><p class="stat__v"><?= num('64') ?><small>+</small></p><p class="stat__l">Districts Reached</p></div>
        <div><p class="stat__v"><?= num('1,200') ?><small>+</small></p><p class="stat__l">Active EV Fleet</p></div>
      </div>
    </div>
  </section>

  <!-- ============ AD FORMATS ============ -->
  <section class="sec">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>How We Advertise</p>
          <h2 class="d2" data-reveal style="--i:1">Advertising Formats</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">From eye-catching wraps to digital panels — choose the format that works for your brand.</p>
      </div>
      <div class="formats" data-stagger="pop">
<?php
$formats = [
  ['scooter', 'Scooter Body Wrap', 'Full or partial vinyl wraps on our 2W fleet. Your brand travels 80–120 km per day through high-traffic areas.', ['10,000+ impressions/day per vehicle', 'Full or partial wrap options', 'GPS-tracked route reports'], 'From Tk 8,000/mo per vehicle', false],
  ['truck', 'Rickshaw Panel Board', 'Large format panels mounted on e-rickshaw sides. Maximum visibility in busy urban corridors and markets.', ['25,000+ impressions/day', 'Front, side &amp; rear panel options', 'Night-visible reflective prints'], 'From Tk 12,000/mo per vehicle', true],
  ['mobile', 'In-App Advertising', "Reach EzygoBD's rider and partner app users directly with banner ads, push notifications, and splash screens.", ['Hyper-local targeting', 'Real-time click &amp; view analytics', 'A/B testing supported'], 'From Tk 5,000/mo', false],
  ['qr', 'QR Code Campaigns', 'Embed QR codes on vehicles linking to your website, offer page, or WhatsApp — for direct lead generation.', ['Trackable scan analytics', 'Custom landing page support', 'Ideal for promotions &amp; launches'], 'Add-on to any format', false],
];
foreach ($formats as $f): ?>
        <article class="format<?= $f[5] ? ' format--feat' : '' ?>">
<?php if ($f[5]): ?>
          <span class="format__tag"><?= icon('star') ?> Most Popular</span>
<?php endif; ?>
          <span class="format__ic"><?= icon($f[0]) ?></span>
          <h3 class="h3"><?= $f[1] ?></h3>
          <p class="format__p"><?= $f[2] ?></p>
          <ul class="ticks">
<?php foreach ($f[3] as $t): ?>
            <li><?= icon('check-c') ?> <?= $t ?></li>
<?php endforeach; ?>
          </ul>
          <span class="format__price"><?= $f[4] ?></span>
        </article>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============ WHY EZYGOBD ============ -->
  <section class="sec sec--night">
    <div class="glow"></div>
    <div class="wrap">
      <div class="head">
        <p class="kick" data-reveal>Why EzygoBD Advertising</p>
        <h2 class="d2" data-reveal style="--i:1">Drive Your <em>BRAND</em> Forward<br>with EzygoBD Electric</h2>
      </div>
      <div class="feats feats--3 feats--why" data-stagger>
        <div class="feat"><div class="feat__ic"><?= icon('route') ?></div><h3 class="h4">High-Traffic Routes</h3><p>Our EVs serve the busiest corridors — markets, commercial zones, and residential areas across Bangladesh.</p></div>
        <div class="feat"><div class="feat__ic"><?= icon('clock') ?></div><h3 class="h4">All-Day Exposure</h3><p>EVs operate 10–14 hours daily. Your brand gets continuous visibility from morning to night.</p></div>
        <div class="feat"><div class="feat__ic"><?= icon('leaf') ?></div><h3 class="h4">Green Brand Association</h3><p>Align your brand with sustainability. Customers respect and remember eco-conscious partners.</p></div>
        <div class="feat"><div class="feat__ic"><?= icon('bars') ?></div><h3 class="h4">Measurable Results</h3><p>Monthly reports with GPS route data, estimated impressions, QR scans and app ad performance.</p></div>
        <div class="feat"><div class="feat__ic"><?= icon('taka') ?></div><h3 class="h4">Cost-Effective CPM</h3><p>Outdoor EV advertising delivers 8–12x lower cost per impression than billboards or digital ads.</p></div>
        <div class="feat"><div class="feat__ic"><?= icon('pin') ?></div><h3 class="h4">City-Wide Coverage</h3><p>Operate in Dhaka, Chattogram, Sylhet and 60+ other districts — nationwide reach at local rates.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ BRANDS ============ -->
  <section class="sec sec--tight">
    <div class="wrap">
      <p class="brands__label" data-reveal>Trusted by brands across Bangladesh</p>
      <div class="brands" data-stagger="pop">
        <span class="name-chip"><?= icon('home') ?> Your Brand</span>
        <span class="name-chip"><?= icon('building') ?> Corporate Co.</span>
        <span class="name-chip"><?= icon('cart') ?> Retail Brand</span>
        <span class="name-chip"><?= icon('coins') ?> F&amp;B Brand</span>
        <span class="name-chip"><?= icon('mobile') ?> Tech Startup</span>
      </div>
    </div>
  </section>

  <!-- ============ PROCESS ============ -->
  <section class="sec sec--tint">
    <div class="wrap">
      <div class="head head--center">
        <p class="kick" data-reveal>Simple Onboarding</p>
        <h2 class="d2" data-reveal style="--i:1">Get on the Road in 3 Steps</h2>
      </div>
      <ol class="trio" data-stagger="pop">
        <li><span class="trio__n">01</span><h3 class="h3">Choose Your Format</h3><p>Pick the vehicle type, ad size, and campaign duration that fits your budget and goals.</p></li>
        <li><span class="trio__n">02</span><h3 class="h3">Submit Your Design</h3><p>Send us your artwork — or let our creative team design your wrap/panel free of charge.</p></li>
        <li><span class="trio__n">03</span><h3 class="h3">Launch &amp; Track</h3><p>Your brand hits the road within 5–7 days. Monthly reports arrive in your inbox automatically.</p></li>
      </ol>
    </div>
  </section>

  <!-- ============ CONTACT FORM ============ -->
  <section class="sec sec--night" id="ad-contact">
    <div class="glow"></div>
    <div class="wrap reach">
      <div>
        <p class="kick" data-reveal>Let's Work Together</p>
        <h2 class="d2" data-reveal style="--i:1">Advertise Your<br>Brand Today</h2>
        <p class="lead" data-reveal style="--i:2">Fill out the form and our advertising team will reach out within 24 hours with a custom proposal.</p>
        <ul class="info-rows" data-stagger>
          <li><?= icon('phone') ?> <a href="tel:+8801828721222">01828-721222</a></li>
          <li><?= icon('mail') ?> <a href="mailto:ads@ezygobd.com">ads@ezygobd.com</a></li>
          <li><?= icon('pin') ?> <span>Dhaka, Bangladesh</span></li>
        </ul>
      </div>
      <div class="form-card" data-reveal="pop">
        <form action="form-handler.php" method="POST" data-form="advertising" class="fields">
          <input type="hidden" name="form_type" value="advertising"><?= form_guard() ?>
          <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your enquiry is in. Our advertising team will reach out within 24 hours.</p>
          <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your enquiry didn't go through. Please check the fields, or call 01828-721222.</p>
          <div class="row2">
            <div class="field"><label for="adName">Full Name</label><input type="text" id="adName" name="name" placeholder="Your name" autocomplete="name" required></div>
            <div class="field"><label for="adPhone">Phone</label><input type="tel" id="adPhone" name="phone" placeholder="+880 1XXX-XXXXXX" autocomplete="tel" required></div>
          </div>
          <div class="field"><label for="adEmail">Email</label><input type="email" id="adEmail" name="email" placeholder="you@company.com" autocomplete="email" required></div>
          <div class="field"><label for="adBrand">Brand / Company Name</label><input type="text" id="adBrand" name="brand" placeholder="e.g. Acme Bangladesh Ltd." autocomplete="organization" required></div>
          <div class="row2">
            <div class="field"><label for="adFormat">Preferred Format</label>
              <select id="adFormat" name="format"><option value="">Select format</option><option value="wrap">Scooter Body Wrap</option><option value="panel">Rickshaw Panel Board</option><option value="app">In-App Advertising</option><option value="qr">QR Code Campaign</option><option value="combo">Combo Package</option></select></div>
            <div class="field"><label for="adBudget">Monthly Budget</label>
              <select id="adBudget" name="budget"><option value="">Select budget</option><option value="small">Tk 5,000 – Tk 20,000</option><option value="med">Tk 20,000 – Tk 50,000</option><option value="large">Tk 50,000 – Tk 1,00,000</option><option value="xlarge">Tk 1,00,000+</option></select></div>
          </div>
          <div class="field"><label for="adMsg">Campaign Goal (optional)</label><textarea id="adMsg" name="message" rows="3" placeholder="Describe your campaign objective..."></textarea></div>
          <button type="submit" class="btn btn--lime"><?= icon('send') ?> Submit Enquiry</button>
        </form>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
