<section id="content">
  <div class="row">
    <div class="col-md-12">
      <section class="boxs">
        <div class="boxs-body">
             <div class="boxs-header">
                                <h3 class="custom-font hb-purple">
                                    <strong>Profile</strong>Progress</h3>
              </div>
            <div id="bar" class="progress progress-striped active">
              <div class=" progress-bar"  role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $progress;?>">
              
              </div>
           
          </div>
        </div>
      </section>
    </div>
    <div class="col-md-12">
      <section class="boxs">
        <div class="boxs-header">
          <h3 class="custom-font hb-purple"> <strong>Edit</strong> Profile</h3>
        </div>
        <div class="boxs-body">
          <div class="pagecontent">
            <div id="rootwizard" class="tab-container tab-wizard">
              <ul class="nav nav-tabs nav-justified">
                <li> <a href="#tab1" data-toggle="tab">Personal Info <span class="badge badge-default pull-right wizard-step">1</span> </a> </li>
                  <li> <a href="#tab2" data-toggle="tab">Resident Info <span class="badge badge-default pull-right wizard-step">2</span> </a> </li>
                    <li> <a href="#tab3" data-toggle="tab">Contact Info <span class="badge badge-default pull-right wizard-step">3</span> </a> </li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane" id="tab1">
                  <form name="step1" role="form" method="post" action="<?php echo site_url() ?>/Profilec/personalinfo">
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label for="username">Full Name : </label>
                        <input type="text" name="fullname" value="<?php echo $data->fullname;?>" id="username" class="form-control"  maxlength="15"  required >
                      </div>
                      
                        
                      <div class="form-group col-md-4">
                        <label for="password">CurrentPassword : </label>
                        <input type="password" name="cpass"  value="<?php echo $data->password; ?>" class="form-control"  required>
                      </div>
                    
                      <div class="form-group col-md-4">
                      <label for="">Gender</label>
                      <div class="radio">
          <?php
    	if($data->gender=="Male")
		{ ?>
          <label><input type="radio" name="gender" value="Male" checked="checked" >
          Male</label>
          <label><input type="radio" name="gender" value="Female">
          Female</label>
          <?php }
			elseif($data->gender=="Female")
			{?>
          <label><input type="radio" name="gender" value="Male">
          Male</label>
          <label><input type="radio" name="gender" value="Female" checked="checked">
          Female</label>
          <?php }
			else{
			?>
          <label><input type="radio" name="gender" value="Male" checked>
          Male</label>
          <label><input type="radio" name="gender" value="Female" >
          Female</label>
          <?php
		}
		?></div>
                    </div>    
                       </div>
                       
                    <ul class="pager wizard">
                      <li class="next">
                        <input type="submit" name="submit" value="Next" class="btn btn-raised btn-info">
                      </li>
                    </ul>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </div>
  </div>
  </div>
</section>
</div>
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/js/vendor/parsley/parsley.min.js"></script> 
<script src="<?php echo base_url()?>assets/js/vendor/form-wizard/jquery.bootstrap.wizard.min.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script> 

<script>
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
</body>
</html>