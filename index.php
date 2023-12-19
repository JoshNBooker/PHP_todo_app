<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Josh's Diary</title>
</head>
<body>
    <h1 id="title">My To-Dos!</h1>
    <form action="add.php" method="post">
        <label for="task">New Task:</label>
        <input type="text" name="task" id="task" required/>
        <button type="submit">Add Task</button>
    </form>
    <h2>Tasks:</h2>
    <ul>
    </ul>
</body>
</html>