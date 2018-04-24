<?php
include 'includes/dbcon.php';
include('includes/session.php');
?>
<!DOCTYPE html> 
<html>
    <head>
        <title>Supplier Dashboard</title>
        <?php include 'includes/header.php'; ?>
    </head>
    <body data-spy="scroll" data-target=".navbar" data-offset="50">
        <nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="-10">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href=""><?php echo $_SESSION['supplier_name']; ?></a>
                </div>
                <div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a href="#bookingDetails">Booking Details</a></li>
                            <li><a href="#supplierInfo">Supplier Info</a></li>
                            <li><a href="#accountSettings">Account Settings</a></li>
                            <li><a href="actions/logout.php">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>    

        <div id="bookingDetails" class="container-fluid">
            <center><h1>Booking Details</h1></center>
            <hr>
            <div class="container">            
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Booking ID</th>
                            <th>Name</th>
                            <th>Wedding Date</th>
                            <th>Confirmation</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
					<?php
                $query = mysql_query("SELECT * FROM photosbookings WHERE supplier_id='$session_id'") or die(mysql_error());
                while ($row = mysql_fetch_array($query)) {
                    $id = $row['id'];
                    echo "<tr align='center'>";
                    echo"<td>" . $row['id'] . "</td>";
                    echo"<td>" . $row['fname'] . "</td>";
                    echo"<td>" . $row['date'] . "</td>";
                    echo"<td>" . $row['confirmation'] . "</td>";
                    echo"<td><a href ='view_photos.php?id=$id'>View</a>&nbsp;&nbsp;&nbsp;<a href ='confirm12.php?id=$id'>Confirm</a>&nbsp;&nbsp;&nbsp;<a href ='cancel12.php?id=$id'>Cancel</a>";
                    echo "</tr>";
                }
                ?>
                    </tbody>
                </table>
            </div>

        </div>
        <div id="supplierInfo" class="container-fluid">
            <center><h1>Supplier Info</h1></center>
            <hr>
            <div class="container">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Supplier Name</th>
                            <th>About</th>
                            <th>Price</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysql_query("SELECT * FROM suppliers WHERE supplier_id='$session_id'");
                        while ($row = mysql_fetch_array($query)) {
                            echo "<tr>
                        <td>" . $row['supplier_name'] . "</td>
                        <td>" . $row['description'] . "</td>
                        <td>" . $row['price'] . "</td>"
                            ?>
                        <td>
                            <button type="button" name="update" data-toggle="modal" href="#updateModal">Update</button>
                        </td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="modal fade" id="updateModal" role="dialog">
                <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title">Modal Header</h4>
                        </div>
                        <div class="modal-body">
                            <?php
                            include 'actions/edit-photo.php';
                            ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div id="accountSettings" class="container-fluid">
            <center><h1>Account Settings</h1></center>
            <hr>
            <div class="container">
                <?php
                $query = mysql_query("select * from suppliers where supplier_id='$session_id'")or die(mysql_error());
                $row = mysql_fetch_array($query);
                ?>

                <center>
                    <div class="container">
                        <div class="jumbotron">
                            <table class="table table-striped">
                                <td>Name: </td>
                                <td> <input type="text" name="fullname" value="<?php echo $row['supplier_name']; ?>" disabled></td>
                                </tr>
                                <tr>
                                    <td>Username: </td>
                                    <td> <input type="text" name="username" value="<?php echo $row['username']; ?>" disabled></td>
                                </tr>
                                <tr>
                                    <td>Password: </td>
                                    <td> <input type="password" name="password" value="<?php echo $row['password']; ?>" disabled></td>
                                </tr>
                            </table>
                            <button class="button pull-right" data-toggle="modal" href="#editAcc">Update</button>
                            <div id="editAcc" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title"></h4>
                                        </div>
                                        <div class="modal-body">
                                            <?php
                                            include 'actions/edit-acc.php';
                                            ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </center>
            </div>
        </div>
    </body>
</html>
