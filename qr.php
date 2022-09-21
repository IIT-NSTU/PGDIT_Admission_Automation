<?php
error_reporting(0);

require_once('phpqrcode/qrlib.php');

$file = "image/qr.png";
$ecc = 'L';   // $ecc stores error correction capability('L')
$pixel_Size = 10;
  
QRcode::png($roll, $file, $ecc, $pixel_Size);
?>


