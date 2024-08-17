<section class="heading-news">
  <div class="iso-call heading-news-box">
 
    <div class="news-post image-post default-size">
    
      <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $travel->image;?>" height="225" alt="">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post travel" href="<?php echo site_url()?>/singlepostc/single/<?php echo $travel->rid?>/<?php echo $travel->cid?>" style="text-decoration:none"><?php echo $travel->sname;?></a>
		
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $travel->rid?>/<?php echo $travel->cid?>" style="text-decoration:none"><?php echo substr($travel->title,0,30);?> </a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $travel->postdatereg?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
          </ul>
          <p>
		  <?php echo $travel->description?></p></a>
        </div>
      </div>
    </div>
    
    <div class="image-slider snd-size"> <span class="top-stories">TOP STORIES</span>
      <ul class="bxslider">
        <?php foreach($slider as $sliderdata){?>
        <li>
          <div class="news-post image-post"> <img src="<?php echo base_url()?>Admin/images/<?php echo $sliderdata->slider_image ?>" height="450" width="300" alt="" >
            <div class="hover-box">
									<div class="inner-hover">
										<a class="category-post world" href="world.html"><?php echo $sliderdata->cid?></a>
										<h2><a href="<?php echo site_url() ?>/Sildersinglepostc/single/<?php echo $sliderdata->cid?>" style="text-decoration:none"><?php echo substr($sliderdata->sliderdesc,0,30)?></a></h2>
										<ul class="post-tags">
											<li><i class="fa fa-clock-o"></i><?php echo substr($sliderdata->sdatereg,0,10) ?></li>
											
											<li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
											<li><i class="fa fa-eye"></i>872</li>
										</ul>
									</div>
								</div>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
    <div class="news-post image-post"> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $politics->image?>" alt="" height="225">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post food" href="<?php echo site_url()?>/singlepostc/single/<?php echo $politics->rid?>/<?php echo $politics->cid?>" style="text-decoration:none"><?php echo $politics->catgname?></a>
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $politics->rid?>/<?php echo $politics->cid?>" style="text-decoration:none"><?php echo substr($politics->title,0,30)?></a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $politics->postdatereg?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
          </ul>
          <p><?php echo $politics->description?></p>
        </div>
      </div>
    </div>
    <div class="news-post image-post"> <img src="<?php echo base_url()?>Admin/images/post/<?php echo $entertainment->image;?>" alt="" height="225">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post travel" href="<?php echo site_url()?>/singlepostc/single/<?php echo $entertainment->rid?>/<?php echo $entertainment->cid?>" style="text-decoration:none"><?php echo $entertainment->catgname?></a>
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $entertainment->rid?>/<?php echo $entertainment->cid?>" style="text-decoration:none"><?php echo substr($entertainment->title,0,30)?></a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $entertainment->postdatereg ?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
          </ul>
          <p><?php echo $entertainment->description?></p>
        </div>
      </div>
    </div>
    <div class="news-post image-post"> <img src="<?php echo base_url()?>Admin/images/post/<?php echo $sports->image ?>"  alt="" height="225">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post sport" href="<?php echo site_url()?>/singlepostc/single/<?php echo $sports->rid?>/<?php echo $sports->cid?>" style="text-decoration:none">sport</a>
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $sports->rid?>/<?php echo $sports->cid?>" style="text-decoration:none"> <?php echo substr($sports->title,0,30)?> </a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $sports->postdatereg?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
          </ul>
          <p><?php echo $sports->description?></p>
        </div>
      </div>
    </div>
    <div class="news-post image-post"> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $fashion->image?>" alt="" height="225">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post fashion" href="<?php echo site_url()?>/singlepostc/single/<?php echo $fashion->rid?>/<?php echo $fashion->cid?>" style="text-decoration:none"><?php echo $fashion->sname?></a>
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $fashion->rid?>/<?php echo $fashion->cid?>" style="text-decoration:none"> <?php echo substr($fashion->title,0,30);?> </a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $fashion->postdatereg?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
          </ul>
          <p><?php echo $fashion->description?></p>
        </div>
      </div>
    </div>
    <div class="news-post image-post"> 
    <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $tech->image?>" alt="" height="225">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post sport" href="<?php echo site_url()?>/singlepostc/single/<?php echo $tech->rid?>/<?php echo $tech->cid?>" style="text-decoration:none"><?php echo $tech->catgname?></a>
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $tech->rid?>/<?php echo $tech->cid?>" style="text-decoration:none"><?php echo substr($tech->title,0,30)?> </a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $tech->postdatereg?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
          </ul>
          <p><?php echo $tech->description?></p>
        </div>
      </div>
    </div>
    <div class="news-post image-post default-size">
    
      <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $travel->image;?>" height="225" alt="">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post travel" href="<?php echo site_url()?>/singlepostc/single/<?php echo $travel->rid?>/<?php echo $travel->cid?>" style="text-decoration:none"><?php echo $travel->sname;?></a>
		
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $travel->rid?>/<?php echo $travel->cid?>" style="text-decoration:none"><?php echo substr($travel->title,0,30);?> </a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $travel->postdatereg?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
          </ul>
          <p>
		  <?php echo $travel->description?></p></a>
        </div>
      </div>
    </div>
    
    <div class="news-post image-post"> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $education->image?>" alt="">
      <div class="hover-box">
        <div class="inner-hover"> <a class="category-post food" href="<?php echo site_url()?>/singlepostc/single/<?php echo $education->rid?>/<?php echo $education->cid?>" style="text-decoration:none">Education</a>
          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $education->rid?>/<?php echo $education->cid?>" style="text-decoration:none"><?php echo substr($education->title,0,30)?></a></h2>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><span><?php echo $education->postdatereg?></span></li>
            <li><a href="#"><i class="fa fa-comments-o"></i><span>20</span></a></li>
          </ul>
          <p><?php echo $education->description?></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End heading-news-section --> 

<!-- ticker-news-section
			================================================== -->

<section class="ticker-news">
  <div class="container">
    <div class="ticker-news-box"> <span class="breaking-news">breaking news</span> <span class="new-news">New</span>
      <ul id="js-news">
        <?php foreach($breakingnews as $news){?>
        <li class="news-item">
            
            <span class="time-news"><?php echo " IST ".substr($news->datereg,10,11)?></span> 
			<a href="#"><?php echo $news->description;?></a> 
        </li>
        <?php } ?>
      </ul>
    </div>
  </div>
</section>
<!-- End ticker-news-section --> 

<!-- features-today-section
			================================================== -->
<section class="features-today">
  <div class="container">
    <div class="title-section">
      <h1><span>Trending News</span></h1>
    </div>
    <div class="features-today-box owl-wrapper">
      <div class="owl-carousel" data-num="4">
        <?php foreach ($features as $today){ ?>
       
        <div class="item news-post standard-post">
           <a href="<?php echo site_url()?>/singlepostc/single/<?php echo $today->rid?>/<?php echo $today->cid?>" style="text-decoration:none">
          <div class="post-gallery"> 
          <img src="<?php echo base_url()?>Admin/images/post/<?php echo $today->image?>" height="200" width="270" alt="">
		  
		 
		  
		  <a class="category-post sport" href="<?php echo site_url()?>/singlepostc/single/<?php echo $today->rid?>/<?php echo $today->cid?>" style="text-decoration:none"><?php echo $today->title?></a>
           </div>
         
          <div class="post-content">
            <h2><?php echo substr($today->description,0,100) ?></h2>
            <ul class="post-tags">
              <li><i class="fa fa-clock-o"></i><?php echo $today->postdatereg ?></li>
              <li><i class="fa fa-user"></i>by <a href="#"><?php echo $today->rname?></a></li>
              <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
            </ul>
          </div>
        </div>
        </a>
        <?php }?>
      </div>
    </div>
	  </div>
</section>
<!-- End features-today-section --> 

<!-- block-wrapper-section
			================================================== -->
<section class="block-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8"> 
        
        <!-- block content -->
        <div class="block-content"> 
          
          <!-- carousel box -->
          <div class="carousel-box owl-wrapper">
            <div class="title-section">
              <h1><span class="world">world</span></h1>
            </div>
            <div class="owl-carousel" data-num="2">
              <div class="item">
                <div class="news-post image-post2">
                 
                  <div class="post-gallery"> <img src="<?php echo base_url()?>Admin/images/post/<?php echo $sports->image?>" height="300" alt="">
                    <div class="hover-box">
                      <div class="inner-hover">
                        <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $sports->rid?>/<?php echo $sports->cid?>" style="text-decoration:none"><?php echo $sports->catgname?> </a></h2>
                        <ul class="post-tags">
                          <li><i class="fa fa-clock-o"></i><?php echo $sports->postdatereg?></li>
                          <li><i class="fa fa-user"></i>by <a href="#"><?php echo $sports->rname?></a></li>
                          <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                          <li><i class="fa fa-eye"></i>872</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="list-posts">
                  <?php foreach($sports1 as $sport){?>
                  <li> 
                  <a href="<?php echo site_url()?>/singlepostc/single/<?php echo $sport->rid?>/<?php echo $sports->cid?>" style="text-decoration:none">
                  <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $sport->image?>" height="80" width="100" alt="">
                    <div class="post-content">
                      <h2><?php echo $sport->title?> </a></h2>
                      <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><?php echo $sport->postdatereg?></li>
                      </ul>
                    </div>
                  </li>
                  <?php }?>
                </ul>
              </div>
              <div class="item">
                <div class="news-post image-post2">
                  <div class="post-gallery"> <img src="<?php echo base_url()?>Admin/images/post/<?php echo $entertainment->image?>" height="300" alt="">
                    <div class="hover-box">
                      <div class="inner-hover">
                        <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $entertainment->rid?>/<?php echo $entertainment->cid?>" style="text-decoration:none"><?php echo $entertainment->catgname?></a></h2>
                        <ul class="post-tags">
                          <li><i class="fa fa-clock-o"></i><?php echo $entertainment->postdatereg?></li>
                          <li><i class="fa fa-user"></i>by <a href="#"><?php echo $entertainment->rname?></a></li>
                          <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                          <li><i class="fa fa-eye"></i>872</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="list-posts">
                  <?php foreach($entertain as $enter){?>
                  <li> 
                  <a href="<?php echo site_url()?>/singlepostc/single/<?php echo $enter->rid?>/<?php echo $enter->cid?>" style="text-decoration:none">
                  <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $enter->image?>" height="80" width="100" alt="">
                    <div class="post-content">
                      <h2><?php echo $enter->title?> </a></h2>
                      <ul class="post-tags">
                        <li><i class="fa fa-clock-o"><?php echo $enter->postdatereg?></i></li>
                      </ul>
                      <?php }?>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="item">
                <div class="news-post image-post2">
                  <div class="post-gallery"> <img src="<?php echo base_url()?>Admin/images/post/<?php echo $tech->image?>" height="300" alt="">
                    <div class="hover-box">
                      <div class="inner-hover">
                        <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $tech->rid?>/<?php echo $tech->cid?>" style="text-decoration:none"><?php echo $tech->catgname?> </a></h2>
                        <ul class="post-tags">
                          <li><i class="fa fa-clock-o"></i><?php echo $tech->postdatereg?></li>
                          <li><i class="fa fa-user"></i>by <a href="#"><?php echo $tech->rname?></a></li>
                          <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                          <li><i class="fa fa-eye"></i>872</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <ul class="list-posts">
                  <?php foreach($tech1 as $tech){?>
                  <li>
          
		          <a href="<?php echo site_url()?>/singlepostc/single/<?php echo $tech->rid?>/<?php echo $tech->cid?>" style="text-decoration:none">
                  <img src="<?php echo base_url()?>Admin/images/post/<?php echo $tech->image?>" height="80" width="100" alt="">
                    <div class="post-content">
                      <h2><?php echo $tech->title?> </a></h2>
                      <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i>
                          <?php $tech->postdatereg?>
                        </li>
                      </ul>
                      <?php }?>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <!-- End carousel box --> 
          
          <!-- carousel box -->
          <div class="carousel-box owl-wrapper">
            <div class="title-section">
              <h1><span>Gallery</span></h1>
            </div>
            <div class="owl-carousel" data-num="3">
                <?php foreach($gallery as $pic){?>
              <div class="item news-post image-post3"> 
            
			  <a href=""></a>
              <img src="<?php echo base_url() ?>Admin/images/<?php echo $pic->timage?>" height="180" width="185" alt="">
               <div class="hover-box">
				<h2><a href="<?php echo site_url() ?>/Todaysinglepostc/single/<?php echo $pic->cid?>" style="text-decoration:none"><?php echo $pic->title?></a></h2>
											<ul class="post-tags">
												<li><i class="fa fa-clock-o"></i><?php echo substr($pic->datereg,0,10)?></li>
											</ul>
										</div>             </a>
              </div>
              <?php }?>
            </div>
            
          </div>
          <!-- End carousel box --> 
          
          <!-- grid box -->
          <div class="grid-box">
            <div class="row">
              <div class="col-md-6">
                <div class="title-section">
                  <h1><span class="fashion">Education</span></h1>
                </div>
                <div class="image-post-slider">
                  <ul class="bxslider">
                    <?php foreach($Educations as $educat){?>
                    <li>
                      <div class="news-post image-post2">
                        <div class="post-gallery"> 
                        <img src="<?php echo base_url()?>Admin/images/post/<?php echo $educat->image?>" height="300" alt=""> 
                        <div class="hover-box">
							<div class="inner-hover">
							<h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $educat->rid?>/<?php echo $educat->cid?>" style="text-decoration:none"><?php echo $educat->title?></a></h2>
								<ul class="post-tags">
								 <li><i class="fa fa-clock-o"><?php echo $educat->postdatereg?></i></li>
							    <li><i class="fa fa-user"></i>by <a href="#"><?php echo $educat->rname?></a></li>
						        <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
						       <li><i class="fa fa-eye"></i>872</li>
						     </ul>
				         </div>
					</div>
                        </div>
                      </div>
                    </li>
                    <?php }?>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="title-section">
                  <h1><span class="world">Lifestyle</span></h1>
                </div>
                <div class="owl-wrapper" >
                  <div class="owl-carousel "  data-num="1">
                    <div class="item" >
                      <ul class="list-posts" >
                        <?php
						$imgdata=0;
						foreach($lifestyle as $life)
						{
					
					?>
                        <li> 
						
						
                        <a href="<?php echo site_url()?>/singlepostc/single/<?php echo $life->rid?>/<?php echo $life->cid?>" style="text-decoration:none">
						
                        <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $life->image?>" height="80" width="100" alt="">
                          <div class="post-content">
                            <h2><?php echo $life->title?> </a></h2>
                            <ul class="post-tags">
                              <li><i class="fa fa-clock-o"></i><?php echo $life->postdatereg?></li>
                            </ul>
                          </div></a>
                        </li>
                        <?php
						$imgdata++;
						}
					//	echo $imgdata;
					?>
                      </ul>
                    </div>
                    <div class="item">
                      <ul class="list-posts">
                        <?php
						$this->db->from('category');
						$this->db->join('reporterpost','reporterpost.cid=category.cid');
						$this->db->where('rpstatus',"Active");
						$this->db->where('catgname','Lifestyle');
						$this->db->order_by('reporterpost.rid','desc');
						$this->db->limit($imgdata,3);
						$newlifestyle=$this->db->get()->result();
						foreach($newlifestyle as $life)
						{
					?>
                        <li>
						
                         
						 <a href="<?php echo site_url()?>/singlepostc/single/<?php echo $life->rid?>/<?php echo $life->cid?>" style="text-decoration:none">
						 
                         <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $life->image?>" height="80" width="100" alt="">
                          <div class="post-content">
                            <h2><?php echo $life->title?> </a></h2>
                            <ul class="post-tags">
                              <li><i class="fa fa-clock-o"></i><?php echo $life->postdatereg?></li>
                            </ul>
                          </div></a>
                        </li>
                        <?php
						}
					?>
                      </ul>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- End grid box --> 
          
          <!-- google addsense -->
          <div class="advertisement">
            <div class="desktop-advert"> <span>Advertisement</span><a href="https://www.myntra.com/"> <img src="<?php echo base_url()?>images/myntra.jpg" alt=""> </a></div>
            <div class="tablet-advert"> <span>Advertisement</span><a href="https://www.myntra.com/"> <img src="<?php echo base_url()?>images/myntra.jpg" alt=""> </a></div>
            <div class="mobile-advert"> <span>Advertisement</span><a href="https://www.myntra.com/"> <img src="<?php echo base_url()?>images/myntra.jpg" alt=""></a> </div>
          </div>
          <!-- End google addsense --> 
          
        </div>
        <!-- End block content --> 
        
      </div>
      <div class="col-sm-4"> 
        
        <!-- sidebar -->
        <div class="sidebar">
          
          <div class="widget features-slide-widget">
            <div class="title-section">
              <h1><span>Featured Posts</span></h1>
            </div>
            <div class="image-post-slider">
              <ul class="bxslider">
                <?php foreach($featurepost as $feature){?>
                <li>
                  <div class="news-post image-post2">
                    <div class="post-gallery"> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $feature->image?>" height="300" alt="">
                      <div class="hover-box">
                        <div class="inner-hover">
                          <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $feature->rid?>/<?php echo $feature->cid?>" style="text-decoration:none"><?php echo $feature->title?> </a></h2>
                          <ul class="post-tags">
                            <li><i class="fa fa-clock-o"></i><?php echo $feature->postdatereg?></li>
                            <li><i class="fa fa-user"></i>by <a href="#"><?php echo $feature->rname?></a></li>
                            <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                            <li><i class="fa fa-eye"></i>872</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
                <?php }?>
              </ul>
            </div>
          </div>
		  
          
          
	
     <div class="advertisement">
            <div class="desktop-advert"> <span>Advertisement</span> <a href="https://www.myntra.com/"><img src="<?php echo base_url() ?>images/adv.png" alt=""></a> </div>
            <div class="tablet-advert"> <span>Advertisement</span><a href="https://www.myntra.com/"> <img src="<?php echo base_url() ?>images/adv.png" alt=""> </a></div>
            <div class="mobile-advert"> <span>Advertisement</span> <a href="https://www.myntra.com/"><img src="<?php echo base_url() ?>images/adv.png" alt=""> </a></div>
          </div>
 
        </div>
		<!-- End sidebar --> 
        
      </div>
    </div>
  </div>
</section>
<!-- End block-wrapper-section --> 

<!-- block-wrapper-section
			================================================== -->
<section class="block-wrapper">
  <div class="container">
    <div class="row">
      <div class="col-sm-8"> 
        
        <!-- block content -->
        <div class="block-content"> 
          
          <!-- masonry box -->
          <div class="masonry-box">
            <div class="title-section">
              <h1><span>Latest Articles</span></h1>
            </div>
            <div class="latest-articles iso-call">
              <?php foreach($article as $latestart){?>
              <div class="news-post standard-post2 default-size" style="float:right;">
             
			 	<a href="<?php echo site_url()?>/singlepostc/single/<?php echo $latestart->rid?>/<?php echo $latestart->cid?>" style="text-decoration:none">   
                <div class="post-gallery" > <img src="<?php echo base_url()?>Admin/images/post/<?php echo $latestart->image?>" height="200" width="370" alt=""> </div>
                <div class="post-title">
                  <h2><?php echo $latestart->title?></a></h2>
                  <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i><?php echo $latestart->postdatereg?></li>
                    <li><i class="fa fa-user"></i>By <a href="#"><?php echo $latestart->rname?></a></li>
                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                  </ul>
                </div>
                </a>
              </div>
              <?php }?>
            </div>
          </div>
          
          <!-- End masonry box --> 
          
          <!-- pagination box -->
          
          <!-- End pagination box --> 
          
        </div>
        <!-- End block content --> 
        
      </div>
      <div class="col-sm-4"> 
        
        <!-- sidebar -->
        <div class="sidebar">
          <div class="widget tab-posts-widget">
            <ul class="nav nav-tabs" id="myTab">
              <li class="active"> <a href="#option1" data-toggle="tab">Recent News</a> </li>
              <li> <a href="#option2" data-toggle="tab">Weekly News</a> </li>
              <li> <a href="#option3" data-toggle="tab">Monthly News</a> </li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="option1">
                
                <ul class="list-posts">
                 <?php 
				 foreach($Recentnews as $recent)
				 {
						 
				?>
                  <li> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $recent->image?>" height="70" width="80" alt="">
                    <div class="post-content">
                      <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $recent->rid?>/<?php echo $recent->cid?>" style="text-decoration:none"><?php echo substr($recent->description,50)?></a></h2>
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
                <?php foreach($Weeklynews as $weekly){?>
                  <li><img src="<?php echo base_url()?>Admin/images/post/<?php echo $weekly->image?>" height="70" width="80" alt="">
                    <div class="post-content">
                      <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $weekly->rid?>/<?php echo $weekly->cid?>" style="text-decoration:none"><?php echo substr($weekly->description,50)?> </a></h2>
                      <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><?php echo $weekly->postdatereg?></li>
                      </ul>
                    </div>
                  </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="tab-pane" id="option3">
                <ul class="list-posts">
                <?php foreach($Monthlynews as $monthly){?>
                  <li> <img src="<?php echo base_url()?>Admin/images/post/<?php echo $monthly->image?>" height="70" width="80" alt="">
                    <div class="post-content">
                      <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $monthly->rid?>/<?php echo $monthly->cid?>" style="text-decoration:none"><?php echo substr($monthly->description,0,50)?></a></h2>
                      <ul class="post-tags">
                        <li><i class="fa fa-clock-o"></i><?php echo $monthly->postdatereg?></li>
                      </ul>
                    </div>
                  </li>
                  <?php }?>
              </ul>
              </div>
            </div>
          </div>
         
          <div class="advertisement">
            <div class="desktop-advert"> <span>Advertisement</span> <a href="https://www.myntra.com/"><img src="<?php echo base_url() ?>images/adv.png" alt=""></a> </div>
            <div class="tablet-advert"> <span>Advertisement</span> <a href="https://www.myntra.com/"><img src="<?php echo base_url() ?>images/adv.png" alt=""> </a></div>
            <div class="mobile-advert"> <span>Advertisement</span> <a href="https://www.myntra.com/"><img src="<?php echo base_url() ?>images/adv.png" alt=""> </a></div>
          </div>
        </div>
		
		
        <!-- End sidebar --> 
        
      </div>
    </div>
  </div>
</section>

<!-- End block-wrapper-section --> 
