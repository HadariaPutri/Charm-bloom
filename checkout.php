<?php
session_start();
$cart = $_SESSION['cart'] ?? [];

$subtotal = 0;
foreach ($cart as $item) {
    $subtotal += $item['price'] * $item['qty'];
}

$shipping = !empty($cart) ? 5000 : 0;
$total = $subtotal + $shipping;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Checkout | CharmBloom</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="assets/css/style.css">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

<style>
body { padding-top: 0; }

.checkout-wrapper {
    max-width: 1100px;
    margin: 40px auto;
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    padding: 0 20px;
}

.checkout-card {
    background: #fff;
    border-radius: 22px;
    padding: 28px;
    box-shadow: 0 12px 28px rgba(0,0,0,0.06);
}

.checkout-card input {
    width: 100%;
    padding: 14px 16px;
    border-radius: 14px;
    border: none;
    background: #ffd6e6;
    margin-bottom: 14px;
}

.delivery-options {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 14px;
    margin: 20px 0;
}

.delivery-box {
    border: 2px solid #eee;
    border-radius: 16px;
    padding: 18px;
    text-align: center;
    cursor: pointer;
    transition: .25s;
    font-weight: 600;
}

/* 🔥 SAAT DIPILIH */
.delivery-box.active {
    border-color: #ff4fa3;
    background: #ffe1ef;
    color: #ff2f84;
}

.summary-item {
    display: flex;
    justify-content: space-between;
    margin-bottom: 10px;
}

.summary-total {
    font-size: 18px;
    font-weight: 700;
}

.btn-checkout {
    width: 100%;
    margin-top: 20px;
    background: #ff4fa3;
    color: #fff;
    border: none;
    padding: 14px;
    border-radius: 999px;
    font-weight: 600;
    cursor: pointer;
}

.btn-checkout:hover {
    background: #ff2f84;
}

.back-cart {
    display: inline-flex;
    gap: 6px;
    margin-bottom: 18px;
    color: #333;
    text-decoration: none;
    font-weight: 600;
}

@media (max-width: 900px) {
    .checkout-wrapper { grid-template-columns: 1fr; }
}
</style>
</head>

<body>

<form action="process_checkout.php" method="POST">

<div class="checkout-wrapper">

<!-- LEFT -->
<div class="checkout-card">

<a href="cart.php" class="back-cart">✕ Back to Cart</a>

<h3>Contact Information</h3>
<input name="phone" required placeholder="Enter your Telp">

<!-- 🔑 HIDDEN INPUT -->
<input type="hidden" name="delivery_method" id="delivery_method" required>

<div class="delivery-options">
    <div class="delivery-box" data-value="Local Delivery">
        🚚 Local Delivery
    </div>
    <div class="delivery-box" data-value="Store Pickup">
        🏪 Store Pickup
    </div>
</div>

<h3>Shipping Address</h3>

<input name="first_name" placeholder="First Name">
<input name="last_name" placeholder="Last Name">
<input name="address" placeholder="Address">

<h3 style="margin-top:20px;">💳 Payment Information</h3>

<p style="font-size:14px">
🏦 <strong>BRI</strong> : 1628847354634<br>
📱 <strong>DANA</strong> : 0878 9658 3717
</p>

<input type="file">

</div>

<!-- RIGHT -->
<div class="checkout-card">

<h3>Order Summary</h3>

<?php foreach ($cart as $item): ?>
<div class="summary-item">
    <span><?= $item['name']; ?> (x<?= $item['qty']; ?>)</span>
    <span>Rp<?= number_format($item['price'] * $item['qty']); ?></span>
</div>
<?php endforeach; ?>

<hr>

<div class="summary-item">
    <span>Subtotal</span>
    <span>Rp<?= number_format($subtotal); ?></span>
</div>

<div class="summary-item">
    <span>Shipping</span>
    <span>Rp<?= number_format($shipping); ?></span>
</div>

<div class="summary-item summary-total">
    <span>Total</span>
    <span>Rp<?= number_format($total); ?></span>
</div>

<button class="btn-checkout">
    Complete Order
</button>

</div>

</div>
</form>

<!-- 🔥 JAVASCRIPT PILIH DELIVERY -->
<script>
const boxes = document.querySelectorAll('.delivery-box');
const input = document.getElementById('delivery_method');

boxes.forEach(box => {
    box.addEventListener('click', () => {
        boxes.forEach(b => b.classList.remove('active'));
        box.classList.add('active');
        input.value = box.dataset.value;
    });
});
</script>

</body>
</html>
