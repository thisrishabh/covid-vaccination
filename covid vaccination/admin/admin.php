<?php

$username = "root";
$password="";
$server ="localhost";
$db = "covid-vaccine";


$con = mysqli_connect($server,$username,$password,$db);

/*if($con)
//echo "Connection successful";
{
    ?>
    <script>
        alert('Connection Successful');
    </script>
    <?php
}
else
{
    echo "No connection";
    die("no connection".mysqli_connect_error());//exit
}*/



?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Page</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="../adddetails.php">Add details</a></button>
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vaccination Center</th>
      <th scope="col">Place</th>
      <th scope="col">Dose</th>
      <th scope="col">Operations</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="select * from vaccine_details";
    $result=mysqli_query($con,$sql);
    if($result){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['ID'];
            $vaccine_center=$row['vaccination_center'];
            $place=$row['Place'];
            $dose=$row['Dose'];

            echo '<tr>
      <th scope="row">'.$id.'</th>
      <td>'.$vaccine_center.'</td>
      <td>'.$place.'</td>
      <td>'.$dose.'</td>
      <td><button class="btn btn-primary"><a href="../update.php?updateid='.$id.'">Update</a></button>
      <td><button class="btn btn-danger"><a href="../delete.php?deleteid='.$id.'">Delete</a></button>
    </tr>';

        }

    }
    ?>

  </tbody>
</table>
</div>
</body>
</html>