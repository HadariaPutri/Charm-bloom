<?php
session_start();
$order = $_SESSION['order'] ?? null;
// Guard: if no order, show a simple message
if (!$order) {
    echo "<p>No order found. Please complete an order to view the invoice.</p>";
    exit;
}
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Invoice — CharmBloom</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <style>
    body{font-family:Arial,Helvetica,sans-serif;margin:0;padding:20px;background:#f6f6f6}
    .sheet{max-width:800px;margin:20px auto;background:#fff;padding:24px;border-radius:6px;box-shadow:0 2px 6px rgba(0,0,0,0.06)}
    .header{display:flex;justify-content:space-between;align-items:center}
    h1{margin:0 0 6px 0;font-size:20px}
    .meta{color:#666;font-size:14px}
    table{width:100%;border-collapse:collapse;margin-top:16px}
    th,td{padding:8px;border-bottom:1px solid #eee;text-align:left}
    th{background:#fafafa}
    .totals{margin-top:12px;text-align:right}
    .controls{margin:12px 0}
    .btn{display:inline-block;padding:8px 12px;background:#3a87ad;color:white;border-radius:4px;text-decoration:none}
    @media print{ .controls{display:none} body{background:#fff} .sheet{box-shadow:none} }
  </style>
  <script>
    function doPrint(){ window.print(); }
  </script>
</head>
<body>
  <div class="sheet">
    <div class="controls">
      <a class="btn" href="download_invoice.php">Download PDF</a>
      <a class="btn" href="#" onclick="doPrint();return false;">Print / Save as PDF</a>
    </div>

    <?php $orderForTemplate = $order; include __DIR__ . '/invoice_template.php'; ?>

  </div>
</body>
</html>
