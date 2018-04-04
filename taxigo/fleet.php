<?php
include 'dbcon.php';
if(!(isset($_SESSION['user_name'])))
{	
	header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from haintheme.com/demo/html/supershine/fleet.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:42:45 GMT -->
<head>
 <link rel="icon" type="image/x-icon" href="images/logoicon.png"/>
<?php include 'gtranslate.php'; ?>
  <!-- Required meta tags always come first -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>TaxiGo-Sign in as <?php echo $_SESSION['user_name'];?></title>   
  <!--Fonts-->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

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

  <!--Theme Styles-->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/theme.css"> 
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
  							<h5 class="this-top">3588 N  Stelling road, Brooklyn,</h5>
  							<h5 class="this-bottom">NYC, United State.</h5>
  						</div>
  					</div>
  					<div class="media info-media">
  						<div class="media-left"><i class="ion-ios-telephone"></i></div>
  						<div class="media-body">
  							<h5 class="this-top">1800 - 112 - 8888/ EXT: 001</h5>
  							<h5 class="this-bottom">Support@Supershine.com</h5>
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
			<h2 class="h1 page-title">Fleet <span>(No Sidebar)</span></h2>
			<ol class="breadcrumb">
				<li><a href="index-2.html">home</a></li>
				<li class="active">fleet</li>
			</ol>
		</div>
	</section>
	<section class="row wrapper-fleet">
		<div class="container">
			<div class="row m0 banner-row"><a href="#"><img src="images/banner/fleet.png" alt="" class="img-responsive"></a></div>
			<div class="row m0 fleet-filters">
				<div class="filter-by filter-div">
					<div class="this-label">Filter by:</div>
					<select class="selectpicker fleet-filter-select">
						<option>All category</option>
						<option>Category 01</option>
						<option>Category 02</option>
						<option>Category 03</option>
						<option>Category 04</option>
						<option>Category 05</option>
					</select>
				</div>
				<div class="filter-div layout-filter">
					<a href="#"><i class="ion-ios-list-outline"></i></a>
					<a href="#" class="active"><i class="ion-grid"></i></a>
				</div>
				<div class="filter-div show-fleet">
					<div class="this-label">Show:</div>
					<select class="selectpicker fleet-filter-select">
						<option>05 items/page</option>
						<option>10 items/page</option>
						<option>15 items/page</option>
						<option>20 items/page</option>
						<option>25 items/page</option>
					</select>
				</div>
			<ul class="pagination">
				<li class="active"><a href="#">01</a></li>
				<li><a href="#">02</a></li>
				<li class="dots"><a href="#">...</a></li>
				<li><a href="#">30</a></li>
				<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
			</ul>
			</div>
								
			<div class="media fleet fleet-list sale-offer">
				<div class="row">
					<div class="col-md-5 col-sm-12 col-xs-12">
						<div class="media-left"><a href="single-car.html"><img src="images/fleet/5.jpg" alt=""></a></div>
					</div>
					<div class="col-md-7">
						<div class="media-body this-body">
							<div class="media this-header">
								<div class="media-body">
									<div class="row m0">
										<h2 class="rent">$69.96<sub>/day</sub></h2>
									<h6 class="reviews">
										<i class="fa fa-star-o starred"></i>
										<i class="fa fa-star-o starred"></i>
										<i class="fa fa-star-o starred"></i>
										<i class="fa fa-star-o"></i>
										<i class="fa fa-star-o"></i> 
										(5 reviews)
									</h6>
									</div>
									<h4 class="vehicle-title">Alfa Romeo Mito (Mercedes Series 2016)</h4>  							
								</div>
								<div class="media-right">
									<a href="single-car.php" class="detail-btn btn"><span>detail</span><span><img src="images/fleet/key.png" alt=""></span></a>
								</div>
							</div>
							<div class="summary row m0">
								Rental car companies are notorious for finding additional surcharges, sometimes not added until the point of sale. These can include location or airport taxe...
							</div>
							<div class="row specification">
								<ul class="nav">
									<li><span><img src="images/icons/fleet-list/1.png" alt=""></span>Auto trasition</li>
									<li><span><img src="images/icons/fleet-list/2.png" alt=""></span>06 list/100 kms</li>
									<li><span><img src="images/icons/fleet-list/3.png" alt=""></span>02 seats</li>
									<li><span><img src="images/icons/fleet-list/4.png" alt=""></span>Make Year 2016</li>
									<li><span><img src="images/icons/fleet-list/5.png" alt=""></span>04 air bags</li>
									<li><span><img src="images/icons/fleet-list/6.png" alt=""></span>100 lits capity</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>				
			<div class="row fleet-pagination-row pagination-row fleet-filters">
				<div class="pagi-info">
					<h5>Total <span>150</span>results</h5>
					<h5>Showing items from <span><u>01 to 05</u></span></h5>
				</div>
				<ul class="pagination">
					<li>Page:</li>
					<li class="active"><a href="#">01</a></li>
					<li><a href="#">02</a></li>
					<li class="dots"><a href="#">...</a></li>
					<li><a href="#">30</a></li>
					<li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
				</ul>
			</div>
		</div>
	</section>
 	<section class="row banner2-prefolder">
 		<div class="container">
 			<div class="row inner m0">
 				<div class="col-md-6 this-left">
 					<div class="this-texts">
 						<h2 class="this-title">Quick Sale</h2>
					<h2 class="this-title2 h1">VANS PICKUP!</h2>
					<p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
					<a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
 					</div>
			</div>
			<div class="col-md-6 this-right">
 					<div class="this-texts">
 						<h2 class="this-title">Online Booking</h2>
					<h2 class="this-title2 h1">CADILAC SALE 39%</h2>
					<p>At vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum.</p>
					<a href="#" class="read-more">read more<i class="ion-arrow-right-b"></i></a>
 					</div>
			</div>
 			</div>
 		</div>
 	</section>
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
  <!-- Plyr -->
  <script src="vendors/plyr/plyr.js"></script>
  <script>plyr.setup();</script>
  <!--Theme Script-->    
  <script src="js/theme.js"></script>
</body>

<!-- Mirrored from haintheme.com/demo/html/supershine/fleet.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 10 Aug 2017 14:43:17 GMT -->
</html>