<?php

session_start();

require 'config/db.php';
require 'config/checklogin.php';

include("inc/head.php");

?>

<div class="card-body">
    <?php
        include("inc/nav.php");
        include("inc/header.php");
    ?>

    <div class="article">
        <div class="title2">
            <h1>Employee Management System</h1>
        </div>
        <div class="welcome-back">
            <small>Welcome Back!</small>
            <p><?php echo $fname . " " . $lname; ?></p>
            <img src="icons/user.png">
        </div>   
    </div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
