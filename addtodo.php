<?php 

include_once 'templates/connect_mysql.php';

$todo = $_POST['todo'];
$completed = $_POST['completed'];
if ($completed == 'on') {
    $completed = 1;
} else {
    $completed = 0;
}

mysqli_query($conn, "INSERT INTO to_do (`name`, `completed`) VALUES ('$todo',$completed)") or die('There was a problem submitting the form!');

header("Location: todo.php");