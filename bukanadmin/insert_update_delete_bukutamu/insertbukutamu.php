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
     $lokasilayanan="";
      $kotaid="";
      $nama="";
      $keterangan="";
      $lembaga="";
      $tlp="";
      $alamat="";
      $keperluan="";
      $penerima="";
	  
      $sumber="";
      $keluhan="";
      $ket="";
      

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
                            if($_POST["sumber"]) {
                  $sumber=test_input($_POST["sumber"]);
                          }  
				  		  if($_POST["keluhan"]) {
                  $keluhan=test_input($_POST["keluhan"]);
                            }
				  		  if($_POST["ket"]) {
                  $ket=test_input($_POST["ket"]);
		 
          
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
           $tgl = date('Y-m-d');
           $jamX = date("h:i:s");
          if(empty($namaError) && !empty($_POST["nama"])  && !empty($_POST["keterangan"]) && !empty($_POST["tlp"]) && !empty($_POST["alamat"]) && !empty($_POST["keperluan"])  )
          {
              $sql = "INSERT INTO tb_mst_layanan SET nama='$nama', jenis_donatur='$keterangan', detail_jenis_donatur='$lembaga', nomor_telepon='$tlp',alamat='$alamat', keperluan='$keperluan', tanggal_catat='$tgl', jam_catat='$jamX', penerima='$penerima',jenis_keluhan='1',nama_keluhan='BUKU TAMU', id_kota='$kotaid', layanan='$lokasilayanan'";
			
            if ($conn->query($sql)==TRUE){
				echo "<script> alert('Berhasil'); </script>";
				if(!empty($_POST["nama"])&&!empty($_POST["sumber"])&&!empty($_POST["keluhan"])&&!empty($_POST["ket"])){
            	$sql2 = "INSERT INTO tb_mst_layanan SET nama='$nama', sumber_informasi='$sumber',isi_informasi='$keluhan',  tindakan='$ket', tanggal_catat='$tgl', jam_catat='$jamX', penerima='$penerima',jenis_keluhan='5', nama_keluhan='KOMPLAIN', id_kota='$kotaid', layanan='$lokasilayanan'";
			 	$terserah =mysqli_query($conn,$sql2);
				 }
			   
			  }else{
                  echo "<script> alert('Gagal'); </script>";
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
