<?php
include 'connection.php';

if(isset($_GET['deleteid'])){

	$id=$_GET['deleteid'];

	$sql="delete from vaccine_details where ID=$id";
	$result=mysqli_query($con,$sql);
	if($result){
		header("location:admin/admin.php");

	}
	else{
		die(mysqli_error($con));
	}
}

?>