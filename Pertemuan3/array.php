<?php

echo "<br><hr>";
echo "<center><h3>Array</h3></center>";
echo "<hr><br>";

// definisi array []
$produk = ["Laptop", "Mouse", "Keyboard"];

echo $produk[0] . "<br>";
echo $produk[1] . "<br>";
echo $produk[2] . "<br>";

echo "<br><hr>";
echo "<center><h3>Array Assosiatif</h3></center>";
echo "<hr><br>";

// "kunci" => "nilai"
$buah = [
    "nama" => "Apel",
    "warna" => "Hijau",
    "rasa" => "Manis",
];

echo "Nama Buah : " . $buah['nama'] . "<br>";
echo "Warna Buah : " . $buah['warna'] . "<br>";
echo "Rasa Buah : " . $buah['rasa'] . "<br>";

echo "<br><hr>";
echo "<center><h3>Array Assosiatif List</h3></center>";
echo "<hr><br>";

$produk2 = [
    ["nama" => "Laptop", "harga" => 7000000, "stok" => 10 ],
    ["nama" => "Mouse", "harga" => 100000, "stok" => 5 ],
    ["nama" => "Monitor", "harga" => 1500000, "stok" => 4 ],
];

foreach ($produk2 as $p) {
    echo 
    "Produk : " . $p['nama'] 
    . "<br>" .
    "Harga : Rp. " . number_format($p['harga'], 2,",",".") 
    . "<br>" .
    "Stock : " .  $p['stok'] 
    . "<br><br>";
}

// number_format($p['harga'], 0, ",", ".")








echo "<br><hr><br>";

















