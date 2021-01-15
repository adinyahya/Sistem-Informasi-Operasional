<?php

include "koneksi.php"; 
  
      $error="";
      $namaError="";
      $ketError="";
      $lembagaError="";
      $tlpError="";
      $alamatError="";
      $keperluanError="";
      $penerimaError="";
	  $idRroor="";
     $id="";
      $kotaid="";
      $lokasilayanan="";
      $nama="";
      $keterangan="";
      $lembaga="";
      $tlp="";
      $alamat="";
      $keperluan="";
      $penerima="";

      if($_SERVER["REQUEST_METHOD"]=="POST")
      {	
		 
		  if($_POST["lembaga"]) {
                  $lembaga=test_input($_POST["lembaga"]);
		  }
          if(empty($_POST["nama"]))
          {
              $namaError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["nama"]) {
                  $nama= test_input($_POST["nama"]);
              }
          }
          if(empty($_POST["keterangan"]))
          {
              $ketError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["keterangan"]) {
                  $keterangan= test_input($_POST["keterangan"]);
              }
          }
          if(empty($_POST["tlp"]))
          {
              $tlpError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["tlp"]) {
                  $tlp= test_input($_POST["tlp"]);
              }

          }
          if(empty($_POST["alamat"]))
          {
              $alamatError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["alamat"]) {
                  $alamat= test_input($_POST["alamat"]);
              }
          }
          if(empty($_POST["keperluan"])) {
              $keperluanError="* Tidak boleh kosong";
          } else {
              if($_POST["keperluan"]) {
                  $keperluan=test_input($_POST["keperluan"]);
              }
             
          }
          if($_POST)
          {
              $penerima = $_SESSION['id_peg']['id_peg'];
          }
          if($_POST)
	      {
		  $kotaid = $_SESSION['id_kota']['id_kota'];
	      }
         if($_POST)
          {
            $lokasilayanan = $_SESSION['layanan']['layanan'];
          }
         
          if(!empty($_POST["nama"])  && !empty($_POST["keterangan"]) && !empty($_POST["tlp"]) && !empty($_POST["alamat"]) && !empty($_POST["keperluan"])  )
          {
              $as = $_GET['id'];
              $sql = "UPDATE tb_mst_layanan SET nama='$nama', jenis_donatur='$keterangan', detail_jenis_donatur='$lembaga', nomor_telepon='$tlp',alamat='$alamat', keperluan='$keperluan',  penerima='$penerima',jenis_keluhan='1', nama_keluhan='BUKU TAMU', id_kota='$kotaid', layanan='$lokasilayanan' WHERE id_keluhan='$as'";

                
              if ($conn->query($sql)==TRUE){
                  
				echo "<script> alert('Berhasil'); window.location='lihattamu.php';</script>";
                
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
