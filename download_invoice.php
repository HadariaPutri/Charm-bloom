<?php
session_start();

$order = $_SESSION['order'] ?? null;

// If user requested the HTML view instead, show the view page.
if (isset($_GET['view'])) {
    header('Location: invoice_view.php');
    exit;
}

// Try to use Composer autoload (for Dompdf or setasign packages) if available.
$autoload = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoload)) {
    require_once $autoload;
}

// If Dompdf is available, render HTML invoice (template) and stream PDF.
if (class_exists('\Dompdf\Dompdf') || class_exists('Dompdf\\Dompdf')) {
    try {
        // Capture invoice HTML from template
        ob_start();
        $orderForTemplate = $order; // variable used by template
        include __DIR__ . '/invoice_template.php';
        $html = ob_get_clean();

        $dompdfClass = class_exists('\Dompdf\Dompdf') ? '\\Dompdf\\Dompdf' : 'Dompdf\\Dompdf';
        $dompdf = new $dompdfClass();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream('charmbloom-invoice.pdf', ['Attachment' => 1]);
        exit;
    } catch (Exception $e) {
        // Fall back to other methods below
    }
}

// If FPDF exists in project, include it
if (file_exists(__DIR__ . '/fpdf/fpdf.php')) {
    require_once __DIR__ . '/fpdf/fpdf.php';
}

if (class_exists('FPDF')) {
    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(0,10,'CharmBloom - Purchase Receipt',0,1);

    $pdf->SetFont('Arial','',12);
    $pdf->Cell(0,10,'Date: '.($order['date'] ?? '-'),0,1);
    $pdf->Cell(0,10,'Delivery: '.($order['delivery'] ?? '-'),0,1);
    $pdf->Ln(5);

    if ($order && !empty($order['cart'])) {
        foreach ($order['cart'] as $item) {
            $pdf->Cell(0,8,
                ($item['name'] ?? 'Item').' x'.($item['qty'] ?? 1).' - Rp'.number_format($item['price'] ?? 0),
                0,1
            );
        }
    } else {
        $pdf->Cell(0,8,'(no items)',0,1);
    }

    $pdf->Output();
    exit;
}

// No PDF libraries available — show a helpful HTML page with instructions and link to printable view.
http_response_code(200);
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Download Invoice — CharmBloom</title>
  <style>
    body{font-family:Arial,Helvetica,sans-serif;max-width:720px;margin:30px auto;padding:20px}
    .box{border:1px solid #ddd;padding:20px;border-radius:6px}
    a.button{display:inline-block;padding:10px 14px;background:#3a87ad;color:#fff;border-radius:4px;text-decoration:none}
    pre{background:#f8f8f8;padding:12px;border-radius:4px}
  </style>
</head>
<body>
  <div class="box">
    <h2>Invoice download not available on this server</h2>
    <p>We couldn't find a server-side PDF library to generate the invoice automatically.</p>
    <p>Options to enable automatic download:</p>
    <ul>
      <li>Install <strong>Dompdf</strong> via Composer (recommended for best HTML-based results):<br>
        <pre>composer require dompdf/dompdf</pre>
      </li>
      <li>Or install <strong>FPDF</strong> (simpler):<br>
        <pre>composer require setasign/fpdf</pre>
        or download from <a href="http://www.fpdf.org/">fpdf.org</a> and place <code>fpdf.php</code> in <code>fpdf/fpdf.php</code>.
      </li>
    </ul>
    <p>If you prefer a quick workaround, you can open the printable invoice page and use your browser's Print → Save as PDF:</p>
    <p><a class="button" href="invoice_view.php" target="_blank">Open Printable Invoice</a></p>
    <p>After installing a library, re-run this download and it will generate a PDF.</p>
  </div>
</body>
</html>
<?php
exit;
