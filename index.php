<!DOCTYPE HTML>
<html>
    <title> JD Wedding Planner </title>
    <head>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/w3.css"> 
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.js"></script>

        <style>
            .mySlides {display:none;}
        </style>
    </head>
    <body>
        <!--header-->
        <div class="header">
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
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
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
                    <!--<a class="carousel-control left" href="#carousel" data-slide="prev">&lsaquo;</a>
                    <a class="carousel-control right" href="#carousel" data-slide="next">&rsaquo;</a>-->
                </div>
            </div>
            <script defer src="js/jquery.flexslider.js"></script>
            <script type="text/javascript">
                $(function () {
                    SyntaxHighlighter.all();
                });
                $(window).load(function () {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        start: function (slider) {
                            $('body').removeClass('loading');
                        }
                    });
                });
            </script>
            <!-- FlexSlider -->
        </div>
        <!--header-->
        <div class="content">
            <!--about-->
            <div class="about">
                <div class="container about-head">
                    <h2>about</h2>
                    <p>For couples who are excited for and trying to plan their weddings but who need advice,
                        guidance and support. JD Wedding Planner is a transparent, easy-to-use, online platform
                        which combines technology, experience and inspiration to save couples time and stress. With
                        over 1,000 registered suppliers across all the main categories, JD Wedding Planner is still
                        the only site where couples can view suppliers' prices and availability. Our website
                        is packed with inspiration and ideas to help couples plan their dream weddings</p>
                    <br/>
                </div>
                <div>
                    <center>
                        <iframe src="https://player.vimeo.com/video/103438876?title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
                    </center>
                </div>
                <br/>
                <div class="clearfix"></div>
            </div>
            <!--about-->

            <div class="container features">
                <h3>Trending</h3>
                <div class="about-grids">
                    <div class="col-md-3 about-grid test1">
                        <img class="mySlides w3-animate-top" src="images/beach/image2.jpg" style="width:100%">
                        <img class="mySlides w3-animate-bottom" src="images/random/front.jpg" style="width:100%">
                        <img class="mySlides w3-animate-top" src="images/random/front4.jpg" style="width:100%">
                        <script>
                            var myIndex = 0;
                            carousel();

                            function carousel() {
                                var i;
                                var x = document.getElementsByClassName("mySlides");
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                myIndex++;
                                if (myIndex > x.length) {
                                    myIndex = 1
                                }
                                x[myIndex - 1].style.display = "block";
                                setTimeout(carousel, 2500);
                            }
                        </script>

                    </div>
                    <div class="col-md-3 about-grid test1">
                        <img src="images/random/front1.jpg" class="img-responsive" alt="/">
                    </div>
                    <div class="col-md-3 about-grid test1">
                        <img src="images/random/front2.jpg" class="img-responsive" alt="/">

                    </div>
                    <div class="col-md-3 about-grid test1">
                        <img src="images/random/front3.jpeg" class="img-responsive" alt="/">
                    </div>

                    <div class="clearfix"></div>
                    <br>
                    <center>
					<p>JD Wedding Planner exists to help couples discover their most perfect day through custom-designed wedding styling, flowers and our passion for the details.</p>
					<p>Couples all across Mauritius have fallen in love with our way of weaving their personality, love story and inner style into a classy, romantic and beautifully finished wedding affair. </p>
					<p>We are a warm, fun and approachable team who love what we do. We listen and we observe. We get lost in your words so we can find the stories that breathe heart and meaning to your day. Every wedding you see on our website is authentically our work. No exceptions. Designed with love, crafted by hand, meticulously placed, framed by hours upon hours of preparation behind the scenes.We forage for the best suppliers in Mauritius, and have a soft spot for small businesses who share the same passion as we do for indian weddings.</p>
					</center>
                </div>
            </div>          
            <div class="wedding-news">
                <h3> Get social with us</h3>
                <div class="wedding-grid">
                    <div class="wedding-new">
                        <a href="#" class="mask">
                            <div class="col-md-5 indicate-grid">
                                <img src="images/p6.png" class="img-responsive zoom-img" alt=""></a>
                            </div>
                    </div>
                    <div class="wedding-new">
                        <a href="#" class="mask">
                            <div class="col-md-5 indicate-grid">
                                <img src="images/p7.png" class="img-responsive zoom-img" alt=""></a>
                            </div>
                    </div>
                    <div class="wedding-new">
                        <a href="#" class="mask">
                            <img src="images/p8.png" class="img-responsive zoom-img" alt=""></a>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="indicate">
                <div class="indicate-grids">
                    <div class="col-md-3 indicate-grid">
                        <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>Bagatelle Mall Mauritius</p>
                    </div>
                    <div class="col-md-3 indicate-grid">
                        <p><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>Phone: +230 603 6035</p>
                    </div>
                    <div class="col-md-3 indicate-grid">
                        <p><span class="glyphicon glyphicon-send" aria-hidden="true"></span>Fax: +230 603 6037</p>
                    </div>
                    <div class="col-md-3 indicate-grid">
                        <p><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>Email: <a href="mailto:jdweddingplanner@mail.com"> jd@mail.com</a></p>
                    </div>
                    <div class="clearfix"></div>
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
