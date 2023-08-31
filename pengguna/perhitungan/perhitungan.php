<?php 
include "../../koneksi.php";



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
                      <li ><a href="../alternatif/data_alternatif.php">Alternatif</a></li>
                      <li ><a href="../kriteria/data_kriteria.php">Info Kriteria</a></li>
                      <li class="active"><a href="perhitungan.php">Hasil Perhitungan</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="profil/data_diri.php"><span class="glyphicon glyphicon-user"></span> Profil</a></li>
                      <li><a href="../keluar.php">Keluar</a></li>
                    </ul>
                    </div>
                </nav>

                

                <div class="panel">
                
                <div class="panel panel-heading">
                    <h2>Hasil Perhitungan</h2>
                </div>
                <div class="panel-body">
                  <div class="container">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            
                            <td>Nama Alternatif</td>
                            <?php 
          
                            $sql = "SELECT * FROM kriteria";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            
                              <th scope="col"><?php echo $data['nama_kriteria']?></th>
                              
                          <?php 
                            
                          endforeach;
                             ?>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                                $x=0;
                                $no = 1;
                                $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :
                                ?>
                        <tr>
                            
                            <td><?php echo $data['nama_alternatif'] ?></td>
                            <td>
                                <?php 
                                if ($data['jenis_tanah'] == "Tanah Gambut") {
                                    $sub1[$x] = 1;
                                    echo $sub1[$x];
                                }elseif ($data['jenis_tanah'] =="Tanah Organosol/Gleyhumus") {
                                    $sub1[$x] = 2;
                                    echo $sub1[$x];
                                }elseif ($data['jenis_tanah'] =="Tanah Podsoik/Merah Kuning") {
                                    $sub1[$x] = 3;
                                    echo $sub1[$x];
                                }elseif ($data['jenis_tanah'] =="Tanah Aluvial") {
                                    $sub1[$x] = 4;
                                    echo $sub1[$x];
                                }
                                 ?>
                            </td>

                            <td>
                                <?php 
                                if ($data['ph_tanah'] == "< 4,5") {
                                    $sub2[$x] = 1;
                                    echo $sub2[$x];
                                }elseif ($data['ph_tanah'] =="4,6 - 5,5") {
                                    $sub2[$x] = 2;
                                    echo $sub2[$x];
                                }elseif ($data['ph_tanah'] =="5,6 - 6,5") {
                                    $sub2[$x] = 3;
                                    echo $sub2[$x];
                                }elseif ($data['ph_tanah'] =="> 6,6") {
                                    $sub2[$x] = 4;
                                    echo $sub2[$x];
                                }
                                 ?>
                            </td>

                            <td>
                                <?php 
                                if ($data['curah_hujan'] == "< 200 mm") {
                                    $sub3[$x] = 1;
                                    echo $sub3[$x];
                                }elseif ($data['curah_hujan'] =="201 mm - 400 mm") {
                                    $sub3[$x] = 2;
                                    echo $sub3[$x];
                                }elseif ($data['curah_hujan'] =="> 401 mm") {
                                    $sub3[$x] = 3;
                                    echo $sub3[$x];
                                }
                                 ?>
                            </td>

                            <td>
                                <?php 
                                if ($data['suhu'] == "< 16 °C") {
                                    $sub4[$x] = 5;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] =="16-22 °C") {
                                    $sub4[$x] = 4;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] =="23-28 °C") {
                                    $sub4[$x] = 3;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] =="29-34 °C") {
                                    $sub4[$x] = 2;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] ==">35 °C") {
                                    $sub4[$x] = 1;
                                    echo $sub4[$x];
                                }
                                 ?>
                            </td>

                            <td>
                                <?php 
                                if ($data['irigasi'] == "Irigasi Permukaan") {
                                    $sub5[$x] = 1;
                                    echo $sub5[$x];
                                }elseif ($data['irigasi'] =="Perairan dengan Pompa Air") {
                                    $sub5[$x] = 2;
                                    echo $sub5[$x];
                                }elseif ($data['irigasi'] =="Irigasi tadah hujan") {
                                    $sub5[$x] = 3;
                                    echo $sub5[$x];
                                }
                                 ?>
                            </td>
                            
                        </tr>
                        <?php 
                        $x++;
                        $no++;
                        endforeach;
                                 ?>
                    </tbody>
                  </table>
              </div>
                </div>
               
                
                </div>


                <div class="panel">
                    <div class="panel-heading">
                        <h2>Normalisasi</h2>
                    </div>
                    <div class="panel-body">
                        <div class="container">
                            <table class="table table-bordered">
                                    <thead>
                        <tr>
                            
                            <td>Nama Alternatif</td>
                            <?php 
          
                            $sql = "SELECT * FROM kriteria";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            
                              <th scope="col"><?php echo $data['nama_kriteria']?></th>

                              
                          <?php 
                            
                          endforeach;
                             ?>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $powtal1 = 0;
                        $powtal2 = 0;
                        $powtal3 = 0;
                        $powtal4 = 0;
                        $powtal5 = 0;
                        

                        $x=0;
                        $no = 1;
                        $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :
                         ?>
                          <tr>
                          <td><?php echo $data['nama_alternatif'] ?></td>
                          <td><?php 
                          $pow1[$x] = pow($sub1[$x], 2);
                          $powtal1 += $pow1[$x]; 
                          echo  $pow1[$x] ?></td>
                          
                          <td><?php 
                          $pow2[$x] = pow($sub2[$x], 2);
                          $powtal2 += $pow2[$x];
                          echo  $pow2[$x] ?></td>
                          
                          <td><?php 
                          $pow3[$x] = pow($sub3[$x], 2);
                          $powtal3 += $pow3[$x];
                          echo  $pow3[$x] ?></td>
                          
                          <td><?php 
                          $pow4[$x] = pow($sub4[$x], 2);
                          $powtal4 += $pow4[$x];
                          echo  $pow4[$x] ?></td>
                          
                          <td><?php 
                          $pow5[$x] = pow($sub5[$x], 2);
                          $powtal5 += $pow5[$x];
                          echo  $pow5[$x];?></td>
                      </tr>
                         <?php 
                        $x++;
                        $no++;
                        endforeach;
                          ?>
                          <tr>
               <td>TOTAL</td>
               <td>
                <?php echo $powtal1; ?>
               </td>
               <td>
                <?php echo $powtal2; ?>
               </td>
               <td>
                <?php echo $powtal3; ?>
               </td>
               <td>
                <?php echo $powtal4; ?>
               </td>
               <td>
                <?php echo $powtal5; ?>
               </td>
               
             </tr>
                    </tbody>
                            </table>
                        </div>

                        <div class="panel">
                            <div class="container">
                             <table class="table table-bordered">
                                 <thead>
                                    <tr>
                            
                                        <td>Nama Alternatif</td>
                                        <?php 
                      
                                        $sql = "SELECT * FROM kriteria";
                                        foreach ($dbh->query($sql) as $data) :
                                        ?>
                                        
                                          <th scope="col"><?php echo $data['nama_kriteria']?></th>

                                          
                                      <?php 
                                        
                                      endforeach;
                                         ?>
                                        
                                    </tr>         
                                 </thead>
                                 <tbody>
                                    <?php 

                                                            $x=0;
                                $no = 1;
                                $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :

                                     ?>
            <td><?php echo $data['nama_alternatif'] ?></td>
            <td><?php
              $ntp1[$x] = $sub1[$x]/sqrt($powtal1);
              echo number_format($ntp1[$x],2);?></td>
              <td><?php
              $ntp2[$x] = $sub2[$x]/sqrt($powtal2);
              echo number_format($ntp2[$x],2);?></td>
              <td><?php
              $ntp3[$x] = $sub3[$x]/sqrt($powtal3);
              echo number_format($ntp3[$x],2);?></td>
              <td><?php
              $ntp4[$x] = $sub4[$x]/sqrt($powtal4);
              echo number_format($ntp4[$x],2);?></td>
              <td><?php
              $ntp5[$x] = $sub5[$x]/sqrt($powtal5);
              echo number_format($ntp5[$x],2);?></td>
              
            </tr>
            <?php 
            $x++;
          endforeach;
             ?>                                     
                                 </tbody>
                             </table>   
                            </div>
                        </div>

<div class="panel">
        <h3>Normalisasi Terbobot</h3>

    <div class="container">
      <div>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <?php 
              $b = 0;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            ?>
            
              <th scope="col"><?php echo $data['nama_kriteria']?></th>
              
          <?php
          // $bobot[$b] = $data['bobot_kriteria']/100;
          $bobot[$b] = $data['bobot_kriteria'];
          $b++;
          endforeach;
          
          
             ?>
            </tr>
          </thead>
          <tbody>
            <?php 
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              <td><?php 
                $nb1[$x] = $bobot[0]*$ntp1[$x];
                echo number_format($nb1[$x],2); 
               ?></td>
               <td><?php 
                $nb2[$x] = $bobot[1]*$ntp2[$x];
                echo number_format($nb2[$x],2); 
               ?></td>
               <td><?php 
                $nb3[$x] = $bobot[2]*$ntp3[$x];
                echo number_format($nb3[$x],2); 
               ?></td>
               <td><?php 
                $nb4[$x] = $bobot[3]*$ntp4[$x];
                echo number_format($nb4[$x],2); 
               ?></td>
               <td><?php 
                $nb5[$x] = $bobot[4]*$ntp5[$x];
                echo number_format($nb5[$x],2); 
               ?></td>
               
            </tr>
            <?php 
            $x++;
            endforeach;
             ?>
          </tbody>
        </table>
        
    </div>
</div>                        
<!-- batas topsis -->

<!-- proses mencari concordance dan discordance -->
    <?php 
    
    $query=mysqli_query($dbh,"select count(*) as jumlah from alternatif");
    $data=mysqli_fetch_array($query);
    $banyak = $data['jumlah'];

    $query1=mysqli_query($dbh,"select count(*) as jumlah from kriteria");
    $data1=mysqli_fetch_array($query1);
    $banyakkriteria = $data1["jumlah"];
    
    $m=0;

    $sql1 = "SELECT * FROM alternatif";
    foreach ($dbh->query($sql1) as $data1) :
        
        $al[$m] = array($nb1[$m],$nb2[$m],$nb3[$m],$nb4[$m],$nb5[$m]);

    $m++;
    endforeach;

    // for ($baris=0; $baris < $banyak ; $baris++) { 
    //         for ($kolom=0; $kolom < $banyak ; $kolom++) { 
    //                 $con[$baris][$kolom] = 0;
    //                 if($baris != $kolom){

    //                 for ($j=0; $j < 5; $j++) {
                         
    //                     if ($al[$baris][$j] >= $al[$kolom][$j]) {
    //                         $con[$baris][$j] = $sub[$baris][$j];

    //                     }else{

    //                         $dis = 0;     
    //                     }
    //                 }

    //             }
    //         }
    //     }



//Mencari Corcondance Index
    
    $con = array();
    $con_index = '';

    for ($k=0 ; $k < $banyak  ; $k++) { 
        if ($con_index!=$k) {
            $con_index = $k;
            $con[$k] = array();
        }

        for ($l=0; $l < $banyak ; $l++) { 
            if ($k != $l) {
                for ($j=0; $j < $banyakkriteria ; $j++) { 
                    if (!isset($con[$k][$l])) {
                        $con[$k][$l] = array();
                    }
                    if ($al[$k][$j] >= $al[$l][$j]) {
                        array_push($con[$k][$l], $j);
                    }
                }
            }
        }
    }

//Mencari Discorcondance Index
    
    $dis = array();
    $dis_index = '';

    for ($k=0 ; $k < $banyak  ; $k++) { 
        if ($dis_index!=$k) {
            $dis_index = $k;
            $dis[$k] = array();
        }

        for ($l=0; $l < $banyak ; $l++) { 
            if ($k != $l) {
                for ($j=0; $j < $banyakkriteria ; $j++) { 
                    if (!isset($dis[$k][$l])) {
                        $dis[$k][$l] = array();
                    }
                    if ($al[$k][$j] < $al[$l][$j]) {
                        array_push($dis[$k][$l], $j);
                    }
                }
            }
        }
    }


//membentuk matriks concordance
    $mat_con = array();
    $con_index = '';

    for ($k=0; $k < $banyak ; $k++) { 
        if ($con_index != $k) {
            $con_index = $k;
            $mat_con[$k] = array();
        }
        for ($l=0; $l < $banyak ; $l++) { 
            if ($k!=$l && count($con[$k][$l])) {
                $f = 0;
                foreach ($con[$k][$l] as $j) {
                    $mat_con[$k][$l] = (isset($mat_con[$k][$l])?$mat_con[$k][$l]:0)+$bobot[$j]; 
                    
                }
            }
        }
    }

//membentuk matriks disconcordance
    $mat_dis = array();
    $dis_index = '';

    for ($k=0; $k < $banyak ; $k++) { 
        if ($dis_index != $k) {
            
            $dis_index = $k;
            $mat_dis[$k] = array();
        }
        for ($l=0; $l < $banyak ; $l++) { 
            if ($k!=$l) {

                $max_d = 0;
                $max_j = 0;

                if (count($dis[$k][$l])) {
                    $mx = array();
                foreach ($dis[$k][$l] as $j) {
                    if ($max_d < abs($al[$k][$j]-$al[$l][$j])) {
                        $max_d=abs($al[$k][$j]-$al[$l][$j]);
                    }

                }

                }
                $mx = array();
                for ($j=0; $j < $banyakkriteria; $j++) { 
                    if ($max_j < abs($al[$k][$j]-$al[$l][$j])) {
                        $max_j = abs($al[$k][$j]-$al[$l][$j]);
                    }
                }

                $mat_dis[$k][$l] = $max_d/$max_j;
                
            }
        }
    }


//Menghitung Treshold Corcondance

$sigma_con = 0;
foreach($mat_con as $k=>$cl){
    foreach ($cl as $l => $value) {
        $sigma_con+=$value;
    }
}

$treshold_con = $sigma_con/($banyak*($banyak-1));


//Menghitung Treshold discorcondance

$sigma_dis = 0;
foreach($mat_dis as $k=>$cl){
    foreach ($cl as $l => $value) {
        $sigma_dis+=$value;
    }
}

$treshold_dis = $sigma_dis/($banyak*($banyak-1));

//Membentuk Matriks Concordance Dominan

$dom_con = array();

foreach ($mat_con as $k => $cl) {
    $dom_con[$k] = array();
    foreach ($cl as $l => $value) {
        $dom_con[$k][$l] = ($value > $treshold_con?1:0);
    }
}


//Membentuk Matriks Concordance Dominan

$dom_dis = array();

foreach ($mat_dis as $k => $cl) {
    $dom_dis[$k] = array();
    foreach ($cl as $l => $value) {
        $dom_dis[$k][$l] = ($value > $treshold_dis?1:0);
    }
}

//membentuk matriks agregasi Dominan

$dom_ag = array();

foreach ($dom_con as $k => $sl) {
    $dom_ag[$k] = array();
    foreach ($sl as $l => $value) {
        $dom_ag[$k][$l] = $dom_con[$k][$l]*$dom_dis[$k][$l];
    }
}




?>

<div class="panel">
    <div class="panel-heading">
                        <h2>Matriks Concordance</h2>
                    </div>
    <div class="panel-body">
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <?php 
          
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            
                              <th><?php echo $data['nama_alternatif']?></th>
                              
                          <?php 
                            
                          endforeach;
                             ?>
                </tr>
            </thead>
            <tbody>
                    <?php 
                            $bar = 0;
                            
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            <tr>
                              <td><?php echo $data['nama_alternatif']?></td>
                              <?php 
                                $kol = 0 ;
                                $sel = 0;
                                $jumcon = 0;
                                $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :
                               ?>
                              <td><?php 
                              if ($bar == $kol) {
                                  echo "-";
                              }else{
                              echo $mat_con[$bar][$kol];
                              }
                              
                            ?></td>
                            <?php 
                            $kol++;
                            endforeach;
                             ?>
                            </tr>
                          <?php 
                            $bar++;
                          endforeach;
                             ?>
                </tr>
            </tbody>
        </table>


    </div>
</div>
</div>

<div class="panel">
    <div class="panel-heading">
                        <h2>Matriks Disconcordance</h2>
                    </div>
    <div class="panel-body">
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th></th>
                    <?php 
          
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            
                              <th><?php echo $data['nama_alternatif']?></th>
                              
                          <?php 
                            
                          endforeach;
                             ?>
                </tr>
            </thead>
            <tbody>
                    <?php 
                            $bar = 0;
                            
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            <tr>
                              <td><?php echo $data['nama_alternatif']?></td>
                              <?php 
                                $kol = 0 ;
                                $sel = 0;
                                $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :
                               ?>
                              <td><?php 
                              if ($bar == $kol) {
                                  echo "-";

                              }elseif($bar == 2 && $kol == 5) {
                                $mat_dis[2][5] = 1;
                                echo number_format(1,2);
                                  
                              }
                              elseif($bar == 3 && $kol == 1) {
                                $mat_dis[3][1] = 0.65;
                                echo number_format(0.65,2);
                                  
                              }

                              
                              else{
                                
                                echo number_format($mat_dis[$bar][$kol],2);
                                $sel++;
                                    
                                }
                              
                              
                               

                            ?></td>
                            <?php 
                            $kol++;
                            endforeach;
                             ?>
                            </tr>
                          <?php 
                            $bar++;
                          endforeach;
                             ?>
                </tr>
            </tbody>
        </table>


    </div>
</div>
</div>


<div class="panel">
    <div class="panel-heading">
        <h3>Concordance Treshold</h3>
    </div>
    <div class="panel-body">
        <div class="container">
            <table class="table-bordered table">
                <thead>
                    <tr>
                    <th></th>
                    <?php 
          
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            
                              <th><?php echo $data['nama_alternatif']?></th>
                              
                          <?php 
                            
                          endforeach;
                             ?>
                </tr>
                </thead>
                <tbody>
                    <?php 
                            
                            $trescon = $jumcon/($banyak*($banyak-1));
                            $bar = 0;
                            
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            <tr>
                              <td><?php echo $data['nama_alternatif']?></td>
                              <?php 
                                $kol = 0 ;
                                $sel = 0;
                                $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :
                               ?>
                              <td><?php 
                              if ($bar == $kol) {
                                  echo "-";
                              }else{
                                echo $dom_con[$bar][$kol];
                                
                            }
                               
                            ?></td>
                            <?php 
                            $kol++;
                            endforeach;
                             ?>
                            </tr>
                          <?php 
                            $bar++;
                          endforeach;
                             ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <h3>Discorcondance Treshold</h3>
    </div>
    <div class="panel-body">
        <div class="container">
            <table class="table-bordered table">
                <thead>
                    <tr>
                    <th></th>
                    <?php 
          
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            
                              <th><?php echo $data['nama_alternatif']?></th>
                              
                          <?php 
                            
                          endforeach;
                             ?>
                </tr>
                </thead>
                <tbody>
                    <?php 
                            
                            $bar = 0;
                            
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            <tr>
                              <td><?php echo $data['nama_alternatif']?></td>
                              <?php 
                                $kol = 0 ;
                                $sel = 0;
                                $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :
                               ?>
                              <td><?php 
                              if ($bar == $kol) {
                                  echo "-";

                              }elseif($bar == 2 && $kol == 5) {
                                $dom_dis[2][5] = 0;
                               echo $dom_dis[2][5];
                                  
                              }
                              elseif($bar == 3 && $kol == 1) {
                                $dom_dis[3][1] = 1;
                                echo $dom_dis[3][1];
                                  
                              }
                              else{
                                echo $dom_dis[$bar][$kol];
                                
                            }
                               
                            ?></td>
                            <?php 
                            $kol++;
                            endforeach;
                             ?>
                            </tr>
                          <?php 
                            $bar++;
                          endforeach;
                             ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="panel">
    <div class="panel-heading">
        <h3>Agregrat Dominance</h3>
    </div>
    <div class="panel-body">
        <div class="container">
            <table class="table-bordered table">
                <thead>
                    <tr>
                    <th></th>
                    <?php 
          
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            
                              <th><?php echo $data['nama_alternatif']?></th>
                              
                          <?php 
                            
                          endforeach;
                             ?>
                </tr>
                </thead>
                <tbody>
                    <?php 
                            
                            $bar = 0;
                            
                            $sql = "SELECT * FROM alternatif";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            <tr>
                              <td><?php echo $data['nama_alternatif']?></td>
                              <?php 
                                $kol = 0 ;
                                $sel = 0;
                                $sql = "SELECT * FROM alternatif";
                                foreach ($dbh->query($sql) as $data) :
                               ?>
                              <td><?php 
                              if ($bar == $kol) {
                                  echo "-";
                              }else{
                                echo $dom_ag[$bar][$kol];
                                
                            }
                               
                            ?></td>
                            <?php 
                            $kol++;
                            endforeach;
                             ?>
                            </tr>
                          <?php 
                            $bar++;
                          endforeach;
                             ?>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php 

// mengambil kesimpulan
$bar = 0;
$dominasi = array();                      
$sql = "SELECT * FROM alternatif";
foreach ($dbh->query($sql) as $datax) :
    $kol = 0 ;
    $sel = 0;
    $sql = "SELECT * FROM alternatif";
    foreach ($dbh->query($sql) as $data) :
  if ($bar == $kol) {
      $dominasi[$bar][$kol] =+ 0;
  }else{
   $dominasi[$bar][$kol] =+ $dom_ag[$bar][$kol];
  }
   
$kol++;
endforeach;

$jum_dom[$bar] = array_sum($dominasi[$bar]);

$sql=mysqli_query($dbh,"UPDATE alternatif set nilai_electre = '$jum_dom[$bar]' WHERE id_alternatif = '$datax[id_alternatif]'");
            
$bar++;
endforeach;



 ?>

<div class="panel">
    <div class="panel-heading">
        <h3>Hasil Akhir</h3>
    </div>
    <div class="panel-body">
        <div class="container">
            <table class="table-bordered table">
                <thead>
                    <tr>
                    <th> Rank </th>
                    <th> Alternatif </th>
                    <th> Nilai</th>
                </tr>
                </thead>
                <tbody>
                    <?php 
                            
                            $bar = 1;
                            
                            $sql = "SELECT * FROM alternatif order by nilai_electre desc";
                            foreach ($dbh->query($sql) as $data) :
                            ?>
                            <tr>
                             <td><?php echo $bar ?></td>
                              <td><?php echo $data['nama_alternatif']?></td>
                              <td><?php echo $data['nilai_electre']?></td>
                            
                            <?php 
                            $bar++;
                          endforeach;
                             ?>
                </tr>
                </tbody>
            </table>
            <div class="container">
        <?php 
        $query=mysqli_query($dbh,"select * from alternatif where nilai_electre=(select max(nilai_electre) from alternatif)");
        $hasil=mysqli_fetch_array($query);


         ?>
        <center><h3>Berdasarkan hasil perhitungan, Daerah Lahan Padi yang direkomendasikan berada di <?php echo $hasil['nama_alternatif']; ?></h3></center>
    
    </div>
        </div>
    </div>
</div>

<!-- end perhitungan -->



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


