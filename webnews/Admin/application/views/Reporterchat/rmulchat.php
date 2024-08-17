<section id="content">
  <div class="page page-forms-common"> 
    <!-- bradcome -->
    <div class="b-b mb-10">
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
       <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush">Chatting</h3>
          </div>
          <div class="boxs-body">
           <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Reporterchatc/update/<?php echo $edit->chatid?>">
              
				 <div class="form-group">
                <label for="" class="col-sm-4 control-label">Adminmsg</label>
               
                <div class="col-sm-8">
                     <textarea name="msg" rows="5" cols="5" class="form-control"><?php echo $edit->adminmsg?></textarea> 
                </div>
               </div>
            <!-- Image Preview Code -->
              
			   <div class="form-group">
                <label for="" class="col-sm-4 control-label">Message</label>
               
                <div class="col-sm-4">
          <textarea name="rmsg" rows="5" cols="5" class="form-control"><?php echo $edit->reportermsg?></textarea>
                </div>
                
              </div>
              <!--  End -->
             
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                  <button type="reset" class="btn btn-raised btn-default">Cancel</button>
                  <button type="submit" class="btn btn-raised btn-danger">Save changes</button>
                </div>
              </div>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>
<!--/ CONTENT -->
</div>
<!--/ Application Content --> 
<!--Vendor JavaScripts  --> 
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> 
<script >
        $(window).load(function(){
            $('#ex1').slider({
                formatter: function(value) {
                    return 'Current value: ' + value;
                }
            });
            $("#ex1").on("slide", function(slideEvt) {
                $("#ex1SliderVal").text(slideEvt.value);
            });

            $("#ex2, #ex3, #ex4, #ex5").slider();
          
            //*load wysiwyg editor
        });
    </script> 
<!--/ Page Specific Scripts -->
</body></html>