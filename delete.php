<?php
include 'connection.php';

$id = $_GET['id'];

$conn->query("DELETE FROM tasks WHERE id = $id");

header("Location: learn.php");
exit();
?>