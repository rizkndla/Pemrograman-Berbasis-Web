<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Nilai Ujian Mahasiswa</title>
    <style>
        .border {
            border: 1px solid black;
            padding: 20px;
            display: inline-block;
        }
    </style>
</head>
<body>
<div class="border">
<?php 
$nama = $_POST['nama'];
$nilai = $_POST['nilai'];

if ($nilai < 0 || $nilai > 100) {
    echo "<p>Nilai tidak valid. Harus antara 0–100.</p>";
} else {
    // Menentukan predikat
    if ($nilai >= 85) {
        $predikat = "A";
    } elseif ($nilai >= 75) {
        $predikat = "B";
    } elseif ($nilai >= 65) {
        $predikat = "C";
    } elseif ($nilai >= 50) {
        $predikat = "D";
    } else {
        $predikat = "E";
    }

    // Menentukan status
    $status = ($nilai >= 75) ? "Lulus" : "Tidak Lulus";

    // Output
    echo "<p>Nama: $nama</p>";
    echo "<p>Nilai: $nilai</p>";
    echo "<p>Predikat: $predikat</p>";
    echo "<p>Status: $status</p>";
}
?>
</div>
</body>
</html>
