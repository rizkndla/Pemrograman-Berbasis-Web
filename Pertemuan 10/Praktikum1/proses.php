<?php
$nilai = $_POST['nilai'];

if ($nilai >= 75) {
    echo "Nilai A";
} elseif ($nilai >= 70) {
    echo "Nilai B";
} elseif ($nilai >= 60) {
    echo "Nilai C";
} elseif ($nilai >= 50) {
    echo "Nilai D";
} else {
    echo "Nilai E";
    echo "<p style='color: red;'>Maaf, Anda Tidak Lulus.</p>";
}
?>
