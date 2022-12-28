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
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="signup.css">
</head>
<body align="center">
    <h2>Registration</h2>
    <div id="form">
    <form method="post" action="">
        <label>Enter Full Name</label><br>
        <input type="text" name="name"><br>
        <label>Enter Email</label><br>
        <input type="email" name="email"><br>
        <label>Enter Mobile Number</label><br>
        <input type="text" name="mobileno"><br>
        <label>Enter Password</label><br>
        <input type="password" name="password"><br>
        <label>Confirm Password</label><br>
        <input type="password" name="cpassword"><br>
        <input type="submit" name="submit" value="SignUp">
        
    </form>
</div>

<?php
  if(isset($_POST["submit"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"covid-vaccine");
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['mobileno'];
    $d=$_POST['password'];
    $e=$_POST['cpassword'];
   

   
  
    $query="INSERT INTO `userlogin` (`name`, `email`, `mobileno`, `password`, `cpassword`) VALUES ('$a', '$b', '$c', '$d', '$e')";
?>
    <script>
        alert('Registeration Successful');
    </script>
    <?php
    header("location:user.php");
    
    mysqli_query($link, $query);
    
  }
  ?>

</body>
</html>