<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 1</title>
</head>
<body>
  <?php 
    $items = ["Tas", "Handphone", "Earphone", "Changer", "Pensil", "Apel"];

    echo "Semua Barang :<br>";

    foreach($items as $item) {
      echo "- {$item} <br>";
    }
  ?>
</body>
</html>