<!DOCTYPE html>
<html>
  <head>
    <title>My task manager</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <section class=" bg-gray-200 font-bold">
        <h1 class="text-blue-600 text-4xl pt-6 pl-10">Task management</h1>
        <h3 class="text-green-700 text-2xl pl-12">welcome</h3>
      </section>

      <section class="bg-green-600 font-bold text-center">
        <h1 class="text-5xl text-white pt-5">about tasks</h1>
        <div class="grid max-w-6xl mx-auto text-green-800 grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 px-6 py-10 ">
          <div class="bg-gray-200 rounded-lg shadow-md hover:shadow-lg p-2">
            <h2 class="text-2xl">management</h2>
            <p class="text-left">this ensure all tasks are conducted in the proper way as it has been arranged in all issues occured</p>
          </div>
          <div class="bg-gray-200 rounded-lg shadow-md hover:shadow-lg p-2">
            <h2 class="text-2xl">Task addition</h2>
            <p class="text-left">This concern with the addition of the new tasks in the system that is needed to be conducted</p>
          </div>
          <div class="bg-gray-200 rounded-lg shadow-md hover:shadow-lg p-2">
            <h2 class="text-2xl">delete tasks</h2>
            <p class="text-left">for the completed tasks the must be removed in the system in order to allow new tasks to enter for excution</p>
          </div>
        </div>
    </section>

  <h1 class="text-3xl font-bold text-center text-blue-600 mb-6">Task Manager</h1>

  <!-- Task Form -->
   <form action="add_task.php" method="POST">
  <div class="max-w-xl mx-auto mb-6 flex flex-col gap-2">
    <input type="text" name="title" placeholder="Task Title"
           class="p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    <input type="text" name="description" placeholder="Task Description"
           class="p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    <input type="date" name="task_date"
           class="p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
    <select name="status" class="p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-400">
      <option value="To Do">To Do</option>
      <option value="In Progress">In Progress</option>
      <option value="Done">Done</option>
    </select>
    <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600 mt-2">Add Task</button>
  </div>
  
  </form>

  <!-- Notification -->
  <div id="message" class="max-w-xl mx-auto text-center text-white font-semibold mb-4"></div>

  <!-- Task List -->
  <div id="tasks">
  <?php include 'fetch_task.php'; ?>
</div>

<script>
function deleteTask(id) {
    if (confirm("Are you sure you want to delete this task?")) {
        window.location.href = "delete.php?id=" + id;
    }
}

function updateTask(id) {
    window.location.href = "update.php?id=" + id;
}
</script>
  </body>
</html>