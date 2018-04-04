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
$e=$_POST["Des"];
$b=$_POST["PHNO"];
$c=$_POST["email"];
//print_r($a);
$sql="UPDATE `empreg` SET `name`='$a',`Designation`='$e',`Phone`='$b',`Email`='$c' WHERE Username='$id1'";
//print_r($sql);
$result=mysqli_query($con,$sql);
//$result=mysqli_query($con,$sql);
header('location:emphome.php');
}
?>