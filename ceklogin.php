 <?php
	session_start();
?>
 <?php
	 
			
            $userError="";
            $passError="";
            $user=["id_user"];
            $pass=["password"];
        
            if($_SERVER["REQUEST_METHOD"]=="POST") {
             
           
				   if(empty($_POST["id_user"])) {
                    $userError="* Tidak boleh kosong";
                } else {
                    if($_POST["id_user"]) {
                        $user= test_input($_POST["id_user"]);
                    }
                }
               
                if(empty($_POST["password"])) {
                    $passError="* Tidak boleh kosong";
                } else {
                    if($_POST["password"]) {
                        $pass=test_input($_POST["password"]);
                    }
						
                }
				
 		
               
if(!empty($_POST["id_user"]) && !empty($_POST["password"])){

					$servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dbbreak = "oper";

                  
                    $connect = new mysqli($servername, $username, $password, $dbbreak);
					if ($connect->connect_error) 
					{
                        die("Connect Error: " . $connect->connect_error);
                    }
					else
					{
                       
                    }

					$php = "select * from tb_user where id_user='$user' and password='$pass'";
					$result = mysqli_query($connect,$php);
                    
					if (mysqli_query($connect, $php)){
					
					}
					else
					{
						echo "Error" . $php . "</br>" . mysqli_error($connect);
					}
					


					if($view = mysqli_fetch_array($result))
					{
					$_SESSION['nama_user'] = $view;
					$_SESSION['password'] = $view;
					$_SESSION['id_user'] = $view;
                    $_SESSION['hak_akses'] = $view['hak_akses'];
                    $_SESSION['id_peg'] = $view;
                    $_SESSION['id_kota'] = $view;
                    $_SESSION['nama_user'] = $view;
                    $_SESSION['layanan'] = $view;
                                        
				echo "<script> alert('Berhasil'); window.location='pages/bukutamu.php';</script>";
                    
					}
					else
					{
						echo "<script>alert ('Username atau Password salah');</script>";
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

