<!-- Start Footer Area -->
<?php
$success = $failed = '';
$form_isset = false;

if (isset($_POST['submit'])) {
	$form_isset = true;
	$mailto = "info@givni.in";  //My email address
	//getting customer data
	$name = $_POST['name']; //getting customer name
	$phone = $_POST['phone'];
	$fromEmail = $_POST['email']; //getting customer email
	$message = $_POST['message']; //getting customer Phome number
	$subject = $_POST['subject']; //getting subject line from client
	$subject2 = "Confirmation: Message was submitted successfully | "; // For customer confirmation

	//Email body I will receive
	$message = "Client Name: " . $name . "\n" . "Phone Number: " . $phone . "\n\n"
		. "Email Id:" . $fromEmail . "\n" . "Subject" . $subject . "\n" . "Message: " . $message . "\n";

	//Message for client confirmation
	$message2 = "Dear" . $name . "\n"
		. "Thank you for contacting us. We will get back to you shortly!" . "\n\n"

		. "Regards," . "\n" . "- Givni Pvt. Ltd.";

	//Email headers
	$headers = "From: " . $fromEmail; // Client email, I will receive
	$headers2 = "From: " . $mailto; // This will receive client

	//PHP mailer function

	$result1 = @mail($mailto, $subject, $message, $headers); // This email sent to My address
	$result2 = @mail($fromEmail, $subject2, $message2, $headers2); //This confirmation email to client

	//Checking if Mails sent successfully

	if ($result1 && $result2) {
		$success = "Your Message was sent Successfully!";
	} else {
		$failed = "Sorry! Message was not sent, Try again Later.";
	}
}


?>
<footer class="footer-area pt-5 bg-f7fafd">
	<div class="container-fluid px-3 px-lg-5">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<div class="logo">
						<a href="<?php echo $base_url; ?>"><img src="assets/img/logo.png" alt="logo"></a>
					</div>
					<p>Givni is the best design and development Company in Patna Bihar, Noida, Kolkata. Our Experts always best web, App Service in Bangalore , Patna , Noida, Kolkata, Ranchi.</p>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget pl-5">
					<h3>Company</h3>
					<ul class="list">
						<li><a href="about">About Us</a></li>
						<li><a href="services">Services</a></li>
						<li><a href="clients">Our Projects</a></li>
						<li><a href="product">Product</a></li>
						<li><a href="register">Register</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget pl-4">
					<h3>Support</h3>
					<ul class="list">
						<li><a href="blog">Blog</a></li>
						<li><a href="privacy-policy">Privacy Policy</a></li>
						<li><a href="terms-conditions">Terms & Condition</a></li>
						<li><a href="faq">FAQ's</a></li>
						<li><a href="contact">Contact</a></li>
					</ul>
				</div>
			</div>

			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h3>Address</h3>

					<ul class="footer-contact-info">
						<li><i data-feather="map-pin"></i>Kolkata City Head Offiec || RDB Boulevard , Regus 8th Floor Plot K-1 , Sector V , Block EP & GP. Salt Lake City Kolkata West Bengal 700091 India</li>
						<li><i data-feather="map-pin"></i>Branch Office Sector 15 Noida D-35 2nd Floor Noida U.P 201301 India</li>
						<li><i data-feather="map-pin"></i> Registered office : || Near Passport Office joytipuram Colony Khajpura Patna 800014 ||</li>

					</ul>

				</div>
			</div>

			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="single-footer-widget">
					<h3>Contact Info</h3>

					<ul class="footer-contact-info">

						<li><i data-feather="mail"></i> Email: <a href="mailto:givniinfo@gmail.com"><span class="__cf_email__" data-cfemail="b4dcd1d8d8dbf4c7c0d5c6c0c49ad7dbd9">givniinfo@gmail.com</span></a></li>
						<li><i data-feather="phone-call"></i> Phone: <br><a href="tel:9835942411">+91-9835942411</a></li>
						<li><i data-feather="phone-call"></i> Phone: <a href="tel:9430455055">+91-9430455055</a></li>
					</ul>
					<ul class="social-links">
						<li><a href="https://www.facebook.com/givni1/" class="facebook" target="_blank"><i data-feather="facebook"></i></a></li>
						<li><a href="https://twitter.com/GivniLimited" class="twitter" target="_blank"><i data-feather="twitter"></i></a></li>
						<li><a href="https://www.instagram.com/givni.in/" class="instagram" target="_blank"><i data-feather="instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/company/givnipvtltd/?originalSubdomain=in" class="linkedin" target="_blank"><i data-feather="linkedin"></i></a></li>
						<li><a href="https://www.youtube.com/channel/UCBTPoCDKlA_YZcIX8lyHGfQ" class="youtube" target="_blank"><i data-feather="youtube"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 col-md-12">
				<div class="copyright-area ">
					<p>© Copyright 2023 | All Rights Reserved by <a href="https://givni.in/" target="_blank">Givni Pvt. Ltd.</a></p>
				</div>
			</div>
		</div>
	</div>

	<img src="assets/img/map.png" class="map" alt="map">
	<div class="shape1"><img src="assets/img/shape1.png" alt="shape"></div>
	<div class="shape8 rotateme"><img src="assets/img/shape2.svg" alt="shape"></div>
</footer>
<!-- End Footer Area -->

<div class="fixed-whatsapp p-2">
	<a href="https://api.whatsapp.com/send?phone=919835942411&text=I want to know more about service %0a%0a https://www.givni.in/" target="_blank">
		<img src="assets/img/whatsapp_icon.webp" width="40" alt="">
	</a>
</div>
<div class="go-top p-2"><i data-feather="arrow-up"></i></div>

<div class="modal fade" id="feedback" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
	<div class="modal-dialog modal-dialog-centered">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalToggleLabel">Send Your Feedback</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
			</div>
			<form class="ajax-submit" data-return="Submitted Successfully" data-alert="true" data-callback="" data-reload="modal">
				<div class="modal-body">
					<input type="hidden" name="feedback_submit">
					<div class="row">
						<div class="col-lg-12 col-md-12">
							<div class="form-group">
								<input type="text" name="name" class="form-control" value="" required data-error="Please enter your name" placeholder="Name">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-12 col-md-6">
							<div class="form-group">
								<input type="text" name="role" class="form-control" required data-error="Please enter your role" placeholder="Profession">
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<div class="form-group">
								<textarea name="message" class="form-control" cols="30" rows="5" required data-error="Write your message" name="message" placeholder="Your Valuable Feedback"></textarea>
								<div class="help-block with-errors"></div>
							</div>
						</div>

						<div class="col-lg-12 col-md-12">
							<button type="submit" class="btn btn-primary">Send Message</button>
							<div id="msgSubmit" class="h3 text-center hidden"></div>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="enquiry" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content" style="border-radius: 15px;">
			<div class="modal-header" style="background: #44b7ce; border-radius: 15px 15px 0px 0px;">
				<h5 class="modal-title text-white fw-bolder" id="exampleModalLabel">Enquiry Form</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-bs-label="Close"></button>
			</div>
			<form class="ajax-submit" data-return="Submitted Successfully" data-alert="true" data-callback="" data-reload="modal">
				<div class="modal-body">
					<input type="hidden" name="enquiry_submit">
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Name</label>
						<div class="col-sm-9">
							<input type="text" name="name" class="form-control bg-white" id="name">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Contact No.</label>
						<div class="col-sm-9">
							<input type="text" name="phone" class="form-control bg-white" id="phone">
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Email Id</label>
						<div class="col-sm-9">
							<input type="text" name="email" class="form-control bg-white" id="email">
						</div>
					</div>
					<div class="mb-3 row">
						<label for="" class="col-sm-3 col-form-label">Subject</label>
						<div class="col-sm-9">
							<select class="form-control" name="enquiry_type" required>
								<option value="">Select Enquiry Type</option>
								<option value="Digital Marketing">Digital Marketing</option>
								<option value="News Website">News Website</option>
								<option value="SEO Website">SEO Service</option>
								<option value="ITI Software">ITI Software</option>
								<option value="Lead Generation">Lead Generation</option>
							</select>
						</div>
					</div>
					<div class="mb-3 row">
						<label class="col-sm-3 col-form-label">Message</label>
						<div class="col-sm-9">
							<textarea class="form-control bg-white" name="message" id="message" rows="3"></textarea>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<!-- All JS Link -->
<!--<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>-->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/meanmenu.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/magnific-popup.min.js"></script>
<script src="assets/js/appear.min.js"></script>
<script src="assets/js/odometer.min.js"></script>
<script src="assets/js/slick.min.js"></script>
<script src="assets/js/imagesloaded.pkgd.min.js"></script>
<script src="assets/js/isotope.pkgd.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/feather.min.js"></script>
<script src="assets/js/form-validator.min.js"></script>
<script src="assets/js/contact-form-script.js"></script>
<script src="assets/js/main.js"></script>
<script src="assets/js/state.js"></script>
<script src="assets/js/ajax-form-submit.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/11.6.6/sweetalert2.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript">
	$(document).ready(function() {
		setInterval(
			function() {
				if (!($("#exampleModalToggle").data('bs.modal') || {})._isShown) {
					// $("#exampleModalToggle").modal('show');
				}
			},
			20000
		);
	});
</script>
<script>
	$(function() {
		var url = window.location.href.split('?')[0].replace(/#/, '');
		$('.navbar-nav.nav .nav-item a').filter(function() {
			return this.href == url;
		}).addClass('active');
	});
</script>