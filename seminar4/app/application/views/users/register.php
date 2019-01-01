<h1><?= $title; ?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <div>
        <p>Username</p>
        <input type="text" name="username" placeholder="Username">
    </div>
    <div>
        <p>Password</p>
        <input type="password" name="password" placeholder="Password">
    </div>
    
    <button type="submit" class="button comment-button">Register</button>

    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p>'.$this->session->flashdata('user_registered').'</p>'; ?> 
    <?php endif; ?>

<?php echo form_close(); ?>
