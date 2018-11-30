<?php

include('../print.php');
if(!isset($_SESSION)){
    session_start();
}

console_log("herro");

$error='';
if (isset($_POST['submit'])) { //Check if we deleted something
    //Connect to our database (server_name, username, password)
    $mysqli = new mysqli("localhost", "root", "", "tasty_recipes");
    //check connection
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $id = $_GET['id'];

    //SQL query to set comment as inactive, not showing it onto the web page
    $query = $mysqli->query("UPDATE Comments SET active = 0 WHERE id = '$id'");
    console_log($query);

    $mysqli->close(); //close database connection
    header("location: " . $_SESSION['recipe_page'] . ".php");
}


?>

