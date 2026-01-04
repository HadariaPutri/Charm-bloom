<?php
session_start();

$cart = $_SESSION['cart'] ?? [];

$subtotal = 0;
foreach ($cart as $it) {
    $subtotal += ($it['price'] ?? 0) * ($it['qty'] ?? 1);
}

$shipping = !empty($cart) ? 5000 : 0;
$total = $subtotal + $shipping;

$order = [
    'id' => 'INV' . date('YmdHis') . rand(100,999),
    'cart' => $cart,
    'date' => date("d-m-Y H:i"),
    'delivery' => $_POST['delivery_method'] ?? $_POST['delivery'] ?? '',
    'phone' => $_POST['phone'] ?? '',
    'first_name' => $_POST['first_name'] ?? '',
    'last_name' => $_POST['last_name'] ?? '',
    'address' => $_POST['address'] ?? '',
    'subtotal' => $subtotal,
    'shipping_fee' => $shipping,
    'total' => $total,
];

// Save order to session so invoice pages can read it
$_SESSION['order'] = $order;

// Clear cart after placing order
$_SESSION['cart'] = [];

header("Location: order_complete.php");
exit;
