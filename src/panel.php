<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/default.css">
    <script src="../assets/js/todo.js"></script>
    <title>My Dashboard</title>
</head>
<body>
    <h2>Welcome to ur dashboard</h2>

    <form action="" method="POST">
        <p>enter the name of ur todo list : </p>
        <input type="text" name="todo_name" id="custom_todo">
        <button type="submit" name="create_button" onclick="createTodoList()">Create your to-do list</button>
        <button type="submit" name="clear_button" onclick="clearTodoList()">Clear your to-do list</button>
    </form>
    <div class="container">
        <p id="output_name"></p>
    </div>
</body>
</html>
