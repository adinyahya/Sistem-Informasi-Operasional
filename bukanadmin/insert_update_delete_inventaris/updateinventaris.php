<?php 
include "koneksi.php";
	  $error="";
      $namaError="";
	  $satwanError="";
      $golonganError="";
      $deskError="";
	  
     $gambarError="";
	 $penerima="";
      $nama="";
	  $satwan="";
      $nama_golongan="";
      $desk="";
	  $tglinven="";
     $tgl="";
	 $kotaid="";

	 $lmi="LMI";
	 $titik=".";
	
      
if($_SERVER["REQUEST_METHOD"]=="POST")
{	
	if(empty($_POST["nama"]))
	{
		$namaError="* tidak boleh kosong";
	}else
	{
		if($_POST["nama"]){
			$nama=test_input($_POST["nama"]);
		}
	}
	if(empty($_POST["satwan"]))
	{
		$satwanError="* tidak boleh kosong";
	}else
	{
		if($_POST["nama"]){
			$satwan=test_input($_POST["satwan"]);
		}
	}

	if(empty($_POST["nama_golongan"]))
	{
		$golonganError="* tidak boleh kosong";
	}else
	{
		if($_POST["nama_golongan"]){
			$nama_golongan=test_input($_POST["nama_golongan"]);
		}
		
	}
	if(empty($_POST["desk"]))
	{
		$deskError="* tidak boleh kosong";
	}else
	{
		if($_POST["desk"]){
			$desk=test_input($_POST["desk"]);
		}
	}
	if($_POST)
	{
		$penerima=$_SESSION['id_peg']['id_peg'];
	}
	if($_POST)
	{
		$kotaid=$_SESSION['id_kota']['id_kota'];
	}
	
          $ekstensi_diperbolehkan	= array('jpg','jpeg','png');
      		$namafile = $_FILES['fileToUpload']['name'];
      		$x = explode('.', $namafile);
      		$ekstensi = strtolower(end($x));
      		$ukuran	= $_FILES['fileToUpload']['size'];
      		$file_tmp = $_FILES['fileToUpload']['tmp_name'];

      		if(in_array($ekstensi, $ekstensi_diperbolehkan) === true){
      			if($ukuran > 10440704407)
				{
      				if(!$query){
                $gambarError = "GAGAL MENGUPLOAD GAMBAR!";
	
      				}
      			}else{
      			    $gambarError = "UKURAN FILE TERLALU BESAR";

      			}
				
      		}else{
      			$gambarError =  "EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN";
      		}
			

   $tgl = date('Y-m-d');
   $tglinven = date('Y');	
if(!empty($_POST["nama"]) && !empty($_POST["nama_golongan"]) &&!empty($_POST["desk"])&&!empty($_POST["satwan"]) && !empty($gambarError))
          {
			   $as = $_GET['id'];
              $sql = "UPDATE tb_mst_invetaris SET nama_item='$nama', satuan='$satwan', id_golongan='$nama_golongan',deskripsi='$desk', tahun='$tgl', id_kota='$kotaid', img='$namafile' WHERE id='$as'";
				

				
				
		      if ($conn->query($sql)==TRUE){
				
					
						move_uploaded_file($file_tmp,'img/'.$namafile);  
				  	
				$getQuery = "SELECT * FROM `tb_mst_invetaris`";
				
				$getQuery = $conn->query($getQuery);
				if(count($getQuery) > 0) {
					foreach($getQuery as $value) {
						$newId = $value['id'];
						$newIdKota = $value['id_kota'];
						$newGolongan = $value['id_golongan'];
						$newTahun = $tglinven;
					}
					$getNomerInventaris = 'LMI'.'.'.$newIdKota.'.0'.$newGolongan.'.000000'.$newId.'.'.$newTahun;
					
					$result = "UPDATE tb_mst_invetaris SET nomor_inventaris='$getNomerInventaris' where id='$newId'";
					
					$r = mysqli_query($conn, $result);
					  }
					  
			echo "<script> alert('Berhasil'); window.location='lihatinventaris.php'; </script>";
				
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