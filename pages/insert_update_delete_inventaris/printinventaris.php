<?php
 include "koneksi.php";
#ambil data
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
header("content-disposition: attachment;filename=laporan_inventaris".date('dmY').".xls");
 
$Sql = "SELECT * FROM tb_mst_invetaris";                         
	$result = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 
	$nomor = 0;
{
 echo "<table border='1px' align='center'>";    
          echo "<tr>";
          echo "<th bgcolor='#FFFFFF' align='center' width='30'>NO.</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TANGGAL</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NAMA ITEM</th>";     
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>SATUAN</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>STOK</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>GOLONGAN</th>";
          
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>DESKRIPSI</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NOMOR INVENTARIS</th>";
          
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>FOTO</th>"; 
          echo "</tr>"; 
 while($row = mysqli_fetch_array($result)) {
        
	$nomor++;
  echo "<tr>";    
  
		     echo "<td align='center' bgcolor='#FFFFFF'>".$nomor."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["tahun"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["nama_item"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["satuan"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["stok"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["id_golongan"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["deskripsi"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["nomor_inventaris"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["img"]."</td>";

         echo "</tr>";   
        
}
 echo "</table>"; 
}
  mysqli_close($conn);
?>