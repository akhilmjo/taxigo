<?php
include 'dbcon.php';
session_start();
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>placementcell-login</title>
<style>
.form1
	{
	background:url('')no-repeat center center fixed;
	color:	#000000;
	z-index:1;
	border-radius:0px;
	width:50%;
	height:60%;
	margin-left:18%;
	margin-top:-2%;
	top:70%;
	position:absolute;
	align:center;
	text-align:top-left;
	padding:0px;
	border:2px ;
	cellspacing:2px;
	}
	div.login
	{
	background:url('')repeat center center fixed;
	background-color: white;
	float:right;
	color:red;
	padding-top:2px;
	background-color:#26262;
	border-radius: 20px;
	margin-top:-26%;
	margin-left:100%;
	margin-right:2%;
	width:20%;
	height:43%;
	
	}
	input{
	width:120px;}
	td{
	width:100px;}
	td{
	color:red;}
</style>
</head>
 <div class="main">

   <div class="header">
	<img src="logo.jpg" style="margin-left:10px">
	PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="index.php">Home</a>&nbsp&nbsp<div class="dropdown">
  <span> <a href="#">Registration</a> </span>
  <div class="dropdown-content">
	<a href="empreg.php">Employee</a>
	<a href="studentreg.php">Student</a>
	<a href="companyreg.php">Company</a>
  </div>
  </div>&nbsp&nbsp<a href="placementcontact.php">Contact</a>&nbsp&nbsp<a href="login.php">login</a>
	</div>

			<div class="line" width:"5px">
			</div>

 <div class="pic">
      <img class="mySlides" src="sj1.jpg" width="100%" height="58%" >
			<img class="mySlides" src="sj2.jpg" width="100%" height="58%" >
			<img class="mySlides" src="sj3.jpg" width="100%" height="58%" >
			<div class="line" height:"10px">
			</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
<div class="news">
	<div class="newshead">
<p>LATEST NEWS</p>
	</div>
	<div class="newsin">
<marquee scrolldelay="50%"direction="down" height="90%" hspace="5%">St Joseph College of Engineering and Technology Palai,
	  is the first new generation engineering college in Kerala to ISO certificated  instituation.</marquee>
	</div>
</div>
<div class="login">
<form name="myform" method="post" action="logcon.php">
	<table style="width:100% ">
	<tr></tr><tr></tr>
	<tr><td><h3>LogIn</h3></td></tr><tr></tr>
	<tr><td> User name:</td> <td><input type="text" name="lname"></td></tr></br><tr></tr>
	<tr><td>password:</td><td><input type="password" name="psw1"></td></tr><tr></tr>
	<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit">Login</button></td></tr><tr></tr>
	&nbsp&nbsp</table>
	<p style="color:red; align:center;">please enter correct username and password............</p>
</form>

</div>
<div class="form1" style="text-align:left">
<img src="iso.jpg" width="110%" height="40%">
<h1 style="color:red" >SJCET Profile</h1>
<p>
St Joseph College of Engineering and Technology Palai,
	  is the first new generation engineering college in Kerala to ISO certificated  instituation.
The main features of the college comprise world-class infrastructure, top-flight faculty, 
high pass percentage,excellent placement record and unique
student projects. SJCET is a mega complex of nearly 13.5 lakh sq.ft.built-up area overlooking the busy
pala-petta stretch of the Kottayam-Poonjar state highway.The two campus hostels, taken care of
by dedicated Catholic priests and nuns, have a capacity of 2200 inmates.The campus has 60 Mbps internet
connectivity with WiFi. 
</p>
</div>
<div class="footer">
© St. Joseph College of Engineering. All rights reserved.
</div>
</div>
</body>
</html>
