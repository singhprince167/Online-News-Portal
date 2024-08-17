<head>
<link rel="stylesheet"href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/footable/css/footable.core.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">

</head>
<section id="content">
	<div class="page page-tables-footable">
		
        <!-- row -->
		<div class="row">
			<div class="col-md-12">
				<section class="boxs ">
				
			<div class="boxs-body">
            <form class="form-horizontal" name="today" id="news" role="form" method="post" action="<?php echo site_url()?>/Reporterchatc/insert">
              
                
				<div class="form-group">
                <label for="" class="col-sm-4 control-label">Admin</label>
               
                <div class="col-sm-8">
                   
                   <select name="admin"  id="rppost" class="form-control" style="width: 50%;">
                   <option>--Select Any--</option>
                <?php foreach($getadmin as $data){ ?>
                	<option value="<?php echo $data->Aid ?>"><?php  echo $data->Aname ?></option>
                <?php } ?>
                </select>
                </div>
                </div>
				<div class="form-group">
                <label for="" class="col-sm-4 control-label">Message</label>
               
                <div class="col-sm-4">
                  <textarea rows="10" cols="10" class="form-control" name="reporetrmsg" id="amsg"></textarea>
				  <p id="msgErr" style="color:#FF0000;"></p>
                </div>
                
              </div>
            <!-- Image Preview Code -->
                           <!--  End -->
             
              <div class="form-group">
                <div class="col-sm-8 col-sm-offset-4">
                  <button type="reset" class="btn btn-raised btn-default">Cancel</button>
                  <input type="submit" class="btn btn-raised btn-danger" value="Submit">
                </div>
              </div>
			  
            </form>
			<table id="searchTextResults" data-filter="#filter" data-page-size="5" class="footable table table-custom">
									<thead>
										<tr>
											<th>chatId</th>
											<th data-hide="phone">Message</th>
											<th data-hide='phone, tablet'>Status</th>
											<th data-hide='phone, tablet'>Action</th>
										</tr>
									</thead>
									<tbody>
                                    
                                    <?php
									foreach($rchat as $row)
									{?>
                                    <tr>
                                        
                                    <td><?php echo $row->reporterchatid;?></td>
                                    
                                    <td><?php echo $row->reportermsg;?></td>
                                    <td>
									 <a href="<?php echo site_url()?>/Reporterchatc/status/<?php echo $row->reporterchatid ?>" class="<?php if($row->reporterchatstatus=="Active"){?>btn btn-raised btn-success btn-sm"<?php }else {?>  btn btn-raised btn-primary btn-sm <?php }?>style="text-decoration:none;">
	
									<?php echo $row->reporterchatstatus;?></a></td>
                                    <td><a href="<?php echo site_url(); ?>/Reporterchatc/catgdel/<?php echo $row->reporterchatid;?>"><i class="fa fa-trash-o" style='color:#F00;'></i></a>
                                      | <a href="<?php echo site_url() ?>/Reporterchatc/catgedit/<?php echo $row->reporterchatid;?>"><i class="fa fa-edit"></i></a></td> <?php
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