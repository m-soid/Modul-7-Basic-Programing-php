<?php

echo "<br><hr>";
echo "<center><h2>Tugas</h2></center>";
echo "<hr><br>";
echo "<center>";


$daftar = [
    ["nama" => "Dontol", "nilai" => 21],
    ["nama" => "Adit", "nilai" => 90],
    ["nama" => "Denis", "nilai" => 22],
    ["nama" => "Sopo", "nilai" => 53],
    ["nama" => "Jarwo", "nilai" => 77]
];

echo "<h1>Daftar Nilai Siswa</h1>";

echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr>
<th>Nama</th>
<th>Nilai</th>
<th>Status</th>
</tr>";

echo "<h3>";

foreach ($daftar as $s) {
    echo"<tr>";
    echo"<td>" . $s['nama'] . "</td>";
    echo"<td>" . $s['nilai'] . "</td>";
    
    if ($s['nilai'] >= 70) {
        $status = "<span style='color:green;'>Lulus</span>";
    } elseif ($s['nilai'] >= 50) {
        $status = "<span style='color:orange;'>Remedial</span";
    } else {
        $status = "<span style='color:red;'>Tidak Lulus</span";
    } 
    echo "
    <td>$status</td>
    ";

}

echo "</h3>";
echo "</table>";
echo "</center>";


























