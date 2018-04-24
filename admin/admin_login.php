<?php
include('process.php'); // Includes Login Script

if (isset($_SESSION['login_user1'])) {
    header("location: admindash.php");
}
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Admin Login Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
        <form id="adminLogin" action="" method="POST">
            <div class="form-header">
                <h3>Admin Login</h3>
            </div>
            <hr>
            <div class="form-field">
                <input type="text" id="admin"  name="admin" placeholder="username" maxlength="15" required/>
            </div>
            <hr>
            <div class="form-field">
                <input type="password" id="password"  name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  title="Must contain at least 1 number, 1 uppercase and 1 lowercase letter, and at least 8 or more characters" placeholder="Password" placeholder="password"  maxlength="15"required/>
            </div>
            <hr>
            <div class="clearfix"> </div>
            <div  id="btn_submit">
                <button type="submit" class="btn btn-default" name="submit" value="login">login</button>
            </div>
            <hr>
            <center><span><?php echo $error; ?></span></center>
        </form>
        <div class="shadow"></div>
    </body>
    </html>