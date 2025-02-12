<?php

$total_belanja = 5000;
$diskon = 500;
$hasil = $total_belanja - $diskon;

// jika belanja lebih dari 1000, maka selamat anda mendapat diskon 500

// selainnya anda tidak dapat diskon

echo "total belanja anda $total_belanja <br>";

if($total_belanja >= 1000){
    echo "selamat anda mendapat diskon Rp. 500 <br>";
    echo "total belanja anda menjadi " . $hasil ;
} else {
    echo "anda tidak mendapat diskon <br>";
    echo "total belanja anda menjadi " . $total_belanja ;
}

//===========================================

echo "<br>";
echo "<br>";

$hari = "senin";
if ($hari == "senin") {
    echo "Mengenakan Seragam Putih Abu";
}elseif ($hari == "selasa") {
    echo "Mengenakan Seragam Pramuka";
}elseif ($hari == "rabu") {
    echo "Mengenakan Seragam Produktif";
}elseif ($hari == "kamis") {
    echo "Mengenakan Seragam Batik";
}elseif ($hari == "jumat") {
    echo "Mengenakan Seragam Gamis";
}else{
    echo "Libur";
}

