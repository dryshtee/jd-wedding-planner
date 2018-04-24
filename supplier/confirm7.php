<?php

if (isset($_GET['id'])) {
    include('includes/dbcon.php');

    $id = $_GET['id'];
    $status = 'Confirmed';
    mysql_query("UPDATE venue3bookings SET confirmation='$status' WHERE id = $id");
    header("location: svenue3.php");
    exit();
}
?>