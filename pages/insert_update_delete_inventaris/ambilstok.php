<?php 
	  $error="";
      $namaError="";
	  $satwanError="";
	  $setokError="";
      $golonganError="";
      $deskError="";
	 $tempatError=""; 
     $gambarError="";
	 $penerima="";
      $nama="";
	  $satwan="";
	  $setok="";
      $nama_golongan="";
      $desk="";
	  $tglinven="";
     $tgl="";
	 $kotaid="";
	 $tempat="";
	 $lmi="LMI";
	 $titik=".";
	
      
if($_SERVER["REQUEST_METHOD"]=="POST")
{	
	
	if(empty($_POST["setok"]))
	{
		$setokError="* tidak boleh kosong";
	}else
	{
		if($_POST["setok"]){
			$setok=test_input($_POST["setok"]);
		}
	}
	if(empty($_POST["tempat"]))
	{
		$tempatError="* tidak boleh kosong";
	}else
	{
		if($_POST["tempat"]){
			$tempat=test_input($_POST["tempat"]);
		}
	}
	
	if($_POST)
	{
		$penerima=$_SESSION['id_peg']['id_peg'];
	}

	

   $tgl = date('Y-m-d');	
if(!empty($_POST["setok"]))
          {
			$idd = $_GET['id'];
              $sql = "INSERT INTO tb_status SET id='$idd', stok='$setok', penerima='$penerima' ,tempat='$tempat', tanggal='$tgl', status='keluar'";
				

				
				
		      if (mysqli_query($conn, $sql)){
                    $sql = "SELECT SUM(stok) FROM tb_status WHERE id='$idd' AND status='masuk'";
                    
                    $msk = mysqli_fetch_array(mysqli_query($conn, $sql));

                    $sql = "SELECT SUM(stok) FROM tb_status WHERE id='$idd' AND status='keluar'";
                    
                    $klr = mysqli_fetch_array(mysqli_query($conn, $sql));
                    $hsl= $msk['SUM(stok)']-$klr['SUM(stok)'];

                    $sql = "UPDATE tb_mst_invetaris SET stok='$hsl' WHERE id='$idd'";
                    if (mysqli_query($conn, $sql)){
							echo "<script> alert('Berhasil'); window.location='lihatinventaris.php'; </script>";
			
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