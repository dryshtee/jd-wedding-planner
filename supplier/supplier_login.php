<!DOCTYPE HTML>
<html>
    <head>
        <title>Supplier Login</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />       
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
        <script src="../js/jquery-1.11.1.min.js"></script>
        <script src="../js/bootstrap.js"></script>
    </head>
    <body>
        <?php
        if (isset($_POST['submit'])) {
            require_once('includes/dbcon.php');
            $errors = array();
            
            if (empty($_POST['username'])) {
                $errors [] = 'Please Enter Username!';
            } else {
                $us = trim($_POST['username']);
            }

            if (empty($_POST['password'])) {
                $errors [] = 'Please Enter the Password!';
            } else {
                $p = trim($_POST['password']);
            }

            if (empty($errors)) {

                $query = "SELECT supplier_id, supplier_name FROM suppliers WHERE username = '$us' AND password = '$p'";
                $result = @mysql_query($query);
                $row = mysql_fetch_array($result, MYSQL_NUM);
                if ($row) {

                    session_start();
                    $_SESSION['supplier_id'] = $row[0];
                    $_SESSION['supplier_name'] = $row[1];

                    ob_end_clean();
                    if ($_SESSION['supplier_id'] == '2') {
                        $url = 'sbeachplanner.php';
                    } elseif ($_SESSION['supplier_id'] == '3') {
                        $url = 'srusticplanner.php';
                    } elseif ($_SESSION['supplier_id'] == '4') {
                        $url = 'sfloralplanner.php';
                    } elseif ($_SESSION['supplier_id'] == '5') {
                        $url = 'svenue1.php';
                    } elseif ($_SESSION['supplier_id'] == '6') {
                        $url = 'svenue2.php';
                    } elseif ($_SESSION['supplier_id'] == '7') {
                        $url = 'svenue3.php';
                    } elseif ($_SESSION['supplier_id'] == '8') {
                        $url = 'svenue4.php';
                    } elseif ($_SESSION['supplier_id'] == '9') {
                        $url = 'sfood.php';
                    } elseif ($_SESSION['supplier_id'] == '10') {
                        $url = 'scakemaker.php';
                    } elseif ($_SESSION['supplier_id'] == '11') {
                        $url = 'smusic.php';
                    } elseif ($_SESSION['supplier_id'] == '12') {
                        $url = 'sphotography.php';
                    } elseif ($_SESSION['supplier_id'] == '13') {
                        $url = 'stransport.php';
                    } else {
                        $url = 'test.php';
                    }
                    header("Location: $url");
                    exit();
                } else {
                    echo "<center><b>Incorrect UserName or Password!</b></center>";
                }
            }
            mysql_close();
        }//End submitted
        ?>
        <form id="frm" action="" method="POST">
            <div class="form-header">
                <h3>Supplier Login</h3>
            </div>
            <hr>
            <div class="form-field">
                <input type="text" id="username"  name="username" placeholder="username" pattern="^[a-zA-Z\s]+$" maxlength="15" title ="Must contain alphabets only" autofocus required>
            </div>
            <hr>
            <div class="form-field">
                <input type="password" id="password"  name="password" placeholder="password: at least 5 characters" pattern=".{5,}" required>
            </div>
            <hr>
            <div class="clearfix"> </div>
            <div  id="btn_submit">
                <button type="submit" id="submit" class="btn btn-default" name="submit" value="login">login</button>
            </div>
        </form>
        <div class="shadow"></div>
    </body>
</html>