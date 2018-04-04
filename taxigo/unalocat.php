<?php
include 'dbcon.php';
if(isset($_POST['unalocate']))
{

$vid=$_POST["vid"];
$rid=$_POST["rid"];
$alid=$_POST["alid"];
//echo $vid;
//echo $rid;
$sql2="UPDATE `vehicle_alocation` SET `status`='1' WHERE `al_id`='$alid'";
$result2=mysqli_query($con,$sql2);
$sql3="UPDATE `registration` SET `dvraloc`=0 WHERE `reg_id`='$rid'";
$result3=mysqli_query($con,$sql3);
$sql4="UPDATE `vehicle_reg` SET `valoc`=0 WHERE `vid`='$vid'";
$result4=mysqli_query($con,$sql4);
$sql="UPDATE `vehicle_location` SET `status`='1' WHERE `aloc_id`='$alid'";
$result=mysqli_query($con,$sql);
header('location:adminualocate.php');
}
?>