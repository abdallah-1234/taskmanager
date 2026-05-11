<?php

$conn = new mysqli ("localhost", "root", "", "registerdb");

if($conn->connect_error){
    die("connection failed: " . $conn->connect_error);
}
?>