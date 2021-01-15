<?php 
include "koneksi.php";


      $nama="";
      $sumber="";
      $keluhan="";
      $ket="";
      $penerima="";
	  $lokasilayanan="";
      
if($_SERVER["REQUEST_METHOD"]=="POST")
{	

		if($_POST["nama"]){
			$nama=test_input($_POST["nama"]);
		}
	

		if($_POST["sumber"]){
			$sumber=test_input($_POST["sumber"]);
		}
		

		if($_POST["keluhan"]){
			$keluhan=test_input($_POST["keluhan"]);
		}
	

		if($_POST["ket"]){
			$ket=test_input($_POST["ket"]);
		}
	
	if($_POST)
	{
			$penerima= $_SESSION['id_peg']['id_peg'];

	}
	if($_POST)
	{
			$kotaid= $_SESSION['id_kota']['id_kota'];

	}
	 if($_POST)
          {
            $lokasilayanan = $_SESSION['layanan']['layanan'];
          }
	$tglt=date('y-m-d');
	
           $jamX = date("h:i:s");
	
if(!empty($_POST["nama"]) && !empty($_POST["sumber"])&&!empty($_POST["keluhan"])&&!empty($_POST["ket"]))
          {
			   $as = $_GET['id'];
              $sql = "UPDATE tb_mst_layanan SET nama='$nama', sumber_informasi='$sumber',isi_informasi='$keluhan',  tindakan='$ket', tanggal_catat='$tglt', jam_catat='$jamX', penerima='$penerima',jenis_keluhan='5', nama_keluhan='KOMPLAIN', id_kota='$kotaid', layanan='$lokasilayanan' WHERE id_keluhan='$as'";

              if ($conn->query($sql)==TRUE){
					echo "<script> alert('Berhasil'); window.location='lihatkomplain.php';</script>";
                
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