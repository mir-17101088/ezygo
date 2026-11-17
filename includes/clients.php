<?php
$clients = [
  ['foodpanda', 'Food Panda', 'Food Panda'], ['deraresort', 'Dera Resort', 'Dera Resort & Spa'], ['foodi', 'Foodi', 'Foodi'],
  ['sapphire', 'White Orchid Sapphire', 'White Orchid Sapphire'], ['sharedeal', 'ShareDeal', 'ShareDeal'],
];
$chips = function ($hidden) use ($clients) {
  $o = '';
  foreach ($clients as $c) {
    $o .= '<div class="logo-chip"' . ($hidden ? ' aria-hidden="true"' : '') . '><span class="logo-chip__img"><img src="assets/img/client-' . $c[0] . '.webp" alt="' . ($hidden ? '' : htmlspecialchars($c[1])) . '" width="52" height="44" loading="lazy"></span><span>' . htmlspecialchars($c[2]) . '</span></div>';
  }
  return $o;
};
?>
  <section class="sec sec--tint">
    <div class="wrap">
      <div class="head head--center">
        <p class="kick" data-reveal>Trusted By</p>
        <h2 class="d2 balance" data-reveal style="--i:1">Powering Innovation at Leading Companies</h2>
        <p class="lead" data-reveal style="--i:2">Bangladesh's top delivery companies, startups and enterprises trust EzygoBD to run their electric fleets.</p>
      </div>
    </div>
    <div class="marquee" data-reveal>
      <div class="marquee__track"><?= $chips(false) . $chips(true) ?></div>
    </div>
  </section>
