<?php
    
    $servername = "localhost";
                    $username = "root";
                    $password = "";
                    $dboper = "oper";

                  
                    $conn = new mysqli($servername, $username, $password, $dboper);
					if ($conn->connect_error) 
					{
                        die("Connect Error: " . $conn->connect_error);
                    }
					else
					{
                    
                       
                    }

                    
$ceknama = $_GET['lay'];
$kota = mysql_query("SELECT id,name FROM tb_mst_regencies WHERE id='$ceknama' order by name");
echo "<option>-- Pilih Id Kota --</option>";
while($k = mysql_fetch_array($kota)){

            echo '<option value="'.$k['id'].'">'.$k['name'].'</option>';
}
?>