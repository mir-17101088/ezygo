<?php
$pageTitle = "Franchise — EzygoBD | FOCO & FOFO EV Hub Models";
$pageDesc  = "Open an EzygoBD EV franchise hub. Compare the FOCO (company operated) and FOFO (franchise operated) models, starting from Tk 4.5 Lakhs with 10 scooters.";
$pagePath  = 'franchise.php';

function model_block($id, $alt, $badge, $title, $sub, $metrics, $howTitle, $steps, $whyTitle, $whys, $cta) { ?>
  <section class="sec<?= $alt ? ' sec--tint' : '' ?>" id="<?= $id ?>">
    <div class="wrap">
      <div class="model-head">
        <div>
          <span class="pill" data-reveal><?= icon('crown') ?> <?= $badge ?></span>
          <h2 class="d2" data-reveal style="--i:1"><?= $title ?></h2>
        </div>
        <p class="lead" data-reveal style="--i:2"><?= $sub ?></p>
      </div>
      <div class="metrics" data-stagger="pop">
<?php foreach ($metrics as $m): ?>
        <div class="metric"><p class="metric__v"><?= $m[0] ?></p><p class="metric__l"><?= $m[1] ?></p></div>
<?php endforeach; ?>
      </div>
      <div class="model-body">
        <div>
          <h3 class="d3" data-reveal><?= $howTitle ?></h3>
          <ol class="steps" data-stagger>
<?php foreach ($steps as $i => $s): ?>
            <li class="step"><span class="step__n"><?= $i + 1 ?></span><div><h4 class="h4"><?= $s[0] ?></h4><p><?= $s[1] ?></p></div></li>
<?php endforeach; ?>
          </ol>
        </div>
        <div class="why" data-reveal="right">
          <h3 class="d3"><?= $whyTitle ?></h3>
          <ul>
<?php foreach ($whys as $w): ?>
            <li><span class="why__ic"><?= icon($w[0]) ?></span><div><strong><?= $w[1] ?></strong><p><?= $w[2] ?></p></div></li>
<?php endforeach; ?>
          </ul>
          <a href="#fr-contact" class="btn btn--lime btn--block"><?= icon('send') ?> <?= $cta ?></a>
        </div>
      </div>
    </div>
  </section>
<?php }
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
  <section class="hero hero--fr">
    <?= hero_video() ?>
    <div class="glow"></div>
    <div class="hero__in wrap">
      <h1 class="d1 balance" data-reveal style="--i:0">Join Us in our <em>Green Mission</em></h1>
      <p class="lead" data-reveal style="--i:1">Choose a franchise model that fits your ambition. Build a profitable EV hub with EzygoBD.</p>
      <div class="pick" data-stagger="pop">
        <a href="#foco" class="pick__card">
          <h2 class="pick__name">FOCO</h2>
          <div class="pick__banner">
            <span class="pick__kick">Introducing EzygoBD Franchise (FOCO) Model</span>
            <h3 class="pick__h">Earn <em>90%</em> ROI<br>in just <em>3 years</em></h3>
            <span class="pick__deco"><?= icon('chart') ?></span>
            <span class="pick__note">*T&amp;C Apply</span>
          </div>
          <p class="pick__desc">Franchise Owned Company Operated — We manage, you earn. <?= icon('arrow') ?></p>
        </a>
        <a href="#fofo" class="pick__card">
          <h2 class="pick__name">FOFO</h2>
          <div class="pick__banner">
            <span class="pick__kick">Introducing EzygoBD Franchise (FOFO) Model</span>
            <h3 class="pick__h">Earn upto <em>45% to 65%</em><br>ROI in <em>3 Years</em></h3>
            <div class="pick__invest"><span>Starting Investments</span><b>Tk 4.5 Lakhs</b><small>with 10 scooters</small></div>
            <span class="pick__note">*T&amp;C Apply</span>
          </div>
          <p class="pick__desc">Franchise Owned Franchise Operated — You own and run it. <?= icon('arrow') ?></p>
        </a>
      </div>
    </div>
  </section>

<?php
model_block('foco', false, 'FOCO Model', 'Franchise Owned,<br><em>Company Operated</em>',
  'You invest in the hub infrastructure — EzygoBD handles end-to-end operations, fleet management, and customer support. Sit back and watch your money grow.',
  [['90%*', 'ROI in 3 Years'], ['Tk 4.5L', 'Starting Investment'], ['10+', 'Scooters Per Hub'], ['24/7', 'Support &amp; Ops']],
  'How FOCO Works', [
    ['Invest in a Hub', 'Secure a location (200–400 sqft) and fund the initial setup — scooters, charging infra, branding.'],
    ['EzygoBD Takes Over Operations', 'We deploy our team to manage rentals, maintenance, battery swaps, and customer relations.'],
    ['Earn Monthly Revenue', 'You receive a guaranteed revenue share every month with full transparency and digital reporting.'],
    ['Scale When Ready', 'Add more scooters or open additional hubs in new locations to multiply your earnings.'],
  ],
  'Why Choose FOCO?', [
    ['leaf', 'Zero Operational Hassle', 'EzygoBD manages everything — you focus on growth.'],
    ['shield', 'Low Risk', 'Proven model with guaranteed minimum revenue commitment.'],
    ['chart', 'High Returns', 'Up to 90% ROI within the first 3 years.'],
    ['gauge', 'Transparent Dashboard', 'Live reporting on fleet performance, revenue, and utilisation.'],
  ], 'Apply for FOCO Franchise');

model_block('fofo', true, 'FOFO Model', 'Franchise Owned,<br><em>Franchise Operated</em>',
  'You own the hub AND run the daily operations. Get comprehensive training, tech stack, and brand support from EzygoBD — keeping more of the earnings yourself.',
  [['45–65%*', 'ROI in 3 Years'], ['Tk 4.5L', 'Starting Investment'], ['10+', 'Scooters Per Hub'], ['You', 'Run the Show']],
  'How FOFO Works', [
    ['Set Up Your Hub', 'We help you find the right location, set up charging, branding, and fleet. Full turnkey support.'],
    ['Get Trained by EzygoBD', 'Comprehensive 2-week training on fleet ops, app usage, customer handling, and battery management.'],
    ['Operate Independently', 'You manage daily rentals, maintenance, and customer service — with our tech and support backbone.'],
    ['Keep Higher Margins', 'No ops fee means more revenue stays with you. Pay only a brand royalty percentage.'],
  ],
  'Why Choose FOFO?', [
    ['coins', 'Higher Earning Potential', 'More revenue stays with you since you handle operations.'],
    ['book', 'Full Training', '2-week intensive onboarding + ongoing technical support.'],
    ['chip', 'EzygoBD Tech Stack', 'Access to our rider app, fleet dashboard, and IoT monitoring.'],
    ['star', 'Brand Power', 'Operate under the EzygoBD brand — trusted across Bangladesh.'],
  ], 'Apply for FOFO Franchise');
?>

  <!-- ============ COMPARISON TABLE ============ -->
  <section class="sec">
    <div class="wrap wrap--narrow">
      <div class="head head--center">
        <p class="kick" data-reveal>Side by Side</p>
        <h2 class="d2" data-reveal style="--i:1">FOCO vs FOFO</h2>
        <p class="lead" data-reveal style="--i:2">Not sure which model is right for you? Here's a quick comparison.</p>
      </div>
      <div class="table-wrap" data-reveal>
        <table class="compare">
          <thead><tr><th scope="col">Feature</th><th scope="col"><span class="th-tag th-tag--lime">FOCO</span></th><th scope="col"><span class="th-tag">FOFO</span></th></tr></thead>
          <tbody>
            <tr><th scope="row">Who Operates?</th><td>EzygoBD</td><td>You (Franchise Owner)</td></tr>
            <tr><th scope="row">Investment</th><td>Tk 4.5 Lakhs+</td><td>Tk 4.5 Lakhs+</td></tr>
            <tr><th scope="row">Expected ROI</th><td><strong class="hl">Up to 90%</strong> in 3 years</td><td><strong>45–65%</strong> in 3 years</td></tr>
            <tr><th scope="row">Operational Effort</th><td><?= icon('check-c') ?> None — fully managed</td><td><?= icon('user') ?> Hands-on daily</td></tr>
            <tr><th scope="row">Training</th><td>Not required</td><td>2-week intensive</td></tr>
            <tr><th scope="row">Revenue Share</th><td>Fixed monthly payout</td><td>Higher margins, brand royalty</td></tr>
            <tr><th scope="row">Best For</th><td>Passive investors</td><td>Hands-on entrepreneurs</td></tr>
          </tbody>
        </table>
      </div>
    </div>
  </section>

  <!-- ============ APPLY ============ -->
  <section class="sec sec--night" id="fr-contact">
    <div class="glow"></div>
    <div class="wrap reach">
      <div>
        <p class="kick" data-reveal>Get In Touch</p>
        <h2 class="d2" data-reveal style="--i:1">Ready to Start Your<br>Franchise Journey?</h2>
        <p class="lead" data-reveal style="--i:2">Fill out the form and our partnership team will reach out within 24 hours.</p>
        <ul class="info-rows" data-stagger>
          <li><?= icon('phone') ?> <a href="tel:+8801828721222">01828-721222</a></li>
          <li><?= icon('mail') ?> <a href="mailto:franchise@ezygobd.com">franchise@ezygobd.com</a></li>
          <li><?= icon('pin') ?> <span>Dhaka, Bangladesh</span></li>
        </ul>
      </div>
      <div class="form-card" data-reveal="pop">
        <form action="form-handler.php" method="POST" data-form="franchise" class="fields">
          <input type="hidden" name="form_type" value="franchise"><?= form_guard() ?>
          <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your application is in. Our partnership team will reach out within 24 hours.</p>
          <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your application didn't go through. Please check the fields, or call 01828-721222.</p>
          <div class="row2">
            <div class="field"><label for="frName">Full Name</label><input type="text" id="frName" name="name" placeholder="Your name" autocomplete="name" required></div>
            <div class="field"><label for="frPhone">Phone</label><input type="tel" id="frPhone" name="phone" placeholder="+880 1XXX-XXXXXX" autocomplete="tel" required></div>
          </div>
          <div class="field"><label for="frEmail">Email</label><input type="email" id="frEmail" name="email" placeholder="you@example.com" autocomplete="email" required></div>
          <div class="field"><label for="frCity">Preferred City / Area</label><input type="text" id="frCity" name="city" placeholder="e.g. Dhaka, Chattogram, Sylhet"></div>
          <div class="field"><label for="frModel">Preferred Model</label>
            <select id="frModel" name="model">
              <option value="">Select a franchise model</option><option value="foco">FOCO — Company Operated</option><option value="fofo">FOFO — Franchise Operated</option><option value="both">Not sure — tell me more</option>
            </select></div>
          <div class="field"><label for="frMsg">Message (optional)</label><textarea id="frMsg" name="message" rows="3" placeholder="Any questions or comments..."></textarea></div>
          <button type="submit" class="btn btn--lime"><?= icon('send') ?> Submit Application</button>
        </form>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
