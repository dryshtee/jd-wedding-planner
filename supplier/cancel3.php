<?php

if (isset($_GET['id'])) {
    include('includes/dbcon.php');

    $id = $_GET['id'];
    $status = 'Cancelled';
    mysql_query("UPDATE kvsbookings SET confirmation='$status' WHERE id = $id");
    header("location: srusticplanner.php");
    exit();
}
?>