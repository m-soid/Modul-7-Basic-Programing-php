<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen gap-5">

<?php

$jabatan = "";
$jam = "";
$jabatan = "";
$jam = "";
$gaji = "";
$pajak = "";
$total_pajak = "";
$gaji_bersih = "";
$bonus = "";

session_start();

if (!isset($_SESSION['gajiKaryawan'])) { //true
    $_SESSION['gajiKaryawan'] = []; //jika kondisi true maka akan dibuatkan array kosong
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //cek apakah inputan form ada dan tidak kosong
    if (isset($_POST['operasi']) && isset($_POST['jam'])) {

        //ambil inputan dari form
        $jabatan = $_POST["operasi"];
        $jam = $_POST["jam"];

        //variabel bonus
        $jam_bonus = $jam - 200;
            
        switch ($jabatan) {
            case 1:
                $jabatan = "Manager";
                $gaji = 7000000;
                $pajak = 15;
                break;
            case 2:
                $jabatan = "Supervisor";
                $gaji = 5000000;
                $pajak = 10;
                break;
            case 3:
                $jabatan = "Staff";
                $gaji = 3000000;
                $pajak = 5;
                break;
        }

        if ($jam_bonus >= 1) {
            $bonus = $jam_bonus * 20000;
        } else {
            $bonus = 0;
        }

        // variabel lamjutan
        $persenan = $pajak/100;
        $total_pajak = $gaji * $persenan;
        $gaji_bersih = $gaji - $total_pajak + $bonus;
    }

    //simpan data ke dalam sesi
    $_SESSION['gajiKaryawan'][] = [
        'jabatan' => $jabatan,
        'jam' => $jam,
        'gaji' => $gaji,
        'pajak' => $pajak,
        'total_pajak' => $total_pajak,
        'gaji_bersih' => $gaji_bersih,
        'bonus' => $bonus
    ];

}

//cek jika tombol hapus data di klik, maka sesi akan dihancurkan
if (isset($_POST['hapus'])) {
    session_destroy(); //hapus seluruh data sesi

    session_start();
    $_SESSION['gajiKaryawan'] = [];
}

if (isset($_POST["total"])) {
    $jam = $_POST["jam"];
    $jabatan = $_POST["operasi"];

    //variabel bonus
    $jam_bonus = $jam - 200;

    if ($jam_bonus >= 1) {
        $bonus = $jam_bonus * 20000;
    } else {
        $bonus = 0;
    }

    switch ($jabatan) {
        case 1:
            $gaji = 7000000;
            $pajak = 15;
            break;
        case 2:
            $gaji = 5000000;
            $pajak = 10;
            break;
        case 3:
            $gaji = 3000000;
            $pajak = 5;
            break;
    }

    // variabel lamjutan
    $persenan = $pajak/100;
    $total_pajak = $gaji * $persenan;
    $gaji_bersih = $gaji - $total_pajak + $bonus;
}

function rupiah($angka){
    
    $hasil_rupiah = "Rp" . number_format($angka,2,',','.');
    return $hasil_rupiah;
}

?>

<div class="sejajar grid grid-cols-1">

        <div class="bg-white p-8 rounded-lg shaadow-lg w-96 h-130 mt-10 mb-10">

            <h2 class="text-2xl font-semibold text-center mb-5">
                Form Gaji Karyawan
            </h2>

            <form action="" method="POST">
            <label for="">Jabatan</label>
            <select name="operasi" id=""
            class="w-full p-3 mb-4 border border-gray-300 rounded-md">
            <option value="1"> Manager </option>
            <option value="2"> Supervisor </option>
            <option value="3"> Staff </option>
            </select>

            <form action="" method="POST">
            <label for="">Jam Kerja</label>
            <input type="number" name="jam"
            class="w-full p-3 mb-4 border border-gray-300 rounded-md"
            autocomplete=off>

            <input type="submit" name="Total"
            class="w-full p-3 mb-4 bg-violet-700 hover:bg-violet-800 text-white rounded-md text-center"
            value="Total Gaji">
            </form>


        </div>

        <div>
            <div class="bg-white p-8 rounded-lg shaadow-lg w-200">

                <h2 class="text-2xl font-semibold text-center mb-5">
                    Gaji Karyawan
                </h2>

                <table class="table-auto border  w-full text-center rounded-lg bg-white">
                    <thead class="bg-gray-700 text-white">
                        <tr>
                        <th class=" text-center p-3">Jabatan</th>
                        <th class=" text-center p-3">Gaji</th>
                        <th class=" text-center p-3">Pajak</th>
                        <th class=" text-center p-3">Total Pajak</th>
                        <th class=" text-center p-3">Jam Kerja</th>
                        <th class=" text-center p-3">Bonus</th>
                        <th class=" text-center p-3">Gaji Bersih</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- memanggil isi array -->
                        <?php foreach ($_SESSION['gajiKaryawan'] as $list): ?>
                        <tr>
                        <td class="border border-gray-700 p-3"><?php echo ($list['jabatan'])?></td>
                        <td class="border border-gray-700 p-3"><?php echo rupiah(($list['gaji']))?></td>
                        <td class="border border-gray-700 p-3"><?php echo ($list['pajak']) . "%"?></td>
                        <td class="border border-gray-700 p-3"><?php echo rupiah(($list['total_pajak']))?></td>
                        <td class="border border-gray-700 p-3"><?php echo ($list['jam'])?></td>
                        <td class="border border-gray-700 p-3"><?php echo rupiah(($list['bonus']))?></td>
                        <td class="border border-gray-700 p-3"><?php echo rupiah(($list['gaji_bersih']))?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>

            </div>

            <div class="mt-10">
                <form method="POST">
                <input type="submit" name="hapus"
                class="w-full p-3 mb-4 bg-red-700 hover:bg-red-800 text-white rounded-md text-center"
                value="Hapus Semua Data">
                </form>
            </div>
        </div>

</div>

  </body>
</html>

