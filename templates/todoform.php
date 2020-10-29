<?php 

include_once 'connect_mysql.php';

// Get the data from the form

if (isset($_GET['oper'])) {
    $oper = $_GET['oper'];
    $id = $_GET['id'];
    if (isset($_GET['completed'])) {
        $completed = $_GET['completed'];
    }
} else {
    $todo = $_POST['todo'];
    $completed = $_POST['completed'];
    if ($completed == 'on') {
        $completed = 1;
    } else {
        $completed = 0;
    };
};
echo $id . $oper;

// Create, update and delete data from the database.
if ($oper == 'toggle') {
   
    if ($completed) {
        $completed = 0;
    } else {
        $completed = 1;
    };
    mysqli_query($conn, "UPDATE `to_do` SET `completed`=$completed WHERE id=$id") or die('There was a problem updaing the data!');
} elseif ($oper == 'remove') {
    mysqli_query($conn, "DELETE FROM `to_do` WHERE id=$id");
} else {
    mysqli_query($conn, "INSERT INTO to_do (`name`, `completed`) VALUES ('$todo',$completed)") or die('There was a problem submitting the form!');
};


// Redriect the user back to the todo page
header("Location: ../todo.php");