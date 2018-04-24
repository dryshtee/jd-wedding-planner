<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<title> Registered Users </title>
<head>


</head>
<body>
<?php
include 'header.php';
?>
<br/>
<div class="container">
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="reg_membersTable">
	<th> User_id </th>
	<th> Fullname </th>
	<th> Email </th>
	<th> Date Registered </th>
	<th> Details </th>
	
<tbody>
<?php

$query = mysql_query("SELECT * FROM users") or die(mysql_error());
while($row = mysql_fetch_array($query))
{
	$id = $row['user_id'];
	
	echo"<td>" .$row['user_id']."</td>";
	echo"<td>" .$row['fullname']."</td>";
	echo"<td>". $row['email']. "</td>";
	echo"<td>". $row['date_added']. "</td>";
	echo"<td><a href ='view_user.php?user_id=$id'>View</a>";

	echo "</tr>";
	}
	mysql_close($connection);
	?>
</table>
</body>
</html>
