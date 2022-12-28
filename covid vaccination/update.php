<?php

include 'connection.php';
if(isset($_GET['updateid'])){

   $id=$_GET['updateid'];
}

    

    if(isset($_POST['submit'])){
        $vaccine_center=$_POST['vaccine_center'];
        $place=$_POST['place'];
        $dose=$_POST['dose'];

        $sql="update vaccine_details set ID=$id, vaccination_center='$vaccine_center', Place='$place', Dose='$dose' where ID=$id ";
        $result=mysqli_query($con,$sql);
        if($result){
            echo 'update successfully';
            header("location:admin/admin.php");
        }
        else{
            die(mysqli_error($con));
        }



    }

?>



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="update.css">
    <title>Update</title>
</head>
<body align="center">
    <h2>Update Details</h2>
    <div id="form">
    <form method="post" action="">
        <label>Vaccine Center</label><br>
        <input type="text" name="vaccine_center"><br>
        <label>Place</label><br>
        <input type="text" name="place"><br>
        <label>Dose</label><br>
        <input type="text" name="dose"><br>
       
        <input type="submit" name="submit" value="Update">
        
    </form>
</div>
</body>
</html>