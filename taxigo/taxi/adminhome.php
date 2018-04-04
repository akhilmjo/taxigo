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
<title>placementcell</title>
<style>
input
	{
	width:120px;
	}
.form1
	{
	background:url('')no-repeat center center fixed;
	color:	#000000;
	z-index:1;
	border-radius:0px;
	width:50%;
	height:60%;
	margin-left:18%;
	margin-top:-2%;
	top:70%;
	position:absolute;
	align:center;
	text-align:top-left;
	padding:0px;
	border:2px ;
	cellspacing:2px;
	}
tr{

	width: 100%;
	height: 100%;
 }
table{
	float: top-left;
	margin-top:10%;
	top:-200%;
	width: 100%;
	height: 100%;
}
</style>
</head>
<body>
 <div class="main">

  <div class="header">
	<img src="logo.jpg" style="margin-left:10px">
	PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="adminhome.php">Home</a>&nbsp&nbsp
  <div class="dropdown">
  <span><a href="#">Employee</a> </span>
  <div class="dropdown-content">
	<a href="adminaddemp.php">add</a>
	
	</div>
  </div>
  <div class="dropdown">
  <span> <a href="#">Student</a> </span>
  <div class="dropdown-content">
	<a href="adminaddstudent.php">add</a>
	</div>
  </div>
  <div class="dropdown">
  <span> <a href="#">Company</a> </span>
  <div class="dropdown-content">
	<a href="adminaddcomp.php">add</a>
		</div>
  </div>
      &nbsp&nbsp<a href="logout.php">logout</a>
	</div>

			<div class="line" width:"5px">
			</div>

 <div class="pic">
      <img class="mySlides" src="sj1.jpg" width="100%" height="58%" >
			<img class="mySlides" src="sj2.jpg" width="100%" height="58%" >
			<img class="mySlides" src="sj3.jpg" width="100%" height="58%" >
			<div class="line" height:"10px">
			</div>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</div>
<div class="news">
	<div class="newshead">
<p>LATEST NEWS</p>
	</div>
	<div class="newsin">
<marquee scrolldelay="100%"direction="down" height="90%" hspace="5%">St Joseph College of Engineering and Technology Pala,
	  is the first new generation engineering college in Kerala to ISO certificated  instituation.</marquee>
	</div>
</div>
<div class="form1" style="text-align:left">
<img src="iso.jpg" width="110%" height="40%">
<h1 style="color:red" >SJCET Profile</h1>
<p>
News
News
S1 MCA Integrated (2016-2019) 93.5%- Second position in KTU , MCA S3 Lateral Entry (2016-18) results 98.11 %- First position in KTU , MCA S3 Regular(2015-18) results 92% – Third Position in MGU Kottayam
Founded in 2001 by the Catholic Diocese of Pala, SJCET is approved by the AICTE and affiliated to APJ Abdul Kalam Technological University (KTU), Kerala. It is the first new generation engineering college in Kerala with the ISO Certificate instituation which regulart conducts internal and extenal audit .
</p>
</div>
<div class="footer">
© 2017 St. Joseph College of Engineering. All rights reserved.
</div>
</div>
</body>
</html>
