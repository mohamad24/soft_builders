	
		
		<footer id="footer" class="footer">
			<div class="container">
				<div class="row">
                    <?php  if ($lang == "english"){?>
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
                            <h2><?php echo $slider1;?></h2>
							<p><?php echo $text;?></p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
							<h6>Subscribe </h6>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" placeholder="Email address" id="subscribe">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>Subscribe now to our news latter </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
							<h6>Social</h6>
							<ul>
								<li><i class="fa fa-linkedin fotricon" aria-hidden="true"></i><a href="#">Linkedin</a></li>
								<li><i class="fa fa-facebook fotricon" aria-hidden="true"></i><a href="#">Facebook</a></li>
								<li><i class="fa fa-twitter fotricon" aria-hidden="true"></i><a href="#">Twiter</a></li>

							</ul>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms" >
						<div class="footer-single">
							<h6>Menu</h6>
							<ul>
								<li><a href="#body">Home</a></li>
								<li><a href="#works">Work</a></li>
								<li><a href="#team">Team</a></li>
								<li><a href="#contact">Contact Us</a></li>
							</ul>
						</div>
					</div>

                    <?php } else { ?>





                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms" style="direction: rtl;">
                            <div class="footer-single">
                                <h6>قائمة</h6>
                                <ul>
                                    <li><a href="#body">الرئيسة</a></li>
                                    <li><a href="#works">اعمالنا</a></li>
                                    <li><a href="#team">فريقنا</a></li>
                                    <li><a href="#contact">تواصل معنا</a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms" style="direction: rtl;">
                            <div class="footer-single">
                                <h6>تواصل</h6>
                                <ul>
                                    <li><i class="fa fa-linkedin fotricon" aria-hidden="true"></i><a href="#">Linkedin</a></li>
                                    <li><i class="fa fa-facebook fotricon" aria-hidden="true"></i><a href="#">Facebook</a></li>
                                    <li><i class="fa fa-twitter fotricon" aria-hidden="true"></i><a href="#">Twiter</a></li>
                                </ul>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms" style="direction: rtl;">
                            <div class="footer-single">
                                <h6>اشترك </h6>
                                <form action="#" class="subscribe">
                                    <input type="text" name="subscribe" placeholder="البريد الالكتروني" id="subscribe">
                                    <input type="submit" value="&#8592;" id="subss">
                                </form>
                                <p>اشترك الان في نشرتنا الاخبارية</p>
                            </div>
                        </div>


                        <div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" style="direction: rtl;">
                            <div class="footer-single">
                                <h2><?php echo $slider1;?></h2>
                                <p><?php echo $text;?></p>
                            </div>
                        </div>

        <?php }?>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2015 <a href="http://themefisher.com/">Builders</a>. All rights reserved.
						</p>
					</div>
				</div>
			</div>
		</footer>
		
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->
        <script src="layout/scripts/jquery-1.11.1.min.js"></script>
		<!-- Single Page Nav -->
        <script src="layout/scripts/jquery.singlePageNav.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="layout/scripts/bootstrap.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="layout/scripts/jquery.fancybox.pack.js"></script>
		<!-- jquery.mixitup.min -->
        <script src="layout/scripts/jquery.mixitup.min.js"></script>
		<!-- jquery.parallax -->
        <script src="layout/scripts/jquery.parallax-1.1.3.js"></script>
		<!-- jquery.countTo -->
        <script src="layout/scripts/jquery-countTo.js"></script>
		<!-- jquery.appear -->
        <script src="layout/scripts/jquery.appear.js"></script>
		<!-- Contact form validation -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
		<!-- Google Map -->
     
		<!-- jquery easing -->
        <script src="layout/scripts/jquery.easing.min.js"></script>
		<!-- jquery easing -->
        <script src="layout/scripts/wow.min.js"></script>
		<script>
			var wow = new WOW ({
				boxClass:     'wow',      // animated element css class (default is wow)
				animateClass: 'animated', // animation css class (default is animated)
				offset:       120,          // distance to the element when triggering the animation (default is 0)
				mobile:       false,       // trigger animations on mobile devices (default is true)
				live:         true        // act on asynchronously loaded content (default is true)
			  }
			);
			wow.init();
		</script> 
		<!-- Custom Functions -->
        <script src="layout/scripts/custom.js"></script>
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				var switcherlang = $('#switch').data('val');
			

				if(switcherlang == 'ar'){
					requiredname =  "come on, you have a name don't you?",
					minlengthname = "your name must consist of at least 2 characters";
					requeridemail = "no email, no message";
					requiredmessage = "um...yea, you have to write something to send this form.";
					minlengthmessage = "thats all? really?";

					}
				else {

					requiredname =  "لابد انك تمتلك أسم؟",
					minlengthname = "أسمك يجب ان يكون اكبر من حرفين";
					requeridemail = "بريدك الالكتروني ";
					requiredmessage = "!يجب عليك كتابة شيء لارسال الرسالة";
					minlengthmessage = "هذه رسالتك؟ هل انت متاكد؟";

					}
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: requiredname,
							minlength: minlengthname
						},
						email: {
							required: requeridemail
						},
						message: {
							required: requiredmessage,
							minlength: minlengthmessage
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>








 