<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jd";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$email = $_POST["email"];
$contact = $_POST["contact"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$date = $_POST["date"];
#check email to prevent duplications
    $check_email = "select * from contact where email='$email'";

    $run = mysqli_query($conn, $check_email);

    if (mysqli_num_rows($run) > 0) {
        echo "<script>alert('Sorry $email, you have already added a message!');document.location='ucontact.php'</script>";
    }
	else{
$sql = "INSERT INTO contact(name, email, contact, subject, message, date_added) 
VALUES ('$name', '$email', '$contact', '$subject', '$message', '$date')";


if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Thank you for dropping us a message!')</script>";
    header("refresh:1;url=ucontact.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
	}

$conn->close();
?>
