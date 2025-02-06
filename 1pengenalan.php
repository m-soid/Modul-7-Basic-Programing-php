<?php

// cara akses : http://localhost/Latihan-Bima/1pengenalan.php

// mencetak data ke layar
echo "Hello World <br>";
echo "Saya sedang belajar fundamental php";

// variabel
$nama_lengkap = "Rais Bima Prayata";
$alamat = "Jl Poras 7";
$usia = 15;
$tanggal_lahir = "02 Juli 2009";
$tempat_lahir = "bogor";

// mencetak variabel
echo "<br><br>------ Data Diri ------ <br>";
echo "Nama lengkap : $nama_lengkap<br>";
echo "Alamat : $alamat<br>";
echo "Usia : $usia<br>";
echo "Tanggal Lahir : $tanggal_lahir<br>";
echo "Tempat Lahir : $tempat_lahir<br>";

// cara 2

echo 
"<br> Hallo nama Saya : " . $nama_lengkap . 
"<br> Alamat : " . $alamat . 
"<br> Usia : " .$usia . 
"<br> Tanggal Lahir : " .$tanggal_lahir . 
"<br> Tempat Lahir : " .$tempat_lahir . 
"<br>" ;