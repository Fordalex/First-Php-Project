<?php

include_once "templates/head.html";
include_once "templates/navigation.html"; 
include_once "templates/connect_mysql.php"; 

echo "<h3>You Do To List</h3>";

$result = mysqli_query($conn, "SELECT * FROM to_do");

echo mysqli_num_rows($result) . "<br>";

while ($row = mysqli_fetch_assoc($result)) {
    echo $row['name'] . "<br>";
}

include_once "templates/footer.html"; 