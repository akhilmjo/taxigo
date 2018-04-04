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
	    border-spacing: 5px;
	    }
.form1
	{
	margin-left:25%;
	margin-top:10px;
	width:40%;
	height:60%;
	}
	
	th{
		background-color:black;
		color:red;
		border-radius:5px;
        width:10%;
	}
	td{
	
		color:white;
	}
	 
</style>
</head>
<body>
<div class="main">    
<div class="header">
<img src="logo.jpg" style="margin-left:10px">
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
<div class="form1"style="margin-top:-33%">
<h2 style="color:red">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSTUDENT DETAILS</h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include 'dbcon.php';
?>

<table border=5px style=" margin-left:0%; margin-top:15%">  
<tr><th>ID</th><th>NAME</th><th>PHONE</th><th>GENDER</th><th>MARK_PG</th></tr>
<?php 
$sql="SELECT * FROM `studentreg` where markpg <= ('SELECT education FROM `companyadddrve` ') ";
//$man="SELECT * FROM `studentreg` where num IN ('SELECT number FROM `companyadddrve` ') ";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['name'] ?></td>
	<td><?php echo $row['Phone'] ?></td>
	<td><?php echo $row['Gender'] ?></td>
	<td><?php echo $row['markpg'] ?></td>
    		</tr>
	<?php
}
?>  

</div>

</body>
</html>