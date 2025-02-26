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
    // panjul anjing
    }
  ?>

    <div class="sejajar grid grid-cols-2">

        <div class="bg-white p-8 rounded-lg shaadow-lg w-96">

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
            <label for="">Nilai UAS</label>
            <input type="nummber" name="uas"
            class="w-full p-3 mb-4 border border-gray-300 rounded-md"
            autocomplete=off>

            <form action="" method="POST">
            <label for="">Nilai UTS</label>
            <input type="number" name="uts"
            class="w-full p-3 mb-4 border border-gray-300 rounded-md"
            autocomplete=off>

            <input type="submit" name="nilai"
            class="w-full p-3 mb-4 bg-violet-700 hover:bg-violet-800 text-white rounded-md text-center"
            value="Hitung Nilai">
            </form>


        </div>

        <div class="bg-white p-8 rounded-lg shaadow-lg w-150 h-42">

            <h2 class="text-2xl font-semibold text-center mb-5">
                Hasil Penilaian
            </h2>

            <table class="table-auto border  w-full text-center rounded-lg">
                <thead class="bg-gray-700 text-white gap-5 ">
                    <tr>
                    <th class=" text-center">Nama</th>
                    <th class=" text-center">Nilai Tugas</th>
                    <th class=" text-center">Nilai UTS</th>
                    <th class=" text-center">Nilai UAS</th>
                    <th class=" text-center">Nilai Akhir</th>
                    <th class=" text-center">Kategori</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="border border-gray-700"><?php echo $nama?></td>
                    <td class="border border-gray-700"><?php echo $tugas?></td>
                    <td class="border border-gray-700"><?php echo $uts?></td>
                    <td class="border border-gray-700"><?php echo $uas?></td>
                    <td class="border border-gray-700"><?php echo $hasil?></td>
                    <td class="border border-gray-700"><?php echo $predik?></td>
                    </tr>
                </tbody>
            </table>

        </div>

    </div>

  </body>
</html>














