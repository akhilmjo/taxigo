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
	width:5%;
	}
select
	{
	width:80%;
	}
table{
		margin-top:13%;
	    float: top-center;
	    margin-left: 8%;
	    position:absolute;
	    top:80px;
	    border-spacing: 15px;
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
		border-radius:5px;
        width:10%;
	}
	td{
	    text-align:center;
		color:white;
	}
</style>
</head>
<body>

 <div class="main">    
<div class="header">
<img src="logo.jpg" style="margin-left:10px">
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
<div class="place"style="margin-top:-33%">
<h2 style="color:red; margin-top:-5%;">DRIVE DETAILS</h2>
<?php
include 'dbcon.php';
?>

<table border=5px style="margin-left:-8%; margin-top:5%;">
<tr><th>ID</th><th>COLLEGE NAME</th><th>PHONE</th><th>COMPANY</th><th>COMPANY PHNO</th><th>EMAIL</th><th>Drive name</th><th>Date</th><th>link</th></tr>
<?php 
$sql="SELECT * FROM `otherdrive` where status='1'";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['college'] ?></td>
	<td><?php echo $row['collegeph'] ?></td>
	<td><?php echo $row['compa'] ?></td>
	<td><?php echo $row['comphno'] ?></td>
    <td><?php echo $row['email'] ?></td>
	<td><?php echo $row['drivename'] ?></td>
	<td><?php echo $row['date'] ?></td>
	<td><?php echo $row['link'] ?></td>
	 <form action="empadddrive1.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
		<input type="hidden" name="college" value="<?php echo $row['college'] ?>" >
		<input type="hidden" name="collegeph" value="<?php echo $row['collegeph'] ?>" >
		<input type="hidden" name="compa" value="<?php echo $row['compa'] ?>" >
		<input type="hidden" name="comphno" value="<?php echo $row['comphno'] ?>" >
		<input type="hidden" name="email" value="<?php echo $row['email'] ?>" >
		<input type="hidden" name="drivename" value="<?php echo $row['drivename'] ?>" >
		<input type="hidden" name="date" value="<?php echo $row['date'] ?>" >
		<input type="hidden" name="link" value="<?php echo $row['link'] ?>" >
		</form>
	 </td>
	</tr>
	<?php
}
	
?>  

</div>

</body>
</html>