<?php

require('../print.php');

session_start(); //Start session

$current_page = strtolower(ucwords(str_ireplace(array('','.php'),array('\'', ''),basename($_SERVER['PHP_SELF']))));

console_log("firing");

$error='';
if (isset($_POST['comment'])) { //Check if we submited an unempty post
    console_log($current_page);
    //Connect to our database (server_name, username, password)
    $mysqli = new mysqli("localhost", "root", "", "tasty_recipes");
    //check connection
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $subject = $mysqli->real_escape_string($_POST['subject']);
    $username = $_SESSION['login_user'];

    console_log($username);

    //Select database
    //SQL query to find if credentials exist
    $query = $mysqli->query("INSERT INTO comments (comment, commenter, recipe) VALUES ('$subject', '$username', '$current_page')");

    $mysqli->close(); //close database connection
    header("location: $current_page".".php");
}


?>

