<?php
require 'config/koneksi.php';

$no=$_POST['id'];
$kd_pasien = $_POST["kd_pasien"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$periksa = $_POST["periksa"];



$query = "UPDATE `pasien` SET `kd_pasien` = '$kd_pasien', `nama` = '$nama', `jk` = '$gender', `alamat` = '$alamat', `periksa` = '$periksa' WHERE `no` = '$no'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil Update data";
	header("location: pasien.php", true, 301);
  }
else {
	echo "Gagal Update data";
	header("location: pasien.php", true, 301);
}  

?>