
<!--  CONTENT  -->
<section id="content">
  <div class="page page-forms-common"> 
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        
    </div>
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
       <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Edit</strong> Todaynews</h3>
          </div>
          <div class="boxs-body">
           <form class="form-horizontal" role="form" method="post" action="<?php echo site_url()?>/Todaynewsc/newsupdate/<?php echo $edit->tid; ?>" enctype="multipart/form-data">
              
             <div class="form-group">
                <label for="" class="col-sm-4 control-label">category</label>
                <div class="col-sm-8">
               <select name="category"  class="form-control"  style="width: 50%;" required >
                   
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
                <label class="col-sm-4 control-label">Upload</label>
                <div class="col-sm-4">
                 <img src='<?php echo base_url()?>./images/<?php echo $edit->timage ;?>' height='70' width='80' /><input type="file"  name="img" class="filestyle" data-buttonText="Find file" data-iconName="fa fa-inbox" onchange="validImage(this.value)">
                </div>
                
                 <p id="error" style="color:red">Image Not Valid</p>
              </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">Title</label>
               
                <div class="col-sm-4">
             <input type="text" name="title" class="form-control" style="width: 90%;" value="<?php echo $edit->title; ?>" >
                </div>
                
              </div>
			   <div class="form-group">
                <label for="" class="col-sm-4 control-label">Description</label>
               
                <div class="col-sm-4">
             <textarea  name="desc" class="form-control" rows="5" cols="5">
			 <?php echo $edit->tdesc; ?></textarea>
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
</div>
<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script> 
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
function validImage(img)
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