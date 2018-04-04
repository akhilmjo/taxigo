<?php
include 'dbcon.php';

$tp=$_SESSION['utype'];
if(!(isset($_SESSION['user_name']))||$tp!=2)
{	
	//header('location:index.php');
}
if(isset($_POST['submit']))
{
$a=$_SESSION['user_name'];
$b=$_POST["pass"];
$c=$_POST["pass1"];
$d=$_POST["pass2"];
//echo($a);
}
function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );	
	}
	//SELECT `login_id`, `reg_id`, `user_name`, `passsword`, `status`, `delstatus` FROM `login` WHERE 
if($c==$d)
{	
$sql="SELECT * FROM `login` WHERE `delstatus`='0' and user_name='$a'";
$result=mysqli_query($con,$sql);
$r=mysqli_fetch_array($result);
$pw= decryptIt( $r['passsword'] );
//echo($pw);
if($b==$pw)
{
	function encryptIt($q){
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
    }
    $encrypted = encryptIt($c);
	$sql1="UPDATE `login` SET `passsword`='$encrypted' WHERE user_name='$a'";
	$row=mysqli_query($con,$sql1);
	$subject = "TaxiGo";

	$message = "
<html>
<head>
<title>TaxiGo</title>
</head>
<body>
<div style='background-color:white;
border:2px solid black;;
width:50%;
height:50%;
border-radius:4px;'>

<div style='position:relative;
background-color:#545472;
margin-top:-50%;
width:100%;
height:20%;'>
<h1 style='font-family:Lucida Calligraphy; color:white;'>taxigo</h1>
</div>
<div style='background-color:white;

margin-left:10%;
width:80%;
height:60%;'>
<p>Hi, 
<span>$a</span> </p>
<p>Your password is changed and your new password is:</p>
<table>
<tr>
<td>Username:<span> $a</span></td>
</tr>
<tr>
<td>password:<span> $c</span></td>
</tr>
<p>Please use this username and password to login to your account from here:http://localhost:81/taxigo/login.php</p>
</table>
</div>
</div>
</body>
</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <webmaster@example.com>' . "\r\n";
	$headers .= 'Cc: myboss@example.com' . "\r\n";

	        mail($a,$subject,"$message",$headers);
			$id=$_SESSION["id"];
			$sql1="UPDATE `login` SET `status`='0' WHERE `login_id`='$id'";
			$result=mysqli_query($con,$sql1);
			//header('location:index.php');
			
			unset($_SESSION["user_name"]);
			unset($_SESSION['passsword']);
			unset($_SESSION['utype']);
			unset($_SESSION['id']);
			session_destroy();
	header('location:login.php');

}
else
{
	echo "<script>if(confirm('username and password are enterd incorrect!!')){document.location.href='userchngepass.php'}else{document.location.href='userhome.php'};</script>";
	
}
}
else
{
	echo "<script>if(confirm('new password are mismatch!!')){document.location.href='userchngepass.php'}else{document.location.href='userhome.php'};</script>";
	
}
?> 