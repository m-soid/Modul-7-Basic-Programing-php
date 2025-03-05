<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen gap-5">

<?php

    $nama = "";
    $tugas = "";
    $uts = "";
    $uas = "";
    $nilai = "";
    $hasil = "";
    $predik = "";



// isset() memeriksa apakah variabel ada dan tidak bernilai (null).
//         mengembalikan (true) jika variabel ada dam tidak (null).

// !isset() memeriksa apakah variabel tidak ada atau bernilai (null).
//         mengembalikan (true) jika variabel tidak ada atau (null).

// session : digunakan untuk menyimpan data sementara yang dapat diakses
// oleh pengguna selama periode tertentu



//inisialisasi sesi untuk menyimpan data siswa
session_start();

// memeriksa apakan $_SESSION['siswaList'] sudah ada dalam sesi atau belum
if (!isset($_SESSION['siswaList'])) { //true
    $_SESSION['siswaList'] = []; //jika kondisi true maka akan dibuatkan array kosong
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //cek apakah inputan form ada dan tidak kosong
    if (isset($_POST['nama']) && isset($_POST['tugas']) 
        && isset($_POST['uts']) && isset($_POST['uas'])) {

        //ambil inputan dari form
        $nama = $_POST["nama"];
        $tugas = $_POST["tugas"];
        $uts = $_POST["uts"];
        $uas = $_POST["uas"];
        $nilai = $_POST["nilai"];

        // menghitung nilai akhir
        $hasil = ((30/100)*$tugas)+((30/100)*$uts)+((40/100)*$uas);
            
        // menghitung predikat
        switch ($nilai) {
            case $hasil >= 85:
                $predik = "A";
                break;
            
            case $hasil >= 70:
                $predik = "B";
                break;
            
            case $hasil >= 60:
                $predik = "C";
                break;
            
            case $hasil >= 50:
                $predik = "D";
                break;
            
            default:
                $predik = "E";
                break;
        }
    }

    //simpan data ke dalam sesi
    $_SESSION['siswaList'][] = [
        'nama' => $nama,
        'tugas' => $tugas,
        'uts' => $uts,
        'uas' => $uas,
        'hasil' => $hasil,
        'predik' => $predik
    ];

}

//cek jika tombol hapus data di klik, maka sesi akan dihancurkan
if (isset($_POST['hapus'])) {
    session_destroy(); //hapus seluruh data sesi

    session_start();
    $_SESSION['siswaList'] = [];
}




  if (isset($_POST["nilai"])) {
    $nama = $_POST["nama"];
    $tugas = $_POST["tugas"];
    $uts = $_POST["uts"];
    $uas = $_POST["uas"];
    $nilai = $_POST["nilai"];

    $hasil = ((30/100)*$tugas)+((30/100)*$uts)+((40/100)*$uas);

    switch ($nilai) {
        case $hasil >= 85:
            $predik = "A";
            break;
        
        case $hasil >= 70:
            $predik = "B";
            break;
        
        case $hasil >= 60:
            $predik = "C";
            break;
        
        case $hasil >= 50:
            $predik = "D";
            break;
        
        default:
            $predik = "E";
            break;
    }
}
  ?>

<div class="sejajar grid grid-cols-2">

        <div class="bg-white p-8 rounded-lg shaadow-lg w-96 h-130">

            <h2 class="text-2xl font-semibold text-center mb-5">
                Form Input Nilai Siswa/i
            </h2>

            <form action="" method="POST">
            <label for="">Nama</label>
            <input type="text" name="nama"
            class="w-full p-3 mb-4 border border-gray-300 rounded-md"
            autocomplete=off>

            <form action="" method="POST">
            <label for="">Nilai Tugas</label>
            <input type="number" name="tugas"
            class="w-full p-3 mb-4 border border-gray-300 rounded-md"
            autocomplete=off>

            <form action="" method="POST">
            <label for="">Nilai UTS</label>
            <input type="nummber" name="uts"
            class="w-full p-3 mb-4 border border-gray-300 rounded-md"
            autocomplete=off>

            <form action="" method="POST">
            <label for="">Nilai UAS</label>
            <input type="number" name="uas"
            class="w-full p-3 mb-4 border border-gray-300 rounded-md"
            autocomplete=off>

            <input type="submit" name="nilai"
            class="w-full p-3 mb-4 bg-violet-700 hover:bg-violet-800 text-white rounded-md text-center"
            value="Hitung Nilai">
            </form>


        </div>

        <div>
            <div class="bg-white p-8 rounded-lg shaadow-lg w-160">

                <h2 class="text-2xl font-semibold text-center mb-5">
                    Hasil Penilaian
                </h2>

                <table class="table-auto border  w-full text-center rounded-lg bg-white">
                    <thead class="bg-gray-700 text-white">
                        <tr>
                        <th class=" text-center p-3">Nama</th>
                        <th class=" text-center p-3">Nilai Tugas</th>
                        <th class=" text-center p-3">Nilai UTS</th>
                        <th class=" text-center p-3">Nilai UAS</th>
                        <th class=" text-center p-3">Nilai Akhir</th>
                        <th class=" text-center p-3">Kategori</th>
                        </tr>
                    </thead>

                    <tbody>
                        <!-- memanggil isi array -->
                        <?php foreach ($_SESSION['siswaList'] as $list): ?>
                        <tr>
                        <td class="border border-gray-700 p-3"><?php echo ($list['nama'])?></td>
                        <td class="border border-gray-700 p-3"><?php echo ($list['tugas'])?></td>
                        <td class="border border-gray-700 p-3"><?php echo ($list['uts'])?></td>
                        <td class="border border-gray-700 p-3"><?php echo ($list['uas'])?></td>
                        <td class="border border-gray-700 p-3"><?php echo ($list['hasil'])?></td>
                        <td class="border border-gray-700 p-3"><?php echo ($list['predik'])?></td>
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














