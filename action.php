<?php
 
error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'newconnection.php';

$username = $_POST['uname'];
$email    = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (username, email, pasword)
VALUES('$username', '$email', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "data inserted successfuly";
} else {
    echo  "Data not inserted";

}
?>