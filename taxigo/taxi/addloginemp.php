<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
$d=$_POST['name'];
$id=$_POST['id'];
$e=$_POST['psw'];
$sql="INSERT INTO `login`(`username`, `password`, `usertype`) VALUES ('$d','$e','emp')";
$sql2="update `empreg` set status='1' where id=$id";
//print_r($sql2);
$result=mysqli_query($con,$sql) ;
$result=mysqli_query($con,$sql2)or die(mysqli_error($con));
header('location:adminhome.php');
//$result=mysqli_query($con,$sql);
//header()
}
if(isset($_POST['delete']))
{
	$id=$_POST['id'];
	$sql="DELETE FROM `empreg` WHERE id=$id";
	$result=mysqli_query($con,$sql) ;   
    header('location:adminhome.php');
}
?>