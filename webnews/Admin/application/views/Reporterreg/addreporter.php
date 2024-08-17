<script>
 function vaild()
 {  
    var name=document.getElementById("rname").value;
	var email=document.getElementById("remail").value;
	var rpass=document.getElementById("rpass").value;
	var rmno=document.getElementById("rmno").value;
    
	atpos = email.indexOf("@");
	dotpos = email.lastIndexOf(".");
	
	if(name=="")
	{

			$("#nameErr").html("Please Enter Your Name !!!");
			document.reg.name.focus();
			return false;
	}	
	else if(atpos < 1 || ( dotpos - atpos < 2 ))
	{
			$("#nameErr").html("");
			$("#emailErr").html("Please Enter Valid Email !!!");
			document.reg.email.focus();
			return false;
	}	
	else if(rpass=="") 
	{
			$("#nameErr").html("");$("#emailErr").html("");
			$("#passErr").html("Please Enter Password !!!");
			document.reg.pass.focus();
			return false;
	}
	else if((rpass.length< 5))
	{
			$("#nameErr").html("");$("#emailErr").html("");
			$("#passErr").html("Password is Too Short");
			document.reg.pass.focus();
			return false;
	}
	else if((rmno=="")|| (rmno.length!=10))
	{
			$("#nameErr").html("");$("#emailErr").html("");$("#passErr").html("");
			$("#contactErr").html("Please Enter Valid Contcat No !!!");
			document.reg.mno.focus();
			return false;
	}
	else 
	{
         	document.getElementById('reporter').action="<?php echo site_url() ?>/Reporterc/insert";

    }
}

</script>
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
            <h3 class="custom-font hb-blush"> <strong>Add</strong>Reporter</h3>
          </div>
          <div class="boxs-body">
            <form class="form-horizontal" name="reg" id="reporter" role="form" method="post"  enctype="multipart/form-data" >
              
              <div class="form-group">
                <label for="" class="col-sm-4 control-label">Rname</label>
               
                <div class="col-sm-4">
                   <input type="text" name="name" class="form-control" id="rname">
				   <p id="nameErr" style="color:red;">
                </div>
                
              </div>
              
              
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">Remail</label>
               
                <div class="col-sm-4">
                   <input type="email" name="email" class="form-control" id="remail">
				    <p id="emailErr" style="color:red;">
                </div>
                
              </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">Rpassword</label>
               
                <div class="col-sm-4">
                   <input type="password" name="paas" class="form-control" id="rpass">
				    <p id="passErr" style="color:red;">
                </div>
                
              </div>
               <div class="form-group">
                <label for="" class="col-sm-4 control-label">Rmno</label>
               
                <div class="col-sm-4">
                   <input type="text" name="mno" class="form-control" id="rmno">
				    <p id="contactErr" style="color:red;">
                </div>
                
              </div>
              
              <div class="form-group">
                <label class="col-sm-4 control-label">Upload File</label>
                <div class="col-sm-4">
                  <input type="file"  name="img" class="filestyle" data-buttonText="Upload Pic" data-iconName="fa fa-inbox" onchange="validImage(this.value)"><?php echo $imgerr?>
                </div><p id="error" style="color:red">Image Not Valid</p>
                </div>
             
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                  <button type="reset" class="btn btn-raised btn-default">Cancel</button>
                  <input type="submit" class="btn btn-raised btn-danger" value="Add" onclick="return vaild()">
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
<script src="<?php echo base_url() ?>assets/js/vendor/sparkline/jquery.sparkline.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/animsition/js/jquery.animsition.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/screenfull/screenfull.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/slider/bootstrap-slider.min.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/chosen/chosen.jquery.min.js"></script> 
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