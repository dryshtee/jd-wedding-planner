<?php
require '../dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <title>Account Settings </title>
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="../css/formstyle.css">
		<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="../css/button.css" rel="stylesheet" type="text/css" media="all">
		<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
		<link href="../css/owl.carousel.css" rel="stylesheet">
		<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/bootstrap.js"></script>
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
		<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	 
		<style>
		table {
		font-family: arial, sans-serif;
		border-collapse: collapse;
		width: 80%;
		height: 50%;
		}

		th, td {
		border: 1px solid #dddddd;
		text-align: left;
		padding: 10px;
		}

		tr:nth-child(even){background-color: #f2f2f2}
		</style>
    </head>
    <body>
        <!--header-->
        <?php
        include 'user-header.php';
        ?>
        <!--header-->
        <!--body-->
        <br/>
        <!--account-->
        <div class="wedding-section">
            <div class="container">
			<?php
				$query=mysql_query("select * from users where email='$email'")or die(mysql_error());
				$row=mysql_fetch_array($query);
			?>
             <h2>Account Settings</h2>
				<center>
				<div class="jumbotron">
                <table>
					<legend><b> Personal Information </b></legend>
					<tbody>
						<tr>
							<td>Full Name: </td>
							<td> <input type="text" name="fullname" required value="<?php echo $row['fullname']; ?>" disabled></td>
						</tr>
						<tr>
							<td>Username: </td>
							<td> <input type="text" name="username" required value="<?php echo $row['username']; ?>" disabled></td>
						</tr>
						<tr>
							<td>Email: </td>
							<td> <input type="text" name="email" required value="<?php echo $row['email']; ?>" disabled ></td>
						</tr>
						<tr>
							<td>Password: </td>
							<td> <input type="password" name="password" required value="<?php echo $row['password']; ?>" disabled></td>
						</tr>
						<tr>
							<td>Partner Name: </td>
							<td> <input type="text" name="partnername" required value="<?php echo $row['partnername']; ?>" disabled></td>
						</tr>
						<tr>
							<td>Wedding Date: </td>
							<td> <input type="text" name="weddingdate" required value="<?php echo $row['weddingdate']; ?>" disabled></td>
						</tr>
						<tr>
							<td>Address: </td>
							<td> <input type="text" name="location" required value="<?php echo $row['location']; ?>" disabled></td>
						</tr>
						<tr>
							<td>Contact Number: </td>
							<td> <input type="text" name="contact" required value="<?php echo $row['contact']; ?>" disabled></td>
						</tr>
						<tr>
							<td></td>
							<td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							<button class="button" style="vertical-align:middle" name="update" data-toggle="modal" href="#openModal1"><span>Update </span></button> </td>
							<div id="openModal1" class="modal fade">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
											<h4 class="modal-title"></h4>
										</div>
										<div class="modal-body">
											<?php
												include 'edit_acct.php';
											?>
										</div>
									</div>
								</div>
							</div>	  
						</tr>
					</tbody>
                </table>
				</center>
				</div>
            </div>
        </div>
        <div class="clearfix"></div>

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