<?php

if (isset($_GET['id'])) {
    include('includes/dbcon.php');

    $id = $_GET['id'];
    $status = 'Cancelled';
    mysql_query("UPDATE carsbookings SET confirmation='$status' WHERE id = $id");
    header("location: stransport.php");
    exit();
}
?>