<?php

session_start();
require 'config/db.php';
require 'config/server.php';
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
            <h1>Change Password</h1>
        </div>
        
        <form class="change-pass-form" method="post" action="">
            <div class="row-inline">
                <label for="currentPass">Current Password</label>
                <input id="input-pass" type="password" name="currentPass" placeholder="********">
            </div>
            <br>
            <div class="row-inline">
                <label for="newPass">New Password</label>
                <input id="input-pass" type="password" name="newPass" placeholder="********">
            </div>
            <br>
            <div class="row-inline">
                <label for="confirmPass">Confirm Password</label>
                <input id="input-pass" type="password" name="confirmPass" placeholder="********">
            </div>
            <br>
            <input class="add-update-button" type="submit" name="changePass" value="Change">

    </div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
