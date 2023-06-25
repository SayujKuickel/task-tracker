<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/showtask.css">
    <link rel="stylesheet" href="./css/style.css">

</head>

<body>
    <?php
    include 'connect.php';
    include 'header.php';
    ?>
    <main id="body">

        <?php
        $sql = "SELECT * FROM task";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            echo '<div id="tasks-container">';

            while ($row = $result->fetch_assoc()) {
                $taskTitle = $row['title'];
                $taskDate = $row['date'];
                $taskDescription = $row['task'];
                $id = $row['id'];

                echo '<section id="task">';
                echo '    <div>';
                echo '        <h2 class="task-title">' . $taskTitle . '</h2>';
                echo '        <p>' . $taskDescription . '</p>';
                echo '    </div>';
                echo '    <div class="flex-apart">';
                echo '        <span class="date">' . $taskDate . '</span>';
                echo '        <span class="id"> id: ' . $id . '</span>';
                echo '        <a href="remove_task.php?id=' . $id . '">Remove</a>';
                echo '    </div>';
                echo '</section>';
            }

            echo '</div>';
        } else {
            include 'error.php';
        }
        ?>


    </main>
</body>

</html>