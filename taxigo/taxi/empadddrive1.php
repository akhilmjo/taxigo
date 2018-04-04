<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['add']))
{

$a=$_POST['id'];
$b=$_POST['cname'];
$c=$_POST['cno'];
$d=$_POST['email'];
$e=$_POST['dname'];
$f=$_POST['date'];

$sql2="update `companyadddrive` set status='1' where id=$a";
$result=mysqli_query($con,$sql2)or die(mysqli_error($con));
header('location:emphome.php');
$result=mysqli_query($con,$sql);
}
if(isset($_POST['delete']))
{
$g=$_POST['id'];
$sql="DELETE FROM `companyadddrive` WHERE  id='$g'";
$result=mysqli_query($con,$sql);
header('location:emphome.php');
}
?>