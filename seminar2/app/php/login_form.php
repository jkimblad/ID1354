<?php
    include('login.php'); //Include login script
    
    if(isset($_SESSION['login_user'])) { //Check if user is logged in
        header("location: profile.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <!--Page title-->
        <title>Tasty recipes</title>
        <!--Reset style sheet-->
        <link rel = "stylesheet" type = "text/css" href = "../css/reset.css">
        <!--Default style sheet-->
        <link rel = "stylesheet" type = "text/css" href = "../css/mystyles.css">
    </head>

    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./calendar.php">Calendar</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./meatballs-recipe.php">Meatballs Recipe</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./pancakes-recipe.php">Pancakes Recipe</a></li>
            <li class="navbar-item-right"><a class="navbar-link active" href="./login_form.php">User</a></li>

        </ul>

        <div class="textbody">
            <h1>Login</h1>
            <form id="login" action="login.php" method="post" accept-charset='UTF-8'>
                <fieldset>
                    <p class="button-text">First name:</p><br>
                    <input type="text" name="username" id="username" maxlength="50" placeholder="Username"><br>
                    <p class="button-text">Password:</p><br>
                    <input type="password" name="password" id="password" maxlength="50" placeholder="**********"><br>
                    <p><?php echo $error; ?></p>
                    <div class="login-buttons">
                        <input class="button" name="submit" type="submit" value=" Login ">
                        <input class="button" name="cancel" type="submit" value=" Cancel ">
                    </div>
                </fieldset>
            </form>
        </div>
    </body>

</html>
