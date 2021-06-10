<?php
if(isset($_POST['submit']))
{

$dbhost="localhost";
$user="root";
$pass="";
$db="details";
$plug= new mysqli($dbhost,$user,$pass,$db) or die ('cannot connect');
echo "connected to database <br>";


  
$house_code = $_POST['house_code'];
$location = $_POST['location'];
$house_name=$_POST['house_name'];																																																																																																																																									

             
																																																	
$copy=("DELETE FROM life_saver WHERE house_name=''");               
$give=mysqli_query($plug,$copy);

if($give)
{
    echo "updated data";
}
else
{
    echo "data not updated";
}
}

	

?>


<!DOCTYPE html>
<html>
<head>
	<title>Life Saver - Results</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main class="container">
	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Search Results</h1></div>
	<div class="main">	
	
		
	<a href="index.php" class="btn btn-primary">Go Back</a>
	</div>	
	<div class="well well-lg" style="text-align: center; background-color: grey; padding: 20px; margin-top: 5px;"><h1>Copyright &copy; Life Saver 2017. All Rights Reserved</h1></div>
	</main>
</body>
</html>