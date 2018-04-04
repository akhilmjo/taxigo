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
<title>placementcell-emp</title>
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
	    margin-left:-8%;
	    position:absolute;
	    top:80px;
	    border-spacing: 15px;
	    }
.form1
	{
	margin-left:25%;
	margin-top:20%;
	width:40%;
	height:30%;
	}
	th{
		background-color:black;
		color:red;
		border-radius:5px;
        width:10%;
	}
	td{
	    text-align:center;
		color:red;
	}

</style>
</head>
<body>
<div class="header">
<img src="logo.jpg" style="margin-left:10px">
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <span><a href="emphome.php">Home</a> </span>
 <div class="dropdown">
 <span><a href="#">&nbsp&nbspAdd</a> </span>
 <div class="dropdown-content">
		<a href="empaddstudy.php">Study material</a><br/>
		<a href="empadddrive.php">Drive</a><br/>
</div>
</div>
<div class="dropdown">
 <span><a href="#">Student&nbsp</a> </span>
 <div class="dropdown-content">
		<a href="empveiwstud.php">Student Details</a><br/>
		
</div>
</div>
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
	  is the first new generation engineering college in Kerala to ISO certificated  instituation..</marquee>
 </div>
</div>
<div class="place">
<form action="upload.php" method="post" name="myForm" enctype="multipart/form-data">
	<table style=" cellpadding:5%; margin-top:5%;  ">
		<t&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h3>UPLOADE STUDY MATERIAL</h3>
		<tr><td> Subjet:</td> <td><input type="text" name="name"></td></tr></br><tr></tr>
		<tr><td> File:</td><td><input type="file" name="file" id="file"></td></tr></br><tr></tr>
		<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit" >ADD</button></td><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button type="reset" class="button" >CANCEL</button></td></tr><tr></tr>
		&nbsp&nbsp</table>
	</form>
</div>
</body>
</html>
