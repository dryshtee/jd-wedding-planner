<?php
//Start session
session_start();
//Check whether the session variable SESS_MEMBER_ID is present or not
if (!isset($_SESSION['supplier_id']) || ($_SESSION['supplier_id'] == '')) {
    header("location: supplier_login.php");
    exit();
}

$session_id=$_SESSION['supplier_id'];
?>