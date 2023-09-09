<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) 
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Nirarogya</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script type="text/javascript" src="script.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0shHvTPZlBq0GPATx39yJpGwUn_0m5mgAIzaSyB0shHvTPZlBq0GPATx39yJpGwUn_0m5mg&libraries=places"></script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><img src="images/icon/up_logo.jpeg" alt="logo"></div>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="cost.php">Cost Estimator</a></li>
				<li><a href="beds available.php">Available Beds </a></li>
				<li><a href="Doctors.php">Doctors</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li> <a href="logout.php">Logout</a></li>
			</ul>
			Welcome 😉<?=$_SESSION['fname']?>
			
			<img src="images/icon/menu.png" class="menu" onclick="ideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>Start Thinking Wellness not illness</p>
				<h5>Our purpose is to create a healthcare management system that monitors bed availability, provides transparent medical cost breakdowns, predicts overall treatment expenses, and optimizes resource allocation for hospitals, ultimately improving patient satisfaction and healthcare efficiency.</h5>
				
			</div>
			<div class="svg-image">
				<img src="images/extra/1st home.webp" alt="svg">
			</div>
		</div>
</header>


<!-- Some Popular Subjects -->
	<div class="title">
		<span>Hospitals connected to Nirarogya</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href=""><img src="images/icon/new.png">Psychiatric hospital</a></div>
		<div class="det"><a href=""><img src="images/icon/new.png">Clinic</a></div>
		<div class="det"><a href=""><img src="images/icon/new.png">Private hospital</a></div>
		<div class="det"><a href=""><img src="images/icon/new.png">Trauma center</a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href=""><img src="images/icon/new.png">Rehabilitation hospital</a></div>
		<div class="det"><a href=""><img src="images/icon/new.png">Hospice</a></div>
		<div class="det"><a href=""><img src="images/icon/new.png">Community hospital</a></div>
		<div class="det det-last"><a href=""><img src="images/icon/new.png">Critical Access Hospital</a></div>
		</div>
	</div>

	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="images/extra/pi.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p>Welcome to Nirarogya, Your Trustworthy Hospital Cost Calculator.
						Our aim at Nirarogya is to provide families and individuals with the understanding they need to make accurate choices regarding their healthcare spending. We know navigating hospital charges can be difficult, so we want to make it easier for you.</p>
				</div>
		</div>
	</div>


<!-- PORTFOLIO -->
	<div class="diffSection" id="portfolio_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px;">Portfolio</p></center>
		<div class="content">
			<p>
				“The best hospitals are not made by machines or fancy buildings; they are made by people who truly care about patients.” 
			</p>
		</div>
	</div>
	<div class="extra">
		<p>We're increasing this data every Month</p>
		<div class="smbox">
		<span><center><div class="data">154</div><div class="det">Connected Hospital</div></center></span>
		<span><center><div class="data">62</div><div class="det">Daily reach</div></center></span>
		<span><center><div class="data">56</div><div class="det">Total Doctors</div></center></span>
		<span><center><div class="data">27</div><div class="det">Total beds</div></center></span>
		</div>
	</div>





<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		
		<a href="beds available.php"><div class="s-card"><img src="images/icon/brainbooster.png"><p>Availability of Beds</p></div></a>
		
		<a href="cost.php"><div class="s-card"><img src="images/icon/papers.jpg"><p>Cost Estimator</p></div></a>
		<a href="Doctors.php"><div class="s-card"><img src="images/icon/p3.png"><p>Doctor support</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="images/icon/discussion.png"><p>Appoinment with Doctors</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="images/icon/help.png"><p>24x7 Online Support</p></div></a>
	</div>



<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:dwijnaranje12@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>


	<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:dwijnaranje12@gmail.com" method="post" enctype="text/plain">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>
	
<!-- Sliding Information -->
	<marquee style="background: linear-gradient(to right, #9f2e98, #1e9328); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">"Made by people who truly care about patients."</div></marquee>

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				<img src="images/icon/bottom_logo.jpeg" style="width: 200px;">
				<div class="logo"></div>
				<div class="social-media">
					<a href="#"><img src="images/icon\fb.png"></a>
					<a href="#"><img src="images/icon\insta.png"></a>
					<a href="#"><img src="images/icon\tt.png"></a>
					<a href="#"><img src="images/icon\ytube.png"></a>
					<a href="#"><img src="images/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2050 Created By Nirarogya, All Rights Reserved.</p>
				<br><p><img src="images/icon/location.png"> Deoli <br>Wardha, Maharashtra-442001</p><br>
				<p><img src="images/icon/phone.png"> +91 9403547883<br><img src="images/icon/mail.png">&nbsp; nirarogya@gmail.com</p>
			</div>
		
				
		</div>
	</footer>

</body>
</html>