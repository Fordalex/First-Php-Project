<?php

include_once "templates/head.html";
include_once "templates/navigation.html";
include_once "templates/connect_mysql.php";

echo "<h3>You Do To List</h3>";

$result = mysqli_query($conn, "SELECT * FROM to_do");
?>
<div class="justify-content-center row m-0 p-0">
    <div class="col-4 m-0 p-0">
    <?php
    if ($result) {
        echo "<table class='todo-table'>
        <tr>
            <th>To do</th>
            <th>Completed</th>
            <th>Toggle</th>
        </tr>
";

        // each row from the todo database
        while ($row = mysqli_fetch_assoc($result)) {
            // assign the variables
            $id = $row["id"];
            $name = $row['name'];
            $completedIcon;
            $completed = $row['completed'];
            if ($completed) {
                $completedIcon = '<img src="https://img.icons8.com/fluent/20/000000/checked-2.png"/>';
            } else {
                $completedIcon = '<img src="https://img.icons8.com/fluent/20/000000/close-window.png"/>';
            };
            // add data to the row
            echo "<tr>
                    <td>$name</td>
                    <td class='text-center'>$completedIcon</td>
                    <td class='text-center'>
                        <a href='templates/todoform.php?oper=toggle&id=$id&completed=$completed'>
                            <img src='https://img.icons8.com/fluent/20/000000/change.png'/>
                        </a>
                    </td>
                </tr>";
        }
        echo "</table>";

        echo "Seach result: " . mysqli_num_rows($result) . "<br>";
       
        } else {
            echo "<p>There is nothing to do!</p>";
        }
        ?>
    </div>
</div>

<!-- Adding a todo to the database -->
<div class="justify-content-center row m-0 p-0 mt-4">
    <div class="col-4">
        <form action="templates/todoform.php" method="POST">
            <label>To Do</label>
            <input class="form-control" type="text" name="todo">
            <label>Completed</label>
            <input type="checkbox" name="completed">
            <button type="submit" class="btn btn-dark">Submit</button>
        </form>
    </div>
</div>


<?php include_once "templates/footer.html"; ?>