<!DOCTYPE HTML>
<html>
<title> Venue </title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="js/jquery-1.11.1.min.js"></script>
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
								<li class="active"><a href="venue.php">Venue</a></li>
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Suppliers <span class="caret"></span></a>
									<ul class="dropdown-menu">
										<li><a href="weddingplanner.php">Wedding Planner</a></li>
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
                    <h2>Venue</h2>
                    <div class="services-grids">
                        <div class="col-md-3 services-grid">
                            <div class="ser1">
                                <a href ="login.php"><img src="images/v1.jpg" class="img-responsive" alt="" /></a>
                                <h4>Domaine des Aubineaux</h4>
                               
                            </div>
                        </div>
                        <div class="col-md-3 services-grid">
                            <div class="ser1">
                                <a href="login.php"><img src="images/v2.jpg" class="img-responsive" alt="" /></a>
                                <h4>Long Beach Resort & Spa</h4>
                                
                            </div>
                        </div>
                        <div class="col-md-3 services-grid">
                            <div class="ser1">
                                <a href="login.php"><img src="images/v3.jpg" class="img-responsive" alt="" /></a>
                                <h4>Royal Parbeaux Hall &nbsp;</h4>
                              
                            </div>
                        </div>
                        <div class="col-md-3 services-grid">
                            <div class="ser1">
                                <a href="login.php"><img src="images/v4.jpg" class="img-responsive" alt="" /></a>
                                <h4>Château Mon Désir &nbsp; &nbsp;&nbsp;</h4>
                               
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>	
                </div>
                <br/>
                <div class="venue-map">
                    <iframe src="https://www.google.com/maps/d/embed?mid=1WYdM4ownZ9S-5_q6nfrYEHYVL-sJ5rV2" width="1000" height="500"></iframe>						
                </div>				
            </div>	
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>