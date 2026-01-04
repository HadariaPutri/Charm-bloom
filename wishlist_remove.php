<?php
session_start();

if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['key'])) {
    $key = $_POST['key'];
    if (isset($_SESSION['wishlist'][$key])) {
        unset($_SESSION['wishlist'][$key]);
    }
}

header('Location: wishlist.php');
exit;
