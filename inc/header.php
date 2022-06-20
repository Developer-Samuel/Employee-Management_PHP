<?php
    require './config/data.php';
?>

<div class="header">
        <div class="logout" onclick="menuToggle()"> 
            <p>
                <?php echo $fname . " " . $lname; ?>
            </p>
            <div class="profile">
                <img src="img/user.png" alt="login">  
            </div>                             
        </div>
        <div class="menu">
            <ul class="ul1">
                <li><img src="icons/user.png"><a href="my_profile.php">My Profile</a></li>
                <li><img src="icons/settings.png"><a href="change_password.php">Change Password</a></li>
            </ul>
            <hr>
            <ul class="ul2">
                <li><img src="icons/logout.png"><a href="logout.php">Logout</a></li>
            </ul>
        </div>  
    </div>