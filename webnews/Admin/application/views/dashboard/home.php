<section id="content">
  <div class="page dashboard-page"> 
    <!-- bradcome -->
    <div class="b-b mb-20">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Admin Dashboard</h1>
          
      </div>
    </div>
    <div class="row clearfix" >
      <div class="align-center col-md-4 col-sm-12 col-xs-12" style="margin-left:350px;">
        <section class="boxs user_widget">
          <div class="uw_header l-blush">
            <h3><?php echo $data->Aname; ?></h3>
            <h5><?php echo $data->priority?></h5>
          </div>
          <div class="uw_image"> <img  class="img-circle" src="<?php echo base_url();?>gallery/<?php echo $data->Aid."/".$data->aimage ?>"></div>
          <div class="uw_footer">
            <div class="text-center">
             <span>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> 
              <i class="fa fa-star"></i> 
              <i class="fa fa-star-o"></i> 
              </span>
              <p class="mt-20">Welcome To The Site. </p>
              <a href="<?php echo site_url()?>/Profilec/profile" class="btn btn-raised btn-info">Edit profile</a> </div>
            
        </section>
      </div>
	</div>
  </div>
</section>

<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> 
</body>
</html>