<?php
    if(!isset($_SESSION)){
        session_start();
    }
    include('submit-comment.php'); //Include login script
    //include('login.php'); //Include login script
    $_SESSION['recipe_page'] = "meatballs-recipe";

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

    <!--Navigation bar-->
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./calendar.php">Calendar</a></li>
            <li class="navbar-item active"><a class="navbar-link" href="./meatballs-recipe.php">Meatballs Recipe</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./pancakes-recipe.php">Pancakes Recipe</a></li>
            <li class="navbar-item-right"><a class="navbar-link" href="./login_form.php">User</a></li>
        </ul>

        <!--Recipe section-->
        <div class="textbody">

            <!--Recipe image-->
            <h1>Meatballs!</h1>
            <img class="recipe-image" src = "../images/meatballs.jpg" alt = "Picture of meatballs"/>

            <!--Recipe ingredients-->
            <div class="ingredients-list">
                <h2>Ingredients</h2>
                <ul>
                    <li><p>1dl milk</p></li>
                    <li><p>2tbsp breadcrumbs</p></li>
                    <li><p>500g ground meat</p></li>
                    <li><p>1 chopped onion</p></li>
                    <li><p>1 egg</p></li>
                    <li><p>1/2tspn ground black pepper</p></li>
                    <li><p>1 1/2tspn salt</p></li>
                    <li><p>Oil for frying</p></li>
                </ul>
            </div>

            <!--Recipe instructions-->
            <div class="instructions-list">
                <h2>Instructions</h2>
                <ul>
                    <li><p>Mix milk and bread crumbs and let cool for 3 minutes.</p></li>
                    <li><p>Mix meat, onions, egg, blackpepper and salt with the milk and bread crumbs mixture.</p></li>
                    <li><p>Form large meatballs from the mixture, about 12 of them.</p></li>
                    <li><p>Fry the meatballs in a frying pan in the oil until they are golden brown.</p></li>
                </ul>
            </div>

            <!--Comment section-->
            <div class="comments">
                <h2>Comments</h2>
                <ul>
                    <?php
                        //Connect to our database (server_name, username, password)
                        $mysqli = new mysqli("localhost", "root", "", "tasty_recipes");
                        //check connection
                        if ($mysqli->connect_errno) {
                            printf("Connect failed: %s\n", $mysqli->connect_error);
                            exit();
                        }
                        $recipe_page = $_SESSION["recipe_page"];
                        $result =  $mysqli->query("SELECT recipe, commenter, comment, id, active FROM Comments WHERE recipe = '$recipe_page'");
                        //Iterate through all comments in the database
                        while($row = $result->fetch_assoc()){
                            //Check if comment is deleted
                            if($row["active"] == 1){
                                echo <<<EOF
                                        <li class="author"><p><b><u>Author</u>:</b> {$row["commenter"]}</p></li>
                                        <li class="comment"><p>{$row["comment"]}</p></li>
EOF;
                                //Check if commenter is user, which allows them to delete it
                                if(isset($_SESSION['login_user']) && $row["commenter"] == $_SESSION['login_user']) {
                                    echo <<<EOF
                                            <form id="delete-comment" action="delete-comment.php?id={$row['id']}" method="post" accept-charset='UTF-8'>
                                                <input class="delete-comment-button" name="submit" type="submit" value="Delete">
                                            </form>
EOF;
                                }
                            }
                            
                        }

                        $mysqli->close();

                    ?>
                </ul>

            </div>
            <div class="comment-submit">
                <?php
                    
                    if(isset($_SESSION['login_user'])) { //Check if user is logged in
                        echo <<<EOC
                                <h2>Submit comment</h2>
                                <form id="comment-submit" action="submit-comment.php" method="post" accept-charset='UTF-8'>
                                    <textarea rows="4" cols="80" name="comment"></textarea>
                                    <input class="button comment-button" name="submit" type="submit" value="Submit comment">
                                </form>
EOC;
                        //Check if logged in user is writer of comment, allowing him/her to delete 
                    }

                ?>
            </div>


        </div>

    </body>

</html>

