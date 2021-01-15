<?php



  include "koneksi.php";

  

  
  $lokasilay = $_SESSION['layanan']['layanan'];
  if(empty($_POST["dr"])){

  $Sql = "SELECT * FROM tb_mst_layanan where jenis_keluhan=1 and layanan='$lokasilay' ORDER BY jam_catat DESC ";

                            

					

							$say = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 

							$nomor = 0;

                            

                             while($tampil = mysqli_fetch_array($say)) { 

								$nomor++;



								echo '<tr>';

									echo '<td>'.$nomor.'</td>';	

									echo '<td>'.$tampil['tanggal_catat'].'</td>';	

									echo '<td>'.$tampil['jam_catat'].'</td>';	

									echo '<td>'.$tampil['nama'].'</td>';	

									echo '<td>'.$tampil['jenis_donatur'].'</td>';	

									echo '<td>'.$tampil['detail_jenis_donatur'].'</td>';

                                    	

									echo '<td>'.$tampil['nomor_telepon'].'</td>';

                                    

									echo '<td>'.$tampil['alamat'].'</td>';

                                    

									echo '<td>'.$tampil['keperluan'].'</td>';

                                    



									echo '<td><a href="tamuedit.php?id='.$tampil['id_keluhan'].'" class="btn btn-success"><i class="fa fa-gear"></i></a>

													<a href="insert_update_delete_bukutamu/deletebukutamu.php?id='.$tampil['id_keluhan'].'" class="btn btn-warning"><i class="fa fa-trash"></i></a>

									</td>';

										

								echo '</tr>';

							}

  

  

  

							}		 

  

  

  

  

  $dari="";

  $sampai="";



      if($_SERVER["REQUEST_METHOD"]=="POST")

      {

		  

       

              if($_POST["dr"]) {

                  $dari= test_input($_POST["dr"]);

              }

          

      

              if($_POST["sm"]) {

                  $sampai= test_input($_POST["sm"]);

              }

          


          if(!empty($_POST["dr"]) && !empty($_POST["sm"])  )

          {

              

							$Sql = "SELECT * FROM tb_mst_layanan where jenis_keluhan=1 and layanan='$lokasilay' and tanggal_catat BETWEEN '$dari' and '$sampai' ORDER BY jam_catat DESC";

                            

					

							$say = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 

							$nomor = 0;

                            

                             while($tampil = mysqli_fetch_array($say)) { 

								$nomor++;



								echo '<tr>';

									echo '<td>'.$nomor.'</td>';	

									echo '<td>'.$tampil['tanggal_catat'].'</td>';	

									echo '<td>'.$tampil['jam_catat'].'</td>';	

									echo '<td>'.$tampil['nama'].'</td>';	

									echo '<td>'.$tampil['jenis_donatur'].'</td>';	

									echo '<td>'.$tampil['detail_jenis_donatur'].'</td>';

                                    	

									echo '<td>'.$tampil['nomor_telepon'].'</td>';

                                    

									echo '<td>'.$tampil['alamat'].'</td>';

                                    

									echo '<td>'.$tampil['keperluan'].'</td>';

                                    



									echo '<td><a href="tamuedit.php?id='.$tampil['id_keluhan'].'" class="btn btn-success"><i class="fa fa-gear"></i></a>

													<a href="insert_update_delete_bukutamu/deletebukutamu.php?id='.$tampil['id_keluhan'].'" class="btn btn-warning"><i class="fa fa-trash"></i></a>

									</td>';

										

								echo '</tr>';

							}





           mysqli_close($conn);

		  }

        }



      function test_input($data) {

        $data = trim($data);

        $data = stripslashes($data);

        $data = htmlspecialchars($data);

        return $data;

      }

  ?>

