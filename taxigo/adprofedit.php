<?php
include 'dbcon.php';
$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=1)
{	
	header('location:index.php');
}
if(isset($_POST['close']))
{
header('location:adminhome.php');
}
if(isset($_POST['edit']))
{
$a=$_POST["firstname"];
$b=$_POST["lastname"];
$c=$_POST["contact"];
$d=$_POST["Email"];
$e=$_POST["dob"];
$g=$_POST["gender"];
$h=$_POST["addres"];
$m=$_POST["sid1"];
$k=$_POST["idno"];

$sql="UPDATE `registration` SET `fname`='$a',`lname`='$b',`phno`='$c',`Dob`='$e',`gender`='$g',`Address`='$h',`idproofno`='$k' WHERE `reg_id`=$m";
$result=mysqli_query($con,$sql);
header('location:adminprofv.php');
}
?>