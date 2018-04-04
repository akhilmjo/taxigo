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
        width:5%;
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
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <span><a href="studenthome.php">Home</a> </span>
  <div class="dropdown">
 <span><a href="#">&nbsp&nbsp&nbspDrive</a> </span>
 <div class="dropdown-content">
		<a href="studviewdrive.php">drive Details</a><br/>
		
</div>
</div>
 <span><a href="studviewmaterial.php"> Study meterial&nbsp&nbsp&nbsp</a> </span>

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
<h2 style="color:red"> PLACEMENT STUDY MATERIALS</h2><br><br><br><br><br><br><br>
<?php
include 'dbcon.php';
?>

<table border=5px style=" margin-left:-8%; margin-top:8%;">
<tr><th>ID</th><th>SUBJECT</th><th>FILE</th></tr>
<?php 
$sql="SELECT * FROM `empmaterial`";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['subject'] ?></td>

	 <form action="#" method="post">
	 	<td><a href="/placement/upload/<?php echo $row['file']?>"download"> download </a> </td>
	
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
		<input type="hidden" name="subject" value="<?php echo $row['subject'] ?>" >
		<input type="hidden" name="file" value="<?php echo $row['file'] ?>" >
		</form>
	 </td>
	</tr>
	<?php
}
?>  

</div>

</body>
</html>
