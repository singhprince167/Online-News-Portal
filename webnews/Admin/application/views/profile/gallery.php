<head>
<link rel="stylesheet"href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/magnific-popup/magnific-popup.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
<script>
	function deleteImg(data)
	{
		alert(data);
	}
</script>
</head>
<section id="content">
			<div class="page page-gallery">
				<!-- bradcome -->
				<div class="b-b mb-10">
					<div class="row">
						<div class="col-sm-6 col-xs-12">
							<h1 class="h3 m-0">Gallery</h1>
							<small class="text-muted">Welcome to News Gallery</small>
						</div>
					</div>
				</div>
				<div class="row">
                <form>
					<div class="col-md-12 gallery-col">
						<section class="boxs">
							<div class="boxs-body">
					<?php 
                    $i=count($image);
					if($i=="")
					{
					?>
                    <a href="<?php echo site_url()?>/Galleryc/move/<?php echo $row ?>" class="show-image">
						<img src="<?php echo base_url()?>gallery/error/seo-cycle.gif" alt="" class="img-responsive">
			</a>	
                    <?php 
					}
					else
					{
						foreach($image as $row)
						{	?>
								
						<img src="<?php echo base_url().$row;?>" alt="" class="img-responsive">
				
             <p onclick="deleteImg()" style="width:80px;">Delete</p>
                               
				 <?php
						}
					 }
					 
					 ?>	
                            
							</div>
						</section>
                        
					</div>
				</div>
			</div>
            </form>
		</section>
 <!-- Modal -->
  
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Delete</h4>
                </div>
                <div class="modal-body">
                    <p>Are You Sure to delete the Picture?</p>
                </div>
                <div class="modal-footer">
                     <button type="reset" class="btn btn-raised btn-default" data-dismiss="modal">No</button>
                  <button type="submit" class="btn btn-raised btn-danger" data-dismiss="modal">Yes</button>

                     
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->        
     <script src="<?php echo base_url();?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url();?>assets/bundles/vendorscripts.bundle.js"></script>
    <script src="<?php echo base_url();?>assets/bundles/mainscripts.bundle.js"></script>	 
</body>
</html>