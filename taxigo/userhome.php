<?php   
include 'dbcon.php';

$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=2)
{	
	header('location:index.php');
}
?>
<?php
	if(isset($_POST['submit']))
	{
		//$ddd3=$_POST['dist'];
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
		$start=$_POST['start'];
		$dest=$_POST['dest'];
		function getMonthString($m){
				if($m=='Jan'){
					return 1;
				}else if($m=='Feb'){
					return 2;
				}else if($m=='March'){
					return 3;
				}else if($m=='April'){
					return 4;
				}else if($m=='May'){
					return 5;
				}else if($m=='Jun'){
					return 6;
				}else if($m=='Jul'){
					return 7;
				}else if($m=='Aug'){
					return 8;
				}else if($m=='Sep'){
					return 9;
				}else if($m=='Oct'){
					return 10;
				}else if($m=='Nov'){
					return 11;
				}else if($m=='Dec'){
					return 12;
				}
			}
			$m1=getMonthString($smonth);
			$m2=getMonthString($dmonth);
			$sdate2="$syear-$m1-$sdate";
			$ddate2="$dyear-$m2-$ddate";
		$sdatetime="$syear-$m1-$sdate $stime:00";
		$ddatetime="$dyear-$m2-$ddate $dtime:00";
		//echo $sdatetime;
		$datetime1 = new DateTime($sdatetime);
        $datetime2 = new DateTime($ddatetime);
	
		//echo $datetime2;
			date_default_timezone_set('Asia/Kolkata');
			$date3 = date('Y-m-d', time());
			$time2=date('h:i:s a', time());
			$v=date("H:i:s", strtotime($time2));
			$date="$date3 $v";
			//echo $date;			
			$date3=new DateTime($date);
			if($datetime2<$datetime1)
			{
		    echo "<script>if(confirm('Enter a valid date and time!!!!')){document.location.href='userhome.php'}else{document.location.href='userhome.php'};</script>";

			}
			
			if($date3>$datetime1)
			{
			 echo "<script>if(confirm('Enter a valid date and time!!!!')){document.location.href='userhome.php'}else{document.location.href='userhome.php'};</script>";

			}
				
			
					 		
		
	}
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<meta charset="utf-8">
<head>
  <link rel="icon" type="image/x-icon" href="images/logoicon.png"/>
<?php include 'gtranslate.php'; ?>
   
	 
     <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false&libraries=places"></script>
     </script>
    
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
	
	<link rel="stylesheet" href="css/jquery-ui.css">
<script src="js/jquery-1.9.1.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="http://malsup.github.com/jquery.form.js"></script>
	<style>
.div0
{
//padding:5%;
margin-top:-7%;
margin-left:95%;
width:20%;
height:20%;

}
	.hidden { 
    display: none; 
}

.unhidden { 
    display: block; }
	
.fleets2 .container {
	display:none;
    position: relative;
    z-index: 2;
 }
 .mapp {
	 width:100%; 
	 height:100%;
 }
 .dd {
	 display: none; 
    }
	</style>
	
	
</head>
<body onload="GetRoute()">

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
				<li><a href="useraboutus.php">about</a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bookking<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="userbookprev.php">Previous Bookkings</a></li>
							<li><a href="userbookup.php">Upcomming bookings</a></li>
							<li><a href="user_curr_book.php">Current bookings</a></li>
						</ul>
				</li>
						
				<li><a href="usercontact.php">contact</a></li>
				<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="userprofv.php">edit profile</a></li>
							<li><a href="userchngepass.php">change password</a></li>
							<li><a href="userwallet.php">wallet</a></li>
						</ul>
					</li>
				
				<li><a href="logout.php">Logout</a></li>
			</ul>			
		</div><!-- /.navbar-collapse -->
	</div><!-- /.container-fluid -->
</nav> 
<!--Home 1 Slide Banner-->
<section class="slide-banner row" style="height=10%;">
	<img src="images/image27.jpg" style="height:600px; width:2000px;" alt="" class="this-bg hidden-xs" >
</section>


<section class="row fold3">
		<div class="container">
			<div class="row fold-banners">
				<div class="col-md-3 col-sm-6 banner-vans fold-banner">
					<div class="row inner">
						<img src="images/fold3/1n.jpg" alt="" class="img-responsive">
						<h2 class="top-text">At Winter</h2>
						<h5 class="bottom-text"><img src="images/fold3/wagonar.png" style="margin-top:-65%;" width="700" alt="" class="img-responsive"></h5>
					</div>
				</div>
				<div class="col-md-3 col-md-offset-6 col-sm-6 banner-limo  fold-banner">					
					<div class="row inner">
						<img src="images/fold3/2n.jpg" alt="" class="img-responsive">
						<h2 class="top-text">Big Sale</h2>
						<h5 class="bottom-text"><img src="images/fold3/toyota-innova.png" style="margin-top:-60%;" width="500" alt="" class="img-responsive"></h5>
					</div>
				</div>
			</div>
			<div class="row finder-form">
			<script>
					$(document).ready(function() {
					$("#form1").submit(function(e) {
						e.preventDefault();
						var formData=$(this).serialize();
						var pUrl="userhome.php";

						submitFormSave(formData, pUrl);
					});

					function submitFormSave(formData, pUrl) {
						$.ajax({
							url: pUrl,
							type: 'POST',
							data:formData,
							success: function(response) {
								$("#dd").html(response);
							}
						}).success(function(){

						});
					}
				});
			</script>
				<div class="col-md-6 col-md-offset-3 car-finder-form">
				
				<iframe name="votar" style="display:none;"></iframe>
					<form class="row inner"  method="POST" id="form1" action="#">
											<div id="map"></div>
											<script type="text/javascript">		
		
	
var source, destination;
var directionsDisplay;
var directionsService = new google.maps.DirectionsService();
google.maps.event.addDomListener(window, 'load', function () {
new google.maps.places.SearchBox(document.getElementById('txtSource'));
new google.maps.places.SearchBox(document.getElementById('txtDestination'));
directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
});

function GetRoute() {


var mumbai = new google.maps.LatLng(12.9715987,77.5945627);
var mapOptions = {
	zoom: 7,
	center: mumbai
};
map = new google.maps.Map(document.getElementById('sample'), mapOptions);
directionsDisplay.setMap(map);
//directionsDisplay.setPanel(document.getElementById('dvPanel'));

//*********DIRECTIONS AND ROUTE**********************//
//source = document.getElementById("txtSource").value;

source ="<?php echo $start; ?>";
//alert(source);
//destination = document.getElementById("txtDestination").value;
destination ="<?php echo $dest; ?>";
source=source+","+"kerala,india";
destination=destination+","+"kerala,india";
var dis=source+".....to...."+destination;
//alert(dis);

var request = {
	origin: source,
	destination: destination,
	travelMode: google.maps.TravelMode.DRIVING
};
directionsService.route(request, function (response, status) {
	if (status == google.maps.DirectionsStatus.OK) {
		directionsDisplay.setDirections(response);
	}
});

//*********DISTANCE AND DURATION**********************//

var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix({
	origins: [source],
	destinations: [destination],
	travelMode: google.maps.TravelMode.DRIVING,
	unitSystem: google.maps.UnitSystem.METRIC,
	avoidHighways: false,
	avoidTolls: false
}, function (response, status) {
	if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
		var distance = response.rows[0].elements[0].distance.text;
		var duration = response.rows[0].elements[0].duration.text;
		var dvDistance = document.getElementById("dvDistance");
		//alert(distance);
		//alert(duration);
		dvDistance.innerHTML = "";
		dvDistance.innerHTML += "Distance: " + distance + "<br />";
		dvDistance.innerHTML += "Duration:" + duration;
        //document.getElementById("fdist").value= distance;
	} else {
		alert("Unable to find the distance via road.");
	}
});
        
}
function unhide(dd) {
var item = document.getElementById(dd);
if (item) {
item.className=(item.className=='hidden')?'unhidden':'unhidden';
}}
 </script>
											<script type="text/javascript">
											function initMap() {
											var map = new google.maps.Map(document.getElementById('sample'), {
											center: {lat: -33.8688, lng: 151.2195},
											zoom: 13
											});       
											var input = document.getElementById('txtSource'); 
											var input1 = document.getElementById('txtDestination'); 


											var autocomplete = new google.maps.places.Autocomplete(input);

											autocomplete.bindTo('bounds', map);
											var autocomplete = new google.maps.places.Autocomplete(input1);

											autocomplete.bindTo('bounds', map);   											
											}
											</script>
												<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB1ypVDGm8lr-4DB9Rk-c2YJXq1ormSRIs&libraries=places&callback=initMap"
												async defer></script>
						<h3 class="form-title">Searching for a Taxi </h3>
						<div class="input-group">
							<input type="text" class="form-control" placeholder="Enter pickup location..."  name="start" id="txtSource" value="koovappally" style="width: 500px">
							
							
						</div>
						<div class="input-group">
						
							<input type="text" class="form-control" placeholder="Enter drop location..." name="dest" id="txtDestination" value="kottayam" style="width: 500px">
							
							
						</div>
						
					    <!--<h5 class="return"><i class="ion-android-arrow-dropdown-circle"></i>Return different location</h5> -->
						<div class="row this-foot">
							<div class="col-xs-4 date">
								<h5 class="this-hd">Pickup Date <i class="ion-arrow-down-b"></i></h5>
								<div class="date row m0">
									<div class="day-month">
										<select class="selectpicker day" name="sdate">
											<option value="01" selected>01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05">05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<div class="month-year">
										<select class="selectpicker month" name="smonth">
											<option value="Jan">Jan</option>
											<option value="Feb">Feb</option>
											<option value="March">March</option>
											<option value="April">April</option>
											<option value="May">May</option>
											<option value="Jun">Jun</option>
											<option value="Jul">Jul</option>
											<option value="Aug">Aug</option>
											<option value="Sep">Sep</option>
											<option value="Oct">Oct</option>
											<option value="Nov"selected>Nov</option>
											<option value="Dec">Dec</option>
										</select>
										<select class="selectpicker year" name="syear">
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2017">2020</option>
										</select>
									</div>
								</div>
								<div class="time row m0">
									<i class="ion-ios-clock"></i>
									<select class="selectpicker time-select" name="stime">
										<option value="01:00">01:00 am</option>
										<option value="02:00">02:00 am</option>
										<option value="03:00">03:00 am</option>
										<option value="04:00">04:00 am</option>
										<option value="05:00">05:00 am</option>
										<option value="06:00">06:00 am</option>
										<option value="07:00">07:00 am</option>
										<option value="08:00">08:00 am</option>
										<option value="09:00">09:00 am</option>
										<option value="10:00">10:00 am</option>
										<option value="11:00">11:00 am</option>
										<option value="12:00">12:00 pm</option>
										<option value="13:00">01:00 pm</option>
										<option value="14:00">02:00 pm</option>
										<option value="15:00">03:00 pm</option>
										<option value="16:00">04:00 pm</option>
										<option value="17:00">05:00 pm</option>
										<option value="18:00">06:00 pm</option>
										<option value="19:00">07:00 pm</option>
										<option value="20:00">08:00 pm</option>
										<option value="21:00">09:00 pm</option>
										<option value="22:00">10:00 pm</option>
										<option value="23:00">11:00 pm</option>
										<option value="24:00">12:00 am</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4 date">
								<h5 class="this-hd">Drop Date <i class="ion-arrow-down-b"></i></h5>
								<div class="date row m0">
									<div class="day-month">
										<select class="selectpicker day" name="ddate">
											<option value="01">01</option>
											<option value="02">02</option>
											<option value="03">03</option>
											<option value="04">04</option>
											<option value="05" selected>05</option>
											<option value="06">06</option>
											<option value="07">07</option>
											<option value="08">08</option>
											<option value="09">09</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
									</div>
									<div class="month-year">
										<select class="selectpicker month" name="dmonth">
											<option value="Jan">Jan</option>
											<option value="Feb">Feb</option>
											<option value="March">March</option>
											<option value="April">April</option>
											<option value="May">May</option>
											<option value="Jun">Jun</option>
											<option value="Jul">Jul</option>
											<option value="Aug">Aug</option>
											<option value="Sep">Sep</option>
											<option value="Oct">Oct</option>
											<option value="Nov" selected>Nov</option>
											<option value="Dec">Dec</option>
										</select>
										<select class="selectpicker year" name="dyear">											
											<option value="2018">2018</option>
											<option value="2019">2019</option>
											<option value="2017">2020</option>
										</select>
									</div>
								</div>
								<div class="time row m0">
									<i class="ion-ios-clock"></i>
									<select class="selectpicker time-select" name="dtime">
										<option value="01:00">01:00 am</option>
										<option value="02:00">02:00 am</option>
										<option value="03:00">03:00 am</option>
										<option value="04:00">04:00 am</option>
										<option value="05:00">05:00 am</option>
										<option value="06:00">06:00 am</option>
										<option value="07:00">07:00 am</option>
										<option value="08:00">08:00 am</option>
										<option value="09:00">09:00 am</option>
										<option value="10:00">10:00 am</option>
										<option value="11:00">11:00 am</option>
										<option value="12:00">12:00 pm</option>
										<option value="13:00">01:00 pm</option>
										<option value="14:00">02:00 pm</option>
										<option value="15:00">03:00 pm</option>
										<option value="16:00">04:00 pm</option>
										<option value="17:00">05:00 pm</option>
										<option value="18:00">06:00 pm</option>
										<option value="19:00">07:00 pm</option>
										<option value="20:00">08:00 pm</option>
										<option value="21:00">09:00 pm</option>
										<option value="22:00">10:00 pm</option>
										<option value="23:00">11:00 pm</option>
										<option value="24:00">12:00 am</option>
									</select>
								</div>
							</div>
							<div class="col-xs-4">
						<!--<input type="text" name="dist" id="df" >
							<a class="btn btn-primary" onclick="GetRoute();" onclick="document.getElementById('submit').click();">find route</a><br><br>-->
								<input type="submit"  id="submit" name="submit" class="btn btn-primary" value="get Taxi">
							</div>
						</div>
						
					</form>
				</div>
			</div>
		</div>
	</section><br><br><br><br><br><br><br>
	<div id="dd">
	
	</div>
	<div id="dvDistance">
                </div>
				
 
<div id="sample" style="width:100%; height:580px; border-color:red;"></div>


 <div class="container" id="dd">
 
	<div class="row section-title text-center white">
		<h6 class="this-top">SO MANY CHOICE</h6>
		<h2 class="h1 this-main">Available Cars </h2>
	</div>
	<?php
	if(isset($_POST['submit']))
	{
		
		
		       $sql1="SELECT `vid` FROM `vehicle_reg` WHERE `valoc`=1 and `status`=0";
				$result1=mysqli_query($con,$sql1);	
                $ar=array();
				$ar1=array();
				$i=0;
				$k=0;
				while($row1=mysqli_fetch_array($result1))
				{
					        $vid1=$row1['vid'];
				     		$sql2="SELECT * FROM `taxi_booking` WHERE `vid`='$vid1'";
							$result2=mysqli_query($con,$sql2);
							if (mysqli_num_rows($result2) > 0)
							{
							  $sq8="SELECT * FROM `taxi_booking` WHERE '$sdatetime' AND '$ddatetime' BETWEEN `from_datetime` AND `to_datetime` and `vid`='$vid1'";
							  $result8=mysqli_query($con,$sq8);
							  $row8=mysqli_fetch_array($result8);
							 //echo $row8;
							  if($row8['vid']=="")
							  {
								  
									$ar[$i]=$vid1;
									$i=$i+1;
							  }
							}
							else{ 
          													  
								$ar1[$k]=$vid1;
							    $k=$k+1;
							  
							}
													
				}
			    $l=0;
				for($m=$i;$m<$i+$k;$m++)
				{
					
				 $ar[$m]=$ar1[$l];
					$l=$l+1;
				}
	
	?>
	<div class="row">
	
		<div class="col-md-4 fleet fleet2 sale-offer">
		<table width=1100>
		
	
				<?php
				
					$ct=0;
				$n1=$k;
				echo "<tr>";
				for($m=0;$m<$i+$k;$m++)
				{
				$g=$ar[$m];
				//echo $g;
				$tid=$_SESSION['id'];
				//$sql="SELECT * FROM `vehicle_reg` WHERE `valoc`=1 and `vid`='$g'";
				//$result=mysqli_query($con,$sql);
				
				$sqls="SELECT * FROM `vehicle_alocation` WHERE `vid`='$g' AND `status`=0";
				$resultr=mysqli_query($con,$sqls);
				$rowa=mysqli_fetch_array($resultr);
				$dreg=$rowa['driver_regid'];
				$alid=$rowa['al_id'];
				
				$sqls1="SELECT * FROM `vehicle_location` WHERE `reg_id`='$dreg' AND `status`=0";
				$resultr1=mysqli_query($con,$sqls1);
				$rowa1=mysqli_fetch_array($resultr1);
				$dplace=$rowa1['place'];
				if($rowa1['place']=="")
				{ echo "dfsd";
					$dplace="koovappally,kerala,india";
				}
				 echo"<td>";
				$ct=$ct+1;
				//$row=mysqli_fetch_array($result);
				//$x="koovappally,kerala,india";
				//	$y="koovappally,kerala,india";
				
				//INSERT INTO `vehicle_reg`(`vid`, `vname`, `vregno`, `vphoto`, `vseatno`, `vmodel`, `vcolor`, `vrate`, `status`,
               
				?>    
     <!-- <script>
	       var dd
           var source1 ;
            var destination1;
			var distance1;
		source1 ="<?php echo $start;?>";
        destination1 ="<?php echo $dplace;?>";
		var service = new google.maps.DistanceMatrixService();
    service.getDistanceMatrix({
	origins: [source1],
	destinations: [destination1],
	travelMode: google.maps.TravelMode.DRIVING,
	unitSystem: google.maps.UnitSystem.METRIC,
	avoidHighways: false,
	avoidTolls: false
}, function (response, status) {
	if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
		distance1 = response.rows[0].elements[0].distance.text;
		var duration1 = response.rows[0].elements[0].duration.text;
		//var dvDistance1 = document.getElementById("dvDistance");
		alert(distance1);
		
	    //alert(duration1);
	
		//dvDistance.innerHTML = "";
		//dvDistance.innerHTML += "Distance: " + distance1 + "<br />";
		//dvDistance.innerHTML += "Duration:" + duration1;
<?php $distance1="<script>document.write(distance1);</script>"; ?>
	} else {
		alert("Unable to find the distance via road.");
	}
	
});
//var dd=document.write(distance1);
	//<?php $distance1="<script>document.write(distance1);</script>"; ?>
</script>-->
<script>
source ="<?php echo $start; ?>";
destination ="<?php echo $dest; ?>";
source=source+","+"kerala,india";
destination=destination+","+"kerala,india";

var service = new google.maps.DistanceMatrixService();
service.getDistanceMatrix({
	origins: [source],
	destinations: [destination],
	travelMode: google.maps.TravelMode.DRIVING,
	unitSystem: google.maps.UnitSystem.METRIC,
	avoidHighways: false,
	avoidTolls: false
}, function (response, status) {
	if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
		var distance = response.rows[0].elements[0].distance.text;
		var distance3 = response.rows[0].elements[0].distance.value/1000;
		var duration = response.rows[0].elements[0].duration.text;
		var dvDistance = document.getElementById("dvDistance");
		//alert(distance);
		//alert(duration);
		var dd3="<?php echo $ct;?>";
		var dd4="du<?php echo $ct;?>";
        //alert(dd4);
		dvDistance.innerHTML = "";
		dvDistance.innerHTML += "Distance: " + distance + "<br />";
		dvDistance.innerHTML += "Duration:" + duration;
		
		
        document.getElementById(dd3).value= distance3;
	    document.getElementById(dd4).value= duration;
	} else {
		alert("Unable to find the distance via road.");
	}
});
</script>
<?php
$st="$start,kerala,india";
$origin =urlencode($st);
$destination = urlencode($dplace);
//echo $dplace;
$url = "http://maps.googleapis.com/maps/api/directions/json?origin=".str_replace(' ', '+', $origin)."&destination=".str_replace(' ', '+', $destination)."&sensor=false";
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_PROXYPORT, 3128);
                curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
                $response = curl_exec($ch);
                curl_close($ch);
                $response_all = json_decode($response);
                // print_r($response);
                $distance = $response_all->routes[0]->legs[0]->distance->value;
				$dist3=$distance/1000;				 
if($dist3<50)
{
	$sql="SELECT * FROM `vehicle_reg` WHERE `valoc`=1 and `vid`='$g'";
	$result=mysqli_query($con,$sql);
	$row=mysqli_fetch_array($result);
				
}
else{
	continue;
	}

?>
			<form action="single-car.php" method="post">
				<div class="row vehicle-img text-center">
				   
					<img src="<?php echo $row['vphoto'] ?>" alt="" width=280 height=180>
				</div>
				<div class="row specification" style="border-radius:10px;">
					<ul class="nav">
					<span><?php	echo "<script> d </script>";?></span>
						<li><span><img src="images/icons/fleet2/1.png" alt=""></span><?php echo $row['vname'] ?></li>
						<li><span><img src="images/icons/fleet2/3.png" alt=""></span>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['vseatno'] ?></li>
						<li><span><img src="images/icons/fleet2/4.png" alt=""></span>&nbsp&nbsp&nbsp&nbsp&nbsp<?php echo $row['vmodel'] ?></li>
						<input type="hidden" name="start" value="<?php echo $start ?>">
						<input type="hidden" name="dest" value="<?php echo $dest?>">
						<input type="hidden" name="sdate" value="<?php echo $sdate?>">
						<input type="hidden" name="smonth" value="<?php echo $m1?>">
						<input type="hidden" name="syear" value="<?php echo $syear?>">
						<input type="hidden" name="stime" value="<?php echo $stime?>">
						<input type="hidden" name="ddate" value="<?php echo $ddate?>">
						<input type="hidden" name="dmonth" value="<?php echo $m2?>">
						<input type="hidden" name="dyear" value="<?php echo $dyear?>">
						<input type="hidden" name="dtime" value="<?php echo $dtime?>">
						<input type="hidden" name="dyear" value="<?php echo $dyear?>">
						<input type="hidden" name="dtime" value="<?php echo $dtime?>">
						
						
						<input type="hidden" name="alid" value="<?php echo $alid?>">
						
						
						
						<input type="hidden" name="sdate2" value="<?php echo $sdate2;?>">
						<input type="hidden" name="ddate2" value="<?php echo $ddate2;?>">
						<input type="hidden" id="<?php echo $ct;?>" name="ddist">
						<input type="hidden" id="du<?php echo $ct;?>" name="ddur">
						
						</ul>
					<input type="hidden" value="<?php echo $row['vid']?>"  name="vid">
					<input type="submit" name="selcar" class="details-page" value="+">
					</form>
				</div>
				
				<?php
				
				echo "</td>" ;
					   
					   if($ct%3==0){
						   echo "</tr>" ;
						    echo "<tr>" ;
						}
				
				}
	}
	else
	{

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