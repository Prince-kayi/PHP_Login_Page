<html>
<head>
<title>connecting the database</title>
<?php


if(isset($_POST['submit']))
{

$dbhost="localhost";
$user="root";
$pass="";
$db="details";
$plug= new mysqli($dbhost,$user,$pass,$db) or die ('cannot connect');
echo "connected to database <br>";
  
$Name = $_POST['Name'];
$Email = $_POST['Email'];                
             

$code= ("INSERT INTO personal ('Name','Email)VALUES ('$Name','$Email' )");      
             
$give=mysqli_query($plug,$code);

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
.submit {
text-align: right;}
legend {
background-color:blue;
border: 1px solid #dcdcdc;
border-radius: 10px;
padding: 10px 20px;
text-align: left;
text-transform: uppercase;}
blockquote {
float:right;
width: 275px;
font-size: 130%;
font-style: bold;
font-family: Georgia, Times, serif;
margin: 0px 0px 10px 10px;
padding: 10px;
border-top: 1px solid #665544;
border-bottom: 1px solid #665544;}
</style>
</head>
<body bgcolor="brown">
	<form method="POST" action="">
	<fieldset>
	<legend>Your Details</legend>	
	<label>Name:
	</label>
	<input type="text" name="Name" required="required"/></br></br>
	<label> Email: </label>
	<input type="text" name="Email" required="required"/></br>
	 <input type="submit"  name="submit" value="submit">
	</fieldset>

	<fieldset>
    <legend>Your Review</legend>
    <i>How did you hear about us </i> 
    <select name="about"></br>
    <option value="Google">Google</option>
    <option value="newspaper">newspaper</option>
    <option value="friend">friend</option>
    </select>
    <form>
    <p id="pullquote"> woulid you visit us again?</p>
    <input type="radio" name="visit" value="Yes"/>Yes
    <input type="radio" name="visit" value="No"/>No
    <input type="radio" name="visit" value="Maybe/">Maybe
   
    <form>
    <p>Comments: </p>
    <textarea name="text" required="required">write something</textarea>
    </form>
    <form>
    </br>
</br>
     <label>
<input type="checkbox" name="subscribe" checked="checked" />
Sign me up for email updates </br>
    

    </label>
	</fieldset>
	</form>

<h1>The Evolution of the Bicycle</h1>
<blockquote>"Life is like riding a bicycle.
To keep your balance you must keep moving." -
Albert Einstein</blockquote>
<p>In 1817 Baron von Drais invented a walking
machine that would help him get around the royal
gardens faster: two same-size in-line wheels, the
front one steerable, mounted in a frame ... </p>

</body>
</html>