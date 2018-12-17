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
                    <?php foreach($comments as $comment) : ?>
                        

                    <?php endforeach; ?>
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


