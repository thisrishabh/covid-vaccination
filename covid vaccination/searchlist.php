<?php 
include 'connection.php';
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
        
    
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Vaccination Center</th>
      <th scope="col">Place</th>
      <th scope="col">Dose</th>
      
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="select * from vaccine_details where Place=$location";
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
      
    </tr>';

        }

    }
    ?>

  </tbody>
</table>
</div>
</body>
</html>