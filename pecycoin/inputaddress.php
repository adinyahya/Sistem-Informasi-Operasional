<!DOCTYPE html>
<html>
<head>
	<title>Pecycoin</title>
</head>
<body>
<form action="" method="action">
<table width="400" border="2px">
<tr>
<td><label>Wallet Address </label></td>
<td><input type="text" name="wallet" required size="30"></td>
</tr>

<button type="submit">Submit</button>
</table>
</form>
</body>
</html>


<?php
$wallet="";

 if($_SERVER["REQUEST_METHOD"]=="POST")
      {

          if(empty($_POST["wallet"]))
          {
             
          }
          else
          {
     		 if($_POST["wallet"]) 
      		 {
                  $wallet=test_input($_POST["wallet"]);
		  	 }
          }
         
           if(!empty($_POST["wallet"]))
          {
          		    	$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbpecy = "pecy";

                  
                    $connect = new mysqli($servername, $username, $password, $dbpecy);
					if ($connect->connect_error) 
					{
                        die("Connect Error: " . $connect->connect_error);
                    }
					else
					{
                       
                    }
              $sql = "INSERT into tbaddress set wallet='$wallet'";

                
              if ($conn->query($sql)==TRUE){
				echo "<script> alert('Berhasil'); window.location='profil.php';</script>";
			  }else{
			      echo "<script> alert('Address Sudah Digunakan'); window.location='profil.php';</script>";
				 // echo"error:".$sql."<br>".$conn->error;
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
