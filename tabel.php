<?php
// Deklarasi variabel array
$kota = array("Surabaya", "Semarang", "Bandung", "Medan");
$provinsi = array("Jawa Timur", "Jawa Tengah", "Jawa Barat", "Sumatera Utara");
$populasi = array(3000000, 1500000, 2500000, 2100000);

// Membuat tabel HTML
echo "<html><body>";
echo "<table border='1'>";
echo "<tr><th>Nama Kota</th><th>Provinsi</th><th>Populasi</th></tr>";

// Menampilkan data tabel secara dinamis
for ($i = 0; $i < count($kota); $i++) {
    echo "<tr>";
    echo "<td>" . $kota[$i] . "</td>";
    echo "<td>" . $provinsi[$i] . "</td>";
    echo "<td>" . $populasi[$i] . "</td>";
    echo "</tr>";
}

echo "</table>";
echo "</body></html>";
?>