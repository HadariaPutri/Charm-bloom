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
<body>

<header class="navbar">
    <div class="logo">Charm<span>Bloom</span></div>
    <nav>
        <a href="index.php" class="<?= basename($_SERVER['PHP_SELF'])=='index.php'?'active':'' ?>">Home</a>
        <a href="shop.php" class="<?= basename($_SERVER['PHP_SELF'])=='shop.php'?'active':'' ?>">Shop</a>
        <a href="about.php">About</a>
        <a href="shipping.php">Shipping</a>
        <a href="#" class="icon">🛒</a>
        <a href="#" class="icon">♡</a>
    </nav>
</header>

<div class="tagline">
    Crafted with love, made to bloom your moment
</div>

<section class="collection">
    <h2>Bracelet Collection</h2>

    <div class="products">
        <?php
        $products = [
            ['id'=>'br1','name'=>'Rose Quartz Bracelet','price'=>15000,'img'=>'bracelet.jpg'],
            ['id'=>'br2','name'=>'Amethyst Bracelet','price'=>15000,'img'=>'bracelet.jpg']
        ];

        foreach ($products as $p):
        ?>
        <div class="product">
            <img src="../assets/images/<?= $p['img']; ?>">
            <h4><?= $p['name']; ?></h4>
            <p>Handcrafted bracelet with love.</p>
            <strong>Rp<?= number_format($p['price']); ?></strong>

            <form action="../add_to_cart.php" method="POST">
                <input type="hidden" name="id" value="<?= $p['id']; ?>">
                <input type="hidden" name="name" value="<?= $p['name']; ?>">
                <input type="hidden" name="price" value="<?= $p['price']; ?>">
                <button type="submit">Add to Cart</button>
            </form>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<footer>
    <div class="footer-inner">
        <div class="footer-brand">
            <h3>CharmBloom</h3>
            <p>Our creations are designed to support your journey and celebrate the moments you're working towards.</p>
            <p class="footer-address">Jl.Serayu, Pekanbaru, Indonesia, Riau</p>

           <div class="socials">
    <!-- WhatsApp -->
    <a href="https://wa.me/6282364384752" target="_blank" aria-label="WhatsApp">
        <svg viewBox="0 0 24 24">
            <path d="M20.52 3.48A11.94 11.94 0 0012 .25 11.83 11.83 0 003.7 4.58 11.95 11.95 0 001.5 12c0 2.1.55 4.15 1.6 5.95L1 23l4.66-1.22A11.9 11.9 0 0012 24c3.18 0 6.16-1.24 8.41-3.48A11.94 11.94 0 0024 12a11.94 11.94 0 00-3.48-8.52z" fill="currentColor"/>
            <path d="M17.6 14.2c-.3-.15-1.78-.88-2.05-.98-.27-.1-.46-.15-.66.15-.2.3-.8.98-.98 1.18-.18.2-.36.22-.66.07-.3-.15-1.25-.46-2.38-1.4-.88-.78-1.47-1.74-1.64-2.04-.17-.3-.02-.46.13-.61.13-.13.3-.36.46-.54.15-.18.2-.3.3-.5.1-.2 0-.38-.02-.52-.02-.15-.66-1.58-.9-2.17-.24-.58-.48-.5-.66-.51-.17-.02-.36-.02-.55-.02-.18 0-.46.07-.7.32-.24.24-.9.88-.9 2.15s.92 2.49 1.05 2.66c.13.18 1.8 2.78 4.36 3.9 3.06 1.28 3.06.85 3.61.8.55-.05 1.78-.72 2.03-1.42.25-.7.25-1.3.18-1.42-.07-.12-.27-.18-.57-.33z" fill="currentColor"/>
        </svg>
    </a>

    <!-- Facebook -->
    <a href="https://web.facebook.com/profile.php?id=61580933069579" target="_blank" aria-label="Facebook">
        <svg viewBox="0 0 24 24">
            <path d="M22 12c0-5.52-4.48-10-10-10S2 6.48 2 12c0 4.99 3.66 9.12 8.44 9.88v-6.99H7.9v-2.89h2.54V9.41c0-2.5 1.49-3.89 3.77-3.89 1.09 0 2.23.2 2.23.2v2.45h-1.25c-1.24 0-1.63.77-1.63 1.56v1.87h2.78l-.44 2.89h-2.34V22C18.34 21.12 22 17 22 12z" fill="currentColor"/>
        </svg>
    </a>

    <!-- TikTok -->
    <a href="https://tiktok.com/@charmandbloom2025" target="_blank" aria-label="TikTok">
        <img src="../assets/css/images/tiktok.png" alt="TikTok">
    </a>

    <!-- Instagram -->
    <a href="https://instagram.com/charmbloom.m" target="_blank" aria-label="Instagram">
        <svg viewBox="0 0 24 24">
            <path d="M7 2h10a5 5 0 015 5v10a5 5 0 01-5 5H7a5 5 0 01-5-5V7a5 5 0 015-5zm5 4.5A4.5 4.5 0 1016.5 11 4.5 4.5 0 0012 6.5zM18.5 5.25a1.25 1.25 0 11-1.25 1.25A1.25 1.25 0 0118.5 5.25z" fill="currentColor"/>
        </svg>
    </a>
</div>

        </div>

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
                    <li><a href="#">Shipping Info</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Care Instructions</a></li>
                </ul>
            </div>

            <div>
                <h4>Connect</h4>
                <ul>
                    <li><a href="https://instagram.com/" target="_blank">Instagram</a></li>
                    <li><a href="https://web.facebook.com/profile.php?id=61580933069579" target="_blank">Facebook</a></li>
                    <li><a href="https://tiktok.com/@charmandbloom2025" target="_blank">TikTok</a></li>
                    <li><a href="#">Shopee</a></li>
                    <li><a href="#">Tokopedia</a></li>
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