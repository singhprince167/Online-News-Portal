<head>
<script src="<?php echo base_url()?>/assets/js/vendor/jquery/jquery-3.3.1.min.js"></script>
<script>
function Categrory(id)
{
	$.ajax({
			url:"<?php echo site_url() ?>/Reportpostc/subcategory/"+id,
			
			success:function(data)
			{
		
				
				$("#sub").html(data);	
			}	
	});
	
}
function valid()
{

	var cat=document.getElementById("cat").value;
	var subcat=document.getElementById("sub").value;
	var scity=document.getElementById("scity").value;
	var stitle=document.getElementById("stitle").value;
	var sdesc=document.getElementById("sdesc").value;
	
	if(cat=="")
	{
	   $("#catErr").html("Select Any Category");
	   document.rpost.category.focus();
	   return false;
	}
	else if(subcat=="")
	{
	  
	   $("#catErr").html("");
	   $("#subcatErr").html("Select Any Subcategory");
	   document.rpost.subcategory.focus();
	   return false;
	
	}
	else if(scity="")
	{
	  
	      $("#catErr").html(""); $("#subcatErr").html("");
	      $("#cityErr").html("Select Any city");
	      document.rpost.city.focus();
	      return false;
	
	}
	else if(stitle="")
	{
	    $("#catErr").html("");$("#subcatErr").html(""); $("#cityErr").html("");
	    $("#titleErr").html("Enter the news title!!!");
	    document.rpost.title.focus();
	   return false;
	 
	}
	else if(sdesc=="")
	{
	
	   $("#catErr").html("");$("#subcatErr").html(""); $("#cityErr").html("");
	   $("#titleErr").html("");
	   $("#descErr").html("Enter the News description here!!");
	   document.rpost.desc.focus();
	   return false;
	}
    else
	{
	
		document.getElementById('reportpost').action="<?php echo site_url()?>/Reportpostc/insert";
	}

}


</script>


<!--  CONTENT  -->

<section id="content">
  

<div class="page page-forms-common"> 
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Data tables</h1>
          <small class="text-muted">Welcome to Today India</small> </div>
      </div>
    </div>
    <!-- row -->
    
    
    <div class="row">
      <div class="col-md-12">
       <section class="boxs">
          <div class="boxs-header">
            <h3 class="custom-font hb-blush"> <strong>Reporter</strong> Post</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" name="rpost" id="reportpost" role="form" method="post"  enctype="multipart/form-data">
              
              
               
                <div class="form-group">
                <label for="" class="col-sm-4 control-label">category</label>
               
                <div class="col-sm-4">
                     <select name="category" id="cat" class="form-control"  onchange="Categrory(this.value)" style="width:100%;">
                       <option id="catErr">--Select Any Category--</option>
                <?php foreach($category as $data){ ?>
                	<option value="<?php echo $data->cid ?>"><?php echo $data->catgname; ?></option>
                <?php } ?>
                </select>
                </div>
                </div>
                <div class="form-group">
                <label for="" class="col-sm-4 control-label">Subcategory</label>
               
                <div class="col-sm-4">
                     <select name="subcategory" id="sub" class="form-control" style="width:100%;">
                       <option id="subcatErr">--Select Any Subcategory--</option>
                <?php foreach($subcategory as $data){ ?>
                	<option value="<?php echo $data->sid ?>"><?php echo $data->sname; ?></option>
                <?php } ?>
                </select>
                </div>
                </div>
                <div class="form-group">
                <label for="" class="col-sm-4 control-label">city</label>
               
                <div class="col-sm-4">
                     <select name="city" class="form-control" id="scity" style="width:100%;">
                      <option id="cityErr">--Select Any City--</option>
                <?php foreach($getcity as $data){ ?>
                	<option value="<?php echo $data->cityid ?>"><?php echo $data->cname; ?></option>
                <?php } ?>
                </select>
                </div>
                </div>
                
              <div class="form-group">
                <label class="col-sm-4 control-label">Upload File</label>
                <div class="col-sm-4">
                  <input type="file"  name="img" class="filestyle" data-buttonText="Upload Pic" data-iconName="fa fa-inbox" onchange="validImage(this.value)">
                </div>
				 <p id="error" style="color:red">Image Not Valid</p>
				<?php echo $imgerr;?>
              
              </div>
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Title</label>
               
                <div class="col-sm-4">
                   <input type="text" name="title" class="form-control" id="stitle">
				   <p id="titleErr" style="color:red;"></p>
                </div>
                
              </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">Description</label>
               
                <div class="col-sm-4">
                   <textarea name="desc" cols="15" rows="10"class="form-control"  id="sdesc"></textarea>
                    <p id="descErr" style="color:red;"></p>
				</div>
                
              </div>
              
             
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                  <input type="reset" class="btn btn-raised btn-default" value="Cancel">
                  <input type="submit" class="btn btn-raised btn-danger" value="Add Post" onclick="return valid()" />
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
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>
<script src="<?php echo base_url() ?>assets/js/vendor/filestyle/bootstrap-filestyle.min.js"></script>  
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
</body></html>