
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
 PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
<div class="place">
<h2 style="color:red">PROFILE</h2>
<?php
include 'dbcon.php';
$vv=$_SESSION["username"];

$sql="SELECT * FROM `studentreg`where username='$vv'";
$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);

?>
        <form name="myform" method="post" action="studedit.php">
	    <table style="width:100%' cellpadding:1%; margin-top:0%; ">
		<tr><td> name:</td> <td><input type="text" name="name" value="<?php echo $r['name']?>"></td></tr>
		<tr><td> Phone:</td> <td><input type="phno" name="PHNO" maxlength="10" value="<?php echo $r['Phone']?>"></td></tr>
		<tr><td> Email:</td> <td><input type="email" name="email" value="<?php echo $r['Email'] ?>"></td></tr>
		<tr><td> User name:</td> <td><input type="email" name="username" value="<?php echo $r['Username'] ?>"></td></tr>		
		
		&nbsp&nbsp</table>
    
		 <table style="margin-top:40%; margin-left:0px; cell-spacing:0px; width:70%;">
		 <tr><th> Class</th><th>Board</th> <th>%mark</th><th>Year of passout</td></tr>
	 	 <tr><td><input type="text" name="x" value="<?php echo $r['classx']?>"></td><td><input type="text" name="bx" value="<?php echo $r['boardx']?>"></td><td><input type="text" name="mx" value="<?php echo $r['markx']?>"></td><td><input type="text" name="px" value="<?php echo $r['ypassx']?>"></td></tr>
         <tr><td><input type="text" name="xii" value="<?php echo $r['classxii']?>"></td><td><input type="text" name="bxii" value="<?php echo $r['boardxii']?>"required></td> <td><input type="text" name="mxii" value="<?php echo $r['markxii']?> "required></td><td><input type="text" name="pxii"  value="<?php echo $r['ypassxii']?>" required></td></tr>
         <tr><td><input type="text" name="ug" value="<?php echo $r['classug']?>"></td><td><input type="text" name="bug" value="<?php echo $r['boardug']?>" required></td> <td><input type="text" name="mug" value="<?php echo $r['markug']?>" required></td><td><input type="text" name="pug" value="<?php echo $r['ypassug']?>" required></td></tr>
         <tr><td><input type="text" name="pggg" value="<?php echo $r['classpg']?>"></td><td><input type="text" name="bpg" value="<?php echo $r['boardpg']?>"></td> <td><input type="text" name="mpg" value="<?php echo $r['markpg']?>"></td><td><input type="text" name="ppg" value="<?php echo $r['ypasspg']?>"></td></tr>
        

		 <tr><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit" >EDIT</button></td><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit" value="reset">CANCEL</button></td></tr><tr></tr>
	   </table>
   
	 
	 <table>
 	
	</table>	
	
		
</div>
</div>
</body>
</h