<?php

include_once "templates/head.html";
include_once "templates/navigation.html";
include_once "templates/connect_mysql.php";

echo "<h3>You Do To List</h3>";

$result = mysqli_query($conn, "SELECT * FROM to_do");

echo "<table class='todo-table'>
        <tr>
            <th>To do</th>
            <th>Completed</th>
            <th>Edit</th>
        </tr>
";

// each row from the todo database
while ($row = mysqli_fetch_assoc($result)) {
    // assign the variables
    $name = $row['name'];
    $completed;
    if ($row['completed']) {
        $completed = '<img src="https://img.icons8.com/fluent/20/000000/checked-2.png"/>';
    } else {
        $completed = '<img src="https://img.icons8.com/fluent/20/000000/close-window.png"/>';
    };
    // add data to the row
    echo "<tr>
            <td>$name</td>
            <td class='text-center'>$completed</td>
            <td><img src='https://img.icons8.com/fluent/20/000000/pencil-tip.png'/></td>
         </tr>";
}
echo "</table>";

echo "Seach result: " . mysqli_num_rows($result) . "<br>";
?>
<!-- Adding a todo to the database -->
<div class="justify-content-center row m-0 p-0">
    <div class="col-4">
        <form action="addtodo.php" method="POST">
            <label>To Do</label>
            <input class="form-control" type="text" name="todo">
            <label>Completed</label>
            <input type="checkbox" name="completed">
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>


<?php include_once "templates/footer.html"; ?>