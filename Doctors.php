<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['fname'])) 
 ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="images/icon/favicon.png">
	<title>Nirarogya</title>
	<link rel="stylesheet" type="text/css" href="subjects.css">
	<script type="text/javascript" src="../script.js"></script>
</head>
<body>

	<!-- NAVIGATION -->
	<header>
		<nav>
			<div class="logo"><img src="images/icon/up_logo.jpeg" alt="logo"></div>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="cost.php">Cost Estimator</a></li>
				<li><a href="beds available.php">Available Beds </a></li>
				<li><a href="contact.php">Contact</a></li>
				<li> <a href="logout.php">Logout</a></li>
			</ul>
			Welcome 😉<?=$_SESSION['fname']?>
		</nav>
	</header>

	<div class="title">
		<span>Doctors</span>
	</div>


<!-- COURSES AVAILABLE -->
	<div class="ccard">
	<center>
		<div class="ccardbox">
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Ashok Seth (More than 35 years)<br>(MBBS, MD, FRCP, MRCP, Fellowship) </div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Ashok Rajgopal (More than 26 years)<br>(MBBS,MS, FRCS, MCh) </div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Naresh Trehan (More than 40 years)<br>(MBBS, MD, Fellowship) </a>
			</div>
		</div>
		<div class="ccardbox">
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Suresh H. Advani (More than 43 years)<br>(MBBS, MCh, MS, Fellowship)</div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Sandeep Vaishya (More than 22 years)<br>(MBBS, MCh, MS)</div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. IPS Oberoi (More than 25 years)<br>(MBBS,MS, FRCS)</div></a>
			</div>
		</div>
		<div class="ccardbox">
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Mohamed Rela (More than 30 years) <br>(MBBS,MS, FRCS) </div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. A. B. Govindaraj (More than 43 years) <br>(MBBS, MCh, MS, Fellowship)</div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Arvinder Singh (More than 30 years)<br>(MBBS, MD, FRCP, MRCP, Fellowship)</a>
			</div>
		</div>
		<div class="ccardbox">
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. R.C.M Kaza (More than 26 years)<br>(MBBS ,MS)</div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Devi Prasad Shetty (More than 20 years)<br>(MBBS, MCh, MS)</div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/male1.png"></div>
				<a href=""><div class="spart">Dr. Harit Chaturvedi (More than 25 years)<br>(MBBS, MS, D.Ortho)</a>
			</div>
		</div>
			
		</div>
	</center>
	</div>

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