<?php
include "../../koneksi.php";


$nama = $_POST['nama'];
$username = $_POST['username'];
$pass = $_POST['password'];


$sql=mysqli_query($dbh,"INSERT INTO petani (nama_pbaru, username, password) VALUES ('$nama', '$username', '$pass')");

if ($pass == $_POST['password_konfirmasi']) {
	
	if ($sql) {
    echo "<script>alert('Data berhasil Ditambahkan');document.location='data_pengguna.php' </script> ";
	}else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data gagal ditambahkan');document.location='data_pengguna.php' </script> ";
	}

}else {
    
    echo "<script>alert('Data gagal ditambahkan');document.location='data_pengguna.php' </script> ";
	}


 ?>
