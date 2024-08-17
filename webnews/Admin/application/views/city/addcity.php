
<script src="<?php echo base_url()?>/assets/js/vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
function Country(id)
{
	$.ajax({
			url:"<?php echo site_url() ?>/Cityc/state/"+id,
			
			success:function(data)
			{
		
				$("#state").html(data);	
			}	
	});
	
}
function valid()
{
  
	var country=document.getElementById("acountry").value;
	var state=document.getElementById("astate").value;
	var city=document.getElementById("acity").value;
	
	if(country=="")
	{

			$("#nameErr").html(" Select Any Country  !!!");
			document.f1.country.focus();
			return false;
	}
	else if(state=="")
	{
		    $("#nameErr").html("");
			$("#snameErr").html(" Select Any state !!!");
			document.f1.state.focus();
			return false;
	  
	}	
	else if(city=="")
	{
	        $("#nameErr").html("");$("#snameErr").html("");
			 $("#cityErr").html("Enter city name here!!!");
			document.f1.cname.focus();
			return false;
	}
	else
	{
	
	document.getElementById('form1').action="<?php echo site_url() ?>/Cityc/insert";
	}
}


</script>
</head>
<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common"> 
    <!-- bradcome -->
    <div class="b-b mb-10">
      <!-- row -->
    <div class="row">
      <div class="col-md-12">
       <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Add</strong> City</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" name="f1" id="form1" role="form" method="post">
              
                 <div class="form-group">
                
                  <div class="col-sm-8">
                  <label for="" class="col-sm-6 control-label">Country</label>
 <select name="country" id="acountry" class="form-control" onchange="Country(this.value)" style="width: 30%;" >
                   <option value="" id="nameErr">--Select Any Country--</option> 
                    <?php foreach($country as $data){ ?>
        <option value="<?php echo $data->countryid ?>"><?php echo $data->countryname ?></option>
                <?php } ?> 
                </select>
                </div>
                </div>
                 <div class="form-group">
                <div class="col-sm-8">
                <label for="" class="col-sm-6 control-label">State</label>
                <select name="state" id="astate" class="form-control" style="width: 30%;">
                   <option value="" id="snameErr">--Select Any state--</option> 
                <?php foreach($getstate as $data){ ?>
             <option value="<?php echo $data->stateid ?>"><?php echo $data->sname ?></option>
                <?php } ?>
                </select>
                </div>
                </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">City</label>
               
                <div class="col-sm-4">
                   <input type="text" name="cname" class="form-control" style="width: 60%;" placeholder="Add city" id="acity">
				   <p id="cityErr" style="color:red;"></p>
                </div>
                
              </div>
              
              <div class="form-group">
                <div class="col-sm-4 col-sm-offset-3">
                  <button type="reset" class="btn btn-raised btn-default">Cancel</button>
                  <input type="submit" class="btn btn-raised btn-danger" value="Add City" onclick="return valid()">
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
<script>
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
</body></html>