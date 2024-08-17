	<!-- CONTENT  -->
		<section id="content">
			<div class="page chat-page">
				<div class="row">
					
					<div class="col-md-12 col-sm-12">
						<section class="boxs">
							<div class="boxs-body">
								<!-- right side header -->
								<div class="row">
									<div class="col-md-12">
										<h3 class="m-0 mr-5 inline-block">abc</h3>
									</div>
								</div>
								<!-- /right side header -->
								<!-- chats -->
								<ul class="chats">
									<?php foreach($rchat as $chat){
															
									?>
				<?php if(($chat->chatto=="bharatbanekan26@gmail.com")||($chat->chatto!="gangadhartake@gmail.com")){?> 
				
				<li class="out">
										<div class="media">
											<div class="pull-right thumb thumb-sm">
												<img class="media-object br-50" src="assets/images/profile-photo.jpg" alt=""> </div>
											<div class="media-body">
												<p class="media-heading">
													<span class="datetime">2 hours ago</span>
												</p>
												<span class="body"><?php echo $chat->message?></span>
											</div>
										</div>
									</li>
				
				<?php }else if(($chat->chatfrom=="gangadhartake@gmail.com")||($chat->chatfrom!="bharatbanekan26@gmail.com")){?> <li class="in">
										<div class="media">
											<div class="pull-left thumb thumb-sm">
												<img class="media-object br-50" src="assets/images/random-avatar1.jpg" alt=""> </div>
											<div class="media-body">
												<p class="media-heading">
													<span class="datetime">2 hours ago</span>
												</p>
												<span class="body"><?php echo $chat->message?></span>
											</div>
										</div>
									</li>
								 <?php }?>
									
								<?php }?> 
								</ul>
								<div class="media">
									<div class="media-body">
										<div class="text-right">
											<div class="form-group">
												<input type="text" value="" placeholder="Message" class="form-control" />
											</div>
											<a href="#" class="p-10">
												<i class="fa fa-trash-o"></i>
											</a>
											<a href="#" class="p-10">
												<i class="fa fa-chain "></i>
											</a>
											<button class="btn btn-raised btn-success">
												<i class="fa fa-envelope"></i> Send</button>
										</div>
									</div>
								</div>
								<!-- / chats -->
							</div>
						</section>
					</div>
				</div>
			</div>
		</section>
		<!--/ CONTENT -->
	</div>
	<!--/ Application Content -->

	<!--  Vendor JavaScripts  -->
	<script src="<?php echo base_url() ?>assets/bundles/libscripts.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/bundles/vendorscripts.bundle.js"></script>
	<!--/ vendor javascripts -->

	<script src="<?php echo base_url() ?>assets/bundles/mainscripts.bundle.js"></script>	<!-- Custom Js -->
</body>


</html>