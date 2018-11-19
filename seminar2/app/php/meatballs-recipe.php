<?php
    require('submit-comment.php'); //Include login script
    $current_page = "meatballs";
    
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
                    <li class="author"><p><b><u>Author</u>:</b> Descartes</p></li>
                    <li class="comment"><p>A good idea would be to mix the meatballs into some type of tomato sauce.</p></li>
                    <li class="author"><p><b><u>Author</u>:</b> Kant</p></li>
                    <li class="comment"><p>I feel as though this goes great with some mashed potatoes!</p></li>
                </ul>

            </div>
            <div class="comment-submit">
                <h2>Submit comment</h2>
                <textarea rows="4" cols="80">
                </textarea>
                <input class="button comment-button" name="comment" type="submit" value="Submit comment">
            </div>


        </div>

    </body>




</html>

