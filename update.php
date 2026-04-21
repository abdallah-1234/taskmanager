<?php
include 'connection.php';

// Get ID from URL
$id = $_GET['id'];

// Fetch existing task
$result = $conn->query("SELECT * FROM tasks WHERE id = $id");
$row = $result->fetch_assoc();

// If form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $status = $_POST['status'];

    $conn->query("UPDATE tasks 
                  SET title='$title', description='$description', status='$status' 
                  WHERE id=$id");

    header("Location: learn.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Task</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex justify-center items-center h-screen">

<div class="bg-white p-6 rounded shadow-md w-96">
    <h2 class="text-xl font-bold mb-4">Update Task</h2>

    <form method="POST">
        
        <input type="text" name="title"
        value="<?php echo htmlspecialchars($row['title']); ?>"
        class="w-full border p-2 mb-3 rounded"
        required>

        <textarea name="description"
        class="w-full border p-2 mb-3 rounded"
        required><?php echo htmlspecialchars($row['description']); ?></textarea>

        <select name="status" class="w-full border p-2 mb-3 rounded">
            <option <?php if($row['status']=='To Do') echo 'selected'; ?>>To Do</option>
            <option <?php if($row['status']=='In Progress') echo 'selected'; ?>>In Progress</option>
            <option <?php if($row['status']=='Done') echo 'selected'; ?>>Done</option>
        </select>

        <button type="submit" 
        class="bg-blue-600 text-white px-4 py-2 rounded w-full">
            Update Task
        </button>

    </form>
</div>

</body>
</html>