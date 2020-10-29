<?php 

include_once 'connect_mysql.php';

// Get the data from the form
$todo = $_POST['todo'];
$completed = $_POST['completed'];
if ($completed == 'on') {
    $completed = 1;
} else {
    $completed = 0;
}
$oper = $_POST['oper'];


// Create, update and delete data from the database.
if ($oper == 'add') {
    mysqli_query($conn, "INSERT INTO to_do (`name`, `completed`) VALUES ('$todo',$completed)") or die('There was a problem submitting the form!');
} elseif ($oper == 'toggle') {
    mysqli_query($conn, "INSERT INTO to_do (`name`, `completed`) VALUES ('$todo',$completed)") or die('There was a problem submitting the form!');
}


// Redriect the user back to the todo page
header("Location: ../todo.php");