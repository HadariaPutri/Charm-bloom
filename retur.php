<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Policy | CharmBloom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="page-retur">

<!-- HEADER -->
<header class="navbar">
    <div class="logo">Charm<span>Bloom</span></div>
    <nav>
        <a href="index.php">Home</a>
        <a href="shop.php">Shop</a>
        <a href="about.php">About</a>
        <a href="shipping.php">Shipping</a>
        <a href="cart.php" class="icon">
            🛒 <span class="cart-badge"><?= count($_SESSION['cart'] ?? []); ?></span>
        </a>
    </nav>
</header>

<div class="tagline">
    Crafted with love, made to bloom your moment
</div>

<!-- HERO -->
<section class="hero">
    <span class="badge">Return Policy</span>

    <h1>
        Product <span>Return Information</span>
    </h1>

    <p>
        We want you to be fully satisfied with your purchase.
        If your product arrives damaged, incorrect, or does not meet expectations,
        you may request a return following the guidelines below.
    </p>

    <div class="hero-btn">
        <a href="retur_form.php" class="btn">
            Return Product
        </a>
    </div>
</section>

<!-- INFO -->
<section class="collection">
    <div class="products">
        <div class="product">
            <h4>📦 Return Requirements</h4>
            <p>
                • Return requests must be submitted within <strong>3 days</strong> after receiving the product.<br>
                • The product must be unused and in its original condition.<br>
                • Please include clear photos as proof of damage or issues.
            </p>
        </div>

        <div class="product">
            <h4>🚚 Return Process</h4>
            <p>
                After submitting the return form, our team will review your request.
                If approved, you will receive further instructions via WhatsApp or email.
            </p>
        </div>

        <div class="product">
            <h4>💬 Need Help?</h4>
            <p>
                If you have questions, feel free to contact us via WhatsApp
                for faster assistance.
            </p>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-bottom">
        © 2025 CharmBloom. All rights reserved.
    </div>
</footer>

</body>
</html>
