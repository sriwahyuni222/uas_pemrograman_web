<?php
require 'config/koneksi.php';

$kode_dokter = $_POST["kode_dokter"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$gaji = $_POST["gaji"];



$query = "INSERT INTO `dokter` (`kode_dokter`, `nama`, `jk`, `alamat`, `gaji`,`aksi`) VALUES ('$kode_dokter', '$nama', '$gender', '$alamat','$gaji', '0')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil insert data";
	header("location: dokter.php", true, 301);
  }
else {
	echo "Gagal insert data";
	header("location: dokter.php", true, 301);
}  

?>