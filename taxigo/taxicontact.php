<?php
include 'dbcon.php';
session_start();
?>
<!DOCTYPE>
<html>
<head>
<?php include 'gtranslate.php'; ?>
<link rel="stylesheet" type="text/css" href="style.css" />
<<title>TaxiGo-Sign in as <?php echo $_SESSION['user_name'];?></title>
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
.form3
	{
	float:top;
	margin-left:26%;
	margin-top:5%;
	width:40%;
	height:60%;
	position:absolute;
	}
	
	th{
		background-color:black;
		color:red;
	}
	td{
		color: #cc0099;
	}
</style>
</head>
</style>
</head>
<body>
<div class="main">    
<div class="header">
	<img src="taxi-img.png" style="margin-left:0px">
	Taxi go &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
	<a href="index.php">Home</a>&nbsp&nbsp<div class="dropdown">
  <span> <a href="#">Registration</a> </span>
  <div class="dropdown-content">
	<a href="driverreg.php">Driver</a>
	<a href="customer.php">customer</a>
  </div>
  </div>&nbsp&nbsp<a href="taxiconact.php">Contact</a>&nbsp&nbsp<a href="login.php">login</a>
	</div>

 <div class="line">
 </div>
 <div class="news" style="margin-top:3%">
 <div class="newshead">
<p>LATEST NEWS</p>
 </div>
 <div class="newsin">
<marquee scrolldelay="100%"direction="down" height="90%" hspace="5%">Taxi go , pala
	is the first new generation taxi managnment sysem  in Kerala to secure
      transportaton.</marquee>
 </div>
</div>
<div class="form3"style="margin-top:-33%">
<table style="text-align: center;  height="100";">
            <tr><td style="text-align: center;"><font size="5" >TAXI MANAGNMENT SYSTEM PVT LTD</font></td></tr>
     
            <tr><td ><font  size="4" >Moonnilavu(PO),PALA</font></td></tr>
           
            <tr><td ><font  size="3" >KOTTAYAM 686586</font></td></tr>
           
            <tr><td><font  size="3" >Web:www.taxigo.ac.in</font></td></tr>
            
            <tr><td ><font  size="3" >Email:info@taxigo.ac.in</font></td></tr>
            
            <tr><td ><font  size="3"  >Phone & Fax:04828 434411</font></td></tr>
			<tr><td ><font  size="6"color="black"><u>MD</u></font></td></tr>
			<tr><td ><font  size="3"color="black" ><img src="md.png" width="100" height="100"></font></td></tr>
            <tr><td ><font  size="3" color="black">Akhil M Joy</font></td></tr>  
			<tr><td ><font  size="3" color="black">PHONE:8281306327</font></td></tr> 
			<tr><td ><font  size="3" color="black" >Email:akhil@gmail.com</font></td></tr> 
           </table>
</div>

</body>
</html>