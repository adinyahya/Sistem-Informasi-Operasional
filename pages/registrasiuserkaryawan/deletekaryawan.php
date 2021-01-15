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
              $id= test_input($_GET["id"]);
			  
          }
      }
      
      if(!empty($_GET["id"]))
      {
         
		$sql = "DELETE FROM tb_user WHERE id_peg='$id'";
		if (mysqli_query($conn, $sql)) {
		  
				echo "<script> alert('Berhasil'); window.location='../karyawan.php';</script>";
	
		
          } else {
             
				echo "<script> alert('Gagal'); window.location='../karyawan.php';</script>";
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
