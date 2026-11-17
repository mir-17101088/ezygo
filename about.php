<?php
$pageTitle = "Our Story — EzygoBD | Zero-Emission Mobility for Bangladesh";
$pageDesc  = "The story behind EzygoBD: our mission, vision and values, founder Md Sazzatul Islam, partners, certificates and awards.";
$pagePath  = 'about.php';
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
      <p class="kick" data-reveal style="--i:0">Our Story</p>
      <h1 class="d1 balance" data-reveal style="--i:1">Join Us in Our Mission for<br><em>Zero Emission</em></h1>
      <p class="lead" data-reveal style="--i:2">Building Bangladesh's cleanest, greenest and most connected EV mobility ecosystem — one ride at a time.</p>
      <div class="hero__ctas" data-reveal style="--i:3"><a href="#about-contact" class="btn btn--lime">Contact Us <?= icon('arrow') ?></a></div>
    </div>
  </section>

  <!-- ============ MISSION / VISION / VALUES ============ -->
  <section class="sec">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Who We Are</p>
          <h2 class="d2 balance" data-reveal style="--i:1">Driving Bangladesh Towards a Greener Tomorrow</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">EzygoBD is on a mission to make clean, affordable electric mobility accessible to every Bangladeshi.</p>
      </div>
      <div class="mvv" data-stagger="pop">
        <div class="mvv__card"><span class="mvv__ic"><?= icon('target') ?></span><h3 class="d3">Our Mission</h3><p>Replace fossil-fuel vehicles with affordable, reliable electric alternatives — reducing urban air pollution and creating sustainable livelihoods across Bangladesh.</p></div>
        <div class="mvv__card mvv__card--feat"><span class="mvv__ic"><?= icon('eye') ?></span><h3 class="d3">Our Vision</h3><p>A Bangladesh where every last-mile journey is zero-emission — powered by locally charged, locally operated electric vehicles and a thriving green economy.</p></div>
        <div class="mvv__card"><span class="mvv__ic"><?= icon('star') ?></span><h3 class="d3">Our Values</h3><p>Sustainability, inclusion, and innovation. We believe green mobility should be a right, not a luxury — accessible to riders, delivery partners, and corporations alike.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ FOUNDER ============ -->
  <section class="sec sec--tint">
    <div class="wrap founder">
      <div class="founder__photo" data-reveal="left">
        <?= team_pic('sazzatul', 'Md Sazzatul Islam, Founder & CEO of EzygoBD') ?>
        <span class="founder__ring" aria-hidden="true"></span>
      </div>
      <div>
        <p class="kick" data-reveal>Leadership</p>
        <h2 class="d1 founder__name" data-reveal style="--i:1">Md Sazzatul<br>Islam</h2>
        <p class="founder__role" data-reveal style="--i:2">FOUNDER &amp; CEO</p>
        <p class="lead" data-reveal style="--i:3">A visionary entrepreneur and electrical engineer dedicated to transforming urban transportation in Bangladesh. Md Sazzatul Islam founded Ezygo with a vision to create sustainable mobility solutions through electric vehicle technology.</p>
        <p class="muted founder__more" data-reveal style="--i:4">Under his leadership, Ezygo has pioneered 72V lithium-powered solutions for urban mobility, developed sustainable rental frameworks, and been named "Most Impactful Business" at the Renewable Energy Fest. His expertise spans lithium-ion battery technology, EV logistics, and sustainable infrastructure.</p>
        <div class="socials" data-reveal style="--i:5">
          <a href="#" aria-label="LinkedIn"><?= icon('linkedin') ?></a>
          <a href="#" aria-label="X"><?= icon('x') ?></a>
          <a href="#" aria-label="Facebook"><?= icon('facebook') ?></a>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CARBON SAVED ============ -->
  <section class="sec sec--night impact">
    <div class="glow"></div>
    <div class="wrap">
      <p class="kick" data-reveal>Carbon Saved</p>
      <p class="impact__num" data-reveal style="--i:1"><?= num('4,200,000.89') ?><span class="impact__unit"> kg</span></p>
      <p class="lead" data-reveal style="--i:2">CO₂ reduction through EV deliveries &amp; rides across Bangladesh</p>
      <div class="impact__bar" aria-hidden="true"><span></span></div>
    </div>
  </section>

  <!-- ============ PARTNERS ============ -->
  <section class="sec">
    <div class="wrap partners">
      <div>
        <p class="kick" data-reveal>Our Partners</p>
        <h2 class="d2 balance" data-reveal style="--i:1">Our sustainable journey is powered by our partners.</h2>
        <p class="lead" data-reveal style="--i:2">From leading delivery platforms to corporate fleet managers — our growing partner ecosystem is what makes EzygoBD's green mission possible.</p>
        <div class="partners__stats" data-stagger>
          <div><p class="stat__v"><?= num('181,344') ?><small>Ton</small></p><p class="stat__l">CO₂ Reduced</p></div>
          <div><p class="stat__v"><?= num('2,563,756') ?><small>km</small></p><p class="stat__l">Total Distance</p></div>
        </div>
        <a href="join.php" class="btn btn--line" data-reveal>Partner With Us <?= icon('arrow') ?></a>
      </div>
      <div class="partners__grid" data-stagger="pop">
        <span class="partner"><?= icon('scooter') ?> ShohozRide</span>
        <span class="partner"><?= icon('box') ?> Pathao Food</span>
        <span class="partner"><?= icon('cart') ?> Chaldal</span>
        <span class="partner"><?= icon('truck') ?> Paperfly</span>
        <span class="partner"><?= icon('building') ?> GreenCorp BD</span>
        <span class="partner"><?= icon('card') ?> bKash</span>
        <span class="partner"><?= icon('leaf') ?> EcoFleet</span>
        <span class="partner"><?= icon('sun') ?> SolarNet BD</span>
      </div>
    </div>
  </section>

  <!-- ============ LIFE AT EZYGOBD ============ -->
  <section class="sec sec--tint">
    <div class="wrap">
      <div class="head head--center">
        <p class="kick" data-reveal>Our Superstars</p>
        <h2 class="d2" data-reveal style="--i:1">Life at EzygoBD</h2>
        <p class="lead" data-reveal style="--i:2">Discover the culture that drives our team — passionate people building a cleaner world, one ride at a time.</p>
      </div>
      <div class="life" data-stagger="pop">
        <div class="life__tile life__tile--tall"><?= icon('team') ?><span>Our Team</span></div>
        <div class="life__tile"><?= icon('handshake') ?><span>Community</span></div>
        <div class="life__tile"><?= icon('sparkle') ?><span>Innovation</span></div>
        <div class="life__tile life__tile--wide"><?= icon('award') ?><span>Recognition &amp; Awards</span></div>
      </div>
      <p class="center-cta" data-reveal><a href="join.php" class="btn btn--lime">Join Our Team <?= icon('arrow') ?></a></p>
    </div>
  </section>

  <!-- ============ CERTIFICATES ============ -->
  <section class="sec" id="certificates">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Credentials</p>
          <h2 class="d2" data-reveal style="--i:1">Our Certificates</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Recognized and certified by leading industry bodies for our commitment to quality, safety and sustainability.</p>
      </div>
      <div class="cards4" data-stagger="pop">
        <div class="mini cert"><span class="mini__ic"><?= icon('cert') ?></span><h3 class="h4">Business Registration</h3><p>Registered under Ezygo Electric Ltd. with the Registrar of Joint Stock Companies &amp; Firms (RJSC), Bangladesh.</p></div>
        <div class="mini cert"><span class="mini__ic"><?= icon('doc') ?></span><h3 class="h4">Trade License</h3><p>Valid trade license for electric vehicle rental and fleet management operations across Bangladesh.</p></div>
        <div class="mini cert"><span class="mini__ic"><?= icon('leaf') ?></span><h3 class="h4">Environmental Compliance</h3><p>Compliant with Bangladesh's Department of Environment regulations for zero-emission vehicle operations.</p></div>
        <div class="mini cert"><span class="mini__ic"><?= icon('shield') ?></span><h3 class="h4">Vehicle Safety Standards</h3><p>All vehicles meet BRTA (Bangladesh Road Transport Authority) safety and registration standards.</p></div>
      </div>
    </div>
  </section>

  <!-- ============ AWARDS ============ -->
  <section class="sec sec--night" id="awards">
    <div class="glow"></div>
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Recognition</p>
          <h2 class="d2" data-reveal style="--i:1">Winning Awards</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Our work in sustainable mobility has been recognized at national and international platforms.</p>
      </div>
      <div class="awards" data-stagger="pop">
        <article class="award award--gold"><span class="award__ic"><?= icon('award') ?></span><div><h3 class="h3">Most Impactful Business</h3><p class="award__ev">Renewable Energy Fest</p><p>Recognized for pioneering sustainable EV mobility solutions in Bangladesh's transportation sector.</p></div></article>
        <article class="award"><span class="award__ic"><?= icon('award') ?></span><div><h3 class="h3">Green Innovation Award</h3><p class="award__ev">2025</p><p>Honoured for innovative zero-emission fleet technology and sustainable business model.</p></div></article>
        <article class="award"><span class="award__ic"><?= icon('award') ?></span><div><h3 class="h3">EV Startup Excellence</h3><p class="award__ev">Bangladesh Startup Summit</p><p>Selected as one of the top emerging EV startups driving clean energy adoption in South Asia.</p></div></article>
      </div>
    </div>
  </section>

  <!-- ============ CORPORATE VIDEO ============ -->
  <section class="sec">
    <div class="wrap">
      <div class="head head--center">
        <p class="kick" data-reveal>EzygoBD Corporate</p>
        <h2 class="d2" data-reveal style="--i:1">EzygoBD Corporate Video</h2>
      </div>
      <div class="corp" data-reveal="pop">
        <div class="corp__frame">
          <video controls preload="none" playsinline poster="assets/video/ezygo-hero-poster.webp" id="corpVideo">
            <source src="assets/video/ezygo-corporate-720.mp4" type="video/mp4">
          </video>
          <button class="corp__play" type="button" id="corpPlay" aria-label="Play corporate video"><?= icon('play') ?></button>
        </div>
        <div class="corp__side">
          <p class="corp__cap">EzygoBD Corporate Video — Electric, Zero Emission</p>
          <span class="corp__len"><?= icon('video') ?> 0:12</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ IN THE NEWS ============ -->
  <section class="sec">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Big Creators Feature Our Founder</p>
          <h2 class="d2" data-reveal style="--i:1">In the News</h2>
        </div>
      </div>
      <div class="news" data-stagger="pop">
        <article class="news__card"><div class="news__thumb"><?= icon('youtube') ?><span class="news__play"><?= icon('play') ?></span></div><p>EzygoBD Expands to Chittagong</p></article>
        <article class="news__card"><div class="news__thumb"><?= icon('award') ?><span class="news__play"><?= icon('play') ?></span></div><p>Green Innovation Award 2025</p></article>
        <article class="news__card"><div class="news__thumb"><?= icon('bolt') ?><span class="news__play"><?= icon('play') ?></span></div><p>Battery Swap Network Launch</p></article>
        <article class="news__card"><div class="news__thumb"><?= icon('user') ?><span class="news__play"><?= icon('play') ?></span></div><p>Women in EV Mobility Feature</p></article>
      </div>
      <p class="center-cta" data-reveal><a href="#" class="btn btn--line">View All News <?= icon('arrow') ?></a></p>
    </div>
  </section>

  <!-- ============ GET IN TOUCH ============ -->
  <section class="sec sec--tint" id="about-contact">
    <div class="wrap">
      <div class="head head--center">
        <p class="kick" data-reveal>Connect</p>
        <h2 class="d2" data-reveal style="--i:1">Get In Touch!</h2>
        <p class="lead" data-reveal style="--i:2">We'd love to hear from you — riders, partners, investors, or media.</p>
      </div>
      <div class="res" data-stagger="pop">
        <a href="#" class="res__card"><?= icon('book') ?><span>User Manual</span><?= icon('arrow-ne') ?></a>
        <a href="#" class="res__card"><?= icon('map') ?><span>Charging Map</span><?= icon('arrow-ne') ?></a>
        <a href="#" class="res__card"><?= icon('shield') ?><span>Safety Guidelines</span><?= icon('arrow-ne') ?></a>
      </div>
      <div class="connect" data-stagger>
        <div class="connect__col">
          <h3 class="h3">Contact Us</h3>
          <ul class="connect__list">
            <li><?= icon('mail') ?> <a href="mailto:hello@ezygobd.com">hello@ezygobd.com</a></li>
            <li><?= icon('phone') ?> <span><a href="tel:+8801828721222">01828-721222</a> / <a href="tel:+8801576597666">01576-597666</a></span></li>
            <li><?= icon('pin') ?> <span>Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</span></li>
          </ul>
        </div>
        <div class="connect__col">
          <h3 class="h3">Find Us</h3>
          <div class="mapbox"><?= icon('map') ?><p>Charging station map coming soon</p></div>
        </div>
        <div class="connect__col">
          <h3 class="h3">Follow Us</h3>
          <div class="socials">
            <a href="https://www.facebook.com/share/198cbcDwWD/" aria-label="Facebook" target="_blank" rel="noopener noreferrer"><?= icon('facebook') ?></a>
            <a href="https://www.instagram.com/rent_ezygo" aria-label="Instagram" target="_blank" rel="noopener noreferrer"><?= icon('instagram') ?></a>
            <a href="#" aria-label="YouTube"><?= icon('youtube') ?></a>
            <a href="https://www.linkedin.com/company/ezygo-mobility-holdings-limited/" aria-label="LinkedIn" target="_blank" rel="noopener noreferrer"><?= icon('linkedin') ?></a>
          </div>
          <h3 class="h3" style="margin-top:30px">Quick Message</h3>
          <form action="form-handler.php" method="POST" data-form="contact" class="fields quick" id="message">
            <input type="hidden" name="form_type" value="contact">
            <p class="form-msg form-msg--ok" data-notice="success" role="status" hidden>Thank you. Your message is in.</p>
            <p class="form-msg form-msg--err" data-notice="error" role="alert" hidden>Your message didn't go through. Please try again.</p>
            <div class="field"><label class="sr-only" for="qmName">Your name</label><input type="text" id="qmName" name="name" placeholder="Your name" autocomplete="name" required></div>
            <div class="field"><label class="sr-only" for="qmEmail">Your email</label><input type="email" id="qmEmail" name="email" placeholder="Your email" autocomplete="email" required></div>
            <div class="field"><label class="sr-only" for="qmMsg">Your message</label><textarea id="qmMsg" name="message" rows="3" placeholder="Your message…"></textarea></div>
            <button type="submit" class="btn btn--lime">Send <?= icon('send') ?></button>
          </form>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
