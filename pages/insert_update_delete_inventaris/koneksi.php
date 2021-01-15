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

                    ?>