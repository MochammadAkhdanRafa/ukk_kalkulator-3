<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil perhitungan</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    
    <form>
    <h1>Hasil Kalkulasi</h1>
    <?php
        $angka1 = $_GET['angka1'];
        $angka2 = $_GET['angka2'];
        $operator = $_GET['operator'];

        if ($angka1 === null || $angka2 === null || $angka1 === '' || $angka2 === '') {
            echo "<p style='color: red;'>Error: inputan harus diisi!!</p>";
            echo '<a href="index.php">Kembali</a>';
            exit;
        }

        if ($operator == "+") {
            $hasil = $angka1 + $angka2;
        } else if ($operator == "-") {
            $hasil = $angka1 - $angka2;
        } else if ($operator == ":") {
            if ($angka2 == 0) {
                $hasil = "Error: Nilai tidak bisa dibagi dengan nol!";
            } else
            $hasil = $angka1 / $angka2; 
        } else if ($operator == "x") {
            $hasil = $angka1 * $angka2;
        } else if ($operator == "%") {
            $hasil = $angka1 % $angka2;
        } else if ($operator == "^") {
            $hasil = pow($angka1, $angka2);
        }
        echo $angka1 . $operator . $angka2 . '=' . $hasil;
        ?>
        <a href="index.php">Kembali</a>
        <a type="button" onclick="return window.print();">Print Hasil</a>
        </form>
</body>
</html>