<!DOCTYPE html>
<html>
<head>
	<title>E-Learning</title>
	<meta charset="UTF-8">
	<meta name="description" content="Free Web tutorials">
	<meta name="keywords" content="HTML,CSS,XML,JavaScript">
	<meta name="author" content="John Doe">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/resposiv.css">
	<script src="js/api.js"></script>
	<script src="js/main.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Quicksand|Rajdhani" rel="stylesheet"> 
</head>
<body>
	<!--nav bar-->
	<div class="header_bar">
		<div class="headerContent">
				<div class="logo"><img src="img/logo/logo.png"></div>
				<div class="nav">
					<ul>
						<li><a href=""><i class="fas fa-th"></i> Categories
							<div class="CategorisAll">								
								<a href=""><i class="fas fa-laptop-code"></i> Development</a>
								<a href=""><i class="fas fa-briefcase"></i> Business</a>
								<a href=""><i class="fas fa-desktop"></i> IT & Software</a>
								<a href=""><i class="fas fa-swatchbook"></i> Office Productivity</a>
								<a href=""><i class="fas fa-user-tie"></i> Personal Development</a>
								<a href=""><i class="fas fa-palette"></i> Design</a>
								<a href=""><i class="fas fa-bullhorn"></i> Marketing</a>
								<a href=""><i class="fas fa-heart"></i> Lifestyle</a>
								<a href=""><i class="fas fa-camera-retro"></i> Photography</a>
								<a href=""><i class="fas fa-medkit"></i> Health & Fitness</a>
								<a href=""><i class="fas fa-music"></i> Music</a>
								<a href=""><i class="fas fa-user-graduate"></i> Teaching & Academics</a>
							</div>
						</a></li>
						<li>
							<form>
								<input type="search" name="search" placeholder="Search for courses">
								<button><i class="fas fa-search"></i></button>
							</form>
						</li>					
						<li><a href="">Become an instructor</a></li>
						<li><a href=""><i class="fas fa-shopping-cart"></i></a></li>	
					</ul>
				</div>

				<div class="signup_login">
					<a class="blu" id="loginopen" href="#">Log In</a>
					<a class="red" id="signupopen" href="#">Sign Up</a>
				</div>		
		</div>
	</div>

	<!--login signup-->
	<?php include 'inc/login_sinup.php'; ?>