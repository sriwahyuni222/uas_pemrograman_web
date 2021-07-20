<?php
require 'config/koneksi.php';

$nama_obat = $_POST["nama_obat"];
$kd_obat = $_POST["kd_obat"];


$query = "INSERT INTO `obat` (`nama_obat`,`kd_obat`) VALUES ('$nama_obat','$kd_obat') ";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil Simpan data";
	header("location: obat.php", true, 301);
  }
else {
	echo "Gagal Simpan data";
	header("location: obat.php", true, 301);
}  

?>