<section id="content">
  <div class="page page-forms-common"> 
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-green"> <strong>Edit</strong>state</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Statec/stateupdate/<?php echo $edit->stateid; ?>">
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Country</label>
                <div class="col-sm-8">
               <select name="country"  class="form-control" style="width: 50%;">
                s  
                <?php foreach($country as $data){ ?>
                	<option value="<?php echo $data->countryid ?>"
                    <?php echo ($data->countryid==$edit->countryid)?"selected='selected'":null; ?>>
<?php echo $data->countryname ?>
                    </option>
                <?php } ?>
                </select>
                  
                </div>
              </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">State</label>
                <div class="col-sm-4">
           <input type="text" name="sname"  class="form-control"  placeholder="Update state" value="<?php echo $edit->sname;?>" required>
                  
                </div>
                
              </div>
             
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
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