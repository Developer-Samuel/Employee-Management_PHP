<?php

session_start();
error_reporting(0);

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
            <h1>Add Admin</h1>
        </div>

        <form class="edit-form" method="post" action="">

            <div class="row-inline">
                <label for="admin-name">Admin Name</label>
                <input type="text" name="admin-name" placeholder="<?php echo $row['AdminName'];?>" value="<?php echo $row['AdminName'];?>">
            </div>
            <br><br>
            <div class="row-inline">
                <label for="username">Username</label>
                <input type="text" name="username" id="adminUsername" placeholder="<?php echo $row['AdminUsername'];?>" value="<?php echo $row['AdminUsername'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="password">Password</label>
                <br>
                <input type="password" name="password" required>
            </div>
            <br>
            <div class="row-inline">
                <label for="cpassword">Repeat Password</label>
                <br>
                <input type="password" name="cpassword" required>
            </div>
            <br>

            <input class="add-update-button" type="submit" name="add-admin" value="Add">
        </form>
    </div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
