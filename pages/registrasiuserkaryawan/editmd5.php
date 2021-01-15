<?php
  include "koneksi.php";
  
      $md5Ex="";
      $emailEx="";

      $idpeg="";
      $id_user="";
      $nmuser="";
      $passmd5="";
      $vermd5="";
      $hak="";
      $layanan="";
      $idkota="";
      $email="";
      $aktip="";

      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
		  if($_POST["idpeg"]) {
                  $idpeg=test_input($_POST["idpeg"]);
		  }
          if($_POST["id_user"]) {
                  $id_user= test_input($_POST["id_user"]);
          }
          if($_POST["nmuser"]) {
                  $nmuser= test_input($_POST["nmuser"]);
          }
          if ($_POST["passmd5"]) {
                  $passmd5= md5($_POST["passmd5"]);
          }
          if($_POST["vermd5"] != $_POST["passmd5"])
          {
              $md5Ex="* Password Tidak Sama";
              
          }else 
          {
              if($_POST["vermd5"] == $_POST["passmd5"]) {
                      $vermd5= test_input ($_POST["vermd5"]);
          }
          }
          if($_POST["hak"]) {
                  $hak=test_input($_POST["hak"]);
          }
          if($_POST["layanan"]) {
                  $layanan= test_input($_POST["layanan"]);
          }
          
          if($_POST["email"]) {
                  $email=test_input($_POST["email"]);
          }
          if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
		  {
                   	  $emailEx = "* Put Email Correctly"; 
                       
          }
          if($_POST["aktip"]) {
                  $aktip=test_input($_POST["aktip"]);
          }

          $s = "SELECT * FROM tb_mst_regencies where name='$layanan'";
               $re = mysqli_query($conn,$s); 
               
               if($ro = mysqli_fetch_array($re))      
               {
                  $_SESSION['id'] = $ro;
           
             }
          $idkota = $_SESSION['id']['id'];
if(!empty($_POST["idpeg"]) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST["id_user"]) && !empty($_POST["nmuser"]) && !empty($_POST["vermd5"]) && !empty($_POST["hak"]) && !empty($_POST["layanan"])&& !empty($_POST["aktip"]) && ($_POST["passmd5"] == $_POST["vermd5"])  )
          {
                   $as = $_GET['id'];
              $sql = "UPDATE tb_user SET id_peg='$idpeg', id_user='$id_user', nama_user='$nmuser', password_md5='$passmd5', password='$vermd5', hak_akses='$hak', layanan='$layanan', id_kota='$idkota', email='$email', active='$aktip' WHERE id_user='$as'";

                
              if ($conn->query($sql)==TRUE){
               echo "<script> alert('Berhasil'); window.location='karyawan.php';</script>";
			  }else{
				  
				echo "<script> alert('Gagal');</script>";
				  echo"error:".$sql."<br>".$conn->error;
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
