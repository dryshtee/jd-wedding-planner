<?php

if (isset($_GET['id'])) {
    include('includes/dbcon.php');

    $id = $_GET['id'];
    $status = 'Cancelled';
    mysql_query("UPDATE longbeachbookings SET confirmation='$status' WHERE id = $id");
    header("location: svenue2.php");
    exit();
}
?>