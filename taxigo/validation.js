function ff11(obj) {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1)
			{
             alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
			 document.getElementById('ufile1').value='';
            $("#ufile1").focus();
			}
			
    }
function ff11() {
		var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
		if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1)
		{
		 alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
		 document.getElementById('ufile1').value='';
		$("#ufile1").focus();
		}
		
}
function ff22(obj) {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(obj).val().split('.').pop().toLowerCase(), fileExtension) == -1)
			{
             alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
			 document.getElementById('ufile2').value='';
            $("#ufile2").focus();
			}
			
    }

function n11(){
  var val_name= /^[A-Za-z]{3,20}$/;
  $name= document.getElementById('fn').value;
   if(!val_name.test($name)){
     alert("Name must be Alphabets only  and  must contain 3 letters ");
     document.getElementById('fn').value='';
     $("#fn").focus();
     return false;
   }
}
function em(){
  var val_email=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
  $email= document.getElementById('em1').value;
  if(!val_email.test($email)){
     alert("Enter valid email");
     document.getElementById('em1').value='';
     $("#eml").focus();
     return false;
   }
  
}

function phn(){
  var val_phoneno= /^[0-9]{10,12}$/;
  $phoneno= document.getElementById('ph').value;


  if(!val_phoneno.test($phoneno)){
     alert("enter valid phoneno ");
     document.getElementById('ph').value='';
     $("#ph").focus();
     return false;
   }
}

function aadh(){
	
 var val_aadhar= /^[0-9]{12,12}$/;
  $aadhno= document.getElementById('aaa').value;
  
  if(!val_aadhar.test($aadhno)){
     alert("enter valid aadhar number!! ");
     document.getElementById('aaa').value='';
     $("#aaa").focus();
     return false;
   }
}
function lice(){
	
 var val_licno= /^[0-9]{9,12}$/;
  $licno= document.getElementById('lno').value;
  
  if(!val_licno.test($licno)){
     alert("enter valid license card number!! ");
     document.getElementById('lno').value='';
     $("#lno").focus();
     return false;
   }
}

function dd1()
{
	
	 alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
}


//validate all//
function val(){
			//name//
			var val_name= /^[A-Za-z]{3,20}$/;
			$name= document.getElementById('fn').value;


			if(!val_name.test($name)){
			alert("Name must be Alphabets only  and  must contain 3 letters ");
			document.getElementById('fn').value='';
			$("#fn").focus();
			return false;
			}
			//email//
			var val_email=  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			$email= document.getElementById('em1').value;
			if(!val_email.test($email)){
			alert("Enter valid email");
			document.getElementById('em1').value='';
			$("#em1").focus();
			return false;
			}
			//phone//
			var val_phoneno= /^[0-9]{10,12}$/;
			$phoneno= document.getElementById('ph').value;


			if(!val_phoneno.test($phoneno)){
			alert("enter valid phoneno ");
			document.getElementById('ph').value='';
			$("#ph").focus();
			return false;
			}
			//aadhar//
			var val_aadhar= /^[0-9]{12,12}$/;
			$aadhno= document.getElementById('aaa').value;

			if(!val_aadhar.test($aadhno)){
			alert("enter valid aadhar number!! ");
			document.getElementById('aaa').value='';
			$("#aaa").focus();
			return false;
			}
			//license no//
			var val_licno= /^[0-9]{9,12}$/;
			$licno= document.getElementById('lno').value;

			if(!val_licno.test($licno)){
			alert("enter valid license card number!! ");
			document.getElementById('lno').value='';
			$("#lno").focus();
			return false;
			}
			//image1//
			var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
			if ($.inArray($(ufile).val().split('.').pop().toLowerCase(), fileExtension) == -1)
			{
			alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
			document.getElementById('ufile').value='';
			$("#ufile").focus();
			}
			//image1//
			var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
			if ($.inArray($(ufile1).val().split('.').pop().toLowerCase(), fileExtension) == -1)
			{
			alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
			document.getElementById('ufile1').value='';
			$("#ufile1").focus();
			}
			//vehicle regno//
			var reg1= /^([A-Z|a-z]{2}\s{1}\d{2}\s{1}[A-Z|a-z]{1,2}\s{1}\d{1,4})?([A-Z|a-z]{3}\s{1}\d{1,4})?$/;
			$reno= document.getElementById('regno').value;

			if(!reg1.test($reno)){
			alert("enter valid registeration number!! ");
			document.getElementById('regno').value='';
			$("#regno").focus();
			return false;
			}
		   //number//
			var numbers = /^[0-9]+$/; 
			$stno= document.getElementById('sno').value;

			if(!numbers.test($stno)){
			alert("enter valid seat number!! ");
			document.getElementById('sno').value='';
			$("#sno").focus();
			return false;
			}
			//year//
			var text1 = /\d{4}$/;
			$year= document.getElementById('vmod').value;

			if(!text1.test($year)){
			alert("enter valid model number!! ");
			document.getElementById('vmod').value='';
			$("#vmod").focus();
			return false;
			}
			//color//
			var col= /^[A-Za-z]{3,20}$/; 
			$colr= document.getElementById('clr').value;

			if(!col.test($colr)){
			alert("Color must be Alphabets only  and  must contain 3 letters ");
			document.getElementById('clr').value='';
			$("#clr").focus();
			return false;
			}
			//rate//
			var rt= /^[0-9]+$/;
			$rate= document.getElementById('rt1').value;

			if(!rt.test($rate)){
			alert("enter valid Rate number!! ");
			document.getElementById('rt1').value='';
			$("#rt1").focus();
			return false;
			}
  
}
function fileCheck() {
            var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
            if ($.inArray($(ufile).val().split('.').pop().toLowerCase(), fileExtension) == -1)
			{
             alert("Only '.jpeg','.jpg', '.png', '.gif', '.bmp' formats are allowed.");
			 document.getElementById('ufile').value='';
            $("#ufile").focus();
			}
			
    }
function reg()
{
var reg1= /^([A-Z|a-z]{2}\s{1}\d{2}\s{1}[A-Z|a-z]{1,2}\s{1}\d{1,4})?([A-Z|a-z]{3}\s{1}\d{1,4})?$/;
 $reno= document.getElementById('regno').value;

  if(!reg1.test($reno)){
	 alert("enter valid registeration number!! ");
	 document.getElementById('regno').value='';
	 $("#regno").focus();
	 return false;
   }
}
function num()
{
	var numbers = /^[0-9]+$/; 
	$stno= document.getElementById('sno').value;

	  if(!numbers.test($stno)){
		 alert("enter valid seat number!! ");
		 document.getElementById('sno').value='';
		 $("#sno").focus();
		 return false;
	   }
	
}
function yearValidation() {
    var text1 = /\d{4}$/;
	$year= document.getElementById('vmod').value;
	
    if(!text1.test($year)){
		 alert("enter valid model number!! ");
		 document.getElementById('vmod').value='';
		 $("#vmod").focus();
		 return false;
	   }
	
    }
function color() {
 var col= /^[A-Za-z]{3,20}$/; 
  $colr= document.getElementById('clr').value;
  
   if(!col.test($colr)){
     alert("Color must be Alphabets only  and  must contain 3 letters ");
     document.getElementById('clr').value='';
     $("#clr").focus();
     return false;
   }
}
function rate1() {
 var rt= /^[0-9]+$/;
  $rate= document.getElementById('rt1').value;
  
   if(!rt.test($rate)){
     alert("enter valid Rate number!! ");
     document.getElementById('rt1').value='';
     $("#rt1").focus();
     return false;
   }
}
