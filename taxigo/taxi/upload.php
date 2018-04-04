<?php
include 'dbcon.php';
session_start();
if(!(isset($_SESSION['username'])))
{
	header('location:index.php');
}

if(isset($_POST['submit']))
{
$a=$_POST["name"];
if(($_FILES["file"]["Type"]="image/gif")||($_FILES["file"]["Type"]="image/jpeg")||($_FILES["file"]["Type"]="image/pjpeg"))
{
			if(file_exists("upload/".$_FILES["file"]["name"]))
			{
				echo $_FILES["file"]["name"]." is  already exists.";
			}
			else
			{
				move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
				echo "Stored in:"."upload/".$_FILES["file"]["name"];
				$curdir = getcwd();
				$filename=strtolower($_FILES['file']['name']);
				$path = $curdir.'/uploads/'.$filename;
				$sql="INSERT INTO `empmaterial`(`subject`, `file`) VALUES ('$a','$filename')";
				$result=mysqli_query($con,$sql);
				header('location:empaddstudy.php');
			}		
	}
else
	{
		echo "Invalid file";
	}
 }
?>