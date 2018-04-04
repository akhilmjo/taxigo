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
$e=$_POST["username"];
$b=$_POST["PHNO"];
$c=$_POST["email"];

$m=$_POST["x"];
$n=$_POST["bx"];
$o=$_POST["mx"];
$p=$_POST["px"];
$q=$_POST["xii"];
$r=$_POST["bxii"];
$s=$_POST["mxii"];
$t=$_POST["pxii"];
$u=$_POST["ug"];
$v=$_POST["bug"];
$w=$_POST["mug"];
$x=$_POST["pug"];
$y1=$_POST["pggg"];
$z=$_POST["bpg"];
$a2=$_POST["mpg"];
$b2=$_POST["ppg"];
//print_r($a);
$sql="UPDATE `studentreg` SET  `name`='$a',`Phone`='$b',`Email`='$c',`boardx`='$n',`markx`='$o',`ypassx`='$p',`boardxii`='$r',`markxii`='$s',`ypassxii`='$t',`markug`='$w', `ypassug`='$x', `classpg`='$y1', `boardpg`='$z', `markpg`='$a2', `ypasspg`='$b2' WHERE Username='$id1'";
//print_r($sql);
$result=mysqli_query($con,$sql)or die(mysqli_error($con));
//$result=mysqli_query($con,$sql);
header('location:studenthome.php');
}
?>