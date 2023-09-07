<?php
// Array dengan beberapa bilangan acak
$bilangan = [80, 75, 90, 87, 100, 99, ];


echo "Semua Bilangan: " . implode(', ', $bilangan) . "<br>";


sort($bilangan);
echo "Bilangan Terkecil ke Terbesar: " . implode(', ', $bilangan) . "<br>";


rsort($bilangan);
echo "Bilangan Terbesar ke Terkecil: " . implode(', ', $bilangan) . "<br>";


$jumlah = count($bilangan);
$total = array_sum($bilangan);
$rata_rata = $total / $jumlah;
echo "Nilai Setelah Perbaikan: " . $rata_rata;
?>
