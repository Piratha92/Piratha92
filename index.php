<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Document </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

 <link rel="stylesheet" href="style.css">

</head>
<body>
<?php include "conect.php" ?>

<form class="row g-3" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">

  <table  style = "margin : 6%;">
    <tr> <td> <label> Name </label> </td> <td> <input type="text" name="name"> </td> </tr>
    <tr> <td> <label> NIC </label> </td> <td> <input type="text" name="nic"> </td> </tr>
    <tr> <td> <label> Address </label> </td> <td> <input type="text" name="address"> </td> </tr>
    <tr> <td> <label> Mobile </label> </td> <td> <input type="number" name="mobile"> </td> </tr>
    <tr> <td> <button type="submit" class="btn btn-success"> Process </button> </td> </tr>
</table>
</form>
   <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $name = $_POST["name"];
      $nic = $_POST["nic"];
      $address = $_POST["address"];
      $mobile = $_POST["mobile"];
     include_once "insertquery.php";


    }
    include "selectquery.php";

   ?>


</body>
</html>
