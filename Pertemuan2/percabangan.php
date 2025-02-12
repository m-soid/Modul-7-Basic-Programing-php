<?php

echo "<hr>";
echo "<center><h3>Percabangan</h3></center>";
echo "<hr>";


// readline() digunakan untuk membaca input pengguna
// $umur = readline("Masukan Usia Anda : ");

$umur = -1;

if ($umur == 0) {
    echo "Usia Bayi";
} else if ($umur >= 1 && $umur <= 12) {
    echo "Usia Anak Anak";
} else if ($umur >= 13 && $umur <= 17) {
    echo "Usia Remaja";
} else if ($umur >= 18 && $umur <= 50) {
    echo "Usia Dewasa";
} else if ($umur > 50) {
    echo "Usia Lansia";
} else {
    echo "<h1><center>Jawa</center></h1>";
}








