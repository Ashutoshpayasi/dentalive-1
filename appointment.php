<!DOCTYPE html>
<!-- MedService - Medical & Medical Health Landing Page Template design by Jthemes -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">





<!-- Mirrored from jthemes.net/themes/html/medservices/files/appointment.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 11:54:38 GMT -->

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="author" content="Jthemes" />
	<meta name="description" content="MedService - Medical & Medical Health Landing Page Template" />
	<meta name="keywords" content="Responsive, HTML5 Template, Jthemes, One Page, Landing, Medical, Health, Healthcare, Doctor, Clinic, Care, Hospital">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<!-- SITE TITLE -->
	<title>Dentalive-Dental Clinic</title>

	<!-- FAVICON AND TOUCH ICONS  -->
	<link rel="shortcut icon" href="images\logo\fav-1.png" type="image/x-icon">
	<link rel="icon" href="images\logo\fav-1.png" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" rel="stylesheet" crossorigin="anonymous">
	<link href="css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="css/menu.css" rel="stylesheet">
	<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/jquery.datetimepicker.min.css" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<link href="css/style.css" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css" rel="stylesheet">

</head>




<body>


	<?php include "includes/header.php" ?>









	<!-- APPOINTMENT PAGE
			============================================= -->
	<div id="appointment-page" class="wide-60 appointment-page-section division">
		<div class="container">
			<div class="row">


				<!-- SERVICE DETAILS -->
				<div class="col-lg-8">
					<div class="txt-block pr-30">

						<!-- Title -->
						<h3 class="h3-md steelblue-color">Book an Appointment</h3>

						<!-- Text -->
						<p>Porta semper lacus cursus, feugiat primis ultrice in ligula risus auctor tempus feugiat
							dolor lacinia cubilia curae integer congue leo metus, primis in orci integer metus mollis
							faucibus enim. Nemo ipsam egestas volute turpis dolores ut aliquam quaerat sodales sapien
							undo pretium purus feugiat dolor impedit magna purus pretium gravida donec ligula massa
							gravida donec pretium
						</p>

						<!-- APPOINTMENT FORM -->
						<div id="appointment-form-holder" class="text-center">
							<form name="appointmentform" class="row appointment-form">

								<!-- Form Select -->
								<div id="input-department" class="col-md-12 input-department">
									<select id="inlineFormCustomSelect1" name="department" class="custom-select department" required>
										<option value="">Select Department</option>
										<option>Pediatrics Department</option>
										<option>Neurology Department</option>
										<option>Haematology Department</option>
										<option>X-Ray Diagnostic Department</option>
										<option>Cardiology Department</option>
										<option>MRI Department</option>
										<option>Laboratory Services</option>
										<option>Other</option>
									</select>
								</div>

								<!-- Form Select -->
								<div id="input-doctor" class="col-md-12 input-doctor">
									<select id="inlineFormCustomSelect2" name="doctor" class="custom-select doctor" required>
										<option value="">Select Doctor</option>
										<option>Jonathan Barnes D.M.</option>
										<option>Hannah Harper D.M.</option>
										<option>Matthew Anderson D.M.</option>
										<option>Megan Coleman D.M.</option>
										<option>Joshua Elledge D.M.</option>
										<option>Other</option>
									</select>
								</div>

								<!-- Form Select -->
								<div id="input-patient" class="col-md-12 input-patient">
									<select id="inlineFormCustomSelect3" name="patient" class="custom-select patient" required>
										<option value="">Have You Visited Us Before?*</option>
										<option>New Patient</option>
										<option>Returning Patient</option>
										<option>Other</option>
									</select>
								</div>

								<!-- Contact Form Input -->
								<div id="input-date" class="col-lg-12">
									<input id="datetimepicker" type="text" name="date" class="form-control date" placeholder="Appointment Date" required>
								</div>

								<!-- Contact Form Input -->
								<div id="input-name" class="col-lg-12">
									<input type="text" name="name" class="form-control name" placeholder="Enter Your Name*" required>
								</div>

								<div id="input-email" class="col-lg-12">
									<input type="text" name="email" class="form-control email" placeholder="Enter Your Email*" required>
								</div>

								<div id="input-phone" class="col-lg-12">
									<input type="tel" name="phone" class="form-control phone" placeholder="Enter Your Phone Number*" required>
								</div>

								<div id="input-message" class="col-lg-12 input-message">
									<textarea class="form-control message" name="message" rows="6" placeholder="Your Message ..."></textarea>
								</div>

								<!-- Contact Form Button -->
								<div class="col-lg-12 form-btn">
									<button type="submit" class="btn btn-blue blue-hover submit">Request an Appointment</button>
								</div>

								<!-- Contact Form Message -->
								<div class="col-lg-12 appointment-form-msg text-center">
									<div class="sending-msg"><span class="loading"></span></div>
								</div>

							</form>

						</div> <!-- END APPOINTMENT FORM -->

						<!-- Text -->
						<p class="p-sm grey-color mb-30">* Porta semper lacus cursus, feugiat primis ultrice in ligula risus
							auctor tempus feugiat dolor lacinia cubilia curae integer congue leo metus, primis in orci
							integer metus mollis faucibus enim. Nemo ipsam egestas volute turpis dolores ut aliquam quaerat
							sodales sapien undo pretium purus
						</p>


					</div>
				</div> <!-- END SERVICE DETAILS -->


				<!-- SIDEBAR -->
				<aside id="sidebar" class="col-lg-4">


					<!-- TEXT WIDGET -->
					<div id="txt-widget" class="sidebar-div mb-50">

						<!-- Title -->
						<h5 class="h5-sm steelblue-color">The Heart Of Clinic</h5>

						<!-- Head of Clinic -->
						<div class="txt-widget-unit mb-15 clearfix d-flex align-items-center">

							<!-- Avatar -->
							<div class="txt-widget-avatar">
								<img src="images/head-of-clinic.jpg" alt="testimonial-avatar">
							</div>

							<!-- Data -->
							<div class="txt-widget-data">
								<h5 class="h5-md steelblue-color">Dr. Jonathan Barnes</h5>
								<span>Chief Medical Officer, Founder</span>
								<p class="blue-color">1-800-1234-567</p>
							</div>

						</div> <!-- End Head of Clinic -->

						<!-- Text -->
						<p class="p-sm">An enim nullam tempor sapien at gravida donec pretium ipsum porta justo
							integer at odiovelna vitae auctor integer congue magna purus
						</p>

						<!-- Button -->
						<a href="about.php" class="btn btn-blue blue-hover">Learn More</a>

					</div> <!-- END TEXT WIDGET -->


					<!-- SIDEBAR TABLE -->
					<div class="sidebar-table blue-table sidebar-div mb-50">

						<!-- Title -->
						<h5 class="h5-md">Working Time</h5>

						<!-- Text -->
						<p class="p-sm">Porta semper lacus cursus, feugiat primis ultrice ligula risus auctor at
							tempus feugiat dolor lacinia cursus nulla vitae massa
						</p>

						<!-- Table -->
						<table class="table">
							<tbody>
								<tr>
									<td>Mon – Wed</td>
									<td> - </td>
									<td class="text-right">9:00 AM - 7:00 PM</td>
								</tr>
								<tr>
									<td>Thursday</td>
									<td> - </td>
									<td class="text-right">9:00 AM - 6:30 PM</td>
								</tr>
								<tr>
									<td>Friday</td>
									<td> - </td>
									<td class="text-right">9:00 AM - 6:00 PM</td>
								</tr>
								<tr class="last-tr">
									<td>Sun - Sun</td>
									<td>-</td>
									<td class="text-right">CLOSED</td>
								</tr>
							</tbody>
						</table>

						<!-- Title -->
						<h5 class="h5-xs">Need a personal health plan?</h5>

						<!-- Text -->
						<p class="p-sm">Porta semper lacus cursus, and feugiat primis ultrice ligula at risus auctor</p>

					</div> <!-- END SIDEBAR TABLE -->


				</aside> <!-- END SIDEBAR -->


			</div> <!-- End row -->
		</div> <!-- End container -->
	</div> <!-- END APPOINTMENT PAGE -->





	<?php include "includes/footer.php" ?>



	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/sticky.js"></script>
	<script src="js/jquery.scrollto.js"></script>
	<script src="js/materialize.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/isotope.pkgd.min.js"></script>
	<script src="js/hero-form.js"></script>
	<script src="js/contact-form.js"></script>
	<script src="js/comment-form.js"></script>
	<script src="js/appointment-form.js"></script>
	<script src="js/jquery.datetimepicker.full.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/wow.js"></script>

	<!-- Custom Script -->
	<script src="js/custom.js"></script>

	<script>
		new WOW().init();
	</script>

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!-- [if lt IE 9]>
			<script src="js/html5shiv.js" type="text/javascript"></script>
			<script src="js/respond.min.js" type="text/javascript"></script>
		<![endif] -->

	<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
	<!--
		<script>
			window.ga=window.ga||function(){(ga.q=ga.q||[]).push(arguments)};ga.l=+new Date;
			ga('create', 'UA-XXXXX-Y', 'auto');
			ga('send', 'pageview');
		</script>
		<script async src='https://www.google-analytics.com/analytics.js'></script>
		-->
	<!-- End Google Analytics -->

	<script src="js/changer.js"></script>
	<script defer src="js/styleswitch.js"></script>


</body>




<!-- Mirrored from jthemes.net/themes/html/medservices/files/appointment.php by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 08 Jan 2024 11:54:38 GMT -->

</html>