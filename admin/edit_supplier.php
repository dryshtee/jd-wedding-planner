<?php

$id =$_REQUEST['supplier_id'];

?>
<?php
$res = mysql_query("SELECT * FROM suppliers WHERE supplier_id='$id'");
while ($row = mysql_fetch_array($res)) {
	
if(isset($_POST['update']))
{
	if (!$connection) {
            die('could not connect: ' . mysql_error());
        }
		
$posid= $_POST['posid'];
$status = $_POST['status'];


$query3=mysql_query("update suppliers set posid='$posid', status='$status' where supplier_id='$id'", $connection);
if($query3)
{
echo "<script>alert('Record Updated Successfully')</script>";
echo "<meta http-equiv='refresh' content='0;url=reg_suppliers.php'>";

}
}
?>
<body>
        <div class="container">
            <div class="row">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <center><strong>Account Settings of: <?php echo $row['username']; ?></strong></center>
                        </h3>
                    </div>
                    <div class="panel-body">
                            <form method="post" action="<?php $_PHP_SELF ?>" class="form-horizontal" role="form">
                  
								<div class="form-group">
								<label for="posid">Position:</label>
                                    <input type="text"  name="posid" id="posid" value="<?php echo $row['posid']; ?>"/>
                                </div>
								<div class="form-group">
								<label for="status">Status: </label> 
								
								<select name="status" id="status" >
					
								<option value = "active">Active</option>
								<option value = "deactive">Deactive</option>
					
					
					</select>
					</div>
					
                </div>
								
                                <div class="form-group">
                                    <button class="button" style="vertical-align:middle" name="update" id="update">Save Changes</button>
                                </div>
                            </form>
							<?php } ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
