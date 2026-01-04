<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Order Complete</title>
<link rel="stylesheet" href="assets/css/style.css">
</head>

<body style="background:#fff0f6;display:flex;justify-content:center;align-items:center;height:100vh">

<div style="text-align:center">
    <div style="font-size:60px;color:#ff2f84">✔</div>
    <h1 style="color:#ff2f84">Order Complete!</h1>
    <p>Thank you for your purchase 💖</p>

    <a href="download_invoice.php" class="btn-cart" style="margin-top:20px;display:inline-block">
        Download Struk (PDF)
    </a>

    <br><br>

    <a href="shop.php" class="btn-outline">
        Continue Shopping
    </a>
</div>

</body>
</html>
