<?php
include "koneksi.php"; 
       $error="";
      $idError="";
      $id="";
	   $stokError="";
      $stok="";
	  
	  

      if(empty($_GET["id"]))
      {
          $idError="* Tidak boleh kosong";
      }
      else
      {
          if($_GET["id"]) {
              $id= test_input($_GET["id"]);
			  
          }
      }
       
      
      if(!empty($_GET["id"]))
      {

        
		$sql = "DELETE FROM tb_mst_invetaris WHERE id='$id'";
        
        $del = mysqli_query($conn,$sql);
        $sql2 = "DELETE FROM tb_status WHERE id='$id'" ;
        $del2 = mysqli_query($conn,$sql2);

		if (mysqli_query($conn, $sql)&& mysqli_query($conn,$sql2)) {
            
				echo "<script> alert('Berhasil'); window.location='../lihatinventaris.php';</script>";
	
		
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
