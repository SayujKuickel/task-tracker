<?php
include 'connect.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM task WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Task removed successfully";
    } else {
        echo "Error: " . $conn->error;
    }
}

header("Location: tasks.php");
exit();
?>