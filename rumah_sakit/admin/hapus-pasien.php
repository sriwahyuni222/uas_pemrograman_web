<?php
require 'config/koneksi.php';

 $id = $_GET["id"];

 $cek=mysqli_query($koneksi,"DELETE FROM `pasien` WHERE `no` = '$id'");


// // query data pasien berdasarkan id
 //$pasien = query("SELECT * FROM pasien WHERE id = $id")[0];

if( $cek ) {
	echo "
		<script>
			alert('Data berhasil dihapus!');
			document.location.href = 'pasien.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('Data gagal dihapus!');
			document.location.href = 'pasien.php';
		</script>
	";
}

 ?>