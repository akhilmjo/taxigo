<?php
include 'dbcon.php';
if(!(isset($_SESSION['user_name'])))
{	
	header('location:index.php');
}
$uname=$_SESSION['user_name'];
$lid=$_SESSION['id'];
if(isset($_POST['selcar']))
{
	
$vid=$_POST['vid'];	
$alid=$_POST['alid'];

        $start=$_POST['start'];
		$dest=$_POST['dest'];	
		$sdate=$_POST['sdate'];
		$smonth=$_POST['smonth'];
		$syear=$_POST['syear'];
		$stime=$_POST['stime'];
		$ddate=$_POST['ddate'];
		$dmonth=$_POST['dmonth'];
		$dyear=$_POST['dyear'];
		$dtime=$_POST['dtime'];
		$dist=$_POST['ddist'];
		$dur=$_POST['ddur'];
		$sdate2=$_POST['sdate2'];
		$ddate2=$_POST['ddate2'];
}
if(isset($_POST['submit1']))
{
	   $vid=$_POST['vid'];	
        $alid=$_POST['alid'];

		$psw=$_POST['psw'];
        $start=$_POST['start'];
		$dest=$_POST['dest'];	
		$sdate=$_POST['sdate'];
		$smonth=$_POST['smonth'];
		$syear=$_POST['syear'];
		$stime=$_POST['stime'];
		$ddate=$_POST['ddate'];
		$dmonth=$_POST['dmonth'];
		$dyear=$_POST['dyear'];
		$dtime=$_POST['dtime'];
		$dist=$_POST['ddist'];
		$dur=$_POST['ddur'];
		$sdate2=$_POST['sdate2'];
		$ddate2=$_POST['ddate2'];
		$sdatetime="$syear-$smonth-$sdate $stime";
		$ddatetime="$dyear-$dmonth-$ddate $dtime";
	    $ttl=$_POST['ttl'];
		//SELECT `w_id`, `logid`, `w_acc_no`, `cvv`, `bank_name`, `balance`, `w_passwd`, `status` FROM `wallet` WHERE 1
		$sql1="SELECT `balance`, `w_passwd` FROM `wallet` WHERE `logid`='$lid'";
		$result1=mysqli_query($con,$sql1);
		$row1=mysqli_fetch_array($result1);
		$bl=$row1['balance'];
		$psw1=$row1['w_passwd'];
		if($psw1==$psw)
		{
			if($bl>$ttl)
			{
			$nbl=$bl-$ttl;
			$sql2="UPDATE `wallet` SET `balance`='$nbl' WHERE `logid`='$lid'";
			$result2=mysqli_query($con,$sql2);
			
			$sql4="SELECT `balance` FROM `wallet` WHERE `logid`='11'";
			$result4=mysqli_query($con,$sql4);
			$row4=mysqli_fetch_array($result4);
			$blc=$row4['balance'];
			$nblc=$bl+$blc;
			
			$sql3="UPDATE `wallet` SET `balance`='$nblc' WHERE `logid`='11'";
			$result3=mysqli_query($con,$sql3);
			
			$sql6="SELECT * FROM `vehicle_reg` WHERE `vid`='$vid'";
			$result6=mysqli_query($con,$sql6);
			$row6=mysqli_fetch_array($result6);
			$vname=$row6['vname'];
			$vreg=$row6['vregno'];
			
			$sqls="SELECT * FROM `vehicle_alocation` WHERE `al_id`='$alid' AND `status`=0";
			$resultr=mysqli_query($con,$sqls);
			$rowa=mysqli_fetch_array($resultr);
			$dreg=$rowa['driver_regid'];
			
			$sql7="SELECT * FROM `registration` WHERE `reg_id`='$dreg'";
			$result7=mysqli_query($con,$sql7);
			$row7=mysqli_fetch_array($result7);
			$drname=$row7['fname'];
			$drem=$row7['emailid'];
			$drph=$row7['phno'];
			
			
			$sql="INSERT INTO `taxi_booking`(`vid`, `aloc_id`, `login_id`, `from_datetime`, `to_datetime`, `locn_from`, `locn_to`, `km`, `duration`, `total_amnt`, `status`) VALUES ('$vid', '$alid', '$lid','$sdatetime', '$ddatetime', '$start', '$dest', '$dist', '$dur', '$ttl', '0')";
			$result=mysqli_query($con,$sql);
			$subject = "TaxiGo";

			$message = "
					<html>
					<head>

					<title>TaxiGo</title>
					</head>
					<body>
					<div style='background-color:white;
					border:2px solid black;;
					width:50%;
					height:105%;
					border-radius:4px;'>

					<div style='position:relative;
					background-color:#545472;
					margin-top:-3.2%;
					width:100%;
					height:10%;'>
					<h1 style='font-family:Lucida Calligraphy; color:white;'>taxigo</h1>
					</div>
					<div style='background-color:white;
					margin-left:10%;
					width:80%;
					height:60%;'>
					<p>Hi, 
					<span>$uname </span> </p>
					<p>Your booking has been processed successfully.</p>
					<table>
					<tr><td><h5>Bookking Details:</h5></td></tr>
					<tr><td ><span style='margin-left:25%;'>From: $sdatetime To: $ddatetime </span></td></tr>
					<tr><td ><span style='margin-left:25%;'>location from: $start </span></td></tr>
					<tr><td ><span style='margin-left:25%;'>Location to: $dest </span></td></tr>
					<tr><td ><span style='margin-left:25%;'> $dist ,$dur duration</span></td></tr>
					<tr><td ><span style='margin-left:25%;'>Total: $ttl</span></td></tr>

					<tr><td><h5>Vehicle Details:</h5></td></tr>
					<tr><td ><span style='margin-left:25%;'>Name:$vname</span></td></tr>
					<tr><td ><span style='margin-left:25%;'>Reg No:$vreg</span></td></tr>


					<tr><td><h5>Driver Details:</h5></td></tr>
					<tr><td ><span style='margin-left:25%;'>Name: $drname</span></td></tr>
					<tr><td ><span style='margin-left:25%;'>Email: $drem</span></td></tr>
					<tr><td ><span style='margin-left:25%;'>Phone: $drph</span></br></br></br></td></tr>


					<tr><td><h3 style='margin-left:-25%; color:red;'>for more detais Contact</h3></td></tr>
					<tr><td><h4 style='margin-left:75%;'>taxigo950@gmail.com</h4></td></tr>
					<tr><td><h4 style='font-family:bold; margin-left:75%;'>8281306327</h4></td></tr>

					</table>
					</div>
					</div>
					</body>
					</html>
			";

			// Always set content-type when sending HTML email
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

			// More headers
			$headers .= 'From: <webmaster@example.com>' . "\r\n";
			$headers .= 'Cc: myboss@example.com' . "\r\n";

			mail($uname,$subject,"$message",$headers);
			header('location:userhome.php');

			}
			else
			{
					
				echo "<script>if(confirm('no balance for bookking!!!!!!')){document.location.href='userhome.php'}else{document.location.href='userhome.php'};</script>";

			}
		}
		else{
			
			echo "<script>if(confirm('incorrect password!!!!!!')){document.location.href='userhome.php'}else{document.location.href='userhome.php'};</script>";

		}
	
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from haintheme.com/demo/html/supershine/single-car.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:43:52 GMT -->
<head>
 <link rel="icon" type="image/x-icon" href="images/logoicon.png"/>
<?php include 'gtranslate.php'; ?>
  <!-- Required meta tags always come first -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
<title>TaxiGo-Sign in as <?php echo $_SESSION['user_name'];?></title>
  <!--Fonts-->
  
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
  <!-- Plyr -->
  <link rel="stylesheet" href="vendors/plyr/plyr.css">
  <!-- Scrollbar -->
  <link rel="stylesheet" href="vendors/swiper/css/swiper.min.css">
  <!-- Popup -->
  <link rel="stylesheet" href="vendors/magnific/magnific-popup.css">
  <!--Theme Styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/theme.css">
  	<style>
.div0
{
//padding:5%;
margin-top:-7%;
margin-left:95%;
width:20%;
height:20%;

}
</style>
</head>
<body>
  <!--Top Bar-->
  <section class="row top-bar">
  <div class="container">
  <div class="welcome-texts"><span class="welcome-text">Welcome to</span><span>Super Shine!</span></div>
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
						 
							<a href="userprofv.php"><img src="<?php echo $row['photo']?>" width=70 height=70 style="border-radius:50px;" ></a>
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
				
				<li><a href="userhome.php">home</a></li>					
				<li><a href="#">about</a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookking<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="fleet.php">car</a></li>
							<li><a href="fleet.php">tempo</a></li>
						</ul>
				</li>
						
				<li><a href="#">contact</a></li>
				
				<li><a href="logout.php">Logout</a></li>
			</ul>			
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav> 
 
  <!--Page Cover-->
  <section class="row page-cover">
  <div class="container">
  	<h2 class="h1 page-title">Car Detail</h2>
  	<ol class="breadcrumb">
  		<li><a href="index-2.html">home</a></li>
  		<li class="active">fleets</li>
  	</ol>
  </div>
  </section>
  
  <section class="row wrapper-car-details">
  <?php
				$tid=$_SESSION['id'];
				$sql="SELECT * FROM `vehicle_reg` where `vid`='$vid'";
				$result=mysqli_query($con,$sql);
				$row=mysqli_fetch_array($result);
				//SELECT `vid`, `vname`, `vregno`, `vphoto`, `vseatno`, `vmodel`, 
				//`vcolor`, `vrate`, `status`, `valoc` FROM `vehicle_reg` WHERE 1
	?>
  <div class="container">
  <a href="userhome.php"><img src="images/goback.png" alt="" width="50" height="30"></img>goback</a>
  	<div class="row car-dt">
  		<div class="col-sm-12 col-md-8 col-xs-12 car-images fleet">
  			<div class="row m0 this-heading">,
  				<h5 class="this-class"></h5>
  				<h3 class="vehicle-title"><?php echo $row['vname'] ?></h3>						
    			<h6 class="reviews">
    				<i class="fa fa-star-o starred"></i>
    				<i class="fa fa-star-o starred"></i>
    				<i class="fa fa-star-o starred"></i>
    				<i class="fa fa-star-o"></i>
    				<i class="fa fa-star-o"></i> 
    				(5 reviews)
    			</h6>
  			</div>
  			<div class="row m0 this-cover-image">
  				<img src="<?php echo $row['vphoto'] ?>" alt="" class="this-image" width=500 height=400>
  				<!--<img src="images/car-detail/logo.png" alt="" class="this-brand">-->
  				
  				<ul class="this-social nav">
  					<li><a href="#"><i class="ion-social-facebook"></i></a></li>
  					<li><a href="#"><i class="ion-social-twitter"></i></a></li>
  					<li><a href="#"><i class="ion-social-googleplus"></i></a></li>
  					<li><a href="#"><i class="ion-social-linkedin"></i></a></li>
  					<li><a href="#"><i class="ion-social-tumblr"></i></a></li>
  				</ul>
  			</div>
  			<!-- Swiper -->
    	
  		</div>
  		<div class="col-sm-12 col-md-4 col-xs-12 car-infomations fleet">
		
  			<div class="row focus-infos">
			
  				<h4 class="this-heading">FOCUS INFOMATIONS</h4>
  				</br></br>
  			</div>
  			<ul class="focus-informations nav">
  			<li><span class="icon"><img src="images/icons/car-details/1.png" alt=""></span>Vehicle Name <span class="this-value"><?php echo $row['vname'] ?></span></li>
  			<li><span class="icon"><img src="images/icons/car-details/2.png" alt=""></span>Colour <span class="this-value"><?php echo $row['vcolor'] ?></span></li>
  			<li><span class="icon"><img src="images/icons/car-details/3.png" alt=""></span>Registration No:<span class="this-value"><?php echo $row['vregno'] ?></span></li>
  			<!--<li><span class="icon"><img src="images/icons/car-details/4.png" alt=""></span>Economy <span class="this-value">06 lits/100 kms</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/5.png" alt=""></span>Fuel type <span class="this-value">Mixed</span></li>
  			<li><span class="icon"><img src="images/icons/car-details/6.png" alt=""></span>Power <span class="this-value">250 HP</span></li>-->
  			<li><span class="icon"><img src="images/icons/car-details/7.png" alt=""></span>Seats <span class="this-value"><?php echo $row['vseatno'] ?></span></li>
			<li><span class="icon"><img src="images/icons/car-details/9.png" alt=""></span>Product Model <span class="this-value"><?php echo $row['vmodel'] ?></span></li></br>
   			
  		</ul>
  		<div class="this-footer row m0">
  			<h3 class="rent text-center"><small>from</small><?php echo $row['vrate'] ?><sub>/Km</sub></h3><!--,,-->
  			<button class="hire-btn" data-toggle="modal" data-target=".order-modal">Book Now</button>
  		</div>
  		</div>
  	</div>

  
  	

  <div class="may-you-like-header row m0">
  	
  </div>
  
  </div>
  </section>
  
  <footer class="row site-footer">
  	<div class="top-footer row m0">
  		<div class="container">
  			<div class="row ft">
  				<!--Widget-->
  				
  				<!--Widget-->
  				<div class="col-sm-12 col-md-3 widget footer-widget widget-contact-info">
  					<h4 class="widget-title">CONTACT INFO</h4>
  					<ul class="nav foot-nav">
  						<li><i class="ion-location"></i>3588 N  Stelling road, Brooklyn, NYC, United State.</li>
  						<li><i class="ion-ios-telephone"></i>1800 - 112 - 8888/ EXT: 001</li>
  						<li><i class="ion-email-unread"></i><a href="mailto:SuperHire@support.com.xxx">SuperHire@support.com.xxx</a></li>
  					</ul>
  					<div id="foot-map" class="google-map" data-lat="23.8932752" data-lon="90.3822415" data-marker="images/map-marker.png"></div>
  				</div>
  				<!--Widget-->
  				<div class="col-sm-12 col-md-2 widget footer-widget widget-links">
  					<h4 class="widget-title">Usefull link</h4>
  					<ul class="nav foot-nav style2">
  						<li><i class="fa fa-angle-double-right"></i><a href="#">FAQs</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Contact</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">About</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Membership</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Exchange accepted</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Help</a></li>
  						<li><i class="fa fa-angle-double-right"></i><a href="#">Other</a></li>
  					</ul>
  				</div>
  				<!--Widget-->
  				<div class="col-sm-12 col-md-4 widget footer-widget widget-contact">
  					<h4 class="widget-title">CONTACT &amp; SUBCRIBE US</h4>
  					<div class="row m0 contact-form-info">
  						<form action="http://haintheme.com/demo/html/supershine/contact_process.php" class="foot-contct-form contactForm row m0">
  					<div class="input-group">
  						<input type="text" name="name" id="name" class="form-control" placeholder="Your name">
  						<span class="input-group-addon"><i class="ion-person"></i></span>
  					</div>
  					<div class="input-group">
  						<input type="email" name="email" id="email" class="form-control" placeholder="Enter your email">
  						<span class="input-group-addon"><i class="ion-email-unread"></i></span>
  					</div>
  					<div class="input-group">
  						<textarea name="message" id="message" class="form-control" placeholder="Your messages"></textarea>
  						<span class="input-group-addon"><i class="ion-android-chat"></i></span>
  					</div>
  					<div class="row m0">
  						<input type="checkbox" name="subscribe" id="subscribe" class="sr-only  contact-checkbox">
  						<label for="subscribe">Also subscribe to your e-mail *</label>
  					</div>
  					<input type="submit" value="SEND MESSENGE" class="btn btn-primary">
  					<div class="foot-msg"><span>(*)</span> : We never spam your email</div>
  				</form>
  					<div id="success"><span>Your message sent successfully.</span></div>
  					<div id="error"><span>Something wrong here!.</span></div>
  					</div>
  				</div>
  			</div>
  		</div>
  	</div>
  	<div class="bottom-footer row m0">
  		<div class="container">
  			<div class="row">
  				Copyright © 2016 by <a href="#">Haintheme</a>. Designed by <a href="#">PukDG</a>. All rights reserved!
  			</div>
  		</div>
  	</div>
  </footer>
  <div class="modal fade order-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg">
      <div class="modal-content container">
      	<ul class="nav nav-pills this-navigation nav-justified">
      		<li><a href="userhome.php">Choose Car</a></li>
      		<li class="active"><a href="#">Request info</a></li>
      		<!--<li><a href="#">Confirm</a></li>-->
      	</ul>
      	
      	<form action="#" method="post">
      		<div class="col-sm-8">
      			<!--<h5 class="this-top">Returning Custumer? CLICK <a href="#">here</a> TO LOGIN</h5>
      			<h5 class="this-top">Have a coupon? CLICK <a href="#">here</a> TO ENTER YOUR CODE</h5>-->
      			<div class="row">
      				<!--<div class="form-group col-sm-6">
      					<h5 class="this-label">First Name <span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Last Name <span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Email Address <span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Phone<span>*</span></h5>
      					<input type="text" class="form-control">
      				</div>
					<input type="hidden" name="start" >-->
						
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Pickup Date</h5>
      					<input type="text" class="form-control" value="<?php echo $sdate2 ?>"  disabled>
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Drop off Date</h5>
      					<input type="text" class="form-control" value="<?php echo $sdate2 ?>" disabled >
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Pickup Time</h5>
      					<input type="text" class="form-control" name="stime" value="<?php echo $stime?>" disabled>
      				</div>
					<div class="form-group col-sm-6">
      					<h5 class="this-label">Drop time</h5>
      					<input type="text" class="form-control"  name="dtime" value="<?php echo $dtime?>" disabled>
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Pickup Location</h5>
      					<input class="form-control"  name="start" value="<?php echo $start?>" disabled></textarea>
      				</div>
      				<div class="form-group col-sm-6">
      					<h5 class="this-label">Destination</h5>
      					<input class="form-control" name="dest" value="<?php echo $dest?>" disabled></textarea>
      				</div>
					<div class="form-group col-sm-6">
      					<h5 class="this-label">Total Km</h5>
      					<input type="text" class="form-control"  value="<?php echo $dist?> km" disabled >
      				</div>
					<div class="form-group col-sm-6">
      					<h5 class="this-label">Expected time to reach</h5>
      					<input type="text" class="form-control" value="<?php echo $dur?>" disabled>
      				</div>
					
      				<!--<div class="form-group col-sm-12">
      					<input type="checkbox" name="create-account" id="create-account">
      					<label for="create-account">Create an account?</label>
      				</div>
      				<div class="form-group col-sm-12">
      					<h5 class="this-label">Order Note</h5>
      					<textarea class="form-control"></textarea>
      				</div>-->
      			</div>
      		</div>
      		<div class="col-sm-4">
      			<div class="your-order row m0">
      				<h4 class="this-heading">Book Now</h4>
      				<div class="row order-data">
      					<div class="media name-of-car">
      						<div class="media-left media-middle"><span>Name of car</span></div>
      						<div class="media-body"><?php echo $row['vname'] ?> (<?php echo $row['vcolor'] ?>  <?php echo $row['vmodel'] ?>)</div>
      					</div>
      					<div class="media image-of-car">
      						<div class="media-left media-bottom"><span>Image</span></div>
      						<div class="media-body"><img src="<?php echo $row['vphoto'] ?>" alt="" width=150 height=100></div>
      					</div>
      					<ul class="nav other-infos-car">
      						<li>Price (per day) <span><?php echo $row['vrate'] ?></span></li>
      						<!--<li>Tax (10%) <span>(free) $0.00</span></li>-->
      						<li>total cost <span><?php echo $row['vrate']*$dist ?></span></li>
							<input type="hidden" name="ttl" value="<?php echo $row['vrate']*$dist ?>">
      					</ul>
						<div class="media image-of-car">
      						<div class="media-left media-bottom"><span>password</span></div>
      						<div ><input type="password" name="psw" placeholder="enter wallet password" style="width:100%;"></div>
      					</div>
      				</div>
      				<!--<button class="btn btn-primary btn-block">BOOK BY EMAIL!</button>	-->						
      			</div>
      			<h6 class="contact-back text-center">(We will contact you back!)</h6>
      			<!--<h4 class="straight-pay text-center">STRAIGHT PAY</h4>
      			<div class="row m0 choose-payment-method">
      				<input type="radio" name="payment-method" id="payment-method01" class="sr-only" checked>
      				<label for="payment-method01">Stripe Payment <a href="#"><img src="images/car-detail/stripe.jpg" alt=""></a></label>
      				<article class="stripe">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</article>
      				<input type="radio" name="payment-method" id="payment-method02" class="sr-only">
      				<label for="payment-method02">Paypal <a href="#"><img src="images/car-detail/paypal.png" alt=""></a></label>
      			</div>-->
				<input type="hidden" name="start" value="<?php echo $start ?>,kerala,india">
						<input type="hidden" name="dest" value="<?php echo $dest?>,kerala,india">
						<input type="hidden" name="sdate" value="<?php echo $sdate?>">
						<input type="hidden" name="smonth" value="<?php echo $smonth?>">
						<input type="hidden" name="syear" value="<?php echo $syear?>">
						<input type="hidden" name="stime" value="<?php echo $stime?>">
						<input type="hidden" name="ddate" value="<?php echo $ddate?>">
						<input type="hidden" name="dmonth" value="<?php echo $dmonth?>">
						<input type="hidden" name="dyear" value="<?php echo $dyear?>">
						<input type="hidden" name="dtime" value="<?php echo $dtime?>">
						<input type="hidden" name="dyear" value="<?php echo $dyear?>">
						<input type="hidden" name="dtime" value="<?php echo $dtime?>">
						
						
						<input type="hidden" name="alid" value="<?php echo $alid?>">
						
						
						
						<input type="hidden" name="sdate2" value="<?php echo $sdate2;?>">
						<input type="hidden" name="ddate2" value="<?php echo $ddate2;?>">
						<input type="hidden" value="<?php echo $dist?> km" name="ddist">
						<input type="hidden" value="<?php echo $dur?>" name="ddur">
					
					<input type="hidden" value="<?php echo $row['vid']?>"  name="vid">
      			<input type="submit" value="PAY NOW!" name="submit1" class="btn btn-primary btn-block">
      		</div>
      	</form>
      </div>
    </div>
  </div>
  <!-- jis file -->
  <script src="js/jquery-2.1.4.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!--Google Map-->
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="js/gmaps.min.js"></script>
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
  <!-- Scrollbar -->
  <script src="vendors/swiper/js/swiper.min.js"></script>
  <!-- Popup -->
  <script src="vendors/magnific/jquery.magnific-popup.min.js"></script>
  <!-- Plyr -->
  <script src="vendors/plyr/plyr.js"></script>
  <script>plyr.setup();</script>
  <!--Theme Script-->    
  <script src="js/theme.js"></script>
</body>

<!-- Mirrored from haintheme.com/demo/html/supershine/single-car.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:44:16 GMT -->
</html>