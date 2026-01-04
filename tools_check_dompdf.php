<?php
// Small check script to verify Dompdf is autoloadable
error_reporting(E_ALL);
ini_set('display_errors',1);
require __DIR__ . '/vendor/autoload.php';
echo "autoload loaded\n";
echo "Dompdf class exists? ";
var_export(class_exists('Dompdf\\Dompdf'));
echo "\n";
