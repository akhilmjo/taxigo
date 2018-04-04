<?php
include 'dbcon.php';
$secret = '6LeCAC4UAAAAAESKxLvLd3ln55ZiUT6M8t8gvv7h';
 $response =$_POST['g-recaptcha-response'];
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".$secret."&response=".$response);
$response = json_decode($response, true);
//if($response["success"] === true){
   // actions if successful

if(isset($_POST['submit']))
{
	
$a=$_POST["user"];
$b=$_POST["pass"];
if(!empty($_POST["remember"])) {
				setcookie ("user",$_POST["user"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("pass",$_POST["pass"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["user"])) {
					setcookie ("user","");
				}
				if(isset($_COOKIE["pass"])) {
					setcookie ("pass","");
				}
			}
}
function decryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
    return( $qDecoded );	
	}
$sql="SELECT * FROM `login` WHERE `delstatus`='0'";
$result=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($result))
{
	$i=$row['login_id'];
	$rid=$row['reg_id'];
	$sql1="SELECT `type_id` FROM `registration` WHERE `reg_id`='$rid'";
    $result1=mysqli_query($con,$sql1);
    $row1 = $result1->fetch_assoc();
	$tpe=$row1["type_id"];	
	//echo(md5($b)+":::");
	

	?>
	
	<?php
	
	$pw=decryptIt( $row['passsword'] );
//echo($pw);
	if($a==  $row['user_name']&&$b==$pw&&$tpe==1)
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='1';
		 $_SESSION['id']=$i;
		 $_SESSION['rid']=$rid;
		 
		 $sql1="UPDATE `login` SET `status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		header('location:adminhome.php');
		 }
	elseif($a==  $row['user_name']&&$b==$pw&&$tpe==2)
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='2';
		 $_SESSION['id']=$i;
		 $_SESSION['rid']=$rid;
		 $sql1="UPDATE `login` SET `status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		 header('location:userhome.php');
		 }
		 
	elseif($a==  $row['user_name']&&$b==$pw&&$tpe==3)
	     {
		 $_SESSION['user_name']=$a;
		 $_SESSION['passsword']=$b;
		 $_SESSION['utype']='3';
		 $_SESSION['id']=$i;
		 $_SESSION['rid']=$rid; 
		 $sql1="UPDATE `login` SET `status`='1' WHERE login_id=$i";
         $result=mysqli_query($con,$sql1);
		header('location:driverhome.php');
		 }

}
?>
<?php
		echo "<script>if(confirm('Username and Password are incorect!!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
//}
//else{
   // echo("actions if failed");
//echo "<script>if(confirm('Wrong CAPTCHA Code !!!!')){document.location.href='login.php'}else{document.location.href='index.php'};</script>";
//}
?> 
