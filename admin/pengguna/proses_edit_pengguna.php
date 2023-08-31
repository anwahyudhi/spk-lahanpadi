<?php 
include "../../koneksi.php";
$id = $_GET['siapa'];

$nama = $_POST['nama'];
$passbaru = $_POST['password_baru'];

$sql=mysqli_query($dbh,"UPDATE petani set nama_pbaru = '$nama', password = '$passbaru' where id_pengguna='$id'");
    
 
if ($_POST['password_baru'] == $_POST['password_baru_konfirm']) {
    if ($sql) {
    echo "<script>alert('Data pengguna berhasil Diubah');document.location='data_pengguna.php' </script> ";
    }else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data pengguna gagal Diubah');document.location='data_pengguna.php' </script> ";
    }    
}else {
    
    echo "<script>alert('Data gagal diubah');document.location='data_pengguna.php' </script> ";
    }


 ?>