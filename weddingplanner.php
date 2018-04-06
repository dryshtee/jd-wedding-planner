<!DOCTYPE HTML>
<html>
    <head>
	<title>Wedding Planner</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="js/jquery-1.11.1.min.js"></script>
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
		<!--header-->
		<div class="header head-top">
			<div class="header-top">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand">
								<h1><a href="index.php">JD Wedding Planner</a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav">
								<li><a href="index.php">Home</a></li>
								<li><a href="gallery.php">Gallery</a></li>
								<li><a href="venue.php">Venue</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suppliers <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li class="active"><a href="weddingplanner.php">Wedding Planner</a></li>
										<li><a href="foodcaterer.php">Food Caterer</a></li>
										<li><a href="cakemaker.php">Cake Maker</a></li>
										<li><a href="weddingcars.php">Wedding Cars</a></li>
										<li><a href="photography.php">Photos & Videos</a></li>
										<li><a href="music.php">Music & Entertainment</a></li>
									</ul>
								</li>

								<li><a href="login.php">Planning Tools</a></li>
								<li><a href="contact.php">Contact Us</a></li>
							</ul>

						</div><!-- /.navbar-collapse -->
					</div><!-- /.container-fluid -->
				</nav>
			</div>
		</div>
		<!--header-->
	<div class="content">
		<div class="services">
			<div class="container">
				<h2>Wedding Planner</h2>
				<div class="services-grids"> 
					<div class="col-md-4 services-grid">
						<div class="ser1">
						<center><h4>Beach Theme </h4></center>
							<a href="login.php"><img src="images/w1.jpg" class="img-responsive" alt="" /></a>
							<h4>Weddingplus Wedding Planner</h4>
							<p></p>
						</div>
					</div>
					<div class="col-md-4 services-grid">
						<div class="ser1">
						<center><h4>Rustic Theme </h4></center>
							<a href="login.php"><img src="images/w2.jpg" class="img-responsive" alt="" /></a>
							<h4>KVS Wedding Services</h4>
							<p>&nbsp;</p>
						</div>
					</div>
					<div class="col-md-4 services-grid">
						<div class="ser1">
						<center><h4>Floral Theme </h4></center>
							<a href="login.php"><img src="images/w3.jpg" class="img-responsive" alt="" /><a>
							<h4>LMS Wedding Planner</h4>
							<p>&nbsp;</p>
						</div>
					</div>

					<div class="clearfix"></div>
				</div>	
			</div>	
		</div>	
	</div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>