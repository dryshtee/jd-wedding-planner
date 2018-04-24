<?php
include 'dbcon.php';
$id =$_REQUEST['user_id'];

?>
<!DOCTYPE html>
<html>
<title> View User Info </title>
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
<a href ="reg_users.php"><img src="../images/back.png" > Back to Registered Users </a>
<div class="wedding-section">
            <div class="container">
			<?php
  $query=mysql_query("select * from users where user_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  
               <legend> <h3>User Profile of: <?php echo $row['username']; ?></h3></legend>
				<center>
				<div class="jumbotron">
				
                <table>
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
    <td>Date Added: </td>
    <td> <input type="text" name="date_added" required value="<?php echo $row['date_added']; ?>" disabled></td>
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
    <td>Contact: </td>
    <td> <input type="text" name="contact" required value="<?php echo $row['contact']; ?>" disabled></td>
  </tr>
 <td> </td>
	
	 <td>  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
	 <button class="button" style="vertical-align:middle" name="delete" data-toggle="modal" href="#openModal2"><span>Delete </span></button> </td>
	
						<div id="openModal2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        include 'delete_user.php';
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