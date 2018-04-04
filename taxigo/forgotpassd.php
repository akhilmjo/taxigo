<?php
include 'dbcon.php';

?> <!DOCTYPE html>
<html lang="en">

<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:31:25 GMT -->
<head>
 <link rel="icon" type="image/x-icon" href="images/logoicon.png"/>
<?php include 'gtranslate.php'; ?>

     <script src='https://www.google.com/recaptcha/api.js'></script>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>TaxiGo-Sign in as <?php echo $_SESSION['user_name'];?></title>
	<!--Fonts-->
	<link href="css/style2.css" rel="stylesheet">
	<link href="css/style3.css" rel="stylesheet">
	<link href="css/login.css" rel="stylesheet">
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
								<h5 class="this-top">Monday - Friday:</h5>
								<h5 class="this-bottom">08:00am ~ 05:00pm</h5>
							</div>
						</div>
					</div>
					<div class="cart-nav">
						<a href="#" class="cart-count"><i class="ion-bag"></i><span class="badge">03</span></a>
						<a href="#" class="nav-hider hidden-xs hidden-sm"><i class="ion-android-menu"></i></a>
						<button type="button" class="navbar-toggle nav-hider collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<i class="ion-android-menu"></i>
						</button>
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
					<li><a href="#">about</a></li>
					<li><a href="index.php#popup" class="js__p_start">Registration</a></li>
							
					<li><a href="#">contact</a></li>
					
					<li><a href="login.php">Login</a></li>
				</ul>			
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>
	<!--Home 1 Slide Banner-->
	<section class="slide-banner row">
	
	

		<img src="images/slide.jpg" alt="" class="this-bg hidden-xs">
  
		<div class="this-texts container" style="margin-top:-4%; margin-top:3%;">
		<div class="login-html">
	<h1 style="color:white margin-left:0%">forgot password</h1>
	<form action="forgotcon.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
	<div class="login-wrap">	
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Enter your email id!!!</label>
					<input id="user1" type="text" class="input" name="user">
				</div>
				
				
				<div class="group">
					<input type="submit" class="button" value="send password"name="submit">
					
				</div>
				
			</div>
		</div>
		</div>
		</form>
	</div>
			
		</div>
		
	</section>
	</br></br></br></br></br>
	<!--3 Fold-->

		<footer class="row site-footer">
			<div class="top-footer row m0">
				<div class="container">
					<div class="row ft">
						<!--Widget-->
						<div class="col-sm-12 col-md-3 widget footer-widget widget-about">
							<a href="#" class="foot-logo"><img src="images/logo.png" alt=""></a>
							<p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, <strong>vel illum dolore eu feugiat nulla facilisis</strong>.</p>
							<p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
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
						Copyright © 2017 by <a href="#">Haintheme</a>. Designed by <a href="#">PukDG</a>. All rights reserved!
					</div>
				</div>
			</div>
		</footer>    
		<script src="js/jquery-2.1.4.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<!--Google Map-->
		<!--<script src="https://maps.googleapis.com/maps/api/js"></script>-->
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
		<!--Theme Script-->    
		<script src="js/theme.js"></script>
	</body>
	
<!-- Mirrored from haintheme.com/demo/html/supershine/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:42:02 GMT -->
</html>