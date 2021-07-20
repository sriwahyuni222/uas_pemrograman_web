<?php
require 'config/koneksi.php';

$no=$_POST['id'];
$kode_dokter = $_POST["kode_dokter"];
$nama = $_POST["nama"];
$gender = $_POST["gender"];
$alamat = $_POST["alamat"];
$gaji = $_POST["gaji"];



$query = "UPDATE `dokter` SET `kode_dokter` = '$kode_dokter', `nama` = '$nama', `jk` = '$gender', `alamat` = '$alamat', `gaji` = '$gaji' WHERE `no` = '$no'";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil Update data";
	header("location: dokter.php", true, 301);
  }
else {
	echo "Gagal Update data";
	header("location: dokter.php", true, 301);
}  

?>