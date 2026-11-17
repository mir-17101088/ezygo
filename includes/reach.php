  <section class="sec" id="contact">
    <div class="wrap reach">
      <div>
        <p class="kick" data-reveal>Reach Out</p>
        <h2 class="d2" data-reveal style="--i:1">Get In Touch!</h2>
        <p class="lead" data-reveal style="--i:2">Whether you're a rider, a business, or an investor — our team is ready to help you go electric.</p>
        <ul class="reach__list" data-stagger>
          <li><?= icon('pin') ?><div><strong>Head Office</strong><p>Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</p></div></li>
          <li><?= icon('phone') ?><div><strong>Phone / WhatsApp</strong><p><a href="tel:+8801828721222">01828-721222</a> / <a href="tel:+8801576597666">01576-597666</a></p></div></li>
          <li><?= icon('mail') ?><div><strong>Email</strong><p><a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></p></div></li>
        </ul>
        <div class="socials" data-reveal>
          <a href="https://www.facebook.com/share/198cbcDwWD/" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><?= icon('facebook') ?></a>
          <a href="https://www.instagram.com/rent_ezygo" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><?= icon('instagram') ?></a>
          <a href="https://www.linkedin.com/company/ezygo-mobility-holdings-limited/" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><?= icon('linkedin') ?></a>
          <a href="https://wa.me/8801828721222" aria-label="WhatsApp" target="_blank" rel="noopener noreferrer"><?= icon('whatsapp') ?></a>
        </div>
      </div>
      <div class="form-card" data-reveal="pop">
        <form action="form-handler.php" method="POST" data-form="evs_contact" class="fields">
          <input type="hidden" name="form_type" value="evs_contact"><?= form_guard() ?>
          <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your message is in and our team will get back to you.</p>
          <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your message didn't go through. Please check the fields, or call 01828-721222.</p>
          <div class="row2">
            <div class="field"><label for="ec-name">Full Name</label><input type="text" id="ec-name" name="name" placeholder="Your name" autocomplete="name" required></div>
            <div class="field"><label for="ec-phone">Phone</label><input type="tel" id="ec-phone" name="phone" placeholder="+880 1XXX-XXXXXX" autocomplete="tel" required></div>
          </div>
          <div class="field"><label for="ec-email">Email Address</label><input type="email" id="ec-email" name="email" placeholder="you@example.com" autocomplete="email"></div>
          <div class="field"><label for="ec-type">I am a…</label>
            <select id="ec-type" name="inquiry_type"><option value="">Select one</option><option>Individual Rider</option><option>Delivery Business</option><option>Franchise Investor</option><option>Enterprise / White Label</option><option>Media / Press</option></select></div>
          <div class="field"><label for="ec-msg">Message</label><textarea id="ec-msg" name="message" rows="4" placeholder="Tell us how we can help…"></textarea></div>
          <button type="submit" class="btn btn--lime">Send Message <?= icon('send') ?></button>
        </form>
      </div>
    </div>
  </section>
