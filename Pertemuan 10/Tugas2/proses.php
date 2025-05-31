<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BIAYA TAGIHAN</title>
    <style>
        .border {
            border: 1px solid black;
            padding: 20px;
            display: inline-block;
        }
    </style>
</head>
<body class="border">

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST['npm'];
    $nama = $_POST['nama'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $ukt = $_POST['ukt'];

    if ($ukt < 0 || $semester <= 0) {
        echo "<p>Input tidak valid. Pastikan semester dan UKT diisi dengan benar.</p>";
    } else {
        $diskon = 0;
        if ($ukt >= 5000000) {
            if ($semester > 8) {
                $diskon = 15;
            } else {
                $diskon = 10;
            }
        }

        $potongan = ($diskon / 100) * $ukt;
        $total_bayar = $ukt - $potongan;

        echo "<hr>";
        echo "NPM : $npm<br>";
        echo "NAMA : " . strtoupper($nama) . "<br>";
        echo "PRODI : " . strtoupper($prodi) . "<br>";
        echo "SEMESTER : $semester<br>";
        echo "BIAYA UKT : Rp. " . number_format($ukt, 0, ',', '.') . ",-<br>";
        echo "DISKON : $diskon%<br>";
        echo "YANG HARUS DIBAYAR : Rp. " . number_format($total_bayar, 0, ',', '.') . ",-<br>";
    }
}
?>

</body>
</html>
