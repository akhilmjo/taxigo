<?php
include 'dbcon.php';

$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=3)
{	
	header('location:index.php');
}
if(isset($_POST['submit']))
{
	$bid=$_POST['bid'];
	$vid1=$_POST['v_name'];
	
	$sql66="SELECT * FROM `vehicle_alocation` WHERE `vid`='$vid1' AND`status`='0'";	
    $result66=mysqli_query($con,$sql66);
	$fetch66=mysqli_fetch_array($result66);
    $alid=$fetch66['al_id'];
	$d_regid=$fetch66['driver_regid'];
	
	$sql77="SELECT * FROM `login` WHERE `reg_id`='$d_regid'";	
    $result77=mysqli_query($con,$sql77);
	$fetch77=mysqli_fetch_array($result77);
	$lid=$fetch77['login_id'];
	$sql0="UPDATE `taxi_booking` SET  `vid`=$vid1,`aloc_id`='$alid' WHERE  `bk_id`='$bid'";
	//print_r($sql0);
    $result00=mysqli_query($con,$sql0);
}

?>
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:31:25 GMT -->
<head>
 <link rel="icon" type="image/x-icon" href="images/logoicon.png"/>
   <?php include 'gtranslate.php'; ?>
	<!-- Required meta tags always come first -->

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
	

  <style>
.div0
{
//padding:5%;
margin-top:-7%;
margin-left:95%;
width:20%;
height:20%;

}
  table{
  margin-left:50%;
  }
  td {
	  text-align:left;
	 width:10%;
	  color:red;
   
}
th{
	  text-align:left;
	  width:-35%;
	  color:white;
  
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
				<div class="col-sm-9 col-xs-4 info-box" >
					<div class="header-informations hidden-xs">
						<div class="media info-media" >
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
						 
							<a href="userprofv.php"><img src="<?php echo $row['photo']?>" width=70 height=70 style="border-radius:50px " ></a>
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
					
					<li><a href="driverhome.php">home</a></li>					
					<li><a href="driveraboutus.php">about</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookking<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="driverbookprev.php">Previous Bookkings</a></li>
							<li><a href="driverbookupview.php">Upcomming bookings</a></li>
							<li><a href="driver_curr _book.php">Now</a></li>
						</ul>
				    </li>
					<li><a href="driverupdateloc.php">location</a></li>							
					<li><a href="drivercontact.php">contact</a></li><li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="driverprofv.php">edit profile</a></li>
							<li><a href="driverchangepass.php">change password</a></li>
							
						</ul>
					</li>					
					<li><a href="logout.php">Logout</a></li>
				</ul>			
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav> 

	<!--Home 1 Slide Banner-->

	<section class="slide-banner row">
	
	<img src="images/slide.jpg" alt="" class="this-bg hidden-xs">
		<div class="inner-block" style="margin-top:-40%; overflow:hidden;">

                            <div class="chit-chat-heading">

                                  <h1>Now</h1>
                            </div>
                            <div class="table-responsive" style="width:97%; margin-left:3%; overflow:scroll; height:500px; ">
                                <table class="table table-hover"  style="width:150%; margin-left:1%;">
                                  <thead >
                                    <tr>
                                      <th>book id</th>
                                      <th>vehicle id</th>
                                      <th> Driver Reg id</th>
									  <th>from datetime</th>
                                      <th>to datetime</th>
									  <th>location from</th>
									  <th>location to</th>
									  <th>change to</th>
                                       </tr>
                              </thead>
							  <tbody>
							  <?php
date_default_timezone_set('Asia/Kolkata');
$date3 = date('Y-m-d', time());
$time2=date('h:i:s a', time());
$v=date("H:i:s", strtotime($time2));
$date="$date3 $v";
$logid=$_SESSION['id'];
$rid=$_SESSION['rid'];
	$rid=$_SESSION['rid'];
	$sql33="SELECT * FROM `vehicle_alocation` WHERE `driver_regid`='$rid' and `status`='0'";
	$re=mysqli_query($con,$sql33);
	$ft=mysqli_fetch_array($re);
	$al=$ft['al_id'];
$sql1="SELECT * FROM `taxi_booking` WHERE '$date' BETWEEN `from_datetime` AND `to_datetime` and `aloc_id`='$al'";
							
//$sql1="SELECT * FROM `taxi_booking` where `from_datetime`>'$date' and `login_id`='$logid'";
$result=mysqli_query($con,$sql1);

while($fetch=mysqli_fetch_array($result)){
	$fdate=$fetch["from_datetime"];
	$edate=$fetch["to_datetime"];
$sq8="SELECT * FROM `taxi_booking` WHERE '$fdate' AND '$edate' BETWEEN `from_datetime` AND `to_datetime`";
$result8=mysqli_query($con,$sq8);


	$vid=$fetch["vid"];
	$alid=$fetch["aloc_id"];
	
	$sql6="SELECT * FROM `vehicle_alocation` WHERE `al_id`='$alid'";	
    $result6=mysqli_query($con,$sql6);
	$fetch6=mysqli_fetch_array($result6);
	$drid=$fetch6["driver_regid"];
	
	$sql4="SELECT * FROM `vehicle_reg` WHERE `vid`='$vid'";	
    $result4=mysqli_query($con,$sql4);
	$fetch4=mysqli_fetch_array($result4);
	$vname=$fetch4['vname'];
		$d="userbookup.php";
		 ?>

<tr>
<td><?php echo $fetch["bk_id"];?></td>
<td><?php echo "<a href=userbookvsingleview.php?vid=",$fetch['vid'],"&page=",$d,">$vid</a>" ?></td>
<td><?php echo "<a href=userdriversingleview.php?rid=",$drid,"&page=",$d,">$drid</a>" ?></td>
<td><?php echo $fetch["from_datetime"];?></td>
<td><?php echo $fetch["to_datetime"];?></td>
<td><?php echo $fetch["locn_from"];?></td>
<td><?php echo $fetch["locn_to"];?></td>
<td>
<form action="#"method="post">
<input type="hidden" value="<?php echo $fetch["bk_id"];?>" name="bid">
<input type="hidden" value="<?php echo $drid;?>" name="d_regid">
<select name="v_name">
<?php

 
$row8=mysqli_fetch_array($result8);
$id=$row8['vid'];
$sql4="SELECT * FROM `vehicle_reg` WHERE `vid`!=$id  and `valoc`=1 and `status`=0";	
$result5=mysqli_query($con,$sql4);	
	
while($row4=mysqli_fetch_array($result5))
{
	//continue;
?>

<option value="<?php echo $row4['vid'];?>" ><?php echo $row4['vregno'];?></option>

<?php

}
?>
</select>
</td>
<td>
<input type="submit" name="submit">
</form>
</tr>
<?php

}

?>
							  </tbody>

                      </table>
										</div>

                           

     <div class="clearfix"> </div>
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
				<li><i class="fa fa-angle-double-right"></i><a href="usercontact.php">Contact</a></li>
				<li><i class="fa fa-angle-double-right"></i><a href="useraboutus.php">About</a></li>
			</ul>
		</div>
		<!--Widget-->
		<div class="col-sm-12 col-md-4 widget footer-widget widget-contact">
			<h4 class="widget-title">FeedBack</h4>
			<div class="row m0 contact-form-info">
				<form action="feedback.php" method="post">
					
					<div class="input-group">
						<textarea name="message" id="message" class="form-control" placeholder="Your messages" style="width:200%; border-radius:5px;"></textarea>
					</div>
					
					<div class="input-group">
						<select name="rate" class="form-control" style="width:150%; margin-top:5%; border-radius:5px;">
							<option style="color:red;" value=5>excellent</option>
							<option style="color:red;" value=4>very good</option>
							<option style="color:red;" value=3>good</option>
							<option style="color:red;" value=2>fair</option>						
							<option style="color:red;" value=1>poor</option>
				        </select>						
					</div>
					<input type="submit" name="submit" value="SEND MESSENGE" class="btn btn-primary" style="width:100%; margin-top:5%;">
				</form>
				
			</div>
		</div>
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