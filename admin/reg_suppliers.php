<?php
include 'dbcon.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Registered Suppliers </title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <br/>
        <div class="container">
            <button class="button" style="vertical-align:middle" name="add" data-toggle="modal" href="#openModal1"><span>Add </span></button> </td>
        <div id="openModal1" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body">
                        <?php
                        include 'add_supplier.php';
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <br/>

        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="reg_membersTable">
            <th> Supplier_id </th>
            <th> Supplier Name </th>
            <th> Position </th>
            <th> Date Added </th>
            <th> Status </th>
            <th> Details </th>
            <tbody>
                <?php
                $query = mysql_query("SELECT * FROM suppliers") or die(mysql_error());
                while ($row = mysql_fetch_array($query)) {
                    $id = $row['supplier_id'];
                    echo "<tr align='center'>";
                    echo"<td>" . $row['supplier_id'] . "</td>";
                    echo"<td>" . $row['supplier_name'] . "</td>";
                    echo"<td>" . $row['posid'] . "</td>";
                    echo"<td>" . $row['date_added'] . "</td>";
                    echo"<td>" . $row['status'] . "</td>";
                    echo"<td><a href ='view_supplier.php?supplier_id=$id'>View</a>";
                    echo "</tr>";
                }
                mysql_close($connection);
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
