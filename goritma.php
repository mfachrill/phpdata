
<?php

$jarak = 100; 
$waktu = 9.81; 
$kecepatan = $jarak / $waktu;

echo "Kecepatan: " . $kecepatan . " m/s<br>";
$kecepatan = 2; 
$waktu_tempuh = $jarak / $kecepatan;

echo "Waktu tempuh: " . $waktu_tempuh . " detik";
?>