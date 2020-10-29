<?php

include_once "templates/head.html";
include_once "templates/navigation.html"; 
include_once "templates/connect_mysql.php"; 

echo "<h3>You Do To List</h3>";

$result = mysqli_query($conn, "SELECT * FROM to_do");

echo "<table class='todo-table'>";
// each row from the todo database
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>";
    echo $row['name'];
    echo "</td><td>";
    if ($row['completed']) {
        echo "Completed";
    } else {
        echo "To Do";
    };
    echo "</td></tr>";
}
echo "</table>";

echo "Seach result: " . mysqli_num_rows($result) . "<br>";

// Adding data to the to do list.

include_once "templates/footer.html"; 