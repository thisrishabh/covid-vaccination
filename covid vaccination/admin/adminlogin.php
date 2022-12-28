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
    <link rel="stylesheet" type="text/css" href="adminlogin.css">
    <title>Login Page</title>
</head>
<body align="center">
    <h2>Admin Login</h2>
    <div id="form">
    <form method="post">
        <label>Email</label><br>
        <input type="email" name="email"><br>
        <label>Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</div>

<?php
session_start();


if(isset($_POST['login']))
  {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $query=mysqli_query($con,"select * from adminlogin where  email='$email' && password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
    
     header('location:admin.php');
    }
    else{
    echo "<script>alert('Invalid Details.');</script>";          
    }
  }
  ?>

</body>
</html>