<?php
   echo "Halo, selamat datang di dunia PHP!";
?>

<br><br>

<?php
   // Variabel dasar
   $nama = "Rizka";
   $umur = 20;

   echo "Nama: " . $nama . "<br>";
   echo "Umur: " . $umur . " tahun<br>";
?>

<br>

<?php
   // Konstanta
   define("SITE_NAME", "unsika.ac.id");
   define("VERSION", "1.0");

   echo "Selamat datang di " . SITE_NAME . "<br>";
   echo "Versi Sistem: " . VERSION . "<br>";
?>

<br>

<?php
   $nama = "Rizka";
   echo "Nama saya adalah " . $nama . "<br>";
?>

<?php
   $umur = 20;
   echo "Umur saya " . $umur . " tahun<br>";
?>

<?php
   $berat = 55.5;
   echo "Berat badan saya " . $berat . " kg<br>";
?>

<br>

<?php
   // Boolean
   $isLogin = true;
   echo "Status login: " . ($isLogin ? "Sudah login" : "Belum login") . "<br>";
?>

<br>

<?php
   // Array
   $buah = ["apel", "jeruk", "mangga"];
   echo "Buah favorit saya: " . $buah[1] . "<br>";
?>

<br>

<?php
   // OOP Sederhana
   class Mahasiswa {
       public $nama;

       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }

   $mhs = new Mahasiswa();
   $mhs->nama = "Jeni";
   echo $mhs->sapa() . "<br>";
?>

<br>

<?php
   // Null dan var_dump
   $data = null;
   echo "Isi variabel data: ";
   var_dump($data);
?>

<br>
<a href="../../Pertemuan 10/Tugas1/latihan_nilai.php">Nilai Mahasiswa</a>
<br>
<a href="../../Pertemuan 10/Tugas2/index.php">Biaya UKT Mahasiswa</a>
