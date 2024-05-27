<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gallery | Capacitance Technical Training Center</title>
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
	<script type="text/javascript" src="js/ajaxLoad.js"></script>
</head>
<body>

<?php
	include("include/sidenav.php");
	include("include/header.php");
	include("include/sub_header.php");
	include("include/view.php");
	include("include/navbar.php");
?>

<a type="button" id="btn_menu">☰</a>
<div class="container-fluid" id="content">
	<div class="row">
		<div class="col-md-3" id="sidebar">
			<a href="#" id="btn">Close &times;</a>
			<a id="Cat">Category</a>
			<a type="button" href="pages/credits.php" class="menu_page">documents</a>
			<a type="button" href="pages/electric.php" class="menu_page">Electrical</a> 
			<a type="button" href="pages/web.php" class="menu_page">Web Design</a>
			<a type="button" href="pages/videos.php" class="menu_page">Videos</a>		
		</div> <!-- end of column -->
		<div id="load_page"></div>
		<!-- <div class="col-md-10" id="load_page" class="animated slideInUp"></div> end of column -->
	</div> <!-- end of row -->

	<div class="row">
		<div class="col-md-12 text text-right">
			<a class="btn btn-warning" href="#" type="button" id="slideUp"><span class="glyphicon glyphicon-arrow-up"></span></a>
		</div>
	</div>
</div> <!-- end of container -->

<?php 
	include("include/footer.php");
?>

<script type="text/javascript" src="js/touch.js"></script>
<script type="text/javascript" src="js/sidenav.js"></script>
<script type="text/javascript" src="js/sidebar_gallery.js"></script>
<!-- hide loading msg -->
<script type="text/javascript">
	$.mobile.loading().hide();
</script>
</body>
</html>