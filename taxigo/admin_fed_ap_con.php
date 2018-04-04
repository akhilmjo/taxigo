<?php
include 'dbcon.php';
if(isset($_POST['apr'])){ 
$y=$_POST['apr'];
$id=$_POST['id'];
//echo $id;
$sql="UPDATE `feedback` SET `status`='1' WHERE `fed_id`='$id'";
$qr=mysqli_query($con,$sql);
header('location:admin_fed_aprv.php');
}
if(isset($_POST['apr1'])){ 
$y1=$_POST['apr1'];	
$id1=$_POST['id1'];
//echo $id1;
$sql="UPDATE `feedback` SET `status`='0' WHERE `fed_id`='$id1'";
$qr=mysqli_query($con,$sql);
header('location:admin_fed_aprv.php');	

}
?>