<script>
function val()
{
	//alert('hi');
	
	var email=document.getElementById("mail").value;
	var pass=document.getElementById("pass").value;
    
	atpos = email.indexOf("@");
	dotpos = email.lastIndexOf(".");
	
	
	if(atpos < 1 || ( dotpos - atpos < 2 ))
	{
			
			$("#emailErr").html("Please Enter Valid Email !!!");
			document.myForm.mail.focus();
			return false;
	}	
	else if(pass=="") 
	{
			$("#emailErr").html("");
			$("#passErr").html("Please Enter Your password !!!");
			document.myForm.pass.focus();
			return false;
	}
	else 
	{
         	document.getElementById('contact-form').action="<?php echo site_url() ?>/Loginc/login/";

		 }
}
</script>


  <section class="block-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-16"> 
          
          <!-- block content -->
          <div class="block-content"> 
            
            <!-- contact form box -->
            <div class="contact-form-box">
              <div class="title-section">
                <h1><span>Login Here</span></h1>
              </div>
               <form id="contact-form" name="myForm" method="post" action="<?php echo site_url()?>/Loginc/login">
                <div class="row">
                  <div class="col-md-4">
                    <label for="mail" style="color:red;">E-mail*</label>
                    <input type="email" id="mail" name="mail" style="border-left:none;border-right:none;border-top:none;" placeholder="Enter Your Email">
					<p id="emailErr" style="color:red"></p>
                  </div>
                  
                  <div class="col-md-4">
                    <label for="paasword" style="color:red;">Paasword*</label>
                    <input type="password" id="pass" name="pass"  style="border-left:none;border-right:none;border-top:none;" placeholder="Enter Your paasword">
					<p id="passErr" style="color:red"></p>
                  </div>
                </div>
                
                <br>
                <br>
                <input type="submit" name="submit" value="Login" id="submit-contact" onclick="return val()" style="padding:10px;" class="btn btn-raised btn-danger" >
                
              </form>
            </div>
            <br>	
             <a href="<?php echo site_url()?>/Loginc/forgot">Forgot Password</a>
            <a href="<?php echo site_url()?>/Signupc/" style='margin-left:200px;'>New Here? Signup</a>
           
            
          </div>
      </div>
    
  </section>
  
  
  
  