<section id="content">
<div class="page profile-page">
<div class="pagecontent">
<div class="row">
<div class="col-md-12">
  <section class="boxs">
    <div class="profile-header">
      <div class="profile_info">
        <div class="profile-image"> 
        <a  data-toggle="modal" data-target="#myModal">
         <img src="<?php echo base_url()?>/assets/images/profile-photo.jpg"  alt="<?php //echo $data->Aname;?>" height="150" width="150">
          <i class="fa fa-camera" style="vertical-align:bottom;margin-left:-50px;"></i>
         </a> </div>
        <h4 class="mb-0"><strong><?php //echo $data->Aname;?></strong></h4>
      </div>
    </div>
    <div class="profile-sub-header">
      <div class="box-list">
        <ul class="text-center" >
         
          <li><a href="<?php //echo site_url()?>/Galleryc/" class=""> <i class="fa fa-photo"></i>
            <p>Gallery</p>
            </a> </li>
          
        </ul>
      </div>
    </div>
  </section>
</div>
<div class="col-md-4 col-sm-12"> </div>
<div class="col-md-12 col-sm-16">
<section class="boxs boxs-simple">
<div class="boxs-body p-0">
<div role="tabpanel">
<ul class="nav nav-tabs tabs-dark-t" role="tablist">
  <li role="presentation" class="active"> <a href="#mypost" role="tab" data-toggle="tab">Edit Profile</a> </li>
</ul>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="setting">
    <div class="wrap-reset">
    <form class="profile-settings" method="post" action="<?php //echo site_url()?>/Profilec/personal">
      <div class="row">
        <div class="form-group col-sm-4">
          <label for="username"> Name</label>
          <input type="text" name="fname" class="form-control"  value="<?php //echo $data->fullname?>" readonly>
        </div>
       
        <div class="form-group col-sm-4">
          <label for="">Email</label>
          <input type="email" name="email " class="form-control" value="<?php //echo $data->Aemail?>" readonly>
        </div>
      </div>
      <div class="row">
      <div class="form-group col-sm-4">
          <label for="">Password</label>
          <input type="password" name="paas " class="form-control" value="<?php //echo $data->Aemail?>" readonly>
        </div>
      <div class="row">
      <div class="form-group col-sm-4">
        <label for="">Contact No </label>
        <input type="text" name="cno" class="form-control"  value="<?php //echo $data->contactno?>"    readonly >
      </div>
      </div>
      
      <div class="form-group col-sm-4">
          <label for="">Upload Pic</label>
          <input type="email" name="email " class="form-control" value="<?php //echo $data->Aemail?>" readonly>
        </div>
       
      
      
    
         <div class="form-group col-sm-12">
          <label for="address2">Address : </label>
   <textarea name="add" class="form-control" readonly="readonly" ><?php //echo $data->address; ?>
         </textarea>
          </div>
          
      <div class="form-group col-sm-4">
        <label for="city">City </label>
 <input type="text" name="city" class="form-control" value="<?php //echo $data->city;?>">
      </div>
      
      <div class="form-group col-sm-4">
        <label for="state">state </label>
 <input type="text" name="state" class="form-control" value="<?php //echo $data->state;?>">
      </div>
      <div class="form-group col-sm-4">
        <label for="date">Country </label>
 <input type="text" name="country" class="form-control" value="<?php //echo $data->country;?>">
      </div>
      </div>
      <div class="row">
      <div class="form-group col-sm-4">
        <label for="date">Date </label>
 <input type="datetime" name="datereg" class="form-control" value="<?php //echo $data->datereg;?>">
      </div>
      <div class="form-group col-sm-4">
        <label for="status"> status</label>
        <input type="text" name="status" class="form-control" value="<?php //echo $data->astatus?>" readonly="readonly">
      </div>
      <div class="form-group col-sm-4">
        <label for="pin"> Pincode</label>
  <input type="number" name="pincode" class="form-control" value="<?php //echo $data->pincode;?>" >
      </div>
      <div class="form-group col-sm-12">
        <input type="submit" name="Edit Profile" value="Update Profile" class="btn btn-raised btn-primary">
      </div>
      </div>
    </form>
  </div>
</div>
</section>
</div>
</section>
 <div class="modal fade" id="myModal" role="dialog">
<form method="post" action="<?php echo site_url()?>/Reporterpostc/setpic/"enctype="multipart/form-data">       
 <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" >&times;</button>
                    
                </div>
                <div class="modal-body">
                   <input type="file" name="img" />
                </div>
                <div class="modal-footer">
                    <input type="submit" name="submit" value="upload" class="btn btn-raised btn-success">
                </div>
            </div>

        </div>
        </form>
    </div>
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>
