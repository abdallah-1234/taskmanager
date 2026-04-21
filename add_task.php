

<?php

include 'connection.php';

$title = $_POST['title'];
$description = $_POST['description'];
$task_date = $_POST['task_date'];
$status = $_POST['status'];

$sql = "INSERT INTO tasks(title, description, task_date, status )
       VALUES('$title', '$description', '$task_date', '$status')";

if($conn->query($sql) === TRUE) {
    header("Location: learn.php");
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>