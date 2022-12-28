

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Search</title>
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
.search{
    background-color: rgb(229, 229, 229);
    border:2px solid black;
    padding:20px 20px;
    border-radius: 10%;
}
input{
    margin:10px;
    height: 25px;
    width: 220px;
    border-radius: 6px;
}
form{
    font-family: calibri;
    font-size: x-large;
    font-weight: 400;
}
input[type="submit"]{
	border-radius: 5px;
	background-color: #ff751a;
	height: 35px;
	width: 80px;
	font-size: 20px;
    color: white;
}
table {
            margin: 0 auto;
            font-size: large;
            border: 1px solid black;
        }
 
       
 
        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }
 
        th,
        td {
            font-weight: bold;
            border: 1px solid black;
            padding: 10px;
            text-align: center;
        }
 
        td {
            font-weight: lighter;
        }
	</style>
</head>
<body align="center">
	<h2>Search Center</h2>
	<div class="search">
	<form>
		<label>Enter The Location</label><br>
		<input type="text" name="loaction" requird><br>

		<input type="submit" name="search" value="Search">
	</form>
</div>


       <table>
                    <thead>
                     <tr>
                     <th>ID</th>
                      <th>vaccine center</th>
                      <th>place</th>
                       <th>dose</th>
                    
                      
                    </tr>
                    </thead>
                   <tbody>
                  </div>
          <?php
          include 'connection.php';
          if(isset($_POST['search'])){
          $selectquery = " select * from vaccine_details where Place='$location'";
          $query = mysqli_query($con,$selectquery);
          

           while($res = mysqli_fetch_array($query))
          {
            ?>
               <tr>
               <td><?php  echo $res['ID']; ?></td>
               <td><?php echo $res['vaccine_center']; ?></td>
               <td><?php echo $res['Place']; ?></td>
               <td><?php echo $res['Dose']; ?></td>
              
               </tr>
             <?php
          }
      }
           ?>


</tbody>
</table>

</body>
</html>