<!doctype html>
<html class="no-js" lang="">
    
    <!-- Mirrored from thememakker.com/templates/falcon/html/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:58:11 GMT -->
    <head>
    <meta charset="utf-8" />
    <link rel="shortcut icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url() ?>favicon.ico" type="image/x-icon">
    <title>:: Falcon - Admin Dashboard ::</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/js/vendor/bootstrap/bootstrap.min.css">
    <!--  Fonts and icons -->
    <!-- CSS Files -->
    <link href="<?php echo base_url() ?>assets/css/main.css" rel="stylesheet">
    </head>
    
    <body id="falcon" class="authentication">
<!-- Application Content -->
<div class="wrapper">
      <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>assets/images/login-bg.jpg'); background-size: cover; background-position: top center;">
    <div class="container">
          <div class="row">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
              <div class="card card-signup">
            <form class="form" method="post" action="<?php echo site_url() ?>/Adminc/insert">
                  <div class="header header-primary text-center">
                <h4>Sign Up</h4>
                <div class="social-line"> <a href="#" class="btn btn-just-icon"> <i class="fa fa-facebook-square"></i> </a> <a href="#" class="btn btn-just-icon"> <i class="fa fa-twitter"></i> </a> <a href="#" class="btn btn-just-icon"> <i class="fa fa-google-plus"></i> </a> </div>
              </div>
                  <h3 class="mt-0">Today India</h3>
                  <p class="help-block">Welcome Admin Signup</p>
                  <div class="content"align="left">
                <div class="form-group col-md-0" >
                      <input type="text" name="name"  class="form-control" minlength="5" maxlength="15" placeholder="Enter Your Name" required>
                    </div>
                <div class="form-group col-md-0">
                      <input type="email" name="email"  class="form-control" placeholder="Enter Your Email" required>
                    </div>
                <div class="form-group col-md-0">
                      <input type="password" name="pass"  class="form-control" minlength="6" placeholder="Enter Your Password" required>
                    </div>
                <div class="form-group col-md-0">
                      <input type="password" name="cpass"  class="form-control" data-parsley-equalto="#password" placeholder="Enter Your Confirm Password" required>
                    </div>
                <div class="checkbox">
                      <label>
                    <input type="checkbox" name="optionsCheckboxes" checked>
                    I agree to the <a href="javascript:;">Terms of Service</a> &amp; <a href="javascript:;">Privacy Policy</a> </label>
                    </div>
              </div>
                  <div class="footer text-center mb-20">
                <input type="submit" name="submit" value="Signup" class="btn btn-info btn-raised">
              </div>
                </form>
                <!-- Admin End signup -->
                
                <!--  Reporter Signup -->
                
          </div>
            </div>
      </div>
        </div>
    <footer class="footer">
          <div class="container">
        <div class="row">
              <div class="col-md-12 text-center mt-20"> <a href="<?php echo site_url() ?>/Adminc/" class="text-uppercase text-white">Back</a> </div>
            </div>
      </div>
        </footer>
  </div>
    </div>
</body>
    </html>
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/parsley/parsley.min.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js"></script>
<script >
        $(document).ready(function () {
            $('#b_rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;
                    var $percent = ($current / $total) * 100;
                    $('#b_rootwizard').find('.bar').css({ width: $percent + '%' });
                }
            });
        });

        $(window).load(function () {
            $('#rootwizard').bootstrapWizard({
                onTabShow: function (tab, navigation, index) {
                    var $total = navigation.find('li').length;
                    var $current = index + 1;

                    // If it's the last tab then hide the last button and show the finish instead
                    if ($current >= $total) {
                        $('#rootwizard').find('.pager .next').hide();
                        $('#rootwizard').find('.pager .finish').show();
                        $('#rootwizard').find('.pager .finish').removeClass('disabled');
                    } else {
                        $('#rootwizard').find('.pager .next').show();
                        $('#rootwizard').find('.pager .finish').hide();
                    }
                },
                onNext: function (tab, navigation, index) {
                    var form = $('form[name="step' + index + '"]');
                    form.parsley().validate();
                    if (!form.parsley().isValid()) {
                        return false;
                    }

                },

                onTabClick: function (tab, navigation, index) {
                    var form = $('form[name="step' + (index + 1) + '"]');
                    form.parsley().validate();
                    if (!form.parsley().isValid()) {
                        return false;
                    }
                }
            });
        });
    </script>