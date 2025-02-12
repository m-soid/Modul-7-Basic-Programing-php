<?php

echo "<hr>";
echo "<center><h3>Percabangan</h3></center>";
echo "<hr>";

// variabel

$jabatan = 3;
$gaji = 7000000;
$jam = 0;

// command

if ($jabatan == 1) {
    $jabatan = "Manager";
} elseif ($jabatan == 2) {
    $jabatan = "Supervisor";
} elseif ($jabatan == 3) {
    $jabatan = "Staff";
}

if ($gaji <= 3000000) {
    $pajak = 5;
} elseif ($gaji <= 5000000) {
    $pajak = 10;
}elseif ($gaji > 5000000) {
    $pajak = 15;
}

if ($jam > 200) {
    $bonus = ($jam - 200) * 20000;
} else {
    $bonus = 0;
}

// variabel lanjutan

$persenan = $pajak/100;
$total_pajak = $gaji * $persenan;
$gaji_bersih = $gaji - $total_pajak + $bonus;

// format

function rupiah($angka){
    
    $hasil_rupiah = "Rp" . number_format($angka,2,',','.');
    return $hasil_rupiah;
}


// hasil

echo "Jabatan : $jabatan <br>";
echo "Gaji Pokok : " . rupiah($gaji) . "<br>";
echo "Pajak : " . rupiah($total_pajak) . "<br>" ;
echo "Bonus : " . rupiah($bonus) . "<br>";
echo "Gaji Bersih : " . rupiah($gaji_bersih) . "<br>";



