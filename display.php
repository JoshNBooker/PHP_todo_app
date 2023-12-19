<?php
$connection = new mysqli("localhost", "todo_app");
if ($connection->connect_error) {
    die("connection failed: ".$connection->connect_error);
}
$sql = "SELECT * FROM todos";
$result = $connection->query($sql);
while ($row = $result->fetch_assoc()) {
    $taskId = $row["id"];
    $taskName = $row["task"];
    $completed = $row["completed"] ? "checked" : "";
}
echo "<li>
        <input type='checkbox' $completed>
        $taskName
        <a href='delete.php?id=$taskId'>Delete</a>
    </li>";
$connection->close();
?>