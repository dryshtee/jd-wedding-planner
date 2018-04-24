<?php

if (isset($_GET['id'])) {
    include('includes/dbcon.php');

    $id = $_GET['id'];
    $status = 'Confirmed';
    mysql_query("UPDATE venue4bookings SET confirmation='$status' WHERE id = $id");
    header("location: svenue4.php");
    exit();
}
?>