<?php
$pageTitle    = 'Ezygo — Rent an electric scooter from Tk 299 a day';
$pageDesc     = 'Rent an Ezygo electric scooter or e-bike by the day, week or month, from Tk 299 a day. Third-party insurance and 24/7 rider support included.';
$pagePath     = '';
$preloadImg   = 'assets/img/sparky-480.avif 480w, assets/img/sparky-800.avif 800w, assets/img/sparky-1200.avif 1200w';
$preloadSizes = '(min-width: 900px) 52vw, 100vw';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/v2/head.php'; ?>
</head>
<body>
<?php include 'includes/v2/header.php'; ?>

<main id="main">

  <!-- Hero: the bike on its own showroom grey -->
  <section class="hero">
    <div class="wrap">
      <div class="hero-grid">
        <div>
          <h1>Ride electric from Tk 299 a day.</h1>
          <p class="lede">Rent an Ezygo e-scooter or e-bike by the day, week or month. Third-party insurance and 24/7 rider support come with every plan.</p>
          <div class="ctas">
            <a class="btn btn-primary" href="#book">Book a bike</a>
            <a class="btn btn-ghost" href="https://wa.me/8801828721222" target="_blank" rel="noopener"><?= icon('whatsapp') ?>Chat on WhatsApp</a>
          </div>
        </div>
        <div class="stage">
          <?= bike_pic('sparky', 'Red Sparky electric scooter in the studio', '(min-width: 900px) 52vw, 100vw', true) ?>
          <p class="stage-tag"><b>Sparky</b>120 km+ on one charge</p>
        </div>
      </div>
      <div class="facts">
        <div><b>Insured</b>on every rental plan</div>
        <div><b>24/7</b>rider support</div>
        <div><b>3 models</b>scooter to e-bike</div>
        <div><b>120+</b>active riders</div>
      </div>
    </div>
  </section>

  <!-- Bikes -->
  <section class="section" id="bikes" aria-labelledby="bikes-h">
    <div class="wrap">
      <div class="head">
        <h2 id="bikes-h">Choose your ride</h2>
        <p class="sub">Three electric models. Pick one here and we'll add it to your booking.</p>
      </div>
      <div class="bikes">
<?php foreach ($BIKES as $slug => $b): ?>
        <article class="bike">
          <div class="bike-photo"><?= bike_pic($slug, $b['name'] . ' electric ' . ($slug === 'sparky' ? 'scooter' : 'bike'), '(min-width: 1100px) 31vw, (min-width: 760px) 48vw, 100vw') ?></div>
          <div class="bike-body">
            <h3><?= $b['name'] ?></h3>
            <p class="bike-line"><?= $b['line'] ?></p>
            <dl class="specs">
              <div><dt>Range</dt><dd><?= $b['range'] ?></dd></div>
              <div><dt>Top speed</dt><dd><?= $b['speed'] ?></dd></div>
              <div><dt>Charging</dt><dd><?= $b['charge'] ?></dd></div>
            </dl>
            <details>
              <summary>All specs <?= icon('chevron') ?></summary>
              <dl>
                <dt>Payload</dt><dd><?= $b['payload'] ?></dd>
                <dt>Battery</dt><dd><?= $b['battery'] ?></dd>
<?php if ($b['motor']): ?>
                <dt>Motor</dt><dd><?= $b['motor'] ?></dd>
<?php endif; ?>
              </dl>
            </details>
            <div class="bike-foot">
              <span class="price"><?= $b['price'] ?></span>
              <a class="btn btn-ghost btn-sm" href="#book" data-pick="<?= $slug ?>">Book <?= $b['name'] ?></a>
            </div>
          </div>
        </article>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- How it works -->
  <section class="section" id="how" aria-labelledby="how-h">
    <div class="wrap">
      <div class="head">
        <h2 id="how-h">How renting works</h2>
        <p class="sub">No hidden charges. Our team verifies your documents when you pick up the bike.</p>
      </div>
      <ol class="steps">
        <li class="step">
          <span class="step-n" aria-hidden="true">1</span>
          <h3>Send a request</h3>
          <p>Choose a bike and a daily, weekly or monthly plan in the form below. We confirm your booking within 2 hours.</p>
        </li>
        <li class="step">
          <span class="step-n" aria-hidden="true">2</span>
          <h3>Bring your documents</h3>
          <ul class="doclist">
            <li><?= icon('check') ?>National ID card (NID) or a valid passport</li>
            <li><?= icon('check') ?>Two passport-size photos</li>
            <li><?= icon('check') ?>A parent's National ID card</li>
            <li><?= icon('check') ?>A recent electricity or water bill</li>
            <li><?= icon('check') ?>An active mobile number</li>
          </ul>
        </li>
        <li class="step">
          <span class="step-n" aria-hidden="true">3</span>
          <h3>Pick up and ride</h3>
          <p>Collect your bike and go. If anything happens on the road, our support team is available day and night.</p>
        </li>
      </ol>
      <ul class="included">
        <li><?= icon('shield') ?><div><b>Fully insured</b>Third-party insurance on every rental plan.</div></li>
        <li><?= icon('support') ?><div><b>24/7 rider support</b>Roadside help whenever you need it.</div></li>
        <li><?= icon('clock') ?><div><b>Flexible plans</b>Daily, weekly or monthly, from Tk 299 a day.</div></li>
      </ul>
    </div>
  </section>

  <!-- Booking form -->
  <section class="section" id="book" aria-labelledby="book-h">
    <div class="wrap book-grid">
      <div class="book-intro">
        <h2 id="book-h">Book your bike</h2>
        <p class="lede">Fill in your details and our team will confirm your booking within 2 hours.</p>
        <ul class="book-note">
          <li><?= icon('doc') ?>Have your documents ready. We check them at pickup.</li>
          <li><?= icon('phone') ?>Prefer to call? <a class="link" href="tel:+8801828721222">01828-721222</a></li>
        </ul>
      </div>

      <form class="form" action="form-handler.php" method="post" data-form="rent_ev" novalidate>
        <input type="hidden" name="form_type" value="rent_ev">
        <div class="notice ok" role="status" hidden data-notice="success"><?= icon('check') ?><span>Thank you. Your rental request is in, and our team will contact you within 2 hours.</span></div>
        <div class="notice err" role="alert" hidden data-notice="error"><span>Your request didn't go through. Please check the form, or call us on 01828-721222.</span></div>

        <fieldset>
          <legend>Your bike</legend>
          <div class="picker">
            <label class="pick"><input type="radio" name="vehicle_type" value="Sparky"><span>Sparky<small>Scooter</small></span></label>
            <label class="pick"><input type="radio" name="vehicle_type" value="Eco Ride"><span>Eco Ride<small>E-bike</small></span></label>
            <label class="pick"><input type="radio" name="vehicle_type" value="EM1"><span>EM1<small>Tk 299 / day</small></span></label>
            <label class="pick"><input type="radio" name="vehicle_type" value="Any available" checked><span>Any<small>Whatever's free</small></span></label>
          </div>
          <div class="fields" style="margin-top:16px">
            <div class="field">
              <label for="r-plan">Rental plan</label>
              <select id="r-plan" name="rental_plan">
                <option value="Daily">Daily</option>
                <option value="Weekly">Weekly</option>
                <option value="Monthly">Monthly</option>
              </select>
            </div>
          </div>
        </fieldset>

        <fieldset>
          <legend>About you</legend>
          <div class="fields fields-2">
            <div class="field"><label for="r-name">Full name</label><input id="r-name" name="name" autocomplete="name" required></div>
            <div class="field"><label for="r-phone">Mobile number</label><input id="r-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="01XXXXXXXXX" required pattern="(\+?88)?01[3-9][0-9]{8}"></div>
            <div class="field"><label for="r-email">Email</label><input id="r-email" name="email" type="email" autocomplete="email" required></div>
            <div class="field"><label for="r-nid">NID number</label><input id="r-nid" name="nid" inputmode="numeric" required><p class="hint">Or your passport number.</p></div>
            <div class="field">
              <label for="r-gender">Gender</label>
              <select id="r-gender" name="gender" required>
                <option value="">Select</option><option>Male</option><option>Female</option><option>Other</option>
              </select>
            </div>
          </div>
          <div class="fields" style="margin-top:16px">
            <div class="field"><label for="r-address">Pickup or home address</label><textarea id="r-address" name="address" autocomplete="street-address" placeholder="House, road, area, city" required></textarea></div>
          </div>
        </fieldset>

        <div class="form-foot">
          <button class="btn btn-primary btn-block" type="submit">Send rental request</button>
          <p>We use your details only to process your rental.</p>
        </div>
      </form>
    </div>
  </section>

  <!-- Clients -->
  <section class="section" aria-labelledby="clients-h">
    <div class="wrap clients-head">
      <div>
        <h2 id="clients-h">Trusted by</h2>
        <p class="sub">Delivery companies, startups and businesses run their electric fleets with Ezygo.</p>
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

  <!-- Business -->
  <section class="section" aria-labelledby="biz-h">
    <div class="wrap">
      <div class="biz">
        <div>
          <h2 id="biz-h">Electric fleets for your business</h2>
          <p class="sub">Branded vehicles, a booking app, IoT hardware and an analytics dashboard, deployed under your brand in weeks.</p>
        </div>
        <nav class="biz-links" aria-label="Business services">
          <a href="services.php#delivery"><b>Delivery fleets</b><span>E-bikes for your riders</span></a>
          <a href="services.php#corporate"><b>White label</b><span>Your brand, our platform</span></a>
          <a href="franchise.php"><b>Franchise</b><span>Run an Ezygo hub</span></a>
          <a href="advertising.php"><b>Advertising</b><span>Your brand on our bikes</span></a>
        </nav>
      </div>
    </div>
  </section>

  <!-- FAQ: answers use only what the site already states -->
  <section class="section" id="faq" aria-labelledby="faq-h">
    <div class="wrap faq-grid">
      <h2 id="faq-h">Questions</h2>
      <div class="faq">
        <details><summary>How do I rent an Ezygo bike? <?= icon('chevron') ?></summary><p>Send the booking form above with the bike and plan you want. Our team confirms within 2 hours, then you bring your documents and pick up the bike.</p></details>
        <details><summary>What documents do I need? <?= icon('chevron') ?></summary><p>Your NID or a valid passport, two passport-size photos, a parent's NID, a recent electricity or water bill, and an active mobile number.</p></details>
        <details><summary>How much does it cost? <?= icon('chevron') ?></summary><p>The EM1 costs Tk 299 a day. Weekly and monthly plans are available, and for Sparky and Eco Ride prices, call or message us.</p></details>
        <details><summary>Is the bike insured? <?= icon('chevron') ?></summary><p>Yes. Third-party insurance is included on every rental plan, and our support team is available 24/7 for roadside help.</p></details>
        <details><summary>Can my business get a fleet? <?= icon('chevron') ?></summary><p>Yes. We offer delivery fleets and full white-label packages with your branding. See <a class="link" href="services.php">our business services</a> or get in touch below.</p></details>
      </div>
    </div>
  </section>

  <!-- Contact -->
  <section class="section" id="contact" aria-labelledby="contact-h">
    <div class="wrap contact-grid">
      <div>
        <h2 id="contact-h">Get in touch</h2>
        <p class="sub">Rider, business or investor, our team is ready to help.</p>
        <ul class="contact-list">
          <li><?= icon('phone') ?><div><span>Phone or WhatsApp</span><a href="tel:+8801828721222">01828-721222</a> or <a href="tel:+8801576597666">01576-597666</a></div></li>
          <li><?= icon('mail') ?><div><span>Email</span><a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></div></li>
          <li><?= icon('pin') ?><div><span>Head office</span>Plot 34, 7th Floor, Sonargaon Janapath Road, Dhaka</div></li>
        </ul>
      </div>
      <form class="form" action="form-handler.php" method="post" data-form="contact" novalidate>
        <input type="hidden" name="form_type" value="contact">
        <div class="notice ok" role="status" hidden data-notice="success"><?= icon('check') ?><span>Thanks, your message is sent. We'll reply soon.</span></div>
        <div class="notice err" role="alert" hidden data-notice="error"><span>Your message didn't go through. Please try again, or call 01828-721222.</span></div>
        <div class="fields fields-2">
          <div class="field"><label for="c-name">Full name</label><input id="c-name" name="name" autocomplete="name" required></div>
          <div class="field"><label for="c-phone">Phone</label><input id="c-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="01XXXXXXXXX" required></div>
          <div class="field"><label for="c-email">Email <span class="opt">(optional)</span></label><input id="c-email" name="email" type="email" autocomplete="email"></div>
          <div class="field">
            <label for="c-type">I am a</label>
            <select id="c-type" name="inquiry_type">
              <option>Rider</option><option>Delivery business</option><option>Franchise investor</option><option>Enterprise / white label</option><option>Media / press</option>
            </select>
          </div>
        </div>
        <div class="fields" style="margin:16px 0 24px">
          <div class="field"><label for="c-msg">Message</label><textarea id="c-msg" name="message" required></textarea></div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Send message</button>
      </form>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
