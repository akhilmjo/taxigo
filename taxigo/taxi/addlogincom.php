<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
$d=$_POST['n1'];
$id=$_POST['id'];
$e=$_POST['psw'];
$sql="INSERT INTO `login`(`username`, `password`, `usertype`) VALUES ('$d','$e','com')";
$sql2="update companyreg set status='1' where id=$id";
$result=mysqli_query($con,$sql) ;
$result=mysqli_query($con,$sql2)or die(mysqli_error($con));
header('location:adminhome.php');
//$result=mysqli_query($con,$sql);
//header()
}
if(isset($_POST['delete']))
{
	$id=$_POST['id'];
	$sql="DELETE FROM `companyreg` WHERE id=$id";
	$result=mysqli_query($con,$sql) ;   
    header('location:adminhome.php');
}
?>