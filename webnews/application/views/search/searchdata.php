<section class="block-wrapper left-sidebar">
			<div class="container">
				<div class="row">

					<div class="col-sm-8">
                          
						<div class="block-content">
                                 Your search result is"<?php echo $search?>"
							<!-- article box -->
							<div class="article-box">
								
								<?php 
								if(count($data)!="")
								{

								foreach($data as $search)
								{
								?>
								
								<div class="news-post article-post">
									<div class="row">
										<div class="col-sm-2">
											<div class="post-gallery">
												<a href="<?php echo site_url()?>/singlepostc/single/<?php echo $search->rid?>/<?php echo $search->cid?>" style="text-decoration:none">
												<img  src="<?php echo base_url()?>Admin/images/post/<?php echo $search->image?>" height="100" width="150" alt="">
												
											</div>
										</div>
										<div class="col-sm-6">
											<div class="post-content">
												<h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $search->rid?>/<?php echo $search->cid?>" style="text-decoration:none"> <?php echo $search->title?></a></h2></a>
												<ul class="post-tags">
													<li><i class="fa fa-clock-o"><?php echo $search->postdatereg?></i></li>
													<li><i class="fa fa-user"></i>by <a href="#"><?php echo $search->rname;?></a></li>
													<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
													<li><i class="fa fa-eye"></i>872</li>
												</ul>
												<p><?php echo substr($search->description,0,150)?></p>
											
											</div>
										</div>
									</div>
								</div>

								
                              <?php }
							  }
							  else
							  {
							   ?>
							
							<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">

						<!-- block content -->
						<div class="block-content">

							<!-- error box -->
							<div class="error-box">
								<div class="error-banner">
									<h1>Error <span>404</span></h1>
									<p>Oops! It looks like nothing was found at this location. Maybe try another link or a search?</p>
								</div>
							</div>
							<!-- End error box -->

							<!-- grid box -->
							
							<!-- End grid box -->

						</div>
						<!-- End block content -->

					</div>

					

				</div>

			</div>
		</section>
							<?php
							}
							?>
							</div>
							<!-- End article box -->

							<!-- google addsense -->
							
						</div>
						<!-- End block content -->

					</div>

				</div>

			</div>
		</section>
		<!-- End block-wrapper-section -->
