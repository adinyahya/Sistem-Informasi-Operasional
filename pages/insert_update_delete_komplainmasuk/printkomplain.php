<?php
 include "koneksi.php";
#ambil data
header("Content-Type: application/force-download");
header("Cache-Control: no-cache, must-revalidate");
header("Expires: Sat, 26 Jul 2010 05:00:00 GMT"); 
header("content-disposition: attachment;filename=laporan_komplain_masuk".date('dmY').".xls");
 
$Sql = "SELECT * FROM tb_mst_layanan where jenis_keluhan='5'";                         
	$result = mysqli_query($conn, $Sql)  or die ("Query salah : ".mysqli_error($conn)); 
	$nomor = 0;
{
 echo "<table border='1px' align='center'>";    
          echo "<tr>";
          echo "<th bgcolor='#FFFFFF' align='center' width='30'>NO.</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>TANGGAL</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>NAMA</th>";     
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>SUMBER INFORMASI</th>";  
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>KELUHAN</th>";
          echo "<th bgcolor='#FFFFFF' align='center' width='200'>KETERANGAN</th>"; 
          echo "</tr>"; 
 while($row = mysqli_fetch_array($result)) {
        
	$nomor++;
  echo "<tr>";    
  
		     echo "<td align='center' bgcolor='#FFFFFF'>".$nomor."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["tanggal_catat"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["nama"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["sumber_informasi"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["isi_informasi"]."</td>";
		     echo "<td align='center' bgcolor='#FFFFFF'>".$row["tindakan"]."</td>";

         echo "</tr>";   
        
}
 echo "</table>"; 
}
  mysqli_close($conn);
?>