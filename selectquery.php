<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
</head>
<body>
    <table style = "padding: 15px; " id="customers">
        <tr> <th> ID </th> <th> Name </th> <th> NIC </th> <th> Address </th> <th> Mobile </th></tr>
<?php include "conect.php" ?>
<?php

$selque = "SELECT * FROM $table ORDER BY id";
$sel = $con->query($selque);


if ( !$sel === TRUE)
    {
    echo "Error: " . $selque . "<br>" . $con->error;
    }
    else
    {
        while ($row = $sel->fetch_assoc())
        {
          $res1 = $row['id'];
           echo "<tr> <td>".$row['id']."</td> <td>".$row['name']."</td> <td>".$row['nic']."</td> <td>";
           echo $row['address']."</td> <td>".$row['mobile']."</td> <td> <a href = 'edit.php?delres=$res1'> <button onclick='history.back()' class='btn btn-info'> Edit
           </button> </a> </td> <td> <a href = 'del.php?delres=$res1'> <button type = 'button' name = 'del' class='btn btn-danger'> Delete </button> 
           </a> </td> </tr>";
        }
    }


  $con->close();

?>
</table>
</body>
</html>
