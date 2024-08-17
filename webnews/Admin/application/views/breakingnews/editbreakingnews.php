<section id="content">
  <div class="page page-forms-common"> 
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-green"> <strong>Edit</strong>Todaynews</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Breakingc/update/<?php echo $edit->bid; ?>">
             
               
              
                
				 <div class="form-group">
                <label for="" class="col-sm-4 control-label">Description</label>
               
                <div class="col-sm-6">
                   <textarea  name="desc" class="form-control" cols="5" rows="5" id="descrpt" required> 
				   <?php echo $edit->description?>
  					</textarea>             
                </div>
                
              </div>
              
              <div class="form-group">
                <div class="col-sm-offset-5 col-sm-10">
           <input type="submit"  name="submit" value="Update" class="btn btn-raised btn-primary">
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
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script><script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script> 
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
</body>