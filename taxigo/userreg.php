<?php
include 'dbcon.php';
//session_start();
if(!(isset($_SESSION['user_name'])))
{
	//header('location:index.php');
}
if(isset($_POST['submit']))
{
$a=$_POST["fname"];
$b=$_POST["lname"];
$c=$_POST["email"];
$d=$_POST["dob"];
$e=$_POST["phno"];
//$f=$_POST["ufile"];
$g=$_POST["address"];
$h=$_POST["idno"];
//$i=$_POST["ufile1"];
$k=$_POST["gender"];

function random_password( $length = 8 ) {
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
    $password = substr( str_shuffle( $chars ), 0, $length );
    return $password;
}
$p=random_password();
//$p1=md5($p);
function encryptIt($q){
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}
$encrypted = encryptIt($p);
echo($encrypted);
$q1 = "SELECT `reg_id` FROM `registration` WHERE emailid= '$c' ";
$result22 = $con->query($q1);
$row1 = $result22->fetch_assoc();

if($row1["reg_id"]=="")
{
	


$path= "upload/".$_FILES['photo']['name'];
copy($_FILES['photo']['tmp_name'], $path);
$path1= "upload/".$_FILES['photo2']['name'];
copy($_FILES['photo2']['tmp_name'], $path1);


$sql="INSERT INTO `registration`(`type_id`, `fname`, `lname`, `phno`, `photo`, `emailid`, `Dob`, `gender`, `Address`, `idproofno`, `idproof`) VALUES ('2','$a','$b','$e','$path','$c','$d','$k','$g','$h','$path1')";
$result=mysqli_query($con,$sql);

$q = "SELECT `reg_id` FROM `registration` WHERE emailid= '$c' ";
$result = $con->query($q);
$row = $result->fetch_assoc();
$rid=$row["reg_id"];

$sql1="INSERT INTO `login`(`reg_id`, `user_name`, `passsword`, `status`) VALUES('$rid','$c','$encrypted','0')";
$result1=mysqli_query($con,$sql1);
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
<span>$a $b</span> </p>
<p>Thank you for registering TaxiGo</p>
<table>
<tr>
<td>Username:<span> $c</span></td>
</tr>
<tr>
<td>password:<span> $p</span></td>
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

mail($c,$subject,"$message",$headers);
header('location:index.php');
}
else
{

	//echo "<script>'alert('allredy registerd please try with anothor mail id!!!!');'</script>";
	 
	echo "<script>if(confirm('$c allredy exists try with another email id')){document.location.href='index.php#popup'}else{document.location.href='index.php'};</script>";
	
}
}

?>
