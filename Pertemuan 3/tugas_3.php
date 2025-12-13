<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 3</title>
</head>
<body>
  <?php
    $students = [
      ["Nama" => "Aang Solihin", "NIM" => 240150132001, "Umur" => 20],
      ["Nama" => "Mamat Hidayat", "NIM" => 240150132002, "Umur" => 21],
      ["Nama" => "Ujang Supardi", "NIM" => 240150132003, "Umur" => 19],
      ["Nama" => "Deden Ferdiansyah", "NIM" => 240150132004, "Umur" => 22]
    ]; 

    echo "Biodata Mahasiswa:<br>";

    for ($i = 0; $i < count($students); $i++) {
      foreach($students[$i] as $key => $value ) {
        echo "- {$key} = {$value}" . "<br>";
      };

      echo "<br>";
    };
  ?>
</body>
</html>