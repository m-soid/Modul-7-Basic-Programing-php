<!doctype html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  </head>
  <body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <?php
    $bilangan1 = "";
    $bilangan2 = "";
    $operasi = "";
    $hasil = "";

    if (isset($_POST["hitung"])) {
        $bilangan1 = $_POST["bil1"];
        $bilangan2 = $_POST["bil2"];
        $operasi = $_POST["operasi"];

        switch ($operasi) {
            case 'tambah':
                $hasil = $bilangan1 + $bilangan2;
                break;
            case 'kurang':
                $hasil = $bilangan1 - $bilangan2;
                break;
            case 'kali':
                $hasil = $bilangan1 * $bilangan2;
                break;
            case 'bagi':
                $hasil = $bilangan1 / $bilangan2;
                break;
        }
    }
    ?>

    <div class="bg-white p-8 rounded-lg shaadow-lg w-96">

        <h2 class="text-2xl font-semibold text-center mb-5">
            Kalkulator
        </h2>

        <form action="" method="POST">
        <input type="number" name="bil1"
        class="w-full p-3 mb-4 border border-gray-300 rounded-md"
        autocomplete=off
        placeholder="Masukan Bilangan Pertama" 
        value="<?PHP echo $bilangan1?>">

        <input type="number" name="bil2" 
        class="w-full p-3 mb-4 border border-gray-300 rounded-md"
        autocomplete=off
        placeholder="Masukan Bilangan Kedua"
        value="<?PHP echo $bilangan2?>">

        <select name="operasi" id=""
        class="w-full p-3 mb-4 border border-gray-300 rounded-md">
            <option value="tambah"> + </option>
            <option value="kurang"> - </option>
            <option value="kali"> x </option>
            <option value="bagi"> / </option>
        </select>

        <input type="submit" name="hitung"
        class="w-full p-3 mb-4 bg-violet-700 hover:bg-violet-800 text-white rounded-md text-center"
        value="Hitung   ">

        <input type="data"
        class="w-full p-3 mb-4 border border-gray-300 rounded-md"
        autocomplete=off
        placeholder="Hasil Bilangan"
        readonly
        value="<?PHP echo $hasil?>">
        </form>


    </div>

  </body>
</html>























