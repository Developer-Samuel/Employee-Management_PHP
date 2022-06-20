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
            <h1>Edit Education</h1>
        </div>
        <br>

   
        <form class="education-form" method="post" action="">
     
            <div class="row-inline">
                <label for="hs-name">High School Name</label>
                <input id="input-edu" type="text" name="hs-name" placeholder="<?php echo $rowEdu['hsName'];?>" value="<?php echo $rowEdu['hsName'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="hs-graduated-department">Graduated Department on High School</label>
                <input id="input-edu" type="text" name="hs-graduated-department" placeholder="<?php echo $rowEdu['hsGradDep'];?>" value="<?php echo $rowEdu['hsGradDep'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="hs-graduation-date">High School Graduation Date</label>
                <input id="input-edu" type="text" name="hs-graduation-date" placeholder="<?php echo $rowEdu['hsGradDate'];?>" value="<?php echo $rowEdu['hsGradDate'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="hs-achievements-certificates">High School Achievements / Certificates</label>
                <input id="input-edu" type="text" name="hs-achievements-certificates" placeholder="<?php echo $rowEdu['hsAchievementsCertificates'];?>" value="<?php echo $rowEdu['hsAchievementsCertificates'];?>">
            </div>

            <br><br><br><br>

            <div class="row-inline">
                <label for="university-name">University Name</label>
                <input id="input-edu" type="text" name="university-name" placeholder="<?php echo $rowEdu['uName'];?>" value="<?php echo $rowEdu['uName'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="colleges">Colleges</label>
                <input id="input-edu" type="text" name="colleges" placeholder="<?php echo $rowEdu['colleges'];?>" value="<?php echo $rowEdu['colleges'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="degree-achieved">Degree Achieved</label>
                <input id="input-edu" type="text" name="degree-achieved" placeholder="<?php echo $rowEdu['degreeAchieved'];?>" value="<?php echo $rowEdu['degreeAchieved'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="university-graduation-date">University Graduation Date</label>
                <input id="input-edu" type="text" name="university-graduation-date" placeholder="<?php echo $rowEdu['uGradDate'];?>" value="<?php echo $rowEdu['uGradDate'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="university-projects-certificates">University Projects / Certificates</label>
                <input id="input-edu" type="text" name="university-projects-certificates" placeholder="<?php echo $rowEdu['uProjectsCertificates'];?>" value="<?php echo $rowEdu['uProjectsCertificates'];?>">
            </div>
            <br>
            <input class="add-update-button" type="submit" name="editEducation" value="Submit">
        </form>


    </div>

    <?php

        include("inc/footer.php");
    ?>

</div>

</body>
</html>
