<!DOCTYPE html>
<html>
<head>
	<title>Pecycoin</title>
</head>
<body>
<form action="" method="action">
<table width="400" border="2px">
<tr>
<td><label>First</label></td>
<td><input type="text" name="first" required size="30"></td>
</tr>
<tr>

<td><label>Last</label></td>
<td><input type="text" name="last" required size="30"></td>
</tr>
<tr>
<td><label>Email</label></td>
<td><input type="Email" name="email" required size="30"></td>
</tr>
<tr>
<td><label>Password</label></td>
<td><input type="Password" name="pass" required size="30"></td>
</tr>
<tr>
<td><label>Verifikasi Password</label></td>
<td></td><input type="Password" name="verpass" required size="30"></tr>

<button type="submit">Submit</button>
</table>
</form>
</body>
</html>


<?php
$first="";
$last="";
$email="";
$pass="";
$verpass="";

$md5Ex="";
 if($_SERVER["REQUEST_METHOD"]=="POST")
      {

          if(empty($_POST["first"]))
          {
             
          }
          else
          {
     		 if($_POST["first"]) 
      		 {
                  $first=test_input($_POST["first"]);
		  	 }
          }
          if(empty($_POST["last"]))
          {
             
          }
          else
          {
     		 if($_POST["last"]) 
      		 {
                  $first=test_input($_POST["last"]);
		  	 }
          }
           if(empty($_POST["email"]))
          {
             
          }
          else
          {
		  if($_POST["email"]) {
                  $email=test_input($_POST["email"]);
		  }
          }
          if(empty($_POST["pass"]))
          {
              
          }
          else
          {
		  if($_POST["pass"]) {
                  $pass=test_input($_POST["pass"]);
		  }
          }
		  
		  
		  if($_POST["verpass"] != $_POST["pass"])
          {
              $md5Ex="* Password Tidak Sama !";
              
          }else 
          {
              if($_POST["verpass"] == $_POST["pass"]) {
                      $editverpass= md5($_POST["verpass"]);
          }
          }
           if(!empty($_POST["email"]) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($_POST["last"]) && !empty($_POST["first"]) && !empty($_POST["pass"])  && !empty($_POST["verpass"]) && ($_POST["pass"] == $_POST["verpass"]))
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
              $sql = "INSERT into regispecy set first='$first', $last='last', email='$email', password='$pass', verpass='$verpass' ";

                
              if ($conn->query($sql)==TRUE){
				echo "<script> alert('Berhasil'); window.location='index.php';</script>";
			  }else{
			      echo "<script> alert('Email anda sudah terdaftar'); window.location='index.php';</script>";
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
