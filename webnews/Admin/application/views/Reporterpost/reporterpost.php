<head>
<link rel="stylesheet"href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">

</head>
<section id="content">
	<div class="page page-tables-footable">
		<div class="b-b mb-10">
			<div class="row">
				<div class="col-sm-6 col-xs-12">
					<h1 class="h3 m-0">Reporter Post</h1>
					
                            
				</div>
			</div>
		</div>
        <!-- row -->
		<div class="row">
			<div class="col-md-12">
				<section class="boxs ">
				
			<div class="boxs-body">
			 <div class="form-group">
           
   <form method="post" action="<?php echo site_url()?>/Reporterpostc/muldel/">
			
                <label for="filter" style="padding-top: 5px">Search:</label>
									<input id="filter" type="text" class="form-control rounded w-md mb-10 inline-block" />
								</div>
								<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th></th>
                                            <th>Rid</th>
                                            <th>Rname</th>
                                            <th>Rcategory</th>
                                            <th>Rcity</th>
                                            <th>Rimage</th>
											<th data-hide="phone">Title</th>
                                            <th data-hide="phone">Description</th>
											<th data-hide='phone, tablet'>Date</th>
											<th data-hide='phone, tablet'>Status</th>
                                            <th data-hide='phone, tablet'>Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                                    <?php
									foreach($getreport as $row)
									{?>
                                    <tr>
                                        <td><div class="checkbox"><label>
		           <input type="checkbox" name="chk[]"  value="<?php echo $row->rid;?>"> </label>
                                        </div></td>
                                    <td><?php echo $row->rid;?></td>                                    <td><?php echo $row->rname;?></td>
                                    <td><?php echo $row->catgname;?></td>
                                    <td><?php echo $row->cname;?></td>
                                    <td><img src="<?php echo base_url()?>images/post/<?php echo $row->image ;?>" height='70' width='80' /></td>
                                    
                                    <td><?php echo $row->title;?></td>
                                    <td><?php echo substr($row->description,0,80);?></td>
                                    <td><?php echo $row->datereg;?></td>
                                    <td> <a href="<?php echo site_url()?>/Reporterpostc/status/<?php echo $row->rid ?>" class="<?php if($row->rpstatus=="Active"){?>btn btn-raised btn-success btn-sm"<?php }else {?>  btn btn-raised btn-primary btn-sm <?php }?>style="text-decoration:none;">
	
									<?php echo $row->rpstatus;?></a> </td>
       <td><a href="<?php echo site_url()?>/Reporterpostc/postdel/<?php echo $row->rid;?>"><i class="fa fa-trash-o"  style='color:#F00;'></i></a>|
           <a href="<?php echo site_url()?>/Reporterpostc/postedit/<?php echo $row->rid;?>"><i class="fa fa-edit"></i></a>
     </td><?php
									 }?>
                                     </tr>
                                    </tbody>
									<tfoot class="hide-if-no-paging">
										<tr>
											<td colspan="5" class="text-right">
												<ul class="pagination">
												</ul>
											</td>
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
	</div>
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