<?php 
include "koneksi.php";
	  $error="";
      $namatError="";
	  $detailtError="";
      $asaltError="";
      $nmrwatError="";
      $keperluantError="";
      
	  $kotaid="";
	  	$penerima="";
      $namat="";
      $asalt="";
      $detailt="";
      $nmrwat="";
      $keperluant="";
	  $lokasilayanan="";
      
if($_SERVER["REQUEST_METHOD"]=="POST")
{	
	if($_POST["detailt"]){
			$detailt=test_input($_POST["detailt"]);
		}

		if($_POST["namat"]){
			$namat=test_input($_POST["namat"]);
		}
	

		if($_POST["asalt"]){
			$asalt=test_input($_POST["asalt"]);
		}
	
	
		if($_POST["nmrwat"]){
			$nmrwat=test_input($_POST["nmrwat"]);
		}

		if($_POST["keperluant"]){
			$keperluant=test_input($_POST["keperluant"]);
		}

	if($_POST)
	{
		$penerima=$_SESSION['id_peg']['id_peg'];
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
if(!empty($_POST["namat"]) && !empty($_POST["asalt"])&&!empty($_POST["nmrwat"])&&!empty($_POST["keperluant"]))
          {
			  $as = $_GET['id'];
              $sql = "UPDATE tb_mst_layanan SET nama='$namat', jenis_donatur='$asalt', detail_jenis_donatur='$detailt',  nomor_telepon='$nmrwat', keperluan='$keperluant', tanggal_catat='$tglt', jam_catat='$jamX', penerima='$penerima', jenis_keluhan='3', nama_keluhan='WHATSAPP', id_kota='$kotaid', layanan='$lokasilayanan' WHERE id_keluhan='$as'";

              if ($conn->query($sql)==TRUE){
			echo "<script> alert('Berhasil'); window.location='lihatwhatsapp.php';</script>";
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