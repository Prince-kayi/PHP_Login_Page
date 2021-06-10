<html>
<head>
<title>this php is bullshit</title>
<?

?>
<style type="text/css">
input.submit:hover{ background-color: blue}
legend {
background-color:green;
border: 1px solid #dcdcdc;
border-radius: 10px;
padding: 10px 20px;
text-align: left;
text-transform: uppercase;}
blockquote {
color: blue;
float:right;
width: 275px;
font-size: 130%;
font-style: bold;
font-family: Georgia, Times, serif;
margin: 0px 0px 10px 10px;
padding: 10px;
border-top: 1px solid #665544;
border-bottom: 1px solid #665544;}
h1{
text-align: center;	
text-shadow:7px 7px 10px yellow;
}
body {
width: 960px;
margin: 0 auto;}
#content {
overflow: auto;
height: 100%;}
 {
background-color: lightblue;
padding: 10px;
margin: 10px;}
#nav{
	text-align: center;
}
#footer{
	text-align: center;
}
#feature{
	text-align: center;
}
.column1, .column2, .column3 {
background-color: gray;
width: 300px;
float: left;
text-align: center;
margin: 10px;}
li {
display: inline;
padding: 5px;}
#front textarea{
	text-indent: center;
}
</style>
</head>
<body bgcolor="gray">
	<div id="header">
<h1>TUTORS_ZONE</h1>
<div id="nav">
<ul>
<li><a href="http://localhost/prince/kai.php">Home</a></li>
<li><a href="http://localhost/prince/pipe.php">sign up</a></li>
<li><a href="http://localhost/prince/boje.php">Services</a></li>
<li><a href="http://localhost/prince/js.php">About</a></li>
<li><a href="http://localhost/prince/db.php">Contact</a></li>
</ul>
</div>
</div>
<div id="content">
<div id="feature">
<a href="http://localhost/prince/flashi.php">login</a>
</div>

</br>
<form>
<fieldset>
<legend>More information</legend>
  <p>please send us a picture of yourself and qualifications</p>
	 <input type="file"  name="submit"/></br>
	 <input type="submit" name="upload" value="upload"/>

</fieldset>	
<fieldset>
<legend>Type of service</legend>
<p>Are you a tutor?
	<input type="radio" name="option" value="yes"/>Yes
	<input type="radio" name="option" value="No"/> No </br>
 if yes, how long have you been tutoring?
   <select name="years">
   	<option></option>
    <option>1 year</option>
    <option>2 years</option>
    <option>4 years</option>
    <option>8 years</option>
   </select> </br>
 what subjects can you tutor?
 <select name="subjects">
 <option></option>  
 <option>Maths</option>
 <option>Physics</option>
 <option>Chemistry</option>
 <option>accounting</option>
</select>
   </p>
  <input type="submit"  name="submit" value="submit"/></br>	
  <blockquote>"Life is like riding a bicycle.
To keep your balance you must keep moving." -
Albert Einstein</blockquote>
</fieldset>
</form>

</div>
<div id="footer">
<h3>&copy; Copyright 2021</h3>
</div>
</body>
</html>