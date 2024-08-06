function createTodoList() {
    let todo_list_name = document.getElementById('custom_todo').value;
    let output = document.getElementById('output_name');
    console.log(output);
    console.log(todo_list_name);

    output.innerHTML = todo_list_name;
}

function clearTodoList() {
    console.log("WIP");
}
