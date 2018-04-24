<?php
include 'dbcon.php';
$id =$_REQUEST['supplier_id'];

?>
<!DOCTYPE html>
<html>
<title> View Supplier Info </title>
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
include 'header.php';
?>
<body>

<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href ="reg_suppliers.php"><img src="../images/back.png" > Back to Registered Suppliers </a>
<div class="wedding-section">
            <div class="container">
			<?php
  $query=mysql_query("select * from suppliers where supplier_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  
                <legend> <h3>Suppplier Profile of: <?php echo $row['username']; ?></h3></legend>
				<center>
				<div class="jumbotron">
				
                <table>
				<tbody>
				<tr>
    <td>Fullname: </td>
    <td> <input type="text" name="fname" required value="<?php echo $row['fname']; ?>" disabled></td>
  </tr>
  <tr>
    <td>Address: </td>
    <td> <input type="text" name="address" required value="<?php echo $row['address']; ?>" disabled></td>
  </tr>
  <tr>
    <td>Contact: </td>
    <td> <input type="text" name="contact" required value="<?php echo $row['contact']; ?>" disabled></td>
  </tr>
	<tr>
    <td>Username: </td>
    <td> <input type="text" name="username" required value="<?php echo $row['username']; ?>" disabled></td>
  </tr>
  <tr>
    <td>Supplier Name: </td>
    <td> <input type="text" name="supplier_name" required value="<?php echo $row['supplier_name']; ?>" disabled></td>
  </tr>
  <tr>
    <td>Supplier Link: </td>
    <td> <input type="text"  name="supplier_link" required value="<?php echo $row['supplier_link']; ?>" disabled ></td>
  </tr>
  <tr>
    <td>Position: </td>
    <td> <input type="text" name="posid" required value="<?php echo $row['posid']; ?>" disabled></td>
  </tr>
   <tr>
    <td>Date Added: </td>
    <td> <input type="text" name="date_added" required value="<?php echo $row['date_added']; ?>" disabled></td>
  </tr>
   <tr>
    <td>Status: </td>
    <td> <input type="text" name="status" required value="<?php echo $row['status']; ?>" disabled></td>
  </tr>
 <td> </td>
	
	 <td> &nbsp;&nbsp;&nbsp;
	 <button class="button" style="vertical-align:middle" name="update" data-toggle="modal" href="#openModal1"><span>Update </span></button> 
	  &nbsp;&nbsp;&nbsp;
	 <button class="button" style="vertical-align:middle" name="delete" data-toggle="modal" href="#openModal2"><span>Delete </span></button> </td>
	<div id="openModal1" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        include 'edit_supplier.php';
                                            ?>
                                          
                                        </div>
                                       
                                </div>
                            </div>
                        </div>
						<div id="openModal2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        include 'delete_supplier.php';
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
</body>
</html>