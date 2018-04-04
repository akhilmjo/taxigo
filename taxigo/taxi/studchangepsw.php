<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>placementcell-comp</title>
<style>
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
	width:50%;
	}
select
	{
	width:80%;
	}
table{
		margin-top:-3%;
	    float: top-center;
	    margin-left: 4%;
	    position:absolute;
	    top:80px;
	    border-spacing:10px;
	    }
.form1
	{
    background-color:;
	margin-left:25%;
	margin-top:15px;
	width:50%;
	height:60%;
	}
	
	th{
		background-color:black;
		color:red;
	}
	td{
		color:red;
	}
	echo{
		color:red;
	}

</style>
</head>
<body>

<div class="header">
<img src="logo.jpg" style="margin-left:10px">
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <span><a href="studenthome.php">Home</a> </span>
  <div class="dropdown">
 <span><a href="#">&nbsp&nbsp&nbspDrive</a> </span>
 <div class="dropdown-content">
		<a href="studviewdrive.php">drive Details</a><br/>
		
</div>
</div>
 <span><a href="studviewmaterial.php">Study meterial&nbsp&nbsp&nbsp</a> </span>

<div class="dropdown">
 <span> <a href="#">Profile</a> </span>
 <div class="dropdown-content">
		<a href="studprf.php">Profile</a><br/>
		<a href="studchangepsw.php">change Password</a><br/>
</div>
</div>
<span><a href="studentcontact.php">Contact</a></span>
<span><a href="logout.php">logout</a> </span>
</div>
 <div class="line">
 </div>
 <div class="news" style="margin-top:3%">
 <div class="newshead">
<p>LATEST NEWS</p>
 </div>
 <div class="newsin">
<marquee scrolldelay="100%"direction="down" height="90%" hspace="5%">SJCET Pala,
	  is the first new generation engineering college in Kerala to ISO certificated  instituation.</marquee>
 </div>
</div>


<div class="form1"style="margin-top:-33%">
<h2 style="color:red">CHANGE PASSWORD</h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form name="myform" method="post" action="changepass.php">
<table style="width:50%; margin-top:10%; ">
	<tr></tr><tr></tr>
	<tr><td> User name:</td> <td><input type="text" name="lname"></td></tr></br><tr></tr>
	<tr><td>password:</td><td><input type="password" name="psw1"></td></tr><tr></tr>
	<tr><td>new password:</td><td><input type="password" name="psw2"></td></tr><tr></tr>
	<tr><td> confirm password:</td><td><input type="password" name="psw3"></td></tr><tr></tr>
	<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit">change</button></td></tr><tr></tr>
	&nbsp&nbsp</table>
	 </td>
	</tr>  
</form>
</div>

</body>
</html>
