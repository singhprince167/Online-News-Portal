<head>
<link rel="stylesheet"href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">

</head>

<section id="content">
  <div class="page page-tables-footable"> 
    <!-- bradcome -->
    
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          <div class="boxs-header">
            <h3 class="custom-font hb-cyan"> <strong>Slider</strong></h3>
          </div>
          <div class="boxs-body">
            <div class="form-group">
             
                <a href="<?php echo site_url() ?>/Sliderc/sliderins" class="btn btn-raised btn-info"><i class="glyphicon glyphicon-plus"></i>Add slider</a>
            </div>
             <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
           <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
            <form method="post" action="<?php echo site_url()?>/Sliderc/muldel">
              <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                <thead>
                  <tr>
                  	<th></th>
                    <th>SliderId </th>
					 <th>CId </th>
					<th>Image</th>
					<th>Title</th>
					 <th>Description </th>
					  <th>Date </th>
                    <th data-hide='phone, tablet'>Status</th>
                    <th data-hide='phone, tablet'>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
					foreach($getslider as $row)
					{
					?>
                  <tr>
                    <td><div class="checkbox"><label>
		           <input type="checkbox" name="chk[]"  value="<?php echo $row->sliderid;?>"> </label>
                                        </div></td>
                    <td><?php echo $row->sliderid ?></td>
					<td><?php echo $row->cid ?></td>
					<td><img src="<?php echo base_url()?>images/<?php echo $row->slider_image ;?>" height='70' width='80' /></td>
                    <td><?php echo $row->slidertitle ?></td>
					 <td><?php echo substr($row->sliderdesc,0,30) ?></td>
					  <td><?php echo $row->sdatereg ?></td>
                    <td><a href="<?php echo site_url()?>/Sliderc/status/<?php echo $row->sliderid ?>" class="<?php if($row->sliderstatus=="Active"){?>btn btn-raised btn-success btn-sm"<?php }else {?> " btn btn-raised btn-primary btn-sm <?php }?> style="text-decoration:none"><?php echo $row->sliderstatus;?></a></td>
                   
                    <td>
					<a href="<?php echo site_url()?>/Sliderc/sliderdel/<?php echo $row->sliderid ?>" <i class="glyphicon glyphicon-trash" style='color:#F00;'"></i></a> | <a href="<?php echo site_url()?>/Sliderc/slideredit/<?php echo $row->sliderid ?>"<i class="fa fa-edit"></i></a></td>
                    <?php
					}
					?>
                </tbody>
                <tfoot class="hide-if-no-paging">
                  <tr>
                    <td colspan="5" class="text-right"><ul class="pagination">
                      </ul></td>
                  </tr>
                </tfoot>
              </table>
               <input type="submit" name="submit" value="muldel" class="btn btn-raised btn-primary"/>
            </form>
          </div>
        </section>
      </div>
    </div>
  </div>
</section>

<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url() ?>assets/js/vendor/footable/footable.all.min.js"></script> 
<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script> 
<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>
</html>