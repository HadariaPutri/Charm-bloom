<?php
session_start();

// Basic validation and file handling for return form
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: retur_form.php');
    exit;
}

$name = trim($_POST['name'] ?? '');
$order_id = trim($_POST['order_id'] ?? '');
$product_name = trim($_POST['product_name'] ?? '');
$reason = trim($_POST['reason'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];
if ($name === '' || $order_id === '' || $product_name === '' || $reason === '') {
    $errors[] = 'Please fill in all required fields.';
}

// handle uploaded proof (optional minimal handling)
if (!empty($_FILES['proof']) && $_FILES['proof']['error'] === UPLOAD_ERR_OK) {
    $tmp = $_FILES['proof']['tmp_name'];
    $orig = basename($_FILES['proof']['name']);
    $uploadsDir = __DIR__ . '/uploads/returns';
    if (!is_dir($uploadsDir)) {
        mkdir($uploadsDir, 0755, true);
    }
    $target = $uploadsDir . '/' . time() . '_' . preg_replace('/[^a-zA-Z0-9._-]/', '_', $orig);
    if (!move_uploaded_file($tmp, $target)) {
        $errors[] = 'Failed to save uploaded file.';
    }
} else {
    $errors[] = 'Please attach a proof photo.';
}

// In a real app you would persist the request to DB or email it to support.
// For now, store a simple record in session for debugging/demo only.
if (empty($errors)) {
    $_SESSION['last_return_request'] = [
        'name' => $name,
        'order_id' => $order_id,
        'product_name' => $product_name,
        'reason' => $reason,
        'message' => $message,
        'uploaded' => $target ?? null,
        'time' => time()
    ];

    // Redirect to thank-you page
    header('Location: retur_thanks.php');
    exit;
}

// If there are errors, put them in session and redirect back to form
$_SESSION['retur_errors'] = $errors;
header('Location: retur_form.php');
exit;
