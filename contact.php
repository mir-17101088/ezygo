<?php
$pageTitle = 'Contact Ezygo';
$pageDesc  = 'Call or WhatsApp Ezygo on 01828-721222, email hello@ezygobd.com, or visit our Dhaka head office. Rider support is available 24/7.';
$pagePath  = 'contact.php';
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
      <h1>Talk to Ezygo.</h1>
      <p class="lede">Rider, business, investor or just curious, we'll find the right person to help. Riders on the road can reach support any time, day or night.</p>
      <div class="ctas">
        <a class="btn btn-primary" href="tel:+8801828721222"><?= icon('phone') ?>Call 01828-721222</a>
        <a class="btn btn-ghost" href="https://wa.me/8801828721222" target="_blank" rel="noopener"><?= icon('whatsapp') ?>WhatsApp</a>
      </div>
    </div>
  </section>

  <section class="section" aria-labelledby="where-h">
    <div class="wrap">
      <h2 id="where-h" class="visually-hidden">Contact details</h2>
      <div class="tiles">
        <div class="tile">
          <?= icon('phone') ?>
          <h3>Phone and WhatsApp</h3>
          <ul class="contact-list" style="margin-top:12px;gap:8px">
            <li><div><a href="tel:+8801828721222">01828-721222</a></div></li>
            <li><div><a href="tel:+8801576597666">01576-597666</a></div></li>
          </ul>
        </div>
        <div class="tile">
          <?= icon('mail') ?>
          <h3>Email</h3>
          <dl class="hours">
            <dt>General</dt><dd><a class="link" href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></dd>
            <dt>Rider support</dt><dd><a class="link" href="mailto:support@ezygobd.com">support@ezygobd.com</a></dd>
            <dt>Partnerships</dt><dd><a class="link" href="mailto:partners@ezygobd.com">partners@ezygobd.com</a></dd>
            <dt>Press</dt><dd><a class="link" href="mailto:press@ezygobd.com">press@ezygobd.com</a></dd>
          </dl>
        </div>
        <div class="tile">
          <?= icon('clock') ?>
          <h3>Office hours</h3>
          <dl class="hours">
            <dt>Sunday–Thursday</dt><dd>9 am – 6 pm</dd>
            <dt>Saturday</dt><dd>10 am – 2 pm</dd>
            <dt>Friday</dt><dd>Closed</dd>
            <dt>Rider support</dt><dd>24/7</dd>
          </dl>
        </div>
        <div class="tile">
          <?= icon('pin') ?>
          <h3>Offices</h3>
          <dl class="hours">
            <dt>Head office</dt><dd>Plot 34, 7th Floor, Sonargaon Janapath Road, Dhaka</dd>
            <dt>Corporate</dt><dd>6th Floor, Chattogram Software Technology Park, Agrabad, Chattogram</dd>
          </dl>
          <p style="font-size:var(--t-small)">Please call before you visit.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="section" id="contact" aria-labelledby="msg-h">
    <div class="wrap contact-grid">
      <div>
        <h2 id="msg-h">Send a message</h2>
        <p class="sub">We reply to emails and messages within 24 hours on working days. For a breakdown on the road, call us instead.</p>
      </div>
      <form class="form" action="form-handler.php" method="post" data-form="contact" novalidate>
        <input type="hidden" name="form_type" value="contact">
        <div class="notice ok" role="status" hidden data-notice="success"><?= icon('check') ?><span>Thanks, your message is sent. We'll reply within 24 hours on working days.</span></div>
        <div class="notice err" role="alert" hidden data-notice="error"><span>Your message didn't go through. Please try again, or call 01828-721222.</span></div>
        <div class="fields fields-2">
          <div class="field"><label for="c-name">Full name</label><input id="c-name" name="name" autocomplete="name" required></div>
          <div class="field"><label for="c-phone">Phone</label><input id="c-phone" name="phone" type="tel" inputmode="tel" autocomplete="tel" placeholder="01XXXXXXXXX" required></div>
          <div class="field"><label for="c-email">Email <span class="opt">(optional)</span></label><input id="c-email" name="email" type="email" autocomplete="email"></div>
          <div class="field">
            <label for="c-type">What's it about?</label>
            <select id="c-type" name="inquiry_type">
              <option>Renting a bike</option><option>Help with my rental</option><option>Payment or billing</option><option>Delivery or corporate fleet</option><option>Franchise or investment</option><option>Advertising</option><option>Media or press</option><option>Something else</option>
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

  <section class="section" aria-labelledby="faq-h">
    <div class="wrap faq-grid">
      <h2 id="faq-h">Quick answers</h2>
      <div class="faq">
        <details><summary>When can I reach support? <?= icon('chevron') ?></summary><p>Rider emergency support is available 24/7 on WhatsApp. The office is open Sunday to Thursday, 9 am to 6 pm, and Saturday, 10 am to 2 pm.</p></details>
        <details><summary>How fast do you reply to email? <?= icon('chevron') ?></summary><p>Within 24 hours on working days. Urgent problems are handled straight away by phone.</p></details>
        <details><summary>My bike has a problem. What do I do? <?= icon('chevron') ?></summary><p>Call our helpline on <a class="link" href="tel:+8801828721222">01828-721222</a> for immediate help.</p></details>
        <details><summary>How do I discuss a franchise or investment? <?= icon('chevron') ?></summary><p>Choose "Franchise or investment" in the form above, or see the <a class="link" href="franchise.php">franchise models and returns</a>.</p></details>
        <details><summary>I have a billing or account problem. <?= icon('chevron') ?></summary><p>Email <a class="link" href="mailto:support@ezygobd.com">support@ezygobd.com</a> with your registered phone number and a short description.</p></details>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
