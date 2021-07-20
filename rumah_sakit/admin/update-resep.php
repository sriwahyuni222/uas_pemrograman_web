<?php
require 'config/koneksi.php';

$no=$_POST['id'];
$kd_resep = $_POST["kd_resep"];
$kd_pasien = $_POST["kd_pasien"];
$kd_dokter = $_POST["kd_dokter"];
$kd_penyakit = $_POST["kd_penyakit"];
$kd_obat = $_POST["kd_obat"];
$jumlah_bayar = $_POST["jumlah_bayar"];



$query = "UPDATE `resep` SET `kd_resep` = '$kd_resep', `kd_pasien` = '$kd_pasien', `kd_dokter` = '$kd_dokter', `kd_penyakit` = '$kd_penyakit', `kd_obat` = '$kd_obat',`jumlah_bayar` = '$jumlah_bayar' WHERE `no` = '$no'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil Update data";
	header("location: resep.php", true, 301);
  }
else {
	echo "Gagal Update data";
	header("location: resep.php", true, 301);
}  

?>