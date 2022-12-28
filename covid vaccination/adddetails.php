<?php

include 'connection.php';
    $link=mysqli_connect("localhost","root","");
    mysqli_select_db($link,"covid-vaccine");
    if(isset($_POST['submit'])){
        $vaccine_center=$_POST['vaccine_center'];
        $place=$_POST['place'];
        $dose=$_POST['dose'];

        $sql="insert into vaccine_details (vaccination_center,Place,Dose) values ('$vaccine_center','$place','$dose') ";
        $result=mysqli_query($link,$sql);
        if($result){
            
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
    <title>Add New Centers</title>
</head>
<body align="center">
    <h2>Add Details</h2>
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