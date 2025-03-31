<?php
require_once 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    $data = json_decode(file_get_contents("php://input"), true);
    $id = $data['id'] ?? '';

    if (!empty($id)) {
        Database::deleteTask($id);
    } else {
        echo "Make sure you have added an id!";
    }
}
