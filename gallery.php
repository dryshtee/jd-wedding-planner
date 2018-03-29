<!DOCTYPE HTML>
<html>
<title> Wedding Gallery </title>
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="css/style.css?v=1.0">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen" />
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>
        <link href="css/swipebox.css" rel="stylesheet">
        <script src="js/jquery.swipebox.min.js"></script> 
        <script type="text/javascript">
            jQuery(function ($) {
                $(".swipebox").swipebox();
            });
        </script>
    </head>
    <body background="images/Falling_heart.gif">
        <!--header-->
        <?php
			include 'header.php';
        ?>
        <!--header-->
        <div class="content">
            <!--wedding-->
            <div class="wedding-section">
                <div class="container">
                    <h2>wedding</h2>
                    <div class="gallery-grids">
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g1.jpg" ><img src="images/g1.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g2.jpg" ><img src="images/g2.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g3.jpg" ><img src="images/g3.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="gallery-grids">
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g4.jpg" ><img src="images/g4.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g5.jpg" ><img src="images/g5.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g6.jpg" ><img src="images/g6.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                    <div class="gallery-grids">
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g7.jpg" ><img src="images/g7.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g8.jpg" ><img src="images/g8.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="col-md-4 gallery-grid">
                            <div class="gallery-grd">
                                <a class="swipebox" href="images/g9.jpg" ><img src="images/g9.jpg" class="img-style row6" alt=""><span class="zoom-icon"></span></a>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>

        <!--footer-->
        <?php
			include 'footer.php';
        ?>
        <!--footer-->
    </body>
</html>