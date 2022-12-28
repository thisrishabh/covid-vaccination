<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>welcome page</title>
	<style type="text/css">
		body{
    height:95vh;
    width:100vw;
    display:flex;
    justify-content: center;
    align-items: center;
    overflow: hidden;
    flex-direction: column;
    

}
button{
	padding: 20px 20px;
	margin-left: 30px;
	margin-right: 30px;
	width: 400px;
	font-size: 27px;
	border-radius: 10px;
	background-color: #ff751a;
	color: white;
}
button:hover{
	background-color: #1a53ff;
}

	</style>

</head>
<body align="center">
	<div class="">
		<button onclick="window.location.href='../search.php';">Search Vaccination Center</button>
		<button onclick="window.location.href='../vaccine_form.php';">Apply For Vaccination</button>
	</div>
</body>
</html>