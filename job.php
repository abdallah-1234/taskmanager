<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Task Manager</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Task Manager</h2>

<form method="POST">
    <input type="text" name="task" placeholder="Enter task" required>
    <button type="submit" name="add">Add</button>
</form>

<ul>
<?php
// Add task
if (isset($_POST['add'])) {
    $task = $_POST['task'];
    $conn->query("INSERT INTO tasks (title) VALUES ('$task')");
}

// Fetch tasks
$result = $conn->query("SELECT * FROM tasks");

while ($row = $result->fetch_assoc()) {
    echo "<li>" . $row['title'] . "</li>";
}
?>
</ul>

</body>
</html>