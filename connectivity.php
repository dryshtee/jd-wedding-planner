<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'jd');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());
$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error());

/*
 $ID = $_POST['user']; 
$Password = $_POST['pass']; 
*/

function SignIn()
{
session_start(); //starting the session for user profile page
if(!empty($_POST['Email'])) //checking the 'user' name which is from signup.php, is it empty or have some text
 {
$query = mysqli_query("SELECT * FROM users where email = '$_POST[Email]' AND password = '$_POST[Password]'") or die(mysqli_error());
$row = mysqli_fetch_array($query) or die(mysqli_error());
if(!empty($row['Email']) AND !empty($row['Password']))
{
$_SESSION['Email'] = $row['email'];
echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";
header("Location: contact.php");
}
else
{
echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
 }
}
}
if(isset($_POST['submit']))
{
	SignIn();
}

?>




