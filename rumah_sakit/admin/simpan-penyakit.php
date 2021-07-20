<?php
require 'config/koneksi.php';

$kd_penyakit = $_POST["kd_penyakit"];
$nama_penyakit= $_POST["nama_penyakit"];


$query = "INSERT INTO `penyakit` (`kd_penyakit`, `nama_penyakit`,`aksi`) VALUES ('$kd_penyakit', '$nama_penyakit', '0')";

$hasil = mysqli_query($koneksi, $query);
if ($hasil) {
	echo "Berhasil insert data";
	header("location: penyakit.php", true, 301);

  }
else {
	echo "Gagal insert data";
	header("location: penyakit.php", true, 301);
}  

?>