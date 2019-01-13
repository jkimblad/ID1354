<!--Recipe image-->
<h1>Pancakes!</h1>
<img class="recipe-image" src = "<?php echo base_url();?>../assets/images/pancakes.jpg" alt = "Picture of pancakes"/>

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
    <ul id="comment-list">
    </ul>
</div>

<!--Add new comment-->
<?php if($this->session->userdata('logged_in')): ?>
    <div class="comment-submit">
        <h2>Submit comment</h2>
            <textarea id="comment-text" rows="4" cols="80" name="comment"></textarea>
            <button id="comment-submit-button" type="submit" class="button comment-button">Submit comment</button>
    </div>
<?php endif; ?>

