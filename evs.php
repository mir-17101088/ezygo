<?php
$pageTitle = "Our EVs — EzygoBD | Electric Fleet for Bangladesh";
$pageDesc  = "Explore EzygoBD's electric vehicle fleet — e-scooters, e-bikes, e-rickshaws, fleet management and white-label EV solutions across Bangladesh.";
$pagePath  = 'evs.php';
$rentPrice = 'Daily, weekly or monthly plans — from Tk 100/day.';
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
      <p class="kick" data-reveal style="--i:0">EV Rental Platform</p>
      <h1 class="d1 balance" data-reveal style="--i:1">Start Your Rental Business<br><em>Manage Your Fleet Efficiency</em></h1>
      <p class="lead" data-reveal style="--i:2">EzygoBD's smart electric vehicle platform connects riders, operators and businesses across Bangladesh — reducing costs, emissions and complexity.</p>
      <div class="hero__ctas" data-reveal style="--i:3">
        <a href="#rent-ev" class="btn btn--lime"><?= icon('bolt') ?> Get Started Now</a>
        <a href="#evs-platform" class="btn btn--glass"><?= icon('play') ?> How It Works</a>
      </div>
      <div class="riders" data-reveal style="--i:4">
        <div class="riders__faces" aria-hidden="true"><span><?= icon('user') ?></span><span><?= icon('user') ?></span><span><?= icon('user') ?></span></div>
        <p><strong>120+</strong> active riders across Bangladesh</p>
      </div>
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
  <section class="sec" id="ev-specs">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Know Your Ride</p>
          <h2 class="d2" data-reveal style="--i:1">Vehicle Specifications</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Compare our electric vehicles and find the perfect fit for your needs.</p>
      </div>
      <div class="bikes" data-stagger="pop">
        <article class="bike bike--sheet" data-tilt>
          <div class="sheet__top"><span class="sheet__ic"><?= icon('scooter') ?></span><span class="sheet__code">EZY · 01</span></div>
          <div class="bike__body">
            <h3 class="bike__name">EzyGo E-Scooter</h3>
            <p class="bike__line">Urban commuting &amp; last-mile delivery</p>
            <dl class="specs">
              <div><dt><?= icon('road') ?>Range:</dt><dd>120 km/charge</dd></div>
              <div><dt><?= icon('bolt') ?>Charge Time:</dt><dd>3 hours</dd></div>
              <div><dt><?= icon('gauge') ?>Top Speed:</dt><dd>60 km/h</dd></div>
              <div><dt><?= icon('weight') ?>Payload:</dt><dd>150 kg</dd></div>
              <div><dt><?= icon('battery') ?>Battery:</dt><dd>72V Lithium-ion</dd></div>
              <div><dt><?= icon('plug') ?>Motor:</dt><dd>2000W BLDC</dd></div>
            </dl>
            <div class="bike__foot"><p class="price">From Tk 150/day</p><a href="#rent-ev" class="btn btn--ink btn--sm">Rent Now <?= icon('arrow') ?></a></div>
          </div>
        </article>
        <article class="bike bike--sheet bike--feat" data-tilt>
          <div class="sheet__top"><span class="sheet__ic"><?= icon('route') ?></span><span class="sheet__code">EZY · 02</span></div>
          <div class="bike__body">
            <h3 class="bike__name">EzyRide E-Bike</h3>
            <p class="bike__line">Pedal-assist for urban commuters</p>
            <dl class="specs">
              <div><dt><?= icon('road') ?>Range:</dt><dd>80 km (assist mode)</dd></div>
              <div><dt><?= icon('bolt') ?>Charge Time:</dt><dd>2.5 hours</dd></div>
              <div><dt><?= icon('gauge') ?>Assist Speed:</dt><dd>35 km/h</dd></div>
              <div><dt><?= icon('weight') ?>Vehicle Weight:</dt><dd>22 kg</dd></div>
              <div><dt><?= icon('battery') ?>Battery:</dt><dd>48V Lithium-ion</dd></div>
              <div><dt><?= icon('plug') ?>Motor:</dt><dd>500W Hub</dd></div>
            </dl>
            <div class="bike__foot"><p class="price">From Tk 100/day</p><a href="#rent-ev" class="btn btn--lime btn--sm">Rent Now <?= icon('arrow') ?></a></div>
          </div>
        </article>
        <article class="bike bike--sheet" data-tilt>
          <div class="sheet__top"><span class="sheet__ic"><?= icon('truck') ?></span><span class="sheet__code">EZY · 03</span></div>
          <div class="bike__body">
            <h3 class="bike__name">EzyHaul E-Rickshaw</h3>
            <p class="bike__line">Cargo &amp; hyperlocal delivery</p>
            <dl class="specs">
              <div><dt><?= icon('road') ?>Range:</dt><dd>100 km/charge</dd></div>
              <div><dt><?= icon('bolt') ?>Charge Time:</dt><dd>4 hours</dd></div>
              <div><dt><?= icon('gauge') ?>Top Speed:</dt><dd>40 km/h</dd></div>
              <div><dt><?= icon('box') ?>Cargo Capacity:</dt><dd>500 kg</dd></div>
              <div><dt><?= icon('battery') ?>Battery:</dt><dd>72V Lead-acid</dd></div>
              <div><dt><?= icon('plug') ?>Motor:</dt><dd>1500W BLDC</dd></div>
            </dl>
            <div class="bike__foot"><p class="price">Earn Tk 35K+/month</p><a href="#rent-ev" class="btn btn--ink btn--sm">Partner Now <?= icon('arrow') ?></a></div>
          </div>
        </article>
      </div>
    </div>
  </section>

  <!-- ============ WHITE LABEL SOLUTIONS ============ -->
<?php include 'includes/whitelabel.php'; ?>

  <!-- ============ SUCCESS STORY ============ -->
  <section class="sec sec--night">
    <div class="glow"></div>
    <div class="wrap story">
      <div class="story__visual" data-reveal="left">
        <div class="story__panel">
          <div class="story__brand"><span><?= icon('bolt') ?></span><div><b>EzyFleet</b><small>Fleet Management OS</small></div></div>
          <p class="story__proven">Proven.</p>
          <div class="story__grid" aria-hidden="true"></div>
        </div>
        <p class="story__cap">Operational Excellence Through Technology</p>
      </div>
      <div>
        <p class="kick" data-reveal>Success Story</p>
        <h2 class="d2" data-reveal style="--i:1">How EzygoBD Transformed<br>Last-Mile Delivery in Dhaka</h2>
        <p class="lead" data-reveal style="--i:2">A leading e-commerce company in Bangladesh replaced 600 petrol bikes with EzygoBD e-scooters, cutting fuel costs by 65% and improving on-time delivery rates.</p>
        <div class="story__stats" data-stagger>
          <div><p class="stat__v"><?= num('30,000') ?><small>+</small></p><p class="stat__l">Daily Deliveries<br>Completed</p></div>
          <div><p class="stat__v"><?= num('500,000') ?><small>+</small></p><p class="stat__l">Kilometres<br>Logged Monthly</p></div>
        </div>
        <blockquote class="quote" data-reveal>
          <?= icon('quote') ?>
          <p>"EzygoBD's fleet OS gave us real-time visibility on every scooter. Our delivery SLA improved from 78% to 96% in 3 months."</p>
          <cite>— Logistics Director, Leading BD E-commerce Co.</cite>
        </blockquote>
        <a href="about.php" class="btn btn--lime" data-reveal>Read the Case Study <?= icon('arrow') ?></a>
      </div>
    </div>
  </section>

  <!-- ============ FLEET OPTIMIZATION ============ -->
  <section class="sec" id="ezyfleet">
    <div class="wrap">
      <div class="head head--center">
        <p class="kick" data-reveal>Intelligent Fleet Management</p>
        <h2 class="d2 balance" data-reveal style="--i:1">Autonomous Unified Fleet<br>Optimization Solution</h2>
        <p class="lead" data-reveal style="--i:2">Our platform uses smart analytics to predict demand, pre-position vehicles and auto-assign maintenance — keeping your fleet at peak performance with zero manual effort.</p>
      </div>
      <div class="fo">
        <div class="fo__list" data-stagger>
          <div class="fo__item"><span class="fo__ic"><?= icon('map') ?></span><div><h3 class="h4">Geofence &amp; Zone-Based Dispatch</h3><p>Automatically assign riders to zones. Reduce deadhead kilometres and increase utilisation.</p></div></div>
          <div class="fo__item"><span class="fo__ic"><?= icon('battery') ?></span><div><h3 class="h4">Predictive Battery Management</h3><p>System forecasts charge depletion and routes vehicles to stations before they run flat.</p></div></div>
          <div class="fo__item"><span class="fo__ic"><?= icon('gauge') ?></span><div><h3 class="h4">Live KPI Performance Dashboard</h3><p>Distance, revenue, energy consumed, rider score — all in a single real-time view.</p></div></div>
          <div class="fo__item"><span class="fo__ic"><?= icon('bell') ?></span><div><h3 class="h4">Automated Alert &amp; Incident System</h3><p>Instant notifications for harsh braking, overloading, or off-route excursions.</p></div></div>
          <div class="fo__item"><span class="fo__ic"><?= icon('team') ?></span><div><h3 class="h4">Multi-Role Team Management</h3><p>Assign fleet managers, mechanics and riders with granular permission control.</p></div></div>
          <div><a href="services.php" class="btn btn--lime">Get Started <?= icon('arrow') ?></a></div>
        </div>
        <div class="dash" data-reveal="pop">
          <div class="dash__screen">
            <div class="dash__bar"><span></span><span></span><span></span></div>
            <div class="dash__map" aria-hidden="true"><i></i><i></i><i></i><i></i><i></i><svg viewBox="0 0 400 220" preserveAspectRatio="none"><path d="M10 180 C 80 120, 120 200, 190 130 S 300 60, 390 90" /><path d="M30 40 C 120 70, 160 20, 240 60 S 340 170, 380 160" /></svg></div>
            <div class="dash__stats">
              <div><b>142</b><small>Active</small></div>
              <div><b>98%</b><small>Uptime</small></div>
              <div><b>3.2T</b><small>CO₂ saved</small></div>
            </div>
          </div>
          <div class="dash__float dash__float--1"><?= icon('scooter') ?><div><strong>EZY-0142</strong><small>Battery 84% · Online</small></div></div>
          <div class="dash__float dash__float--2"><?= icon('station') ?><div><strong>Charging Hub A</strong><small>12 slots available</small></div></div>
        </div>
      </div>
      <div class="bens" data-stagger="pop">
        <div class="ben"><span class="ben__ic"><?= icon('shield') ?></span><h3 class="h4">Real-Time Fleet Safety</h3><ul><li>Speed violation alerts</li><li>Geo-fence breach notifications</li><li>Crash detection via accelerometer</li><li>Emergency SOS button integration</li></ul></div>
        <div class="ben"><span class="ben__ic"><?= icon('bars') ?></span><h3 class="h4">Intelligent Analytics</h3><ul><li>Revenue per vehicle reports</li><li>Energy cost-per-km breakdown</li><li>Maintenance cost tracking</li><li>Rider performance leaderboard</li></ul></div>
        <div class="ben"><span class="ben__ic"><?= icon('chip') ?></span><h3 class="h4">Advanced IoT System</h3><ul><li>4G/MQTT connected hardware</li><li>Tamper-proof GPS module</li><li>OTA firmware updates</li><li>Remote immobilisation</li></ul></div>
      </div>
    </div>
  </section>

  <!-- ============ OUR PRODUCTS ============ -->
  <section class="sec sec--tint">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Our Product Lineup</p>
          <h2 class="d2" data-reveal style="--i:1">Our EVs &amp; Platform Tools</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Purpose-built electric vehicles and software products for every use-case across Bangladesh.</p>
      </div>
      <div class="lineup">
<?php
$products = [
  ['01', 'EzyGo E-Scooter', 'Our flagship two-wheeler — built for daily commuting, food delivery and last-mile logistics. Lightweight, powerful and engineered for Bangladesh roads.',
    [['road', '120 km range per charge'], ['bolt', '3-hour fast charge'], ['weight', 'Payload: 150 kg'], ['gauge', 'Top speed: 60 km/h']], 'services.php', 'Rent Now', 'arrow', 'scooter', 'From Tk 150/day'],
  ['02', 'EzyRide E-Bike', 'Pedal-assist electric bike for urban commuters who want exercise without the sweat. Fold-flat design fits inside apartments and offices.',
    [['road', '80 km range (assist mode)'], ['bolt', '2.5-hour charge'], ['weight', 'Vehicle weight: 22 kg'], ['gauge', 'Assist up to 35 km/h']], 'services.php', 'Rent Now', 'arrow', 'route', 'From Tk 100/day'],
  ['03', 'EzyHaul E-Rickshaw', 'Three-wheel electric cargo vehicle purpose-built for hyperlocal delivery businesses. Carry larger loads with zero emissions and dramatically lower running costs.',
    [['road', '100 km range per charge'], ['box', 'Cargo capacity: 500 kg'], ['bolt', '4-hour full charge'], ['taka', 'Save Tk 8,000+/month vs CNG']], 'services.php', 'Partner Now', 'arrow', 'truck', 'Earn Tk 35K+/month'],
  ['04', 'EzygoBD Rider App', 'Our mobile application puts EV rentals, payments and support in the palm of your hand. Available in Bengali and English, with bKash / Nagad integration.',
    [['android', 'Android &amp; iOS'], ['mobile', 'Bengali language UI'], ['card', 'bKash / Nagad / Card'], ['star', '4.8 ★ App Store rating']], '#app', 'Download App', 'download', 'mobile', 'Free Download'],
  ['05', 'EzyFleet GPS System', 'All-in-one IoT hardware unit installed on every EzygoBD vehicle. Delivers live location, battery telemetry, ride events and remote-lock capability over 4G.',
    [['satellite', 'GPS accuracy: &lt; 5m'], ['signal', '4G LTE connectivity'], ['lock', 'Remote immobilisation'], ['rotate', 'OTA firmware updates']], 'services.php', 'View Platform', 'arrow', 'satellite', 'All Models Included'],
];
foreach ($products as $i => $p): ?>
        <article class="prod<?= $i % 2 ? ' prod--rev' : '' ?>" data-reveal>
          <div class="prod__info">
            <span class="prod__n"><?= $p[0] ?></span>
            <h3 class="d3"><?= $p[1] ?></h3>
            <p class="muted"><?= $p[2] ?></p>
            <ul class="prod__specs">
<?php foreach ($p[3] as $s): ?>
              <li><?= icon($s[0]) ?> <?= $s[1] ?></li>
<?php endforeach; ?>
            </ul>
            <a href="<?= $p[4] ?>" class="btn btn--ink"><?= $p[5] ?> <?= icon($p[6]) ?></a>
          </div>
          <div class="prod__visual">
            <span class="prod__big" aria-hidden="true"><?= $p[0] ?></span>
            <span class="prod__ic"><?= icon($p[7]) ?></span>
            <span class="prod__badge"><?= $p[8] ?></span>
          </div>
        </article>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============ PARTNERS ============ -->
  <section class="sec">
    <div class="wrap">
      <div class="head head--center">
        <p class="kick" data-reveal>Trusted By</p>
        <h2 class="d2 balance" data-reveal style="--i:1">Powering Innovation at Leading Companies</h2>
        <p class="lead" data-reveal style="--i:2">Bangladesh's top delivery companies, startups and enterprises trust EzygoBD to run their electric fleets.</p>
      </div>
    </div>
<?php $names = ['ShopExpress BD', 'SwiftDeliver', 'FoodRun BD', 'UrbanLogix', 'ParcelBD', 'RiderPro', 'GreenMove', 'MetroFleet']; ?>
    <div class="marquee" data-reveal>
      <div class="marquee__track">
<?php foreach ([false, true] as $dup) foreach ($names as $n): ?>
        <span class="name-chip"<?= $dup ? ' aria-hidden="true"' : '' ?>><?= $n ?></span>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============ APP CTA ============ -->
  <section class="sec sec--tight" id="app">
    <div class="wrap">
      <div class="app on-night" data-reveal>
        <div class="glow"></div>
        <div class="app__text">
          <p class="kick">Navigate the Future</p>
          <h2 class="d2">Navigate the Future<br>with Our Fleet App</h2>
          <p class="lead">Download EzygoBD and start riding or managing your fleet today. Available on Android and iOS — completely free.</p>
          <div class="stores">
            <?= soon('google_play', icon('gplay') . '<span><small>Get it on</small><b>Google Play</b></span>', 'store') ?>
            <?= soon('app_store', icon('apple') . '<span><small>Download on the</small><b>App Store</b></span>', 'store') ?>
          </div>
        </div>
        <div class="app__qr">
          <div class="qr"><?= icon('qr') ?><p>Scan to Download</p></div>
          <div class="phone" aria-hidden="true"><div class="phone__screen"><img src="assets/img/logo-240.webp" width="120" height="33" alt="" loading="lazy"><span></span><span></span><span></span></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="sec">
    <div class="wrap faq">
      <div class="faq__side">
        <p class="faq__big" aria-hidden="true">FAQ</p>
        <p class="kick" data-reveal>Got Questions?</p>
        <h2 class="d2" data-reveal style="--i:1">Frequently Asked<br>Questions</h2>
        <p class="lead" data-reveal style="--i:2">Can't find what you're looking for? Reach out to our support team.</p>
        <a href="#contact" class="btn btn--ink" style="margin-top:28px" data-reveal>Contact Us <?= icon('arrow') ?></a>
      </div>
      <div class="faq__list" data-faq data-stagger>
        <details><summary>How do I rent an EzygoBD e-scooter?<?= icon('plus') ?></summary><p>Download the EzygoBD app, register with your NID, choose your plan (daily, weekly or monthly) and pick up your vehicle from the nearest hub. The whole process takes under 10 minutes.</p></details>
        <details><summary>What is the minimum age to rent?<?= icon('plus') ?></summary><p>Riders must be 18 years or older and hold a valid Bangladeshi driving licence. NID verification is done through the app at signup.</p></details>
        <details><summary>Is the vehicle insured? What happens after an accident?<?= icon('plus') ?></summary><p>Yes. Every EzygoBD vehicle carries third-party liability insurance. Comprehensive rider accident cover is included in monthly plans. Call our 24/7 helpline immediately after an incident.</p></details>
        <details><summary>Where are the charging / pickup hubs located?<?= icon('plus') ?></summary><p>We currently operate hubs in Dhaka (Dhanmondi, Gulshan, Uttara, Mirpur, Mohammadpur), Chittagong and Sylhet. Use the map in the app to find the nearest hub and check live vehicle availability.</p></details>
        <details><summary>How does the Franchise (FOCO) model work?<?= icon('plus') ?></summary><p>Under the FOCO model, EzygoBD owns and manages the vehicles while you own the hub real estate. You share revenue without handling operations. Starting investment is Tk 4.5 Lakhs for 10 scooters, with projected 90%* ROI in 3 years.</p></details>
        <details><summary>Can my business get a white-label EV fleet solution?<?= icon('plus') ?></summary><p>Absolutely. EzygoBD offers a full white-label package — branded vehicles, customised rider app (your logo/colours), dedicated fleet dashboard and 24/7 enterprise support. Contact our partnerships team for a quote.</p></details>
      </div>
    </div>
  </section>

  <!-- ============ GET IN TOUCH ============ -->
<?php include 'includes/reach.php'; ?>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
