<script>

function valid()
{

	
	var name=document.getElementById("country").value;

	if(name=="")
	{

			$("#nameErr").html("Enter country Name !!!");
			document.form1.cname.focus();
			return false;
	}	
	else
	{
	
	document.getElementById('f1').action="<?php echo site_url() ?>/Countryc/countryinsert/";
	}
}


</script>


<section id="content">
  <div class="page page-forms-common"> 
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-green"> <strong>Add</strong>Category</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" name="form1" id="f1" role="form" method="post">
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Country</label>
                <div class="col-sm-4">
                  <input type="text" name="cname"  class="form-control" 
                  placeholder="Add country name" value="" id="country">
                  <p id="nameErr" style="color:red;"></p>
                </div>
                
              </div>
             
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
           <input type="submit"  name="submit" value="Add" class="btn btn-raised btn-primary" onclick="return valid()">
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
        });
    </script> 
</body>