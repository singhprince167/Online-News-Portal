<!doctype html>
<html lang="en" class="no-js">
<head>
<title>TODAY INDIA</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='<?php echo base_url()?>http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url()?>/maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/bootstrap.min.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/jquery.bxslider.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/font-awesome.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/magnific-popup.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.carousel.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/owl.theme.css" media="screen">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/ticker-style.css"/ >
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/style.css" media="screen">
<script src="<?php echo base_url()?>js/bootstrap.min1.js"></script>
<script src="<?php echo base_url()?>/js/jquery.min1.js"></script>


<script type="text/javascript">
	$( document ).ready(function()
	 {
        if (document.cookie.indexOf('visited=true') == -1)
		{
    // load the overlay
         $('#myModal').modal({show:true});
    
         var year = 1000*60*60*24*365;
         var expires = new Date((new Date()).valueOf() + year);
         document.cookie = "visited=true;expires=" + expires.toUTCString();

      }
     });
	 
</script>
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', includedLanguages: 'en,gu,hi,mr', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
#google_translate_element img
        {
            display: none !important;
        }
</style>
</head>
<body>
<div id="container">
<header class="clearfix">
  <nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="top-line">
      <div class="container">
        <div class="row">
          <div class="col-md-9">
            <ul class="top-line-list">
              <li> <span class="city-weather">Surat,Gujarat</span> </li>
              <li><span class="time-now">
                <?php 
									date_default_timezone_set("Asia/Kolkata");
									echo $date=Date('D,d-M-Y')?>
                </span> </li>
              <?php
									if($this->session->userdata('useremail')=="")
									{
									?>
              <li><a href="<?php echo site_url()?>/Loginc/">Log In</a></li>
              <?php } else {?>
              <li><a href="<?php echo site_url()?>/Loginc/logout">Logout</a></li>
              <?php }?>
              <li></li>
            </ul>
          </div>
		  <div >
				  <div id="google_translate_element" class="col-md-3"></div>
        
		  </div>
		  <div class="col-md-3" style="margin-left:900px;margin-top:-25px;">
            <ul class="social-icons">
              <li><a class="facebook" href="https://www.facebook.com/TodayIndia-2017948445114339/"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/Gangadhar_Take"><i class="fa fa-twitter"></i></a></li>
              <li><a class="google" href="https://plus.google.com/u/0/104919758728797268978"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="linkedin" href="https://www.linkedin.com/in/sagar-take-b8487a137"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- End Top line --> 
    
    <!-- Logo & advertisement -->
    <div class="logo-advertisement">
      <div class="container"> 
        
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="<?php echo site_url()?>/Newsc"><img src="<?php echo base_url()?>images/logo1.png" height="70" width="348" alt=""></a> </div>
        <div class="advertisement">
		
	      <div class="desktop-advert"> <span>Advertisement</span><a href="https://www.myntra.com/"><img src="<?php echo base_url()?>images/myntra.jpg" alt=""> </a></div>
          <div class="tablet-advert"> <span>Advertisement</span> <img src="<?php echo base_url()?>images/myntra.jpg" alt=""> </div>
        </div>
      </div>
    </div>
    <!-- End Logo & advertisement --> 
    
    <!-- navbar list container -->
    <div class="nav-list-container">
      <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <?php  foreach($category as $categoryData) {
	
				?>
            <li class="<?php if($this->uri->segment(3)==$categoryData->cid){?>active<?php } ?>"> <a class="sport" href="<?php echo site_url() ?>/menudatC/allMenu/<?php  echo $categoryData->cid ?>"><?php echo $categoryData->catgname ?></a>
              <div class="megadropdown">
                <div class="container">
                  <div class="inner-megadropdown tech-dropdown">
                    <div class="owl-wrapper">
                      <ul class="horizontal-filter-posts">
                        <li> <a class="active" href="<?php echo site_url() ?>/menudatC/allMenu/<?php  echo $categoryData->cid ?>">All</a> 
                        </li>
                       
                      </ul>
                      <div class="owl-carousel" data-num="4">
                        
						<?php  $i=0;
						foreach($menuRelated as $lifes)
						 { $i++;
						if($lifes->cid==$categoryData->cid)
						{	
					//	if($i==9){
						?>
                        
						
						<a href="<?php echo site_url()?>/singlepostc/single/<?php echo $lifes->rid?>/<?php echo $lifes->cid?>" style="text-decoration:none">
                        <div class="item news-post standard-post" style="float:right;">
                          <div class="post-gallery">
 <img src="<?php echo base_url()?>Admin/images/post/<?php echo $lifes->image ?>" height="200" width="270" alt=""> 
                          </div>
                          <div class="post-content">
                            <h2><?php echo $lifes->title ?></h2>
                            <ul class="post-tags">
                              <li><i class="fa fa-clock-o"></i><?php echo $lifes->postdatereg ?></li>
                              <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                            </ul>
                          </div>
                        </div></a>
                        <?php }
						//}
						}
						?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
            <?php }  ?>
          </ul>
<div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title">Subscribe our Newsletter</h4>
            </div>
            <div class="modal-body">
				<p>Stay up to date and join our newsletter to receive the latest updates.</p>
                <form method="post" name="subcribe" id="subc" action="<?php echo site_url()?>/Subscriberc/sub" >
                    
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" id="semail" placeholder="Please Enter Your Email Address" required>
						
                    </div>
					<div>
					<?php echo $this->session->userdata('subscriber')?>
                    <input type="submit" class="btn btn-raised btn-success"  value="Allow">
					<button type="button" class="btn btn-raised btn-danger" data-dismiss="modal" aria-hidden="true">Close</button>
					</div>
                </form>
				
            </div>
        </div>
    </div>
</div>
	<div style="z-index:-1">
          <form class="navbar-form navbar-right" role="search" method="post" action="<?php echo site_url()?>/Newsc/search">
            <input type="text" id="countries" name="search" placeholder="Search here">
            <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
          </form>
		  </div>
        </div>
      
      </div>
    </div>
    
  </nav>
  
</header>
