<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Admin Panel</title>
        <link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="screen">
        <link href="../css/font-awesome.css" rel="stylesheet" type="text/css" media="screen"> 
        <link href="../css/DT_bootstrap.css" rel="stylesheet" type="text/css">
        <link href="../css/style.css" rel="stylesheet" type="text/css" media="screen">
        <script src="../js/jquery.js" type="text/javascript"></script>
        <script src="../js/jquery-3.1.1.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.js" type="text/javascript"></script>
        <script src="../js/jquery.dataTables.js" type="text/javascript" charset="utf-8" language="javascript"></script>
        <script src="../js/DT_bootstrap.js" type="text/javascript" charset="utf-8" language="javascript"></script>
    </head>

    <section>
        <nav class="navbar navbar-default">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="navbar-brand">
                    <h1><a href="reg_users.php">Admin Panel</a></h1>
                </div>
            </div>

            <div class="collapse navbar-collapse navbar-menubuilder">
                <ul class="nav navbar-nav">
                    <li><a href="admindash.php">Dashboard</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Users <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="reg_suppliers.php">Registered Suppliers</a></li>
                            <li><a href="reg_users.php">Registered Users</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Reports <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="booking_details.php">Booking Details</a></li>
                            <li><a href="user_log.php">User Log</a></li>
                        </ul>
                    </li>
                    <li><a href="messages.php">Messages</a></li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
            </div>
        </nav>
    </section>
    <br>
    <div class="container">
        <p>You are currently logged in as: <a href="#"><strong><?php echo $login_session; ?></strong></a></p>  
    </div>