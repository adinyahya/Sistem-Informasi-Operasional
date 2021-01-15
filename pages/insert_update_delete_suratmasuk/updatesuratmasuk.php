<?php
include "koneksi.php";
      $error="";
      $namapError="";
      $nomorpError="";
      $tanggalpError="";
      $isipError="";
      
     $kotaid="";
      $penerima="";
      $namap="";
      $nomorp="";
      $tanggalp="";
      $isip="";
     $lokasilayanan="";

      if($_SERVER["REQUEST_METHOD"]=="POST")
      {
		  
          if(empty($_POST["namap"]))
          {
              $namapError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["namap"]) {
                  $namap= test_input($_POST["namap"]);
              }
          }
          if(empty($_POST["nomorp"]))
          {
              $nomorpError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["nomorp"]) {
                  $nomorp= test_input($_POST["nomorp"]);
              }
          }
          if(empty($_POST["tanggalp"]))
          {
              $tanggalpError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["tanggalp"]) {
                  $tanggalp= test_input($_POST["tanggalp"]);
              }

          }
          if(empty($_POST["isip"]))
          {
              $isipError="* Tidak boleh kosong";
          }
          else
          {
              if($_POST["isip"]) {
                  $isip= test_input($_POST["isip"]);
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

           $tgl = date('Y-m-d');
           
           $jamX = date("h:i:s");
          if(!empty($_POST["namap"])  && !empty($_POST["nomorp"])  )
          {
              $as = $_GET['id'];
              $sql = "UPDATE tb_mst_layanan SET nama='$namap',  nomor_surat='$nomorp' ,tanggal_surat='$tanggalp', isi_surat='$isip', tanggal_catat='$tgl', jam_catat='$jamX', penerima='$penerima', jenis_keluhan='4', nama_keluhan='SURAT MASUK', id_kota='$kotaid', layanan='$lokasilayanan' WHERE id_keluhan='$as'";

              if ($conn->query($sql)==TRUE){
				
				echo "<script> alert('Berhasil'); window.location='lihatsurat.php';</script>";
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