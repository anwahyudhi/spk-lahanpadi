<?php 
include "../../koneksi.php";

session_start();

$id = $_GET['subkriteria'];
$query=mysqli_query($dbh,"select * from sub_kriteria where id_subkriteria='$id'");
$data=mysqli_fetch_array($query);
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
				      <li class="active"><a href="data_subkriteria.php">Subkriteria</a></li>
				      <li><a href="../pengguna/data_pengguna.php">Data Pengguna</a></li>
				    </ul>
				    <ul class="nav navbar-nav navbar-right">
				      <li><a href="profil/data_diri.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
				      <li><a href="../keluar.php">Keluar</a></li>
				    </ul>
                    </div>
                </nav>

                

                <div class="panel">
                
                <div class="panel panel-heading">
                    <h2>Ubah Data subkriteria <?php echo $data['nama_subkriteria']; ?> </h2>
                </div>
                <div class="panel-body">
                  <div class="container">
                    <form class="form" action="proses_edit_subkriteria.php?kriteria=<?php echo $data['id_kriteria'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="form-group">

                      <label>Nama subkriteria</label>
                      <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_subkriteria'] ?>">
                    </div>
                    <div class="form-group">
                      <label>Nilai subkriteria</label>
                      <input type="number" name="nilai" class="form-control" value="<?php echo $data['nilai_subkriteria'] ?>">
                    </div>
                    
                     
                    

                    <br>
                    
            		<div class="form-group">
			              <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
			              <input type="submit" required name="nanam" value = "Simpan" class="btn btn-success btn-fill pull-left" onclick="return confirm('Apa anda yakin dengan perubahan data Subkriteria?');">
			        </div>
                  </form>
                  
              </div>
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


