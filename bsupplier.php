
<?php

include("dbcon.php");
?>
<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head> 
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Booked Supplier </title>
<link type="text/css" rel="stylesheet" href="style.css"/>
<script src="jquery.min.js"></script>
 <meta name="viewport" content="width=device-width, initial-scale=1">
              
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/owl.carousel.css" rel="stylesheet">
        <script src="js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
        <script src="js/bootstrap.js"></script>
		 <link href="../bootstrap.css" rel="stylesheet" type="text/css">
		 
<style>
            table {
                font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 75%;
                height: 50%;
            }

            td, th {
                border: 2px solid #dddddd;
                text-align: left;
                padding: 15px;
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
        <br/>
        <!--checklist-->
        <div class="wedding-section">
            <div class="container">
                <h2> Booked Supplier </h2>
				 <p>A handy place to store the details of your booked suppliers.</p>
				 <br/>
				 <br/>
<table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="reg_membersTable">
	
	
	<th> title </th>
	<th> email </th>
	
<tbody>
<?php

$query = mysql_query(" SELECT title,email
 FROM aubineauxbookings,longbeachbookings
 WHERE email=$email
 ") or die(mysql_error());
while($row = mysql_fetch_array($query))
{
	$id = $row['email'];
	
	
	echo "<tr align='center'>";
	
	
	
	
	echo"<td>". $row['title']. "</td>";
	echo"<td>". $row['email']. "</td>";
	
	echo "</tr>";
	}
	mysql_close($connection);
	?>
</table>
			
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
        include 'ufooter.php';
        ?>
        <!--footer-->


    </body>
</html>