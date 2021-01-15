<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login PECY</title>
</head>
<body>
<form action="" method="action">
<table width="400px" border="2px">
<tr>
<td><label>Email</label></td>
<td><input type="Email" name="email" required placeholder="*Email"></td>
</tr>
<tr>
<td><label>Password</label></td>>
<td><input type="Password" name="pass"></td>
</tr>	
<button type="submit">Login</button>
</table>	

</form>
</body>
</html>

 
 <?php
	 
			
            $userError="";
            $passError="";
            $user=["email"];
            $pass=["pass"];
        
            if($_SERVER["REQUEST_METHOD"]=="POST") {
             
           
				   if(empty($_POST["email"])) {
                    $userError="* Tidak boleh kosong";
                } else {
                    if($_POST["email"]) {
                        $user= test_input($_POST["email"]);
                    }
                }
               
                if(empty($_POST["pass"])) {
                    $passError="* Tidak boleh kosong";
                } else {
                    if($_POST["pass"]) {
                        $pass=test_input($_POST["pass"]);
                    }
						
                }
				
 		
               
if(!empty($_POST["email"]) && !empty($_POST["pass"]) && filter_var($email, FILTER_VALIDATE_EMAIL)){

					$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbpecy = "pecy";

                  
                    $connect = new mysqli($servername, $username, $password, $dbbreak);
					if ($connect->connect_error) 
					{
                        die("Connect Error: " . $connect->connect_error);
                    }
					else
					{
                       
                    }

					$php = "select * from user where email='$user' and pass='$pass'";
					$result = mysqli_query($connect,$php);
                    
					if (mysqli_query($connect, $php)){
					
					}
					else
					{
						echo "Error" . $php . "</br>" . mysqli_error($connect);
					}
					


					if($view = mysqli_fetch_array($result))
					{
					$_SESSION['email'] = $view;
					$_SESSION['pass'] = $view;
					$_SESSION['address'] = $view;
                   
                                        
				echo "<script> alert('Berhasil'); window.location='pages/profile.php';</script>";
                    
					}
					else
					{
						echo "<script>alert ('Email atau Password salah');</script>";
						echo "<meta http-equiv='refresh'e url='login.php'>";
						
				echo "<script> window.location='login.php';</script>";
						
						
					}
					mysqli_close($connect);
}
			}
			function test_input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }

?>

