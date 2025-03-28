<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Task Manager</title>
</head>

<body>
    <h1>Task Manager</h1>
    <div id="tasks">
        <?php
        require_once "db.php";
        $tasks = Database::getAllTasks();
        foreach ($tasks as $task) {
            echo "<div class='task'>";
            echo "<h3>" . $task["title"] . "</h3>";
            echo "<p>" . $task["description"] . "</p>";
            echo "<span class='status " . $task["status"] . "'>" . $task["status"] . "</span>";
            echo "</div>";
        };
        ?>
    </div>
</body>

</html>