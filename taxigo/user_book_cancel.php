<?php
include 'dbcon.php';
if(!(isset($_SESSION['user_name'])))
{	
	header('location:index.php');
}
if(isset($_POST['cancel']))
{
$uname=$_SESSION['user_name'];
$lid=$_SESSION['id'];
$bid=$_POST['bid'];

$sql1="SELECT `balance`, `w_passwd` FROM `wallet` WHERE `logid`='11'";
$result1=mysqli_query($con,$sql1);
$row1=mysqli_fetch_array($result1);
$b=$row1['balance'];

$sql3="SELECT `balance`, `w_passwd` FROM `wallet` WHERE `logid`='$lid'";
$result3=mysqli_query($con,$sql3);
$row3=mysqli_fetch_array($result3);
$bb=$row3['balance'];

$sql2="SELECT * FROM `taxi_booking` WHERE `bk_id`='$bid'";
$result2=mysqli_query($con,$sql2);
$row2=mysqli_fetch_array($result2);
$b_bl=$row2['total_amnt'];



if($b>=$b_bl)
{
$tp=.70*$b_bl;
echo $tp;
$ad_bl=$b-$tp;
$u_bl=$bb+$tp;

$sql5="UPDATE `wallet` SET `balance`='$ad_bl' WHERE `logid`='11'";
$result5=mysqli_query($con,$sql5);

$sql7="UPDATE `taxi_booking` SET `cancel_st`='1' WHERE `bk_id`='$bid' ";
$result7=mysqli_query($con,$sql7);
	
$sql6="UPDATE `wallet` SET `balance`='$u_bl' WHERE `logid`='$lid'";
$result6=mysqli_query($con,$sql6);
header("location:userhome.php");
}
else
{
	?>
	<script>alert("bookking cancelation not possible");
	window.location.href="userhome.php";</script>
	<?php
}


}
?>