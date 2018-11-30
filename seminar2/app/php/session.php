<?php

//Establish connection with sql server
$mysqli = new mysqli("localhost", "root", "", "tasty_recipes");

//Start session
if(!isset($_SESSION)){
    session_start();
}

//Storing session
$user_check=$_SESSION['login_user'];
//SQL query to fetch complete information of user
$ses_res = $mysqli->query("select username from Users where username='$user_check'");
$row = $ses_res->fetch_assoc();
//Save logged in user in variable for show at page
$login_session = $row['username'];
if(!isset($login_session)) {
    $mysqli->close();
    header('Location: ../index.php');
}
?>

