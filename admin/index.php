<?php

session_start();

require 'config/db.php';
require 'config/server.php';

include("inc/head.php");

?>

<div class="title">
    <a href="../index.php">
        <img src="icons/home.png" alt="home">
    </a>
    <h1>Employee Management System</h1>
</div>

    <div class="admin-body">
        <form class="admin-form" method="post" action="">
            <br>
            <div class="row-form row-admin-login">
                <label for="username">Username</label>
                <br>
                <input type="username" name="username">
            </div>
            <br><br><br><br>
            <div class="row-form row-admin-login">
                <label for="password">Password</label>
                <br>
                <input type="password" name="password">
            </div>
            <br><br><br><br><br>
            <input id="admin-login" type="submit" name="login" value="LOG IN">
        </form>
    </div>
</body>
</html>