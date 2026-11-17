<?php
$pageTitle = 'About Ezygo — electric mobility for Bangladesh';
$pageDesc  = 'Ezygo makes clean, affordable electric mobility available to riders, delivery partners and businesses across Bangladesh.';
$pagePath  = 'about.php';
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
      <h1>Clean, affordable rides for every Bangladeshi.</h1>
      <p class="lede">Ezygo rents electric scooters and e-bikes to riders, delivery partners and businesses. We want every short trip in Bangladesh to be zero-emission.</p>
    </div>
  </section>

  <section class="section" aria-labelledby="why-h">
    <div class="wrap">
      <h2 id="why-h" class="head">What we're working towards</h2>
      <div class="tiles tiles-3">
        <div class="tile"><?= icon('leaf') ?><h3>Mission</h3><p>Replace fossil-fuel vehicles with affordable, reliable electric ones, cutting air pollution in our cities and creating sustainable jobs.</p></div>
        <div class="tile"><?= icon('route') ?><h3>Vision</h3><p>A Bangladesh where every last-mile journey is zero-emission, on locally charged, locally operated electric vehicles.</p></div>
        <div class="tile"><?= icon('users') ?><h3>Values</h3><p>Sustainability, inclusion and innovation. Clean transport should be a right, not a luxury.</p></div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="founder-h">
    <div class="wrap founder">
      <div class="portrait"><?= team_pic('sazzatul', 'Md Sazzatul Islam, founder and CEO of Ezygo') ?></div>
      <div class="founder-text">
        <h2 id="founder-h">Md Sazzatul Islam</h2>
        <p class="role">Founder and CEO</p>
        <p>An electrical engineer and entrepreneur who founded Ezygo to make urban transport in Bangladesh sustainable through electric vehicles.</p>
        <p>Under his leadership Ezygo has pioneered 72V lithium-powered solutions for urban mobility, built sustainable rental frameworks, and was named Most Impactful Business at the Renewable Energy Fest. His expertise covers lithium-ion batteries, EV logistics and sustainable infrastructure.</p>
        <div class="ctas" style="margin-top:28px"><a class="btn btn-ghost" href="team.php">Meet the team</a></div>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="clients-h">
    <div class="wrap clients-head">
      <div>
        <h2 id="clients-h">Who we work with</h2>
        <p class="sub">Delivery platforms, resorts and businesses run electric fleets with Ezygo.</p>
      </div>
      <ul class="clients">
        <li><img src="assets/img/client-foodpanda.webp" width="48" height="44" alt="foodpanda" loading="lazy"></li>
        <li><img src="assets/img/client-deraresort.webp" width="105" height="44" alt="Dera Resort &amp; Spa" loading="lazy"></li>
        <li><img src="assets/img/client-foodi.webp" width="102" height="44" alt="Foodi" loading="lazy"></li>
        <li><img src="assets/img/client-sapphire.webp" width="44" height="44" alt="White Orchid Sapphire" loading="lazy"></li>
        <li><img src="assets/img/client-sharedeal.webp" width="131" height="44" alt="ShareDeal" loading="lazy"></li>
      </ul>
    </div>
  </section>

  <section class="section" id="credentials" aria-labelledby="cred-h">
    <div class="wrap split">
      <div class="split-head">
        <h2 id="cred-h">Registered and licensed</h2>
        <p class="sub">The paperwork behind every rental.</p>
      </div>
      <div class="tiles">
        <div class="tile"><?= icon('building') ?><h3>Business registration</h3><p>Registered as Ezygo Electric Ltd. with the Registrar of Joint Stock Companies and Firms (RJSC).</p></div>
        <div class="tile"><?= icon('doc') ?><h3>Trade licence</h3><p>Licensed for electric vehicle rental and fleet management. Licence TRAD/DSCC/037731/2025.</p></div>
        <div class="tile"><?= icon('leaf') ?><h3>Environmental compliance</h3><p>Compliant with Department of Environment rules for zero-emission vehicle operations.</p></div>
        <div class="tile"><?= icon('shield') ?><h3>Vehicle safety</h3><p>Our vehicles meet BRTA safety and registration standards.</p></div>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="cta-band">
        <div>
          <h2>Ride with us, or build with us.</h2>
          <p class="sub">Rent a bike, open a franchise hub or join the team.</p>
        </div>
        <div class="ctas">
          <a class="btn btn-primary" href="index.php#book">Book a bike</a>
          <a class="btn btn-ghost" href="join.php">Join us</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
