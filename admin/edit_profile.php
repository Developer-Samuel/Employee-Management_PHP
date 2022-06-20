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
            <?php

            $aid=$_GET['editid'];
            $ret=mysqli_query($con,"SELECT * FROM employee WHERE ID='$aid'");
            while ($rowProfile=mysqli_fetch_array($ret)) {

            ?>

            <div class="row-inline">
                <label for="emp_code">Employee Code</label>
                <input type="text" name="emp_code" id="emp_code" required placeholder="<?php echo $rowProfile['EmpCode'];?>" value="<?php echo $rowProfile['EmpCode'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="fname">First Name</label>
                <input type="text" name="fname" placeholder="<?php echo $rowProfile['EmpFname'];?>" value="<?php echo $rowProfile['EmpFname'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" placeholder="<?php echo $rowProfile['EmpLname'];?>" value="<?php echo $rowProfile['EmpLname'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="emp_work_position">Emp Work Position</label>
                <select name="emp_work_position" id="emp_work_position">
                    <option value="php">PHP Programmer</option>
                    <option value="c#">C# .NET, ASP.NET Programmer</option>  
                    <option value="tester">IT Tester</option>  
                </select>
            </div>
            <br>
            <div class="row-inline">
                <label for="emp_dept">Employee Dept</label>
                <input type="text" name="emp_dept" placeholder="<?php echo $rowProfile['EmpDept'];?>" value="<?php echo $rowProfile['EmpDept'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="emp_designation">Employee Designation</label>
                <input type="text" name="emp_designation" placeholder="<?php echo $rowProfile['EmpDesignation'];?>" value="<?php echo $rowProfile['EmpDesignation'];?>">
            </div>         
            <br>
            <div class="row-inline">
                <label for="emp_joining_date">Employee Joing Date(yyyy-mm-dd)</label>
                <input type="date" name="emp_joining_date" placeholder="<?php echo $rowProfile['EmpJoining'];?>" value="<?php echo $rowProfile['EmpJoining'];?>">
            </div>
            <br>

            <div class="row-inline">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>  
                </select>
            </div>

            <?php } ?>

            <input class="add-update-button" type="submit" name="updateEmployee" value="Update">
        </form>

    </div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
