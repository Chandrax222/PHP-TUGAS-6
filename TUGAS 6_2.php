<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 6-2</title>
</head>
<body>

        <?php
                $jambu = 15000;
                $dus = 6;
                $isi = 5;
                $jual = 2000;

                echo ("===========================================================");
                echo "<br>";
                echo ("Harga Jambu = Rp. 15.000 / kg");
                echo "<br>";
                echo ("Harga kardus = Rp. 2000 / pcs");
                echo "<br>";
                $ladusin = $dus*$isi; //6x5 = 30
                $jambu2 = $ladusin*$jambu; //15x30 = 450000
                $dus2 = $dus*$jual; //6x2 = 12.000
                $hasil = $jambu2+$dus2;
                echo ("Total Penjualan (Dus dan Jambu) = Rp $hasil");
                echo "<br>";
                echo ("===========================================================");
        ?>
    
</body>
</html>