<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home | Capacitance Technical Training Center</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" href="img/logo/1.gif">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	
	<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/footerbottom.js"></script>
	<script type="text/javascript" src="js/crossfade.js"></script>
	
</head>
<body>

<?php
	include("include/sidenav.php");
	include("include/header.php");
	include("include/sub_header.php");
	include("include/view.php");
	include("include/navbar.php");
?>

<div class="container-fluid" id="home_content">
	<div class="row">
		<div class="col-md-12">
			<div id="imgfading">
				<ul class="imgfading">
					<li class="show"><img src="img/header/1.jpg" class="img img-responsive" width="100%"></li>
					<li><img src="img/header/2.jpg" width="100%" class="img img-responsive"></li>
					<li><img src="img/header/3.jpg" width="100%" class="img img-responsive"></li>
				</ul>
		</div>

		<div id="home_banner" class="animated slower zoomInUp">
				<h4><span class="glyphicon glyphicon-ok text text-success"></span> Affordable Tutorial packages</h4>
				<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</span>

				<h4><span class="glyphicon glyphicon-ok text text-danger"></span> Instructors are Well Experience their field Industry</h4>
				<span>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>

				<h4><span class="glyphicon glyphicon-ok text text-primary"></span> Actual Tutorial</h4>
				<span>quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span>
				<div class="text text-right">
					<input value="Learn More" class="text text-right btn btn-success btn-md" type="button">
				</div>
			</div>
		</div>
		
	</div>
</div>

<div class="container-fluid" id="home_body">
	<div class="row">
		<h2 id="title" class="animated slideInUp">Capacitance Technical Training Center</h2>
		
		<div class="col-md-4">
			<h3 class="text text-center text-success">Tutorial Offer for Electrical</h3>
				<ul class="animated slideInUp">
					<li>Building wiring electrician(House/Residential Wiring)</li>
					<li>Electrical Installation and Maintanance NCII</li>
					<li>Industrial Electricity</li>
					<li>Motor Control, WYE Delta, Reverse Forward Periodic Sequence Control and Computations of Loads</li>
					<li>Refrigiration and Air Conditioned Technician</li>
					<li>Refrigiration and Air Conditioned Services NCII</li>
					<li>Electronics Technician</li>
					<li>Consumer Electronics Servicing NCII</li>
				</ul>		
		</div>

		<div class="col-md-4">
			<h3 class="text text-center  text-success">Tutorial Offer for Web Designing</h3>
			<h4 class="text text-center">Web Designing Package Tutorial with free source codes for your future referrences.</h4>
			<ul class="animated slideInRight">
					<li>HTML - CSS</li>
					<li>CSS Animation and Transforms</li>
					<li>JavaScript Events</li>
					<li>Validating processing forms with PHP and JavaScript</li>
					<li>JQuery and JQuery Mobile</li>
					<li>PHP + MySQL</li>
					<li>Bootstrap</li>	
				</ul>
		</div>
		
		<div class="col-md-4">
			<h3 class="text text-center text-success">Cookery and Bread and Pastry Tutorial</h3>
			<ul class="animated slideInLeft">
					<li>Food and Beverages</li>
					<li>Commercial Cooking</li>
					<li>Bartending</li>
					<li>Bread and Pastry</li>
				</ul>
		</div>

	</div>
</div>

<?php 
	include("include/footer.php");
?>

<script type="text/javascript" src="js/touch.js"></script>
<script type="text/javascript" src="js/sidenav.js"></script>

<!-- hide loading msg -->
<script type="text/javascript">
	$.mobile.loading().hide();
</script>

</body>
</html>