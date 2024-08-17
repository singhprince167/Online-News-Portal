<head>
<script src="<?php echo base_url()?>/assets/js/vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
function Category(id)
{
	$.ajax({
			url:"<?php echo site_url() ?>/Reportpostc/editsubcategory/"+id,
			
			success:function(data)
			{
		
				$("#sub").html(data);	
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
          <h1 class="h3 m-0">Common Elements</h1>
          <small class="text-muted">Welcome to Falcon application</small> </div>
      </div>
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
       <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Form</strong> Elements</h3>
          </div>
          <div class="boxs-body">
           <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Reportpostc/postupdate/<?php echo $edit->rid; ?>" enctype="multipart/form-data">
              
 <?php 
 
 ?>
                 
                 <div class="form-group">
               <div class="col-sm-12">
                  <label for="" class="col-sm-4 control-label">category</label>
                  
                  <select name="category" onchange="Category(this.value)" class="form-control" style="width: 30%;">
                   
                <?php foreach($category as $data){ ?>
                	<option value="<?php echo $data->cid ?>"
                    <?php echo ($data->cid==$edit->cid)?"selected='selected'":null; ?>>
<?php echo $data->catgname ?>
                    </option>
                <?php } ?>
                </select>
                </div>
                </div>
                <div class="form-group">
               <div class="col-sm-12">
                  <label for="" class="col-sm-4 control-label">subcategory</label>
                  
                  <select name="subcategory" id="sub" class="form-control" style="width: 30%;">
                   
                <?php foreach($subcategory as $data){ ?>
                	<option value="<?php echo $data->sid ?>"
                    <?php echo ($data->sid==$edit->sid)?"selected='selected'":null; ?>>
<?php echo $data->sname ?>
                    </option>
                <?php } ?>
                </select>
                </div>
                </div>
                <div class="form-group">
                <div class="col-sm-12">
                <label for="" class="col-sm-4 control-label">City</label>
                <select name="city" id="sub" class="form-control" style="width: 30%;" >
                   
                <?php foreach($getcity as $data){ ?>
                	<option value="<?php echo $data->cityid ?>"
                    <?php echo ($data->cityid==$edit->cityid)?"selected='selected'":null; ?>>
                    <?php echo $data->cname ?>
                    </option>
                <?php } ?>
                </select>
                </div>
                </div>
              
                 <div class="form-group">
                <label class="col-sm-4 control-label">Upload File</label>
                <div class="col-sm-4">
                   <img src='<?php echo base_url()?>images/post/<?php echo $edit->image ;?>' height='70' width='80' />
                  <input type="file"  name="img" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validimg(this.value)">
				   
				
                </div><p id="error" style="color:red">Image Not Valid</p>
              </div>
                  <div class="form-group">
                <label for="" class="col-sm-4 control-label">Title</label>
               
                <div class="col-sm-4">
                   <input type="text" name="title" class="form-control"  value="<?php echo $edit->title;?>" >
                </div>
                
              </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">Description</label>
               
                <div class="col-sm-4">
                  <textarea name="desc"  class="form-control"  rows="10" cols="15"><?php echo $edit->description; ?>
                  </textarea>
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
<script>
window.onload=ImageError;
function ImageError()
{	
	//Image Error
	$("#error").hide();	
}
function validimg(img)
{	
	var ext=img.split(".");
	if((ext[1]=="jpg" )||(ext[1]=="jpeg" )||(ext[1]=="gif" )||(ext[1]=="png" ))
	{
			$("#error").hide();$("#submit").attr('disabled',false);
	}
	else
	{	
			$("#error").show(); $("#submit").attr('disabled',true);	
	}
}
</script>
<!--/ Page Specific Scripts -->
</body></html>