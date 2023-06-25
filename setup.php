<?php

// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE DATABASE IF NOT EXISTS task";
    $conn->exec($sql);
    echo "Database 'task' created successfully<br>";

    $conn->exec("USE task");

    $sql = "CREATE TABLE IF NOT EXISTS `task` (
                `id` int(20) NOT NULL AUTO_INCREMENT,
                `title` varchar(50) NOT NULL,
                `date` date NOT NULL,
                `task` varchar(500) NOT NULL,
                PRIMARY KEY (`id`)
            )";
    $conn->exec($sql);
    echo "Table 'task' created successfully<br>";
    header('location: index.php');
} catch (PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

?>