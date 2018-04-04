<?php
include 'dbcon.php';
session_start();
if(isset($_POST['submit']))
{
$a=$_POST["name"];
$b=$_POST["PHNO"];
$c=$_POST["email"];
$d=$_POST["username"];
$e=md5($_POST["psw"]);
$sql="INSERT INTO `companyreg`(`compname`, `phone`, `email`, `username`, `password`, `type`) VALUES ('$a','$b','$c','$d','$e','emp')";
//print_r($sql);
$result=mysqli_query($con,$sql);
//$result=mysqli_query($con,$sql);
//header()
if($result)
{
	echo"User Registeration successflly";
}else
{
	echo"User regiseration Failed";
}
}
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>placementcell-comp</title>
<style>
.place
			{
				float:top-left;
				margin-left:25%;
				margin-top:-33%;
				width:50%;
				height:50%;
				color:red;
				border-radius:5px;
				position:relative;
				padding:5%;
				}
div.clip
	{
	padding-top:2px;
	border:2px solid black;
	background-color:black;
	margin-top:opx;
	width:100%;
	height:50px;
	}
input
	{
	width:80%;
	}
select
	{
	width:80%;
	}
table{
		margin-top:-3%;
	    float: top-center;
	    margin-left: 8%;
	    position:absolute;
	    top:80px;
	    border-spacing: 15px;
	    }
.form1
	{
	margin-left:25%;
	margin-top:10px;
	width:40%;
	height:60%;
	}
</style>
</head>
<body>

 <div class="header">
	<img src="logo.jpg" style="margin-left:10px">
	PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="index.php">Home</a>&nbsp&nbsp<div class="dropdown">
  <span> <a href="#">Registration</a> </span>
  <div class="dropdown-content">
	<a href="empreg.php">Employee</a>
	<a href="studentreg.php">Student</a>
	<a href="companyreg.php">Company</a>
  </div>
  </div>&nbsp&nbsp<a href="placementcontact.php">Contact</a>&nbsp&nbsp<a href="login.php">login</a>
	</div>
 <div class="line">
 </div>
 <div class="news" style="margin-top:3%">
 <div class="newshead">
<p>LATEST NEWS</p>
 </div>
 <div class="newsin">
<marquee scrolldelay="100%"direction="down" height="90%" hspace="5%">St Joseph College of Engineering and Technology Palai,
	  is the first new generation engineering college in Kerala to ISO certificated  instituation.</marquee>
 </div>
</div>
<div class="place">
    <form name="myform" method="post" action="#">
	<table style="width:100% cellpadding:5%  ">
		<tr><td><h3 style="color:red">COMPANY REGISTRATION</h3></td></tr>
		<tr><td> Company name:</td> <td><input type="text" name="name"placeholder="name" required></td></tr></br><tr></tr>
		<tr><td> Phone:</td> <td><input type="phno" name="PHNO" maxlength="10" required></td></tr></br><tr></tr>
		<tr><td> Email:</td> <td><input type="email" name="email" required></td></tr></br><tr></tr>
		<tr><td> User name:</td> <td><input type="email" name="username" required></td></tr></br><tr></tr>
		<tr><td>password:</td><td><input type="password" name="psw" required></td></tr><tr></tr>
		<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit">Register</button></td><td>&nbsp&nbsp<button class="button" name="cancel">Cancel</button></td></tr><tr></tr>
		&nbsp&nbsp</table>
	</form>
</div>
<div class="footer">©2017 St. Joseph College of Engineering. All rights reserved.
</div>
</body>
</html>
