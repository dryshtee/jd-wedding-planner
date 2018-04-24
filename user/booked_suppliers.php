<?php

include("../dbcon.php");
?>
<!DOCTYPE HTML>
<html>
	<head>
	<title>Booked Suppliers </title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../css/owl.carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="../css/w3.css">
		<script src="../js/jquery.min.js"></script>
		<script src="../js/jquery-1.11.1.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<style>
		.target {
			width:60%;
			height:550px;
			border:solid black 1px; 
			text-align: left;
			float: center;
			padding: 5px;
			margin-left: 80px;
			padding-left: 250px;
			padding-top: 50px;
			
		}
		.target > div {
			display:none;
		}

		.target > div:target{
			display:block;
			ul {
		   list-style-type: none;
			margin: 0;
			padding: 0;
			width: 25%;
			background-color: #f1f1f1;
			height: 100%; /* Full height */
			position: fixed; /* Make it stick, even on scroll */
			overflow: auto; 
			
		}
		 li a {
			display: block;
			color: #000;
		   padding: 8px 16px;
			text-decoration: none;
		}
		 li a.active {
			background-color: #4CAF50;
			color: white;
		}
		 li a:hover:not(.active) {
			background-color: #555;
			color: white;
		}
		}
		.links {
		 float: left;
		 text-align: left;
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
		<div class="wedding-section">
				<h2>Booked Suppliers</h2>
					<br/>
				<div class="links">
						<a href="#m1" class="w3-bar-item w3-button"> Domaine des Aubineaux </a>  
					<br/>
					<br/>
						<a href="#m2" class="w3-bar-item w3-button"> Long Beach Resort & Spa </a>
					<br/>
					<br/>
						<a href="#m3" class="w3-bar-item w3-button"> Royal Parbeaux Hall </a>
					<br/>
					<br/>
						<a href="#m4" class="w3-bar-item w3-button"> Chateau Mon Desir </a>
					<br/>
					<br/>
						<a href="#m5" class="w3-bar-item w3-button"> WeddingPlus Planner </a>
					<br/>
					<br/>
						<a href="#m6" class="w3-bar-item w3-button"> KVS Planner </a>
					<br/>
					<br/>
						<a href="#m7" class="w3-bar-item w3-button"> LMS Planner </a>
					<br/>
					<br/>
						<a href="#m8" class="w3-bar-item w3-button"> Taste Mauritius Food Caterer </a>
					<br/>
					<br/>
						<a href="#m9" class="w3-bar-item w3-button"> Season's Delice </a>
					<br/>
					<br/>
					  <a href="#m10" class="w3-bar-item w3-button"> Girish Balgobin </a>
					<br/>
					<br/>
						<a href="#m11" class="w3-bar-item w3-button"> Kudos Music </a>
					<br/>
					<br/>
						<a href="#m12" class="w3-bar-item w3-button"> VIP Wedding Cars </a>
				</div>
			<center>
				<div class="target">
					<div id="m1">
					<?php
					$res = mysql_query("SELECT * FROM aubineauxbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?> <br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['title']; ?><br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Number of Guests:</label> <?php echo $row['guests']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>		
					</div>
					<div id="m2">
					<?php
					$res = mysql_query("SELECT * FROM longbeachbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?> <br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['title']; ?><br/>
						<label>Cerermony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Number of Guests:</label> <?php echo $row['guests']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>
					</div>
					<div id="m3">
					<?php
					$res = mysql_query("SELECT * FROM venue3bookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?> <br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['title']; ?><br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Number of Guests:</label> <?php echo $row['guests']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>
					<div id="m4">
					<?php
					$res = mysql_query("SELECT * FROM venue4bookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?> <br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['title']; ?><br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Number of Guests:</label> <?php echo $row['guests']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>
					<div id="m5">
					<?php
					$res = mysql_query("SELECT * FROM weddingplusbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?><br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?><br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Package Type:</label> <?php echo $row['deal']; ?><br/>
						<label>Number of Guests:</label> <?php echo $row['guests']; ?><br/>
						<label>Addition Number of Chairs:</label> <?php echo $row['chairs']; ?><br/>
						<label>Addition Number of Tables:</label> <?php echo $row['tables']; ?><br/>
						<label>Seating Style:</label> <?php echo $row['style']; ?><br/>
						<label>Type of Tables:</label> <?php echo $row['types']; ?><br/>
						<label>Special Instructions:</label> <?php echo $row['instruction']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>
					<div id="m6">
					<?php
					$res = mysql_query("SELECT * FROM kvsbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?><br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?><br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Package Type:</label> <?php echo $row['deal']; ?><br/>
						<label>Number of Guests:</label> <?php echo $row['guests']; ?><br/>
						<label>Addition Number of Chairs:</label> <?php echo $row['chairs']; ?><br/>
						<label>Addition Number of Tables:</label> <?php echo $row['tables']; ?><br/>
						<label>Seating Style:</label> <?php echo $row['style']; ?><br/>
						<label>Type of Tables:</label> <?php echo $row['types']; ?><br/>
						<label>Special Instructions:</label> <?php echo $row['instruction']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>
					<div id="m7">
					<?php
					$res = mysql_query("SELECT * FROM floralbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
					<label>Name:</label> <?php echo $row['fname']; ?><br/>
					<label>Email:</label> <?php echo $row['email']; ?><br/>
					<label>Address:</label> <?php echo $row['address']; ?><br/>
					<label>Contact:</label> <?php echo $row['contact']; ?><br/>
					<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
					<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?><br/>
					<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
					<label>Package Type:</label> <?php echo $row['deal']; ?><br/>
					<label>Number of Guests:</label> <?php echo $row['guests']; ?><br/>
					<label>Addition Number of Chairs:</label> <?php echo $row['chairs']; ?><br/>
					<label>Addition Number of Tables:</label> <?php echo $row['tables']; ?><br/>
					<label>Seating Style:</label> <?php echo $row['style']; ?><br/>
					<label>Type of Tables:</label> <?php echo $row['types']; ?><br/>
					<label>Special Instructions:</label> <?php echo $row['instruction']; ?><br/>
					<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>
					<div id="m8">
				   <?php
					$res = mysql_query("SELECT * FROM catererbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?><br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?><br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Selected Menu:</label> <?php echo $row['deal']; ?><br/>
						<label>Quantity Information:</label> <?php echo $row['info']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>
					<div id="m9">
					<?php
					$res = mysql_query("SELECT * FROM catererbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?> <br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?>
						<br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Selected Cake:</label> <?php echo $row['choice']; ?><br/>
						<label>Number of Tier(s):</label> <?php echo $row['tier']; ?><br/>
						<label>Flavor:</label> <?php echo $row['flavor']; ?><br/>
						<label>Additional Information:</label> <?php echo $row['info']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>  
					 <div id="m10">
					<?php
					$res = mysql_query("SELECT * FROM carsbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
					<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?> <br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?>
						<br/>
						<label>Pick Up Address:</label> <?php echo $row['paddress']; ?><br/>
						<label>Pick Up Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Duration:</label> <?php echo $row['duration']; ?><br/>
						<label>Selected Transport For Couples:</label> <?php echo $row['transport']; ?><br/>
						<label>Selected Transport For Guests:</label> <?php echo $row['transport1']; ?><br/>
						<label>Additional Information:</label> <?php echo $row['info']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div> 
					<div id="m11">
					<?php
					$res = mysql_query("SELECT * FROM photosbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
						<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?><br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?>
						<br/>
						<label>Ceremony Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Selected Package:</label> <?php echo $row['deal']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div> 
					<div id="m12">
					<?php
					$res = mysql_query("SELECT * FROM musicbookings WHERE email='$email'");
							while ($row = mysql_fetch_array($res)) {
					?>
						<?php echo $row['title']; ?><br/><br/>
						<label>Name:</label> <?php echo $row['fname']; ?><br/>
						<label>Email:</label> <?php echo $row['email']; ?><br/>
						<label>Address:</label> <?php echo $row['address']; ?><br/>
						<label>Contact:</label> <?php echo $row['contact']; ?><br/>
						<label>Wedding Date:</label> <?php echo $row['date']; ?><br/>
						<label>Ceremony Venue:</label> <?php echo $row['location']; ?>&nbsp;<?php echo $row['vlocation']; ?>
						<br/>
						<label>Ceremonu Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
						<label>Type of Entertainment:</label> <?php echo $row['music']; ?>&nbsp;<?php echo $row['music1']; ?>&nbsp;<?php echo $row['music2']; ?>&nbsp;<?php echo $row['music3']; ?>&nbsp;<?php echo $row['music4']; ?><br/>
						<label>Additional Information:</label> <?php echo $row['info']; ?><br/>
						<label>Confirmation:</label> <?php echo $row['confirmation']; ?><br/>
					<?php } ?>	
					</div>
				</div>
			</center>	
		</div>
	</body>
</html>
