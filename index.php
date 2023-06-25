<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>

    <style>
        #body {
            margin: 0;
            display: grid;
            place-items: center;
        }
    </style>
</head>

<body>
    <?php
    include 'connect.php';
    include 'header.php';
    ?>
    <div id="body" class="index">
        <form method="post">
            <input type="text" name="taskTitle" id="taskTitle" placeholder="Task Title">
            <input type="date" name="taskDate" id="date">
            <textarea name="taskDesc" id="taskDesc" cols="30" rows="10" placeholder="Write your task"
                style="resize: none;"></textarea>

            <!-- <input name="submitButton" type="submit" value="Submit" /> -->
            <button name="submitButton" type="submit">Submit</button>
        </form>
    </div>
    <?php
    if (isset($_POST['submitButton'])) {

        $taskTitle = $_POST['taskTitle'];
        $taskDate = $_POST['taskDate'];
        $taskDescription = $_POST['taskDesc'];

        if (!empty($taskTitle) && !empty($taskDate) && !empty($taskDescription)) {
            $sql = "INSERT INTO `task`(`title`, `date`, `task`, `id`) VALUES ('$taskTitle','$taskDate','$taskDescription','')";

            $r = $conn->query($sql);

            if ($r) {
                echo '<script>alert("Task Added");</script>';
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        } else {
            echo '<script>alert("One or more fields are empty.");</script>';
        }
    }

    ?>
</body>

</html>