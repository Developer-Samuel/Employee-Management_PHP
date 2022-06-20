<?php

require 'config/db.php';
require 'config/server.php';

?>

<?php

include("inc/head.php");

?>

<div class="title">
    <a href="index.php">
        <img src="icons/home.png" alt="home">
    </a>
    <h1>Employee Management System</h1>
</div>

    <div class="signup-body">
        <form class="signup-form" method="POST" action="signup.php">
            <br>
            <div class="row-form2 row-signup">
                <div class="row-signup-inline">
                    <label for="fname">First Name</label>
                    <br><br>
                    <input id="inline-input" type="text" name="fname" required>
                </div>
                <div class="row-signup-inline">
                    <label for="lname">Last Name</label>
                    <br><br>
                    <input id="inline-input" type="text" name="lname" required>
                </div>
            </div>
 
            <br><br><br><br>

            <div class="row-form row-signup">
                <label for="emp_code">Enter your Employee Code</label>
                <br>
                <input type="text" name="emp_code" required>
            </div>

            <br><br><br><br>

            <div class="row-form row-signup">
                <label for="email">Email Address</label>
                <br>
                <input type="email" name="email" required>
            </div>

            <br><br><br><br>

            <div class="row-form2 row-signup">
                <div class="row-signup-inline">
                    <label for="password">Password</label>
                    <br><br>
                    <input id="inline-input" type="password" name="password" required>
                </div>
                <div class="row-signup-inline">
                    <label for="cpassword">Repeat Password</label>
                    <br><br>
                    <input id="inline-input" type="password" name="cpassword" required>
                </div>
                
            </div>

            <br><br><br><br><br>

            <input id="signup" type="submit" name="signup" value="Register">
            <br><br><br>
            <a class="small" href="login.php">Already have an account? Login!</a>
        </form>
    </div>
</body>
</html>