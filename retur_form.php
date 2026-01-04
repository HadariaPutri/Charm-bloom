<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Return Form | CharmBloom</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>
<body class="page-retur-form">

<section class="collection retur-form-section">
    <span class="badge">Return Form</span>

    <h2>
        Submit Your <span>Return Request</span>
    </h2>

    <p class="subtitle">
        Please fill in the form below carefully so we can process your return request.
    </p>

    <div class="products">
        <div class="product retur-form">

            <form action="retur_submit.php" method="POST" enctype="multipart/form-data" class="retur-form__form">

                <div class="retur-form__row">
                    <input type="text" name="name" placeholder="Full Name" required class="input">
                    <input type="text" name="order_id" placeholder="Order ID" required class="input">
                    <input type="text" name="product_name" placeholder="Product Name" required class="input">
                </div>

                <div class="retur-form__row">
                    <select name="reason" required class="select">
                        <option value="">-- Select Return Reason --</option>
                        <option>Product Damaged</option>
                        <option>Wrong Item</option>
                        <option>Quality Issue</option>
                        <option>Other</option>
                    </select>
                </div>

                <div class="retur-form__row">
                    <textarea name="message" placeholder="Explain the issue briefly..." rows="4" class="textarea"></textarea>
                </div>

                <div class="retur-form__row file-row">
                    <label class="file-label">Attach proof (photo)</label>
                    <input type="file" name="proof" required class="file-input">
                </div>

                <div class="retur-form__actions">
                    <button type="submit" class="btn">Submit Return Request</button>
                    <a href="retur.php" class="btn-outline">Back</a>
                </div>

            </form>

        </div>
    </div>
</section>

</body>
</html>
