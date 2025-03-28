<?php
require_once 'db.php';

$tasks = Database::getAllTasks();
// Display results
echo "<pre>"; // Format output for better readability
print_r($tasks);
echo "</pre>";
