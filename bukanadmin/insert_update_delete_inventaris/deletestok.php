<?php
include "koneksi.php"; 
       $error="";
      $idError="";
      $id_status="";
	   $stokError="";
      $stok="";
	    $id="";
	  

      if(empty($_GET["id_status"]))
      {
          $idError="* Tidak boleh kosong";
      }
      else
      {
          if($_GET["id_status"]) {
              $id_status= test_input($_GET["id_status"]);
			  
          }
          if($_GET["id"]) {
              $id= test_input($_GET["id"]);
			  
          }
      }
       
      
      if(!empty($_GET["id_status"]))
      {

     
        $sql2 = "DELETE FROM tb_status WHERE id_status='$id_status'" ;
        $del2 = mysqli_query($conn,$sql2);

		if (mysqli_query($conn,$sql2)) {
             $sql = "SELECT SUM(stok) FROM tb_status WHERE id='$id' AND status='masuk'";
                    
                    $msk = mysqli_fetch_array(mysqli_query($conn, $sql));

                    $sql = "SELECT SUM(stok) FROM tb_status WHERE id='$id' AND status='keluar'";
                    
                    $klr = mysqli_fetch_array(mysqli_query($conn, $sql));
                    $hsl= $msk['SUM(stok)']-$klr['SUM(stok)'];

                    $sql = "UPDATE tb_mst_invetaris SET stok='$hsl' WHERE id='$id'";
                    if (mysqli_query($conn, $sql)){
							echo "<script> alert('Berhasil'); window.location='../lihatinventaris.php'; </script>";
			
                    }
          } else {
             
				echo "<script> alert('Gagal'); window.location='../lihatinventaris.php';</script>";
              echo "Error: " . $sql . "</br>" . mysqli_error($conn);
             
          }
       mysqli_close($conn);
      }


      function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
  ?>
