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
<title>placementcell-comp</title>
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
		  margin-top:0%;
	    float: top-center;
	    margin-left: 8%;
	    position:absolute;
	    top:80px;
	    border-spacing:8px;
	    }
			.place
			{
				float:top-left;
				margin-left:25%;
				margin-top:-33%;
				width:50%;
				height:50%;
				color:red;
				border-radius:5px;
				position:relative;
				padding:5%;
				}

	td{
			width:50px;
			height:50px;
			padding-top:0px;
			margin-top:1px;
		}
</style>
</head>
<body>

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
 <div class="line">
 </div>
 <div class="news" style="margin-top:3%">
 <div class="newshead">
<p>LATEST NEWS</p>
 </div>
 <div class="newsin">
<marquee scrolldelay="100%"direction="down" height="90%" hspace="5%">St Joseph College of Engineering and Technology Palai,
	  is the first new generation engineering college in Kerala to ISO certificated  instituation.</marquee>
 </div>
</div>
<div class="place"style="margin-top:-33%">
<h2 style="color:black">COMPANY DETAILS</h2><br><br><br><br><br><br><br>
<?php
include 'dbcon.php';

?>

<table border=5px style=" margin-left:0%; margin-top:10%;">
<tr><th>ID</th><th>COMPANY</th><th>PHONE</th><th>EMAIL</th><th>USERNAME</th><th>ADD</th><th>DELETE</th></tr>
<?php
$sql="SELECT * FROM `companyreg`where status='0'";
$result=mysqli_query($con,$sql);
//$i=0;
while($row=mysqli_fetch_array($result))
{
	?>
	<tr>
	<td><?php echo $row['id'] ?></td>
	<td><?php echo $row['compname'] ?></td>
	<td><?php echo $row['phone'] ?></td>
	<td><?php echo $row['email'] ?></td>
	<td><?php echo $row['username'] ?></td>
	<form action="addlogincom.php" method="post">
		<input type="hidden" name="n1" value="<?php echo $row['username'] ?>" >
		<input type="hidden" name="psw" value="<?php echo $row['password'] ?>" >
		<input type="hidden" name="id" value="<?php echo $row['id'] ?>" >
		<td><button class="button" name="submit">CONFIRM</button></td>
		<td><button class="button" name="delete">DELETE</button></td>
		</form>
	 </tr>
	<?php
}
?>
</table>
</div>

</body>
</html>
