		<section class="block-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">

						<div class="block-content">
							<div class="contact-info-box">
								<div class="title-section">
									<h1><span>Contact Us</span></h1>
								</div>

							</div>
							<div class="contact-form-box">
								<div class="title-section">
									<h1><span>Contact</span></h1>
								</div>
								<form id="contact-form" method="post" action="<?php echo site_url()?>/Contactc/">
									<div class="row" >
										<div class="col-md-4">
											<label for="name"><p style="color:red;">Name*</p></label>
											<input type="text" id="name" name="name" required="required">
										
                                        </div>
										<div class="col-md-4">
											<label for="mail"><p style="color:red;">E-mail*</p></label>
											<input type="text" id="mail" name="mail" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
								        </div>
										<div class="col-md-4">
											<label for="subject"><p style="color:red;">subject*</p></label>
											<input id="subject" name="subject" type="text" required="required" />
										
                                        </div>
									</div>
									<label for="comment"><p style="color:red;">Your Message*</p></label>
									<textarea id="comment" name="comment" required="required"></textarea>
                                    
									<button type="submit" id="submit-contact">
										<i class="fa fa-paper-plane"></i> Send Message
									</button>
								</form>
							</div>
							<!-- End contact form box -->

						</div>
						<!-- End block content -->

					</div>

					

				</div>

			</div>
		</section>
		