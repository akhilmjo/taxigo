<?php
include 'dbcon.php';
$id=$_SESSION["id"];
//echo($id);
$sql1="UPDATE `login` SET `status`='0' WHERE `login_id`='$id'";
$result=mysqli_query($con,$sql1);
//header('location:index.php');
unset($_SESSION["user_name"]);
unset($_SESSION['passsword']);
unset($_SESSION['utype']);
unset($_SESSION['id']);
session_destroy();
header('Location:index.php');
 ?>