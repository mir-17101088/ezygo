<?php
$pageTitle = 'Ezygo franchise — run an electric bike hub (FOCO and FOFO)';
$pageDesc  = 'Open an Ezygo electric bike hub from Tk 4.5 lakh with 10 scooters. Let Ezygo operate it (FOCO) or run it yourself (FOFO).';
$pagePath  = 'franchise.php';
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
      <h1>Own an Ezygo hub.</h1>
      <p class="lede">Start with Tk 4.5 lakh and 10 scooters. Choose whether we run the hub for you or you run it yourself.</p>
      <div class="ctas">
        <a class="btn btn-primary" href="#apply">Apply for a franchise</a>
        <a class="btn btn-ghost" href="#compare">Compare the models</a>
      </div>
    </div>
  </section>

  <!-- The two models -->
  <section class="section" aria-labelledby="models-h">
    <div class="wrap">
      <h2 id="models-h" class="head">Two ways to own a hub</h2>
      <div class="models">
        <article class="model" id="foco">
          <p class="model-name">FOCO</p>
          <h3>Franchise owned, company operated</h3>
          <p>You invest in the hub. Ezygo runs everything: rentals, maintenance, battery swaps and customer support. You receive revenue every month.</p>
          <dl>
            <dt>Investment</dt><dd>From Tk 4.5 lakh</dd>
            <dt>Fleet</dt><dd>10+ scooters per hub</dd>
            <dt>Projected return</dt><dd>Up to 90% in 3 years*</dd>
            <dt>Your time</dt><dd>None. Fully managed</dd>
            <dt>Best for</dt><dd>Investors who want passive income</dd>
          </dl>
          <a class="btn btn-primary" href="#apply" data-model="FOCO">Apply for FOCO</a>
        </article>
        <article class="model" id="fofo">
          <p class="model-name">FOFO</p>
          <h3>Franchise owned, franchise operated</h3>
          <p>You own the hub and run it day to day, with Ezygo's training, technology and brand behind you. You keep a bigger share of the earnings.</p>
          <dl>
            <dt>Investment</dt><dd>From Tk 4.5 lakh</dd>
            <dt>Fleet</dt><dd>10+ scooters per hub</dd>
            <dt>Projected return</dt><dd>45–65% in 3 years*</dd>
            <dt>Your time</dt><dd>Hands-on, every day</dd>
            <dt>Best for</dt><dd>Entrepreneurs who want to run a business</dd>
          </dl>
          <a class="btn btn-primary" href="#apply" data-model="FOFO">Apply for FOFO</a>
        </article>
      </div>
      <p class="fine">*Terms and conditions apply. Return figures are projections based on current operating data.</p>
    </div>
  </section>

  <!-- How it works -->
  <section class="section" aria-labelledby="how-h">
    <div class="wrap">
      <h2 id="how-h" class="head">How it works</h2>
      <h3 class="block-title" style="margin-bottom:20px">FOCO</h3>
      <ol class="flow flow-4">
        <li><span class="n">Step 1</span><h3>Invest in a hub</h3><p>Secure a 200–400 sq ft location and fund the setup: scooters, charging and branding.</p></li>
        <li><span class="n">Step 2</span><h3>We take over operations</h3><p>Our team runs rentals, maintenance, battery swaps and customer relations.</p></li>
        <li><span class="n">Step 3</span><h3>Earn every month</h3><p>You receive a revenue share each month, with digital reports.</p></li>
        <li><span class="n">Step 4</span><h3>Scale when ready</h3><p>Add scooters or open more hubs in new areas.</p></li>
      </ol>
      <h3 class="block-title" style="margin:48px 0 20px">FOFO</h3>
      <ol class="flow flow-4">
        <li><span class="n">Step 1</span><h3>Set up your hub</h3><p>We help you find a location and set up charging, branding and the fleet.</p></li>
        <li><span class="n">Step 2</span><h3>Train with Ezygo</h3><p>Two weeks of training on fleet operations, the app, customers and batteries.</p></li>
        <li><span class="n">Step 3</span><h3>Run it yourself</h3><p>You manage rentals, maintenance and customer service, with our technology and support.</p></li>
        <li><span class="n">Step 4</span><h3>Keep higher margins</h3><p>No operations fee. You pay a brand royalty only.</p></li>
      </ol>
    </div>
  </section>

  <!-- Compare -->
  <section class="section" id="compare" aria-labelledby="compare-h">
    <div class="wrap">
      <h2 id="compare-h" class="head">FOCO or FOFO?</h2>
      <div class="table-wrap" role="region" aria-labelledby="compare-h" tabindex="0">
        <table class="compare">
          <thead><tr><td></td><th scope="col">FOCO</th><th scope="col">FOFO</th></tr></thead>
          <tbody>
            <tr><th scope="row">Who runs the hub</th><td>Ezygo</td><td>You</td></tr>
            <tr><th scope="row">Investment</th><td>From Tk 4.5 lakh</td><td>From Tk 4.5 lakh</td></tr>
            <tr><th scope="row">Projected return</th><td>Up to 90% in 3 years*</td><td>45–65% in 3 years*</td></tr>
            <tr><th scope="row">Day-to-day work</th><td>None</td><td>Hands-on daily</td></tr>
            <tr><th scope="row">Training</th><td>Not needed</td><td>2 weeks</td></tr>
            <tr><th scope="row">How you earn</th><td>Fixed monthly payout</td><td>Higher margins, pay a brand royalty</td></tr>
            <tr><th scope="row">Best for</th><td>Passive investors</td><td>Hands-on entrepreneurs</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- Apply -->
  <section class="section" id="apply" aria-labelledby="apply-h">
    <div class="wrap book-grid">
      <div class="book-intro">
        <h2 id="apply-h">Apply for a franchise</h2>
        <p class="lede">Send your details and our partnership team will contact you within 24 hours.</p>
        <ul class="contact-list">
          <li><?= icon('phone') ?><div><span>Phone</span><a href="tel:+8801828721222">01828-721222</a></div></li>
          <li><?= icon('mail') ?><div><span>Email</span><a href="mailto:franchise@ezygobd.com">franchise@ezygobd.com</a></div></li>
        </ul>
      </div>
      <form class="form" action="form-handler.php" method="post" data-form="franchise" novalidate>
        <input type="hidden" name="form_type" value="franchise">
        <div class="notice ok" role="status" hidden data-notice="success"><?= icon('check') ?><span>Thank you. Our partnership team will contact you within 24 hours.</span></div>
        <div class="notice err" role="alert" hidden data-notice="error"><span>Your application didn't go through. Please try again, or call 01828-721222.</span></div>
        <div class="fields fields-2">
          <div class="field"><label for="f-name">Full name</label><input id="f-name" name="name" autocomplete="name" required></div>
          <div class="field"><label for="f-phone">Mobile number</label><input id="f-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="01XXXXXXXXX" required></div>
          <div class="field"><label for="f-email">Email</label><input id="f-email" name="email" type="email" autocomplete="email" required></div>
          <div class="field"><label for="f-city">City or area for the hub</label><input id="f-city" name="city" autocomplete="address-level2" required></div>
        </div>
        <div class="fields" style="margin:16px 0 24px">
          <div class="field">
            <label for="f-model">Model</label>
            <select id="f-model" name="model">
              <option value="FOCO">FOCO: Ezygo runs the hub</option>
              <option value="FOFO">FOFO: I run the hub</option>
              <option value="Not sure">Not sure yet</option>
            </select>
          </div>
          <div class="field"><label for="f-msg">Anything else <span class="opt">(optional)</span></label><textarea id="f-msg" name="message"></textarea></div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Send application</button>
      </form>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
<script>
  /* "Apply for FOCO/FOFO" preselects the model */
  document.addEventListener('click', function (e) {
    var a = e.target.closest('[data-model]'); if (!a) return;
    var s = document.getElementById('f-model'); if (s) s.value = a.getAttribute('data-model');
  });
</script>
</body>
</html>
