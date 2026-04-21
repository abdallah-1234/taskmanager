<?php
include 'connection.php';

$result = $conn->query("SELECT * FROM tasks ORDER BY task_date ASC");

while ($row = $result->fetch_assoc()) {
    
$statusClass = "";
    if($row['status'] === 'To Do') $statusClass = "bg-yellow-200 text-yellow-800";
    elseif($row['status'] === 'In Progress') $statusClass = "bg-blue-200 text-blue-800";
    elseif($row['status'] === 'Done') $statusClass = "bg-green-200 text-green-800";

    echo "<div class='bg-white shadow-md rounded-lg p-4 flex flex-col gap-2'>";

    echo "<div class='flex'>";
    echo "<h3 class='text-2xl font-bold text-green-700'>" . htmlspecialchars($row['title']) . "</h3>";
    echo "<button onclick='deleteTask(" . $row['id'] . ")' class='bg-green-500 text-black px-2 py-1 rounded text-sm ml-6'>delete</button>";
    echo "<button onclick='updateTask(" . $row['id'] . ")' 
    class='bg-green-500 text-black px-2 py-1 rounded text-sm ml-4'>update</button>";
    echo "</div>";

    echo "<p class='text-gray-700'>" . htmlspecialchars($row['description']) . "</p>";
    echo "<div class='flex justify-between items-center'>";
    echo "<small class='text-green-500'>" . htmlspecialchars($row['task_date']) . "</small>";
    echo "<span class='px-2 py-1 rounded-full text-sm font-semibold $statusClass'>" . htmlspecialchars($row['status']) . "</span>";
    echo "</div>";
    echo "</div>";
}
$conn->close();
?>