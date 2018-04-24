<?php
include 'dbcon.php';
$id =$_REQUEST['email_id'];

?>
<!DOCTYPE html>
<html>
<title> Messages </title>
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
<a href ="messages.php"><img src="../images/back.png" > Back to Messages </a>
<div class="wedding-section">
            <div class="container">
			<?php
  $query=mysql_query("select * from contact where email_id='$id'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
  
                <legend> <h3>Feedback of: <?php echo $row['name']; ?></h3></legend>
				<center>
				<div class="jumbotron">
				
                <table>
				<tbody>
	<tr>
    <td>Name: </td>
    <td> <input type="text" name="name" value="<?php echo $row['name']; ?>" disabled></td>
  </tr>
  <tr>
    <td>Email: </td>
    <td> <input type="text" name="email"  value="<?php echo $row['email']; ?>" disabled></td>
  </tr>
  <tr>
    <td>Contact: </td>
    <td> <input type="text" name="contact"  value="<?php echo $row['contact']; ?>" disabled ></td>
  </tr>
  <tr>
    <td>Subject: </td>
    <td> <input type="text" name="subject" value="<?php echo $row['subject']; ?>" disabled></td>
  </tr>
  <tr>
    <td>Message: </td>
    <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <textarea  name="message"  disabled><?php echo $row['message']; ?></textarea></td>
  </tr>
   <tr>
    <td>Date Added: </td>
    <td> <input type="text" name="date_added"  value="<?php echo $row['date_added']; ?>" disabled></td>
  </tr>
 <td> </td>
 <td> <button class="button" style="vertical-align:middle" name="delete" data-toggle="modal" href="#openModal2"><span>Delete </span></button></td>
	
	<div id="openModal2" class="modal fade">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <?php
                                        include 'delete_message.php';
                                            ?>
                                          
                                        </div>
                                       
                                </div>
                            </div>
                        </div>
	</tbody>
                    </table>
					</center>
					</div>
            </div>
			</div>
</body>
</html>