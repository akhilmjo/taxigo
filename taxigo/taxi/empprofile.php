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
		margin-top:3%;
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
		th
		{
		background-color:black;
		color:red;
	   }
	td{
		color:blue;
	}
</style>
</head>
<body>
<div class="main">    
<div class="header">
<img src="logo.jpg" style="margin-left:10px">
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
 <span><a href="emphome.php">Home</a> </span>
 <div class="dropdown">
 <span><a href="#">&nbsp&nbspAdd</a> </span>
 <div class="dropdown-content">
		<a href="empaddstudy.php">Study material</a><br/>
		<a href="empadddrive.php">Drive</a><br/>
		<a href="empaddother.php">other drive</a><br/>
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
<h2 style="color:red">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspPROFILE</h2><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php
include 'dbcon.php';

$vv=$_SESSION["username"];

$sql="SELECT * FROM `empreg` WHERE username='$vv'";

$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>
        <form name="myform" method="post" action="empprofedit.php">
	    <table style="margin-top:10% ">
		<tr><td> name:</td> <td><input type="text" name="name" value="<?php echo $r['name']?>"></td></tr><tr></tr>
		<tr><td> Designation:</td> <td><input type="text" name="Des" value="<?php echo $r['Designation']?>"></td></tr></br><tr></tr>
        <tr><td> Phone:</td> <td><input type="phno" name="PHNO" maxlength="10" value="<?php echo $r['Phone']?>"></td></tr></br><tr></tr>
		<tr><td> Email:</td> <td><input type="email" name="email" value="<?php echo $r['Email'] ?>" ></td></tr></br><tr></tr>
		<tr><td> User name:</td> <td><input type="email" name="username" value="<?php echo $r['Username'] ?>"></td></tr></br><tr></tr>		
		<tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit">EDIT</button></td><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit" value="reset">CANCEL</button></td></tr><tr></tr>
		
		&nbsp&nbsp</table>
 
       
</div>

</body>
</html>