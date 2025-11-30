<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bilangan Genap</title>
</head>
<body>
  <?php 
    echo "Nama = Aang Solihin";
    echo "<br><br>";

    for ($index = 0; $index <= 20; $index++) {
      if ($index % 2 === 0) {
        echo $index;
      }
      
      echo "<br>";
    } 
  ?>
</body>
</html>