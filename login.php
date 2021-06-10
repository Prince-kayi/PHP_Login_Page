<html>
<head>
<?
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
 .btn-login
 {
 	border:  1px solid blue;
 	padding:  7px 24px;
 }
 
</style>
</head>

<body bgcolor="white">
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
			<?php if(isset($_SESSION['user_id'])): ?>
            <a href="pro.php">Log out</a>
        <?php else: ?>
        <a href="pro.php">Log in</a>
    <?php endif;?>
		</li>
	</ul>
</nav>

<div class="container" method="post">
	<div class="container-log">
		<h2> Sign in</h2>
	<form action="pro.php" include="users.php">
<input type="text" placeholder="Username" name="Username" required="required"/>

<input type="password" placeholder="password" name="Paswword" required="required"/>

<button id="submit" type="submit" value="submit">Submit</button>
<p class="options"> Not yet register? <a href="images.php">Create an account!</a></p>
</form>
</div>
</div>

</body>
</html>