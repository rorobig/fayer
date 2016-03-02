<?php
$servername = "localhost";
$username = "roro";
$password = "kwidama";
$dbname = "fayer_db";


$country = $_POST['Country'];
$firstName = $_POST['FirstName'];
$lastName = $_POST['LastName'];
$email = $_POST['Email'];
$phone = $_POST['Phone'];

// echo "$country -- $firstName -- $lastName -- $email -- $phone";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 



$sql = "INSERT INTO forum (forum_id, forum_fn, forum_ln, forum_email ,forum_country, forum_phone)
VALUES (null,'$firstName', '$lastName', '$email' ,'$country', '$phone')";





if ($conn->query($sql) === TRUE) {
    echo "Your record has been created succesfully. We will contact you as soon as posible.";
  header("Refresh: 1;url=../programs.php");


} else {


    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


exit;


