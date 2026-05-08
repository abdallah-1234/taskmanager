<?php

$conn = new mysqli("localhost", "root", "", "trydb");

if ($conn->connect_error){
    echo "failed to connect to the database" . $conn->connect_error;
} else {
    echo " connected successfuly";
}
?>