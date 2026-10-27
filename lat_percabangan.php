<?php
// Deklarasi variabel
$suhu = 32;
$kelembaban = 60;

// Logika percabangan
if ($suhu >= 35 || $kelembaban >= 80) {
    echo "Cuaca sangat ekstrim <br>";
} elseif ($suhu >= 30) {
    echo "Cuaca cukup panas <br>";
} else {
    echo "Cuaca dalam kondisi normal <br>";
}

// Pesan akhir
echo "Pemeriksaan cuaca selesai";
?>