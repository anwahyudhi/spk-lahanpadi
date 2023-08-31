<?php
include "../../koneksi.php";

$nama = $_POST['nama'];
$jenis = $_POST['jenis'];
$ph = $_POST['ph'];
$suhu = $_POST['suhu'];
$hujan = $_POST['hujan'];
$irigasi = $_POST['irigasi'];


$sql=mysqli_query($dbh,"INSERT INTO alternatif (nama_alternatif, jenis_tanah, ph_tanah, suhu, curah_hujan, irigasi, nilai_topsis, nilai_electre) VALUES ('$nama', '$jenis', '$ph', '$suhu', '$hujan', '$irigasi', 0, 0)");
	
if ($sql) {
echo "<script>alert('Data Alternatif berhasil Ditambahkan');document.location='data_alternatif.php' </script> ";
}else {
echo mysqli_error($dbh);
echo "<script>alert('Data Alternatif gagal ditambahkan');document.location='data_alternatif.php' </script> ";
}


 ?>
