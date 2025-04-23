<?php
define("PAJAK", 0.1);

$hargasatuan = array(
    "keyboard" => 150000,
    "mouse" => 50000
);

$namabarang = "keyboard";
$jumlahbeli = 2;
$hargabarang = $hargasatuan[$namabarang];
$totalharga = $hargabarang * $jumlahbeli;
$pajaktotal = $totalharga * PAJAK;
$totalbayar = $totalharga + $pajaktotal;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Harga</title>
    <style>
        .container {
            border-radius: 10px;
            border: 1px solid black;
            padding: 15px;
            width: 400px;
            margin: 30px auto;
            font-family: sans-serif;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>
            Perhitungan Total Pembelian
        </h2>
        <hr>
        <p>
            Nama Barang: <?php echo $namabarang; ?>
    </p>
        <p>
            Harga Satuan: Rp <?php echo number_format($hargabarang, 0, ',', '.'); ?>
        </p>
        <p>
            Jumlah Beli: <?php echo $jumlahbeli; ?>
        </p>
        <p>
            Total Harga (Sebelum Pajak): Rp <?php echo number_format($totalharga, 0, ',', '.'); ?>
        </p>
        <p>
            Pajak (10%): Rp <?php echo number_format($pajaktotal, 0, ',', '.'); ?>
        </p>
        <p>
            <strong>
                Total Bayar: Rp <?php echo number_format($totalbayar, 0, ',', '.'); ?>
            </strong>
        </p>
    </div>
</body>
</html>
