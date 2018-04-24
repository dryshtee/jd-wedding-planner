<?php  
	$conn = mysql_connect('localhost', 'root', '');
	 if (!$conn)
    {
	 die('Could not connect: ' . mysql_error());
	}
	mysql_select_db("jd", $conn);
?>

<?php
 

	$id =$_REQUEST['item_id'];
	
	
	// sending query
	mysql_query("DELETE FROM checklist WHERE item_id = '$id'")
	or die(mysql_error());  	
	
	header("Location: checklist.php");
?> 