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
							$("#pDesc"+data).hide();
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
	   <h1 class="h3 m-0">Reporter Dashboard</h1><br />
      <div class="col-md-4 col-sm-12 col-xs-12">
                       
					    <section class="boxs user_widget">
                            <div class="uw_header l-blush">
                                <h3><?php echo $this->session->userdata('reportername') ?></h3>
                                <h5>Online</h5>
                            </div>
                            
                            <div class="uw_image">
                            
                             <img class="img-circle" src="<?php echo base_url()?>images/<?php echo $get->rimage ?>"  alt="User Avatar"></a> </div>
                            <div class="uw_footer">
                                <div class="text-center">
                                    <span>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-o"></i>
                                    </span>
                                    <p class="mt-20">It is a long established fact that a reader will be content of a page</p>
                                    <a href="<?php echo site_url()?>/Reportpostc/" class="btn btn-raised btn-info">My Post</a>
                                </div>

                                
                            </div>
                        </section>
                    </div>
        
        <div class="col-md-8 col-sm-12">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
                <ul class="nav nav-tabs tabs-dark-t" role="tablist">
                  <li role="presentation" class="active"> <a href="#mypost" role="" data-toggle="tab">All News</a> </li>
               <li role="presentation"> <a href="<?php echo site_url()?>/Reportpostc/sports/sports" role="tab" data-toggle="">Sports</a> </li>
               <li role="presentation"> <a href="<?php echo site_url()?>/Reportpostc/Entertainment/Entertainment" role="tab" data-toggle="">Entertainment</a> </li>
           	  
             <li role="presentation" > <a href="<?php echo site_url()?>/Reportpostc/education/education" role="tab" data-toggle="">Education</a> </li>
              
                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="mypost">
                    <div class="wrap-reset">
                      <div class="mypost-list mt-40">
                        <?php foreach($allNews as $data){?>
                     
                        <div class="post-box">
                   <div class="post-img" style="height:300px;width:400px;"> 
                        <img src="<?php echo base_url()?>images/post/<?php echo $data->image ?>"                          class="img-responsive"  alt /> 
                        <?php echo $data->postdatereg?>
                   </div>
                          <div class="panel panel-default">
                            <h4 class="mt-20">
							<?php echo $data->title?></h4>
                            
                            <p class="mb-0" id="pDesc<?php echo $data->rid; ?>"><?php $store=$data->description;
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
                         <div class="text-center" align="center">
		                  <button  onclick="loadmore(<?php echo $data->rid; ?>)" class="btn btn-raised btn-default" id="hideLoad<?php echo $data->rid; ?>">Load More …</button>
                         <br /><br />
					</div>
                    
                  <?php }?>
                 
                        
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