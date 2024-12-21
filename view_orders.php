<!DOCTYPE html>
<html>

<head>
  <title>Tampilan Pesanan</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <style>
    .container {
      width: 20%;
    }

    ul li {
      list-style-type: none;
    }
  </style>
</head>

<body>
  <div class="container">
    <h1>Tampilan Pesanan</h1>

    <h2>Data Pesanan:</h2>

    <?php
    $file = 'orders.txt';
    $orders = file($file);

    if (empty($orders)) {
      echo '<p>Tidak ada pesanan.</p>';
    } else {
      echo '<ul>';
      foreach ($orders as $order) {
        echo '<li>' . $order . '</li>';
      }
      echo '</ul>';
    }
    ?>

    <a href="index.html">Kembali ke Halaman Utama</a>
  </div>
</body>

</html>