<?php

session_start();
error_reporting(0);

require 'config/db.php';
require 'config/server.php';

include("inc/head.php");

?>

<div class="title">
    <a href="index.php">
        <img src="icons/home.png" alt="home">
    </a>

    <h1>Employee Management System</h1>
</div>

    <div class="login-body">
        <form class="login-form" method="post" action="">
            <br>
            <div class="row-form row-login">
                <label for="email">Enter Email Address</label>
                <br>
                <input type="email" name="email" required>
            </div>
            <br><br><br><br>
            <div class="row-form row-login">
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" required>
            </div>
            <br><br><br><br><br>
            <input id="login" type="submit" name="login" value="LOG IN">
            <br><br><br>
            <!--<a class="small" href="forgot_password.php">Forgot Password?</a>
            <br><br>-->
            <a class="small" href="signup.php">Create an Account!</a>
        </form>
    </div>
</body>
</html>