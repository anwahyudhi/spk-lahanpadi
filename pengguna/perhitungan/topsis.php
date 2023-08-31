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
                    <h2>Proses Perhitungan TOPSIS</h2>
                </div>
                <div class="panel-body">
                  <div class="container">
                     <a href="perhitungan.php" class="btn btn-success btn-fill">
                        <span>Hasil Rank</span>
                        </a>
                        <a href="electre.php" class="btn btn-success btn-fill">
                        <span>Proses Perhitungan ELECTRE</span>
                        </a>
                        <br><br>
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
                                if ($data['suhu'] == "< 16 ᴼC ") {
                                    $sub4[$x] = 5;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] =="16-22 ᴼC") {
                                    $sub4[$x] = 4;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] =="23-28 ᴼC") {
                                    $sub4[$x] = 3;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] =="29-34 ᴼC") {
                                    $sub4[$x] = 2;
                                    echo $sub4[$x];
                                }elseif ($data['suhu'] ==">35 ᴼC") {
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

<div class="panel">
    <h3>Matriks Solusi Ideal</h3>
    
      <div class="container">
        <table class="table table-bordered">
          <thead>
            <tr>
              <th></th>
              <?php 
              $x = 0;
            $sql = "SELECT * FROM kriteria";
            foreach ($dbh->query($sql) as $data) :
            $jenis[$x] = $data['jenis_kriteria'];
            ?>
              
              <th scope="col"><?php echo $data['nama_kriteria']." (".$data['jenis_kriteria'].")" ?></th>
          
            <?php 
            $x++;
            endforeach;
               ?>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Positif</td>
              <td><?php 
              if ($jenis[0] == "Benefit") {
                $pos1 = max($nb1);
                echo number_format(max($nb1),2);
              }elseif ($jenis[0] == "Cost") {
                $pos1 = min($nb1);
                echo number_format(min($nb1),2);
              }

               ?></td>
               <td><?php 
              if ($jenis[1] == "Benefit") {
                $pos2 = max($nb2);
                echo number_format(max($nb2),2);
              }elseif ($jenis[1] == "Cost") {
                $pos2= min($nb2);
                echo number_format(min($nb2),2);
              }

               ?></td>

               <td><?php 
              if ($jenis[2] == "Benefit") {
                $pos3 = max($nb3);
                echo number_format(max($nb3),2);
              }elseif ($jenis[2] == "Cost") {
                $pos3 = min($nb3);
                echo number_format(min($nb3),2);
              }

               ?></td>
               <td><?php 
              if ($jenis[3] == "Benefit") {
                $pos4 = max($nb4);
                echo number_format(max($nb4),2);
              }elseif ($jenis[3] == "Cost") {
                $pos4 = min($nb4);
                echo number_format(min($nb4),2);
              }

               ?></td>
               <td><?php 
              if ($jenis[4] == "Benefit") {
                $pos5 = max($nb5);
                echo number_format(max($nb5),2);
              }elseif ($jenis[4] == "Cost") {
                $pos5 = min($nb5);
                echo number_format(min($nb5),2);
              }

               ?></td>
                            
            </tr>

            <tr>
              <td>Negatif</td>
              <td><?php 
              if ($jenis[0] == "Benefit") {
                $neg1 = min($nb1);
                echo number_format(min($nb1),2);
              }elseif ($jenis[0] == "Cost") {
                $neg1 = max($nb1);
                echo number_format(max($nb1),2);
              }

               ?></td>
               <td><?php 
              if ($jenis[1] == "Benefit") {
                $neg2 = min($nb2);
                echo number_format(min($nb2),2);
              }elseif ($jenis[1] == "Cost") {
                $neg2 = max($nb2);
                echo number_format(max($nb2),2);
              }

               ?></td>

               <td><?php 
              if ($jenis[2] == "Benefit") {
                $neg3 = min($nb3);
                echo number_format(min($nb3),2);
              }elseif ($jenis[2] == "Cost") {
                $neg3 = max($nb3);
                echo number_format(max($nb3),2);
              }

               ?></td>
               <td><?php 
              if ($jenis[3] == "Benefit") {
                $neg4 = min($nb4);
                echo number_format(min($nb4),2);
              }elseif ($jenis[3] == "Cost") {
                $neg4 = max($nb4);
                echo number_format(max($nb4),2);
              }

               ?></td>
               <td><?php 
              if ($jenis[4] == "Benefit") {
                $neg5 = min($nb5);
                echo number_format(min($nb5),2);
              }elseif ($jenis[4] == "Cost") {
                $neg5 = max($nb5);
                echo number_format(max($nb5),2);
              }

               ?></td>
               
            </tr>
            
          </tbody>
        </table>
      </div>

      </div>
      
<h3>Jarak Solusi Ideal</h3>
      <br>
      <div class="container">
      <h4>Jarak Solusi Positif</h4>
        <table class="table table-bordered">
         <thead>
            <tr>
              <th></th>  
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
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              <td><?php

              $jarpos1[$x] = pow($nb1[$x] - $pos1,2)  ;   
              echo number_format($jarpos1[$x],2); ?>
                
              </td>
              
               <td><?php

              $jarpos2[$x] = pow($nb2[$x] - $pos2,2);   
              echo number_format($jarpos2[$x],2); ?>
                
              </td>
               <td><?php

              $jarpos3[$x] = pow($nb3[$x] - $pos3,2);   
              echo number_format($jarpos3[$x],2); ?>
                
              </td>
               <td><?php

              $jarpos4[$x] = pow($nb4[$x] - $pos4,2);   
              echo number_format($jarpos4[$x],2); ?>
                
              </td>
               <td><?php

              $jarpos5[$x] = pow($nb5[$x] - $pos5,2);   
              echo number_format($jarpos5[$x],2); ?>
                
              </td>
             
            </tr>
            <?php 
            $x++;
          endforeach;

             ?>
          </tbody>
        </table>
      </div>

      <br>
      <div class="container">
      <h4>Jarak Solusi Negatif</h4>
      
        <table class="table table-bordered">
         <thead>
            <tr>
              <th></th>  
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
            $x = 0;
            $sql = "SELECT * FROM alternatif";
            foreach ($dbh->query($sql) as $data) :
            ?>
            <tr>
              <td><?php echo $data['nama_alternatif'] ?></td>
              
              <td><?php

              $jarneg1[$x] = pow($nb1[$x] - $neg1,2)  ;   
              echo number_format($jarneg1[$x],2); ?>
                
              </td>
              
               <td><?php

              $jarneg2[$x] = pow($nb2[$x] - $neg2,2);   
              echo number_format($jarneg2[$x],2); ?>
                
              </td>
               <td><?php

              $jarneg3[$x] = pow($nb3[$x] - $neg3,2);   
              echo number_format($jarneg3[$x],2); ?>
                
              </td>
               <td><?php

              $jarneg4[$x] = pow($nb4[$x] - $neg4,2);   
              echo number_format($jarneg4[$x],2); ?>
                
              </td>
               <td><?php

              $jarneg5[$x] = pow($nb5[$x] - $neg5,2);   
              echo number_format($jarneg5[$x],2); ?>
                
              </td>
             
            </tr>
            <?php 
            $x++;
          endforeach;

             ?>
          </tbody>
        </table>
      </div>
        
    <div class="container">
      <table class="table table-bordered">
        <thead>
          <thead>
            <tr>
              <th>Alternatif</th>
              <th>Positif</th>
              <th>Negatif</th>
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
              $jarposideal[$x] = sqrt($jarpos1[$x]+$jarpos2[$x]+$jarpos3[$x]+$jarpos4[$x]+$jarpos5[$x]);
              echo number_format($jarposideal[$x],2);

               ?></td>
               <td><?php 
              $jarnegideal[$x] = sqrt($jarneg1[$x]+$jarneg2[$x]+$jarneg3[$x]+$jarneg4[$x]+$jarneg5[$x]);
              echo number_format($jarnegideal[$x],2);

               ?></td>
            </tr>
            <?php 
            $x++;
            endforeach;
             ?>
        </tbody>
      </table>
      <hr>
      <h4>Nilai Preferensi</h4>
      <table class="table table-bordered">
        <thead>
          <tr>
            <th>Alternatif</th>
            <th>Hasil</th>
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
            $hasil[$x] = $jarnegideal[$x]/($jarnegideal[$x]+$jarposideal[$x]);
            echo number_format($hasil[$x],2);

            $sql=mysqli_query($dbh,"UPDATE alternatif set nilai_topsis = '$hasil[$x]' WHERE id_alternatif = '$data[id_alternatif]'");
            
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


