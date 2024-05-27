<?php 
	$jScript = md5(rand(1,9));
	$newScript = md5(rand(1,9));
	$newLink = md5(rand(1,9));

?>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
		<!-- logo -->
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mainNav">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>

			<a href="#" class="navbar-brand animated infinite slow flipInX">Capacitance </a>
		</div> <!-- end of navbar header -->

		<!-- menu -->
		<div class="collapse navbar-collapse" id="mainNav">
			<ul class="nav navbar-nav navbar-right animated slideInRight"> 
				<li><?php echo "<a href='index.php?jScript=$jScript && newScript=$newScript && newLink=$newLink'><b>Home</b></a>"; ?></li> 
				<li><?php echo "<a href='mission.php?jScript=$jScript && newScript=$newScript && newLink=$newLink'><b>Mission</b></a>"; ?></li>
				<li><?php echo "<a href='vission.php?jScript=$jScript && newScript=$newScript && newLink=$newLink'><b>Vision</b></a>"; ?></li>
				<li><?php echo "<a href='gallery.php?jScript=$jScript && newScript=$newScript && newLink=$newLink'><b>Gallery</b>"; ?></a></li>
				<li><?php echo "<a href='contact.php?jScript=$jScript && newScript=$newScript && newLink=$newLink''><b>Contact</b></a>"; ?></li>
			</ul>
		</div> <!-- end of menu -->
	</div>
</nav>