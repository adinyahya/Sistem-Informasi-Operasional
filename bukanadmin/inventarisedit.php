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

include "insert_update_delete_inventaris/updateinventaris.php";

include "insert_update_delete_inventaris/koneksi.php";
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
                       margin-right:450px;
                   }
                   </style>
                   
                   <?php
                   
                   date_default_timezone_set('Asia/Jakarta');
                   echo "<h4 class='jamcolor'>" . date("h:i:s") . "</h4>";
                   
                   ?>
                </li>
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a href="#">LMI - 
                     
                                    <?php				
			
echo $_SESSION['layanan']['layanan'];

?> 
          
                    </a>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
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
                    <h1 class="page-header">Update Inventaris</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                     
            <form method="post" action="" class="form" enctype="multipart/form-data">
             <?php
                        $sql ="SELECT * FROM tb_mst_invetaris WHERE id = '".$_GET['id']."'";
                        $result = mysqli_query($conn,$sql);
                        $row = mysqli_fetch_array($result);
                         ?>
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_item_barang">Nama Item / Barang</label>
                  <input type="text" name="nama" class="form-control" id="nama_item_barang" required="required" value ="<?php echo $row['nama_item'];?>">
                </div>
                                 <div class="form-group">
                  <label for="satuan">Satuan</label>
                  <input type="text" name="satwan" class="form-control" id="satuan" required="required" value ="<?php echo $row['satuan'];?>">
                </div>
            
                 <div class="form-group">
                  <label>Pilih Golongan</label>
                  <select class="form-control" name="nama_golongan" required="required">
                  <option value="">Pilih</option>
                   <?php
   include "insert_update_delete_inventaris/koneksi.php";

    $sql1 = "SELECT * FROM tb_mst_golongan ORDER BY nama_golongan ASC";
$result1 = mysqli_query($conn,$sql1); 

        while($row1 = mysqli_fetch_array($result1))      
       
        {
            echo '<option value="'.$row1['id_golongan'].'">'.$row1['nama_golongan'].'</option>';
        }
     
  
    ?>
                  </select>
                </div>
                    <div class="form-group">
                  <label for="deskripsi_inventaris">Deskripsi Item</label>
                  <textarea type="text" name="desk" class="form-control" id="deskripsi_inventaris"  ><?php echo $row['deskripsi'];?></textarea>
                </div>
                
        <div class="form-group">
<label >Gambar </label>
            <input type="file" name="fileToUpload" id="fileToUpload" required value="<?php echo $row['img'];?>">
              
</div>
              </div>
              <div class="box-footer">
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
