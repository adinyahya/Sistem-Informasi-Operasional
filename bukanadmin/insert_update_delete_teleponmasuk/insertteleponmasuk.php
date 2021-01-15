<?php 
include "koneksi.php";
	  $error="";
      $namatError="";
      $asaltError="";
	  $detailtError="";
      $tlptError="";
      $keperluantError="";
      
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
	             		  if($_POST["sumber"]) {
                  $sumber=test_input($_POST["sumber"]);
				  		  if($_POST["keluhan"]) {
                  $keluhan=test_input($_POST["keluhan"]);
				  		  if($_POST["ket"]) {
                  $ket=test_input($_POST["ket"]);
		  }
		  }
		  }
		  
	$tglt=date('y-m-d');
	
           $jamX = date("h:i:s");
	
if(!empty($_POST["namat"]) && !empty($_POST["asalt"]) && !empty($_POST["tlpt"])&&!empty($_POST["keperluant"]))
          {
              $sql = "INSERT INTO tb_mst_layanan SET nama='$namat', jenis_donatur='$asalt', detail_jenis_donatur='$detailt',  nomor_telepon='$tlpt', keperluan='$keperluant', tanggal_catat='$tglt', jam_catat='$jamX', penerima='$penerima', jenis_keluhan='2', nama_keluhan='TELEPON MASUK', id_kota='$kotaid', layanan='$lokasilayanan'";
				
                
               if ($conn->query($sql)==TRUE){
				echo "<script> alert('Berhasil'); </script>";
				if(!empty($_POST["namat"])&&!empty($_POST["sumber"])&&!empty($_POST["keluhan"])&&!empty($_POST["ket"])){
            	$sql2 = "INSERT INTO tb_mst_layanan SET nama='$namat', sumber_informasi='$sumber',isi_informasi='$keluhan',  tindakan='$ket', tanggal_catat='$tglt', jam_catat='$jamX', penerima='$penerima',jenis_keluhan='5', nama_keluhan='KOMPLAIN', id_kota='$kotaid', layanan='$lokasilayanan'";
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