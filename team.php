<?php
$pageTitle = "Our Team — EzygoBD | The Leaders Behind Bangladesh's EV Network";
$pageDesc  = "Meet the founding team of EzygoBD: Md Sazzatul Islam, Mokammel Hossain Evan and Jinia Chowdhury Usha.";
$pagePath  = 'team.php';
$team = [
  ['sazzatul', 'Md Sazzatul Islam', 'Founder & CEO', 'Md Sazzatul Islam - Founder & CEO, Ezygo Electric Ltd', 'Electrical Engineering & EV Innovation',
   'Visionary entrepreneur and electrical engineer dedicated to transforming urban transportation in Bangladesh. Under his leadership, Ezygo has emerged as a key player in the green energy sector — pioneering 72V lithium-powered solutions for urban mobility, developing sustainable rental frameworks, and being named "Most Impactful Business" at the Renewable Energy Fest.',
   ['EV Powertrain Systems', 'Renewable Energy', 'Business Development', 'Climate Governance']],
  ['evan', 'Mokammel Hossain Evan', 'Co-Founder & Managing Director', 'Mokammel Hossain Evan - Co-Founder & Managing Director', 'Business Development & Operations',
   'An operator at his core, bringing hands-on experience in scaling electric mobility businesses. Also serves as Director & Shareholder at NAMSS Motors Limited, leading Huaihai 2W EV operations in Bangladesh. Director at ARBA Automobiles Ltd. and Managing Partner of Adventure Integrated Marketing Agency. BBA in Marketing & HRM from BRAC University.',
   ['EV Operations', 'Marketing & HRM', 'Fleet Scaling', 'B2B Partnerships']],
  ['jinia', 'Jinia Chowdhury Usha', 'Co-Founder & Director', 'Jinia Chowdhury Usha - Co-Founder & Director', 'Marketing & Customer Support',
   "Leading EzygoBD's marketing strategies and ensuring exceptional customer experience across all touchpoints.", []],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'includes/head.php'; ?>
</head>
<body>
<?php include 'includes/header.php'; ?>

<main id="main">

  <!-- ============ TEAM HERO ============ -->
  <section class="hero hero--page hero--plain">
    <div class="glow"></div>
    <div class="hero__in wrap">
      <p class="kick" data-reveal style="--i:0">Our Leadership</p>
      <h1 class="d1 balance" data-reveal style="--i:1">Meet the Team Behind<br><em>EzygoBD's Vision</em></h1>
      <p class="lead" data-reveal style="--i:2">Passionate leaders committed to building Bangladesh's cleanest and most connected EV mobility ecosystem.</p>
    </div>
  </section>

  <!-- ============ TEAM MEMBERS ============ -->
  <section class="sec">
    <div class="wrap">
      <div class="head head--split">
        <div>
          <p class="kick" data-reveal>Leadership Team</p>
          <h2 class="d2" data-reveal style="--i:1">The Visionaries Driving Change</h2>
        </div>
        <p class="lead" data-reveal style="--i:2">Our founding team brings together expertise in technology, business, and sustainability to revolutionize Bangladesh's transportation sector.</p>
      </div>
      <div class="people" data-stagger="pop">
<?php foreach ($team as $m): ?>
        <article class="person">
          <div class="person__pic">
            <?= team_pic($m[0], $m[3]) ?>
            <div class="person__links">
              <?= social('team_' . $m[0] . '_linkedin', 'linkedin', 'LinkedIn') . social('team_' . $m[0] . '_email', 'mail', 'Email') ?>
            </div>
          </div>
          <div class="person__body">
            <p class="person__dept"><?= icon('briefcase') ?> <?= htmlspecialchars($m[4]) ?></p>
            <p class="person__bio"><?= htmlspecialchars($m[5]) ?></p>
            <h3 class="d3"><?= $m[1] ?></h3>
            <p class="person__role"><?= htmlspecialchars($m[2]) ?></p>
<?php if ($m[6]): ?>
            <ul class="tags">
<?php foreach ($m[6] as $t): ?>
              <li><?= htmlspecialchars($t) ?></li>
<?php endforeach; ?>
            </ul>
<?php endif; ?>
          </div>
        </article>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <!-- ============ JOIN CTA ============ -->
  <section class="sec sec--tight">
    <div class="wrap">
      <div class="band on-night" data-reveal>
        <div class="glow"></div>
        <div class="band__text">
          <h2 class="d2">Join Our Growing Team</h2>
          <p class="lead">We're always looking for passionate individuals who share our vision for a greener Bangladesh. Be part of the EV revolution!</p>
        </div>
        <div class="band__btns"><a href="join.php" class="btn btn--lime">Join Us <?= icon('arrow') ?></a></div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/footer.php'; ?>
</body>
</html>
