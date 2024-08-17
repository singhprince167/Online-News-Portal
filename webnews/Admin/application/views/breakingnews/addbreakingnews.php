<script>
function valid()
{
	 
	var desc=document.getElementById("bndesc").value;
	
	if(desc=="")
	{

			$("#descErr").html("Enter News description here!!!");
			document.f2.desc.focus();
			return false;
	}
	
	else
	{
	
	     document.getElementById('form2').action="<?php echo site_url()?>/Breakingc/insertalldata";
	}

}

</script>



<section id="content">
  <div class="page page-forms-validate"> 
    <!-- bradcome -->
    <div class="bg-light lter b-b wrapper-md mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Breaking news</h1>
          <small class="text-muted">Welcome to Online News</small> </div>
      </div>
    </div>
    <!-- row -->
   
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <section class="boxs"> 
          <!-- boxs header -->
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Add</strong>Breakingnews </h3>
          </div>
          
		  <div class="boxs-body">
            <p class="text-muted"></p>
              <form name="f2" method="post"  role="form" id="form2">
         
             
           	<div class="form-group">
			<div class="row">
                <label for="" class="col-sm-4 control-label">Description</label>
               
                <div class="col-sm-8">
                   <textarea name="desc" class="form-control" id="bndesc" rows="3" cols="3"></textarea>
				   <p id="descErr" style="color:red;"></p>
                </div>
                </div>
              </div>
			  
              <div class="form-group">
			  <div class="row">
                <div class="col-sm-8 col-sm-offset-4">
                  <button type="reset" class="btn btn-raised btn-default">Cancel</button>
                  <input  type="submit" class="btn btn-raised btn-danger" value="Add" onclick="return valid()">
                </div>
              </div>
          </div>
         
		 </section>
      </div>
    </div>
	
  </div>
</section>

<!--/ CONTENT -->
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/parsley/parsley.min.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> 
<script >
		$(window).load(function () {
			$('#form1').parsley().subscribe('parsley:field:validate', function () {
				if ($('#form1').parsley().isValid()) {
					$('#form1Submit').prop('disabled', false);
				} else {
					$('#form1Submit').prop('disabled', true);
				}
			});

			$('#form1Submit').on('click', function () {
				$('#form1').submit();
			});

			$('#form2Submit').on('click', function () {
				$('#form2').submit();
			});

			$('#form3Submit').on('click', function () {
				$('#form3').submit();
			});

			$('#form4Submit').on('click', function () {
				$('#form4').submit();
			});
		});
	</script> 
</body>
</html>