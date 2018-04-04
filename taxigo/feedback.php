<?php   
include 'dbcon.php';

$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=2)
{	
	header('location:index.php');
}

	if(isset($_POST['submit']))
	{
		    $rid=$_SESSION['rid'];
			$rate=$_POST['rate'];
			$message=$_POST['message'];
			$sql="INSERT INTO `feedback`(`reg_id`, `ratting`, `message`, `status`) VALUES ('$rid', '$rate', '$message', '0')";
			$result=mysqli_query($con,$sql);
			header('location:userhome.php');
	}
?>
			
			