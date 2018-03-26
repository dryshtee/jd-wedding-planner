<!DOCTYPE html>
<html>
	<title></title>
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css?v=1.0">
	</head>
	
	<body>
		<!--header-->
		<div class="header">
			<div class="header-top">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<div class="navbar-brand">
								<h1><a href="index.php">JD Wedding Planner</a></h1>
							</div>
						</div>
                        <div class="collapse navbar-collapse" id="bs-navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="index.php">Home<span class="sr-only">(current)</span></a></li>
                                <li><a href="gallery.php">Gallery</a></li>
                                <li><a href="venue.php">Venue</a></li>
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
                        </div>
					</div>
				</nav>
			</div>
            <div id="banner-wrapper">
                <div id="headerSlideshow" class="carousel slide carousel-fade" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#headerSlideshow" data-slide-to="0" class="active"></li>
                        <li data-target="#headerSlideshow" data-slide-to="1"></li>
                        <li data-target="#headerSlideshow" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner" role="listbox">
                        <div class="active item">
                            <img src="images/slider-1.jpg" alt="slider-1">
                        </div>
                        <div class="item">
                            <img src="images/slider-2.jpg" alt="slider-2">
                        </div>
                        <div class="item">
                            <img src="images/slider-3.jpg" alt="slider-3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-bottom">
                <div class="banner-grids">
                    <div class="col-md-3 banner-grid">

                        <p></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--header-->
	</body>
</html>

