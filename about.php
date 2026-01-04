<?php
session_start();

// pastikan ada array cart di session
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CharmBloom | Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="page-about">

<header class="navbar">
    <div class="logo">Charm<span>Bloom</span></div>
    <nav>
        <a href="index.php" class="<?= basename($_SERVER['PHP_SELF'])=='index.php'?'active':'' ?>">Home</a>
        <a href="shop.php" class="<?= basename($_SERVER['PHP_SELF'])=='shop.php'?'active':'' ?>">Shop</a>
        <a href="about.php" class="<?= basename($_SERVER['PHP_SELF'])=='about.php'?'active':'' ?>">About</a></a>
        <a href="shipping.php" class="<?= basename($_SERVER['PHP_SELF'])=='shipping.php'?'active':'' ?>">Shipping</a></a>
        <a href="cart.php" class="icon">
           🛒 <span class="cart-badge"><?= count($_SESSION['cart']); ?></span>
        </a>
        <a href="wishlist.php" class="icon">♡</a>
    </nav>
</header>

<div class="tagline">
    Crafted with love, made to bloom your moment
</div>

<!-- ABOUT HERO -->
<section class="hero">
    <span class="badge">Our Story</span>

    <h1>
        <span class="hero-accent">Meet the Founder</span>
        <span class="hero-sub">The heart behind every handcrafted piece</span>
    </h1>
    

    <div class="hero-btn">
    <!-- WhatsApp -->
    <a href="https://wa.me/6282364384752?text=Halo%20CharmBloom%20saya%20ingin%20bertanya"
    target="_blank"
    class="btn">
    Contact Us
    </a>


    <!-- Instagram -->
    <a href="https://www.instagram.com/charmbloom.m/" 
       target="_blank" 
       class="btn-outline">
        Instagram
    </a>
</div>
</section>

<!-- ABOUT CONTENT -->
<section class="collection">
    <div class="products">

        <!-- AFIFAH -->
        <div class="product">
            <img src="assets/css/images/bouquet.jpg.webp" alt="Afifah Aulia Amri">
            <h4>AFIFAH AULIA AMRI</h4>
            <p>
                We are a team of six female students from Politeknik Caltex Riau
                with a shared ambition to build something meaningful.
            </p>
        </div>

        <!-- ERNI -->
        <div class="product">
            <img src="assets/css/images/bouquet.jpg.webp" alt="Erni Putri Tasta Sianturi">
            <h4>ERNI PUTRI TASTA SIANTURI</h4>
            <p>
                As students, we are committed to continuous learning, growth,
                and self-improvement both inside and outside the classroom.
            </p>
        </div>

        <!-- HADA -->
        <div class="product">
            <img src="assets/css/images/bouquet.jpg.webp" alt="Hadaria Putri">
            <h4>HADARIA PUTRI</h4>
            <p>
                We enjoy exploring new challenges, embracing creativity,
                and transforming ideas into real handcrafted pieces.
            </p>
        </div>

        <!-- JIHAN -->
        <div class="product">
            <img src="assets/css/images/bouquet.jpg.webp" alt="Jihan Dara Wisamah">
            <h4>JIHAN DARA WISAMAH</h4>
            <p>
                As six independent women, we value hard work, resilience,
                and perseverance in every step of our journey.
            </p>
        </div>

        <!-- NISA -->
        <div class="product">
            <img src="assets/css/images/bouquet.jpg.webp" alt="Nisa Khotimah">
            <h4>NISA KHOTIMAH</h4>
            <p>
                Through our creations, we aim to deliver more than products —
                we create meaningful pieces made with care and love.
            </p>
        </div>

        <!-- ROSA -->
        <div class="product">
            <img src="assets/css/images/bouquet.jpg.webp" alt="Rosaline Variska Amelia Siagian">
            <h4>ROSALINE VARISKA AMELIA SIAGIAN</h4>
            <p>
                Every bouquet and accessory reflects our dedication to quality,
                creativity, and heartfelt craftsmanship.
            </p>
        </div>

    </div>
</section>

<footer>
    <div class="footer-inner">
        <!-- BRAND -->
        <div class="footer-brand">
            <h3>CharmBloom</h3>
            <p>
                Our creations are designed to support your journey and celebrate
                the moments you're working towards.
            </p>

            <p class="footer-address">Jl.Serayu, Pekanbaru, Indonesia, Riau</p>

            <!-- SOCIAL ICONS (IMAGE VERSION) -->
            <div class="socials">
                <a href="https://wa.me/6282364384752" target="_blank" aria-label="WhatsApp">
                    <img src="assets/css/images/whatsapp.png" alt="WhatsApp">
                </a>

                <a href="https://instagram.com/charmbloom.m" target="_blank" aria-label="Instagram">
                    <img src="assets/css/images/instagram.png" alt="Instagram">
                </a>

                <a href="https://web.facebook.com/profile.php?id=61580933069579" target="_blank" aria-label="Facebook">
                    <img src="assets/css/images/facebook.png" alt="Facebook">
                </a>
                <a href="https://tiktok.com/@charmandbloom2025" target="_blank" aria-label="TikTok">
                    <img src="assets/css/images/tiktok.png" alt="TikTok">
                </a>
            </div>
        </div>

        <!-- LINKS -->
        <div class="footer-links">
            <div>
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="shop.php">Shop</a></li>
                    <li><a href="about.php">About</a></li>
                </ul>
            </div>

            <div>
                <h4>Help & Support</h4>
                <ul>
                    <li><a href="shipping.php">Shipping Info</a></li>
                    <li><a href="retur.php">Returns</a></li>
                    <li><a href="care_instructions.php">Care Instructions</a></li>
                </ul>
            </div>

            <div>
                <h4>Connect</h4>
                <ul>
                    <li><a href="https://instagram.com/" target="_blank">Instagram</a></li>
                    <li><a href="https://web.facebook.com/profile.php?id=61580933069579" target="_blank">Facebook</a></li>
                    <li><a href="https://tiktok.com/@charmandbloom2025" target="_blank">TikTok</a></li>
                    <li><a href="https://shopee.co.id/charmandbloom" target="_blank">Shopee</a></li>
                    <li><a href="https://tk.tokopedia.com/ZS56PH6nb/" target="_blank">Tokopedia</a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <p>© 2025 CharmBloom. All rights reserved.</p>
    </div>
</footer>

