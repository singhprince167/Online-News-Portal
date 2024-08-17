<head>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/simple-line-icons.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/weather-icons.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css" >
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
</head>
<!--CONTENT  -->

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
    <img src="<?php echo base_url() ;?>images/<?php echo $get->repid."/".$get->rimage ?>" alt="rahul" width="110" height="110">
    <i class="icon-camera" style="vertical-align:top;margin-left:-100px;"></i> 
    			</a> </div>
                <h4 class="mb-0"><strong><?php echo $get->rname; ?></strong></h4>
                <span class="text-muted">Web Designer</span>
                <div class="mt-10">
                  <button class="btn btn-raised bg-blush btn-sm">Follow</button>
                  <button class="btn btn-raised bg-green btn-sm">Message</button>
                </div>
                <p class="m-0"> <a title="Twitter" href="#" class="icon-color p-5"> <i class="fa fa-twitter"></i> </a> <a title="Facebook" href="#" class="icon-color p-5"> <i class="fa fa-facebook"></i> </a> <a title="Google-plus" href="#" class="icon-color p-5"> <i class="fa fa-google-plus"></i> </a> <a title="Behance" href="#" class="icon-color p-5"> <i class="fa fa-behance"></i> </a> <a title="Instagram" href="#" class="icon-color p-5"> <i class="fa fa-instagram "></i> </a> </p>
              </div>
            </div>
            <div class="profile-sub-header">
              <div class="box-list">
                <ul class="text-center">
                  <li> <a href="mail-inbox.html" class=""> <i class="fa fa-inbox"></i>
                    <p>My Inbox</p>
                    </a> </li>
                  <li> <a href="<?php echo site_url()?>/Loginc/gallery" class=""> <i class="fa fa-photo"></i>
                    <p>Gallery</p>
                    </a> </li>
                  <li> <a href="#"> <i class="fa fa-paperclip"></i>
                    <p>Collections</p>
                    </a> </li>
                  <li> <a href="#"> <i class="fa fa-tasks "></i>
                    <p>Tasks</p>
                    </a> </li>
                </ul>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-12 col-sm-16">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
                <ul class="nav nav-tabs tabs-dark-t" role="tablist">
                  <li role="presentation"  class="active"> <a href="#mypost" role="tab" data-toggle="tab">Admin Profile</a> </li>
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="setting">
                    <div class="wrap-reset">
                      <form class="profile-settings" method="post" action="<?php echo site_url() ?>/Profilc/personal">
                        <div class="row">
                          <div class="form-group col-md-12 legend">
                            <h4> <strong>Security</strong> Settings</h4>
                            <p>Secure your account</p>
                          </div>
                        </div>
                        <div class="row">
                          <div class="form-group col-sm-4">
                            <label for="username">Username</label>
                            <input type="text" name="uname" class="form-control" id="username" value="<?php echo $get->rname?>" disabled="disabled">
                            </div>
                          <div class="form-group col-sm-4">
                            <label for="new-password-repeat">Email</label>
                            <input type="email" class="form-control" id="new-password-repeat" value="<?php echo $get->remail ?>" readonly="readonly">
                          </div>
                          <div class="form-group col-md-4 mb-0">
                          <label for="dnumber">Mobile No. : </label>
                          <input type="number" name="mobile" id="Mobile" class="form-control" placeholder="Enter Mobile No." value="<?php echo $get->rmno; ?>" required disabled="disabled">
                        </div>
                          <div class="form-group col-sm-4">
                            <label for="username">Address</label>
                            <input type="text" name="address" class="form-control" id="username" value="<?php echo $get->Address?>" disabled="disabled">
                          </div>
                          
							<div class="form-group col-md-4">
                  <label for="status">Status : </label>
                  <input type="text" name="status" value="<?php echo $get->ropstatus; ?>" id="status" class="form-control" placeholder="Enter status" required disabled="disabled">
                </div>
						<div class="form-group col-md-4">
                  <label for="status">Date : </label>
                  <input type="text" name="status" value="<?php echo $get->datereg; ?>" id="status" class="form-control" placeholder="Enter status" required disabled="disabled">
                </div>
                <div class="form-group col-sm-4">
                         <label for="gender">Gender</label>
                        <?php 
						if($get->Gender=="male"){?>
                          <input type="radio" name="gen" value="Male" checked="checked">Male
                          <input type="radio" name="gen" value="Female">Female
                         <?php }else if($get->Gender=="Female"){?>
                          <input type="radio" name="gen" value="Male" >Male
                          <input type="radio" name="gen" value="Female" checked="checked">Female
                         <?php }else if($get->Gender=="") { ?>
						  <input type="radio" name="gen" value="Male" checked="checked" >Male
                          <input type="radio" name="gen" value="Female" >Female
                       	
						<?php		
							}	
						   ?>
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
<form method="post" action="<?php echo site_url(); ?>/Profilc/setpicture" enctype="multipart/form-data">
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog"> 
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="model">&times;</button>
        </div>
        <div class="modal-body">
          <input type="file" name="img" >
        </div>
        <div class="modal-footer">
          <input type="submit" name="submit" class="btn btn-raised btn-success" value="Update Pic">
        </div>
      </div>
    </div>
  </div>
</form>
<!--/ Application Content --> 

<!-- Vendor JavaScripts  --> 
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts  --> 
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
</body></html> 