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

<div class="header">
<img src="logo.jpg" style="margin-left:10px">
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
<div class="place"style="margin-top:-33%">
<h2 style="color:red">DRIVE DETAILS</h2><br><br><br><br><br><br><br>
<?php
include 'dbcon.php';
?>

<table border=5px style="margin-left:0%; margin-top:10%;">
<tr><th>ID</th><th>COMPANY</th><th>PHONE</th><th>EMAIL</th><th>DRIV_NAME</th><th style="width:100%">DATE</th><th>ADD</th><th>DELETE</th></tr>
<?php 
$sql="SELECT * FROM `companyadddrive` where status='0'";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['compname'] ?></td>
	<td><?php echo $row['contactno'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><?php echo $row['drivename'] ?></td>
    <td><?php echo $row['date'] ?></td>
	<form action="empadddrive1.php" method="post">
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
		<input type="hidden" name="cname" value="<?php echo $row['compname'] ?>" >
		<input type="hidden" name="cno" value="<?php echo $row['contactno'] ?>" >
		<input type="hidden" name="email" value="<?php echo $row['email'] ?>" >
		<input type="hidden" name="dname" value="<?php echo $row['drivename'] ?>" >
		<input type="hidden" name="date" value="<?php echo $row['date'] ?>" >
		 <td><button class="button" name="add" >ADD</button> </td>
	     <td><button class="button" name="delete" >DELETE</button> </td>
		</form>
	</tr>
	<?php
}
?>  

</div>

</body>
</html>
