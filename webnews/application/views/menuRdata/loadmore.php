
<?php 						
foreach($fetchmenuInfo as $fetchmenuInfoData){											?>
								
									<div class="col-md-6">
										<div class="news-post standard-post2">
											<div class="post-gallery">
												<img src="<?php echo base_url()?>news/images/post/<?php echo $fetchmenuInfoData->image;?>" height="200" width="270" alt="">
												<a class="category-post world"  href="<?php echo site_url()?>/singlepostc/single/<?php echo $fetchmenuInfoData->rid?>/<?php echo $fetchmenuInfoData->cid?>" style="text-decoration:none"><?php echo $fetchmenuInfoData->catgname; ?></a>
											</div>
											<div class="post-title">
												<h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $fetchmenuInfoData->rid?>/<?php echo $fetchmenuInfoData->cid?>" style="text-decoration:none"><?php echo $fetchmenuInfoData->title?> </a></h2>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"></i><?php echo $fetchmenuInfoData->postdatereg?></li>
													<li><i class="fa fa-user"></i>by <a href="#">John Doe</a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
											</div>
											<div class="post-content">
												<p><?php echo substr($fetchmenuInfoData->description,0,80)?></p>
												
											</div>
										</div>
									</div>
									
								

<?php }	?>								
								