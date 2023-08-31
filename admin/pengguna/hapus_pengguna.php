<?php
include '../../koneksi.php';

$id = $_GET['siapa'];
$sql = mysqli_query($dbh,"delete from petani where id_pengguna='$id'") or die(mysqli_error($dbh));

	if ($sql) {
			echo "<script>alert('Data Berhasil Dihapus');document.location='data_pengguna.php' </script> ";
		}else {
			echo "<script>alert('Data Gagal Dihapus');document.location='data_pengguna.php' </script> ";
		}
?>
