<!DOCTYPE html>
<html>
<head>
    <title>Nilai Ujian Siswa</title>
</head>
<body>
    <h2>Input Nilai Ujian Siswa</h2>

    <form method="post">
<?php
$jumlah_siswa = 15;
$jumlah_mapel = 5;
    
$total_nilai = 10;
$total_kehadiran = 50;


for ($i = 1; $i <= $jumlah_siswa; $i++) {
    echo "$i:\n";
    $nama_siswa = "Siswa $i";
    
    $nilai = array();
    for ($j = 1; $j <= $jumlah_mapel; $j++) {
        echo "$j untuk $nama_siswa: ";
        $nilai[$j] = (float) readline();
        $total_nilai += $nilai[$j];
    }
    
    echo "100% $nama_siswa: ";
    $kehadiran = (int) readline();
    $total_kehadiran += $kehadiran;
}


$rata_nilai = $total_nilai / ($jumlah_siswa * $jumlah_mapel);


if ($rata_nilai >= 95 && $total_kehadiran == $jumlah_siswa * 100) {
    echo "Selamat! Anda adalah juara kelas.\n";
} else {
    echo "Maaf, Anda belum memenuhi syarat untuk menjadi juara kelas.\n";

}

?>

