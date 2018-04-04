<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
$a=$_POST["Company"];
$b=$_POST["PHNO"];
$c=$_POST["email"];
$d=$_POST["drivename"];
$f=$_POST["qul"];
$g=$_POST["any"];
$e=$_POST["ddate"];
$e1=$_POST["time1"];
$id2= $_SESSION['id'];
$id3= $_SESSION['username'];
$sql="INSERT INTO `companyadddrive`(`compname`,`username`,`contactno`, `email`, `drivename`,`education`,`number`, `date`,`time`, `status`) VALUES ('$a','$id3','$b','$c','$d','$f','$g','$e','$e1','0')"; 
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
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <span><a href="companyhome.php">Home</a> </span>
 <div class="dropdown">
 <span><a href="#">&nbsp&nbspStudent</a> </span>
 <div class="dropdown-content">
		<a href="compveiwstud.php">Student Details</a><br/>
		
</div>
</div>
<div class="dropdown">
 <span><a href="#">jobs</a> </span>
 <div class="dropdown-content">
		<a href="companyadddrve.php">Drive request</a><br/>
		<a href="compviewdrive.php">approved drive</a><br/>
</div>
</div>
<div class="dropdown">
 <span> <a href="#">Profile</a> </span>
 <div class="dropdown-content">
		<a href="comprofile.php">view Profile</a><br/>
		<a href="compchangepsw.php">change Password</a><br/>
</div>
</div>
<span><a href="compcontact.php">Contact</a></span>
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
	<tr><td><h3 style="color:red">DRIVE REQUEST</h3></td></tr>
	<tr><td> Company:</td> <td><input type="text" name="Company" required></td></tr></br><tr></tr>
	<tr><td> contact no::</td> <td><input type="phno" name="PHNO" maxlength="10" required></td></tr></br><tr></tr>
	<tr><td> Email:</td> <td><input type="email" name="email" required ></td></tr></br><tr></tr>
	<tr><td> Drive name:</td> <td><input type="text" name="drivename" required></td></tr></br><tr></tr>
	
	<tr><td>Qualification:PG %mark</td><td><input type="text" name="qul" id="education"></td></tr></br><tr></tr>

		<tr>   <td> Any  Backlog </td><td><select name="any">
		   <option value="0">0</option>
		   <option value="1">1</option>
		   <option value="2">2</option>
		   <option value="3">3</option>
		   <option value="4">4</option>
		   <option value="5">5</option>
		    </select></td></tr>
	<tr><td> Date:</td> <td><input type="date" name="ddate"  min="2000-01-02" required></td></tr></br><tr></tr>
	<tr><td> Time:</td> <td><input type="time" name="time1" required></td></tr></br><tr></tr>
	<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit" >ADD</button></td><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button type="reset" class="button" >CANCEL</button></td></tr><tr></tr>
		
	&nbsp&nbsp</table>
	</form>   
</div>	 
</body>
</html>
