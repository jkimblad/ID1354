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
    <ul>
        <?php foreach($comments as $comment): 
            if($comment['recipe'] == 'meatballs-recipe'): ?>
                <li class="author"><p><b><u>Author</u>:</b> <?php echo $comment['commenter'];?></p></li>
                <li class="comment"><p><?php echo $comment['comment'];?></p></li>
                <?php if($this->session->userdata('username') == $comment['commenter']): ?>
                    <?php echo form_open('/comments/delete/'.$comment['id']); ?>
                        <button type="submit" value="delete" class="button comment-button">Delete comment</button>
                    <?php echo form_close(); ?>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; ?>
    </ul>

</div>
<?php if($this->session->userdata('logged_in')): ?>
    <div class="comment-submit">
        <h2>Submit comment</h2>
        <?php echo validation_errors(); ?>
        <?php echo form_open('comments/create'); ?>
            <textarea rows="4" cols="80" name="comment"></textarea>
            <input type="hidden" name="page" value="meatballs-recipe">
            <button type="submit" class="button comment-button">Submit comment</button>
        <?php echo form_close(); ?>
    </div>
<?php endif; ?>


