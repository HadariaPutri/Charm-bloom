<?php
session_start();

$key = $_POST['key'] ?? '';

if ($key && isset($_SESSION['cart'][$key])) {
    unset($_SESSION['cart'][$key]);
}

header("Location: cart.php");
exit;
