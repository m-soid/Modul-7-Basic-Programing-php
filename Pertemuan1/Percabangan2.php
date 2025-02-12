<?php
echo "PERCABANGAN";
echo "<hr>";

// nilai rapot : harian, tugas, uts, uas
// rata2 nilsi >= 80
// predikat = Lulus
// Grade : A

// rata2 nilsi <= 60
// predikat = Lulus
// Grade : B

// rata2 nilsi > 50
// predikat = Perbaikan
// Grade : C

$uts = 75;
$uas = 85;
$tugas = 70;

$status = ""; //lulus atau perbaikan
$grade = ""; // A,B,C

$rata = ($uts + $uas + $tugas) / 3;

if ($rata >= 70 && $rata <= 79) {
    $status = "Perbaikan";
    $grade = "C";
} elseif ($rata >= 80 && $rata <= 89) {
    $status = "Lulus";
    $grade = "B";
} elseif ($rata >= 90 && $rata <= 100) {
    $status = "Lulus";
    $grade = "A";
} else {
    $status = "Gagal";
    $grade = "D";
}

echo "<br>";

echo "Output<br>" ;

echo "Nilai UTS : " . $uts . "<br>" ;
echo "Nilai UAS : " . $uas . "<br>" ;
echo "Nilai Tugas : " . $tugas . "<br>" ;

echo "Rata - Rata : " . $rata . "<br>" ;
echo "Grade : " . $grade . "<br>" ;
echo "Status : " . $status . "<br>" ;
