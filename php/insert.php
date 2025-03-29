<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'] ?? '';
    $description = $_POST['description'] ?? '';
    $due_date = $_POST['due_date'] ?? '';

    if (!empty($title) && !empty($due_date)) {
        Database::insertTask($title, $description, $due_date);
        header("Location: index.php");
        exit;
    } else {
        echo "Make sure you have a title and a due date!";
    }
}
