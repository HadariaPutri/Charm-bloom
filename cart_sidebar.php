<?php
session_start();
$cart = $_SESSION['cart'] ?? [];
$total = 0;
?>

<div id="cartSidebar" class="cart-sidebar">
    <div class="cart-header">
        <h3>🛍 Cart</h3>
        <button onclick="closeCart()">✕</button>
    </div>

    <div class="cart-body" id="cartContent">
    <?php if (empty($cart)): ?>
        <p class="empty">Your cart is empty</p>
    <?php else: ?>
        <?php foreach ($cart as $item): 
            $subtotal = $item['price'] * $item['qty'];
            $total += $subtotal;
        ?>
        <div class="cart-item">
            <img src="../assets/css/images/<?= $item['image']; ?>">
            <div>
                <strong><?= $item['name']; ?></strong>
                <p>Colour: <?= $item['color']; ?></p>
                <p>Qty: <?= $item['qty']; ?></p>
                <p>Rp<?= number_format($subtotal); ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    <?php endif; ?>
    </div>

    <div class="cart-footer">
        <div>Total: <strong>Rp<?= number_format($total); ?></strong></div>
        <button class="btn-cart full">Checkout</button>
    </div>
</div>
