<?php
include('session.php');
?>

<!DOCTYPE html>
<html lang=en>
    <head>
        <title> Tasty recipes </title>
        <link href="../css/reset.css", rel="stylesheet", type="text/css">
        <link href="../css/mystyles.css", rel="stylesheet", type="text/css">
    </head>

    <body>

        <!--Navigation bar-->
        <ul class="navbar">
            <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./calendar.php">Calendar</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./meatballs-recipe.php">Meatballs Recipe</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./pancakes-recipe.php">Pancakes Recipe</a></li>
            <li class="navbar-item-right"><a class="navbar-link active" href="./login_form.php">User</a></li>
        </ul>

        <!-- Text body-->   
        <div class="textbody">
            <h1>Hello!</h1>

            <p id=welcome>Welcome : <i><?php echo $login_session; ?></i></p>
            <p class="button"><a href="logout.php">Log out</a><p>
        </div>
    </body>

</html>
