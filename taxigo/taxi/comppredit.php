<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
$id1=$_SESSION['username'];
$a=$_POST["name"];
$b=$_POST["PHNO"];
$c=$_POST["email"];
//print_r($a);
$sql="UPDATE `companyreg` SET `compname`='$a',`phone`='$b',`email`='$c' WHERE username='$id1'";
//print_r($sql);
$result=mysqli_query($con,$sql);
//$result=mysqli_query($con,$sql);
header('location:companyhome.php');
}
?>