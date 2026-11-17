<?php
$pageTitle = 'The Ezygo team';
$pageDesc  = 'Meet the founders behind Ezygo, the electric bike rental and fleet company in Bangladesh.';
$pagePath  = 'team.php';
$TEAM = [
    ['sazzatul', 'Md Sazzatul Islam', 'Founder and CEO',
     'An electrical engineer and entrepreneur transforming urban transport in Bangladesh. Under his leadership Ezygo has pioneered 72V lithium-powered solutions for urban mobility, built sustainable rental frameworks, and was named Most Impactful Business at the Renewable Energy Fest.',
     ['EV powertrains', 'Renewable energy', 'Business development', 'Climate governance']],
    ['evan', 'Mokammel Hossain Evan', 'Co-founder and Managing Director',
     'An operator with hands-on experience scaling electric mobility businesses. He is also a director and shareholder at NAMSS Motors Limited, which runs Huaihai two-wheeler EV operations in Bangladesh, a director at ARBA Automobiles Ltd. and managing partner of Adventure Integrated Marketing Agency. BBA in Marketing and HRM from BRAC University.',
     ['EV operations', 'Marketing and HRM', 'Fleet scaling', 'B2B partnerships']],
    ['jinia', 'Jinia Chowdhury Usha', 'Co-founder and Director',
     'Leads Ezygo\'s marketing and makes sure customers have a great experience at every point of contact.',
     ['Marketing', 'Customer support']],
];
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
      <h1>The people behind Ezygo.</h1>
      <p class="lede">Our founders bring together engineering, operations and marketing to put Bangladesh on electric wheels.</p>
    </div>
  </section>

  <section class="section" aria-label="Leadership">
    <div class="wrap">
      <div class="people">
<?php foreach ($TEAM as [$slug, $name, $role, $bio, $tags]): ?>
        <article class="person">
          <div class="portrait"><?= team_pic($slug, $name) ?></div>
          <h3><?= $name ?></h3>
          <p class="role"><?= $role ?></p>
          <p><?= htmlspecialchars($bio) ?></p>
          <ul class="tags"><?php foreach ($tags as $t): ?><li><?= $t ?></li><?php endforeach; ?></ul>
        </article>
<?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="wrap">
      <div class="cta-band">
        <div>
          <h2>Want to work with us?</h2>
          <p class="sub">We're looking for people in operations, technology and marketing who want a greener Bangladesh.</p>
        </div>
        <div class="ctas">
          <a class="btn btn-primary" href="join.php#careers">See open areas</a>
        </div>
      </div>
    </div>
  </section>

</main>

<?php include 'includes/v2/footer.php'; ?>
</body>
</html>
