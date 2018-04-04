
<?php
include 'dbcon.php';
session_start();


if(isset($_POST['submit']))
{
$a=$_POST["name"];
$b=$_POST["PHNO"];
$c=$_POST["email"];
$d=$_POST["state"];
$e=$_POST["city"];
$f=$_POST["date"];
$g=$_POST["gender"];
$h=$_POST["fname"];
$i=$_POST["mname"];
$j=$_POST["username"];
$k=$_POST["psw"];
$l=$_POST["filename"];
$m=$_POST["x"];
$n=$_POST["bx"];
$o=$_POST["mx"];
$p=$_POST["px"];
$q=$_POST["xii"];
$r=$_POST["bxii"];
$s=$_POST["mxii"];
$t=$_POST["pxii"];
$u=$_POST["ug"];
$v=$_POST["bug"];
$w=$_POST["mug"];
$x=$_POST["pug"];
$y1=$_POST["pggg"];
$z=$_POST["bpg"];
$a2=$_POST["mpg"];
$b2=$_POST["ppg"];
$s1=$_POST["back"];
$s2=$_POST["count"];
$sql="INSERT INTO `studentreg`(`name`, `Phone`, `Email`, `state`, `city`, `dob`, `Gender`, `fathersname`, `mothersname`, `Username`, `password`, `Photo`, `classx`, `boardx`, `markx`, `ypassx`, `classxii`, `boardxii`, `markxii`, `ypassxii`, `classug`, `boardug`, `markug`, `ypassug`, `classpg`, `boardpg`, `markpg`, `ypasspg` ,`backlog` , `num`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o','$p','$q','$r','$s','$t','$u','$v','$w','$x','$y1','$z','$a2','$b2','$s1','$s2')";
//print_r($sql);
//or die(mysqli_error($con));
$result=mysqli_query($con,$sql)or die(mysqli_error($con));
print_r($result);
//$result=mysqli_query($con,$sql);
//header();
 }
 
?>

<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>placementcell-stud</title>
<style>
.place
			{
				float:top-left;
				margin-left:25%;
				margin-top:-30%;
				width:50%;
				height:90%;
				color:red;
				border-radius:5px;
				position:relative;
				padding:5%;
				}
.fieldset
{
	width: 100%;
	height:50%;
	margin-left:0%;
  float: left;
	}

div.clip
	{
	padding-top:2px;
	border:2px solid black;
	background-color:black;
	margin-top:opx;
	width:100%;
	height:10px;
	}
	table{    margin-top:-13%;
	          float: top-center;
	          margin-left:25%;
	    	  position:absolute;
	          top:149px;
	    	   }
tr{
color:black;
}
input{
width:100%;
}
select{
width:100%;
}

	.form1
	{
		background-image: url("");
		background-color:inherit;
	margin-left:25%;
	margin-top:10px;
	width:40%;
	height:100%;
	}
	td{
		text-align:left;
	}
</style>
</head>
<body>

    <div class="header">
	<img src="logo.jpg" style="margin-left:10px">
	PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
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
	  is the first new generation engineering college in Kerala to ISO certificated  instituation..</marquee>
			 	</div>
			 </div>
<div class="place">
    <form name="myform" method="post" action="#">
	<table style="width:50%; cellpadding:5%; margin-left:7%;text-align:left; ">
	<tr><td style="color:red;font-size:20; width:100%; margin-left:50%;">STUDENT REGISTRATION</h3></td></tr>
	<tr><td> name:</td> <td><input type="text" name="name" required></td></tr></br><tr></tr>
	<tr><td> address:</td> <td><input type="text" name="address" required></td></tr></br><tr></tr>
	<tr><td> Phone:</td> <td><input type="phno" name="PHNO" maxlength="10" required></td></tr></br><tr></tr>
	<tr><td> Email:</td> <td><input type="email" name="email" required></td></tr></br><tr></tr>
	<tr><td> state:</td> <td><input type="text" name="state" required></td></tr></br><tr></tr>
	<tr><td> city:</td> <td><input type="text" name="city" required></td></tr></br><tr></tr>
	<tr><td> dob:</td> <td><input type="date" name="date" required></td></tr></br><tr></tr>
	<tr><td> Gender:</td><td><select name="gender" required>
	<option value="select" selected>select</option>
    <option value="male">male</option>
    <option value="female">female</option>    
    </select></td></tr></br><tr></tr>	
	<tr><td> fathers name:</td> <td><input type="text" name="fname" required></td></tr></br><tr></tr>
	<tr><td> mothers name:</td> <td><input type="text" name="mname" required></td></tr></br><tr></tr>
	<tr><td> User name:</td> <td><input type="email" name="username" required></td></tr></br><tr></tr>
	<tr><td>password:</td><td><input type="password" name="psw" required></td></tr><tr></tr>
	<tr><td> Photo:</td> <td><input type="file" name="filename" id="myfile" required></td></tr></br><tr></tr>
</table><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

	<fieldset style="margin-left:2px; width:80%;margin-top:-25%;height:33%; ">
     <legend>Accademic Details</legend>
		 <table style="margin-top:45%; margin-left:0px; cell-spacing:px; width:60%;">
		 <tr><th> Class</th><th>Board</th> <th>%mark</th><th>Year of passout</td></tr>
	 	<tr><td>
		<select name="x" >
	  	<option value="null"  >select</option>
	    <option value="x" selected>x</option>
	    </select></td><td><input type="text" name="bx" required ></td> <td><input type="text" name="mx" required></td><td><input type="text" name="px" required></td></tr>

		 <tr><td>
		 <select name="xii" >
		 <option value="select" >select</option>
		 <option value="xii" selected >xii</option>
		 </select></td><td><input type="text" name="bxii"required></td> <td><input type="text" name="mxii" required></td><td><input type="text" name="pxii" required></td></tr>


		<tr><td>
		<select name="ug">
		<option value="select" >select</option>
		<option value="BCA" selected>BCA</option>
		<option value="BSC" selected>ug</option>
		<option value="BBA" selected>BBA</option>
		<option value="BTECH" selected>BTECH</option>
		<option value="other" selected>OTHER</option>

	</select></td><td><input type="text" name="bug" required></td> <td><input type="text" name="mug" required></td><td><input type="text" name="pug" required></td></tr>

	 <tr><td>
	 
		<select name="pggg">
		<option value="select" >select</option>
		<option value="MCA" selected>MCA</option>
		<option value="MTECH" selected>MTECH</option>
		<option value="MBA" selected>MBA</option>
		<option value="OTHER" selected >OTHER</option>
	    </select></td><td><input type="text" name="bpg"></td> <td><input type="text" name="mpg"></td><td><input type="text" name="ppg"></td></tr>
          <tr><td>
	         Any backlog <select name="back">
			 <option value="no">no</option>
		   <option value="yes">yes</option>
			 </td>
		   <td> count backlog <select name="count">
		   <option value="0">0</option>
		   <option value="1">1</option>
		   <option value="2">2</option>
		   <option value="3">3</option>
		   <option value="4">4</option>
		   <option value="5">5</option>
		    </select></td></tr>
		  

	   </table>
     <br/><br/>
   </fieldset>

	<tr style="width:100%"><td >&nbsp&nbsp&nbsp&nbsp&nbsp<button class="button" name="submit">Register</button></td><td>&nbsp&nbsp<button class="button" name="cancel">cancel</button></td></tr>
	&nbsp&nbsp</table>
</form>
</div>
<div class="footer">
© 2017 St. Joseph College of Engineering. All rights reserved.
</div>
</body>
</html>
