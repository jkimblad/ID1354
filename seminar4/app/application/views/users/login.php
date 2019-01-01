<?php if(!$this->session->userdata('logged_in')): ?>
    <h1><?= $title; ?></h1>
<?php endif; ?>

<?php echo form_open('users/login'); ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
        <?php echo '<h1>'.$this->session->flashdata('user_loggedin').'</h1>'; ?> 
    <?php endif; ?>

    <?php if(!$this->session->userdata('logged_in')): ?>
        <div> 
            <p>Username</p>
            <input type="text" name="username" placeholder="Username" required autofocus>
        </div>
        <div> 
            <p>Password</p>
            <input type="password" name="password" placeholder="Password" required>
        </div>

        <?php if($this->session->flashdata('login_fail')): ?>
            <?php echo '<p>'.$this->session->flashdata('login_fail').'</p>'; ?> 
        <?php endif; ?>

        <?php if($this->session->flashdata('user_loggedout')): ?>
            <?php echo '<p>'.$this->session->flashdata('user_loggedout').'</p>'; ?> 
        <?php endif; ?>

        <button type="submit" class="button comment-button">Login</button>

    <?php endif; ?>

<?php echo form_close(); ?>
