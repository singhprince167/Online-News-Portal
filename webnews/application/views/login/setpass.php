  <section class="block-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-8"> 
          
          <!-- block content -->
          <div class="block-content"> 
            
            <!-- contact info box -->
            <div class="contact-info-box">
              <div class="title-section">
               
              </div>
            </div>
            <!-- End contact info box --> 
            
            <!-- contact form box -->
            <div class="contact-form-box">
              <div class="title-section">
                <h1><span>Update password</span></h1>
              </div>
             <form id="contact-form" method="post" action="<?php echo site_url()?>/Loginc/updatepass">
                <div class="row">
                  <div class="col-md-4">
                    <label for="mail" style="color:red;">Old Password</label>
                    <input type="password" id="opass" name="opass"  style="border-left:none;border-right:none;border-top:none;" placeholder="Enter Your Old password">
                  </div>
                  </div>
                   <div class="row">
                  <div class="col-md-4">
                    <label for="paasword" style="color:red;">New Paasword</label>
                    <input type="password" id="pass" name="pass" style="border-left:none;border-right:none;border-top:none;" placeholder="Enter Your paasword">
                  </div>
                </div>
                <div class="row">
                 <div class="col-md-4">
                    <label for="paasword" style="color:red;">confirm Paasword</label>
                    <input type="password" id="npass" name="npass" style="border-left:none;border-right:none;border-top:none;" placeholder="Enter Your confirm paasword">
                  </div>
                </div>
                
                <br>
                <br>
                <input type="submit" name="submit" value="Update Password"id="submit-contact" style="padding:10px;" class="btn btn-raised btn-danger">
              </form>
            </div>
            <br>
            <a href="<?php echo site_url()?>/Signupc/">Signup</a>&nbsp;
            <a href="<?php echo site_url()?>/Loginc/forgot">Forgot Password</a>
            
          </div>
          <!-- End block content --> 
          
        </div>
        <div class="col-sm-4"> 
          
          <!-- sidebar -->
          <div class="sidebar">
            <div class="widget social-widget">
              <div class="title-section">
                <h1><span>Stay Connected</span></h1>
              </div>
              <ul class="social-share">
                <li> <a href="#" class="rss"><i class="fa fa-rss"></i></a> <span class="number">9,455</span> <span>Subscribers</span> </li>
                <li> <a href="#" class="facebook"><i class="fa fa-facebook"></i></a> <span class="number">56,743</span> <span>Fans</span> </li>
                <li> <a href="#" class="twitter"><i class="fa fa-twitter"></i></a> <span class="number">43,501</span> <span>Followers</span> </li>
                <li> <a href="#" class="google"><i class="fa fa-google-plus"></i></a> <span class="number">35,003</span> <span>Followers</span> </li>
              </ul>
            </div>
            <div class="widget subscribe-widget">
              <form class="subscribe-form">
                <h1>Subscribe to RSS Feeds</h1>
                <input type="text" name="sumbscribe" id="subscribe" placeholder="Email"/>
                <button id="submit-subscribe"> <i class="fa fa-arrow-circle-right"></i> </button>
                <p>Get all latest content delivered to your email a few times a month.</p>
              </form>
            </div>
          
        </div>
      </div>
    </div>
  </section>
