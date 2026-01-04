<?php
session_start();
$wishlist = $_SESSION['wishlist'] ?? [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Wishlist | CharmBloom</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="page-wishlist">

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
        <a href="wishlist.php" class="active">♡</a>
    </nav>
</header>

<div class="tagline">
    Crafted with love, made to bloom your moment
</div>

<section class="collection">
    <span class="badge">Your Wishlist</span>
    <h2>Favorite <span>Products</span></h2>

<?php if (empty($wishlist)): ?>
    <p class="subtitle">You haven't liked any product yet 💔</p>
<?php else: ?>
    <?php $total = count($wishlist); $show = 3; ?>
    <?php if ($total > $show): ?>
        <p class="subtitle">Showing first <?= $show; ?> of <?= $total; ?> favorites</p>
    <?php endif; ?>
    <div class="products">
        <?php foreach (array_slice($wishlist, 0, $show) as $key => $item): ?>
            <div class="product">
                <img src="assets/css/images/<?= $item['image']; ?>" alt="<?= htmlspecialchars($item['name']); ?>">
                <h4><?= $item['name']; ?></h4>

                <div style="display:flex; justify-content:center; gap:12px; margin-top:10px;">
                    <a href="premium.php" class="btn">View Product</a>

                    <form action="wishlist_remove.php" method="POST">
                        <input type="hidden" name="key" value="<?= htmlspecialchars($key); ?>">
                        <button type="submit" class="btn-outline">Remove</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
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

</body>
</html>
