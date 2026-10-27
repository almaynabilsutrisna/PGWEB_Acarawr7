<?php
// Perulangan while
$a = 1;
while ($a <= 4) {
    echo $a . "<br>";
    $a++;
}

// Perulangan for
for ($b = 1; $b < 5; $b++) {
    echo $b . "<br>";
}

// Deklarasi array
$hewan = array("Kucing", "Anjing", "Burung", "Ikan");

// Perulangan foreach untuk array
foreach ($hewan as $item) {
    echo "$item <br>";
}

// Menampilkan isi array dengan for
for ($c = 0; $c < count($hewan); $c++) {
    echo $hewan[$c] . "<br>";
}
?>