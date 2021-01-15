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
include "insert_update_delete_inventaris/koneksi.php"; 
include "insert_update_delete_inventaris/ambilstok.php";
?>

<!DOCTYPE <html>
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





    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="../dist/css/timeline.css" rel="stylesheet">
	
	 <!-- DataTables CSS -->
    <link href="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">
	
    <!-- DataTables Responsive CSS -->
    <link href="../bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="../bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<!-- menampilkan simbol-->
	<link rel="shortcut icon" href="../images/siap.png" type="image/x-icon">

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
                        <i class="fa fa-wrench fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="karyawan.php">
                                <div>
                                    <i class="fa fa-wrench fa-fw"></i> Karyawan
                                </div>
                            </a>
                        </li>
                        
                    </ul>
                    <!-- /.dropdown-alerts -->
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
                    <h1 class="page-header">Ambil Stok Barang</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Ambil Stok Inventaris
                          
                        </div>

                    	<div class="panel-body">
                        
                            <div class="row"> 
                            
                                <div class="col-lg-6"> 
                                
                                <a href="lihatinventaris.php">Data Inventaris</a>
                      <br> <br> 
            <form method="post" action="" class="form" enctype="multipart/form-data">
          <label for="nama_item_barang">Ambil Stok</label>
                   <select class="form-control" name="setok" required>
          <?php
                for($i=1;$i<1000;$i++)
                {
          ?>
          <?php
                    echo "<option value='$i'>$i</option>";
                }
          ?>
             </select><br>
                  <label for="tempat">Tempat Barang</label>
                  <input type="text" name="tempat" class="form-control" id="tempat" required="required">
                  <div class="box-footer"><br>
                <button type="submit" name="simpan" class="btn btn-primary">Submit</button>
              </div>
                
            </form>
            
		</div>
</div>
				<div class="table-responsive dataTable_wrapper">
					<table class="table table-striped table-bordered table-hover" id="dataTables-example">
						<thead>
							<tr>
								<th>No.</th>
                                
								<th>Tanggal</th>
								<th>Nama Item</th>
                                <th>Status</th>
								<th>Stok</th>
                                <th>User Input</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php
                            $id = $_GET['id'];
							$Sql = "SELECT a.*, b.* FROM tb_mst_invetaris a, tb_status b WHERE a.id=b.id AND b.id=$id";
                            
							$say = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 
							$nomor = 0;
                            
                             while($tampil = mysqli_fetch_array($say)) { 
								$nomor++;

								echo '<tr>';
									echo '<td>'.$nomor.'</td>';	
                                    
                                    
									echo '<td>'.$tampil['tanggal'].'</td>';
									echo '<td>'.$tampil['nama_item'].'</td>';	
									echo '<td>'.$tampil['status'].'</td>';	
                                    
									echo '<td>'.$tampil['stok'].'</td>';
                                    echo '<td>'.$tampil['tempat'].'</td>';		
									echo '<td>'.$tampil['penerima'].'</td>';
									echo '<td><a href="insert_update_delete_inventaris/deletestok.php?id_status='.$tampil['id_status'].'& id='.$tampil['id'].'" class="btn btn-warning"><i class="fa fa-trash"></i></a>                        
										
									</td>';
										
								echo '</tr>';
							}
							?>
						</tbody>
					</table>
				</div>
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
     <script src="../bower_components/jquery/dist/jquery.min.js"></script>


    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../bower_components/raphael/raphael-min.js"></script>
    <script src="../bower_components/morrisjs/morris.min.js"></script>
    <script src="../js/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
</script>
<script>
	$(function(){
		var duplicate=new Array(), count=0;
		$('#tambahprestasi').on('click', function(){
			count++;
			duplicate[count] = $('.form_prestasi.master_form_prestasi').clone().removeClass('master_form_prestasi');
			duplicate[count].appendTo('.master_prestasi');
		})
		$('#kurangiprestasi').on('click', function(){
			if(!count){
				alert('Form terakhir tidak bisa dihapus.');
			} else {
				duplicate[count].remove();
				count--;
			}
		})
	})
</script>
<script>
	$(function(){
		var duplicate=new Array(), count=0;
		$('#insert').on('click', function(){
			var id_pendaftar = $('#id_pendaftar').val();
			$.ajax({
				type:"POST",
				url:"simpanprestasi.php",
				data:'nama='+nama,
				success:function(data){
					$(data).appendTo('.master_prestasi');
					
				}
			});
			
		})
		$('#delete').on('click', function(){
			var hapuscek = $('input[type="checkbox"][name="pickprestasi[]"]:checked');
			if (hapuscek.length>0)
			{
				var dataprestasi = $('input[type="checkbox"][name="pickprestasi[]"]:checked').serializeArray();
				$.ajax({
					type:"POST",
					url:"hapusprestasi.php",
					data:dataprestasi,
					success:function(data){
						$.each(hapuscek,function(i,val) {s
							$(val).parent().remove();
						})
					}
				});
			}
		})
	})
</script>
<script>
	$(document).ready(function(){
		$('.table').DataTable();
	});
</script>

</body>

</html>
