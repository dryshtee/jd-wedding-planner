<?php session_start(); ?>
<!DOCTYPE HTML>
<html>
<title> Login </title>
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="css/formstyle.css" rel="stylesheet">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script type="application/x-javascript"> 
            addEventListener("load", function() { 
            setTimeout(hideURLbar, 0); 
            }, 
            false); 
            function hideURLbar(){ 
            window.scrollTo(0,1); 
            } 
        </script>
        <script src="js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
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

	<br/>
	<br/>
	<div id="login">
		<h3>Login</h3>
		<form method="POST" action="login.php">
			<div class="loginform">
				<input type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="text" name="email" maxlength="25" placeholder="Email Address" title ="characters@characters.domain E.g: ****@hotmail.com " required> 
				<input type="password" maxlength="20" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least 1 number, 1 uppercase and 1 lowercase letter, and at least 8 or more characters" placeholder="Password" name="pass" required>
				<input id="button" type="submit" name="login" value="login">
				<br/>
				<br/>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					Not a member? <a href="signup.php" class="signup1">Sign up Here</a></p>
			</div>
		</form>
	</div>
	<br>
	<br>
	<center><img src="images/test.png" alt="" /></center>
	<?php
	
	$con = mysqli_connect("localhost", "root", "");						#connect database with the php form
	mysqli_select_db($con, "jd");
	
	if(isset($_POST['login'])){
	
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		
		$sel_c = "select * from users where password='$pass' AND email='$email'";
		
		$run_c = mysqli_query($con, $sel_c);
		
		$check = mysqli_num_rows($run_c);
		
		if($check==0){
		
		echo "<script>alert('Incorrect Email or Password!')</script>";
		exit();
		}
		
	else{
	$_SESSION['email']=$email;
		
	
	echo " <script>alert('Your have been succesfully logged in!')</script>";

	echo "<script>window.open('user/userdash.php', '_self')</script>";

	}
	}
	?>

	<!--body-->
	<!--footer-->
		<?php
			include 'footer.php';
		?>
	<!--footer-->
    </body>
</html>