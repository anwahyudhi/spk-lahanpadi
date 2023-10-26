<?php 
include "../../koneksi.php";
$id = $_GET['tanah'];

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$ph = $_POST['ph'];
$suhu = $_POST['suhu'];
$hujan = $_POST['hujan'];
$irigasi = $_POST['irigasi'];

$sql=mysqli_query($dbh,"UPDATE alternatif set nama_alternatif = '$nama', jenis_tanah = '$jenis', ph_tanah='$ph', suhu='$suhu',curah_hujan='$hujan',irigasi='$irigasi' where id_alternatif='$id'");
    
 
   if ($sql) {
    echo "<script>alert('Data Alternatif berhasil Diubah');document.location='data_alternatif.php' </script> ";
    }else {
    echo mysqli_error($dbh);
    echo "<script>alert('Data Alternatif gagal Diubah');document.location='data_alternatif.php' </script> ";
    }    


 ?>




 