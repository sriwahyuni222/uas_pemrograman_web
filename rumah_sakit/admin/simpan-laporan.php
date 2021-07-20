<?php
require 'config/koneksi.php';

$kd_laporan = $_POST["kd_laporan"];
$nama = $_POST["nama"];
$tanggal_masuk = $_POST["tanggal_masuk"];
$tanggal_keluar = $_POST["tanggal_keluar"];
$diagnosa = $_POST["diagnosa"];
$biaya_rumahsakit = $_POST["biaya_rumahsakit"];


$query = "INSERT INTO `laporan` (`kd_laporan`, `nama`, `tanggal_masuk`, `tanggal_keluar`, `diagnosa`,`biaya_rumahsakit`,`aksi`) VALUES ('$kd_laporan', '$nama', '$tanggal_masuk', '$tanggal_keluar','$diagnosa','$biaya_rumahsakit', '0')";
$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil insert data";
	header("location: Laporan.php", true, 301);

  }
else {
	echo "Gagal insert data";
	header("location: Laporan.php", true, 301);
}  

?>