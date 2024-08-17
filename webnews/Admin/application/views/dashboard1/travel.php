<script>
	function loadmore(data)
	{	
		//alert(data);
		
		$.ajax({
					url:"<?php echo site_url(); ?>/Reporterpostc/loadmoredata/"+data,
					success:function(loadMoredata)
						{
						//	alert(loadMoredata);
						//	alert(data);
							$("#contentData"+data).append(loadMoredata);
							$("#prviousdata"+data).hide();
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
      <div class="col-md-4 col-sm-12 col-xs-12">
                        <section class="boxs user_widget">
                            <div class="uw_header l-blush">
                                <h3><?php echo $get->rname;?></h3>
                                <h5>Online</h5>
                            </div>
                            
                            <div class="uw_image">
                            <a  data-toggle="modal" data-target="#myModal">
                             <img class="img-circle" src="<?php echo base_url()?>images/<?php echo $get->repid."/".$get->rimage ?>"  alt="User Avatar"></div>
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
                                    <a href="<?php echo site_url()?>/Reporterregc/" class="btn btn-raised btn-info">my post</a>
                                </div>

                                
                            </div>
                        </section>
                    </div>
        
        <div class="col-md-8 col-sm-12">
          <section class="boxs boxs-simple">
            <div class="boxs-body p-0">
              <div role="tabpanel">
                <ul class="nav nav-tabs tabs-dark-t" role="tablist">
                  <li role="presentation" > <a href="<?php echo site_url()?>/Reporterregc/home" role="tab" data-toggle="">All Post</a> </li>
                  <li role="presentation" > <a href="<?php echo site_url()?>/Reportpostc/sports/sports" role="tab" data-toggle="">Sports</a> </li>
                  <li role="presentation"> <a href="<?php echo site_url()?>/Reportpostc/Entertainment/Entertainment" role="tab" data-toggle="">Entertainment</a> </li>
                  <li role="presentation" > <a href="<?php echo site_url()?>/Reportpostc/Tech/Technology" role="tab" data-toggle="">Techology</a> </li>
					<li role="presentation" > <a href="<?php echo site_url()?>/Reportpostc/fashion/Fashion" role="tab" data-toggle="">Lifestyle</a> </li>
					<li role="presentation" > <a href="<?php echo site_url()?>/Reportpostc/education/education" role="tab" data-toggle="">Education</a> </li>
					<li role="presentation" class="active"> <a href="#setting" role="tab" data-toggle="">Travels</a> </li>

                </ul>
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="mypost">
                    <div class="wrap-reset">
                      <div class="mypost-list mt-20">
                        <?php foreach($getrepo as $data){?>
                      <hr>
                        <div class="post-box">
                          <div class="post-img"> <img src="<?php echo base_url() ?>images/post/<?php echo $data->image ?>" class="img-responsive" height="300" width="400" alt /> </div>
                          <div class="panel panel-default">
            
             <p class="mb-0"><?php echo $data->postdatereg; ?>
                            <h4 class="mt-20"><?php echo $data->title?></h4>
                            <p class="mb-0" id="prviousdata<?php echo $data->rid; ?>">
							<?php $store=$data->description;
											$storeData=preg_split('/-/',$store);
											echo $storeData[0];
											?>  </p>
                           <table id="contentData<?php echo $data->rid; ?>">
                                <tr>
                                	<td></td>
                                	
                                </tr>
                            </table>
                          </div>
                        </div>
                        <hr>
                        <div class="text-center"> 
                        <button class="btn btn-raised btn-default"  onclick="loadmore(<?php echo $data->rid?>)"id="hideLoad<?php echo $data->rid ?>">Load More …</button></div>
                      </div>
                      <?php }?>
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
<div class="modal fade" id="myModal" role="dialog">
<form method="post" action="<?php echo site_url()?>/Reorterregc/setpic/"enctype="multipart/form-data">       
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
<!--/ Application Content --> 

<!-- Vendor JavaScripts  --> 
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<!--/ vendor javascripts --> 

<!--  Custom JavaScripts  --> 
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
</body></html>