<?php
include "conect.php";

echo "</br>";

$res2 = $_GET['delres'];
echo $res2;

$sql = "DELETE FROM $table WHERE id=$res2";

if ($con->query($sql) === TRUE)
{
  echo "Record deleted successfully";
  header("location:index.php");
}
else
{
  echo "Error deleting record: " . $con->error;
}

$conn->close();


?>
