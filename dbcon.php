<?php

$connection = mysql_connect("localhost", "root", "");
$db = mysql_select_db("jd", $connection);

session_start();
$email = $_SESSION['email'];

$ses_sql = mysql_query("select email from users where email='$email'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session = $row['email'];
if (!isset($login_session)) {
    mysql_close($connection);
    header('Location: login.php');
}
?>