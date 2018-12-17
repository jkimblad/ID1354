<h1><?= $title; ?></h1>
<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>
    <div class="register-form">
        <p>Username</p>
        <input type="text" class="register-input" name="username" placeholder="Username">
    </div>
    <div class="register-form">
        <p>Password</p>
        <input type="password" class="register-input" name="password" placeholder="Password">
    </div>
    
    <button type="submit" class="button comment-button">Register</button>

    <?php if($this->session->flashdata('user_registered')): ?>
        <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?> 
    <?php endif; ?>

<?php echo form_close(); ?>
