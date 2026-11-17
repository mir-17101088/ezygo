<?php
$pageTitle = "Join Us — EzygoBD | Franchise, Partnership & Careers";
$pageDesc  = "Join EzygoBD as a franchise partner, advertiser, or team member. Build your future with Bangladesh's #1 EV rental network.";
$pageCss   = 'franchise.css';
$pageJs    = 'join.js';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
<style>
/* ── Join Us Page Styles ─────────────────────────── */
.join-hero {
  position: relative;
  min-height: 55vh;
  display: flex;
  align-items: center;
  overflow: hidden;
  background: #050d07;
}
.join-hero-video {
  position: absolute; inset: 0;
  width: 100%; height: 100%;
  object-fit: cover;
  filter: brightness(.45) saturate(1.2);
  z-index: 0;
}
.join-hero-overlay {
  position: absolute; inset: 0;
  background: linear-gradient(180deg, rgba(0,0,0,.3) 0%, rgba(0,40,20,.6) 100%);
  z-index: 1;
}
.join-hero-content {
  position: relative; z-index: 2;
  text-align: center; color: #fff;
  padding: 7rem 1rem 4rem;
}
.join-hero-content h1 {
  font-size: clamp(2rem, 5vw, 3.5rem);
  font-weight: 800; line-height: 1.2;
  margin-bottom: 1rem;
}
.join-hero-content h1 span { color: #69f0ae; }
.join-hero-content p {
  font-size: clamp(.95rem, 1.5vw, 1.15rem);
  max-width: 600px; margin: 0 auto;
  color: rgba(255,255,255,.85);
}
.join-hero-wave {
  position: absolute; bottom: -1px;
  left: 0; width: 100%; z-index: 3;
}
.join-hero-wave svg { display: block; width: 100%; height: auto; }

/* ── Navigation Tabs ─────────────────────────────── */
.join-tabs {
  display: flex;
  justify-content: center;
  gap: 1rem;
  flex-wrap: wrap;
  margin: -2rem auto 3rem;
  position: relative;
  z-index: 4;
}
.join-tab {
  display: inline-flex;
  align-items: center;
  gap: .5rem;
  padding: .75rem 1.5rem;
  border-radius: 50px;
  font-size: .9rem;
  font-weight: 600;
  text-decoration: none;
  color: #374151;
  background: #fff;
  border: 2px solid #e5e7eb;
  transition: all .3s ease;
  box-shadow: 0 2px 8px rgba(0,0,0,.06);
}
.join-tab:hover,
.join-tab--active {
  border-color: #00c853;
  color: #00c853;
  background: #f0fdf4;
}
.join-tab i { font-size: .85rem; }

/* ── Opportunity Cards ───────────────────────────── */
.join-section {
  padding: 4rem 0;
}
.join-section:nth-child(even) { background: #f8faf9; }
.join-opp-grid {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
  gap: 1.5rem;
  margin-top: 2rem;
}
.join-opp-card {
  background: #fff;
  border-radius: 16px;
  padding: 2rem;
  border: 1px solid #e5e7eb;
  transition: transform .3s ease, box-shadow .3s ease;
}
.join-opp-card:hover {
  transform: translateY(-4px);
  box-shadow: 0 8px 30px rgba(0,200,83,.1);
}
.join-opp-icon {
  width: 50px; height: 50px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  color: #fff;
  margin-bottom: 1rem;
}
.join-opp-icon--green { background: linear-gradient(135deg, #00c853, #00e676); }
.join-opp-icon--gold  { background: linear-gradient(135deg, #f59e0b, #fbbf24); }
.join-opp-icon--blue  { background: linear-gradient(135deg, #3b82f6, #60a5fa); }
.join-opp-icon--purple { background: linear-gradient(135deg, #8b5cf6, #a78bfa); }
.join-opp-card h3 {
  font-size: 1.15rem;
  font-weight: 700;
  color: #1a202c;
  margin-bottom: .5rem;
}
.join-opp-card p {
  font-size: .88rem;
  color: #6b7280;
  line-height: 1.6;
  margin-bottom: 1rem;
}
.join-highlight {
  display: inline-block;
  font-size: .78rem;
  font-weight: 600;
  padding: .3rem .8rem;
  border-radius: 50px;
  background: #f0fdf4;
  color: #15803d;
  border: 1px solid #bbf7d0;
}

/* ── Franchise Comparison ────────────────────────── */
.join-compare {
  margin-top: 2.5rem;
}
.join-compare-table {
  width: 100%;
  border-collapse: collapse;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 2px 12px rgba(0,0,0,.06);
}
.join-compare-table th,
.join-compare-table td {
  padding: .85rem 1.2rem;
  text-align: left;
  font-size: .88rem;
}
.join-compare-table thead th {
  background: #00c853;
  color: #fff;
  font-weight: 600;
}
.join-compare-table tbody tr {
  background: #fff;
  border-bottom: 1px solid #f3f4f6;
}
.join-compare-table tbody tr:nth-child(even) { background: #f8faf9; }
.join-compare-table td:first-child { font-weight: 600; color: #374151; }

/* ── Contact Form ────────────────────────────────── */
.join-form-section {
  padding: 4rem 0;
  background: #f0fdf5;
}
.join-form-layout {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 3rem;
  align-items: start;
}
.join-form-info h2 {
  font-size: 1.6rem;
  font-weight: 700;
  color: #1a202c;
  margin-bottom: 1rem;
}
.join-form-info p {
  font-size: .92rem;
  color: #6b7280;
  line-height: 1.7;
  margin-bottom: 1.5rem;
}
.join-form-card {
  background: #fff;
  border-radius: 16px;
  padding: 2rem;
  box-shadow: 0 4px 20px rgba(0,0,0,.06);
}
.join-form .jf-group {
  margin-bottom: 1rem;
}
.join-form label {
  display: block;
  font-size: .82rem;
  font-weight: 600;
  color: #374151;
  margin-bottom: .35rem;
}
.join-form input,
.join-form select,
.join-form textarea {
  width: 100%;
  padding: .7rem .9rem;
  border: 1px solid #d1d5db;
  border-radius: 8px;
  font-size: .88rem;
  font-family: inherit;
  transition: border-color .2s ease;
}
.join-form input:focus,
.join-form select:focus,
.join-form textarea:focus {
  outline: none;
  border-color: #00c853;
  box-shadow: 0 0 0 3px rgba(0,200,83,.1);
}
.jf-row {
  display: grid;
  grid-template-columns: 1fr 1fr;
  gap: 1rem;
}

@media (max-width: 900px) {
  .join-form-layout { grid-template-columns: 1fr; }
  .jf-row { grid-template-columns: 1fr; }
}

/* ── Dark mode ───────────────────────────────────── */
[data-theme="dark"] .join-section:nth-child(even) { background: #0f172a; }
[data-theme="dark"] .join-opp-card { background: #1f2937; border-color: #374151; }
[data-theme="dark"] .join-opp-card h3 { color: #f9fafb; }
[data-theme="dark"] .join-opp-card p { color: #9ca3af; }
[data-theme="dark"] .join-tab { background: #1f2937; border-color: #374151; color: #d1d5db; }
[data-theme="dark"] .join-tab:hover { border-color: #00c853; color: #69f0ae; background: #0d1f0d; }
[data-theme="dark"] .join-highlight { background: #0d1f0d; color: #86efac; border-color: #1a3a1a; }
[data-theme="dark"] .join-compare-table tbody tr { background: #1f2937; }
[data-theme="dark"] .join-compare-table tbody tr:nth-child(even) { background: #1a2332; }
[data-theme="dark"] .join-compare-table td:first-child { color: #d1d5db; }
[data-theme="dark"] .join-form-section { background: #111827; }
[data-theme="dark"] .join-form-info h2 { color: #f9fafb; }
[data-theme="dark"] .join-form-info p { color: #9ca3af; }
[data-theme="dark"] .join-form-card { background: #1f2937; }
[data-theme="dark"] .join-form label { color: #d1d5db; }
[data-theme="dark"] .join-form input,
[data-theme="dark"] .join-form select,
[data-theme="dark"] .join-form textarea { background: #111827; border-color: #374151; color: #f9fafb; }

/* ── Fade animation ──────────────────────────────── */
.jf-fade { opacity: 0; transform: translateY(25px); transition: opacity .6s ease, transform .6s ease; }
.jf-fade.visible { opacity: 1; transform: translateY(0); }
</style>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>

  <!-- ============ HERO ============ -->
  <section class="join-hero">
    <video class="join-hero-video" autoplay muted loop playsinline aria-hidden="true">
      <source src="assets/videos/HUAIHAI Sparky Teaser.mp4" type="video/mp4" />
    </video>
    <div class="join-hero-overlay"></div>
    <div class="join-hero-content container">
      <h1>Join the <span>Green Revolution</span></h1>
      <p>Whether you want to invest, partner, or build your career — EzygoBD has an opportunity for you.</p>
    </div>
    <div class="join-hero-wave">
      <svg viewBox="0 0 1440 80" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,20 C480,75 960,-15 1440,40 L1440,80 L0,80 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- ============ QUICK NAV ============ -->
  <div class="container">
    <div class="join-tabs">
      <a href="#franchise" class="join-tab join-tab--active"><i class="fa-solid fa-crown"></i> Franchise</a>
      <a href="#advertising" class="join-tab"><i class="fa-solid fa-bullhorn"></i> Advertising</a>
      <a href="#careers" class="join-tab"><i class="fa-solid fa-users"></i> Careers</a>
      <a href="#join-form" class="join-tab"><i class="fa-solid fa-paper-plane"></i> Apply Now</a>
    </div>
  </div>

  <!-- ============ FRANCHISE SECTION ============ -->
  <section class="join-section" id="franchise">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow jf-fade">Franchise Opportunity</span>
        <h2 class="section-title jf-fade">Partner With EzygoBD</h2>
        <p class="section-sub jf-fade">Choose a franchise model that fits your ambition. Build a profitable EV hub with Bangladesh's #1 electric vehicle rental network.</p>
      </div>
      <div class="join-opp-grid">
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--green"><i class="fa-solid fa-crown"></i></div>
          <h3>FOCO — Franchise Owned, Company Operated</h3>
          <p>You own the hub, we manage everything — fleet operations, maintenance, rider management and support. Passive income with zero operational hassle.</p>
          <span class="join-highlight"><i class="fa-solid fa-chart-line"></i> 90%* ROI in 3 Years</span>
        </div>
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--gold"><i class="fa-solid fa-handshake"></i></div>
          <h3>FOFO — Franchise Owned, Franchise Operated</h3>
          <p>Full ownership and hands-on operation of your EV hub. We provide the fleet, technology platform, training and brand. You run the business.</p>
          <span class="join-highlight"><i class="fa-solid fa-chart-line"></i> 45-65%* ROI in 3 Years</span>
        </div>
      </div>

      <div class="join-compare jf-fade">
        <table class="join-compare-table">
          <thead>
            <tr><th>Feature</th><th>FOCO</th><th>FOFO</th></tr>
          </thead>
          <tbody>
            <tr><td>Starting Investment</td><td>৳ 4.5 Lakhs</td><td>৳ 4.5 Lakhs</td></tr>
            <tr><td>Who Operates?</td><td>EzygoBD</td><td>You</td></tr>
            <tr><td>Fleet Provided</td><td>10+ Scooters</td><td>10+ Scooters</td></tr>
            <tr><td>Expected ROI</td><td>Up to 90%*</td><td>45-65%*</td></tr>
            <tr><td>Maintenance</td><td>EzygoBD handles</td><td>Shared responsibility</td></tr>
            <tr><td>Support</td><td>24/7 full support</td><td>Training + tech support</td></tr>
            <tr><td>Best For</td><td>Passive investors</td><td>Hands-on entrepreneurs</td></tr>
          </tbody>
        </table>
        <p style="font-size:.75rem;color:#9ca3af;margin-top:.5rem;">*T&amp;C Apply. ROI projections are estimates based on current operational data.</p>
      </div>
    </div>
  </section>

  <!-- ============ ADVERTISING PARTNERSHIP ============ -->
  <section class="join-section" id="advertising">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow jf-fade">Advertising Partnership</span>
        <h2 class="section-title jf-fade">Advertise on Our Fleet</h2>
        <p class="section-sub jf-fade">Put your brand on wheels. EzygoBD's fleet covers 64+ districts with 250M+ monthly impressions.</p>
      </div>
      <div class="join-opp-grid">
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--blue"><i class="fa-solid fa-motorcycle"></i></div>
          <h3>Scooter Body Wrap</h3>
          <p>Full or partial body wrap on our e-scooters. High-visibility branding across city streets and delivery routes.</p>
          <span class="join-highlight">From ৳ 8,000/month per vehicle</span>
        </div>
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--green"><i class="fa-solid fa-truck-pickup"></i></div>
          <h3>Rickshaw Panel Board</h3>
          <p>Large format panel ads on our e-rickshaws. Maximum visibility in busy marketplaces and commercial areas.</p>
          <span class="join-highlight">From ৳ 12,000/month per vehicle</span>
        </div>
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--purple"><i class="fa-solid fa-mobile-screen"></i></div>
          <h3>In-App Advertising</h3>
          <p>Reach 120+ active riders directly through banner ads, push notifications and sponsored content in the EzygoBD app.</p>
          <span class="join-highlight">From ৳ 5,000/month</span>
        </div>
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--gold"><i class="fa-solid fa-qrcode"></i></div>
          <h3>QR Code Campaigns</h3>
          <p>Interactive QR codes placed on vehicles linking to your landing pages, special offers or promotions.</p>
          <span class="join-highlight">Add-on to any package</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ CAREERS ============ -->
  <section class="join-section" id="careers">
    <div class="container">
      <div class="section-header">
        <span class="section-eyebrow jf-fade">Careers at EzygoBD</span>
        <h2 class="section-title jf-fade">Build Your Career With Us</h2>
        <p class="section-sub jf-fade">Join a passionate team building Bangladesh's cleanest mobility ecosystem. We're always looking for talented people.</p>
      </div>
      <div class="join-opp-grid">
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--green"><i class="fa-solid fa-wrench"></i></div>
          <h3>Operations & Fleet</h3>
          <p>Fleet managers, hub supervisors, mechanics and logistics coordinators. Keep our EV network running smoothly.</p>
        </div>
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--blue"><i class="fa-solid fa-code"></i></div>
          <h3>Technology</h3>
          <p>Software engineers, IoT developers, data analysts and product designers. Build the technology powering our platform.</p>
        </div>
        <div class="join-opp-card jf-fade">
          <div class="join-opp-icon join-opp-icon--purple"><i class="fa-solid fa-bullhorn"></i></div>
          <h3>Marketing & Sales</h3>
          <p>Digital marketers, content creators, business development and partnership managers. Grow our brand and partnerships.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ============ JOIN FORM ============ -->
  <section class="join-form-section" id="join-form">
    <div class="container">
      <div class="join-form-layout">
        <div class="join-form-info jf-fade">
          <h2>Ready to Join?</h2>
          <p>Whether you're interested in a franchise partnership, advertising on our fleet, or joining our team — fill out the form and our team will get back to you within 48 hours.</p>
          <ul class="ec-detail-list" style="list-style:none;padding:0;">
            <li style="display:flex;gap:.75rem;margin-bottom:1rem;"><div class="ec-det-icon" style="width:40px;height:40px;border-radius:10px;background:#f0fdf4;display:flex;align-items:center;justify-content:center;color:#00c853;flex-shrink:0;"><i class="fa-solid fa-phone"></i></div><div><strong>Phone / WhatsApp</strong><p style="font-size:.85rem;color:#6b7280;">01828-721222 / 01576-597666</p></div></li>
            <li style="display:flex;gap:.75rem;margin-bottom:1rem;"><div class="ec-det-icon" style="width:40px;height:40px;border-radius:10px;background:#f0fdf4;display:flex;align-items:center;justify-content:center;color:#00c853;flex-shrink:0;"><i class="fa-solid fa-envelope"></i></div><div><strong>Email</strong><p style="font-size:.85rem;color:#6b7280;">hello@ezygobd.com</p></div></li>
            <li style="display:flex;gap:.75rem;margin-bottom:1rem;"><div class="ec-det-icon" style="width:40px;height:40px;border-radius:10px;background:#f0fdf4;display:flex;align-items:center;justify-content:center;color:#00c853;flex-shrink:0;"><i class="fa-solid fa-location-dot"></i></div><div><strong>Head Office</strong><p style="font-size:.85rem;color:#6b7280;">Plot#34, 7th Floor, Road Sonargaon Janapath Rd, Dhaka</p></div></li>
          </ul>
        </div>
        <div class="join-form-card jf-fade">
          <form class="join-form" action="form-handler.php" method="POST">
            <input type="hidden" name="form_type" value="join">
            <div class="jf-group">
              <label for="jfType">I'm interested in</label>
              <select id="jfType" name="interest_type" required>
                <option value="">Select one</option>
                <option value="Franchise (FOCO)">Franchise — FOCO Model</option>
                <option value="Franchise (FOFO)">Franchise — FOFO Model</option>
                <option value="Advertising">Advertising Partnership</option>
                <option value="Career">Career / Job Opportunity</option>
                <option value="Other">Other Partnership</option>
              </select>
            </div>
            <div class="jf-row">
              <div class="jf-group">
                <label for="jfName">Full Name <span style="color:#ef4444">*</span></label>
                <input type="text" id="jfName" name="name" placeholder="Your full name" required>
              </div>
              <div class="jf-group">
                <label for="jfPhone">Phone Number <span style="color:#ef4444">*</span></label>
                <input type="tel" id="jfPhone" name="phone" placeholder="01XXXXXXXXX" required>
              </div>
            </div>
            <div class="jf-group">
              <label for="jfEmail">Email Address <span style="color:#ef4444">*</span></label>
              <input type="email" id="jfEmail" name="email" placeholder="you@example.com" required>
            </div>
            <div class="jf-row">
              <div class="jf-group">
                <label for="jfCompany">Company / Organization</label>
                <input type="text" id="jfCompany" name="company" placeholder="Your company (if applicable)">
              </div>
              <div class="jf-group">
                <label for="jfCity">City</label>
                <input type="text" id="jfCity" name="city" placeholder="Your city">
              </div>
            </div>
            <div class="jf-group">
              <label for="jfMsg">Message</label>
              <textarea id="jfMsg" name="message" rows="4" placeholder="Tell us about your interest…"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" style="width:100%;">
              Submit Application <i class="fa-solid fa-paper-plane"></i>
            </button>
          </form>
        </div>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Fade-in animation
  const fadeEls = document.querySelectorAll('.jf-fade');
  if (fadeEls.length) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry, i) => {
        if (!entry.isIntersecting) return;
        setTimeout(() => entry.target.classList.add('visible'), i * 80);
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(el => obs.observe(el));
  }

  // Smooth scroll for tab links
  document.querySelectorAll('.join-tab').forEach(tab => {
    tab.addEventListener('click', (e) => {
      e.preventDefault();
      const target = document.querySelector(tab.getAttribute('href'));
      if (target) {
        const headerH = document.getElementById('header')?.offsetHeight || 70;
        window.scrollTo({ top: target.offsetTop - headerH - 20, behavior: 'smooth' });
      }
    });
  });
});
</script>

</body>
</html>
