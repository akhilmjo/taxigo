
<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
$rid=$_SESSION['rid'];
$a=$_POST["locname"];
//UPDATE `vehicle_location` SET `place`='$a' WHERE `reg_id`='$rid'
$sql="UPDATE `vehicle_location` SET `place`='$a' WHERE `reg_id`='$rid' and `status`=0";
$result=mysqli_query($con,$sql);
header('location:driverupdateloc.php');
}
?>
