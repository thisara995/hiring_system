<?php

$host = "localhost";  
$user = "root";  
$password = 'Sathmini20070430@';  
$db_name = "online_hiring_system";  
  
$con = mysqli_connect($host, $user, $password, $db_name);  
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
} 

?>
