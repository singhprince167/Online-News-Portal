<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<title>TODAY INDIA</title>
<link rel="icon" type="image/ico" href="<?php echo base_url()?>assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet"href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/morris/morris.css">
<!-- project main css files -->
<script src="<?php echo base_url()?>/assets/js/vendor/jquery/jquery-3.3.1.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper">
<div id="wrap" class="animsition">
<!-- HEADER Content -->
<div id="header">
  <header class="clearfix"> 
    <!-- Branding -->
    <div class="branding"> <a class="brand" href="<?php echo site_url()?>/Adminc/home"> <span>TODAY INDIA</span> </a> <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline"> <i class="fa fa-bars"></i> </a> </div>
    
    <!-- Right-side navigation -->
    <ul class="nav-right pull-right list-inline">
     
      
        <li class="dropdown notifications">
                        <?php
						$repid=$this->session->userdata('reporteremail');
							$this->db->where('reporterchatstatus','Active');
							//$this->db->where('repid')
							$rpcmt=$this->db->get('reporterchat')->result();
							$rpcmt1 = count($rpcmt);
							 
						?>
						
						 <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
						  <i class="fa fa-envelope">  
						  <?php echo $rpcmt1 ?>
						  </i>
        <div class="notify"> 
		<span class="heartbit"></span> 
		<span class="point"></span> 
		
		</div>
	
        </a>
						
						
						<div class="dropdown-menu pull-right panel panel-default">
                            <ul class="list-group">
                                <li class="list-group-item">
                                        <?php
										foreach($rpcmt as $msg)
										{
										?>
									<a role="button" href="<?php echo site_url() ?>/chatc/" tabindex="0" class="media">
                                    	
										<span class="pull-left media-object media-icon">
                                          <i class="fa fa-ellipsis-h"></i>
                                        </span>
                                        <div class="media-body">
                                          <span class="block"><?php //echo $msg->rid ?></span>
                                          <small class="text-muted"><?php echo $msg->reportermsg ?></small>
                                        
										   </div>
								    </a>
                                 <?php
										} 
										 ?>

										

                                </li>
                                
                                
                            </ul>
                            
                        </div>
                    </li>     
      <li class="dropdown notifications">
                        <?php
						    $rid=$this->session->userdata('reporteremail');
							$this->db->where('fstatus','Active');
							$cnnt2=$this->db->get('feedback')->result();
							$cnt2 = count($cnnt2); 
						?>
						
						
						<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-bell">
						 	<?php echo $cnt2 ?>
							</i>
                            <div class="notify">
                                <span class="heartbit"></span>
                                <span class="point"></span>
                            </div>
                        </a>
                        
						
						
						<div class="dropdown-menu pull-right panel panel-default">
                            <ul class="list-group">
                                <li class="list-group-item">
                                        <?php
										foreach($cnnt2 as $rr)
										{
										?>
									<a role="button" href="<?php echo site_url() ?>/Feedbackc/" tabindex="0" class="media">
                                    	
										<span class="pull-left media-object media-icon">
                                         <i class="glyphicon glyphicon-exclamation-sign"></i>
                                        </span>
                                        <div class="media-body">
                                          <span class="block"><?php echo $rr->usernm ?></span>
                                          <small class="text-muted"><?php echo $rr->comment ?></small>
                                        
										   </div>
								    </a>
                                 <?php
										} 
										 ?>

										

                                </li>
                                
                                
                            </ul>
                            
                        </div>
                    </li>
      <li class="dropdown nav-profile"> <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"> 
    <img src="<?php echo base_url()?>gallery/<?php echo $data->Aid."/".$data->aimage; ?>" alt="" class="0 size-30x30"> </a>
        <ul class="dropdown-menu pull-right" role="menu">
          <li>
            <div class="user-info"> <?php echo $data->Aname;?>
              <div class="user-position online">Online</div>
            </div>
            
          </li>
          <li> <a href="<?php echo site_url()?>/Profilec/profile" role="button" tabindex="0"> <span class="label label-success pull-right"><?php echo $progress;?></span> <i class="fa fa-user"></i>Profile</a> </li>
          <li class="divider"></li>
          <li> <a href="<?php echo site_url()?>/Profilec/lock" role="button" tabindex="0"> <i class="fa fa-lock"></i>Lock</a> </li>
           <li> <a href="<?php echo site_url()?>/Profilec/pass" role="button" tabindex="0"> <i class="fa fa-unlock-alt"></i> Change Password</a> </li>
          <li> <a href="<?php echo site_url()?>/Adminc/logout" role="button" tabindex="0"> <i class="fa fa-sign-out"></i>Logout</a> </li>
        </ul>
      </li>
      
    </ul>
    <!-- Right-side navigation end --> 
  </header>
</div>
<!--/ HEADER Content  --> 
