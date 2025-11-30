<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Luas Persegi Panjang</title>
</head>
<body>
  <?php
    $lebar = 15;
    $panjang = 25;
    
    function luas($lebar, $panjang) {
      return $lebar * $panjang;
    }

    $hasil = luas($lebar, $panjang);

    echo "Persegi panjang dengan lebar $lebar dan panjang $panjang luasnya adalah $hasil";
   ?>
</body>
</html>