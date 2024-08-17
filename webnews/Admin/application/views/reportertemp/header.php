<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<title>TODAY INDIA</title>
<link rel="icon" type="image/ico" href="<?php echo base_url()?>assets/images/favicon.ico" />
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- vendor css files -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/bootstrap/bootstrap.min.css">    
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/vendor/animsition.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/js/vendor/morris/morris.css">    
<!-- project main css files -->
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/main.css">
</head>
<body id="falcon" class="main_Wrapper">
    <div id="wrap" class="animsition">
        <!-- HEADER Content -->
        <div id="header">
            <header class="clearfix">
                <!-- Branding -->
                <div class="branding">
                    <a class="brand" href="<?php echo site_url()?>/Reporterregc/home">
                        
						<span>TODAY INDIA</span>
                    </a>
                    <a role="button" tabindex="0" class="offcanvas-toggle visible-xs-inline">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
                <!-- Branding end -->

               
               
                <ul class="nav-right pull-right list-inline">
                    
                    <li class="dropdown notifications">
                        <?php
						$repid=$this->session->userdata('email');
							$this->db->where('chatstatus','Active');
							//$this->db->where('repid')
							$rpcmt=$this->db->get('chat')->result();
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
									<a role="button" href="<?php echo site_url() ?>/Reporterchatc/" tabindex="0" class="media">
                                    	
										<span class="pull-left media-object media-icon">
                                          <i class="fa fa-ellipsis-h"></i>
                                        </span>
                                        <div class="media-body">
                                          
                                          <small class="text-muted"><?php echo $msg->adminmsg ?></small>
										  
                                        
										   </div>
								    </a>
                                 <?php
										} 
										 ?>

										

                                </li>
                                
                                
                            </ul>
                            
                        </div>
                    </li>
                    
                    <li class="dropdown nav-profile">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">

     <img src="<?php echo base_url()?>images/<?php echo $get->rimage ?>" alt="" class="0 size-30x30"> </a>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li>
                                <div class="user-info">
                                    <div class="user-name">
									<?php echo $this->session->userdata('reportername') ?></div>
                                    <div class="user-position online">Online</div>
                                </div>
                            </li>
                            <li> <a href="<?php echo site_url()?>/Profilc/profile" role="button" tabindex="0"> <span class="label label-success pull-right"></span> <i class="fa fa-user"></i>Profile</a> </li>

                            <li>
                                <a href="<?php echo site_url()?>/Reporterregc/logout" role="button" tabindex="0">
                                    <i class="fa fa-sign-out"></i>Logout</a>
                            </li>
                        </ul>
                    </li>
                    
                </ul>
             
            </header>
        </div>
