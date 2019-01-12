<?php if(!$this->session->userdata('logged_in')): ?>
    <h1><?= $title; ?></h1>
<?php endif; ?>

<?php if($this->session->userdata('logged_in')): ?>
    <h1>You are now logged in!</h1>
<?php endif; ?>

<?php if(!$this->session->userdata('logged_in')): ?>
    <div id="login-form"> 
        <div>
            <p>Username</p>
            <input id="username-input" type="text" name="username" placeholder="Username">
        </div>
        <div>
            <p>Password</p>
            <input id="password-input" type="password" name="password" placeholder="Password">
        </div>

        <button id="login-button" type="submit" class="button comment-button">Login</button>

    </div>
<?php endif; ?>

