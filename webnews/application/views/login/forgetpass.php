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
                <h1><span>Forget Password</span></h1>
              </div>
             <form id="contact-form" method="post" action="<?php echo site_url()?>/Loginc/checkemail">
                <div class="row">
                  <div class="col-md-4">
                    <label for="mail" style="color:red;">E-mail*</label>
                    <input type="email" id="mail" name="mail"  style="border-left:none;border-right:none;border-top:none;" placeholder="Enter Your Email">
                  </div>
                  
                 </div>
                <?php echo $forgetmail;?>
				<?php echo $forgetErr?>
                <br>
                <br>
                <input type="submit" name="submit" value="Next"id="submit-contact" style="padding:10px;" class="btn btn-raised btn-danger">
              </form>
            </div>
            <br>
           
            <a href="<?php echo site_url()?>/Loginc/">Back To Login</a>
            
          </div>
          <!-- End block content --> 
          
        </div>
        
    </div>
  </section>
