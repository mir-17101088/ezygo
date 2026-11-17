<?php $rentPrice = $rentPrice ?? 'Flexible pricing starting with 299 BDT/ DAY'; ?>
  <section class="sec sec--night" id="rent-ev">
    <div class="glow"></div>
    <div class="wrap rent">
      <div class="rent__info">
        <p class="kick" data-reveal>Get Behind the Wheel</p>
        <h2 class="d2" data-reveal style="--i:1">Rent Our EV<br><em>Start Riding Today</em></h2>
        <p class="lead" data-reveal style="--i:2">Fill out the form and our team will confirm your booking within a few hours. No hidden charges — just clean, affordable electric mobility.</p>

        <ul class="perks" data-stagger>
          <li class="perk"><span class="perk__ic"><?= icon('bolt') ?></span><div><strong>Instant Confirmation</strong><p>Booking confirmed via SMS &amp; email within 2 hours.</p></div></li>
          <li class="perk"><span class="perk__ic"><?= icon('shield') ?></span><div><strong>Fully Insured</strong><p>Third-party insurance included on every rental plan.</p></div></li>
          <li class="perk"><span class="perk__ic"><?= icon('taka') ?></span><div><strong>Flexible Pricing</strong><p><?= $rentPrice ?></p></div></li>
          <li class="perk"><span class="perk__ic"><?= icon('support') ?></span><div><strong>24/7 Rider Support</strong><p>Our team is available anytime for roadside assistance.</p></div></li>
        </ul>

        <div class="docs" data-reveal>
          <div class="docs__head"><?= icon('folder') ?><h3 class="h4">Required Documents</h3></div>
          <p>Thank you for your interest in renting an Ezygo bike. Please bring the following documents when picking up your vehicle:</p>
          <ul>
            <li><?= icon('id') ?><span>National ID Card (NID) <em>or</em> Valid Passport</span></li>
            <li><?= icon('camera') ?><span>Two (2) copies of passport-size photographs</span></li>
            <li><?= icon('family') ?><span>Parent's National ID Card</span></li>
            <li><?= icon('bill') ?><span>Copy of home electricity <em>or</em> water bill</span></li>
            <li><?= icon('mobile') ?><span>Active mobile phone number</span></li>
          </ul>
        </div>
      </div>

      <div class="rent__form" data-reveal="pop">
        <div class="form-card">
          <h3 class="h3 form-card__title"><?= icon('scooter') ?> Rental Application</h3>
          <p class="form-note"><?= icon('info') ?> Please have your required documents ready before submission. Our team will verify them at pickup.</p>

          <form action="form-handler.php" method="POST" data-form="rent_ev" class="fields">
            <input type="hidden" name="form_type" value="rent_ev">
            <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your rental request is in. Our team will call you to confirm your booking.</p>
            <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your request didn't go through. Please check the fields, or call 01828-721222.</p>
            <div class="row2">
              <div class="field"><label for="revName">Full Name <span>*</span></label><input type="text" id="revName" name="name" placeholder="Your full name" autocomplete="name" required></div>
              <div class="field"><label for="revPhone">Phone Number <span>*</span></label><input type="tel" id="revPhone" name="phone" placeholder="01XXXXXXXXX" autocomplete="tel" inputmode="tel" required></div>
            </div>
            <div class="field"><label for="revEmail">Email Address <span>*</span></label><input type="email" id="revEmail" name="email" placeholder="you@example.com" autocomplete="email" required></div>
            <div class="row2">
              <div class="field"><label for="revNid">NID Number <span>*</span></label><input type="text" id="revNid" name="nid" placeholder="National ID number" inputmode="numeric" required></div>
              <div class="field"><label for="revGender">Gender <span>*</span></label>
                <select id="revGender" name="gender" required>
                  <option value="">Select gender</option><option value="Male">Male</option><option value="Female">Female</option><option value="Other">Other</option>
                </select></div>
            </div>
            <div class="row2">
              <div class="field"><label for="revVehicle">Vehicle Type</label>
                <select id="revVehicle" name="vehicle_type">
                  <option value="">Any available</option><option value="E-Scooter">EzyGo E-Scooter</option><option value="E-Bike">EzyRide E-Bike</option><option value="E-Rickshaw">EzyHaul E-Rickshaw</option>
                </select></div>
              <div class="field"><label for="revPlan">Rental Plan</label>
                <select id="revPlan" name="rental_plan">
                  <option value="">Select plan</option><option value="Daily">Daily</option><option value="Weekly">Weekly</option><option value="Monthly">Monthly</option>
                </select></div>
            </div>
            <div class="field"><label for="revAddress">Pickup / Home Address <span>*</span></label><textarea id="revAddress" name="address" rows="3" placeholder="Your full address including area, city" autocomplete="street-address" required></textarea></div>
            <button type="submit" class="btn btn--lime">Submit Rental Request <?= icon('send') ?></button>
          </form>
        </div>
      </div>
    </div>
  </section>
