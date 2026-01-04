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
    <title>Bouquet Collection | CharmBloom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="page-bouquets">

<!-- ================= HEADER ================= -->
<header class="navbar">
    <div class="logo">Charm<span>Bloom</span></div>

    <nav>
        <a href="../index.php">Home</a>
        <a href="../shop.php" class="active">Shop</a>
        <a href="../about.php">About</a>
        <a href="../shipping.php">Shipping</a>

        <!-- CART -->
        <a href="../cart.php" class="icon">
            🛒 <span class="cart-badge"><?= count($_SESSION['cart']); ?></span>
        </a>
        <a href="../wishlist.php" class="icon">♡</a>
    </nav>
</header>

<!-- TAGLINE -->
<div class="tagline">
    Crafted with love, made to bloom your moment
</div>

<!-- ================= HERO ================= -->
<section class="hero">
    <span class="badge">Bouquet Collection</span>

    <h1>
        <span class="hero-accent">Thoughtfully Crafted Flower Bouquets</span>
        <span class="hero-sub">for Every Special Moment</span>
    </h1>

    <p>
        Fresh floral bouquets, beautifully arranged and made with love
        to celebrate meaningful moments.
    </p>

    <div class="hero-btn">
        <a href="../shop.php" class="btn">Back to Shop</a>
    </div>
</section>

<script>
// Handle color selection enabling add-to-cart and quantity controls
document.addEventListener('DOMContentLoaded', function(){
    document.querySelectorAll('.product-form').forEach(function(form){
        const colorInputs = form.querySelectorAll('input[name="color"]');
        const addBtn = form.querySelector('.btn-cart');
        const selectedColorLabel = form.querySelector('.selected-color');
        const qtyInput = form.querySelector('.qty-input');
        const qtyHidden = form.querySelector('.input-quantity-hidden');
        const btnDec = form.querySelector('.qty-btn.dec');
        const btnInc = form.querySelector('.qty-btn.inc');

        // disable submit until color selected
        function checkColor() {
            const checked = form.querySelector('input[name="color"]:checked');
            if (checked) {
                addBtn.disabled = false;
                if (selectedColorLabel) selectedColorLabel.textContent = 'Warna: ' + checked.value;
            } else {
                addBtn.disabled = true;
                if (selectedColorLabel) selectedColorLabel.textContent = 'Pilih warna';
            }
        }

        colorInputs.forEach(function(r){
            r.addEventListener('change', checkColor);
        });
        checkColor();

        // quantity controls
        if (btnDec && btnInc && qtyInput && qtyHidden) {
            btnDec.addEventListener('click', function(){
                let v = parseInt(qtyInput.value) || 1;
                if (v > 1) v--;
                qtyInput.value = v;
                qtyHidden.value = v;
            });
            btnInc.addEventListener('click', function(){
                let v = parseInt(qtyInput.value) || 1;
                if (v < 99) v++;
                qtyInput.value = v;
                qtyHidden.value = v;
            });
            // sync manual input
            qtyInput.addEventListener('change', function(){
                let v = parseInt(qtyInput.value) || 1;
                if (v < 1) v = 1;
                if (v > 99) v = 99;
                qtyInput.value = v;
                qtyHidden.value = v;
            });
        }
    });
});
</script>

<!-- ================= PRODUCTS ================= -->
<section class="collection bouquets">
    <div class="products">

        <!-- ================= PRODUCT 1 ================= -->
        <div class="product">
            <img src="../assets/css/images/bouquet.jpg.webp" alt="Sunflower Bouquet">

            <h4>Sunflower Bouquet</h4>
            <p>Bright sunflower arrangement for joyful moments.</p>

            <form action="../add_to_cart.php" method="POST" class="product-form">
                <input type="hidden" name="id" value="sunflower">
                <input type="hidden" name="name" value="Sunflower Bouquet">
                <input type="hidden" name="price" value="50000">
                <input type="hidden" name="image" value="bouquet.jpg.webp">
                <input type="hidden" name="quantity" value="1" class="input-quantity-hidden">

                <!-- PRICE (moved above colors) -->
                <div style="text-align:center; margin-top:8px;">
                    <span class="price">Rp50.000</span>
                </div>


                <!-- COLOUR -->
                <p class="color-label" style="text-align:center; margin-top:12px;">
                    <strong>Colour</strong>
                </p>

                <div class="colors" style="justify-content:center;">
                    <label>
                        <input type="radio" name="color" value="Yellow" required>
                        <span class="color yellow" title="Yellow"></span>
                    </label>
                    <label>
                        <input type="radio" name="color" value="White">
                        <span class="color white" title="White"></span>
                    </label>
                    <label>
                        <input type="radio" name="color" value="Pink">
                        <span class="color pink" title="Pink"></span>
                    </label>
                </div>

                <!-- FOOTER -->
                <div class="product-footer" style="justify-content:center; gap:14px;">
                    <div class="qty-controls">
                        <button type="button" class="qty-btn dec" aria-label="Decrease">−</button>
                        <input type="number" class="qty-input" value="1" min="1" max="99" aria-label="Quantity">
                        <button type="button" class="qty-btn inc" aria-label="Increase">+</button>
                    </div>

                    <button type="submit" class="btn-cart" disabled>
                        Add to Cart →
                    </button>
                </div>
            </form>
        </div>

         <!-- ================= PRODUCT 2 ================= -->
        <div class="product">
            <img src="../assets/css/images/bouquet.jpg.webp" alt="Sunflower Bouquet">

            <h4>Sunflower Bouquet</h4>
            <p>Bright sunflower arrangement for joyful moments.</p>

            <form action="../add_to_cart.php" method="POST" class="product-form">
                <input type="hidden" name="id" value="sunflower">
                <input type="hidden" name="name" value="Sunflower Bouquet">
                <input type="hidden" name="price" value="50000">
                <input type="hidden" name="image" value="bouquet.jpg.webp">
                <input type="hidden" name="quantity" value="1" class="input-quantity-hidden">

                <!-- PRICE (moved above colors) -->
                <div style="text-align:center; margin-top:8px;">
                    <span class="price">Rp50.000</span>
                </div>

                <!-- COLOUR -->
                <p class="color-label" style="text-align:center; margin-top:12px;">
                    <strong>Colour</strong>
                </p>

                <div class="colors" style="justify-content:center;">
                    <label>
                        <input type="radio" name="color" value="Yellow" required>
                        <span class="color yellow" title="Yellow"></span>
                    </label>
                    <label>
                        <input type="radio" name="color" value="White">
                        <span class="color white" title="White"></span>
                    </label>
                    <label>
                        <input type="radio" name="color" value="Pink">
                        <span class="color pink" title="Pink"></span>
                    </label>
                </div>

                <!-- FOOTER -->
                <div class="product-footer" style="justify-content:center; gap:14px;">
                    <div class="qty-controls">
                        <button type="button" class="qty-btn dec" aria-label="Decrease">−</button>
                        <input type="number" class="qty-input" value="1" min="1" max="99" aria-label="Quantity">
                        <button type="button" class="qty-btn inc" aria-label="Increase">+</button>
                    </div>

                    <button type="submit" class="btn-cart" disabled>
                        Add to Cart →
                    </button>
                </div>
            </form>
        </div>

    </div>
</section>

<!-- ================= FOOTER ================= -->
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
                    <img src="../assets/css/images/whatsapp.png" alt="WhatsApp">
                </a>

                <a href="https://instagram.com/charmbloom.m" target="_blank" aria-label="Instagram">
                    <img src="../assets/css/images/instagram.png" alt="Instagram">
                </a>

                <a href="https://web.facebook.com/profile.php?id=61580933069579" target="_blank" aria-label="Facebook">
                    <img src="../assets/css/images/facebook.png" alt="Facebook">
                </a>
                <a href="https://tiktok.com/@charmandbloom2025" target="_blank" aria-label="TikTok">
                    <img src="../assets/css/images/tiktok.png" alt="TikTok">
                </a>
            </div>
        </div>

        <!-- LINKS -->
        <div class="footer-links">
            <div>
                <h4>Quick Links</h4>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../shop.php">Shop</a></li>
                    <li><a href="../about.php">About</a></li>
                </ul>
            </div>

            <div>
                <h4>Help & Support</h4>
                <ul>
                    <li><a href="../shipping.php">Shipping Info</a></li>
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
