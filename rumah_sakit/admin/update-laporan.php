<?php
require 'config/koneksi.php';

$no=$_POST['id'];
$kd_laporan = $_POST["kd_laporan"];
$nama = $_POST["nama"];
$tanggal_masuk = $_POST["tanggal_masuk"];
$tanggal_keluar = $_POST["tanggal_keluar"];
$diagnosa = $_POST["diagnosa"];
$biaya_rumahsakit = $_POST["biaya_rumahsakit"];



$query = "UPDATE `laporan` SET `kd_laporan` = '$kd_laporan', `nama` = '$nama', `tanggal_masuk` = '$tanggal_masuk', `tanggal_keluar` = '$tanggal_keluar', `diagnosa` = '$diagnosa',`biaya_rumahsakit` = '$biaya_rumahsakit' WHERE `no` = '$no'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil Update data";
	header("location: laporan.php", true, 301);
  }
else {
	echo "Gagal Update data";
	header("location: laporan.php", true, 301);
}  

?>