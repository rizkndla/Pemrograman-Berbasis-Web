<?php 
$nama = $_POST['nama'];
$umur = $_POST['umur'];

echo "Halo, $nama<br>";

if ($umur <= 0) {
    echo "<h1>Anda belum lahir!</h1>";
} elseif ($umur < 18) {
    echo "<h1>Anda Masih Muda!</h1>";
} elseif ($umur <= 30) {
    echo "<h1>Anda Remaja!</h1>";
} elseif ($umur <= 50) {
    echo "<h1>Anda Dewasa!</h1>";
} elseif ($umur <= 65) {
    echo "<h1>Anda Tua!</h1>";
} else {
    echo "<h1>Anda Lansia!</h1>";
}
?>