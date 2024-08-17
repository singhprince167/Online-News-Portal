  <!--/ sidebar  -->
        <div id="controls">
            <aside id="leftmenu">
                <div id="leftmenu-wrap">
                    <div class="panel-group slim-scroll" role="tablist">
                        <div class="panel panel-default">
                            <div id="leftmenuNav" class="panel-collapse collapse in" role="tabpanel">
                                <div class="panel-body">
                                    <!--  NAVIGATION Content -->
                                    <ul id="navigation">
                                       
                                       
                                        <li class="<?php if($this->uri->segment(1)=="Adminc"){
										?>active open
                                        <?php	
										}?>">
                                            <a href="<?php echo site_url()?>/Adminc/home">
                                                <i class="fa fa-dashboard"></i>
                                                <span>Dashboard</span>
                                            </a>
                                        </li>
                                         <li class="<?php if($this->uri->segment(1)=="Profilec"){
										?>active open
                                        <?php	
										}?>">
                                            <a href="<?php echo site_url()?>/Profilec/profile">
                                                <i class="fa fa-user"></i>
                                                <span>Profile</span>
                                            </a>
                                        </li>
										
                                        <li class="
					<?php 
		if(($this->uri->segment(1)=="Categoryc")||($this->uri->segment(1)=="Subcategoryc")){
										?> active open
                                        <?php	
										}?>
                                        ">
                                            <a role="button" tabindex="0">
                                                <i class="fa fa-caret-down"></i>
                                                <span>Main Category</span>
                                            </a>
                                            <ul>
                                            <li  
                                   class="<?php if($this->uri->segment(1)=="Categoryc"){
										?> active open
                                        <?php	
										}?>
                                        ">
                                            <a href="<?php echo site_url()?>/Categoryc/">
                                                 <i class="fa fa-caret-right"></i> Category</a>
                                               </li>
                                               <li
                                        class="<?php if($this->uri->segment(1)=="Subcategoryc"){
										?> active open
                                        <?php	
										}?>
                                        ">
                                               <a href="<?php echo site_url()?>/Subcategoryc/">
                                               <i class="fa fa-caret-right"></i> Sub Category</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                         <li class="
					<?php 
		if(($this->uri->segment(1)=="Todaynewsc")||($this->uri->segment(1)=="Breakingc")){
										?> active open
                                        <?php	
										}?>
                                        ">
                                            <a role="button" tabindex="0">
                                               <i class="fa fa-caret-down"></i>
                                                <span>News</span>
                                            </a>
                                            <ul>
                                        <li class="<?php if($this->uri->segment(1)=="Todaynewsc")
										{?>active open
                                        <?php	
										}?>">
                                            <a href="<?php echo site_url()?>/Todaynewsc/">
                                                 <i class="fa fa-caret-right"></i>Todaynews</a>
                                               </li>
                                        <li class="<?php if($this->uri->segment(1)=="Breakingc")
										{?>active open
                                        <?php	
										}?>">
                                               <a href="<?php echo site_url()?>/Breakingc/">
                                               <i class="fa fa-caret-right"></i>Breaking News</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                          <li class="
					<?php 
		if(($this->uri->segment(1)=="Reporterc")||($this->uri->segment(1)=="Reporterpostc")){
										?> active open
                                        <?php	
										}?>
                                        ">
                                            <a role="button" tabindex="0">
                                               <i class="fa fa-caret-down"></i>
                                                <span>Reporter</span>
                                            </a>
                                            <ul>
                                        <li class="<?php if($this->uri->segment(1)=="Reporterc")
										{?>active open
                                        <?php	
										}?>">
                                            <a href="<?php echo site_url()?>/Reporterc/">
                                                <i class="fa fa-caret-right"></i>Registration</a>
                                               </li>
                                     <li class="<?php if($this->uri->segment(1)=="Reporterpostc")
										{?>active open
                                        <?php	
										}?>">
                                               <a href="<?php echo site_url()?>/Reporterpostc/">
                                               <i class="fa fa-caret-right"></i>Reporter Post</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                        <li class="
					<?php 
		if((($this->uri->segment(1)=="Countryc")||($this->uri->segment(1)=="Statec")|| ($this->uri->segment(1)=="Cityc")))
		
		{
										?> active open
                                        <?php	
										}?>
                                        ">
                                            <a role="button" tabindex="0">
                                               <i class="fa fa-caret-down"></i>
                                                <span>Menu</span>
                                            </a>
                                            <ul>
                                        <li class="<?php if($this->uri->segment(1)=="Countryc")
										{?>active open
                                        <?php	
										}?>">
                                            <a href="<?php echo site_url()?>/Countryc/">
                                                 <i class="fa fa-caret-right"></i>Country</a>
                                               </li>
                                        <li class="<?php if($this->uri->segment(1)=="Statec")
										{?>active open
                                        <?php	
										}?>">
                                               <a href="<?php echo site_url()?>/Statec/">
                                               <i class="fa fa-caret-right"></i>State</a>
                                                </li>
                                         <li class="<?php if($this->uri->segment(1)=="Cityc")
										{?>active open
                                        <?php	
										}?>">
                                               <a href="<?php echo site_url()?>/Cityc/">
                                               <i class="fa fa-caret-right"></i>City</a>
                                                </li>
                                                
                                            </ul>
                                        </li>
                                       
                                         <li class="<?php if($this->uri->segment(1)=="Sliderc"){
										?>
                                        active open
                                        <?php	
										}?>">  
                                               
                                                <a href="<?php echo site_url()?>/Sliderc/">
                                               <i class="fa fa-caret-right"></i>Slider</a>
                                         </li>
                                         
                                         <li class="<?php if($this->uri->segment(1)=="Feedbackc"){
										?>
                                        active open
                                        <?php	
										}?>">
                                                <a href="<?php echo site_url()?>/Feedbackc/">
                                               <i class="fa fa-caret-right"></i>Feedback</a>
                                        </li>
										   <li class="<?php if($this->uri->segment(1)=="Chatc"){
										?>
                                        active open
                                        <?php	
										}?>">
                                                <a href="<?php echo site_url()?>/Chatc/">
                                               <i class="fa fa-caret-right"></i>Admin Chat</a>
                                        </li>
                                         <li class="<?php if($this->uri->segment(1)=="Postratingc"){
										?>
                                        active open
                                        <?php	
										}?>">
                                                <a href="<?php echo site_url()?>/Postratingc/">
                                  <i class="glyphicon glyphicon-registration-mark"></i>Rating</a>
                                         </li>
                                        <?php  if($data->priority=="Admin"){?>
                                         <li class="<?php if($this->uri->segment(1)=="SubadminC"){
										?>active open<?php	
										}?>">
                                                <a href="<?php echo site_url()?>/SubadminC/">
                                          <i class="fa fa-group"></i>Sub Admin</a>
                                        </li>
                                        <?php }?>
                                         <li class="<?php if($this->uri->segment(1)=="Userc"){
										?>
                                        active open
                                        <?php	
										}?>">
                                                <a href="<?php echo site_url()?>/Userc/">
                                          <i class="glyphicon glyphicon-user"></i>User</a>
                                        </li>
                                        
                                    </ul>
                                    <!--/ NAVIGATION Content -->
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </aside>
            
        </div>
        <!-- CONTENT -->
      