<?php 
include "../koneksi.php";
session_start();

 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KESESUAIAN LAHAN PADI</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        <!-- Our Custom CSS -->
        <!-- <link rel="stylesheet" href="assets/index.css"> -->
    </head>
    <body>



        <div class="wrapper">
            <div id="content">

                <nav class="navbar navbar-default justify-content-center" style="background: #e5f5df">
                    <div class="container-fluid">
                   		 <center>
                   		 	<h3>SISTEM PENDUKUNG KEPUTUSAN PENENTUAN KESESUAIAN LAHAN PADI</h3>
                   		 </center>    	
                   		 <ul class="nav navbar-nav" >
				      <li class="active"><a href="index_pengguna.php">Beranda</a></li>
                      <li ><a href="alternatif/data_alternatif.php">Alternatif</a></li>
                      <li ><a href="kriteria/data_kriteria.php">Info Kriteria</a></li>
                      <li ><a href="perhitungan/perhitungan.php">Hasil Perhitungan</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="profil/data_diri.php"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['nama_pbaru']; ?></a></li>
                      <li><a href="keluar.php">Keluar</a></li>
				    </ul>
                    </div>
                </nav>

               

                <div class="panel panel-default" style="background: #e5f5df">
                <center>
                <div class="panel panel-heading" style="background: #e5f5df">
                    <h2>Selamat Datang <?php echo $_SESSION['nama_pbaru']; ?> ! </h2>
                </div>
                <div class="panel-body">
                    <div class="container">
                    <h4>Padi adalah komoditas utama yang berperan sebagai kebutuhan pokok karbohidrat bagi penduduk Indonesia. Ketergantungan penduduk Indonesia dalam mengkonsumi padi menyebabkan tingginya permintaan terhadap komoditas padi. Tingginya kebutuhan padi ini seharusnya memberikan dampak positif terhadap kehidupan petani padi. Keterbatasan lahan pertanian menimbulkan masalah rumit yang dihadapi pasokan air yang terbatas bergantung pada hujan. Oleh karena itu, membutuhkan pilihan komoditas budidaya yang tepat untuk lahan yang sesuai lokasi sumber daya. Pemanfaatan lahan, petani memiliki pemahaman dasar tentang kondisi fisik dan karakteristik tanah.Lahan bercocok tanam diolah untuk meningkatkan kesuburan tanah sebagai media tumbuh tanaman padi.</h4>
                    
                    <br>
                    <img src="../assets/petani_nanam.png" class="img" width="280" height="250">
                    
                    </div>
                  
                </div>
                <br><br><br>
                </center>
                </div>
                

                </div>
        </div>





        <!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>


