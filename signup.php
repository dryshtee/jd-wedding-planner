<?php
#connect database with the php form
$con = mysqli_connect("localhost", "root", "");
mysqli_select_db($con, "jd");

if (isset($_POST['submit'])) {
    $name = $_POST['fName'];
    $UserName = $_POST['Username'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
	$date = $_POST['date'];

    #check email to prevent duplications
    $check_email = "select * from users where email='$email'";

    $run = mysqli_query($con, $check_email);

    if (mysqli_num_rows($run) > 0) {
        echo "<script>alert('Email $email is already taken, please add another email address!');document.location='signup.php'</script>";
    }
    #fill form online and the data enters in database
    $query = "INSERT INTO users (fullname, username, email, password, date_added) VALUES ('$name', '$UserName','$email','$password','$date')";
    if (mysqli_query($con, $query)) {

        $_SESSION['email'] = $email;

        echo "<script>alert('You have been successfully registered!')</script>";
        echo"<script>window.open('login.php', '_self')</script>";  # insert product page will open in the same window
    }
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Sign Up</title>
        <link rel="stylesheet" href="css/formstyle.css">
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="css/owl.carousel.css" rel="stylesheet">
        <link rel="stylesheet" href="/css/flexslider.css" type="text/css" media="screen" />
		
    </head>
    <body>
        <!--header-->
        <?php
        include 'header.php';
        ?>
        <!--header-->
        <!--body-->
        <br/>
        <br/>
        <div id="signup">
            <h3>Sign Up</h3>
            <form method="POST" action="signup.php" enctype="multipart/form-data">
                <input type="text" pattern="[a-zA-Z]+[ ][a-zA-Z]+" maxlength="30" class="text" name="fName" placeholder="Fullname" title ="Fullname must contain alphabets only" required/>
                <input type="text"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="text" name="Email" maxlength="25" placeholder="Email Address" title ="characters@characters.domain E.g: ****@hotmail.com " required>
                <input type="text" class="text" name="Username" maxlength="10" placeholder="Username"  pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,}$" title ="No special characters and at least 5 characters" required>
                <input type="password" class="text"  maxlength="20" name="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least 1 number, 1 uppercase and 1 lowercase letter, and at least 8 or more characters" placeholder="Password"  required>
				
                <input type="password" class="text"  name="confirm_password" maxlength="20" placeholder="Confirm Password"  required> 
				
				<br/>
                <div class="clearfix"> </div>
                <div class="sub-button">
				<input name="date" type="hidden" id="date" size="30" value="<?php echo date('Y-m-d'); ?>" readonly="readonly" />
                    <input type="submit" id="submit" name="submit" value="Submit">				</br>
                </div>
            </form>
            <h4>Already have an account?  <a href="login.php">Login Here</a></h4>
        </div>
        <br/>
        <br/>
        <br/>
        <!--body-->
		<!--footer-->
			<div class="footer-section">
				<div class="container">
					<div class="footer-top">
						<p> &copy; 2017 JD Wedding Planner | All Rights Reserved </p><br/>
					</div>
				</div>
			</div>
		<!--footer-->
    </body>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
</html>
