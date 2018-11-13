<?php
function login() {
    echo "<script>console.log('Hey!');</script>";
    if(empty($_POST['username'])) {
        $this->HandleError("Username is empty!");
        return false;
    }
    if(empty($_POST['password'])) {
        $this->HandleError("password is empty!");
        return false;
    }

    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    if(!$this->CheckLoginInFile($username, $password)){
        return false;
    }

    session_start();

    $_SESSION[$this->GetLoginSessionVar()] = $username;
    
    return true;

}


?>
