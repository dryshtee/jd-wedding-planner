<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Dashboard</title>
	    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="../assets/css/main.css" />
        <link rel="stylesheet" type="text/css" href="../css/tcal.css" />
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
		<script type="text/javascript" src="../css/tcal.js"></script> 
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
	<!-- Header -->
	<div id="header">
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
							<h1><a href="userdash.php">JD Wedding Planner</a></h1>
						</div>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li class="active"><a href="userdash.php">Dashboard<span class="sr-only">(current)</span></a></li>
							<li><a href="checklist.php">Checklist</a></li>
							<li><a href="budgetplanner.php">Budget Planner</a></li>
							<li><a href="booked_suppliers.php">My Booked Suppliers</a></li>
							<li><a href="account.php">Account</a></li>
							<li><a href="../logout.php">Logout</a></li>
						</ul>
						
					</div>
				</div>
			</nav>
		</div>
		<!--

		<audio controls loop autoplay>
		// ogg-provide for efficient streaming and manipulation of high quality digital multimedia.
		<source src="sound/song.ogg" type="audio/ogg">
		<source src="sound/song.mp3" type="audio/mpeg">
		</audio>
		-->

		<!-- Banner -->
		<div id="banner">
			<div class="container">						
				<div class="row">
					<div class="9u 12u(mobile)">
						<section>
							<a class="image full"><img src="../images/banneruser.jpg" alt="" /></a>
						</section>
					</div>
					<div class="3u 12u(mobile)">
						<section>
							<div class="bannerbox">
								<h4>Check out how many days are left for your wedding.</h4>
								<br>
								<p>
								<form action="userdash.php" method="post">
									Your Wedding Date : <input type="text"  name="date1" class="tcal" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d"  title="MM/DD/YYYY" maxlength="10" required />
									</br>
									</br>
									Today's Date : <input type="text" name="date2" class="tcal" pattern="(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)\d\d" title="MM/DD/YYYY" maxlength="10" required/>
									</br>
									</br>
									<input type="submit" value="calculate" />
								 
									</br>
									</br>
									
									<?php
									$date1 = @$_POST['date1'];
									$date2 = @$_POST['date2'];
									$datetime1 = new DateTime($date1);

									$datetime2 = new DateTime($date2);

									$difference = $datetime1->diff($datetime2);

									echo $difference->days; 
									
									echo ('&nbsp;');
									echo ('days');
									
									?>
								</form>
								</p>
							</div>
						</section>
					</div>							
				</div>
			</div>
		</div>

		<!-- Featured -->
		<div id="featured">
			<section class="container">
			<center>
				<header>
				 <?php
				$con = mysqli_connect("localhost", "root", "");      #connect database with the php form
				mysqli_select_db($con, "jd");

				$user = $_SESSION['email'];

				$get_user = "select * from users where email= '$user' ";

				$run_user = mysqli_query($con, $get_user);

				$row_user = mysqli_fetch_array($run_user);

				$user_id = $row_user['user_id'];

				$user_fullname = $row_user['fullname'];

				$user_userName = $row_user['username'];

				$user_email = $row_user['email'];

				// Check connection
				if ($con->connect_error) {
					die("Connection failed: " . $con->connect_error);
				}
				?>
					<h3>Hello <?php echo $user_fullname; ?>  </h3>
					<span class="byline"><center>Welcome To Your Planning Tools... </center></span>
				</header>
				</center>
			</section>
		</div>

		<!-- Main -->
		<div id="main">
			<section class="container">
				<div class="row">
					<section class="3u 12u(mobile)">
						<a href="user-venue.php" ><img src="../images/venue.png" alt="" /></a>

						<h3><a href="user-venue.php">&nbsp;&nbsp;&nbsp;&nbsp;Venue</a></h3>

					</section>
					<section class="3u 12u(mobile)">
						<a href="user-weddingplanner.php" ><img src="../images/weddingplanner.png" alt="" /></a>

						<h3><a href="user-weddingplanner.php">Wedding Planner</a></h3>

					</section>
					<section class="3u 12u(mobile)">
						<a href="user-caterer.php" ><img src="../images/foodcaterer.png" alt="" /></a>

						<h3><a href="user-caterer.php">Food Catering</a></h3>

					</section>
					<section class="3u 12u(mobile)">
						<a href="user-cakemaker.php" ><img src="../images/cakemaker.png" alt="" /></a>

						<h3><a href="user-cakemaker.php">Cake Maker</a></h3>

					</section>
					<section class="3u 12u(mobile)">
						<a href="user-weddingcars.php "><img src="../images/weddingcar.png" alt="" /></a>

						<h3><a href="user-weddingcars.php">Wedding Cars</a></h3>

					</section>
					<section class="3u 12u(mobile)">
						<a href="user-photography.php" ><img src="../images/photo.png" alt="" /></a>

						<h3><a href="user-photography.php">Photos and Videos</a></h3>

					</section>
					<section class="3u 12u(mobile)">
						<a href="user-music.php" ><img src="../images/music.png" alt="" /></a>
						<h3><a href="user-music.php">Music and Entertainment</a></h3>
					</section>							
				</div>
		<div class="clearfix"></div>
		</div>	
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
