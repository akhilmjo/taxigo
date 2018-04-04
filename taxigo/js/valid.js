$(document).ready(function(){
	$("#myform").on("submit",function(){
		var exp_email=/^[A-Za-z0-9._]*\@[A-Za-z0-9._]*\.[A-Za-z]{2,5}$/;
		var exp_phone=/^[0-9]{9,12}$/;
		$email=$('#email).val();
		$phone=$('#phone).val();
		if(!exp_email.test($email)){
			alert("invalid email");
			return false;
			
		}
		else if(!exp_phone.test($phone)){
			alert("invalid phone");
			return false;
			
		}
		else{
			return true;
		}
		
	});
	
})