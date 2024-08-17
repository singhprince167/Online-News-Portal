<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/simple-line-icons.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/weather-icons.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
<section id="content">
  <div class="page profile-page"> 
    <!-- page content -->
    <div class="pagecontent"> 
      <!-- row -->
      <div class="row">
        <div class="col-md-12">
          <section class="boxs">
            <div class="profile-header">
              <div class="profile_info">
                <div class="profile-image"> 
                <a  data-toggle="modal" data-target="#myModal">
    <img src="<?php echo base_url() ;?>images/<?php echo $get->repid."/".$get->rimage ?>" alt="rahul" width="150" height="150">
   <i class="fa fa-camera" style="vertical-align:bottom;margin-left:-50px;"></i>
    			</a> </div>
                <h4 class="mb-0"><strong><?php echo $get->rname; ?></strong></h4>
                
              </div>
            </div>
            
          </section>
        </div>
        <div class="col-md-12 col-sm-16">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
                <ul class="nav nav-tabs tabs-dark-t" role="tablist">
                  <li role="presentation"  class="active"> <a href="#mypost" role="tab" data-toggle="tab">Reporter Profile</a> </li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="setting">
                    <div class="wrap-reset">
                      <form class="profile-settings" method="post" action="<?php echo site_url() ?>/Profilc/updatepro/<?php echo $get->repid?>">
                        <div class="row">
                          <div class="form-group col-md-12 legend">
                            <h4> <strong>Edit</strong> Profile</h4>
                            <p>Secure your account</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-sm-4">
                            <label for="username">Username</label>
                            <input type="text" name="rname" class="form-control" id="username" value="<?php echo $get->rname?>">
                            </div>
                            
                          <div class="form-group col-sm-4">
                            <label for="new-password-repeat">Email</label>
                            <input type="email" class="form-control" name="remail" id="new-password-repeat" value="<?php echo $get->remail ?>">
                          </div>
                          <div class="form-group col-sm-4">
                         <label for="gender">Gender</label>
                        <?php 
						if($get->rgender=="Male"){?>
                          <input type="radio" name="gen" value="Male" checked="checked">Male
                          <input type="radio" name="gen" value="Female">Female
                         <?php }else if($get->rgender=="Female"){?>
                          <input type="radio" name="gen" value="Male" >Male
                          <input type="radio" name="gen" value="Female" checked="checked">Female
                         <?php }else if($get->rgender=="") { ?>
						  <input type="radio" name="gen" value="Male" checked="checked" >Male
                          <input type="radio" name="gen" value="Female" >Female
                       	
						<?php		
							}	
						   ?>
                           </div>
                           </div>
                           <div class="row">
                          <div class="form-group col-md-4 mb-0">
                          <label for="dnumber">Password </label>
                          <input type="password" name="pass"  class="form-control" placeholder="Enter Your Password." value="<?php echo $get->rpassword; ?>">
                        </div>
                            
                          <div class="form-group col-md-4 mb-0">
                          <label for="dnumber">Mobile No. : </label>
                          <input type="number" name="mno" id="Mobile" class="form-control" placeholder="Enter Mobile No." value="<?php echo $get->rmno; ?>">
                        </div>
						</div>
						 <div class="row">
						
                          <div class="form-group col-sm-4 ">
                            <label for="username">Address</label>
                            <input type="text" name="address" class="form-control" id="username" value="<?php echo $get->raddress?>">
                          </div>
                          
							</div>
                
                            <div class="form-group col-sm-12">
        <input type="submit" name="update" value="Update Profile" class="btn btn-raised btn-primary">
      </div>
      </div>
				</div>
                        <hr>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- /boxs body --> 
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
</div>
<!-- Model-->

<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
</body></html> 