<script>
window.onload=hidelike;
function hidelike()
{
$("#likeform").hide();
$("#dislikeform").hide();
$("#pa").hide();
$("#hr1").hide();
$("#hr2").hide();
}
function readmore()
{
$("#getmoredata").show();
$("#likeform").show();
$("#dislikeform").show();
$("#pa").show();
$("#hr1").show();
$("#hr2").show();
$("#showlessdata").hide();
$("#loadmorebtn").hide();

}

</script>



<section class="block-wrapper">
<div class="container">
<div class="row">
  <div class="col-sm-8">
    <!-- block content -->
    <div class="block-content">
      <!-- single-post box -->
      <div class="single-post-box">
        <div class="title-post">
          <h1><?php echo $singleData->slidertitle ?>. </h1>
          <ul class="post-tags">
            <li><i class="fa fa-clock-o"></i><?php echo $singleData->sdatereg ?></li>
            
            <li><a href="#"><i class="fa fa-comments-o"></i><span><?php echo count($comment);?></span></a></li>
            <li><i class="fa fa-eye"></i>872</li>
          </ul>
        </div>
        <div class="share-post-box">
          <ul class="share-box">
            <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
            <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
            <li><a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
            <li><a class="google" href="https://www.google.com"><i class="fa fa-google-plus"></i><span></span></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com"><i class="fa fa-linkedin"></i><span></span></a></li>
          </ul>
        </div>
        <div class="post-gallery"> <img src="<?php echo base_url() ?>Admin/images/<?php echo $singleData->slider_image ?>" height="350" width="600" alt=""> <span class="image-caption"><?php echo $singleData->slidertitle ?></span> </div>
        <div class="post-content" id="showlessdata">
          <?php 
                                  $string = $singleData->sliderdesc;
                                 echo $token = strtok($string,"*");
								?>
        </div>
       <div class="post-content" id="getmoredata" style="display:none">
          <?php 
                                  $string = $singleData->sliderdesc;
                                 echo $token = strtok($string,"*");
									echo str_word_count($token);
									while ($token !== false)
  									 {
 									    echo "$token.<br><br>";
  									    $token = strtok("*");
									 }
								
								?>
        </div>

        <div class="center-button" id="loadmorebtn">
		 
		 <input type="submit"  id="submit-contact" onclick="readmore()" class="btn btn-raised btn-danger" style="text-decoration:none;cursor:pointer;" value="Read More"> 
		
		 </div>
		 <hr  id="hr1"> 
		 <p id="pa" style="text-align:center">
		
		 Do You Like This Story? 
		 &nbsp;&nbsp;&nbsp;
		 <?php  if($this->session->userdata('useremail')!=""){?>
		 <a href="<?php echo site_url()?>/Slidersinglepostc/like/<?php echo $singleData->cid?>" style="text-decoration:none" name="like"  onclick="hidelike()"><i class="fa fa-thumbs-o-up " ></i>
		 </a> <?php echo $like ; ?>	&nbsp;&nbsp;&nbsp;
		 <a href="<?php echo site_url()?>/Slidersinglepostc/dislike/<?php echo $singleData->cid?>" name="dislike"  onclick="hidelike()"><i class="fa fa-thumbs-o-down"></i>
		 </a>
		 <?php  echo  $dislike; ?>	
		 <?php }else{?>
		 
		  <a href="<?php echo site_url()?>/Loginc/" style="text-decoration:none" name="like"  onclick="hidelike()"><i class="fa fa-thumbs-o-up" ></i>
		 </a> <?php  // echo   count($countLike); ?>	&nbsp;&nbsp;&nbsp;
		 <a href="<?php echo site_url()?>/Loginc/" name="dislike"  onclick="hidelike()"><i class="fa fa-thumbs-o-down"></i>
		 </a> 
		 <?php }?>
		<hr  id="hr2">
		 
		 </p>
		  
        <br />
        <br />
        <div class="carousel-box owl-wrapper">
          <div class="title-section">
            <h1><span>Related about</span></h1>
          </div>
          <div class="owl-carousel" data-num="3">
            <?php foreach($relatedData as $gall){ ?>
            <div class="item news-post image-post3"> 
			<a href="<?php echo site_url()?>/singlepostc/single/<?php echo $gall->rid?>/<?php echo $gall->cid?>" style="text-decoration:none"> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $gall->image?>" height="180"alt="">
              <div class="hover-box">
                <h2>
                  <?php  echo $gall->title?>
                  .</a></h2>
                <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>
                    <?php  echo $gall->postdatereg?>
                  </li>
                </ul>
              </div>
              </a> </div>
            <?php }?>
          </div>
        </div>
        <div class="share-post-box">
          <ul class="share-box">
            <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
            <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
            <li><a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
            <li><a class="google" href="https://www.google.com"><i class="fa fa-google-plus"></i><span></span></a></li>
            <li><a class="linkedin" href="https://www.linkedin.com"><i class="fa fa-linkedin"></i><span></span></a></li>
          </ul>
        </div>
        <br />
        
        <!-- contact form box -->
        <div class="contact-form-box">
          <div class="title-section">
            <h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
          </div>
          <form id="comment-form" name="feedbackform" method="post" >
		 <!--  action="<?php //echo site_url()?>/Feedbackc/insert/<?php //echo $singleData->rid?>/<?php //echo $singleData->cid ?>"-->
            <div class="row">
              <input type="hidden" name="rid" />
			  <div class="col-md-4">
                
				
				<label for="name">Name*</label>
				
                <input  name="name" type="text" id="uname">
				<p id="nameErr" style="color:red"></p>
              </div>
              <div class="col-md-4">
                <label for="mail">E-mail*</label>
                <input  name="email" type="text" id="uemail">
				<p id="emailErr" style="color:red"></p>
              </div>
              <div class="col-md-4">
                <label for="website">Contact No</label>
                <input  name="contact" type="text" id="umno">
				<p id="contactErr" style="color:red"></p>
				
              </div>
            </div>
            <label for="comment">Comment*</label>
            <textarea  name="comment" id="ucmt"></textarea>
			<p id="commentErr" style="color:red"></p>
           
		    <input type="submit" id="submit-contact" onclick="return val()" class="btn btn-raised btn-danger" value="Post Comment">
          </form>
        </div>
        <!-- End contact form box -->
      </div>
      <!-- End single-post box -->
    </div>
    <!-- End block content -->
  </div>
  <div class="col-sm-4">
    <!-- sidebar -->
    <div class="sidebar">
      <div class="widget tab-posts-widget">
        <ul class="nav nav-tabs" id="myTab">
          <li class="active"> <a href="#option1" data-toggle="tab">Recent</a> </li>
          <li> <a href="#option2" data-toggle="tab">Weekly</a> </li>
          <li> <a href="#option3" data-toggle="tab">Monthly</a> </li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="option1">
            <ul class="list-posts">
              <?php foreach($Recent as $recent) {?>
              <li> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $recent->image ?>" alt="">
                <div class="post-content">
                  <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $recent->rid?>/<?php echo $recent->cid?>" style="text-decoration:none;" ><?php echo $recent->title ?> </a></h2>
                  <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i><?php echo $recent->postdatereg ?></li>
                  </ul>
                </div>
              </li>
              <?php }?>
            </ul>
          </div>
          <div class="tab-pane" id="option2">
            <ul class="list-posts">
              <?php foreach($Weekly as $week) {?>
              <li> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $week->image ?>" alt="">
                <div class="post-content">
                  <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $week->rid?>/<?php echo $week->cid?>" style="text-decoration:none;" ><?php echo $week->title ?> </a></h2>
                  <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i><?php echo $week->postdatereg ?></li>
                  </ul>
                </div>
              </li>
              <?php }?>
            </ul>
          </div>
          <div class="tab-pane" id="option3">
            <ul class="list-posts">
              <?php foreach($Monthly as $month) {?>
              <li> <img src="<?php echo base_url() ?>Admin/images/post/<?php echo $month->image ?>" alt="">
                <div class="post-content">
                  <h2><a href="<?php echo site_url()?>/singlepostc/single/<?php echo $month->rid?>/<?php echo $month->cid?>" style="text-decoration:none;" ><?php echo $month->title ?>. </a></h2>
                  <ul class="post-tags">
                    <li><i class="fa fa-clock-o"></i><?php echo $month->postdatereg ?></li>
                  </ul>
                </div>
              </li>
              <?php }?>
            </ul>
          </div>
        </div>
        
        <div class="widget tags-widget">
          <div class="title-section">
            <h1><span>Popular Tags</span></h1>
          </div>
        </div>
        <div class="advertisement">
          <div class="desktop-advert"> <span>Advertisement</span> <img src="<?php echo base_url() ?>upload/addsense/300x250.jpg" alt=""> </div>
          <div class="tablet-advert"> <span>Advertisement</span> <img src="<?php echo base_url() ?>upload/addsense/200x200.jpg" alt=""> </div>
          <div class="mobile-advert"> <span>Advertisement</span> <img src="<?php echo base_url() ?>upload/addsense/300x250.jpg" alt=""> </div>
        </div>
      </div>
      <!-- End sidebar -->
    </div>
  </div>
</div>
</section>
<script>
function val()
{
	//alert('hi');
	var name=document.getElementById("uname").value;
	var email=document.getElementById("uemail").value;
	var mno=document.getElementById("umno").value;
	var cmt=document.getElementById("ucmt").value;
    
	atpos = email.indexOf("@");
	dotpos = email.lastIndexOf(".");
	
	if(name=="")
	{

			$("#nameErr").html("Please Enter Your Name !!!");
			document.feedbackform.name.focus();
			return false;
	}	
	else if(atpos < 1 || ( dotpos - atpos < 2 ))
	{
			$("#nameErr").html("");
			$("#emailErr").html("Please Enter Valid Email !!!");
			document.feedbackform.email.focus();
			return false;
		}	
		else if((mno=="")|| (mno.length!=10))
		{
			$("#nameErr").html("");$("#emailErr").html("");
			$("#contactErr").html("Please Enter Valid Contcat No !!!");
			document.feedbackform.mno.focus();
			return false;
		}
		else if(cmt=="") 
		{
			$("#nameErr").html("");$("#emailErr").html("");$("#contactErr").html("");
			$("#commentErr").html("Please Enter Your Query Here !!!");
			document.feedbackform.cmt.focus();
			return false;
		}else if((cmt.length< 5))
		{
			$("#nameErr").html("");$("#emailErr").html("");$("#contactErr").html("");
			$("#commentErr").html("Too Short Question ???");
			document.feedbackform.cmt.focus();
			return false;
		}
		else 
		{
         	document.getElementById('comment-form').action="<?php echo site_url() ?>/Feedbackc/insert/<?php echo $singleData->rid?>/<?php echo $singleData->cid ?>";

		 }
}
</script>