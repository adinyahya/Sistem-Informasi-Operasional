<?php
include "koneksi.php"; 
       $error="";
      $idError="";
      $id="";
	  
	  

      if(empty($_GET["id"]))
      {
          $idError="* Tidak boleh kosong";
      }
      else
      {
          if($_GET["id"]) {
              $id= $_GET["id"];
			  
          }
      }
      
      if(!empty($_GET["id"]))
      {
         
		$sql = "DELETE FROM tb_mst_layanan WHERE id_keluhan='$id'";
		if (mysqli_query($conn, $sql)) {
		  
				echo "<script> alert('Berhasil'); window.location='../lihatwhatsapp.php';</script>";
	
		
          } else {
             
				echo "<script> alert('Gagal'); window.location='../lihatwhatsapp.php';</script>";
              echo "Error: " . $sql . "</br>" . mysqli_error($conn);
             
          }
       mysqli_close($conn);
      }


    
  ?>
