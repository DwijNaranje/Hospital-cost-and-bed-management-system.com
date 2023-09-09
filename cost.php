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
				<li><a href="#portfolio_section">Cost Estimator</a></li>
				<li><a href="Doctors.php">Doctors</a></li>
				<li><a href="contact.php">Contact</a></li>
				<li> <a href="logout.php">Logout</a></li>
			</ul>
			Welcome 😉<?=$_SESSION['fname']?>
		</nav>
	</header>

	<div class="title">
	<style>
        /* Center-align the text within the container */
        .center-text {
            text-align: center;
        }
    </style>
	<div class="center-text">
        <span>Cost Calculation</span>
    </div>
		<br>
	</div>



	<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital Cost Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        h1 {
            text-align: center;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        select, input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: green;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        #result {
            text-align: center;
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Hospital Cost Calculator</h1> <br>
        <label for="diagnosisType">Diagnosis Type:</label>
        <select id="diagnosisType">
            <option value="Blood Test">Blood Test</option>
            <option value="Suger Test">Suger Test</option>
            <option value="X-ray">X-ray</option>
			<option value="MRI">MRI</option>
            <option value="CT Scan">CT Scan</option>
            <option value="Thyroid">Thyroid</option>
        </select>
        
        <label for="surgeryType">Surgery Type:</label>
        <select id="surgeryType">
            <option value="Cardiology">Cardiology-Heart</option>
            <option value="Neurology">Neurology-brain</option>
            <option value="Opthamology">Opthamology-eye</option>
			<option value="Orthopadic">Orthopadic-skeletal injury</option>
            <option value="Dermatology">Dermatology-skin</option>
            <option value="Pediatrician">Pediatrician-child specialist</option>
        </select>
        
        <label for="bedType">Bed Type:</label>
        <select id="bedType">
            <option value="General">General</option>
            <option value="Private">Private</option>
            <option value="VIP">VIP</option>
			<option value="Emergency">Emergency</option>
            <option value="Maternity">Maternity-ward</option>
        </select>
        
        <label for="medicationCost">Medication Cost (₹):</label>
        <input type="number" id="medicationCost" min="0" value="0">
        
        <button onclick="calculateCost()">Calculate Total Cost</button>
        
        <p id="result"></p>
    </div>

    <script>
        function calculateCost() {
            var diagnosisType = document.getElementById("diagnosisType").value;
            var surgeryType = document.getElementById("surgeryType").value;
            var bedType = document.getElementById("bedType").value;
            var medicationCost = parseFloat(document.getElementById("medicationCost").value);

            var diagnosisCost = 0;
            var surgeryCost = 0;
            var bedCost = 0;

            // Calculate diagnosis cost based on selected type
            if (diagnosisType === "Blood Test") {
                diagnosisCost = 700;
            } else if (diagnosisType === "Suger Test") {
                diagnosisCost = 1000;
            }else if (diagnosisType === "X-ray") {
                diagnosisCost = 800;
            }else if (diagnosisType === "MRI") {
                diagnosisCost = 20000;
            }else if (diagnosisType === "CT Scan") {
                diagnosisCost = 6000;
            }else if (diagnosisType === "Thyroid") {
                diagnosisCost = 3000;
            }

            // Calculate surgery cost based on selected type
            if (surgeryType === "Cardiology") {
                surgeryCost = 50000;
            } else if (surgeryType === "Neurology") {
                surgeryCost = 30000;
            }else if (surgeryType === "Opthamology") {
                surgeryCost = 1500;
            }else if (surgeryType === "Orthopadic") {
                surgeryCost = 200000;
            }else if (surgeryType === "Dermatology") {
                surgeryCost = 5000;
            }else if (surgeryType === "Pediatrician") {
                surgeryCost = 54000;
            }

            // Calculate bed cost based on selected type
            if (bedType === "Private") {
                bedCost = 2500;
            } else if (bedType === "VIP") {
                bedCost = 5000;
            }else if (bedType === "General") {
                bedCost = 900;
            }else if (bedType === "Emergency") {
                bedCost = 2000;
            }else if (bedType === "Maternity") {
                bedCost = 4000;
            }

            // Calculate total cost
            var totalCost = medicationCost + diagnosisCost + surgeryCost + bedCost;

            // Display the result
            var result = document.getElementById("result");
            result.innerHTML = "Total Cost: Rs." + totalCost.toFixed(2);
        }
    </script>


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