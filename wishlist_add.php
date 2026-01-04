<?php
session_start();

if (!isset($_SESSION['wishlist'])) {
    $_SESSION['wishlist'] = [];
}

$id = $_POST['id'];
$name = $_POST['name'];
$image = $_POST['image'];

if (!isset($_SESSION['wishlist'][$id])) {
    $_SESSION['wishlist'][$id] = [
        'name' => $name,
        'image' => $image
    ];
}

header("Location: index.php");
exit;
