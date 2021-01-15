<?php

session_start();
error_reporting(0);
error_reporting(E_ALL);
if (isset($_SESSION['hak_akses']))
{
    if($_SESSION['hak_akses'] == "1")
    {
        
            header ("location:../pages/bukutamu.php"); 
    }
    else if($_SESSION['hak_akses'] == "2")
    {
    
    }
}else if(!isset($_SESSION['hak_akses']))
{
header ("location:../login.php");
}

include "insert_update_delete_whatsappmasuk/insertwhatsappmasuk.php";

include "insert_update_delete_whatsappmasuk/koneksi.php";
?>
<!DOCTYPE <html></html>

<html lang="en">

<head>
<link rel="icon" type="image/png" href="../img/favicon.png" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Oprasional LMI</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">LMI</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">OPRASIONAL LMI</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                 <li class="dropdown">
                   <style>
                   .jamcolor
                   {
                       color:black;
                       margin-right:300px;
                   }
                   </style>
                   
                   <?php
                   
                   date_default_timezone_set('Asia/Jakarta');
                   echo "<h4 class='jamcolor'>" . date("h:i:s") . "</h4>";
                   
                   ?>
                </li>
                <!-- /.dropdown -->
               
       <li class="dropdown">
                    <a href="#">LMI - 
                     
                                    <?php				
			
echo $_SESSION['layanan']['layanan'];

?> 
          
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> 
                        <?php				
	
echo $_SESSION['nama_user']['nama_user'];

?> 
                        
                        </a>
                        </li>
                        <li><a href="setting.php"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <style>
                            .colorp
                            {
                                color:red;
                                
                                width:250px;
                                height:39px;
                                background-color:pink;
                                display:inline-block;
                                list-style-type:none;
                            }
                            </style>
                        <li>
                            <a href="laporansekarang.php" class="colorp"> <i class="fa fa-warning fa-fw"></i> Laporan Terkini</a>
                        </li>
                        <li>
                            <a href="bukutamu.php"><i class="fa fa-edit fa-fw"></i> Buku Tamu</a>
                        </li>
                        <li>
                            <a href="teleponmasuk.php"><i class="fa fa-share fa-fw"></i> Telepon Masuk</a>
                        </li>
                        <li>
                            <a href="suratmasuk.php"><i class="fa fa-envelope fa-fw"></i> Surat Masuk</a>
                        </li>
                         <li>
                            <a href="whatsappmasuk.php"><i class="fa fa-whatsapp fa-fw"></i> Whatsapp</a>
                        </li>
                         <li>
                            <a href="komplainmasuk.php"><i class="fa fa-folder fa-fw"></i> Komplain</a>
                        </li>
                         <li>
                            <a href="inventaris.php"><i class="fa fa-book fa-fw"></i> Inventaris</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-files-o fa-fw"></i> Laporan<span class="fa arrow"></span></a>
                             <ul class="nav nav-second-level">
            <li><a href="lihattamu.php"><i class="fa fa-circle-o"></i> Buku Tamu</a></li>
            <li><a href="lihattelepon.php"><i class="fa fa-circle-o"></i> Telepon Masuk</a></li>
            <li><a href="lihatsurat.php"><i class="fa fa-circle-o"></i> Surat Masuk</a></li>
            <li><a href="lihatwhatsapp.php"><i class="fa fa-circle-o"></i> Whatsapp</a></li>
            <li><a href="lihatkomplain.php"><i class="fa fa-circle-o"></i> Komplain</a></li>
            <li><a href="lihatinventaris.php"><i class="fa fa-circle-o"></i> Inventaris</a></li>
          </ul>
                            <!-- /.nav-second-level -->
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Whatsapp Masuk</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Registrasi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                      <form method="post" action="" class="form" enctype="multipart/form-data">
                            <div class="box-body">
                <div class="form-group">
                  <label for="nama_whatsappmasuk">Nama PeWhatsapp</label>
                  <input name="namat" type="text" class="form-control" required id="nama_whatsappmasuk" placeholder="*isikan nama lengkap">
                </div>

<style>
  .form-controlxyz
      {
  display:none;
 width:100%;
 height:36px;
 
 }
 .form-controlxyz:focus{
	 border-color:green;
	 outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	 box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #fff
	 }
 .form-controlxyz::-moz-placeholder{
	 color:#999;opacity:1
	 }
 .form-controlxyz:-ms-input-placeholder{
	 color:#999
	 }
    </style>
    <script type="text/javascript">
    function showHide(){
        var select = document.getElementById("sal");
        var hideninp= document.getElementsByClassName("form-controlxyz");
        
        for(var i=0;i !=hideninp.length;i++)
            {
                if(select.value =="Non Donatur"){
                    hideninp[i].style.display = "inline";
                }else
                    {
                        hideninp[i].style.display = "none";
                    }
                    
            }
    }
    </script>

                 <div class="form-group">
                  <label>Asal</label>
                  <select class="form-control" id="sal" name="asalt" onclick="showHide()">
                    <option value="Donatur">Donatur</option>
                    <option value="Non Donatur">Non Donatur</option>
                  </select>
                </div>   
                <div class="form-group">
                  <label for="detail_whatsappmasuk" class="form-controlxyz">Detail Asal</label>
                  <input name="detailt" type="text" class="form-controlxyz" id="detail_whatsappmasuk" placeholder="*isikan nomor telepon">
                </div>
                <div class="form-group">
                  <label for="nomor_whatsappmasuk">Nomor Whatsapp</label>
                  <input type="text" name="nmrwat" class="form-control" required id="nomor_whatsappmasuk" placeholder="*isikan nomor telepon">
                </div>
                <div class="form-group">
                  <label for="keperluan_whatsappmasuk">Keperluan</label>
                  <textarea type="text" name="keperluant" class="form-control" required id="keperluan_whatsappmasuk" placeholder="*Isikan Keperluan"></textarea>
                </div>
                
              
<style>
#tmpd
{
	display :none;
}
 .form-controlx
      {
  display:none;
 width:100%;
 height:84px;
 
 }
 .form-controlx:focus{
	 border-color:green;
	 outline:0;-webkit-box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px rgba(102,175,233,.6);
	 box-shadow:inset 0 1px 1px rgba(0,0,0,.075),0 0 8px #fff
	 }
 .form-controlx::-moz-placeholder{
	 color:#999;opacity:1
	 }
 .form-controlx:-ms-input-placeholder{
	 color:#999
	 }
    </style>
			<script type="text/javascript">
			document.getElementById("tmpd").style.display="none";
			 function show(){
        var select = document.getElementById("tmp");
        var hideninp= document.getElementsByClassName("form-controlx");
        
        for(var i=1;i != hideninp.length;i++)
            {
                if(select.value =="komplain")
                    hideninp[i].style.display = 'inline';
					document.getElementById("tmp").style.display="none";
                    document.getElementById("tmpd").style.display="inline";
            
			}
			 }
			 
			  function hide(){
        var select = document.getElementById("tmpd");
        var hideninp= document.getElementsByClassName("form-controlx");
        
        for(var i=1;i != hideninp.length;i++)
            {
                if(select.value =="batal"){
                    hideninp[i].style.display = 'none';
					document.getElementById("tmpd").style.display="none";
                    document.getElementById("tmp").style.display="inline";
                }
                    
            
    }
			 }
			</script>	

				
					<div class="form-controlx">
				 <label ></label>
				 
				 </div>
				   <div class="form-controlx">
                  <h3 >KOMPLAIN</h3>
				 
                </div><br>
                <div class="form-controlx">
                  <label for="sumber_informasi _komplain">Sumber Informasi</label>
                  <input type="text" name="sumber" class="form-controlx" id="sumber_informasi" placeholder="*isikan sumber informasi lengkap">
                </div>
                <div class="form-controlx">
                  <label for="keluhan_komplain">Keluhan</label>
                  <textarea type="text" name="keluhan" class="form-controlx" id="keluhan_komplain"  placeholder="*Isikan perihal keluhan"></textarea>
                </div>
                <div class="form-controlx">
                  <label for="keterangan_komplain">Keterangan</label>
                  <textarea type="text" name="ket" class="form-controlx" id="keluhan_komplain" name="keterangan" placeholder="*Isikan keterangan"></textarea>
                </div>
				
				
				
   
				
				<div class="form-group">             
               <input type=button onclick="show()" value="komplain" class="btn btn-primary" id="tmp" ></input>
               <input type=button onclick="hide()" value="batal" class="btn btn-primary" id="tmpd" ></input>
			   
			  

				

                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
