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
	<img src="logop.png" style="margin-left:0px">
	PLACEMENT CELL &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="placement.php">Home</a>&nbsp&nbsp<div class="dropdown">
  <span> <a href="#">Registration</a> </span>
  <div class="dropdown-content">
	<a href="empreg.php">Employee</a>
	<a href="studentreg.php">Student</a>
	<a href="companyreg.php">Company</a>
  </div>
  </div>&nbsp&nbsp<a href="placementcontact.php">Contact</a>&nbsp&nbsp<a href="login.php">login</a>
	</div>

			<div class="line" width:"5px">
			</div>

 <div class="pic">
      <img class="mySlides" src="am5.gif" width="100%" height="50%" >
			<img class="mySlides" src="header.jpg" width="100%" height="50%" >
			<img class="mySlides" src="am6.jpg" width="100%" height="50%" >
			<div class="line" height:"5px">
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
<marquee scrolldelay="100%"direction="down" height="90%" hspace="5%">Amal Jyoth College of Engineering,
	 Kanjirapally, is the first new generation engineering college in Kerala to secure
	 the prestigious NBA accreditation for prime departments.</marquee>
	</div>
</div>
<div class="form1" style="text-align:left">
<img src="naac.jpg" width="110%" height="40%">
<h1 style="color:red" >Amal Jyothi Profile</h1>
<p>
Amal Jyothi College of Engineering emerges as the ONLY ENGINEERING COLLEGE in Kerala to secure NAAC ‘A’ grade.
Congratulations and Thank you very much to staff, students, alumni, parents and well-wishers.
News
News
S1 MCA Integrated (2015-20) 93.5%- First position in MGU Kottayam, MCA S3 Lateral Entry (2014-16) results 98.11 %- First position in MGU Kottayam, MCA S3 Regular(2013-16) results 92% – Third Position in MGU Kottayam
Amal Jyothi College of Engineering has established itself as a benchmark of excellence in technical higher education and research. Founded in 2001 by the Catholic Diocese of Kanjirappally, Amal Jyothi is approved by the AICTE and affiliated to APJ Abdul Kalam Technological University (KTU), Kerala. It is the first new generation engineering college in Kerala with the prestigious NBA accredited departments and the first and only engineering college in Kerala with the recognition of ‘A’ grade from NAAC.
</p>
</div>
<div class="footer">
© 2016 Amal Jyothi College of Engineering. All rights reserved.
</div>
</div>
</body>
</html>
