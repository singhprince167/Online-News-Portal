<!doctype html>
<html class="no-js" lang="">
<head>
  <meta charset="utf-8" />
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="icon" href="favicon.ico" type="image/x-icon">
  <title>TODAY INDIA</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/js/vendor/bootstrap/bootstrap.min.css">
  <!-- CSS Files -->
  <link href="<?php echo base_url();?>assets/css/main.css" rel="stylesheet">
  
  <script>
  function status(id)
  {
		

		if(id=="admin")
		{
		$("#admin1").show();	
		$("#reporter1").hide();
		}
		if(id=="reporter")
		{
		
		$("#reporter1").show();
		$("#admin1").hide();	
		}	  
	  
  }
  </script>
  
</head>

<body id="falcon" class="authentication">
  <div class="wrapper">
    <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
            <div class="card card-signup">
                <div class="header header-primary text-center">
                  <h4><font size="+2"> Login</font></h4>
                  <div class="social-line">
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-facebook-square"></i>
                    </a>
                    <a  href="#" class="btn btn-just-icon">
                      <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="btn btn-just-icon">
                      <i class="fa fa-google-plus"></i>
                    </a>
                  </div>
                </div>
         	<div class="form-group"> 
            <form method="post" class="form-horizontal" name="form3" role="form" id="form3" data-parsley-validate>      
        <select onChange="status(this.value)" name="f2" class="form-control mb-10" data-parsley-trigger="change" required>
		<option value="">Select Any</option>
        <option value="admin">Login As Admin</option>
		<option value="reporter" >Login As Reporter</option>
		</select>
		</form>
</div>
 <!-- Admin login form  --> 
            
        		<div  id="admin1"> 
                <h3 class="mt-0">TODAY INDIA</h3>
                <p class="help-block">Welcome Admin Login</p>
	<form class="form" method="post" action="<?php echo site_url() ?>/Adminc/login"> 
           	
                <div class="content">
                  <div class="form-group">
                    <input type="email" name="email"class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" placeholder="Password..." class="form-control underline-input">
                  </div>
                  
                </div>
                <div class="footer text-center">
  			  <input type="submit" class="btn btn-info btn-raised" value="Login">
                </div><?php echo $error;?>
                <a href="<?php echo site_url()?>/Adminc/forgetpass" class="btn btn-wd">Forgot Password?</a>	
              </form>
              </div>
              
              
              <!-- Admin login form  End--> 
             
              
             <!-- Reporter login form  --> 
             
             
            	<div style="display:none" id="reporter1"> 
                <h3 class="mt-0">Today India</h3>
                <p class="help-block">Welcome Reporter Login</p>
		<form class="form" method="post" action="<?php echo site_url() ?>/Reporterregc/login"> 
           
                <div class="content">
                  <div class="form-group">
                    <input type="email" name="email"class="form-control underline-input" placeholder="Enter Your Email">
                  </div>
                  <div class="form-group">
                    <input type="password" name="pass" placeholder="Password..." class="form-control underline-input">
                  </div>
                  
                </div>
                <div class="footer text-center">
  			  <input type="submit" class="btn btn-info btn-raised" value="Login">
                </div><?php echo $error;?>
                <a href="<?php echo site_url()?>/Reporterc/forgetpass" class="btn btn-wd">Forgot Password?</a>	
              </form>
              </div>
              
             <!-- Reporter login form End  --> 
              
            </div>
          </div>
        </div>
      </div>
       <footer class="footer mt-20">
      <div class="container">
        <div class="col-lg-12 text-center"> <a href="<?php echo site_url()?>/Adminc/signup" class="text-uppercase text-white">Create an account</a>
         
      </div>
      </div>
    </footer>
    </div>
  </div>
  <!--  Vendor JavaScripts -->
  <script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
  <script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>

	<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>

	<script src="<?php echo base_url();?>assets/js/vendor/parsley/parsley.min.js"></script>
	<!--/ vendor javascripts -->

	<!-- Page Specific Scripts  -->  <script >
		$(window).load(function () {
			$('#form3Submit').on('click', function () {
				$('#form3').submit();
			});

		});
	</script>
  <!-- Custom Js -->
</body>

</html>