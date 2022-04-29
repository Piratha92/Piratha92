<?php include "conect.php" ?>
<?php

$inque = "INSERT INTO $table (name, nic, address, mobile) VALUES ('$name', '$nic', '$address', '$mobile')";

if (!$con->query($inque) === TRUE) 
    {
    echo "Error: " . $inque . "<br>" . $con->error;
    }
      
  
  $con->close();

?>