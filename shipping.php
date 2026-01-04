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

    <style>
/* ================= SHIPPING BOX INLINE ================= */

.shipping-section {
    max-width: 1100px;
    margin: 80px auto;
    padding: 0 20px;
}

.shipping-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background: #ffffff;
    border: 2px solid #ff9acb;
    border-radius: 20px;
    padding: 25px 30px;
    margin-bottom: 22px;
}

.shipping-title {
    width: 30%;
}

.shipping-title h4 {
    color: #ff4fa3;
    font-size: 20px;
    margin-bottom: 6px;
}

.shipping-title p {
    font-size: 14px;
    color: #666;
}

.shipping-content {
    width: 70%;
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.shipping-content span {
    background: #fff0f6;
    border: 1.5px solid #ffb6d9;
    padding: 8px 16px;
    border-radius: 999px;
    font-size: 14px;
    white-space: nowrap;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .shipping-row {
        flex-direction: column;
        align-items: flex-start;
        gap: 15px;
    }

    .shipping-title,
    .shipping-content {
        width: 100%;
    }
}
</style>


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

<!-- SHIPPING HERO -->
<section class="hero">
    <span class="badge">Shipping Information</span>

    <h1>
        <span class="hero-accent">Everything You Need to Know</span>
        <span class="hero-sub">About Our Delivery</span>
    </h1>

    <p>
        Find detailed information about our shipping methods, delivery times,
        and special handling for handcrafted items and floral bouquets.
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

<!-- SHIPPING DETAILS -->
<section class="shipping-section">

    <!-- SHIPPING METHODS -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>🚚 Shipping Methods</h4>
            <p>Available delivery options</p>
        </div>
        <div class="shipping-content">
            <span>📦 Regular Shipping</span>
            <span>⚡ Same-Day / Instant Delivery</span>
            <span>📍 Local Courier</span>
        </div>
    </div>

    <!-- PROCESSING TIME -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>⏳ Processing Time</h4>
            <p>Order preparation</p>
        </div>
        <div class="shipping-content">
            <span>🧶 Accessories: 1–3 days</span>
            <span>🌸 Bouquets: Same day / by request</span>
        </div>
    </div>

    <!-- ESTIMATED DELIVERY -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>🕒 Estimated Delivery</h4>
            <p>Delivery duration</p>
        </div>
        <div class="shipping-content">
            <span>📍 Local: Same day – 1 day</span>
            <span>🌍 Outside city: 2–5 days</span>
        </div>
    </div>

    <!-- SHIPPING COVERAGE -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>📦 Shipping Coverage</h4>
            <p>Delivery areas</p>
        </div>
        <div class="shipping-content">
            <span>📍 Local Areas</span>
            <span>🇮🇩 Nationwide</span>
            <span>⚠️ Special conditions apply</span>
        </div>
    </div>

    <!-- SHIPPING COST -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>💰 Shipping Cost</h4>
            <p>Delivery charges</p>
        </div>
        <div class="shipping-content">
            <span>🧾 Calculated at checkout</span>
            <span>📍 Based on location & courier</span>
            <span>🌸 Extra fee for bouquets</span>
        </div>
    </div>

    <!-- SPECIAL NOTES -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>🌸 Floral Notes</h4>
            <p>For bouquets</p>
        </div>
        <div class="shipping-content">
            <span>📦 Carefully packed</span>
            <span>⚡ Same-day recommended</span>
            <span>⚠️ Fragile items</span>
        </div>
    </div>

    <!-- TRACKING -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>🔎 Tracking</h4>
            <p>Order tracking</p>
        </div>
        <div class="shipping-content">
            <span>Tracking number sent after shipment</span>
        </div>
    </div>

    <!-- CONTACT -->
    <div class="shipping-row">
        <div class="shipping-title">
            <h4>📞 Shipping Assistance</h4>
            <p>Need help?</p>
        </div>
        <div class="shipping-content">
            <span>📱 WhatsApp: +62 823-6438-4752</span>
            <span>📷 Instagram: @charmbloom.m</span>
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
