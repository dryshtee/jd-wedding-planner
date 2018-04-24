<?php
$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("jd", $connection);
?>
<!DOCTYPE HTML>
<html>
    <title> Photos and Videos </title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />        
        <link rel="stylesheet" href="../css/layout.css" type="text/css">
        <link rel="stylesheet" href="../css/lightbox.css" type="text/css">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/owl.carousel.css" rel="stylesheet">
        <script src="../js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
        <script src="../js/bootstrap.js"></script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            td, th {
                border: 1px solid #dddddd;
                text-align: left;
                padding: 8px;
            }

            tr:nth-child(even) {
                background-color: #dddddd;
            }
        </style>
    </head>
    <body>

        <!--header-->
        <?php
        include 'user-header.php';
        ?>
        <!--header-->

        <!--body-->
<a href="user-photography.php"><img src="../images/back.png" > Back to photos and videos</a>
        <div id="header">
            <div class="section">

            </div>
            <div class="article">
			
                <center><img src="../images/photography/banner.png" alt=""></center>
                <br>
                <h1><marquee> Girish Ballgobin Photography </marquee></h1>
                <br>
                <center><div class="row">
                        <div class="column">
                            <img src="../images/photography/image1.jpg" style="width:100%" onclick="openModal();
                                    currentSlide(1)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="../images/photography/image2.jpg" style="width:100%" onclick="openModal();
                                    currentSlide(2)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="../images/photography/image3.jpg" style="width:100%" onclick="openModal();
                                    currentSlide(3)" class="hover-shadow cursor">
                        </div>
                        <div class="column">
                            <img src="../images/photography/image4.jpg" style="width:100%" onclick="openModal();
                                    currentSlide(4)" class="hover-shadow cursor">
                        </div>
                    </div>
                </center>
                <div id="myModal" class="modal">
                    <span class="close cursor" onclick="closeModal()">&times;</span>
                    <div class="modal-content">

                        <div class="mySlides">
                            <div class="numbertext">1 / 4</div>
                            <img src="../images/photography/image1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">2 / 4</div>
                            <img src="../images/photography/image2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">3 / 4</div>
                            <img src="../images/photography/image3.jpg" style="width:100%">
                        </div>

                        <div class="mySlides">
                            <div class="numbertext">4 / 4</div>
                            <img src="../images/photography/image4.jpg" style="width:100%">
                        </div>

                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>

                        <div class="caption-container">
                            <p id="caption"></p>
                        </div>


                        <div class="column">
                            <img class="demo cursor" src="../images/photography/image1.jpg" style="width:100%" onclick="currentSlide(1)" alt="Girish Ballgobin Photo">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="../images/photography/image2.jpg" style="width:100%" onclick="currentSlide(2)" alt="Girish Ballgobin Photo">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="../images/photography/image3.jpg" style="width:100%" onclick="currentSlide(3)" alt="Girish Ballgobin Photo">
                        </div>
                        <div class="column">
                            <img class="demo cursor" src="../images/photography/image4.jpg" style="width:100%" onclick="currentSlide(4)" alt="Girish Ballgobin Photo">
                        </div>
                    </div>
                </div>

                <script>
                    function openModal() {
                        document.getElementById('myModal').style.display = "block";
                    }

                    function closeModal() {
                        document.getElementById('myModal').style.display = "none";
                    }

                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("demo");
                        var captionText = document.getElementById("caption");
                        if (n > slides.length) {
                            slideIndex = 1
                        }
                        if (n < 1) {
                            slideIndex = slides.length
                        }
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dots[slideIndex - 1].className += " active";
                        captionText.innerHTML = dots[slideIndex - 1].alt;
                    }
                </script>

            </div>
        </div>

        <div id="body">
            <?php
            $res = mysql_query("SELECT suppliers.* FROM suppliers WHERE suppliers.supplier_id=12");
            while ($row = mysql_fetch_array($res)) {
                ?>
                <div>
                    <div class="featured1">
                        <h2> Overview </h2>
                        <h3> Key Information </h3>
                        <p>
                        <table>
                            <tr>
                                <th> Style of photography </th>
                                <td> Journaliste, Reportage, Traditional </td>
                            </tr>
                            <tr>
                                <th> Do you include a wedding photoshoot? </th>
                                <td> Yes </td>
                            </tr>

                            <tr>
                                <th> Do you travel? </th>
                                <td> Yes </td>
                            </tr>

                            <tr>
                                <th> Are prints/books included? </th>
                                <td> Depends on selected pakage </td>
                               
                            </tr>

                            <tr>
                                <th> Are digital copies included? </th>
                                <td> Yes </td>
                            </tr>

                            <tr>
                                <th> What forms of payment do you accept? </th>
                                <td> Bank Transfer, Cash </td>
                            </tr>

                            <tr>
                                <th> Price </th>
                                <td> <?php echo $row['price']; ?> </td>
                            </tr>
							 <tr>
                                <th> Where are you based? </th>
                                <td> <?php echo $row['address']; ?> </td>
                            </tr>
							 <tr>
                                <th> Phone </th>
                                <td> <?php echo $row['contact']; ?> </td>
                            </tr>
							<tr>
                            <th> Website </th>
                            <td> <?php echo $row['supplier_link']; ?> </td>
                        </tr>
						 <tr>
                            <th> Facebook </th>
                            <td> <?php echo $row['facebook']; ?> </td>
                        </tr>
                        </table>

                        </p>
                    </div>
                    <div class="section1">
                        <div class="article">
                            <h2>About</h2>

                            <?php echo $row['description']; ?>
                        </div>
                    </div>

                    <div class="section2">
                        <div class="article">
                            <h2>Availability</h2>
							<a href="photoscalendar.php"><image src="../images/calendar.png" alt=""></a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>

        <div class="clearfix"> </div>
		
		</div>
		<!--typography-page-->
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
	include 'user-footer.php';
	?>
	<!--footer-->


	</body>
</html>