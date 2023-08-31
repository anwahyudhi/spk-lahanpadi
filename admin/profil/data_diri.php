<?php 
include "../../koneksi.php";



 ?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
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
                   		 <ul class="nav navbar-nav">
				      <li><a href="../index_admin.php">Beranda</a></li>
				      <li><a href="../kriteria/data_kriteria.php">Kriteria</a></li>
				      <li><a href="../subkriteria/data_subkriteria.php">Subkriteria</a></li>
				      <li><a href="../pengguna/data_pengguna.php">Data Pengguna</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="data_diri.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
				    </ul>
                    </div>
                </nav>

              

                <div class="panel panel-default">
                
                <div class="panel panel-heading">
                    <h2>Selamat Datang Admin</h2>
                </div>
                <div class="panel-body">
                  
                <p>Penjelasan mengenai Lahan Padi</p>
                </div>
                <br><br><br>
                
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


