<?php
include('dbcon.php');

?>
<!DOCTYPE HTML>
<html>    
    <body>
        <?php
        include 'header.php';
        ?>
        <br>
        <div class="container">
            <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="reg_membersTable">
                <thead>
                    <tr>
                        <th>Message ID</th>
                        <th>Name</th>
                        <th>Subject</th>
						<th>Date Added</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

$query = mysql_query("SELECT * FROM contact") or die(mysql_error());
while($row = mysql_fetch_array($query))
{
	$id = $row['email_id'];
	
	
	
	
	echo"<td>" .$row['email_id']."</td>";
	echo"<td>" .$row['name']."</td>";
	echo"<td>". $row['subject']. "</td>";
	echo"<td>". $row['date_added']. "</td>";
	echo"<td><a href ='view_message.php?email_id=$id'>View</a>";
	
	echo "</tr>";
	}
	mysql_close($connection);
	?>
                                
                  
                </tbody>
            </table>
        </div>