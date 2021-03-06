<!--Recipe image-->
<h1>Meatballs!</h1>
<img class="recipe-image" src = "<?php echo base_url();?>../assets/images/meatballs.jpg" alt = "Picture of meatballs"/>

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
    <ul id="comment-list">
    </ul>
</div>

<?php if($this->session->userdata('logged_in')): ?>
    <div class="comment-submit">
        <h2>Submit comment</h2>
            <textarea id="comment-text" rows="4" cols="80" name="comment"></textarea>
            <button id="comment-submit-button" type="submit" class="button comment-button">Submit comment</button>
    </div>
<?php endif; ?>


