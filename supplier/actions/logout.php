<?php

session_start();
if (session_destroy()) {
    header("Location: ../supplier_login.php");
}
?>