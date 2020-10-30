<!DOCTYPE html>
<html lang="en">


<?php

include_once "templates/head.html";
include_once "templates/navigation.html";
include_once "templates/connect_mysql.php";

$result = mysqli_query($conn, "SELECT * FROM to_do");
?>

<h3>Your Do To List</h3>
<div class="justify-content-center row m-0 p-0">
    <div class="col-4 m-0 p-0">

        <!-- Using a while loop to append the data to the form -->
        <table class='todo-table'>
            <tr>
                <th>To do</th>
                <th>Completed</th>
                <th>Toggle</th>
                <th>Remove</th>
            </tr>
            <?php
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
                    <td class='text-center'>
                        <a href='templates/todoform.php?oper=remove&id=$id'>
                            <img src='https://img.icons8.com/fluent/20/000000/delete-forever.png'/>
                        </a>
                    </td>
                </tr>";
            }
            echo "</table>";
            echo "Seach result: " . mysqli_num_rows($result) . "<br>";
            ?>
            <!-- Using a class to style and append the data using a foreach loop -->
            <table class='todo-table'>
                <tr>
                    <th>To do</th>
                    <th>Completed</th>
                    <th>Toggle</th>
                    <th>Remove</th>
                </tr>
                <?php
                class Row
                {
                    // Properties
                    public $name;
                    public $id;
                    public $completed;
                    // Method
                    function set_properties($name, $id, $completed)
                    {
                        $this->name = $name;
                        $this->id = $id;
                        $this->completed = $completed;
                    }
                    function create_row()
                    {
                        $name = $this->name;
                        $id = $this->id;
                        $completed = $this->completed;
                        if ($completed) {
                            $completedIcon = '<img src="https://img.icons8.com/fluent/20/000000/checked-2.png"/>';
                        } else {
                            $completedIcon = '<img src="https://img.icons8.com/fluent/20/000000/close-window.png"/>';
                        };
                        return "<tr>
                                <td>$name</td>
                                <td class='text-center'>$completedIcon</td>
                                <td class='text-center'>
                                    <a href='templates/todoform.php?oper=toggle&id=$id&completed=$completed'>
                                        <img src='https://img.icons8.com/fluent/20/000000/change.png'/>
                                    </a>
                                </td>
                                <td class='text-center'>
                                    <a href='templates/todoform.php?oper=remove&id=$id'>
                                        <img src='https://img.icons8.com/fluent/20/000000/delete-forever.png'/>
                                    </a>
                                </td>
                            </tr>";
                    }
                }
                // Create a row in the table.
                foreach ($result as $todo) {
                    $row = new Row();
                    $row->set_properties($todo['name'], $todo['id'], $todo['completed']);
                    echo $row->create_row();
                }
                // show search results
                echo "</table>";
                echo "Seach result: " . mysqli_num_rows($result) . "<br>";
                ?>
            <!-- Using a foreach loop and a function to create the row form the data -->
            <table class='todo-table'>
                <tr>
                    <th>To do</th>
                    <th>Completed</th>
                    <th>Toggle</th>
                    <th>Remove</th>
                </tr>
            <?php
               include_once 'functions/functions.php';
               foreach ($result as $todo) {
                   create_row($todo['name'], $todo['id'], $todo['completed']);
               }
               // show search results
               echo "</table>";
               echo "Seach result: " . mysqli_num_rows($result) . "<br>";
            ?>

    </div>

    <!-- Adding a todo to the database -->
    <div class="col-4">
        <form action="templates/todoform.php" method="POST">
            <label>To Do</label>
            <input class="form-control mb-3" type="text" name="todo">
            <label>Completed</label>
            <input type="checkbox" name="completed">
            <button type="submit" class="btn btn-dark float-right">Submit</button>
        </form>
    </div>
</div>


<?php include_once "templates/footer.html"; ?>

</body>

</html>