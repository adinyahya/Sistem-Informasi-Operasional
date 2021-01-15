<?php
session_start();
session_destroy();

?>
<?php session_start();
if (isset($_SESSION['id_user'])){
header ("location:pages/bukutamu.php");
}
?>
<html>
<head>
<title>Login LMI </title>

<link rel="icon" type="image/png" href="img/favicon.png" />
    
 <link rel="stylesheet" href="dist/css/loginx.css">
</head>
<body>

<form method="post" action="ceklogin.php">
<div class='login'>
  <div class='top'>
    <h2>Login LMI</h2>
  </div>
  <div class='id_user'>
    <input name='id_user' placeholder='*Username' required="required" type='text'>
  </div>
  <div class='password'>
    <input name='password' placeholder='*Password' required="required" type='password'>
  </div>
  <div class='remlog'>
    <div class='remember'>
    
      <input checked='checked' id='remember' name='remember' type='checkbox'>
      <label for='remember'></label>remember me
      
    </div>
    <input type='submit' value='Sign in' >
  </div>
  <div class='forgot'>
  <style>
  .geser{
      margin-left:300px;
  }
  </style>
  <div class="geser">
  <a href="index.php">Back</a>
  </div>
  </div>
</div>
</form>
<script src="dist/js/loginx.js"></script>
</body>
</html>