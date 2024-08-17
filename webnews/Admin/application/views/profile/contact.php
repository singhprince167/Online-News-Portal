<section id="content">
  <div class="page page-forms-wizard">
  <div class="b-b mb-10">
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-body">
            <div id="b_rootwizard">
              <div class="boxs-header">
                                <h3 class="custom-font hb-purple">
                                    <strong>Profile</strong> Progress</h3>
                            </div>
              <div id="bar" class="progress progress-striped active">
               <div class=" progress-bar"  role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:80%">
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
                  <li> <a href="#tab3" data-toggle="tab">Personal Info <span class="badge badge-default pull-right wizard-step">1</span></a></li>
                  <li> <a href="#tab2" data-toggle="tab">Resident Info <span class="badge badge-default pull-right wizard-step">2</span> </a> </li>
                  <li> <a href="#tab1" data-toggle="tab">Contact Info <span class="badge badge-default pull-right wizard-step">3</span> </a> </li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane" id="tab3">
                    <form name="step3" role="form" method="post" action="<?php echo site_url()?>/Profilec/contactinfo">
                      <div class="row">
                      
                        <div class="form-group col-md-4">
                          <label for="contact">Contact No : </label>
                          <input type="varchar" name="cno" value="<?php echo $data->contactno;?>" class="form-control"  maxlength="12" pattern="[789][0-9]{9}" required="required">
                        </div>
                       
                        </div>
                      <ul class="pager wizard">
                        <li class="previous"> <a href="<?php echo site_url()?>/Profilec/resident" class="btn btn-raised btn-default">Previous</a> </li>
                        <li class="next" style="display:none;">
                          <input type="submit" name="submit" value="Save & Finish" class="btn btn-raised btn-success">
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
<!--/ Page Specific Scripts -->

</body><!-- Mirrored from thememakker.com/templates/falcon/html/form-wizard.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 26 Dec 2017 06:57:20 GMT -->
</html>