<?php include 'header.php'; ?>

<h2>Data Mahasiswa</h2>
<?php
$mahasiswa = [
    "10001" => "Andi",
    "10002" => "Budi",
    "10003" => "Citra",
    "10004" => "Dewi",
];

foreach ($mahasiswa as $nim => $nama) {
    echo "NIM: $nim, Nama: $nama<br>";
}
?>

</body>
</html>