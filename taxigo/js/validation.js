 function loginPwd(){
            var fpwd1=/^[a-z0-9]{4,25}$/;
                if(document.frmLogin.lpwd.value.search(fpwd1)==-1)
                 {
                      alert("OoppZz.. Wrong Password");
                      document.frmLogin.lpwd.focus();
                      
                      return false;
                }
        }
        
        function gName(){
            var gl_reg_name= document.gl_reg_form.gl_reg_name.value;
                if((gl_reg_name===null)||(gl_reg_name.length<5)){
                    
                    alert("Enter Full Name");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.gl_reg_form.gl_reg_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.gl_reg_form.gl_reg_name.focus();
                      
                      return false;
                    }
                if((gl_reg_name.length>25)){
                   
                    alert("Name Must Not Exceed 24 Characters");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
        }
        function gEmail(){
            var gl_reg_email=document.gl_reg_form.gl_reg_email.value;
                var atpos = gl_reg_email.indexOf("@");
                var dotpos = gl_reg_email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>gl_reg_email.length)){
                    
                    document.gl_reg_form.gl_reg_email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
        }
        function gPhone(){
            var gl_reg_num=document.gl_reg_form.gl_reg_num.value;
                if(isNaN(gl_reg_num)){
                    
                    alert("Phone Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                if(gl_reg_num.length !== 10){
                    document.gl_reg_form.gl_reg_num.focus();
                    alert("Phone Number must be 10 Digits");
                    
                    return false;
                }
        }
        function gAdhar(){
            var gl_reg_adhar=document.gl_reg_form.gl_reg_adhar.value;
                if(gl_reg_adhar.length !== 12){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Adhar Number Must Contain 12 Numbers");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                if(isNaN(gl_reg_adhar)){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
        }
        function gAdmNo(){
            var gl_reg_id=document.gl_reg_form.gl_reg_id.value;
                if(gl_reg_id.length<4){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Be 4 characters Long");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(gl_reg_id.length>5){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Not Exceed 5 characters");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(isNaN(gl_reg_id)){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
        }
        function gPwd(){
            var gl_reg_pwd= document.gl_reg_form.gl_reg_pwd.value;
                var gl_reg_cpwd=document.gl_reg_form.gl_reg_cpwd.value;
                if(gl_reg_pwd.length < 4 ){
                    document.gl_reg_form.gl_reg_pwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_pwd.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(gl_reg_pwd !== gl_reg_cpwd){
                    document.gl_reg_form.gl_reg_cpwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_cpwd.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
        }
        
        
        function  addUser(){
                var gl_reg_name= document.gl_reg_form.gl_reg_name.value;
                if((gl_reg_name===null)||(gl_reg_name.length<5)){
                    document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                    alert("Enter Full Name");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                var fnam=/^[a-zA-Z ]{4,25}$/;
                if(document.gl_reg_form.gl_reg_name.value.search(fnam)==-1)
                 {
                      alert("Enter correct  Name");
                      document.gl_reg_form.gl_reg_name.focus();
                      document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                      return false;
                    }
                if((gl_reg_name.length>25)){
                    document.gl_reg_form.gl_reg_name.style.border = "1px solid red";
                    alert("Name Must Not Exceed 24 Characters");
                    document.gl_reg_form.gl_reg_name.focus();
                    return false;
                }
                var gl_reg_num=document.gl_reg_form.gl_reg_num.value;
                if(isNaN(gl_reg_num)){
                    document.gl_reg_form.gl_reg_num.style.border = "1px solid red";
                    alert("Phone Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                if(gl_reg_num.length !== 10){
                    document.gl_reg_form.gl_reg_num.style.border = "1px solid red";
                    alert("Phone Number must be 10 Digits");
                    document.gl_reg_form.gl_reg_num.focus();
                    return false;
                }
                
                var gl_reg_adhar=document.gl_reg_form.gl_reg_adhar.value;
                if(gl_reg_adhar.length !== 12){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Adhar Number Must Contain 12 Numbers");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                if(isNaN(gl_reg_adhar)){
                    document.gl_reg_form.gl_reg_adhar.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_adhar.focus();
                    return false;
                }
                
                var gl_reg_id=document.gl_reg_form.gl_reg_id.value;
                if(gl_reg_id.length<4){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Be 4 characters Long");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(gl_reg_id.length>5){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Must Not Exceed 5 characters");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                if(isNaN(gl_reg_id)){
                    document.gl_reg_form.gl_reg_id.style.border = "1px solid red";
                    alert("Admission Number Only Contain Digits");
                    document.gl_reg_form.gl_reg_id.focus();
                    return false;
                }
                
                
                var gl_reg_email=document.gl_reg_form.gl_reg_email.value;
                var atpos = gl_reg_email.indexOf("@");
                var dotpos = gl_reg_email.lastIndexOf(".");
                if((atpos<1)||(dotpos<atpos+2)||(dotpos+2>gl_reg_email.length)){
                    
                    document.gl_reg_form.gl_reg_email.focus();
                    alert("Enter a Valid Email Address");
                    return false;
                }
                
                
                var gl_reg_pwd= document.gl_reg_form.gl_reg_pwd.value;
                var gl_reg_cpwd=document.gl_reg_form.gl_reg_cpwd.value;
  
                
                if(gl_reg_pwd.length < 4 ){
                    document.gl_reg_form.gl_reg_pwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_pwd.focus();
                    alert("Password Should contain atleast 4 characters");
                    return false;
                }
                if(gl_reg_pwd !== gl_reg_cpwd){
                    document.gl_reg_form.gl_reg_cpwd.style.border = "1px solid red";
                    document.gl_reg_form.gl_reg_cpwd.focus();
                    alert("Mismatching Passwords");
                    return false;
                }
                var fpwd=/^[a-z0-9]{4,25}$/;
                if(document.gl_reg_form.gl_reg_pwd.value.search(fpwd)==-1)
                 {
                      alert("Lowercase Letters,numbers(0-9) are allowed,Password Should not exceed 25 Characters");
                      document.gl_reg_form.gl_reg_pwd.focus();
                      
                      return false;
                }
            }
  