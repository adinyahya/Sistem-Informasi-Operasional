<?php 
include "koneksi.php";
	  $error="";
      $namatError="";
      $asaltError="";
	  $detailtError="";
      $tlptError="";
      
	  $penerima="";
      $namat="";
      $asalt="";
      $detailt="";
      $tlpt="";
      $keperluant="";
	  $kotaid="";
	  $lokasilayanan="";
      
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(empty($_POST["namat"]))
	{
		$namatError="* tidak boleh kosong";
	}else
	{
		if($_POST["namat"]){
			$namat=test_input($_POST["namat"]);
		}
	}
	if(empty($_POST["asalt"]))
	{
		$asaltError="* tidak boleh kosong";
	}else
	{
		if($_POST["asalt"]){
			$asalt=test_input($_POST["asalt"]);
		}
		
	}
	if(empty($_POST["detailt"]))
	{
		$detailtError="* tidak boleh kosong";
	}else
	{
		if($_POST["detailt"]){
			$detailt=test_input($_POST["detailt"]);
		}
		
	}
	if(empty($_POST["tlpt"]))
	{
		$telptError="* tidak boleh kosong";
	}else
	{
		if($_POST["tlpt"]){
			$tlpt=test_input($_POST["tlpt"]);
		}
	}
	if(empty($_POST["keperluant"]))
	{
		$keperluantError="* tidak boleh kosong";
	}else
	{
		if($_POST["keperluant"]){
			$keperluant=test_input($_POST["keperluant"]);
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
	
	$tglt=date('y-m-d');
	
           $jamX = date("h:i:s");
	
if(!empty($_POST["namat"]) && !empty($_POST["asalt"]) && !empty($_POST["tlpt"])&&!empty($_POST["keperluant"]))
          {
			  $as = $_GET['id'];
              $sql = "UPDATE tb_mst_layanan SET nama='$namat', jenis_donatur='$asalt', detail_jenis_donatur='$detailt',  nomor_telepon='$tlpt', keperluan='$keperluant', tanggal_catat='$tglt', jam_catat='$jamX', penerima='$penerima', jenis_keluhan='2', nama_keluhan='TELEPON MASUK', id_kota='$kotaid', layanan='$lokasilayanan' WHERE id_keluhan='$as'";

              if ($conn->query($sql)==TRUE){
				  
				echo "<script> alert('Berhasil'); window.location='lihattelepon.php';</script>";
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