
<!-- block-wrapper-section
			================================================== -->
		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- grid box -->
							<div class="grid-box">
								<div class="title-section">
									<h1><span class="world"></span></h1>
								</div>
                                <div class="row" style="float:right;border:1 solid red">
                    <?php foreach($fetchmenuInfo as $fetchmenuInfoData){											                    ?>
								
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<a href="<?php echo site_url()?>/singlepostc/single/<?php echo $fetchmenuInfoData->rid?>/<?php echo $fetchmenuInfoData->cid?>" style="text-decoration:none">
												<img src="<?php echo base_url()?>Admin/images/post/<?php echo $fetchmenuInfoData->image;?>" height="200" width="270" alt="">
												<a class="category-post world" href="#"><?php echo $fetchmenuInfoData->sname;?></a>
											</div>
											<div class="post-title">
												<h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $fetchmenuInfoData->rid?>/<?php echo $fetchmenuInfoData->cid?>" style="text-decoration:none"><?php echo $fetchmenuInfoData->title?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $fetchmenuInfoData->postdatereg?></li>
													<li><i class="fa fa-user"></i>by <a href="#"><?php echo $fetchmenuInfoData->rname?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span><?php echo count($comment)?></span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p><?php echo substr($fetchmenuInfoData->description,0,80)?></p>
												
											</div>
										</div>
									</div>
									
		<?php }	?>								
								</div>
                                <div class="row" style="float:right;border:1 solid red" id="apendMore">
                                </div>
							</div>
							<!-- End grid box -->

							

							<!-- pagination box -->
							<div class="center-button">
							<a  id="loadMore" onclick="loadMoreData()" style="cursor:pointer;"><i class="fa fa-refresh"></i> Load More</a>
						</div>
							<!-- End Pagination box -->
<script>
var offset=6;
function loadMoreData()
{
	
	$.ajax({
		
			url:"<?php echo site_url()?>/menudatC/loadmoreInfomenu/<?php echo $this->uri->segment(3)?>/"+offset,
			success: function(loadmorev)
			{

				var newLoad=loadmorev.substr(24,1);
			//	alert(newLoad);
				$("#apendMore").append(loadmorev);
				
				if(newLoad < 6 )
				{
					
					$("#loadMore").hide();
				}
				
			}
					
		
		
		});
	
}

</script>
						</div>
						<!-- End block content -->

					</div>

					<div class="col-sm-4">

						<!-- sidebar -->
						<div class="sidebar">
                     <?php if($this->uri->segment(3)==6){?>
                            <div style="height:300px;width:300px;">
                                 <script> d="www.cricwaves.com"; wi ="w"; co ="6";  </script>
                                  <script type="text/javascript" src="   http://www.cricwaves.com/widgets/script/iccScript.js">
                                  </script>
                            </div>
                            
                              <div>
                              <script> app="www.cricwaves.com"; mo="Z_W"; nt="n"; Width='310px'; Height='200px'; co ="aus"; ad="1"; </script>
                               <script type="text/javascript" src="http://www.cricwaves.com/cricket/widgets/script/scoreWidgets.js"></script>
                </div>
                <?php }?>
                
               <?php if($this->uri->segment(3)==11){?>
                <div id="astro_widget">
            <div id="astro_widget_content">
       <script data-cfasync="false" type="text/javascript" src="http://www.indianastrologysoftware.com/widget/wpanchang/av.tools.widget.big.db.v11.js"></script>
 </div></div>
 <div id="avx_widget_148_wid" style="display:block;">
 <div id="avx_widget_148_wid_in" class="av_widlocator" style="display:block;">
 <a href="http://www.indianastrologysoftware.com/free-download-kundli-software.php" target="_blank"></a>
 </div>
  <a id="pbWGT01562_OVZC" href="http://www.astro-vision.com/" target="_blank"></a></div>
 <script>var widget = new avWidgetAstroCalendar("astro_widget","free");
 var av_color="#20b9f1";var av_textcolor="#ffffff";
 
 var av_lang="eng";var av_cal="SAK";var av_crt="1";var av_loc = "New Delhi";</script>
                            
<?php }?>
							

							<div class="widget tab-posts-widget">

								<ul class="nav nav-tabs" id="myTab">
									<li class="active">
										<a href="#option1" data-toggle="tab">Recent</a>
									</li>
									<li>
										<a href="#option2" data-toggle="tab">Weekly</a>
									</li>
									<li>
										<a href="#option3" data-toggle="tab">Monthly</a>
									</li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="option1">
										<ul class="list-posts">
                                        <?php foreach($Recentnews as $recent){?>
											<li>
												<img src="<?php echo base_url()?>Admin/images/post/<?php echo $recent->image?>" alt="">
												<div class="post-content">
													<h2><a href=""><?php echo substr($recent->description,0,30)?> </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $recent->postdatereg?></li>
													</ul>
												</div>
											</li>
								        <?php }?>
										</ul>
									</div>
									<div class="tab-pane" id="option2">
										<ul class="list-posts">
                                       <?php foreach($Weeklynews as $week){?>
											<li>
												<img src="<?php echo base_url()?>Admin/images/post/<?php echo $week->image?>" alt="">
												<div class="post-content">
													<h2><a href=""><?php echo substr($week->description,0,30)?> </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $week->postdatereg?></li>
													</ul>
												</div>
											</li>
										<?php }?>
											
										</ul>										
									</div>
									<div class="tab-pane" id="option3">
										<ul class="list-posts">
											 <?php foreach($Monthlynews as $month){?>
											<li>
												<img src="<?php echo base_url()?>Admin/images/post/<?php echo $month->image?>" alt="">
												<div class="post-content">
													<h2><a href="single-post.html"><?php echo substr($month->description,0,30)?> </a></h2>
													<ul class="post-tags">
														<li><i class="fa fa-clock-o"></i><?php echo $month->postdatereg?></li>
													</ul>
												</div>
											</li>
											<?php }?>
											
										</ul>										
									</div>
								</div>
							</div>

							

							

							<div class="widget tags-widget">

								<div class="title-section">
									<h1><span>Popular Tags</span></h1>
								</div>

								

							</div>

						<div class="advertisement">
								<div class="desktop-advert">
									<span>Advertisement</span>
									<img src="<?php echo base_url()?>upload/addsense/300x250.jpg" alt="">
								</div>
								<div class="tablet-advert">
									<span>Advertisement</span>
									<img src="<?php echo base_url()?>upload/addsense/200x200.jpg" alt="">
								</div>
								<div class="mobile-advert">
									<span>Advertisement</span>
									<img src="<?php echo base_url()?>upload/addsense/300x250.jpg" alt="">
								</div>
							</div>

						</div>
						<!-- End sidebar -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->
        
        