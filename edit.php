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
<?php include "conect.php";

    $res2 = $_GET['delres'];

    $selque = "SELECT * FROM $table WHERE id = $res2";
    $sel = $con->query($selque);


    if ( !$sel === TRUE)
        {
        echo "Error: " . $selque . "<br>" . $con->error;

        }
        else
        {
            while ($row = $sel->fetch_assoc())
            {
              $id = $row['id'];
              $name = $row['name'];
              $nic = $row['nic'];
              $address = $row['address'];
              $mobile = $row['mobile'];
            }


          }


?>

<form class="row g-3" action="myedit.php ?> " method="post">

 <input type="hidden" name="id" value="<?php echo $id;?>">
  <table  style = "margin : 6%;">
    <tr> <td> <label> Name </label> </td> <td> <input type="text" name="name" value='<?php echo $name ?>' > </td> </tr>
    <tr> <td> <label> NIC </label> </td> <td> <input type="text" name="nic" value='<?php echo $nic ?>'> </td> </tr>
    <tr> <td> <label> Address </label> </td> <td> <input type="text" name="address" value='<?php echo $address ?>'> </td> </tr>
    <tr> <td> <label> Mobile </label> </td> <td> <input type="number" name="mobile" value='<?php echo $mobile ?>'> </td> </tr>
    <tr> <td> <button type="submit" class="btn btn-success"> Modify </button> </td> </tr>
</table>
</form>


</body>
</html>
