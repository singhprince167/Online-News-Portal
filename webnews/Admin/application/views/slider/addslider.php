<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common"> 
    <!-- bradcome -->
    <div class="row">
      <div class="col-md-12">
       <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Add</strong> Slider</h3>
          </div>
          <div class="boxs-body">
             <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Sliderc/insert" enctype="multipart/form-data">
              
                
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">category</label>
               
                <div class="col-sm-8">
                   
                   <select name="category"  class="form-control" style="width: 50%;">
                   <option>--Select Any category--</option>
                <?php foreach($category as $data){ ?>
                	<option value="<?php echo $data->cid ?>"><?php  echo $data->catgname ?></option>
                <?php } ?>
                </select>
                </div>
              <br />
			  <div class="form-group">
                <label class="col-sm-4 control-label">Upload File</label>
                <div class="col-sm-4">
                  <input type="file"  name="img" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox"><?php echo $imgerr?>
                </div>
                               

              </div>
			     
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">Title</label>
               
                <div class="col-sm-4">
                   <input type="text" name="title" class="form-control">
                </div>
                
              </div>
			    <div class="form-group">
                <label for="" class="col-sm-4 control-label">Description</label>
               
                <div class="col-sm-4">
                   <textarea  name="desc" class="form-control" rows="5" cols="5"></textarea>
                </div>
                
              </div>
               
             
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                  <button type="reset" class="btn btn-raised btn-danger">Cancel</button>
                  <button type="submit" class="btn btn-raised btn-default">Save changes</button>
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
<script src="<?php echo base_url() ?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/screenfull/screenfull.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/slider/bootstrap-slider.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/colorpicker/js/bootstrap-colorpicker.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/touchspin/jquery.bootstrap-touchspin.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/daterangepicker/moment.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/datetimepicker/js/bootstrap-datetimepicker.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/chosen/chosen.jquery.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script> 

<!--/ vendor javascripts --> 

<!--  Custom JavaScripts --> 
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