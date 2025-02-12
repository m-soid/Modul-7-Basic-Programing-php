<?php
echo "Studi Kasus 2";
echo "<hr>";

// variabel
$member = "Silver";
$belanja = 1200000;

// diskon

if ($belanja < 1000000) {
    $diskon = 0;
} elseif ($belanja >= 1000000 && $belanja < 1500000) {
    $diskon = 3;
} elseif ($belanja >= 1500000) {
    $diskon = 5;
} 

elseif ($member = "Silver" && $belanja < 1000000 ) {
    $diskon = 5;
} elseif ($member = "Silver" && $belanja >= 1000000 && $belanja < 1500000) {
    $diskon = 10;
} elseif ($member = "Silver" && $belanja >= 1500000) {
    $diskon = 15;
}

elseif ($member = "Gold" && $belanja < 1000000 ) {
    $diskon = 10;
} elseif ($member = "Gold" && $belanja >= 1000000 && $belanja < 1500000) {
    $diskon = 15;
} elseif ($member = "Gold" && $belanja >= 1500000) {
    $diskon = 20;
}

// membership

// if ($member = "Non-Member") {
//     $diskon = $diskon + 0;
// } 

// elseif ($member = "Silver" && $belanja < 1000000 ) {
//     $diskon = $diskon + 5;
// } elseif ($member = "Silver" && $belanja >= 1000000 && $belanja < 1500000) {
//     $diskon = $diskon + 7;
// } elseif ($member = "Silver" && $belanja >= 1500000) {
//     $diskon = $diskon + 10;
// }

// elseif ($member = "Gold" && $belanja < 1000000 ) {
//     $diskon = $diskon + 10;
// } elseif ($member = "Gold" && $belanja >= 1000000 && $belanja < 1500000) {
//     $diskon = $diskon + 12;
// } elseif ($member = "Gold" && $belanja >= 1500000) {
//     $diskon = $diskon + 15;
// }

echo "diskon = " . $diskon . "%<br>" ;

