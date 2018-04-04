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
$c=$_POST["psw2"];
$d=$_POST["psw3"];
//print_r($b);
}

$sql="SELECT * FROM `login`";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$id=$_SESSION['id'];
	$t=$_SESSION['utype'];
	?>
	<?php
	if($a==  $row['username']&&$b==$row['password']&&$t=='emp')
	{
			if($d!=$c)	
			{
				header('location:empchangepsw.php');
				echo("password are not same");
				break;
			}

			else{
				
				$sql2="update `login` set password='$c' where id=$id";
				$result=mysqli_query($con,$sql2) ;
				header('location:emphome.php');
				break;
				}
			}
	else
	{

		header('location:empchangepsw.php');
		echo(" incorrect password");
	}
	
	
		
	?>	
	
	<?php	
}
?> 
	
	
	