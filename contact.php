<?php
$pageTitle = "Contact — EzygoBD | Phone, WhatsApp, Email & Office";
$pageDesc  = "Contact EzygoBD: call or WhatsApp 01828-721222, email hello@ezygobd.com, or visit our head office in Dhaka. 24/7 rider support.";
$pagePath  = 'contact.php';
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
  <section class="hero hero--page hero--plain hero--contact">
    <div class="glow"></div>
    <div class="hero__in wrap">
      <p class="kick" data-reveal style="--i:0">Get In Touch</p>
      <h1 class="d1 balance" data-reveal style="--i:1">We'd Love to<br><em>Hear From You</em></h1>
      <p class="lead" data-reveal style="--i:2">Whether you're a rider, a business, an investor, or just curious — our team is here and ready to help.</p>
    </div>
  </section>

  <!-- ============ QUICK INFO CARDS ============ -->
  <section class="statbar-wrap">
    <div class="wrap">
      <div class="infos" data-stagger="pop">
        <div class="info info--lime"><span class="info__ic"><?= icon('whatsapp') ?></span><h2 class="info__t">Phone / WhatsApp</h2><p><a href="tel:+8801828721222">01828-721222</a> / <a href="tel:+8801576597666">01576-597666</a></p><small>Available 9 AM – 9 PM</small></div>
        <div class="info"><span class="info__ic"><?= icon('mail') ?></span><h2 class="info__t">Email Us</h2><p><a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></p><small>Reply within 24 hours</small></div>
        <div class="info"><span class="info__ic"><?= icon('pin') ?></span><h2 class="info__t">Head Office</h2><p>Plot#34, 7th Floor, Road<br>Sonargaon Janapath Rd, Dhaka</p></div>
        <div class="info"><span class="info__ic"><?= icon('building') ?></span><h2 class="info__t">Corporate Office</h2><p>6th Floor, Chattogram Software<br>Technology Park, Agrabad, Chittagong</p></div>
        <div class="info info--night"><span class="info__ic"><?= icon('support') ?></span><h2 class="info__t">24/7 Rider Support</h2><p><a href="mailto:support@ezygobd.com">support@ezygobd.com</a></p><small>Emergency breakdown help</small></div>
      </div>
    </div>
  </section>

  <!-- ============ DETAILS + FORM ============ -->
  <section class="sec">
    <div class="wrap reach">
      <div>
        <h2 class="d2" data-reveal>Contact Details</h2>
        <p class="lead" data-reveal style="--i:1">We're a team of passionate people building Bangladesh's cleanest mobility platform. Whatever you need, we'll find the right person to help.</p>
        <dl class="details" data-stagger>
          <div><dt>Head Office</dt><dd>Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</dd></div>
          <div><dt>Corporate Office</dt><dd>6th Floor, Chattogram Software Technology Park, Agrabad, Chittagong</dd></div>
          <div><dt>Phone / WhatsApp</dt><dd><a href="tel:+8801828721222">01828-721222</a> / <a href="tel:+8801576597666">01576-597666</a></dd></div>
          <div><dt>General Enquiries</dt><dd><a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></dd></div>
          <div><dt>Partnerships</dt><dd><a href="mailto:partners@ezygobd.com">partners@ezygobd.com</a></dd></div>
          <div><dt>Media &amp; Press</dt><dd><a href="mailto:press@ezygobd.com">press@ezygobd.com</a></dd></div>
        </dl>
        <div class="hours" data-reveal>
          <h3 class="h4"><?= icon('clock') ?> Office Hours</h3>
          <ul>
            <li><span>Sunday – Thursday</span><b>9:00 AM – 6:00 PM</b></li>
            <li><span>Saturday</span><b>10:00 AM – 2:00 PM</b></li>
            <li><span>Friday</span><b class="closed">Closed</b></li>
            <li class="hours__247"><span>Rider Support</span><b>24 / 7</b></li>
          </ul>
        </div>
        <div class="socials" data-reveal>
          <a href="https://www.facebook.com/share/198cbcDwWD/" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><?= icon('facebook') ?></a>
          <a href="https://www.instagram.com/rent_ezygo" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><?= icon('instagram') ?></a>
          <a href="https://www.linkedin.com/company/ezygo-mobility-holdings-limited/" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><?= icon('linkedin') ?></a>
          <a href="#" aria-label="YouTube"><?= icon('youtube') ?></a>
          <a href="https://wa.me/8801828721222" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer"><?= icon('whatsapp') ?></a>
        </div>
      </div>

      <div class="form-card" data-reveal="pop" id="message">
        <h2 class="h3">Send Us a Message</h2>
        <p class="muted small" style="margin-top:6px">Choose the type of inquiry and fill in the form below.</p>
        <div class="tabs" role="tablist" aria-label="Type of inquiry" data-panels style="margin-top:20px">
          <button type="button" role="tab" id="tab-general" aria-controls="ct-panel-general" aria-selected="true">General</button>
          <button type="button" role="tab" id="tab-support" aria-controls="ct-panel-support" aria-selected="false" tabindex="-1">Rider Support</button>
          <button type="button" role="tab" id="tab-partner" aria-controls="ct-panel-partner" aria-selected="false" tabindex="-1">Partnership</button>
        </div>

        <div role="tabpanel" tabindex="0" id="ct-panel-general" aria-labelledby="tab-general">
          <form action="form-handler.php" method="POST" data-form="contact" class="fields">
            <input type="hidden" name="form_type" value="contact">
            <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your message is in. We reply within 24 hours on business days.</p>
            <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your message didn't go through. Please check the fields, or call 01828-721222.</p>
            <div class="row2">
              <div class="field"><label for="ctGenName">Full Name</label><input type="text" id="ctGenName" name="name" placeholder="Your name" autocomplete="name" required></div>
              <div class="field"><label for="ctGenPhone">Phone</label><input type="tel" id="ctGenPhone" name="phone" placeholder="+880 1XXX-XXXXXX" autocomplete="tel"></div>
            </div>
            <div class="field"><label for="ctGenEmail">Email</label><input type="email" id="ctGenEmail" name="email" placeholder="you@example.com" autocomplete="email" required></div>
            <div class="field"><label for="ctGenSubject">Subject</label><input type="text" id="ctGenSubject" name="subject" placeholder="What's this about?" required></div>
            <div class="field"><label for="ctGenMsg">Message</label><textarea id="ctGenMsg" name="message" rows="4" placeholder="How can we help you?" required></textarea></div>
            <button type="submit" class="btn btn--lime"><?= icon('send') ?> Send Message</button>
          </form>
        </div>

        <div role="tabpanel" tabindex="0" id="ct-panel-support" aria-labelledby="tab-support" hidden>
          <form action="form-handler.php" method="POST" data-form="support" class="fields">
            <input type="hidden" name="form_type" value="support">
            <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your support request is in. For emergencies call 01828-721222.</p>
            <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your request didn't go through. Please call 01828-721222.</p>
            <div class="row2">
              <div class="field"><label for="ctSupName">Full Name</label><input type="text" id="ctSupName" name="name" placeholder="Your name" autocomplete="name" required></div>
              <div class="field"><label for="ctSupPhone">Registered Phone</label><input type="tel" id="ctSupPhone" name="phone" placeholder="+880 1XXX-XXXXXX" autocomplete="tel" required></div>
            </div>
            <div class="field"><label for="ctSupType">Issue Type</label>
              <select id="ctSupType" name="issue_type"><option value="">Select issue</option><option value="breakdown">Vehicle Breakdown</option><option value="payment">Payment / Billing</option><option value="app">App Problem</option><option value="battery">Battery / Charging</option><option value="account">Account Issue</option><option value="other">Other</option></select></div>
            <div class="field"><label for="ctSupMsg">Describe Your Issue</label><textarea id="ctSupMsg" name="message" rows="4" placeholder="Please describe what happened..." required></textarea></div>
            <button type="submit" class="btn btn--lime"><?= icon('support') ?> Submit Support Request</button>
          </form>
        </div>

        <div role="tabpanel" tabindex="0" id="ct-panel-partner" aria-labelledby="tab-partner" hidden>
          <form action="form-handler.php" method="POST" data-form="partnership" class="fields">
            <input type="hidden" name="form_type" value="partnership">
            <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your enquiry is in. Our partnerships team will be in touch.</p>
            <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your enquiry didn't go through. Please email partners@ezygobd.com.</p>
            <div class="row2">
              <div class="field"><label for="ctParName">Full Name</label><input type="text" id="ctParName" name="name" placeholder="Your name" autocomplete="name" required></div>
              <div class="field"><label for="ctParCompany">Company / Organisation</label><input type="text" id="ctParCompany" name="company" placeholder="Company name" autocomplete="organization" required></div>
            </div>
            <div class="field"><label for="ctParEmail">Business Email</label><input type="email" id="ctParEmail" name="email" placeholder="you@company.com" autocomplete="email" required></div>
            <div class="field"><label for="ctParType">Partnership Type</label>
              <select id="ctParType" name="partnership_type"><option value="">Select type</option><option value="franchise">Franchise (FOCO / FOFO)</option><option value="advertising">EV Advertising</option><option value="fleet">Corporate Fleet</option><option value="investment">Investment</option><option value="media">Media / Press</option><option value="other">Other</option></select></div>
            <div class="field"><label for="ctParMsg">Message</label><textarea id="ctParMsg" name="message" rows="4" placeholder="Tell us about your proposal..." required></textarea></div>
            <button type="submit" class="btn btn--lime"><?= icon('handshake') ?> Submit Enquiry</button>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ MAP ============ -->
  <section class="sec sec--tight" style="padding-top:0">
    <div class="wrap">
      <div class="mapbox mapbox--wide" data-reveal><span class="mapbox__pin"><?= icon('pin') ?></span><p>Interactive map coming soon — Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</p></div>
    </div>
  </section>

  <!-- ============ FAQ ============ -->
  <section class="sec sec--tint">
    <div class="wrap faq">
      <div class="faq__side">
        <p class="kick" data-reveal>Quick Answers</p>
        <h2 class="d2" data-reveal style="--i:1">Common Questions</h2>
        <p class="lead" data-reveal style="--i:2">Can't find what you need? Reach out via the form above.</p>
      </div>
      <div class="faq__list" data-faq data-stagger>
        <details><summary>What are your support hours?<?= icon('plus') ?></summary><p>Rider emergency support is available 24/7 via WhatsApp. Office staff are available Sun–Thu, 9 AM – 6 PM.</p></details>
        <details><summary>How fast do you respond to emails?<?= icon('plus') ?></summary><p>We aim to respond to all email enquiries within 24 hours on business days. Urgent issues via phone are handled immediately.</p></details>
        <details><summary>Where do I report a vehicle issue?<?= icon('plus') ?></summary><p>Use the "Rider Support" tab in the form above or call our 24/7 helpline at 01828-721222 for immediate assistance.</p></details>
        <details><summary>How do I discuss a franchise or investment?<?= icon('plus') ?></summary><p>Use the "Partnership" tab in the form above, or visit our <a href="join.php#franchise" class="inline-link">Franchise page</a> for detailed models and ROI information.</p></details>
        <details><summary>Can I visit the office in person?<?= icon('plus') ?></summary><p>Yes — our head office is at Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka. Please call ahead to schedule a meeting.</p></details>
        <details><summary>Have a billing or account problem?<?= icon('plus') ?></summary><p>Email <a href="mailto:support@ezygobd.com" class="inline-link">support@ezygobd.com</a> with your registered phone number and a brief description of the issue.</p></details>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
