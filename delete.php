<?php
if (isset($_GET["id"])) {
    $connection = new mysqli("localhost", "todo_app");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $task_id = $_GET["id"];
    $sql = "DELETE FROM todos WHERE id=$taskId";
    $conn->query($sql);
    $conn->close();
    header("Location: index.php");
    exit();
}
?>