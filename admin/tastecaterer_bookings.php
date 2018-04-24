<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<title> Taste Mauritius Caterer Bookings </title>
<head>

  <link rel="stylesheet" href="../css/formstyle.css">
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
		<link href="../css/button.css" rel="stylesheet" type="text/css" media="all">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/owl.carousel.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <script src="../js/jquery-1.11.1.min.js"></script>
        <link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" />
        <script src="../js/bootstrap.js"></script>
		
        <style>
table {
      font-family: arial, sans-serif;
                border-collapse: collapse;
                width: 100%;
                height: 50%;
}

th, td {
    border: 1px solid #dddddd;
                text-align: left;
                padding: 20px;
}

tr:nth-child(even){background-color: #f2f2f2}


</style>
       

</head>
<body>

<br/>
<div class="container">
  
            <form method="post" action="booking_details.php">
			  
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="reg_membersTable">
	<th> Booking ID </th>
	<th> Food Caterer </th>
	<th> Fullname </th>
	<th> Wedding Date </th>
	<th> Ceremony Time </th>
	<th> Ceremony Address </th>
	<th> Package</th>
	<th> Booking Created On </th>
	<th> Confirmation </th>
	
	
	
<tbody>
<?php

$query = mysql_query("SELECT * FROM catererbookings") or die(mysql_error());
while($row = mysql_fetch_array($query))
{
	$id = $row['id'];
	

	echo"<td>" .$row['id']."</td>";
	echo"<td>" .$row['title']."</td>";
	echo"<td>" .$row['fname']."</td>";
	echo"<td>". $row['date']. "</td>";
	echo"<td>". $row['hour']. ":". $row['minutes']. "</td>";
	echo"<td>". $row['location']. "&nbsp;". $row['vlocation']. "</td>";
	echo"<td>". $row['deal']. "</td>";
	echo"<td>". $row['created']. "</td>";
	echo"<td>". $row['confirmation']. "</td>";
	
	
	echo "</tr>";
	}
	mysql_close($connection);
	?>
	</table>
	</div>

</body>
</html>
