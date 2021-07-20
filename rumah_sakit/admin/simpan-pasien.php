<?php
require 'config/koneksi.php';

$kd_pasien = $_POST["kd_pasien"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$periksa = $_POST["periksa"];


$query = "INSERT INTO `pasien` (`kd_pasien`, `nama`, `jk`, `alamat`, `periksa`,`aksi`) VALUES ('$kd_pasien', '$nama', '$gender', '$alamat','$periksa', '0')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil insert data";
	header("location: pasien.php", true, 301);

  }
else {
	echo "Gagal insert data";
	header("location: pasien.php", true, 301);
}  

?>