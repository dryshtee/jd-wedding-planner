<?php
#connect database with the php form
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "jd");

if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $supplier_name = $_POST['supplier_name'];
	$date_added = $_POST['date_added'];
	$posid= $_POST['posid'];
	$status = $_POST['status'];

    #check email to prevent duplications
    $check_username = "select * from suppliers where username='$username'";

    $run = mysqli_query($con, $check_username);

    if (mysqli_num_rows($run) > 0) {
        echo "<script>alert('Username $username is already taken, please add another name!');document.location='reg_suppliers.php'</script>";
    }
    #fill form online and the data enters in database
    $query = "INSERT INTO suppliers (username, password, supplier_name, date_added, posid, status) VALUES ('$username', '$password','$supplier_name','$date_added','$posid','$status')";
    if (mysqli_query($con, $query)) {

      

        echo "<script>alert('Supplier has been successfully registered!')</script>";
        echo"<script>window.open('reg_suppliers.php', '_self')</script>";  # insert product page will open in the same window
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Supplier Registration</title>
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
    <body>
        <!--header-->
        <!--header-->
        <!--body-->
        <br/>
        <br/>
        <div id="container">
            <center><h4><legend><strong>Supplier Registration Form</h4></legend></strong>
            <form method="POST" action="add_supplier.php" enctype="multipart/form-data">
                <input type="text" class="text" name="username" placeholder="Username"  pattern="^[a-zA-Z\s]+$" maxlength="30" title ="Username must contain alphabets only" required><br/>
				
                <input type="password" class="text" name="password" placeholder="Password" maxlength="20" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least 1 number, 1 uppercase and 1 lowercase letter, and at least 8 or more characters" placeholder="Password"  required><br/>
				
				<input type="text" class="text" name="supplier_name" placeholder="Supplier Name"  pattern="^[A-Z\s]+$" maxlength="30" title ="Supplier Name must contain uppercast alphabets only" required><br/>
				 
				<input type="text" class="text" name="posid" placeholder="Position"  pattern="^[A-Z\s]+$" maxlength="30" title ="Position must contain uppercast alphabets only" required><br/><br/><br/>
					 
					  <div class="form-group">
								<label for="status">Status: </label>&nbsp;
								
								<select name="status" id="status" >
					
								<option value = "active">Active</option>
								<option value = "deactive">Deactive</option>
					
					
					</select>
					</div>
                
                <div class="clearfix"> </div>
                <div class="sub-button">
				<input name="date_added" type="hidden" id="date_added" size="30" value="<?php echo date('Y-m-d'); ?>" readonly="readonly" />
                    <input type="submit" name="submit" value="Add Supplier">
                </div>
            </form>
            </center>
        </div>
        <br/>
        <br/>
        <br/>
        <!--body-->
        <!--footer-->
     
    </body>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
