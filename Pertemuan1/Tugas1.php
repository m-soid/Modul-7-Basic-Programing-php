<?php
echo "Studi Kasus 1";
echo "<hr>";

// variabel

$gaji = 12000000;
$status = "tetap";

// command pajak

if ($gaji < 5000000 ) {
    $pajak = 5;
} elseif ($gaji >= 5000000 && $gaji < 10000000 ) {
    $pajak = 10;
} elseif ($gaji >= 10000000 && $gaji < 15000000 ) {
    $pajak = 15;
} elseif ($gaji >= 15000000 ) {
    $pajak = 20;
}

// status

if ($status == "tetap") {
    $pajak = $pajak + 5;
} else {
    $pajak = $pajak + 0;
}


// variabel lanjutan

$persenan = $pajak / 100; 
$potongan = $gaji * $persenan;

// pajak selesai

echo "Gaji Bulanan : Rp. " . $gaji . "<br>";
echo "Status Pegawai : " . $status . "<br>";
echo "Pajak : " . $pajak . "%<br>";
echo "Potongan Pajak : Rp. " . $gaji * $persenan . "<br>";
echo "Gaji Bersih : Rp. " . $gaji - $potongan . "<br>";


