<?php

if (isset($_GET['id'])) {
    include('includes/dbcon.php');

    $id = $_GET['id'];
    $status = 'Confirmed';
    mysql_query("UPDATE catererbookings SET confirmation='$status' WHERE id = $id");
    header("location: sfood.php");
    exit();
}
?>