<!--/ CONTROLS Content -->
<!--  CONTENT  --><head>
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
<!--/ stylesheets -->
</head>


<section id="content">
  <div class="page page-tables-footable"> 
    <!-- bradcome -->
    <div class="b-b mb-10">
      <div class="row">
        <div class="col-sm-6 col-xs-12">
          <h1 class="h3 m-0">Breaking News</h1>
          </div>
      </div>
    </div>
    
    <!-- row -->
    <div class="row">
      <div class="col-md-12">
        <section class="boxs ">
          
          <div class="boxs-body">
            <div class="form-group">
             
                <a href="<?php echo site_url() ?>/Breakingc/insert" class="btn btn-raised btn-info"><i class="glyphicon glyphicon-plus"></i>Add Breaking News</a>
            </div>
             <div class="form-group">
              <label for="filter" style="padding-top: 5px">Search:</label>
           <input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
            </div>
            <form method="post" action="<?php echo site_url()?>/Breakingc/muldel">
              <table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
                <thead>
                  <tr>
                  	<th></th>
                    <th>Bid </th>
                   
                    <th data-hide="phone">Description</th>
					<th data-hide="phone">Date</th>
                    <th data-hide='phone, tablet'>Status</th>
                    <th data-hide='phone, tablet'>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
					foreach($breakingdata as $row)
					{
					?>
                  <tr>
                    <td><div class="checkbox"><label>
		           <input type="checkbox" name="chk[]"  value="<?php echo $row->bid;?>"> </label>
                                        </div></td>
                    <td><?php echo $row->bid ?></td>
                    <td><?php echo $row->description ?></td>
					<td><?php echo $row->datereg;?>
                    </td>
                    <td>
                    <a href="<?php echo site_url()?>/Breakingc/status/<?php echo $row->bid ?>" class="<?php if($row->bstatus=="Active"){?> btn btn-raised btn-success btn-sm" <?php }else {?>btn btn-raised btn-primary btn-sm<?php }?> style='text-decoration:none'">
					<?php echo $row->bstatus ?></a></td>
					
                    <td><a href="<?php echo site_url()?>/Breakingc/deleteda/<?php echo $row->bid ?>"<i class="glyphicon glyphicon-trash" style='color:#F00;'></i></a> | <a href="<?php echo site_url()?>/Breakingc/edit/<?php echo $row->bid ?>"<i class="fa fa-edit"></i></a></td>
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
<script src="<?php echo base_url()?>assets/bundles/libscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/vendorscripts.bundle.js"></script> 
<script src="<?php echo base_url()?>assets/js/vendor/footable/footable.all.min.js"></script> 
<script src="<?php echo base_url()?>assets/bundles/mainscripts.bundle.js"></script> 
<script >
		$(window).load(function () {
			$('.footable').footable();
		});
	</script>
</body>
</html>