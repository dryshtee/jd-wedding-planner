<?php
include 'includes/dbcon.php';
$id = $_REQUEST['id'];
?>

<!DOCTYPE html>
<html>
    <title> View Booking Details </title>
    <head>
        <link rel="stylesheet" href="../css/formstyle.css">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/button.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 65%;
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
    <?php
    include 'includes/header.php';
    ?>
    <body>
        <br/>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
       
        <div class="wedding-section">
            <div class="container">
                <?php
                $query = mysql_query("SELECT * FROM floralbookings WHERE id='$id'")or die(mysql_error());
                $row = mysql_fetch_array($query);
                ?>
                <legend> <h3>Booking Details</h3></legend>
                <center>
                    <div class="jumbotron">
                        <table>
                            <tbody>
                                <label>Date created:</label> <?php echo $row['created']; ?><br/>
								<label>Email:</label> <?php echo $row['email']; ?><br/>
								<label>Address:</label> <?php echo $row['address']; ?><br/>
								<label>Location:</label> <?php echo $row['location']; ?><br/>
								<label>Venue location:</label> <?php echo $row['vlocation']; ?><br/>
								<label>Time:</label> <?php echo $row['hour']; ?>:<?php echo $row['minutes']; ?><br/>
								<label>Number of guests:</label> <?php echo $row['guests']; ?><br/>
								<label>Number of chairs:</label> <?php echo $row['chairs']; ?><br/>
								<label>Number of tables:</label> <?php echo $row['tables']; ?><br/>
								<label>Style</label> <?php echo $row['style']; ?><br/>
								<label>Type:</label> <?php echo $row['types']; ?><br/>
								<label>Special Instructions:</label> <?php echo $row['instruction']; ?><br/>
                            <td>
                                <button class="button" style="vertical-align:middle" name="delete" data-toggle="modal" href="#openModal2"><span>Delete </span></button> 
							</td>

                            <div id="openModal2" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
										<p>
											<?php
                                            include 'actions/delete_floralplanner.php';
                                            ?>
											</p>
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
</body>
</html>