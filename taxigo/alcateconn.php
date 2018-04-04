<?php
include 'dbcon.php';

if(isset($_POST['submit']))
{
$a=$_POST["vhid"];
$b=$_POST["drid"];

$sql="SELECT `vid` FROM `vehicle_reg` WHERE `vregno`='$a'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
//echo($row['vid']);
$vid=$row['vid'];
$sql1="SELECT `reg_id` FROM `registration` WHERE `emailid`='$b'";
$result1=mysqli_query($con,$sql1);
$row=mysqli_fetch_assoc($result1);
//echo($row['reg_id']);
$drid=$row['reg_id'];
$sql2="INSERT INTO `vehicle_alocation`(`vid`, `driver_regid`, `status`) VALUES ('$vid','$drid','0')";
$result2=mysqli_query($con,$sql2);
$sql3="UPDATE `registration` SET `dvraloc`=1 WHERE `emailid`='$b'";
$result3=mysqli_query($con,$sql3);
$sql4="UPDATE `vehicle_reg` SET `valoc`=1 WHERE `vregno`='$a'";
$result4=mysqli_query($con,$sql4);
unset($_SESSION['vhid']);
unset($_SESSION['drid']);
$sql2="SELECT * FROM `vehicle_alocation` WHERE `driver_regid`='$drid' and `status`=0";
$re=mysqli_query($con,$sql2);
$row=mysqli_fetch_array($re);
$alid=$row['al_id'];
$sql="INSERT INTO `vehicle_location`(`aloc_id`, `place`, `reg_id`, `status`) VALUES ('$alid','koovappally,kerala,india','$drid','0')";
$result=mysqli_query($con,$sql);

header('location:alocatevehicle.php');
}
?>