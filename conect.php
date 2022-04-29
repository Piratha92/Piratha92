<?php
 
$database = "test";
$table = "details";
$table2 = "login";
$server = "localhost";
$username = "root";
$password = "";

$con = mysqli_connect($server, $username, $password, $database);

if(mysqli_connect_errno()) 
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}

else {
    echo "Connected success";
}


?>