<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
$a=$_POST["College"];
$b=$_POST["college phno"];
$c=$_POST["company"];
$d=$_POST["PHNO"];
$e=$_POST["email"];
$f=$_POST["drivename"];
$g=$_POST["ddate"];
$h=$_POST["link1"];
$id2= $_SESSION['id'];
$id3= $_SESSION['username'];
$sql="INSERT INTO `otherdrive`(`college`,`collegeph`,`compa`, `comphno`, `email`, `drivename`, `date`,`link`,`status`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','0')"; 
//print_r($sql);
$result=mysqli_query($con,$sql);
//print_r($result);
//$result=mysqli_query($con,$sql);
//header()
}
?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>placementcell-emp</title>
<style>	
.place
	{
	float:top-left;
    margin-left:25%;
	margin-top:3%;
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

tr
	{
	color:red;
	}
input
	{
	width:80%;
	background-color:none;
	}
select
	{
	width:80%;
	}
table{   
		margin-top:-65%;
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
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <span><a href="emphome.php">Home</a> </span>
 
<div class="dropdown">
 <span> <a href="#">Profile</a> </span>
 <div class="dropdown-content">
		<a href="empprofile.php">view Profile</a><br/>
		<a href="empchangepsw.php">change Password</a><br/>
</div>
</div>
<span><a href="empcontact.php">Contact</a></span>
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
<div class="place">
 <form name="myform" method="post" action="#">
	<table style="width:100% cellpadding:1%  ">
	<tr><td><h3 style="color:red" align="center"> OTHER COLLEGE DRIVE </h3></td></tr>
	<tr><td> College name:</td> <td><input type="text" name="College" required></td></tr></br><tr></tr>
	<tr><td> College contact:</td> <td><input type="phno" name="college phno" maxlength="10" required></td></tr></br><tr></tr>
	<tr><td> Company:</td> <td><input type="text" name="Company" required></td></tr></br><tr></tr>
	<tr><td> contact no::</td> <td><input type="phno" name="PHNO" maxlength="10" required></td></tr></br><tr></tr>
	<tr><td> Email:</td> <td><input type="email" name="email" required ></td></tr></br><tr></tr>
	<tr><td> Drive name:</td> <td><input type="text" name="drivename" required></td></tr></br><tr></tr>
	<tr><td> Date:</td> <td><input type="date" name="ddate" min="2000-01-02" required></td></tr></br><tr></tr>
	<tr><td> Visit more Information</td> <td><input type="text" name="link1"required></td></tr></br><tr></tr>
	<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit" >ADD</button></td><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button type="reset" class="button" >CANCEL</button></td></tr><tr></tr>
		
	&nbsp&nbsp</table>
	</form>   
</div>	 
</body>
</html>
