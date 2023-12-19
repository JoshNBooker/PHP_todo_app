<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $connection = new mysqli("localhost","todo_app");

    if ($connection->connect_error) {
        die("connection failed: ".$connection->connect_error);
    }
    $task = $_POST["task"];
    $sql = "INSERT INTO todos (task) VALUES ('$task')";
    $connection->query($sql);
    $connection->close();
    header("Location: index.php");
    exit();
};
?>