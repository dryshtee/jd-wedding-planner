<!DOCTYPE HTML>
<html>
<title> Venue </title>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css?v=1.0">
		<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
    </head>
    <body background="images/Falling_heart.gif">
        <?php
			include 'header.php';
        ?>
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
                    <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Yo_xyRxtJ11pB7Wx7gtnzBT58H8" width="1000" height="500"></iframe>						
                </div>				
            </div>	
        </div>
        <?php
        include 'footer.php';
        ?>
    </body>
</html>