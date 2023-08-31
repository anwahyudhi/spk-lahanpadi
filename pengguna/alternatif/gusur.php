<?php
include '../../koneksi.php';

$id = $_GET['tanah'];
$sql = mysqli_query($dbh,"delete from alternatif where id_alternatif='$id'") or die(mysqli_error($dbh));

	if ($sql) {
			echo "<script>alert('Data Alternatif Berhasil Dihapus');document.location='data_alternatif.php' </script> ";
		}else {
			echo "<script>alert('Data Alternatif Gagal Dihapus');document.location='data_alternatif.php' </script> ";
		}
?>
