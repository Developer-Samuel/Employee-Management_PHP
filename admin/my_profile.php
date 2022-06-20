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
            <h1>My Profile</h1>
        </div>

        <form class="edit-form" method="post" action="">

            <div class="row-inline">
                <label for="admin-name">Admin Name</label>
                <input type="text" name="admin-name" placeholder="<?php echo $row['AdminName'];?>" value="<?php echo $row['AdminName'];?>">
            </div>
            <br><br>
            <div class="row-inline">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="<?php echo $row['AdminUsername'];?>" value="<?php echo $row['AdminUsername'];?>">
            </div>
            <br><br>
            <div class="row-inline">
                <label for="reg-date">Registration Date</label>
                <input type="text" name="reg-date" id="reg-date" placeholder="<?php echo $row['RegisterDate'];?>" value="<?php echo $row['RegisterDate'];?>">
            </div>
            <br>

            <input class="add-update-button" type="submit" name="update" value="Update">
        </form>
    </div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
