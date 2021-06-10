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
$house_name= $_POST['house_name']; 

             

$paste= ("INSERT INTO life_saver (house_code,location,house_name) VALUES ('$_POST[house_code]','$_POST[location]','$_POST[house_name]')");
 /*$paste=("DELETE FROM life_saver WHERE house_code='101321'")*/																																																																																																																																																																																								    
             
$give=mysqli_query($plug,$paste);

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
<style type="text/css">
.well-lg
{
	text-align: center;
	background-color: green;
	padding: 20px;
	margin-top: 5px;
	 text-shadow:7px 7px 10px gray;
}

input[type="text"]
{

margin: 10px;
padding: 05px;


}
input[type="submit"]
{
	background: 200px;
	font-size: 20px;
	text-transform: lowercase;
	background-color: white;

}
a:hover
{
	color: red;
}
</style>


<!DOCTYPE html>
<html>
<head>
	<title>Life Saver - Add</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<main class="container">
	<div class="well well-lg"><h1>Add New Resident</h1></div>
	<div class="main">
		
		<form action="add.php" method="post">
			<div class="form-group">
			    <label for="house_code">House Code:</label>
			    <input type="text" class="form-control" id="house_code" name="house_code" required="required"/>
			</div>

			<div class="form-group">
			    <label for="location">Location:</label>
			    <input type="text" class="form-control" id="location" name="location" required="required"/>
			</div>

			<div class="form-group">
			    <label for="house_name">House Name:</label>
			    <input type="text" class="form-control" id="house_name" name="house_name" required="required"/>
			</div>
			<input type="submit" name="submit" class="btn btn-primary" value="Submit"/> 
			<a href="index.php" class="btn">Cancel</a>
			
		</form>
	</div>
	<div class="well well-lg"><h1>Copyright &copy; Life Saver 2017. All Rights Reserved</h1></div>
	</main>
</body>
</html>
