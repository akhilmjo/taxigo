<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
$d=$_POST["username"];
$e=$_POST["psw"];

$sql="INSERT INTO `login`(`username`, `password`, `usertype`) VALUES ('$d','$e','emp')";
print_r($sql);
//$result=mysqli_query($con,$sql);
//$result=mysqli_query($con,$sql);
//header()
}
?>