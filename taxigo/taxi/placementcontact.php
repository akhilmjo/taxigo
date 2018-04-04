<?php
include 'dbcon.php';
session_start();
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
.form3
	{
	float:top;
	margin-left:26%;
	margin-top:5%;
	width:40%;
	height:60%;
	position:absolute;
	}
	
	th{
		background-color:black;
		color:red;
	}
	td{
		color: #cc0099;
	}
</style>
</head>
<body>
<div class="main">    
<div class="header">
	<img src="logo.jpg" style="margin-left:10px">
	PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
	  is the first new generation engineering college in Kerala to ISO certificated  instituation.
	</marquee>
 </div>
</div>
<div class="form3"style="margin-top:-33%">
<table style="text-align: center;  height="100";">
            <tr><td style="text-align: center;"><font size="5" >St.Joseph College Of Engineering</font></td></tr>
     
            <tr><td ><font  size="4" >CHOONDACHERRY(PO),PALAI</font></td></tr>
           
            <tr><td ><font  size="3" >KOTTAYAM 686579</font></td></tr>
           
            <tr><td><font  size="3" >Web:www.sjcet.ac.in</font></td></tr>
            
            <tr><td ><font  size="3" >Email:info@sjcet.ac.in</font></td></tr>
            
            <tr><td ><font  size="3"  >Phone & Fax:04822 239777</font></td></tr>
			<tr><td ><font  size="6"color="black"><u>HOD</u></font></td></tr>
			<tr><td ><font  size="3"color="black" ><img src="hod1.jpg" width="100" height="100"></font></td></tr>
            <tr><td ><font  size="3" color="black">Prof. Jainendrakumar T.D`</font></td></tr>  
			<tr><td ><font  size="3" color="black">PHONE:9447828497</font></td></tr> 
			<tr><td ><font  size="3" color="black" >Email:hodmca@sjcet.ac.in</font></td></tr> 
           </table>
</div>

</body>
</html>