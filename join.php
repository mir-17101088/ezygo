<?php
$pageTitle = "Join Us — EzygoBD | Franchise, Advertising & Careers";
$pageDesc  = "Invest, partner or build your career with EzygoBD: FOCO and FOFO franchise models, fleet advertising and jobs in operations, technology and marketing.";
$pagePath  = 'join.php';
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
      <h1 class="d1 balance" data-reveal style="--i:0">Join the <em>Green Revolution</em></h1>
      <p class="lead" data-reveal style="--i:1">Whether you want to invest, partner, or build your career — EzygoBD has an opportunity for you.</p>
      <nav class="jump" aria-label="On this page" data-reveal style="--i:2">
        <a href="#franchise"><?= icon('crown') ?> Franchise</a>
        <a href="#advertising"><?= icon('megaphone') ?> Advertising</a>
        <a href="#careers"><?= icon('users') ?> Careers</a>
        <a href="#join-form" class="jump--go"><?= icon('send') ?> Apply Now</a>
      </nav>
    </div>
  </section>

  <!-- ============ FRANCHISE ============ -->
  <section class="sec" id="franchise">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Franchise Opportunity</p>
          <h2 class="d2" data-reveal style="--i:1">Partner With EzygoBD</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Choose a franchise model that fits your ambition. Build a profitable EV hub with Bangladesh's #1 electric vehicle rental network.</p>
      </div>
      <div class="opps opps--2" data-stagger="pop">
        <article class="opp opp--night"><span class="opp__ic"><?= icon('crown') ?></span><h3 class="h3">FOCO — Franchise Owned, Company Operated</h3><p>You own the hub, we manage everything — fleet operations, maintenance, rider management and support. Passive income with zero operational hassle.</p><span class="opp__hl"><?= icon('chart') ?> 90%* ROI in 3 Years</span></article>
        <article class="opp"><span class="opp__ic"><?= icon('handshake') ?></span><h3 class="h3">FOFO — Franchise Owned, Franchise Operated</h3><p>Full ownership and hands-on operation of your EV hub. We provide the fleet, technology platform, training and brand. You run the business.</p><span class="opp__hl"><?= icon('chart') ?> 45-65%* ROI in 3 Years</span></article>
      </div>
      <div class="table-wrap" data-reveal style="margin-top:24px">
        <table class="compare">
          <thead><tr><th scope="col">Feature</th><th scope="col"><span class="th-tag th-tag--lime">FOCO</span></th><th scope="col"><span class="th-tag">FOFO</span></th></tr></thead>
          <tbody>
            <tr><th scope="row">Starting Investment</th><td>Tk 4.5 Lakhs</td><td>Tk 4.5 Lakhs</td></tr>
            <tr><th scope="row">Who Operates?</th><td>EzygoBD</td><td>You</td></tr>
            <tr><th scope="row">Fleet Provided</th><td>10+ Scooters</td><td>10+ Scooters</td></tr>
            <tr><th scope="row">Expected ROI</th><td><strong class="hl">Up to 90%*</strong></td><td><strong>45-65%*</strong></td></tr>
            <tr><th scope="row">Maintenance</th><td>EzygoBD handles</td><td>Shared responsibility</td></tr>
            <tr><th scope="row">Support</th><td>24/7 full support</td><td>Training + tech support</td></tr>
            <tr><th scope="row">Best For</th><td>Passive investors</td><td>Hands-on entrepreneurs</td></tr>
          </tbody>
        </table>
      </div>
      <p class="fineprint" data-reveal>*T&amp;C Apply. ROI projections are estimates based on current operational data.</p>
    </div>
  </section>

  <!-- ============ ADVERTISING ============ -->
  <section class="sec sec--tint" id="advertising">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Advertising Partnership</p>
          <h2 class="d2" data-reveal style="--i:1">Advertise on Our Fleet</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Put your brand on wheels. EzygoBD's fleet covers 64+ districts with 250M+ monthly impressions.</p>
      </div>
      <div class="opps opps--4" data-stagger="pop">
        <article class="opp"><span class="opp__ic"><?= icon('scooter') ?></span><h3 class="h4">Scooter Body Wrap</h3><p>Full or partial body wrap on our e-scooters. High-visibility branding across city streets and delivery routes.</p><span class="opp__hl">From Tk 8,000/month per vehicle</span></article>
        <article class="opp"><span class="opp__ic"><?= icon('truck') ?></span><h3 class="h4">Rickshaw Panel Board</h3><p>Large format panel ads on our e-rickshaws. Maximum visibility in busy marketplaces and commercial areas.</p><span class="opp__hl">From Tk 12,000/month per vehicle</span></article>
        <article class="opp"><span class="opp__ic"><?= icon('mobile') ?></span><h3 class="h4">In-App Advertising</h3><p>Reach 120+ active riders directly through banner ads, push notifications and sponsored content in the EzygoBD app.</p><span class="opp__hl">From Tk 5,000/month</span></article>
        <article class="opp"><span class="opp__ic"><?= icon('qr') ?></span><h3 class="h4">QR Code Campaigns</h3><p>Interactive QR codes placed on vehicles linking to your landing pages, special offers or promotions.</p><span class="opp__hl">Add-on to any package</span></article>
      </div>
    </div>
  </section>

  <!-- ============ CAREERS ============ -->
  <section class="sec" id="careers">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Careers at EzygoBD</p>
          <h2 class="d2" data-reveal style="--i:1">Build Your Career With Us</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Join a passionate team building Bangladesh's cleanest mobility ecosystem. We're always looking for talented people.</p>
      </div>
      <div class="opps opps--3" data-stagger="pop">
        <article class="opp opp--job"><span class="opp__ic"><?= icon('wrench') ?></span><h3 class="h3">Operations &amp; Fleet</h3><p>Fleet managers, hub supervisors, mechanics and logistics coordinators. Keep our EV network running smoothly.</p><a href="#join-form" class="link-go">Apply <?= icon('arrow') ?></a></article>
        <article class="opp opp--job"><span class="opp__ic"><?= icon('code') ?></span><h3 class="h3">Technology</h3><p>Software engineers, IoT developers, data analysts and product designers. Build the technology powering our platform.</p><a href="#join-form" class="link-go">Apply <?= icon('arrow') ?></a></article>
        <article class="opp opp--job"><span class="opp__ic"><?= icon('megaphone') ?></span><h3 class="h3">Marketing &amp; Sales</h3><p>Digital marketers, content creators, business development and partnership managers. Grow our brand and partnerships.</p><a href="#join-form" class="link-go">Apply <?= icon('arrow') ?></a></article>
      </div>
    </div>
  </section>

  <!-- ============ JOIN FORM ============ -->
  <section class="sec sec--night" id="join-form">
    <div class="glow"></div>
    <div class="wrap reach">
      <div>
        <h2 class="d2" data-reveal>Ready to Join?</h2>
        <p class="lead" data-reveal style="--i:1">Whether you're interested in a franchise partnership, advertising on our fleet, or joining our team — fill out the form and our team will get back to you within 48 hours.</p>
        <ul class="reach__list reach__list--night" data-stagger>
          <li><?= icon('phone') ?><div><strong>Phone / WhatsApp</strong><p><a href="tel:+8801828721222">01828-721222</a> / <a href="tel:+8801576597666">01576-597666</a></p></div></li>
          <li><?= icon('mail') ?><div><strong>Email</strong><p><a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></p></div></li>
          <li><?= icon('pin') ?><div><strong>Head Office</strong><p>Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</p></div></li>
        </ul>
      </div>
      <div class="form-card" data-reveal="pop">
        <form action="form-handler.php" method="POST" data-form="join" class="fields">
          <input type="hidden" name="form_type" value="join"><?= form_guard() ?>
          <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your application is in. Our team will get back to you within 48 hours.</p>
          <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your application didn't go through. Please check the fields, or call 01828-721222.</p>
          <div class="field"><label for="jfType">I'm interested in <span>*</span></label>
            <select id="jfType" name="interest_type" required>
              <option value="">Select one</option><option value="Franchise (FOCO)">Franchise — FOCO Model</option><option value="Franchise (FOFO)">Franchise — FOFO Model</option><option value="Advertising">Advertising Partnership</option><option value="Career">Career / Job Opportunity</option><option value="Other">Other Partnership</option>
            </select></div>
          <div class="row2">
            <div class="field"><label for="jfName">Full Name <span>*</span></label><input type="text" id="jfName" name="name" placeholder="Your full name" autocomplete="name" required></div>
            <div class="field"><label for="jfPhone">Phone Number <span>*</span></label><input type="tel" id="jfPhone" name="phone" placeholder="01XXXXXXXXX" autocomplete="tel" required></div>
          </div>
          <div class="field"><label for="jfEmail">Email Address <span>*</span></label><input type="email" id="jfEmail" name="email" placeholder="you@example.com" autocomplete="email" required></div>
          <div class="row2">
            <div class="field"><label for="jfCompany">Company / Organization</label><input type="text" id="jfCompany" name="company" placeholder="Your company (if applicable)" autocomplete="organization"></div>
            <div class="field"><label for="jfCity">City</label><input type="text" id="jfCity" name="city" placeholder="Your city" autocomplete="address-level2"></div>
          </div>
          <div class="field"><label for="jfMsg">Message</label><textarea id="jfMsg" name="message" rows="4" placeholder="Tell us about your interest…"></textarea></div>
          <button type="submit" class="btn btn--lime">Submit Application <?= icon('send') ?></button>
        </form>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
