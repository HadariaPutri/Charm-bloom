<?php
// Expects $orderForTemplate variable (array) passed in by including script.
$order = $orderForTemplate ?? ($order ?? null);
if (!$order) {
    echo "<p>No order data available.</p>";
    return;
}
?>
<div class="header">
  <div>
    <h1>CharmBloom</h1>
    <div class="meta">Jl.Serayu, Pekanbaru, Indonesia, Riau</div>
  </div>
  <div style="text-align:right">
    <div style="font-weight:bold">Invoice</div>
    <div class="meta">Date: <?php echo htmlspecialchars($order['date'] ?? '-'); ?></div>
    <div class="meta">Order ID: <?php echo htmlspecialchars($order['id'] ?? '-'); ?></div>
  </div>
</div>

<table>
  <thead>
    <tr><th>Item</th><th>Qty</th><th style="text-align:right">Price</th></tr>
  </thead>
  <tbody>
  <?php
  $subtotal = 0;
  if (!empty($order['cart']) && is_array($order['cart'])) {
      foreach ($order['cart'] as $it) {
          $name = htmlspecialchars($it['name'] ?? 'Item');
          $qty = (int)($it['qty'] ?? 1);
          $price = (float)($it['price'] ?? 0);
          $line = $price * $qty;
          $subtotal += $line;
          echo "<tr><td>$name</td><td>$qty</td><td style=\"text-align:right\">Rp".number_format($line)."</td></tr>";
      }
  } else {
      echo "<tr><td colspan=3>(no items)</td></tr>";
  }
  ?>
  </tbody>
</table>

<div class="totals">
  <div>Subtotal: Rp<?php echo number_format($subtotal); ?></div>
  <?php if (!empty($order['shipping_fee'])): ?>
    <div>Shipping: Rp<?php echo number_format($order['shipping_fee']); ?></div>
  <?php endif; ?>
  <div style="font-weight:bold;margin-top:8px">Total: Rp<?php echo number_format(($subtotal + ($order['shipping_fee'] ?? 0))); ?></div>
</div>

<?php if (!empty($order['notes'])): ?>
  <div style="margin-top:12px;font-size:13px;color:#555">
    <strong>Note:</strong> <?php echo nl2br(htmlspecialchars($order['notes'])); ?>
  </div>
<?php endif; ?>
