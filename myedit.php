<?php
include "conect.php";
$name = $nic = $address = $mobile = $res3 = "";
 if ($_SERVER["REQUEST_METHOD"] == "POST")
 {
   $res2 = $_POST["id"];

   $name = $_POST["name"];
   $nic = $_POST["nic"];
   $address = $_POST["address"];
   $mobile = $_POST["mobile"];


 echo "</br>";


 $sql = "UPDATE $table SET name= '$name', nic= '$nic', address= '$address', mobile= '$mobile' WHERE id = $res2";

 if ($con->query($sql) === TRUE)
 {
header("location:index.php");
   //header("location:index.php");
 }
 else
 {
   echo "Error modifying record: " . $con->error;
 }
}

 $con->close();




?>
