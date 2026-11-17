<?php
$pageTitle = 'Ezygo bikes — Sparky, Eco Ride and EM1 specs';
$pageDesc  = 'Compare the three Ezygo electric bikes: range, top speed, charging time, payload and battery. Rent any of them by the day, week or month.';
$pagePath  = 'evs.php';
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
      <h1>Three electric bikes, one for every ride.</h1>
      <p class="lede">A fast scooter that goes 120 km on a charge, an eco-friendly e-bike, and a compact bike for daily use at Tk 299 a day.</p>
      <nav class="jump" aria-label="Bikes on this page">
<?php foreach ($BIKES as $slug => $b): ?>
        <a href="#<?= $slug ?>"><?= $b['name'] ?></a>
<?php endforeach; ?>
        <a href="#compare">Compare</a>
      </nav>
    </div>
  </section>

  <section class="section" aria-label="The bikes">
    <div class="wrap">
<?php foreach ($BIKES as $slug => $b): ?>
      <article class="ride" id="<?= $slug ?>">
        <div class="stage"><?= bike_pic($slug, $b['name'] . ' electric ' . ($slug === 'sparky' ? 'scooter' : 'bike') . ' in the studio', '(min-width: 900px) 52vw, 100vw', $slug === 'sparky') ?></div>
        <div>
          <h2><?= $b['name'] ?></h2>
          <p class="bike-line"><?= $b['line'] ?></p>
          <dl class="ride-specs">
            <div><dt>Range on one charge</dt><dd><?= $b['range'] ?></dd></div>
            <div><dt>Top speed</dt><dd><?= $b['speed'] ?></dd></div>
            <div><dt>Charging time</dt><dd><?= $b['charge'] ?></dd></div>
            <div><dt>Payload</dt><dd><?= $b['payload'] ?></dd></div>
            <div><dt>Battery</dt><dd><?= $b['battery'] ?></dd></div>
<?php if ($b['motor']): ?>
            <div><dt>Motor</dt><dd><?= $b['motor'] ?></dd></div>
<?php endif; ?>
          </dl>
          <div class="ride-foot">
            <a class="btn btn-primary" href="index.php#book" data-pick="<?= $slug ?>">Book <?= $b['name'] ?></a>
            <span class="price"><?= $b['price'] ?></span>
          </div>
        </div>
      </article>
<?php endforeach; ?>
    </div>
  </section>

  <section class="section" id="compare" aria-labelledby="compare-h">
    <div class="wrap">
      <div class="head">
        <h2 id="compare-h">Side by side</h2>
        <p class="sub">Range and speed depend on the rider, the load and the road.</p>
      </div>
      <div class="table-wrap" role="region" aria-labelledby="compare-h" tabindex="0">
        <table class="compare">
          <thead>
            <tr><td></td><?php foreach ($BIKES as $b): ?><th scope="col"><?= $b['name'] ?></th><?php endforeach; ?></tr>
          </thead>
          <tbody>
<?php
$rows = ['range' => 'Range', 'speed' => 'Top speed', 'charge' => 'Charging time', 'payload' => 'Payload', 'battery' => 'Battery', 'price' => 'Price'];
foreach ($rows as $k => $label): ?>
            <tr><th scope="row"><?= $label ?></th><?php foreach ($BIKES as $b): ?><td><?= $b[$k] ?></td><?php endforeach; ?></tr>
<?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="inc-h">
    <div class="wrap split">
      <div class="split-head">
        <h2 id="inc-h">Every rental includes</h2>
      </div>
      <div class="tiles">
        <div class="tile"><?= icon('shield') ?><h3>Insurance</h3><p>Third-party insurance on every rental plan.</p></div>
        <div class="tile"><?= icon('support') ?><h3>24/7 rider support</h3><p>Call or WhatsApp us any time for roadside help.</p></div>
        <div class="tile"><?= icon('clock') ?><h3>Flexible plans</h3><p>Rent by the day, the week or the month.</p></div>
        <div class="tile"><?= icon('route') ?><h3>GPS on every bike</h3><p>Each bike is tracked, with live battery and trip data.</p></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="cta-band">
        <div>
          <h2>Pick a bike and send a request.</h2>
          <p class="sub">We confirm bookings within 2 hours. Bring your documents when you pick up the bike.</p>
        </div>
        <div class="ctas">
          <a class="btn btn-primary" href="index.php#book">Book a bike</a>
          <a class="btn btn-ghost" href="services.php#riders">See rental plans</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
