<?php
http_response_code(404);
$pageTitle = "Page not found — EzygoBD";
$pageDesc  = "This page doesn't exist. Rent an electric scooter or e-bike with EzygoBD, or contact our team.";
$pagePath  = '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include __DIR__ . '/includes/head.php'; ?>
  <meta name="robots" content="noindex">
  <base href="/">
</head>
<body>
<?php include __DIR__ . '/includes/header.php'; ?>

<main id="main">
  <section class="hero hero--page hero--plain">
    <div class="glow"></div>
    <div class="hero__in wrap">
      <p class="kick">Error 404</p>
      <h1 class="d1">This page took <em>a wrong turn.</em></h1>
      <p class="lead">The link may be old or mistyped. Here's where you can go instead.</p>
      <div class="hero__ctas">
        <a href="index.php" class="btn btn--lime">Back to home <?= icon('arrow') ?></a>
        <a href="index.php#rent-ev" class="btn btn--glass">Rent an EV</a>
        <a href="contact.php" class="btn btn--glass">Contact us</a>
      </div>
    </div>
  </section>
</main>

<?php include __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
