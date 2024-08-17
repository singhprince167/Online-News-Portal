<script>
function valid()
{
  
	var cname=document.getElementById("cn").value;
	var sname=document.getElementById("sn").value;
	
	if(cname=="")
	{

			$("#nameErr").html(" Select Any News Country  !!!");
			document.f1.country.focus();
			return false;
	}
	else if(sname=="")
	{
		    $("#nameErr").html("");
			$("#snameErr").html(" Add state !!!");
			document.f1.sname.focus();
			return false;
	  
	}	
	else
	{
	
	document.getElementById('form1').action="<?php echo site_url() ?>/Statec/stateinsert/";
	}
}
</script>


<section id="content">
  <div class="page page-forms-common"> 
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-green"> <strong>Add</strong>State</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" name="f1" id="form1" role="form" method="post" action="<?php echo site_url()?>">
              
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Country</label>
               
                <div class="col-sm-8">
                   
                   <select name="country"  class="form-control" id="cn" style="width: 50%;">
                   <option value="" id="nameErr">--Select Any Country--</option> 
                <?php foreach($country as $data){ ?>
                	<option value="<?php echo $data->countryid ?>"><?php echo $data->countryname ?></option>
                <?php } ?>
                </select>
                </div>
                
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">State</label>
                <div class="col-sm-4">
           <input type="text" name="sname"  id="sn" class="form-control"  placeholder="Add state">
                  <p id="snameErr" style="color:red;"></p>
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