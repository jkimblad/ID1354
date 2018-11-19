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
        <?php $current_page = "pancakes";?>
        <ul class="navbar">
            <li class="navbar-item"><a class="navbar-link" href="../index.php">Home</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./calendar.php">Calendar</a></li>
            <li class="navbar-item"><a class="navbar-link" href="./meatballs-recipe.php">Meatballs Recipe</a></li>
            <li class="navbar-item active"><a class="navbar-link" href="./pancakes-recipe.php">Pancakes Recipe</a></li>
            <li class="navbar-item-right"><a class="navbar-link" href="./login_form.php">User</a></li>
        </ul>

        <!--Recipe section-->
        <div class="textbody">

            <!--Recipe image-->
            <h1>Pancakes!</h1>
            <img class="recipe-image" src = "../images/pancakes.jpg" alt = "Picture of pancakes"/>

            <!--Recipe ingredients-->
            <div class="ingredients-list">
                <h2>Ingredients</h2>
                <ul>
                    <li><p>2 1/2dl wheat flour</p></li>
                    <li><p>1/2 tspn salt</p></li>
                    <li><p>6dl milk</p></li>
                    <li><p>3 eggs</p></li>
                    <li><p>3tbsp butter</p></li>
                    <li><p>Jam, fruit or berries for serving</p></li>
                </ul>
            </div>

            <!--Recipe instructions-->
            <div class="instructions-list">
                <h2>Instructions</h2>
                <ul>
                    <li><p>Mix flour and salt. Whisk in half of the milk and keep whisking until you have a smooth batter. Whisk in the rest of the milk and eggs</p></li>
                    <li><p>Melt the butter in a frying pan and whisk into the batter. Fry thin pancakes from the batter in a fryingpan.</p></li>
                    <li><p>Serve together with jam, berries or fruit.</p></li>
                </ul>
            </div>

            <!--Comment section-->
            <div class="comments">
                <h2>Comments</h2>
                <ul>
                    <li class="author"><p><b><u>Author</u>:</b> Nietzshe</p></li>
                    <li class="comment"><p>The pancakes also go great with maple syrup.</p></li>
                    <li class="author"><p><b><u>Author</u>:</b> Locke</p></li>
                    <li class="comment"><p>I like to have my pancakes with ice cream!</p></li>
                </ul>


            </div>


        </div>

    </body>

</html>

