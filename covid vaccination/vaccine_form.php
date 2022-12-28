<?php 
include 'connection.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="update.css">
    <title>Apply for vaccine</title>
</head>
<body align="center">
    <h2>Vaccination Form</h2>
    <div id="form">
    <form method="post" action="">
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>Adhar Card Number</label><br>
        <input type="text" name="adhar"><br>
        <label>Vaccine center</label><br>
        <select id ="center" name="vaccine_center"> 
        	<option value="choose">Choose</option>
        	<option value="victoriya">victoriya hospital,jabalpur</option>
        	<option value="metro">Metro Hospital,jabalpur</option>
        	<option value="swastik">swastik hospital,jabalpur</option>
        	<option value="jabalpur">jabalpur hospital,jabalpur</option>
        	<option value="mahakusal">Mahakausal hospital,jabalpur</option>
        </select><br>
        <label>Booking Date</label><br>
        <select id="date" name="date">
        	<option value="choose">choose</option>
        	<option value="Today">Today</option>
        	<option value="Tomorrow">Tomorrow</option>
        	
        	</select>
        	<br>

        
       
        <input type="submit" name="submit" value="Book">
        
    </form>
</div>
<?php
  if(isset($_POST["submit"]))
{
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"covid-vaccine");
    $a=$_POST['name'];
    $b=$_POST['adhar'];
    $c=$_POST['vaccine_center'];
    $d=$_POST['date'];
    
 
    $query="INSERT INTO `vaccine_form`(`Name`, `adhar_number`, `vaccine_center`, `booking_date`) VALUES ('$a','$b','$c','$d')";
    echo "<script>alert('booked');</script>";
   
    
    mysqli_query($link, $query);
    
  }
  ?>


</body>
</html>