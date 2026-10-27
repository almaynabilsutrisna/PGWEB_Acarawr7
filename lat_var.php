<?php
$sapaan = "Selamat belajar PHP!";
echo "Halo, " . $sapaan . "<br>";

$kendaraan = array("Motor", "Mobil", "Sepeda", "Bus");
echo $kendaraan[1] . "<br>"; // Akan mencetak 'Mobil'

$nilai1 = 15;
$nilai2 = 5;
$nilai1 = $nilai1 + $nilai2; // Hasil: 20
echo $nilai1 . "<br>";

$nilai1 += $nilai2; // Hasil: 25
echo $nilai1 . "<br>";

$nilai1 .= $nilai2; // Hasil: "255"
echo $nilai1;
?>