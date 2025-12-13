<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tugas 4
  </title>
</head>
<body>
  <?php 
    $items = [
      ["Susu Frisian Flag", 14000, 5],
      ["Lays Classic", 9000, 3],
      ["Potabee Potato Chips", 7500, 6]
    ]; 
  ?>
  <table border="1">
    <thead>
      <tr>
        <td>Produk</td>
        <td>Harga Satuan</td>
        <td>Stok</td>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($items as $item) { 
        echo "
        <tr>
          <td>{$item[0]}</td>
          <td>{$item[1]}</td>
          <td>{$item[2]}</td>
        </tr>
        ";
      }
      ?>
    </tbody>
  </table>
</body>
</html>