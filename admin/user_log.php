<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
<title> User Log </title>
<head>


</head>
<body>
<?php
include 'header.php';
?>
<br/>
<div class="container">
 <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="reg_membersTable">
	<th> User LogId </th>
	<th> Username </th>
	<th> Login Date </th>
	<th> Logout Date </th>
	
<tbody>
<?php
include("db.php");
$query = mysql_query("SELECT * FROM user_log") or die(mysql_error());
while($row = mysql_fetch_array($query))
{
	$id = $row['user_log_id'];
	
	
	echo "<tr align='center'>";
	echo"<td>" .$row['user_log_id']."</td>";
	echo"<td>" .$row['username']."</td>";
	echo"<td>" .$row['login_date']."</td>";
	echo"<td>" .$row['logout_date']."</td>";
	
	
	echo "</tr>";
	}
	mysql_close($connection);
	?>
</table>
</body>
</html>
