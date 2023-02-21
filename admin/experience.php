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
            <h1>Edit Experience</h1>
        </div>
        <br>
        <form class="experience-form" method="post" action="">
            <div class="row-inline">
                <label for="company-name">1. Company Name</label>
                <input id="input-exp" type="text" name="company-name" placeholder="<?php echo $rowExp['CompanyName1'];?>" value="<?php echo $rowExp['CompanyName1'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="work-position">1. Work Position</label>
                <input id="input-exp" type="text" name="work-position" placeholder="<?php echo $rowExp['WorkPosition1'];?>" value="<?php echo $rowExp['WorkPosition1'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="work-duration">1. Work Duration</label>
                <input id="input-exp" type="text" name="work-duration" placeholder="<?php echo $rowExp['WorkDuration1'];?>" value="<?php echo $rowExp['WorkDuration1'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="used-programs-tools">1. Used Programs / Tools</label>
                <input id="input-exp" type="text" name="used-programs-tools" placeholder="<?php echo $rowExp['UsedProgramsTools1'];?>" value="<?php echo $rowExp['UsedProgramsTools1'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="company-name2">2. Company Name</label>
                <input id="input-exp" type="text" name="company-name2" placeholder="<?php echo $rowExp['CompanyName2'];?>" value="<?php echo $rowExp['CompanyName2'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="work-position2">2. Work Position</label>
                <input id="input-exp" type="text" name="work-position2" placeholder="<?php echo $rowExp['WorkPosition2'];?>" value="<?php echo $rowExp['WorkPosition2'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="work-duration2">2. Work Duration</label>
                <input id="input-exp" type="text" name="work-duration2" placeholder="<?php echo $rowExp['WorkDuration2'];?>" value="<?php echo $rowExp['WorkDuration2'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="used-programs-tools2">2. Used Programs / Tools</label>
                <input id="input-exp" type="text" name="used-programs-tools2" placeholder="<?php echo $rowExp['UsedProgramsTools2'];?>" value="<?php echo $rowExp['UsedProgramsTools2'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="company-name3">3. Company Name</label>
                <input id="input-exp" type="text" name="company-name3" placeholder="<?php echo $rowExp['CompanyName3'];?>" value="<?php echo $rowExp['CompanyName3'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="work-position3">3. Work Position</label>
                <input id="input-exp" type="text" name="work-position3" placeholder="<?php echo $rowExp['WorkPosition3'];?>" value="<?php echo $rowExp['WorkPosition3'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="work-duration3">3. Work Duration</label>
                <input id="input-exp" type="text" name="work-duration3" placeholder="<?php echo $rowExp['WorkDuration3'];?>" value="<?php echo $rowExp['WorkDuration3'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="used-programs-tools3">3. Used Programs / Tools</label>
                <input id="input-exp" type="text" name="used-programs-tools3" placeholder="<?php echo $rowExp['UsedProgramsTools3'];?>" value="<?php echo $rowExp['UsedProgramsTools3'];?>">
            </div>
            <br>
            <input class="add-update-button" type="submit" name="editExperience" value="Submit">
        </form>
    </div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
