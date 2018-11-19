<?php
session_start(); //Start session
$error='';
if (isset($_POST['submit'])) { //Check if we submited a post
    if(empty($_POST['username'])) {
        $error = "Username is not set";
    }
    else if (empty($_POST['password'])) {
        $error = "Password is not set";
    }
    else {
        //Save login credentials
        $username = $_POST['username'];
        $password = $_POST['password'];

        //Connect to our database (server_name, username, password)
        $mysqli = new mysqli("localhost", "root", "", "tasty_recipes");
        //check connection
        if ($mysqli->connect_errno) {
            printf("Connect failed: %s\n", $mysqli->connect_error);
            exit();
        }

        //Injection protection
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);

        //Select database
        //SQL query to find if credentials exist
        $result = $mysqli->query("select * from Users where password='$password' AND username='$username'");

        //Check if we have a match in database
        if($result->num_rows == 1) {
            //Init session
            $_SESSION['login_user'] = $username;
            header("location: profile.php"); //Redirect
        } else {
            $error = "Username of password is invalid";
        }
        $mysqli->close(); //close database connection
    }
    header("location: login_form.php");
}

if (isset($_POST['cancel'])) { //Check if we cancelled
    header("location: login_form.php");
}

?>

