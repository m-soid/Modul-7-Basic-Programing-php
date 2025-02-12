<?php

echo "<hr>";
echo "<center><h3>Percabangan</h3></center>";
echo "<hr>";

// variabel

$jabatan = 3;
$jam = 0;

// command


if ($jabatan == 1) {
    $jabatan = "Manager";
    $gaji = 7000000;
} elseif ($jabatan == 2) {
    $jabatan = "Supervisor";
    $gaji = 5000000;
} elseif ($jabatan == 3) {
    $jabatan = "Staff";
    $gaji = 3000000;
}

if ($gaji <= 3000000) {
    $pajak = 5;
} elseif ($gaji <= 5000000) {
    $pajak = 10;
}elseif ($gaji > 5000000) {
    $pajak = 15;
}

// variabel bonus
$jam_bonus = $jam - 200;


if ($jam_bonus >= 1) {
    $bonus = $jam_bonus * 20000;
    $ucapan_bonus = "Selamat Anda mendapatkan bonus karna 
    <b>jam kerja anda lebih $jam_bonus jam</b> dari 200 jam kerja<br>";
} else {
    $bonus = 0;
    $ucapan_bonus = "Maaf Anda belum mendapatkan bonus karna jam kerja anda di bawah 200 jam<br>";
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
echo "Pajak : " . $pajak . "%<br>";
echo "Total Pajak : " . rupiah($total_pajak) . "<br>" ;

// echo "Total Pajak : " . $jam_bonus . "<br>" ;
// if ($bonus > 1) {
//     echo "Selamat Anda mendapatkan bonus karna <b>jam kerja anda lebih $jam_bonus jam</b> dari 200 jam kerja<br>";
// } else {
//     echo "Maaf Anda belum mendapatkan bonus karna jam kerja anda di bawah 200 jam<br>";
// }
echo $ucapan_bonus;

echo "Bonus Anda : " . rupiah($bonus) . "<br>";
echo "Gaji Bersih : " . rupiah($gaji_bersih) . "<br>";



