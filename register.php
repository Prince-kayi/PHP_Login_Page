<DOCTYPE html>
<html lang="en">
<head>
	<?
?>
	
	<title>Footer Design</title>
       <meta charset="UTF-8">
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
.containers
{
	width: 100%;
	position: relative;
	top:20%;
	background-color: black;
	margin-bottom: 50px;
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
.container{
	margin-top: 50px;
	max-width: 2000px;
	background-color: red;
	
}
ul{
	list-style: none;
}
.row{
  display:flex;
  flex-wrap:flex-wrap;

}
.footer-col{
	width: 25%;
	padding: 0 15px;
}
.footer-col h4{
	font-size: 20px;
	color:white;
	text-transform: capitalize;
	margin-bottom: 37px;
	font-weight: 500px;
	position: relative;

}
.footer-col h4:before{
	content: '';
	position: absolute;
	left: 0;
	bottom: -10px;
	height: 3px;
	background-color:blue;
	width:50px;
}

.footer-col ul li:not(:last child){
	margin-bottom: 10px;


}
.footer-col ul li a{
	font-size: 20px;
	text-transform: capitalize;
	color: #ffffff;
	text-decoration: none;
	font-weight: 3000px;
	color: #bbbbbb;
	display: block;
	transition:all 0.4s ease;

}
.footer-col ul li a:hover{
	color:yellow;
	padding-left:20px; 

}
.footer-col .social-link a{
	display: inline-block;
	height: 40px;
	width: 40px;
	background-color: rgba(255,255,255,0.2);
	margin: 0 10px 10px 0;
	text-align: center;
	line-height: 41px;
	border-radius: 500%;
	color: white;

}
.footer-col .social-link a:hover{
	color:#24262b;
	background: #ffffff;
}
@media(max-width: 767px){
	footer-col{
		width:52%;
		margin-bottom: 33px;
	}
}
@media(max-width: 584px){
	footer-col{
		width:100%;
	
	}
}
</style>

<Link link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<Link rel="stylesheet" type="text/css" href="style.css">
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
	<div class="containers"  method="post"  >
	<div class="container-log">
		<h2> Register</h2>
	<form action="pro.php" >
<input type="text" placeholder="Username" name="Username" required="required"/>
<input type="email" placeholder="Email" name="Email" required="required"/>
<input type="password" placeholder="Password" name="Password" required="required"/>
<input type="password" placeholder=" Confirm password" name=" Confirm password" required="required"/>

<button id="submit" type="submit" value="submit">Submit</button>
<p class="options"> Not yet register? <a href="">Create an account!</a></p>

<footer class ="footer">
	<div class="container">
		<div class="row">			
<div class="footer-col">
	<h4>get help</h4>
	<ul>
		<li><a href="#">about us</a></li>
		<li><a href="#">our services</a></li>
		<li><a href="#">privacy policy</a></li>
		<li><a href="#">affiliate program</a></li>
	</ul>
</div>
<div class="footer-col">
	<h4>get help</h4>
	<ul>
		<li><a href="#">FAQ</a></li>
		<li><a href="#">shipping</a></li>
		<li><a href="#">returns</a></li>
		<li><a href="#">order status</a></li>
		<li><a href="#">payment options</a></li>
	</ul>
</div>

<div class="footer-col">
	<h4>online shop</h4>
	<ul>
		<li><a href="#">watch</a></li>
		<li><a href="#">bag</a></li>
		<li><a href="#">shoes</a></li>
		<li><a href="#">dress</a></li>
		<li><a href="#">shirts</a></li>
	</ul>
</div>
<div class="footer-col">
				<h4> follow us</h4>
				<div class="social-link">
 <a href="#"> <i class="fab fa-facebook-f"  aria-hidden="true"></i></a>
  <a href="#"> <i class="fab fa-twitter" aria-hidden="true"></i></a>
  <a href="#"> <i class="fab fa-instagram" aria-hidden="true"></i></a>
  <a href="#"> <i class="fab fa-linkedin-in" aria-hidden="true"></i></a>
 </ul>
</div>
 </footer>
</body>
</html>