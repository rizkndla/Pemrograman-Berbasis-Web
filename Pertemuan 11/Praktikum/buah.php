<?php include 'header.php'; ?>

<h2>Buah</h2>
<?php
$buah = ["Apel", "Jeruk", "Mangga", "Pisang", "Anggur"];

for ($i = 0; $i < count($buah); $i++) {
    echo "- " . $buah[$i] . "<br>";
}
?>

</body>
</html>