<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Care Instructions | CharmBloom</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <style>
    .care-hero{padding:60px 20px;background:#fff}
    .care-container{max-width:1100px;margin:30px auto;padding:0 20px}
    .care-row{background:#fff;border-radius:12px;padding:20px;margin-bottom:16px;box-shadow:0 8px 18px rgba(0,0,0,0.04)}
    .care-row h4{margin:0 0 8px 0;color:#333}
    .care-row ul{margin:0;padding-left:18px;color:#444}
    .badge{display:inline-block;background:#ffe1ef;color:#ff2f84;padding:6px 10px;border-radius:999px;font-weight:700}
    .hero-accent{display:block;font-size:22px;color:#222;font-weight:700}
    .hero-sub{display:block;font-size:18px;color:#666;margin-top:6px}
  </style>
</head>
<body>

<?php include __DIR__ . '/header.php'; ?>

<section class="care-hero">
  <div class="care-container">
    <span class="badge">Care Instructions</span>

    <h1>
      <span class="hero-accent">Your Guide to</span>
      <span class="hero-sub">Product Care Instructions</span>
    </h1>

    <p>
      Find detailed care guidelines for our bouquets, bracelets, rings, and phone straps to help keep your items looking beautiful and lasting longer.
    </p>
  </div>
</section>

<section class="care-container">

  <div class="care-row">
    <h4>💐 Bouquet — Care Instructions</h4>
    <ul>
      <li>Store in a cool, dry place, away from direct sunlight.</li>
      <li>Keep away from humidity to avoid wilting or mold.</li>
      <li>For artificial flowers, remove dust using a soft cloth or gentle brush.</li>
      <li>Avoid pressing or dropping the bouquet to maintain its shape.</li>
      <li>Keep it in a box or protective plastic when not in use to preserve its color.</li>
    </ul>
  </div>

  <div class="care-row">
    <h4>💎 Bracelet — Care Instructions</h4>
    <ul>
      <li>Avoid contact with water, perfume, lotion, and other chemicals.</li>
      <li>Store the bracelet in a soft pouch to prevent scratches.</li>
      <li>Remove before showering, sleeping, or exercising to maintain its quality.</li>
      <li>Clean with a soft cloth to keep it shiny.</li>
    </ul>
  </div>

  <div class="care-row">
    <h4>💍 Ring — Care Instructions</h4>
    <ul>
      <li>Keep away from excessive water, especially if not made of solid gold.</li>
      <li>Do not wear while washing, cooking, or doing heavy activities.</li>
      <li>Wipe regularly with a soft cloth to maintain its shine.</li>
      <li>Store separately from other jewelry to prevent scratching.</li>
    </ul>
  </div>

  <div class="care-row">
    <h4>📱 Phone Strap — Care Instructions</h4>
    <ul>
      <li>Avoid pulling the strap too hard to prevent breakage.</li>
      <li>Clean with a damp cloth when needed, then air-dry.</li>
      <li>Keep away from humidity and high heat.</li>
      <li>Remove the strap before washing or cleaning the phone case.</li>
      <li>Store in a pouch or box to keep it neat and untangled.</li>
    </ul>
  </div>

</section>

<?php include __DIR__ . '/footer.php'; ?>

</body>
</html>
