<html>
<head>
	<?php
?>

<style type="text/css">
.top-nav
{
	display: :block;
	background-color: purple;
}
.top-nav ul
{
	margin: 0;
	padding: 0;
	position:absolute;
	right: 6%;
	top:2%;
}
.top-nav li
{
	display: inline-block;
	margin-left:28px; 
}
.top-nav ul li a
{
	color: black;
	text-indent: none;
	font-size: 20px;

}
.top-nav ul li a:hover
{
	color: brown;
     
}
.btn-login
{
	border: 1px solid #ffffff;
	padding: 6px 14px;
}
.container
{
	width: 100%;
	margin: 0 auto;
	position: relative;
	top:20%;
}
.container-log
{
	width: 80%;
	margin: 0 auto;
	text-align: center;
}
.container-log input
{
	width: 200px;
	height: 30px;
	border:  1px solid #cccccc;
	background-color: #f5f5f5;
	font-size: 18px;
	display: block;
	position: relative;
	margin: 20px auto;
}
.container-log h2
{
	font-size: 40px;
	text-transform: uppercase;
}
input::placeholder
{
color: #a1a1a1;
font-size: 20px;
}
#submit
{
    width: 200px;
	height: 42px;
	border:  1px solid blue;
	background-color: blue;
	font-size: 19px;
	
	margin: 20px 0px 0px 0px ;	
}
#submit:hover
{
    
	border:  1px solid red;
	background-color: red;
	
	
	
}
.options a
{
	color: #006400;
	
}
 .options a:hover
 {
 	color: black
 	

 }
</style>

</head>
<body>

	<nav class="top-nav">
	<ul>
		<li>
            <a href="/page/index">Home</a>
		</li>
		<li>
            <a href="/page/index">About</a>
		</li>
		<li>
            <a href="/page/index">Projects</a>
		</li>
		<li>
            <a href="/page/index">Blog</a>
		</li>
		<li>
            <a href="</page/index">Contact</a>
		</li>
		<li class="btn-login">
            <a href="pro.php">Login</a>
		</li>
	</ul>
</nav>
	<div class="container"  method="post"  >
	<div class="container-log">
		<h2> Register</h2>
	<form action="pro.php" >
<input type="text" placeholder="Username" name="Username" required="required"/>
<input type="email" placeholder="Email" name="Email" required="required"/>
<input type="password" placeholder="Password" name="Password" required="required"/>
<input type="password" placeholder=" Confirm password" name=" Confirm password" required="required"/>

<button id="submit" type="submit" value="submit">Submit</button>
<p class="options"> Not yet register? <a href="">Create an account!</a></p>
	</body>
</html>