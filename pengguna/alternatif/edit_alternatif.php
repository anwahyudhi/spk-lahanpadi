<?php 
include "../../koneksi.php";


$id = $_GET['tanah'];
$query=mysqli_query($dbh,"select * from alternatif where id_alternatif='$id'");
$data=mysqli_fetch_array($query);

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
                         <ul class="nav navbar-nav">
                       <li><a href="../index_pengguna.php">Beranda</a></li>
                      <li class="active"><a href="data_alternatif.php">Alternatif</a></li>
                      <li ><a href="../kriteria/data_kriteria.php">Info Kriteria</a></li>
                      <li ><a href="../perhitungan/perhitungan.php">Hasil Perhitungan</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="profil/data_diri.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
                      <li><a href="../keluar.php">Keluar</a></li>
                    </ul>
                    </div>
                </nav>

                

                <div class="panel panel-default">
                
                <div class="panel panel-heading">
                    <h2>Ubah Data Alternatif <?php echo $data['nama_alternatif'] ?></h2>
                </div>
                <div class="panel-body">
                  <div class="container">
                      <form action="proses_edit_alternatif.php?tanah=<?php echo $data['id_alternatif']; ?>" method="POST" enctype="multipart/form-data">
                         <div class="form-group">
                            <label>Nama Alternatif</label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $data['nama_alternatif'] ?>" required>
                        </div>

                        <div class="form-group">
                        <label>Jenis Tanah</label>
                        <select class="form-control" name = "jenis">
                            <?php 

                            $sql2 = "SELECT * from sub_kriteria where id_kriteria='2'";
                            foreach ($dbh->query($sql2) as $data2) :
                            if ($data2['nama_subkriteria'] == $data['jenis_tanah']) {
                             ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }else{
                            ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }
                              
                        endforeach;
                             ?>
                        </select>
                        </div>

                        

                        <div class="form-group">
                        <label>Ph Tanah</label>
                        <select class="form-control" name = "ph">
                            <?php 

                            $sql2 = "SELECT * from sub_kriteria where id_kriteria='3'";
                            foreach ($dbh->query($sql2) as $data2) :

                             if ($data2['nama_subkriteria'] == $data['ph_tanah']) {
                             ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }else{
                            ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            } 
                        endforeach;
                             ?>
                        </select>
                        </div>


                        <div class="form-group">
                        <label>Suhu</label>
                        <select class="form-control" name = "suhu">
                            <?php 

                            $sql2 = "SELECT * from sub_kriteria where id_kriteria='5'";
                            foreach ($dbh->query($sql2) as $data2) :
                            if ($data2['nama_subkriteria'] == $data['suhu']) {
                             ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }else{
                            ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }
                        endforeach;
                             ?>
                        </select>
                        </div>

                        <div class="form-group">
                        <label>Curah Hujan</label>
                        <select class="form-control" name = "hujan">
                            <?php 

                            $sql2 = "SELECT * from sub_kriteria where id_kriteria='4'";
                            foreach ($dbh->query($sql2) as $data2) :
                            if ($data2['nama_subkriteria'] == $data['curah_hujan']) {
                             ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }else{
                            ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }
                        endforeach;
                             ?>
                        </select>
                        </div>

                        <div class="form-group">
                        <label>Irigasi</label>
                        <select class="form-control" name = "irigasi">
                            <?php 

                            $sql2 = "SELECT * from sub_kriteria where id_kriteria='6'";
                            foreach ($dbh->query($sql2) as $data2) :
                            if ($data2['nama_subkriteria'] == $data['irigasi']) {
                             ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>" selected><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            }else{
                            ?>
                            <option value ="<?php echo $data2['nama_subkriteria'] ?>"><?php echo $data2['nama_subkriteria'] ?></option>
                            <?php  
                            } 
                        endforeach;
                             ?>
                        </select>
                        </div>
                        
                        <div class="form-group">
                          <input type="reset" required name="Reset" class="btn btn-warning pull-right btn-fill"> 
                          <input type="submit" required name="nanam" value = "Simpan" class="btn btn-success btn-fill pull-left" onclick="return confirm('Apa anda yakin dengan data pengguna ?');">
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


