<?php

include('../print.php');
//require('session.php');
//
if(!isset($_SESSION)){
    session_start();
}

$error='';
if (isset($_POST['submit'])) { //Check if we submitted a comment
    //Connect to our database (server_name, username, password)
    $mysqli = new mysqli("localhost", "root", "", "tasty_recipes");
    //check connection
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $subject = $mysqli->real_escape_string($_POST['comment']);
    $username = $_SESSION['login_user'];
    $recipe = $_SESSION['recipe_page'];

    //SQL query to find if credentials exist
    $query = $mysqli->query("INSERT INTO Comments (comment, commenter, recipe) VALUES ('$subject', '$username', '$recipe')");

    $mysqli->close(); //close database connection
    header("location: $recipe".".php");
}


?>

