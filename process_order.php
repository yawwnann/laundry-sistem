<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $selectedPackage = $_POST['package'];

  // Simpan data order ke file .txt
  $file = fopen('orders.txt', 'a');
  fwrite($file, "Nama: $name\n");
  fwrite($file, "Paket: $selectedPackage\n");
  fwrite($file, "========================\n");
  fclose($file);

  http_response_code(200);
}
?>
