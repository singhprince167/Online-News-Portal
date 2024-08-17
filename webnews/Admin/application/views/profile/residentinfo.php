<section id="content">
  <div class="page page-forms-wizard">
  <div class="b-b mb-10">
  
  <div class="col-md-12">
    <section class="boxs">
      <div class="boxs-body">
        <div id="b_rootwizard">
           <div class="boxs-header">
                                <h3 class="custom-font hb-purple">
                                    <strong>Profile</strong> Progress</h3>
                            </div>
          <div id="bar" class="progress progress-striped active">
            <div class=" progress-bar"  role="progressbar" aria-valuemin="0" aria-valuemax="100" style="width:50%">
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
             <li> <a href="#tab2" data-toggle="tab">Personal Info <span class="badge badge-default pull-right wizard-step">1</span> </a> 
             </li>
                  <li> <a href="#tab1" data-toggle="tab">Resident Info <span class="badge badge-default pull-right wizard-step">2</span> </a> 
                  </li>
                    <li> <a href="#tab2" data-toggle="tab">Contact Info <span class="badge badge-default pull-right wizard-step">3</span> </a> </li>
           
          </ul>
          <div class="tab-content">
            <div class="tab-pane" id="tab2">
              <form name="step2" role="form" method="post" action="<?php echo site_url()?>/Profilec/residentinfo">
                <div class="row">
                  <div class="form-group col-md-8 mb-0">
                    <label for="street">Address : </label>
                    <textarea  name="add"  class="form-control"  required><?php echo $data->address;?></textarea>
                 	
                  </div>
                  <div class="form-group col-md-4">
                    <label for="pin">Pincode : </label>
                   <input type="number" name="pincode" value="<?php echo $data->pincode;?>" class="form-control" 
                    placeholder="Enter your pincode" required="required">
                   </div>
                </div>
                
                <div class="row">
                  <div class="form-group col-md-4">
                    <label for="city">City : </label>
                    <select name="city"class="form-control" style="width: 100%;"  value="" readonly>
                       <?php if($data->city=="")
		  { ?>
          <option selected>--Select Any-- </option>
          <option value="Surat">Surat</option>
          <option value="Mumbai">Mumbai</option>
          <?php 
		  }
		  else if($data->city=="Surat")
		  {?>
          <option>--Select Any-- </option>
          <option selected value="Surat" >Surat</option>
          <option value="Mumbai">Mumbai</option>
          <?php 
		  }else
		  {?>
          <option>--Select Any-- </option>
          <option value="Surat">Surat</option>
          <option selected value="Mumbai">Mumbai</option>
          <?php
		  }?>
          </select>
          </div>
                  
                  <div class="form-group col-md-4">
                    <label for="state">State : </label>
                    <select name="state"class="form-control" style="width: 100%;">
                      <?php if($data->state=="")
		  {
		  ?>
          <option selected value="--Select Any--">--Select Any-- </option>
          <option >Gujarat</option>
          <option>Maharashtra</option>
          <?php
		  }
		else if($data->state=="Gujarat")
		 {?>
          <option>--Select Any-- </option>
          <option selected value="Gujarat">Gujarat</option>
          <option value="Maharashtra">Maharashtra</option>
          <?php
		 }else { ?>
          <option>--Select Any-- </option>
          <option value="Gujarat">Gujarat</option>
          <option selected value="Maharashtra">Maharashtra</option>
          <?php }?>
        </select>
      </div>
                  <div class="form-group col-md-4">
                    <label for="country">Country </label>
                    <select name="country"class="form-control" style="width: 100%;" >
                       <?php if($data->country==""){?>
            <option selected value="--Select Any-- ">--Select Any-- </option>
            <option>India</option>
            <option>Srilanka</option>
            <?php }elseif($data->country=="India"){ ?>
            <option>--Select Any-- </option>
            <option selected value="India">India</option>
            <option>Srilanka</option>
            <?php }else{?>
            <option>--Select Any-- </option>
            <option selected value="India">India</option>
            <option selected value="Srilanka">Srilanka</option>
            <?php }?>
                    </select>
                  </div>
                  
                  </div>
                  <ul class="pager wizard">
                    <li class="previous"> <a href="<?php echo site_url()?>/Profilec/personal" class="btn btn-raised btn-default">Previous</a> </li>
                    <li class="next">
                      <input type="submit" name="submit" value="Next" class="btn btn-raised btn-info">
                    </li>
                  </ul>
                </div>
              </form>
            </div>
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
</body></html>