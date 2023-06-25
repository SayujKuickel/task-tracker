<?php
include '../connect.php';
$sql1 = "DROP TABLE IF EXISTS `task`";

$sql2 = "
CREATE TABLE IF NOT EXISTS `task` (
  `id` int(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `task` varchar(500) NOT NULL
)";



$conn->query($sql1);
$conn->query($sql2);

header("Location: ../index.php");


?>