<script>
window.onload=ImageError;
function ImageError()
{	
	//Image Error
	$("#error").hide();	
}
function vaildImage(img)
{	
	var ext=img.split(".");
	if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" ))
	{
			$("#error").hide();$("#submit").attr('disabled',false);
	}
	else
	{	
			$("#error").show(); $("#submit").attr('disabled',true);	
	}
}
</script>
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
         <img src="<?php echo base_url()?>gallery/<?php echo $data->Aid."/".$data->aimage; ?>"  
          alt="<?php echo $data->Aname;?>" height="150" width="150">
          <i class="fa fa-camera" style="vertical-align:bottom;margin-left:-50px;"></i>
         </a> </div>
        <h4 class="mb-0"><strong><?php echo $data->Aname;?></strong></h4>
      </div>
    </div>
    <div class="profile-sub-header">
      <div class="box-list">
        <ul class="text-center" >
         
          <li><a href="<?php echo site_url()?>/Galleryc/" class=""> <i class="fa fa-photo"></i>
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
  <li role="presentation" class="active"> <a href="#mypost" role="tab" data-toggle="tab">Admin Profile</a> </li>
</ul>
<div class="tab-content">
  <div role="tabpanel" class="tab-pane active" id="setting">
    <div class="wrap-reset">
    <form class="profile-settings" method="post" action="<?php echo site_url()?>/Profilec/personal">
      <div class="row">
        <div class="form-group col-sm-4">
          <label for="username">Full Name</label>
          <input type="text" name="fname" class="form-control"  value="<?php echo $data->fullname?>" readonly>
        </div>
       
        <div class="form-group col-sm-4">
          <label for="">Email</label>
          <input type="email" name="email " class="form-control" value="<?php echo $data->Aemail?>" readonly>
        </div>
      </div>
      <div class="row">
      <div class="form-group col-sm-4">
        <label for="">Contact No </label>
        <input type="text" name="cno" class="form-control"  value="<?php echo $data->contactno?>"    readonly >
      </div>
      
       
        <div class="form-group col-md-6">
          <label for="">Gender</label>
          <div class="radio">
          <?php
    	if($data->gender=="Male")
		{ ?>
          <label><input type="radio" name="gender" value="Male" checked="checked" >
          Male</label>
          <label><input type="radio" name="gender" value="Female" disabled="disabled">
          Female</label>
          <?php }
			elseif($data->gender=="Female")
			{?>
          <label><input type="radio" name="gender" value="Male" disabled="disabled">
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
		?>
        </div>
        </div>
      </div>
      
      <div class="row">
         <div class="form-group col-sm-12">
          <label for="address2">Address : </label>
   <textarea name="add" class="form-control" readonly="readonly" ><?php echo $data->address; ?>
         </textarea>
          </div>
          
      </div>
      <div class="row">
      <div class="form-group col-sm-4">
        <label for="city">City </label>
 <input type="text" name="city" class="form-control" value="<?php echo $data->city;?>" readonly="readonly">
      </div>
      
      <div class="form-group col-sm-4">
        <label for="state">state </label>
 <input type="text" name="state" class="form-control" value="<?php echo $data->state;?>" readonly="readonly">
      </div>
      <div class="form-group col-sm-4">
        <label for="date">Country </label>
 <input type="text" name="country" class="form-control" value="<?php echo $data->country;?>" readonly="readonly">
      </div>
      </div>
      <div class="row">
      <div class="form-group col-sm-4">
        <label for="date">Date </label>
 <input type="datetime" name="datereg" class="form-control" value="<?php echo $data->datereg;?>" readonly="readonly">
      </div>
      <div class="form-group col-sm-4">
        <label for="status"> status</label>
        <input type="text" name="status" class="form-control" value="<?php echo $data->astatus?>" readonly="readonly">
      </div>
      <div class="form-group col-sm-4">
        <label for="pin"> Pincode</label>
  <input type="number" name="pincode" class="form-control" value="<?php echo $data->pincode;?>"  readonly="readonly">
      </div>
      <div class="form-group col-sm-12">
        <input type="submit" name="Edit Profile" value="Edit Profile" class="btn btn-raised btn-primary">
      </div>
      </div>
    </form>
  </div>
</div>
</section>
</div>
</section>
 <div class="modal fade" id="myModal" role="dialog">
<form method="post" action="<?php echo site_url()?>/Profilec/setpic/"enctype="multipart/form-data">       
 <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal" >&times;</button>
                    
                </div>
                <div class="modal-body">
                   <input type="file" name="img"  onchange="vaildImage(this.value)">
				  
                </div>
				 <p id="error" style="color:red" align="center">Image Not in a Valid Format.</p>
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
