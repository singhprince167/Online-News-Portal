<head>
<script src="<?php echo base_url()?>/assets/js/vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
function Country(id)
{
	$.ajax({
			url:"<?php echo site_url() ?>/Cityc/editstate/"+id,
			
			success:function(data)
			{
		
				$("#state").html(data);	
			}	
	});
	
}
</script>
</head>

<!--  CONTENT  -->

<section id="content">
  <div class="page page-forms-common"> 
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Online News</h1>
          <small class="text-muted">Welcome to Online News</small> </div>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
       <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Edit</strong> City</h3>
          </div>
          <div class="boxs-body">
           <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Cityc/cityupdate/<?php echo $edit->cityid; ?>">
              
       
              <div class="form-group">
               <div class="col-sm-12">
                  
                  
                  <label for="" class="col-sm-4 control-label">Country</label>
                  
                  <select name="country" class="form-control" onchange="Country(this.value)" style="width: 30%;">
                  <option value="">--Select Any Country--</option> 
                   
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
                <div class="col-sm-12">
                <label for="" class="col-sm-4 control-label">State</label>
                <select name="state" id="state" class="form-control" style="width: 30%;" >
                   
                <?php foreach($getstate as $data){ ?>
                	<option value="<?php echo $data->stateid ?>"
                    <?php echo ($data->stateid==$edit->stateid)?"selected='selected'":null; ?>>
                    <?php echo $data->sname ?>
                    </option>
                <?php } ?>
                </select>
                </div>
                </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">City</label>
               
                <div class="col-sm-4">
             <input type="text" name="cname" class="form-control" style="width: 90%;" value="<?php echo $edit->cname; ?>" required>
                </div>
                
              </div>
               
              
             
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
</div>
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
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