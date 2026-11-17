<?php
$pageTitle = "Our Team — EzygoBD | Meet the Leaders Behind Bangladesh's EV Revolution";
$pageDesc  = "Meet the passionate team driving EzygoBD's mission to electrify Bangladesh's transportation.";
$pageCss   = 'team.css';
$pageJs    = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>

<?php include 'includes/header.php'; ?>
<?php include 'includes/mega-menu.php'; ?>

  <!-- ============ TEAM HERO ============ -->
  <section class="team-hero">
    <div class="team-hero-overlay"></div>
    <div class="team-hero-content container">
      <p class="team-eyebrow">Our Leadership</p>
      <h1>Meet the Team Behind<br /><span>EzygoBD's Vision</span></h1>
      <p class="team-hero-sub">Passionate leaders committed to building Bangladesh's cleanest and most connected EV mobility ecosystem.</p>
    </div>
    <div class="team-wave-bottom">
      <svg viewBox="0 0 1440 90" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0,60 C200,100 400,20 600,55 C800,90 1000,10 1200,50 C1320,70 1390,35 1440,45 L1440,90 L0,90 Z" fill="#ffffff"/>
      </svg>
    </div>
  </section>

  <!-- ============ TEAM MEMBERS ============ -->
  <section class="team-section">
    <div class="container">
      <div class="section-header">
        <span class="tag">Leadership Team</span>
        <h2>The Visionaries Driving Change</h2>
        <p>Our founding team brings together expertise in technology, business, and sustainability to revolutionize Bangladesh's transportation sector.</p>
      </div>

      <div class="team-grid">

        <!-- Team Member 1 - Sazzatul (Founder & CEO) -->
        <div class="team-card team-fade">
          <div class="team-img-wrap">
            <img src="assets/photo/team/sazzatul.png" alt="Md Sazzatul Islam - Founder & CEO, Ezygo Electric Ltd" loading="lazy">
            <div class="team-social">
              <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <div class="team-img-overlay">
              <div class="team-details">
                <p class="team-dept"><i class="fa-solid fa-briefcase"></i> Electrical Engineering & EV Innovation</p>
                <p class="team-bio">Visionary entrepreneur and electrical engineer dedicated to transforming urban transportation in Bangladesh. Under his leadership, Ezygo has emerged as a key player in the green energy sector — pioneering 72V lithium-powered solutions for urban mobility, developing sustainable rental frameworks, and being named "Most Impactful Business" at the Renewable Energy Fest.</p>
              </div>
            </div>
          </div>
          <div class="team-info">
            <h3 class="team-name">Md Sazzatul Islam</h3>
            <p class="team-role">Founder & CEO</p>
            <div class="team-competencies">
              <span class="team-tag">EV Powertrain Systems</span>
              <span class="team-tag">Renewable Energy</span>
              <span class="team-tag">Business Development</span>
              <span class="team-tag">Climate Governance</span>
            </div>
          </div>
        </div>

        <!-- Team Member 2 - Evan (Co-Founder & MD) -->
        <div class="team-card team-fade">
          <div class="team-img-wrap">
            <img src="assets/photo/team/evan.png" alt="Mokammel Hossain Evan - Co-Founder & Managing Director" loading="lazy">
            <div class="team-social">
              <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <div class="team-img-overlay">
              <div class="team-details">
                <p class="team-dept"><i class="fa-solid fa-chart-line"></i> Business Development & Operations</p>
                <p class="team-bio">An operator at his core, bringing hands-on experience in scaling electric mobility businesses. Also serves as Director & Shareholder at NAMSS Motors Limited, leading Huaihai 2W EV operations in Bangladesh. Director at ARBA Automobiles Ltd. and Managing Partner of Adventure Integrated Marketing Agency. BBA in Marketing & HRM from BRAC University.</p>
              </div>
            </div>
          </div>
          <div class="team-info">
            <h3 class="team-name">Mokammel Hossain Evan</h3>
            <p class="team-role">Co-Founder & Managing Director</p>
            <div class="team-competencies">
              <span class="team-tag">EV Operations</span>
              <span class="team-tag">Marketing & HRM</span>
              <span class="team-tag">Fleet Scaling</span>
              <span class="team-tag">B2B Partnerships</span>
            </div>
          </div>
        </div>

        <!-- Team Member 3 - Jinia (Co-Founder & Director) -->
        <div class="team-card team-fade">
          <div class="team-img-wrap">
            <img src="assets/photo/team/jinia.png" alt="Jinia Chowdhury Usha - Co-Founder & Director" loading="lazy">
            <div class="team-social">
              <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" aria-label="Email"><i class="fa-solid fa-envelope"></i></a>
            </div>
            <div class="team-img-overlay">
              <div class="team-details">
                <p class="team-dept"><i class="fa-solid fa-headset"></i> Marketing & Customer Support</p>
                <p class="team-bio">Leading EzygoBD's marketing strategies and ensuring exceptional customer experience across all touchpoints.</p>
              </div>
            </div>
          </div>
          <div class="team-info">
            <h3 class="team-name">Jinia Chowdhury Usha</h3>
            <p class="team-role">Co-Founder & Director</p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ============ JOIN OUR TEAM CTA ============ -->
  <section class="team-cta">
    <div class="container">
      <div class="team-cta-content team-fade">
        <div class="team-cta-icon"><i class="fa-solid fa-users"></i></div>
        <h2>Join Our Growing Team</h2>
        <p>We're always looking for passionate individuals who share our vision for a greener Bangladesh. Be part of the EV revolution!</p>
        <a href="join.php" class="btn btn-primary btn-lg">Join Us <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

<?php include 'includes/footer.php'; ?>

<script>
document.addEventListener('DOMContentLoaded', () => {
  // Fade-in animation for team cards
  const fadeEls = document.querySelectorAll('.team-fade');
  if (fadeEls.length) {
    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry, index) => {
        if (!entry.isIntersecting) return;
        setTimeout(() => entry.target.classList.add('visible'), index * 150);
        obs.unobserve(entry.target);
      });
    }, { threshold: 0.1 });
    fadeEls.forEach(el => obs.observe(el));
  }
});
</script>

</body>
</html>
