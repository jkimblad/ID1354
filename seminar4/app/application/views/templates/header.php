<script type="text/javascript">
    var base_url = "<?php echo base_url(); ?>";
    function site_url(url){
        var bu = "<?php echo base_url(); ?>";
        url = (url)?url:"";
        return bu + "index.php/" + url;
    }
</script>


<html>
    <head>
        <title>Tasty recipes</title>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/css/reset.css">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>../assets/css/mystyles.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>../assets/scripts/ajax_requests.js"></script>

    </head>
    <body>
        <ul class="navbar">
            <li class="navbar-item"><a class="navbar-link" href="<?php echo base_url(); ?>home">Home</a></li>
            <li class="navbar-item"><a class="navbar-link" href="<?php echo base_url(); ?>calendar">Calendar</a></li>
            <li class="navbar-item"><a class="navbar-link" href="<?php echo base_url(); ?>meatballs-recipe">Meatballs Recipe</a></li>
            <li class="navbar-item"><a class="navbar-link" href="<?php echo base_url(); ?>pancakes-recipe">Pancakes Recipe</a></li>

            <?php if(!$this->session->userdata('logged_in')): ?>
                <li class="navbar-item-right"><a class="navbar-link" href="<?php echo base_url(); ?>users/register">Register</a></li>
                <li class="navbar-item-right"><a class="navbar-link" href="<?php echo base_url(); ?>users/login">Login</a></li>
            <?php endif; ?>

            <?php if($this->session->userdata('logged_in')): ?>
                <li class="navbar-item-right"><a class="navbar-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
            <?php endif; ?>
        </ul>

        <div class="textbody">
