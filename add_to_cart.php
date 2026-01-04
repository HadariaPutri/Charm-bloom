<?php
session_start();

// Pastikan cart ada
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Validasi data POST
if (
    !isset($_POST['id'], $_POST['name'], $_POST['price'], $_POST['color'])
) {
    // Jika data tidak lengkap, kembali ke halaman sebelumnya
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

$id    = $_POST['id'];
$name  = $_POST['name'];
$price = (int) $_POST['price'];
$color = $_POST['color'];
$image = $_POST['image'] ?? '';
$qty   = isset($_POST['quantity']) ? max(1, (int)$_POST['quantity']) : 1;

// 🔥 Key unik = produk + warna
$cartKey = $id . '_' . strtolower($color);

// Jika produk + warna sudah ada → tambah qty
if (isset($_SESSION['cart'][$cartKey])) {
    $_SESSION['cart'][$cartKey]['qty'] += $qty;
} else {
    // Jika belum ada → tambah baru
    $_SESSION['cart'][$cartKey] = [
        'id'    => $id,
        'name'  => $name,
        'price' => $price,
        'color' => $color,
        'image' => $image,
        'qty'   => $qty
    ];
}

// 🔁 KEMBALI KE HALAMAN SEBELUMNYA (bouquets.php)
header("Location: " . $_SERVER['HTTP_REFERER']);
exit;
