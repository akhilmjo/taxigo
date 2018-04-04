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
	    border-spacing: 15px;
	    }
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
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
<h2 style="color:red">STUDENT DETAILS</h2><br><br><br><br><br><br><br>
<?php
include 'dbcon.php';
?>

<table border=5px style="margin-left:0%; margin-top:10%;">
<tr><th>ID</th><th>name</th><th>PHONE</th><th>GENDER</th><th>MARK_UG</th></tr>
<?php 
$sql="SELECT * FROM `studentreg` where status='1'";
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
	<td><?php echo $row['markug'] ?></td>
    		</tr>
	<?php
}
?>  

</div>

</body>
</html>