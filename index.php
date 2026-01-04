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
    <link rel="stylesheet" href="{{asset(assets/css/style.css)}}">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body>

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

<!-- HERO -->
<section class="hero">
    <span class="badge">Handcrafted With Us</span>

    <h1>
        <span class="hero-accent">Beautiful Bracelets &amp; Bouquets</span>
        <span class="hero-sub">for Every Occasion</span>
    </h1>

    <p>
        Discover our collection of <span>handcrafted bracelets</span> and
        <span>floral bouquets</span>, thoughtfully made with love and detail.
    </p>

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

<!-- WHY CHOOSE US -->
<section class="why-choose-us">
    <span class="badge">Why Choose Us</span>

    <h2>Crafted with <span>Passion</span></h2>

    <p class="subtitle">
        Every bracelet and bouquet tells a story of dedication, quality, and love.
    </p>

    <div class="why-box">

        <div class="card">
            <h3>Crafted with Passion</h3>
            <p>
                Every bracelet and bouquet tells a story of dedication,
                quality, and love.
            </p>
        </div>

        <div class="card">
            <h3>Premium Quality</h3>
            <p>
                We use carefully selected materials to ensure lasting beauty.
            </p>
        </div>

        <div class="card">
            <h3>Unique Designs</h3>
            <p>
                Every piece is uniquely crafted to reflect your personal style.
            </p>
        </div>

    </div>
</section>


<!-- COLLECTION PREVIEW -->
<section class="collection">
    <span class="badge">Our Collection</span>

    <h2>Signature <span>Collection</span></h2>

    <p class="subtitle">
        Browse our beautiful collection of handcrafted accessories and floral creations.
    </p>

    <div class="products">
        <div class="product">
            <img src="assets/css/images/bouquet.jpg.webp" alt="Flower Bouquet">
            <h4>Flower Bouquet</h4>
            <p>Beautifully arranged floral bouquet.</p>
            <a href="collections/bouquets.php" class="btn">More</a>
        </div>

        <div class="product">
            <img src="assets/css/images/ring.jpg.jpg" alt="Ring Collection">
            <h4>Ring Collection</h4>
            <p>Delicate rings for elegance and gorgoes.</p>
            <a href="collections/rings.php" class="btn">More</a>
        </div>

        <div class="product">
            <img src="assets/css/images/phone-strap.jpg.jpg" alt="Phone Strap">
            <h4>Phone Strap</h4>
            <p>Stylish handcrafted phone straps.</p>
             <a href="collections/phone-straps.php" class="btn">More</a>
        </div>

        <div class="product">
            <img src="assets/css/images/bracelet.jpg.jpg" alt="Bracelet">
            <h4>Bracelet</h4>
            <p>Elegant handcrafted bracelets.</p>
             <a href="collections/rings.php" class="btn">More</a>
        </div>
    </div>
</section>

<!-- PREMIUM COLLECTION -->
<section class="collection premium">
    <span class="badge">Our Premium Product</span>

    <h2>Premium <span>Collection</span></h2>

    <p class="subtitle">
        Explore our exclusive collection of high-quality, elegantly crafted products
        designed to bring a touch of luxury and sophistication to your experience.
    </p>

    <div class="products">

        <!-- PREMIUM PRODUCT 1 -->
        <div class="product">
            <img src="assets/css/images/bracelet.jpg.jpg" alt="Luxury Bracelet">

            <h4>Luxury Bracelet</h4>
            <p>Premium handcrafted bracelet with elegant details.</p>

            <!-- LIKE -->
            <form action="wishlist_add.php" method="POST" style="text-align:center;">
                <input type="hidden" name="id" value="luxury-bracelet">
                <input type="hidden" name="name" value="Luxury Bracelet">
                <input type="hidden" name="image" value="bracelet.jpg.jpg">
                <button type="submit" class="btn-outline">♡</button>
            </form>

            <a href="premium.php" class="btn" style="margin-top:12px;">More</a>
        </div>

        <!-- PREMIUM PRODUCT 2 -->
        <div class="product">
            <img src="assets/css/images/ring.jpg.jpg" alt="Premium Ring">

            <h4>Premium Ring</h4>
            <p>Elegant premium ring for special occasions.</p>

            <!-- LIKE -->
            <form action="wishlist_add.php" method="POST" style="text-align:center;">
                <input type="hidden" name="id" value="premium-ring">
                <input type="hidden" name="name" value="Premium Ring">
                <input type="hidden" name="image" value="ring.jpg.jpg">
                <button type="submit" class="btn-outline">♡</button>
            </form>

            <a href="premium.php" class="btn" style="margin-top:12px;">More</a>
        </div>

        <!-- PREMIUM PRODUCT 3 -->
        <div class="product">
            <img src="assets/css/images/ring.jpg.jpg" alt="Premium Ring">

            <h4>Premium Ring</h4>
            <p>Elegant premium ring for special occasions.</p>

            <!-- LIKE -->
            <form action="wishlist_add.php" method="POST" style="text-align:center;">
                <input type="hidden" name="id" value="premium-ring">
                <input type="hidden" name="name" value="Premium Ring">
                <input type="hidden" name="image" value="ring.jpg.jpg">
                <button type="submit" class="btn-outline">♡</button>
            </form>

            <a href="premium.php" class="btn" style="margin-top:12px;">More</a>
        </div>

    </div>
</section>

<!-- CUSTOMER TESTIMONIALS -->
<section class="collection testimonials">
    <span class="badge">Customer Testimonials</span>

    <h2>Heartfelt Reviews from <span>Our Happy Customers</span></h2>

    <p class="subtitle">
        Discover what our customers are saying about our handcrafted bouquets,
        jewelry, and phone straps—each piece thoughtfully made to bring beauty,
        meaning, and joy to their special moments.
    </p>

    <div class="why-box">

        <div class="card">
            <h4>Sarah A.</h4>
            <p>
                 “The bouquet was absolutely stunning! Fresh flowers, beautifully arranged,
                and delivered right on time.” 
            </p> 
            <p> ★★★★★ </p>
        </div>

        <div class="card">
            <h4>Aulia R.</h4>
            <p>
                “The flower bouquet was absolutely stunning! Fresh, beautifully arranged, and it smelled amazing. 
                It made my special day even more memorable.” 
            </p>
            <p> ★★★★★ </p>
        </div>

        <div class="card">
            <h4>Nadia S.</h4>
            <p>
                 “I ordered a handmade bracelet and the quality blew me away. 
                 The details are so delicate and elegant—definitely worth every penny!”
            </p>
            <p> ★★★★★ </p>

        </div>

        <div class="card">
            <h4>Dina M.</h4>
            <p>
                 “Love my new phone strap! It’s sturdy, cute, and perfectly matches my style. 
                 I’ve been using it every day.” 
            </p>
            <p> ★★★★★ </p>

        </div>

        <div class="card">
            <h4>Bella K.</h4>
            <p>
                 “Fast delivery and excellent service. 
                 The bouquet I bought looked exactly like the photos—maybe even better!” 
            </p>
            <p> ★★★★★ </p>

        </div>

        <div class="card">
            <h4>Melisa A.</h4>
            <p>
                 “The packaging was so pretty and thoughtful. 
                 It felt like receiving a gift made with love. Will definitely order again!” ★★★★★
            </p>
        </div>

    </div>

    <!-- Arrow controls for horizontal scroll -->
    <div class="testimonials-nav">
        <button class="nav-btn left" aria-label="Scroll left">‹</button>
        <button class="nav-btn right" aria-label="Scroll right">›</button>
    </div>

    <script>
    (function(){
        const section = document.querySelector('.collection.testimonials');
        if (!section) return;
        const container = section.querySelector('.why-box');
        const btnLeft = section.querySelector('.nav-btn.left');
        const btnRight = section.querySelector('.nav-btn.right');
        const amount = 340; // scroll amount per click

        btnLeft.addEventListener('click', function(){
            container.scrollBy({ left: -amount, behavior: 'smooth' });
        });

        btnRight.addEventListener('click', function(){
            container.scrollBy({ left: amount, behavior: 'smooth' });
        });
    })();
    </script>
</section>

<!-- FOOTER -->
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
