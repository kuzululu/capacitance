<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact | Capacitance Technical Training Center</title>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<link rel="icon" href="img/logo/1.gif">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">

	<script type="text/javascript" src="js/jquery.mobile-1.4.5.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.12.3.min.js"></script>
	<script type="text/javascript" src="js/footerbottom.js"></script>
	<script type="text/javascript" src="js/crossfade.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>

<?php
	include("include/sidenav.php");
	include("include/header.php");
	include("include/sub_header.php");
	include("include/view.php");
	include("include/navbar.php");
?>


<div class="container-fluid" id="contact_us">
	<div class="row">
	<h2 class="animated slow infinite flash text text-center text-warning" id="cont_title">Message Us</h2>
		<div class="col-md-6">
			<?php 
				include("include/map.php");
			?><br>
			<p class="text text-center"><i class="glyphicon glyphicon-phone-alt"></i> 8050-144 <i class="glyphicon glyphicon-road"></i> Las Piñas City <span></span><i class="glyphicon glyphicon-envelope"></i> email@address.com</p>
		</div> <!-- end of column -->
		<div class="col-md-6">
			<form name="form" class="form" role="form" method="POST" action="email.php">
			<input type="hidden" id="hide" name="hide">
				<div class="form-group">
					<label>Name</label>
					<input id="name" name="name" type="text" class="form-control">
				</div>
				<div class="form-group">
					<label>Contact</label>
					<input id="contact" type="text" name="contact" class="form-control" maxlength="11" onkeypress="return numKey(event); "><span id="con_msg"></span>
				<script type="text/javascript" src="js/number.js"></script>
				</div>
				<div class="form-group">
					<label>Email</label>
					<input id="email" type="text" name="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Message</label>
					<textarea id="message" name="message" class="form-control" rows="6" maxlength="250"></textarea>
					<span id="msg"></span>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" class="btn btn-primary form-control" onclick="return val(); ">
				</div>
			</form>
		</div>
	</div> <!-- end of row -->
</div> <!-- end of container -->

<?php 
	include("include/footer.php");
?>

<script type="text/javascript" src="js/textlength.js"></script>
<script type="text/javascript" src="js/validate.js"></script>
<script type="text/javascript" src="js/selector.js"></script>
<script type="text/javascript" src="js/touch.js"></script>
<script type="text/javascript" src="js/sidenav.js"></script>
<!-- hide loading msg -->
<script type="text/javascript">
	$.mobile.loading().hide();
</script>
</body>
</html>