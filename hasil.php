<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>p2 Tugas II</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Lobster" rel="stylesheet">
  </head>
  <body>

      <div class="jumbotron text-center" style="background-image: url(bg.jpg); margin-bottom: 0px;">
        <img class="img-responsive" src="logo.png" alt="Chania" width="460" height="345" style="margin: auto; width: 15%"> 
        <h2 style="font-family: 'Lobster', cursive; color: #ff2b87">Miss Barbie</h2>
      </div>

      <div class="container" style="background-color: #fca2ca">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12" style="margin-top: 0px; padding: 40px">

            <div class="col-md-12 col-sm-12 col-xs-12" style="background-color: white;">
              <h2 style="font-family: 'Archivo Narrow', sans-serif; text-align: center;">Peserta Miss Barbie</h2>
              <div>
<!-- ================================foto visible xs================================ -->
                  <div class="col-xs-12 visible-xs">
                    <div class="col-xs-6">
                    <?php
                        $foto = $_FILES['fcu']['name'];
                        $tmp  = $_FILES['fcu']['tmp_name'];
                        move_uploaded_file($tmp, "./foto1.jpg");
                    ?>
                      <img src="<?php echo 'foto1.jpg'; ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                    </div>
                    <div class="col-xs-6">
                    <?php
                        $foto = $_FILES['fcu']['name'];
                        $tmp  = $_FILES['fcu']['tmp_name'];
                        move_uploaded_file($tmp, "./foto2.jpg");
                    ?>
                      <img src="<?php echo 'foto2.jpg'; ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                      <br>
                      <br>
                    </div>
                  </div>
<!-- ================================DATA DIRI================================ -->
                  <div class="col-md-8 col-sm-8">
                    <h3>Data Diri</h3>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                          <td>Nama:</td>
                          <?php echo "<td>".$_POST['nama']."</td>";?>
                        </tr>

                        <tr>
                          <td>Jenis Kelamin:</td>
                          <?php echo "<td>".$_POST['jk']."</td>";?>
                        </tr>

                        <tr>
                          <td>Tempat Lahir:</td>
                          <?php echo "<td>".$_POST['tempat']."</td>";?>
                        </tr>

                        <tr>
                          <td>Tanggal Lahir:</td>
                          <?php $tanggal_lahir = date("d-m-Y", strtotime($_POST['tgl1'])); 
                          echo "<td>".$tanggal_lahir."</td>"; ?>
                        </tr>
                        
                        <tr>
                          <td>Agama:</td>
                          <?php echo "<td>".$_POST['agama']."</td>";?>
                        </tr>
                        
                        <tr>
                          <td>Alamat:</td>
                          <?php echo "<td>".$_POST['alamat']."</td>";?>
                        </tr>

                         <tr>
                          <td>Profesi Saat Ini:</td>
                          <?php echo "<td>".$_POST['profesi']."</td>";?>
                        </tr>

                         <tr>
                          <td>Nama Sekolah/ <br>Universitas/ <br>Instansi:</td>
                          <?php echo "<td>".$_POST['instansi']."</td>";?>
                        </tr>

                         <tr>
                          <td>Tinggi Badan:</td>
                          <?php echo "<td>".$_POST['tb']." cm"."</td>";?>
                        </tr>

                         <tr>
                          <td>Berat Badan:</td>
                          <?php echo "<td>".$_POST['bb']." kg"."</td>";?>
                        </tr>

                        <tr>
                          <td>Email:</td>
                          <?php echo "<td>".$_POST['email1']."</td>";?>
                        </tr>
                      </tbody>
                    </table>
<!-- ================================keterampilan================================ -->
                  <br>
                  <h3>Keterampilan Khusus</h3>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                         <td>Bermain Alat Musik:</td> 
                          <?php echo "<td>"; 
                          $data = count($_POST['alat_musik']);
                          foreach ($_POST['alat_musik'] as $key => $alatMusik) {
                            if($key < $data-2) {
                              if($key > 0 && $alatMusik == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $alatMusik . ", ";
                              }
                            }else{
                              if($key > 0 && $alatMusik == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $alatMusik;
                              }
                            }
                          } 
                          echo "</td>"
                          ?>
                        </tr>
                        
                        <tr>
                          <td>Menyanyi:</td>
                          <?php echo "<td>"; 
                          $data = count($_POST['menyanyi']);
                          foreach ($_POST['menyanyi'] as $key => $lagu) {
                            if($key < $data-2) {
                              if($key > 0 && $lagu == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $lagu . ", ";
                              }
                            }else{
                              if($key > 0 && $lagu == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $lagu;
                              }
                            }
                          } 
                          echo "</td>"
                          ?>
                        </tr>

                        <tr>
                          <td>Menari:</td>
                          <?php echo "<td>"; 
                          $data = count($_POST['menari']);
                          foreach ($_POST['menari'] as $key => $tari) {
                            if($key < $data-2) {
                              if($key > 0 && $tari == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $tari . ", ";
                              }
                            }else{
                              if($key > 0 && $tari == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $tari;
                              }
                            }
                          } 
                          echo "</td>"
                          ?>
                        </tr>

                        <tr>
                          <td>Bahasa Yang Dikuasai:</td>
                          <?php echo "<td>"; 
                          $data = count($_POST['bahasa']);
                          foreach ($_POST['bahasa'] as $key => $bhs) {
                            if($key < $data-2) {
                              if($key > 0 && $bhs == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $bhs . ", ";
                              }
                            }else{
                              if($key > 0 && $bhs == 'Tidak Ada'){
                                echo " ";
                              } else{
                                  echo $bhs;
                              }
                            }
                          } 
                          echo "</td>"
                          ?>
                        </tr>
                      </tbody>
                    </table>
<!-- ================================hasil text area================================ -->
                  <br>
                  <h3>Pernyataan Penutup</h3>
                    <table class="table table-striped">
                      <tbody>
                        <tr>
                        <?php echo "<td>".$_POST['pernyataan']."</td>";?>
                        </tr>
                      </tbody>
                    </table>
                  </div>
<!-- ================================foto MD dan SM================================ -->
                  <div class="col-md-3 col-sm-4 hidden-xs">
                    <br>
                    <br>
                    <br>
                    <div>
                    <?php
                        $foto = $_FILES['fcu']['name'];
                        $tmp  = $_FILES['fcu']['tmp_name'];
                        move_uploaded_file($tmp, "./foto1.jpg");
                    ?>
                      <img src="<?php echo 'foto1.jpg'; ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                    </div>
                    <br>
                    <div>
                    <?php
                        $foto = $_FILES['ffb']['name'];
                        $tmp  = $_FILES['ffb']['tmp_name'];
                        move_uploaded_file($tmp, "./foto2.jpg");
                    ?>
                      <img src="<?php echo 'foto2.jpg'; ?>" class="img-thumbnail" alt="Foto Tidak Tersedia">
                    </div>
                    <br>
                    <br>
                    <br>
                  </div>
                
              </div>
            </div> 
          </div>
        </div>
      </div>

  </body>
</html>