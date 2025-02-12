<?php

echo "<hr>";
echo "<center><h3>Switchcase</h3></center>";
echo "<hr>";

$warna = "merah";

switch ($warna) {
    case "merah":
        echo "Berhenti!\n";
        break;
    case "kuning":
        echo "Siap-Siap!\n";
        break;
    case "hijau":
        echo "Jalan!\n";
        break;
    
    default:
        echo "warna tidak valid!\n";
        break;
}





