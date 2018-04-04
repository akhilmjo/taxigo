<?php
include 'dbcon.php';
?> 
<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:31:25 GMT -->
<head> 
 <link rel="icon" type="image/x-icon" href="images/logoicon.png"/>
   <?php include 'gtranslate.php'; ?>
   <script src="validation.js"></script>
	<!-- Required meta tags always come first -->
	

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TaxiGo</title>
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
   input {
	   
    //padding: 12px 20px;
    margin: 1px 0;
    box-sizing: border-box;
    //border: none;
    //background-color: white;
    //color: black;
}
  table{
  margin-left:50%;
  }
  th, td {
    padding: 2px;
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
					
					<li><a href="index.php">home</a></li>					
					<li><a href="about.php">about</a></li>
					<li><a href="#0" class="js__p_start">Registration</a></li>
							
					<li><a href="contact.php">contact</a></li>
					
					<li><a href="login.php">Login</a></li>
				</ul>			
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav> 

	<!--Home 1 Slide Banner-->

	<section class="slide-banner row">
	
		<img src="images/slide.jpg" alt="" class="this-bg hidden-xs">
	
	
        

		<div class="this-texts container">
		
			<h1 style="color:white; margin-top:-15%;">About Us</h1>
	<div style="margin-left:30%; width:40%; height:40%;"><p style="color:white;">
	Headquartered in Kottayam koovappally,Taxigo provides taxi service all over kerala. 
	we ensures you complete convenience, comfort and safety while traveling.
	At Taxigo, we employ only professional trained drivers.
	Our drivers are licensed and required to successfully complete a formal training program, 
	which includes training in defensive driving and safety. We offer a full range of taxi services. 
	The variety of car we offer depending upon your travel requirements and budget for Transportation.
	</p>
	</div>
		</div>
		
		
		
		
		
	</section>
	<div class="p_anch"></div>
        <div class="p_body js__p_body js__fadeout"></div>
	<section class="row fleets2">
		<div class="container">
			<div class="row section-title text-center white">
				<h6 class="this-top">SO MANY CHOICE</h6>
				<h2 class="h1 this-main">A Car for Every Need!</h2>
			</div>
			<div class="row">
				<div class="col-md-4 fleet fleet2 sale-offer">
					<table width=1100 style="margin-left:-2%;">
		
	
  
<?php


	//$sql="SELECT * FROM `vehicle_reg` WHERE `valoc`=1";
	$sql="SELECT * FROM `vehicle_reg`";
	$result=mysqli_query($con,$sql);
	$ct=0;
	echo "<tr>";
	while($row=mysqli_fetch_array($result))
	{			

    echo "<td>";
?>
			<form action="#" method="post">
				<div class="row vehicle-img text-center">
				   
					<img src="<?php echo $row['vphoto'] ?>" alt="" width=280 height=180>
				</div>
				<div class="row specification" style="border-radius:10px;">
					<ul class="nav">
					<span><?php	echo "<script> d </script>";?></span>
						<li><span><img src="images/icons/fleet2/1.png" alt=""></span><?php echo $row['vname'] ?></li>
						<li><span><img src="images/icons/fleet2/3.png" alt=""></span>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['vseatno'] ?></li>
						<li><span><img src="images/icons/fleet2/4.png" alt=""></span>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['vmodel'] ?></li>
						
					</ul>
					<input type="hidden" value="<?php echo $row['vid'] ?>"  name="vid">
					<!--<input type="submit" name="selcar" class="details-page" value="+">-->
					</form>
				</div>
				
				<?php
				
				echo "</td>" ;
                $ct=$ct+1;
					   if($ct%3==0){
						   echo "</tr>" ;
						    echo "<tr>" ;
						}
	}
				?>
				</table>
				</div>
				</div>
		</div>
	</section>
	
			
	
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
			
<div class="popup js__popup js__slide_top">

<a href="#" class="p_close js__p_close" title="Close"></a>
<img src="images/logo.png" alt="" class="this-bg hidden-xs" width="13%">
<h3 style="color:pink;margin-left:18%; margin-top:-4%;">REGISTRATION</h3><br />
								
      			<form action="userreg.php" method="post" enctype="multipart/form-data" name="form1" onsubmit="return val();"  >
					<table style="width:100%; cellpadding:5%; margin-left:18%;margin-top:-2%;">
						<tr><td>fristname<span style="color:red;">*</span>:</td> <td><input type="text" id="fn" name="fname"  onchange="return n11();" required></td>
						<tr><td>Last Name<span style="color:red;">*</span>:</td> <td><input type="text" name="lname" maxlength="10" required></td></tr>
						<tr><td>gender<span style="color:red;">*</span>:</td> <td><input type="radio" name="gender" value="male" checked> Male</input><input type="radio" name="gender" value="female"> Female</input>
                        <input type="radio" name="gender" value="other"> Other</td></tr>
						<tr><td> Email<span style="color:red;">*</span>:</td> <td><input type="text" id="em1" name="email" onchange="return em();" required></td></tr><tr></tr>
						<tr><td> Date Of Birth<span style="color:red;">*</span>:</td> <td><input  id="demo" type="text" name="dob"style="width:169px;" required></td></tr>
						<tr><td> phone no<span style="color:red;">*</span>:</td> <td><input type="text" id="ph" name="phno" required onchange="return phn();" required ></td></tr>
						<tr><td>photo<span style="color:red;">*</span>:</td><td><input name="photo" type="file" id="ufile" size="50" onchange="fileCheck();" required/></td></tr><tr></tr>												
						<tr><td> Address<span style="color:red;">*</span>:</td> <td><input type="textarea" rows="10" cols="70" name="address" style="width:35%" required ></td></tr>
						<tr><td> AAdhar proof no<span style="color:red;">*</span>:</td> <td><input type="text" id="aaa" name="idno" onchange="return aadh();" required ></td></tr>
						<tr><td> AAdhar proof<span style="color:red;">*</span>:</td> <td><input name="photo2" type="file" id="ufile1" size="50" onchange="ff11(this);" required /></td></tr>
						</table>
						<table style="width:-5%; margin-left:80%;margin-top:-5%;"><tr><td><input type="submit" class="btn btn-primary btn-block" name="submit" value="Register"  ></button></td></tr></table>	
                    </form>
<script src="../../../code.jquery.com/jquery-1.11.3.min.js"></script>
<script src="dcalendar.picker.js"></script> 
<script>
$('#demo').dcalendarpicker();
$('#calendar-demo').dcalendar(); //creates the calendar
</script>
			
			
<script type="text/javascript">   
	var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
  </script>
</div>	
</body>
	
	
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:42:02 GMT -->
</html>