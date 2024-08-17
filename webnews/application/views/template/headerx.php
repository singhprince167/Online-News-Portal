<!doctype html>
<html lang="en" class="no-js">
<head>
<title>Today India</title>
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
              <li> <span class="city-weather">Surat,Gujarat</span> 
               <!--<span class="cel-temperature">+35</span> --></li>
              <li><span class="time-now">
                <?php 
									date_default_timezone_set("Asia/Kolkata");
									echo $date=Date('d-m-Y')?>
                </span> </li>
              <?php
									if($this->session->userdata('email')=="")
									{
									?>
              <li><a href="<?php echo site_url()?>/Loginc/">Log In</a></li>
              <?php } else {?>
              <li><a href="<?php echo site_url()?>/Loginc/logout">Logout</a></li>
              <?php }?>
              <li><a href="<?php echo site_url()?>/Contactc/">Contact</a></li>
              <li><?php echo $this->session->userdata('email');?></li>
            </ul>
          </div>
          <div class="col-md-3">
            <ul class="social-icons">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
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
          <a class="navbar-brand" href="<?php echo site_url()?>/Newsc"><img src="<?php echo base_url()?>images/logo.png" alt=""></a> </div>
        <div class="advertisement">
          <div class="desktop-advert"> <span>Advertisement</span> <img src="<?php echo base_url()?>upload/addsense/728x90.jpg" alt=""> </div>
          <div class="tablet-advert"> <span>Advertisement</span> <img src="<?php echo base_url()?>upload/addsense/468x60.jpg" alt=""> </div>
        </div>
      </div>
    </div>
    <!-- End Logo & advertisement --> 
    
    <!-- navbar list container -->
    <div class="nav-list-container">
      <div class="container">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <?php  foreach($category as $categoryData) {?>
            <li> <a class="world" href="<?php echo site_url() ?>/menudatC/allMenu/<?php  echo $categoryData->cid ?>"><?php echo $categoryData->catgname ?></a>
              <div class="megadropdown">
                <div class="container">
                  <div class="inner-megadropdown world-dropdown">
                    <div class="owl-wrapper">
                      <h1>kqbqd</h1>
                      <div class="owl-carousel" data-num="4">
                        <?php foreach($menuRelated as $lifes) {
						if($lifes->cid==$categoryData->cid){	
						?>
                        <div class="item news-post standard-post" style="float:right;">
                          <div class="post-gallery"> <img src="<?php echo base_url()?>news/images/post/<?php echo $lifes->image ?>" height="200" width="270" alt=""> </div>
                          <div class="post-content">
                            <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $lifes->rid?>/<?php echo $lifes->cid?>" style="text-decoration:none"><?php echo $lifes->title ?>. </a></h2>
                            <ul class="post-tags">
                              <li><i class="fa fa-clock-o"></i><?php echo $lifes->postdatereg ?></li>
                              <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                            </ul>
                          </div>
                        </div>
                        <?php }
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
          <form class="navbar-form navbar-right" role="search" method="post" action="<?php echo site_url()?>/Newsc/search">
            <input type="text" id="search" name="search" placeholder="Search here">
            <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
          </form>
        </div>
        <!-- /.navbar-collapse --> 
      </div>
    </div>
    <!-- End navbar list container --> 
    
  </nav>
  <!-- End Bootstrap navbar --> 
  
</header>
<!-- End Header -->