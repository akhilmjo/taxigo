<?php
include 'dbcon.php';

$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=1)
{	
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:31:25 GMT -->
<head>
 <link rel="icon" type="image/x-icon" href="images/logoicon.png"/>
<?php include 'gtranslate.php'; ?>
<style>
.div0
{
//padding:5%;
margin-top:-7%;
margin-left:95%;
width:20%;
height:20%;

}
.divp{
	margin:5%;
	margin-left:-15%;
	width:130%;
	height:10%;
	background-color:red;
	z-index:2px;
	border:2px solid white;
}
input{
 	background-color: transparent;
	border:none;
	color: #f77d0a;
}
.div4
{
//overflow:scroll;	
width:100%;
height:0%;	
background:url("images/slide.jpg");
margin:0%;
}
.div1
{
padding:5%;
margin-left:25%;
width:50%;
height:0%;

}
td{
align:left;
}
</style>
	<!-- Required meta tags always come first -->
	 <script src="validation.js"></script>
	
	<link rel="stylesheet" href="dist/bootstrap.min.css" type="text/css" media="all">
<link href="dist/jquery.bootgrid.css" rel="stylesheet" />
<script src="dist/jquery-1.11.1.min.js"></script>
<script src="dist/bootstrap.min.js"></script>
<script src="dist/jquery.bootgrid.min.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TaxiGo-Sign in as <?php echo $_SESSION['user_name'];?></title>
	<!--Fonts-->
	<link href="css/style2.css" rel="stylesheet">
	<link href="css/style3.css" rel="stylesheet">
	<!--Bootstrap-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<!--Font Awesome-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<!--Simple Line Icons-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!--Owl Carousel-->
	<link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
	<!--Select-->
	<link rel="stylesheet" href="vendors/bootstrap-select/css/bootstrap-select.css">
	<!--Theme Styles-->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/theme.css">
	<!--datepick-->
	<link href="dcalendar.picker.css" rel="stylesheet" type="text/css">
    <link href="../../css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	
<link rel="stylesheet" href="css/jquery.popup.css" type="text/css">
<script src="jspop/pop.js"></script>
<script type="text/javascript" src="jspop/jquery.popup.js"></script>
<script type="text/javascript">
    $(function() {
      $(".js__p_start, .js__p_another_start").simplePopup();
    });
	
  </script>
  <style>
  table{
  margin-left:50%;
  }
  th, td {
    padding: 1px;
}
div.view
{
    position:absolute;
    margin-top:10%;
    margin-left:10px;
    
}
  </style>
	</head>
<body>


	<!--Top Bar-->
	
	<section class="row top-bar">
		<h2 class="hd-sec">Heading</h2>
		<div class="container">
			<div class="welcome-texts"><span class="welcome-text">Welcome to</span><span>TaxiGo!</span></div>
			<ul class="social-lists-wSearch nav nav-pills">
				<li class="search-pop"><a href="#"><span class="ion-ios-search-strong"></span></a></li>
				<li><a href="#"><i class="ion-social-facebook"></i></a></li>
				<li><a href="#"><i class="ion-social-twitter"></i></a></li>
				<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
				<li><a href="#"><i class="ion-social-linkedin-outline"></i></a></li>
				<li><a href="#"><i class="ion-social-rss"></i></a></li>
			</ul>
		</div>
	</section>
	
	<!--Info Bar-->

	<section class="row info-bar">
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-xs-8 logo-box">
					<a href="index-2.html" class="logo"><img src="images/logo.png" alt=""></a>
				</div>
				<div class="col-sm-9 col-xs-4 info-box">
					<div class="header-informations hidden-xs">
						<div class="media info-media">
							<div class="media-left"><i class="ion-location"></i></div>
							<div class="media-body">
								<h5 class="this-top">3588 N  koovappally, Kerala,</h5>
								<h5 class="this-bottom">india.</h5>
							</div>
						</div>
						<div class="media info-media">
							<div class="media-left"><i class="ion-ios-telephone"></i></div>
							<div class="media-body">
								<h5 class="this-top">+91-8281306327</h5>
								<h5 class="this-bottom">akhilmjoy8@gmail.com</h5>
							</div>
						</div>
						<div class="media info-media">
							<div class="media-left"><i class="ion-ios-clock"></i></div>
							<div class="media-body">
								<h5 class="this-top"id="mo"></h5>
								<h5 class="this-bottom" id="time"></h5>
							</div>
						</div>
						<div class="div0">
						<?php
						$d=$_SESSION['rid'];
						$sql="SELECT * FROM `registration` WHERE `reg_id`=$d";
                         $result=mysqli_query($con,$sql);
						 $row=mysqli_fetch_array($result)
						 ?>
						 
							<a href="adminprofv.php"><img src="<?php echo $row['photo']?>" width=70 height=70 style="border-radius:50px;" ></a>
							<p style="color:white;"><?php echo $row['emailid']?></p>
						</div>
						<script>
							var d = new Date();
							var month = new Array();
							month[0] = "January";
							month[1] = "February";
							month[2] = "March";
							month[3] = "April";
							month[4] = "May";
							month[5] = "June";
							month[6] = "July";
							month[7] = "August";
							month[8] = "September";
							month[9] = "October";
							month[10] = "November";
							month[11] = "December";
							var n = month[d.getMonth()];
							var c =d.getDate();
							var t = d.getTime();var dateObj = new Date();
							var month = dateObj.getUTCMonth() + 1;
							var day = dateObj.getUTCDate();
							var year = dateObj.getUTCFullYear();
							
							var d = new Date(); // for now
								var h = d.getHours(); 
								var m=d.getMinutes(); 
								var s=d.getSeconds();
                            time=h + ":" +m + ":" + s;
							newdate = day + "/" + n + "/" + year;
							
							document.getElementById("mo").innerHTML = newdate;
							
							document.getElementById("time").innerHTML = time;
											
							
							</script>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!--Navigation-->
	<nav class="navbar navbar-default main-navigation navbar-static-top">
		<div class="container">
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="main-nav">				
				<ul class="nav navbar-nav">
					
					<li><a href="adminhome.php">home</a></li>					
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">user <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adminuserview.php">view all</a></li>
							<li><a href="admindeleteduser.php">deleted users</a></li>
							<li><a href="admin_fed_aprv.php">Feedback Approvel</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Driver <span class="caret"></span></a>
						<ul class="dropdown-menu">
						     <li><a href="adminadddrver.php">Registration</a></li>
							<li><a href="adminviewdriver.php">view active drivers</a></li>							
							<li><a href="adminviewdeleteddriver.php">view deleted drivers</a></li>
							
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">bookkings <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adminviewbook.php">view all</a></li>
							<li><a href="adminbookview_up.php">upcoming</a></li>
							<li><a href="aminviewbookingprev.php">Previous</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">vehicle <span class="caret"></span></a>
						<ul class="dropdown-menu">
						    <li><a href="adminaddvehicle.php">add</a></li>
							<li><a href="adminvehiclview.php">view all</a></li>		
							<li><a href="admindeletedvechicle.php">view Deleted</a></li>								
							<li><a href="alocatevehicle.php">alocate</a></li>
							<li><a href="adminualocate.php">Un alocate</a></li>
						</ul>
					</li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="adminprofv.php">edit profile</a></li>
							<li><a href="adminchngpass.php">change password</a></li>
							<li><a href="adminwallet.php">wallet</a></li>
						</ul>
					</li>
					
					<li><a href="logout.php">LoGOUT</a></li>
				</ul>			
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav> 

<div class="div4">
<div class="div1">
<h1 style="color:white; margin-left:-15%;">ACTIVE USER DETAlLS</h1>
<?php 
$tid=$_SESSION['id'];
$d='adminuserview.php';
$sql="SELECT * FROM `registration` WHERE `type_id`=2  and `status`=0";
$result=mysqli_query($con,$sql);

$i=0;
while($row=mysqli_fetch_array($result))
{
    ?>    

<table width=2 style="margin-top:-20%; margin-left:23%;">

<img src="<?php echo $row['photo']?>" width=100 height=100 style="border-radius:20px">
<form name="myform" action="adminuseredit.php" method="post" onsubmit="return val();">

    <tr><td><p style="color:white">Fname:</p></td><td><input style="color:#f77d0a" type="text" id="fn" name="firstname" value="<?php echo $row['fname']?>" onchange="return n11();" required></td>
	<td><p style="color:white">Lname:</p></td><td><input style="color:#f77d0a" type="text" name="lastname" value="<?php echo $row['lname']?>" required></td></tr>
    <tr><td><p style="color:white">phone_no:</p></td><td><input style="color:#f77d0a" type="text" id="ph" name="contact" value="<?php echo $row['phno']?>" onchange="return phn();" required></td>
	<td><p style="color:white">Email:</p></td><td><input style="color:#f77d0a" type="text" name="Email" value="<?php echo $row['emailid']?>"disabled ></td></tr>
	<tr><td><p style="color:white">Dob:</p></td><td><input style="color:#f77d0a" type="date" id="demo1" name="dob" value="<?php echo $row['Dob']?>"></td>
    <td><p style="color:white">Gender:</p></td><td><input style="color:#f77d0a" type="text" name="gender" value="<?php echo $row['gender']?>" ></td></tr>
	<tr><td><p style="color:white">Address:</p></td><td><input style="color:#f77d0a" type="text" name="addres" value="<?php echo $row['Address']?>" required></td>
	<td><p style="color:white">Id no:</p></td><td><input style="color:#f77d0a" type="text" id="aaa" name="idno" value="<?php echo $row['idproofno']?>" onchange="return aadh();" required></td></tr>
    <input style="color:#f77d0a" type="hidden" name="sid1" value="<?php echo $row['reg_id']?>"/>
	
     <!--<td style="margin-top:3%; margin-left:5%; color:blue;"><input type="submit" name="edit" value="Edit"></td>-->
     <td style="margin-top:3%; margin-left:5%; color:blue;"><?php echo "<a style='color:blue;' href=admin_useredit.php?rid=",$row['reg_id'],"&page=",$d,">Edit</a>" ?></td>
     <td style="margin-top:3%; margin-left:15%; color:blue;"><input type="submit" name="delete" value="Delete"></td>
   </dl>
   <script src="dcalendar.picker.js"></script> 

    </form>
	</table>
	<script>
$('#demo1').dcalendarpicker();
$('#calendar-demo').dcalendar(); //creates the calendar
</script>
	<div class="divp">
	</div>
	
    <?php
}

?>



</div>
	
</div>
</section>
	<div class="p_anch"></div>
        <div class="p_body js__p_body js__fadeout"></div>
	
	
			
	
		<!--Testimonial-->
		<section class="row testimonial-row">
	<div class="container"> 
<?php
               $sql1="SELECT * FROM `feedback` WHERE `status`='1' ORDER by `fed_id` DESC";
				$result1=mysqli_query($con,$sql1);             
				
				$k=0;
				while($row1=mysqli_fetch_array($result1))
				{
					$k=$k+1;
					if($k==4)
					{
						break;
					}
					//SELECT * FROM `registration` WHERE `reg_id` `fname``lname``photo`
					//SELECT `fed_id`, `reg_id`, `ratting`, `message`, `status` FROM `feedback` WHERE
					?>	
		<div class="row">
			<div class="testimonial-carousel">
				<div class="item testimonial">
					<div class="inner row m0">
						<p><?php echo $row1['message']?></p>
						<?php
						$rid=$row1['reg_id'];
						$sql2="SELECT * FROM `registration` WHERE `reg_id`='$rid'";
				        $result2=mysqli_query($con,$sql2);
						$row2=mysqli_fetch_array($result2);
						$n=$row1['ratting'];
						while($n>0)
						{
							$n=$n-1;
							?>
						<span class="stars">
							<i class="fa fa-star"></i>
						</span>
						<?php
						}
						?>
						<h5 class="client"><?php echo $row2['fname'] ?> <?php echo $row2['lname']?></?></h5>
						<a href="#" class="client-img"><img src="<?php echo $row2['photo'] ?>" alt="" class="img-circle"></a>
					</div>
				</div>
			</div>   				
		</div>
<?php
				}
				?>
	</div>
</section>
				
<footer class="row site-footer">
<div class="top-footer row m0">
<div class="container">
	<div class="row ft">
		<!--Widget-->
		<div class="col-sm-12 col-md-3 widget footer-widget widget-about">
			<a href="#" class="foot-logo"><img src="images/logo.png" alt=""></a>
			<p>Taxigo, the online taxi booking portal, provides its guests transportation services like premium cars, to travel in comfort, all across Kerala . We offer vehicles that suit both travel and special occasions. We mainly operate from kottayam. Taxi booking services can be availed to all locations in
			Kerala like Munnar, Thekkady and all other tourist locations, on request.</strong>.</p>			
			<ul class="nav nav-pills social-nav">
				<li><a href="#" class="ion-social-facebook" data-toggle="tooltip" data-placement="top" title="Facbook"></a></li>
				<li><a href="#" class="ion-social-twitter" data-toggle="tooltip" data-placement="top" title="Twitter"></a></li>
				<li><a href="#" class="ion-social-googleplus" data-toggle="tooltip" data-placement="top" title="Google Plus"></a></li>
				<li><a href="#" class="ion-social-linkedin" data-toggle="tooltip" data-placement="top" title="Linkedin"></a></li>
				<li><a href="#" class="ion-social-tumblr" data-toggle="tooltip" data-placement="top" title="Tumblr"></a></li>
			</ul>
		</div>
		<!--Widget-->
		<div class="col-sm-12 col-md-3 widget footer-widget widget-contact-info">
			<h4 class="widget-title">CONTACT INFO</h4>
			<ul class="nav foot-nav">
				<li><i class="ion-location"></i>3588 N  koovappally, Kerala,india</li>
				<li><i class="ion-ios-telephone"></i>8281306327</li>
				<li><i class="ion-email-unread"></i><a href="mailto:taxigo950@gmail.com">taxigo950@gmail.com</a></li>
			</ul>
			<div id="foot-map" class="google-map" data-lat="23.8932752" data-lon="90.3822415" data-marker="images/map-marker.png"></div>
		</div>
		<!--Widget-->
		<div class="col-sm-12 col-md-2 widget footer-widget widget-links">
			<h4 class="widget-title">Usefull link</h4>
			<ul class="nav foot-nav style2">				
				<li><i class="fa fa-angle-double-right"></i><a href="#">Contact</a></li>
				<li><i class="fa fa-angle-double-right"></i><a href="#">About</a></li>
			</ul>
		</div>
		<!--Widget-->
	
	</div>
</div>
</div>
			
<div class="bottom-footer row m0">
	<div class="container">
		<div class="row">
			Copyright © 2017 by<a href="#">Taxgo</a>. All rights reserved!
		</div>
	</div>
</div>
</footer>
<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!--Contact-->    
		<script src="js/jquery.form.js"></script>
		<script src="js/jquery.validate.min.js"></script>
		<script src="js/contact.js"></script>
		<!--Owl Carousel-->
		<script src="vendors/owl.carousel/owl.carousel.min.js"></script>
		<!--CounterUp-->
		<script src="vendors/couterup/jquery.counterup.min.js"></script>
		<!--WayPoints-->
		<script src="vendors/waypoint/waypoints.min.js"></script>
		<!--Select-->
		<script src="vendors/bootstrap-select/js/bootstrap-select.min.js"></script>
		<!--Instafeed-->
		<script src="vendors/instafeed/instafeed.min.js"></script>
		<!-- Isotope -->
		<script src="vendors/imagesloaded/imagesloaded.pkgd.min.js"></script>
		<script src="vendors/isotope/isotope.min.js"></script>
		<!--Theme Script-->    
		<script src="js/theme.js"></script>
</body>
	
	
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:42:02 GMT -->
</html>