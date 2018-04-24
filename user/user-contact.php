<?php
require 'dbcon.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
	<title>Contact Us</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="css/flexslider.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="css/style.css" rel="stylesheet" type="text/css" media="screen"/>
        <link href="css/formstyle.css" rel="stylesheet" type="text/css" media="screen"/>

        <!--script-->
        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/script.js"></script>
        <script src="js/bootstrap.js"></script>
    </head>
    <body>
        <?php
        include 'header1.php';
        ?>
        <div class="contact_top">
            <div class="col-md-8 contact_left">
                <h3>Contact Form</h3>
                 <form id="contact" method="POST" action="usendmessage.php">
   <?php
                    $con = mysqli_connect("localhost", "root", "");      #connect database with the php form
                    mysqli_select_db($con, "jd");

                    $user = $_SESSION['email'];

                    $get_user = "select * from users where email= '$user' ";

                    $run_user = mysqli_query($con, $get_user);

                    $row_user = mysqli_fetch_array($run_user);

                    $user_id = $row_user['user_id'];

                    $user_fullname = $row_user['fullname'];
                    $user_email = $row_user['email'];
                    $user_contact = $row_user['contact'];

	
      
// Check connection
                    if ($con->connect_error) {
                        die("Connection failed: " . $con->connect_error);
                    }
                    ?>
	              <div class="form-field">
                        <input type="text" id="name"  name="name" placeholder="Name" value="<?php echo $user_fullname; ?>" readonly="readonly" >
                    </div>
                    <div class="form-field">
                        <input type="text" id="email" name="email" placeholder="Email" value="<?php echo $user_email; ?>" readonly="readonly" >
                    </div>
					<div class="form-field">
                        <input type="text" id="contact" name="contact" placeholder="Contact Number" value="<?php echo $user_contact; ?>" readonly="readonly">
                    </div>
                    <div class="form-field">
                        <input type="text" id="subject" name="subject" placeholder="Subject"  pattern="^[a-zA-Z][a-zA-Z0-9-_\.]{5,}$" title ="No special characters and at least 5 characters" maxlength="15" required>
                    </div>
                    <div class="form-field">
                        <textarea id="message" name="message" placeholder="Message" maxlength="100" required></textarea>
                    </div>
					
                    <div class="clearfix"> </div>
                    <div  id="contact_submit" class="sub-button">
					 <input name="date" type="hidden" id="date" size="30" value="<?php echo date('Y-m-d'); ?>" readonly="readonly" />
                      <input type="submit" name="submit" value="Send message" class="btn-submit">
                    </div>
                </form>  
            </div>
            <div class="company_ad">
                <h3>Contact Info</h3>
                <address>
                    <p>Email :<a href="mailto:jdweddingplanner@mail.com">jd@mail.com</a></p>
                    <p>Phone: +230 603 6035</p>
                    <p>Bagatelle Mall Mauritius</p>
                </address>
            </div>
            <div class="contact-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3743.844702311264!2d57.49515251448911!3d-20.223773386439905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x217c5af2ad52164f%3A0x650b09b881245953!2sBagatelle+-+Mall+of+Mauritius!5e0!3m2!1sen!2smu!4v1474617472671" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--footer-->
        <?php
        include 'ufooter.php';
        ?>
        <!--footer-->
    </body>
</html>