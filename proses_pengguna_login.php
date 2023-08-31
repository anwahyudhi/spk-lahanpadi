<?php
session_start();
include ('koneksi.php');



$username = $_POST['username'];
$password = $_POST['password'];
$query = "select * from petani where username = '$username' and password = '$password'";
$execute = mysqli_query($dbh,$query);
$count = mysqli_num_rows($execute);
$hasil = mysqli_fetch_array($execute);
$nama = $hasil['nama_pbaru'];

if($count == 0) { // jika salah, redirect ke login
    ?><script language="JavaScript">alert('Login Gagal  !'); 
            document.location='login_pengguna.php'</script><?php
}
else { // jika benar, redirec ke halaman utama
    $_SESSION['id_pengguna'] = $hasil['id_penguna'];
    
    $_SESSION['nama_pbaru'] = $nama;

        ?>
       <script language="JavaScript">
            alert('Masuk');
            document.location='pengguna/index_pengguna.php'; 
        </script>

       <?php 


    


        
    
    
    
}
?>
    

