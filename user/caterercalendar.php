<?php include_once('catererfunctions.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title> Food Caterer Booking </title>
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../css/cal_style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../css/owl.carousel.css" rel="stylesheet">
		<script src="../js/jquery-1.11.1.min.js"></script>
		<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
		<script src="../js/jquery.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script type="text/javascript" src="../js/jquery-1.4.4.min.js"></script>
		<style>
			table {
				border-collapse: collapse;
				width: 100%;
			}

			th, td {
				text-align: left;
				padding: 8px;
			}

			tr:nth-child(even){background-color: #f2f2f2}

			th {
				background-color: #4CAF50;
				color: white;
			}
			</style>
					 <script type="text/javascript">

			function Unvisible()
			{
			document.getElementById("vlocation").style.visibility="hidden";
			}

			function FilterStatus()
			{
			var location = document.getElementById("location");
			var selectedFilterType = location
			.options[location.selectedIndex].value;

			if (selectedFilterType == "Other")
			{

			document.getElementById("vlocation").style.visibility="visible";

			}

			else
			{
			document.getElementById("vlocation").style.visibility="hidden";
			}

			}
			</script>
	</head>

	<body onload = "javascript:Unvisible();">
	        <!--header-->
		<?php
			include 'user-header.php';
		?>
        <!--header-->

        <!--body-->
		<a href ="taste-mauritius-catering.php"><img src="../images/back.png" > Back to Caterer</a>
		<div class="wedding-section">
			<div class="container">
				<h2>Calendar Availability</h2>
				<div id="calendar_div">
					<?php echo getCalender(); ?>
				</div>
			</div>
		</div>

		<div class="clearfix"> </div>

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

		<!--footer-->
		<?php
			include 'user-footer.php';
		?>
		<!--footer-->
	</body>
</html>