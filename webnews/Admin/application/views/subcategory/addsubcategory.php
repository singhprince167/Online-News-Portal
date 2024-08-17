<script>
function val()
{
  
	var cname=document.getElementById("cname").value;
	var sname=document.getElementById("sub").value;
	
	if(cname=="")
	{

			$("#nameErr").html(" Select Any News Category  !!!");
			document.subcat.category.focus();
			return false;
	}
	else if(sname=="")
	{
		    $("#nameErr").html("");
			$("#snameErr").html(" Add News Subcategory  !!!");
			document.subcat.sname.focus();
			return false;
	  
	}	
	else
	{
	
	document.getElementById('subcategory').action="<?php echo site_url() ?>/Subcategoryc/subcatginsert/";
	}
}
</script>

<section id="content">
  <div class="page page-forms-common"> 
    <div class="row">
      <div class="col-md-12">
        <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-green"> <strong>Add</strong>Subcategory</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" name="subcat" id="subcategory" role="form" method="post">
              
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Category</label>
               
                <div class="col-sm-8">
                   
                   <select name="category"  id="cname" class="form-control" style="width: 50%;">
                   <option value="" id="nameErr">--Select Any--</option>
				  
                <?php foreach($category as $data){ ?>
                	 
					<option value="<?php echo $data->cid ?>"><?php echo $data->catgname ?></option>
                <?php } ?>
                </select>
                </div>
                
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Sub-category</label>
                <div class="col-sm-4">
				
           <input type="text" name="sname"  id="sub" class="form-control"  placeholder="Add subcategory" >
                  <p id="snameErr" style="color:red;"></p> 
                </div>
                
              </div>
             
              <div class="form-group">
                <div class="col-sm-offset-4 col-sm-10">
              <input type="submit"  name="submit" value="Add" class="btn btn-raised btn-primary" onclick="return val()">
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