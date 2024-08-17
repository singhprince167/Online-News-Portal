
<footer>
			<div class="container">
				<div class="footer-widgets-part">
					<div class="row">
						<div class="col-md-4">
							<div class="widget text-widget">
								<h1>About</h1>
								<p>
                                Your source for the lifestyle news. This demo is crafted specifically to exhibit the use of the theme as a lifestyle site. Visit our main page for more
                                </p>
					<p>This site can Provide the latest news information in full format.</p>
							</div>
							<div class="widget social-widget">
								<h1>Stay Connected</h1>
								<ul class="social-icons">
									<li><a class="facebook" href="https://www.facebook.com/TodayIndia-2017948445114339/"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="https://twitter.com/Gangadhar_Take"><i class="fa fa-twitter"></i></a></li>
              <li><a class="google" href="https://plus.google.com/u/0/104919758728797268978"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="linkedin" href="www.linkedin.com/in/sagar-take-b8487a137"><i class="fa fa-linkedin"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="col-md-4">
							<div class="widget categories-widget">
								<h1>Favorite Categories</h1>
								<ul class="category-list">
									 <?php  foreach($category as $categoryData) {
	
				?>
									<li>
										<a class="sport" href="<?php echo site_url() ?>/menudatC/allMenu/<?php  echo $categoryData->cid ?>"><?php echo $categoryData->catgname ?></a>
									</li><?php }?>
												</ul>
												
							</div>
						</div>
						<div class="col-md-4">
								<div class="widget subscribe-widget">
								<form class="subscribe-form" method="post" action="<?php echo site_url()?>/Subscriberc/sub">
									<h1>Subscribe to our Newsletter</h1>
									<input type="text" name="email" id="subscribe" placeholder="Please Enter Your Email Address" required>
									<button id="submit-subscribe">
										<i class="fa fa-arrow-circle-right"></i>
										
									</button>
									
									<?php
									error_reporting(1);
									 echo "<p style='color:white;'>".$error."</p>";?><br />
									<p>Get all latest content delivered to your email a few times a month.</p>
								</form>
							</div>
						</div>
						
					</div>
				</div>
				<div class="footer-last-line">
					<div class="row">
						<div class="col-md-6">
							<p> Copyright &copy;2018TODAYINDIA.in. All rights reserved.</p>
						</div>
						
					</div>
				</div>
			</div>
		</footer>
		<!-- End footer -->

	</div>
	<!-- End Container -->

	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.migrate.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.bxslider.min.js">        </script>
    <script type="text/javascript" src="<?php echo base_url()?>js/jquery.magnific-popup.min.js">    </script>
	<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.ticker.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.imagesloaded.min.js">    </script>
  	<script type="text/javascript" src="<?php echo base_url()?>js/jquery.isotope.min.js">
    </script>
	<script type="text/javascript" src="<?php echo base_url()?>js/owl.carousel.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/retina-1.1.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/plugins-scroll.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>js/script.js"></script>
	<link rel="stylesheet" href="<?php echo base_url()?>css/easy-autocomplete.min.css">

<script src="<?php echo base_url() ?>js/jquery.easy-autocomplete.min.js"></script>
<script>
$(document).ready(function(){
var options = {
  url: "<?php echo site_url() ?>/Newsc/jasonres",
  getValue:"sname",
  list: {
    match: {
      enabled: true
    }
  },
    template: {
    type: "custom",
    method: function(value,item) {
		if(value.length>20)
		{
			value=value.substr(0,45);
		}
    
	 return "<b><span style='width:40px;height:40px;'>"+" <span >"+value+"</span></span></b>";
	/* return "<b><img src=<?php// echo base_url(); ?>Admin/images/"+item.stdname+" style='width:40px;height:40px;' />"+" <span style='margin-top:-10px;margin-left:0px'>"+value+"</span></b>";
   */
   /*
	     return "<b>"+value+"</b>";
   */
    }
  },
  theme: "square"
};
$("#countries").easyAutocomplete(options);
});
</script>


</body>
</html>