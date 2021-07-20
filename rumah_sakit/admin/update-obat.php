<?php
require 'config/koneksi.php';

$no=$_POST['id'];
$nama_obat = $_POST["nama_obat"];
$kd_obat = $_POST["kd_obat"];


$query = "UPDATE `obat` SET `nama_obat` = '$nama_obat', `kd_obat` = '$kd_obat' WHERE `no` = '$no'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil Update data";
	header("location: obat.php", true, 301);
  }
else {
	echo "Gagal Update data";
	header("location: obat.php", true, 301);
}  

?>