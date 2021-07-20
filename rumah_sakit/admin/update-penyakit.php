<?php
require 'config/koneksi.php';

$no=$_POST['id'];
$kd_penyakit = $_POST["kd_penyakit"];
$nama_penyakit = $_POST["nama_penyakit"];



$query = "UPDATE `penyakit` SET `kd_penyakit` = '$kd_penyakit', `nama_penyakit` = '$nama_penyakit' WHERE `no` = '$no'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil Update data";
	header("location: penyakit.php", true, 301);
  }
else {
	echo "Gagal Update data";
	header("location: penyakit.php", true, 301);
}  

?>