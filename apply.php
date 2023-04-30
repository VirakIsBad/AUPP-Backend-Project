<!doctype html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<link href='http://fonts.googleapis.com/css?family=PT+Sans:400,700|Merriweather:400italic,400' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="icon" href="Media/logo new clean 1.png" type="image" sizes="20x30">

		<!--Javascrip files-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<script src="location.js"></script>
		<script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
		<script src="js service menu/modernizr.js"></script>
		<script src="js files/scroll.js"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="harveystyle.css">
		<link rel="stylesheet" media="screen" href="print.css"/>
		<link rel="stylesheet" href="css  service menu/style.css">
		<link rel="stylesheet" href="css  service menu/reset.css">
	</head>

	<body>
	<div class="Container">
		<title>Apply now!</title>

		<div class="menu-top">
			<nav class="navbar navbar-default navbar-top col-lg-12" >
			<div class="container">
				<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
					<img class="navbar-brand" alt="Logo-small" src="Media/logo new clean 1.png" style="width: 120px; height: 120px;">
					<h1>Gold Steer Driving School</h1>
				</div>
				<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.html">ABOUT</a></li>
					<li><a href="Services.html">SERVICES</a></li>
					<li><a href="contact.html">CONTACT</a></li>
					<li><a class="apply" href="#" style="background-color: red;">APPLY NOW</a></li>
				</ul>
				</div>
			</div>
			</nav>
		</div>

		<div class="empty" style="height: 160px;"></div>
		

		<div class="applynow">
			<div class="apply1">
				<p class="sc-gradient text-center">Apply now!</p>
				<form method = "POST">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input class="form-control" id="firstName" name="firstName" placeholder=" First name" type="text" required>
						</div>

						<div class="col-sm-6 form-group">
							<input class="form-control" id="lastName" name="lastName" placeholder="Last name" type="text" required>
						</div>

						<div class="col-sm-6 form-group">
							<input class="form-control" id="phoneNumber" name="phoneNumber" placeholder="Phone Number" type="phone number" required>
						</div>

						<div class="col-sm-6 form-group">
							<input class="form-control" id="age" name="age" placeholder="age" type="age" required>
						</div>

						<div class="col-sm-12 form-group">
							<input class="form-control" id="email" name="email" placeholder="E-mail" type="e-mail" required>
						</div>

						<div id="ex">
							<label for="yes_no_radio">Do you have any experience before?</label>
							<p>
								<input type="radio" name="experience" value = "Y" checked> Yes</input>
								</p>
								<p>
								<input type="radio" name="experience" value = "N"> No</input>
							</p>
						</div>
						
						<div id="ex">
							<label for="yes_no_radio">Have you ever enroll with another driving school?</label>
							<p>
								<input type="radio" name="pastExp" value = "Y" checked> Yes</input>
								</p>
								<p>
								<input type="radio" name="pastExp" value = "N"> No</input>
							</p>
						</div>

						<div id="ex">
							<label for="yes_no_radio">How did you hear about us?</label>
							<p>
								<input type="radio" name="Question" value = "Facebook or other social media" checked> Facebook or other social media</input>
							</p>
							<p>
								<input type="radio" name="Question" value = "From a friend or family"> From a friend or family</input>
							</p>
						</div>
						
						<div class="service-option">
							<label for="cars">Choose a service:</label>
							<select name="cars" id="cars">
								<option value="Driving lessons + traffic law">Driving lessons + traffic law</option>
								<option value="Exam registration">Exam registration</option>
								<option value="Motocycle license exam">Motocycle license exam</option>
								<option value="Renewing your license">Renewing your license</option>
							</select>
						</div>
						<div class="row">
							<div class="col-sm-12 form-group">
							<button class="btn btn-default pull-right" type="submit" name = "send" value = "send">Send</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	</div>
	</body>
	
	<footer>
		<div class="footer">
			<div class="row">
				<div class="col-sm-5">
					<div class="info-bot">
						<img class="navbar-brand" alt="Logo-small" src="Media/logo new clean 1.png" style="width: 200px; height: 200px;">
						<h1>សាលាបង្រៀនបើកបរ ចង្កូតមាស</h1>
						<h1>Gold Steer Driving School</h1>
						<p><span class="glyphicon glyphicon-map-marker"></span>St. GS Sangkat Prek Leap, khan Chroy Changvar Phnom Penh, 12112</p>
						<p><span class="glyphicon glyphicon-phone"></span> +855 11 111 111</p>
						<p><span class="glyphicon glyphicon-envelope"></span> goldsteerdrivingschool@gmail.com</p>
					</div>
					<div class="navigation-bot">
						<nav>	
									<div class="botnav">
										<a href="index.php">Home</a>
										<a href="about.html">About Us</a>
										<a href="contact.html">Contact</a>
										<a href="Services.html">Services</a>
										<a class="apply" href="#" style="background-color: red;">APPLY NOW</a>
									</div>	
						</nav>
						<center><p>@Copyright 2022 Gold Steer Driving School - All right reserved</p></center>
					</div>
				</div>

				

				<div class="col-sm-7">
					<div id="map"></div>
					<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBPy5xtSkbKyymgn09BajA91D0eQzzYzl8&callback=initMap"></script>
				</div>
			</div>

		</div>	
	</footer>
</html>
