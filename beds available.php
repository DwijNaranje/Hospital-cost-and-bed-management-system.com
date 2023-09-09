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
<style>
  .container {
  display: flex;
  align-items: center;
  justify-content: center
}

img {
  max-width: 100%;
  max-height:100%;
}

.text {
  font-size: 20px;
  padding-left: 20px;
}
  </style>
<body>

	<!-- NAVIGATION -->
	<header>
		<nav>
			<div class="logo"><img src="images/icon/up_logo.jpeg" alt="logo"></div>
			<ul>
				<li><a class="active" href="index.php">Home</a></li>
				<li><a href="cost.php">Cost Estimator</a></li>
				<li><a href="Doctors.php">Doctors</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li> <a href="logout.php">Logout</a></li>
			</ul>
			Welcome 😉<?=$_SESSION['fname']?>
		</nav>
	</header>

	<div class="title">
		<span>Connected Hospitals</span>
		<br>
	</div>


<!-- COURSES AVAILABLE -->
	<div class="ccard">
	<center>
		<div class="ccardbox">
			<div class="dcard">
				<div class="fpart"><img src="images/courses/Aims nagpur.jpeg"></div>
				<a href="#organic"><div class="spart">AIIMS Nagpur </div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/Jawaharlal Nehru Medical College, Sawangi (Meghe) - Wardha.jpeg"></div>
				<a href="#inorganic"><div class="spart">Jawaharlal Nehru Medical College, Sawangi (Meghe) - Wardha</div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/Kasturba Hospital in Sewagram,Wardha.jpeg"></div>
				<a href="#physical"><div class="spart">Kasturba Hospital in Sewagram,Wardha </a>
			</div>
		</div>
		<div class="ccardbox">
			<div class="dcard">
				<div class="fpart"><img src="images/courses/Lilavati Hospital & Research Centre and Multi Speciality Hospital in Mumbai.jpeg"></div>
				<a href="#physics"><div class="spart">Lilavati Hospital & Research Centre and Multi Speciality Hospital in Mumbai <img src=""></div></a>
			</div>
			<div class="dcard">
				<div class="fpart"><img src="images/courses/Seven Hills Hospital Mumbai.jpeg"></div>
				<a href="#math"><div class="spart">Seven Hills Hospital Mumbai <img src=""></div></a>
			</div>
			
		</div>
	</center>
	</div>


	<div class="title2" id="organic">
		<span>AIIMS Nagpur</span>
		<br><br>
    <div class="container">
      <div class="image">
        <img src="images/courses/Aims nagpur.jpeg">
      </div>
      <div class="text">
        <h3>By 2024, AIIMS will add around 3,000 more beds to its existing strength of 2,478 beds. So there will be a facility of approximately 5,500 beds in service by then. <br>
	There are 900 IUC beds and 1578 General/Children beds.</h3>
      </div>
	  <br>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d21.038553!2d79.023780!3d21.038553!4d79.023780!3m2!1i2!2i8x8!5m2!1sWardha!2sen!6m1!1sin" width="100%" height="400" style="border:0" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
    </div>
	</div>

	<div class="title2" id="inorganic">
		<span>Jawaharlal Nehru Medical College, Sawangi (Meghe) - Wardha</span>
		<div class="container">
      <div class="image">
        <img src="images/courses/Jawaharlal Nehru Medical College, Sawangi (Meghe) - Wardha.jpeg">
      </div>
      <div class="text">
        <h3>Jawaharlal Nehru Medical College Sawangi has a completely useful 1525 beds (Acharya Vinoba Bhave Rural Hospital) full of all services and advanced technology.</h3>
      </div>
	  <br>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20.715727!2d78.575194!3d20.715727!4d78.575194!3m2!1i2!2i8x8!5m2!1sWardha!2sen!6m1!1sin" width="100%" height="400" style="border:0" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
    </div>
	</div>




	<div class="title2" id="physical">
		<span>Kasturba Hospital in Sewagram,Wardha</span>
		<div class="container">
      <div class="image">
        <img src="images/courses/Kasturba Hospital in Sewagram,Wardha.jpeg">
      </div>
      <div class="text">
        <h3>Kasturba Hospital at Sevagram has now grown into a nearly 1000- bed teaching hospital. Like all public and teaching hospitals</h3>
      </div>
	  <br>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d20.73969!2d78.65933!3d20.73969!4d78.65933!3m2!1i2!2i8x8!5m2!1sWardha!2sen!6m1!1sin" width="100%" height="400" style="border:0" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
    </div>
	</div>

	<div class="title2" id="physics">
		<span>Lilavati Hospital & Research Centre and Multi Speciality Hospital in Mumbai</span>
		<div class="container">
      <div class="image">
        <img src="images/courses/Lilavati Hospital & Research Centre and Multi Speciality Hospital in Mumbai.jpeg">
      </div>
      <div class="text">
        <h3>we have increased our capacity several folds and have a total of 323 beds with one of the largest Intensive Care Units (ICUs)</h3>
      </div>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19.050966!2d72.828873!3d19.050966!4d72.828873!3m2!1i2!2i8x8!5m2!1sWardha!2sen!6m1!1sin" width="100%" height="400" style="border:0" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
    </div>
	</div>
	
	<div class="title2" id="math">
		<span>Seven Hills Hospital Mumbai</span>
		<div class="container">
      <div class="image">
        <img src="images/courses/Seven Hills Hospital Mumbai.jpeg">
      </div>
      <div class="text">
        <h3>The Mumbai complex has a 2,000,000 sq ft (190,000 m2) built-up area with plans for 1500 beds (300 for critical care), intensive care units for cardiology, burns, neonates, and paediatrics, and 36 operating rooms.</h3>
      </div>
	  <br>
	  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d19.11808!2d72.87804!3d19.11808!4d72.87804!3m2!1i2!2i8x8!5m2!1sWardha!2sen!6m1!1sin" width="100%" height="400" style="border:0" loading="lazy" referrerPolicy="no-referrer-when-downgrade"></iframe>
    </div>
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