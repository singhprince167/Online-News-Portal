<script src="<?php echo base_url()?>assets/js/vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
	function loadmore(data)
	{	
		//alert(data);
		
		$.ajax({
					url:"<?php echo site_url(); ?>/Reportpostc/loadmoredata/"+data,
					success:function(loadMoredata)
						{
							//alert(loadMoredata);
							$("#contentData"+data).append(loadMoredata);
							
							if(loadMoredata=="")
							{	$("#hideLoad"+data).show();}
								else{
									$("#hideLoad"+data).hide();}	
						}
			});
	}
</script>

<section id="content">
  <div class="page profile-page"> 
    <div class="pagecontent"> 
      <div class="row">
      
        
        <div class="col-md-8 col-sm-12">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
               
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="mypost">
                    <div class="wrap-reset">
                      <div class="mypost-list mt-40">
                        <?php foreach($monthNews as $data){?>
                      <hr>
                        <div class="post-box">
  <div class="post-img"> <img src="<?php echo base_url() ?>images/post/<?php echo $data->image ?>" class="img-responsive" height="300" width="500" alt /> </div>
                          <div class="panel panel-default">
                            <h4 class="mt-20"><?php echo $data->title?></h4>
                            <p class="mb-0"><?php $store=$data->description;
											$storeData=preg_split('/-/',$store);
											echo $storeData[0];
											?> </p>
                            <table id="contentData<?php echo $data->rid; ?>">
                                <tr>
                                	<td></td>
                                	
                                </tr>
                            </table>
                          </div>
                        </div>
                         <div class="text-center">
		                  <button  onclick="loadmore(<?php echo $data->rid; ?>)" class="btn btn-raised btn-default" id="hideLoad<?php echo $data->rid; ?>">Load More …</button>
					</div>
                  <?php }?>
                 
                        
              </div>
              
            </div>
           </section>
        </div>
      </div>
    </div>
  </div>
</section>

</div>

<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script>

</body></html>