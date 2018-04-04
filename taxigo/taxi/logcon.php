<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
	
$a=$_POST["lname"];
$b=$_POST["psw1"];


//print_r($b);
}
$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['id'];
	?>
	
	<?php
	if($a==  $row['username']&&$b==$row['password'])
	{
	if($a==  $row['username']&&$b==$row['password']&&$row['usertype']=='com')
	{
		 $_SESSION["username"]=$a;
		 $_SESSION['psw']=$b;
		 $_SESSION['utype']='com';
		 $_SESSION['id']=$row['id'];
		 header('location:companyhome.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=$i";
         $result=mysqli_query($con,$sql1);
	
		 break;
	}
	if($a==  $row['username']&&$b==$row['password']&&$row['usertype']=='stud')
	{
		
		 $_SESSION['username']=$a;
		 $_SESSION['psw']=$b;
		 $_SESSION['utype']='stud';
		  $_SESSION['id']=$row['id'];
		 header('location:studenthome.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	}
	if($a==  $row['username']&&$b==$row['password']&&$row['usertype']=='emp')
	{
		 $_SESSION['username']=$a;
		 $_SESSION['psw']=$b;
		 $_SESSION['utype']='emp';
		  $_SESSION['id']=$row['id'];
		 header('location:emphome.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	}
	if($a==  $row['username']&&$b==$row['password']&&$row['usertype']=='admin')
	{
		 $_SESSION['username']=$a;
		 $_SESSION['psw']=$b;
		 $_SESSION['utype']='admin';
		 $_SESSION['id']=$row['id'];
		 header('location:adminhome.php');
		 $sql1="UPDATE `login` SET `status`='1' WHERE id=$i";
         $result=mysqli_query($con,$sql1);
		 break;
	}
	
	}
	else{

	   	header('location:erlogin.php');
	}
	?>

	
	
	<?php	
}
?> 