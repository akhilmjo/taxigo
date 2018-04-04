<?php
include 'dbcon.php';
$sql1="UPDATE `login` SET `status`='0' WHERE `status`='1'";
$result=mysqli_query($con,$sql1);
header('location:index.php');
unset($_SESSION["username"]);
unset($_SESSION['psw']);
unset($_SESSION['utype']);
unset($_SESSION['id']);
session_start();
session_destroy();
header('Location:index.php');
 ?>