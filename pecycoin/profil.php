<!DOCTYPE html>
<html>
<head>
	<title>Profile</title>
</head>
<body>
<h3>My Profile</h3>
<?php
include "koneksi.php";


	$Sql = "SELECT * FROM user";
	$say = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 
    $nomor = 0;
    while($tampil = mysqli_fetch_array($say)) { 
    echo "<p>Nama : </p>".$tampil['first']."".$tampil['last']."";
    echo "<p>Email : </p>".$tampil['email']."";
    }

?>	
<a href="gantipassword.php"><p>Sunting Password</p></a>
<a href="inputaddress.php"><p>Wallet Address</p></a>

</body>
</html>