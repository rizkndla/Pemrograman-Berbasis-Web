<?php
$roda = 4;
$jenis = "";

switch ($roda) {
    case 2:
        $jenis = "Motor";
        break;
    case 3:
        $jenis = "Bajaj";
        break;
    case 4:
        $jenis = "Mobil";
        break;
    case 6:
        $jenis = "Truk";
        break;
    default:
        $jenis = "Jenis kendaraan tidak diketahui";
}

echo "<h2>Jenis Kendaraan</h2>";
echo "Jumlah roda: $roda<br>";
echo "Jenis kendaraan: $jenis";
?>