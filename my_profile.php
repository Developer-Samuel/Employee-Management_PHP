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
                <label for="emp_code">Employee Code</label>
                <input type="text" name="emp_code" id="emp_code" required placeholder="<?php echo $row['EmpCode'];?>" value="<?php echo $row['EmpCode'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" placeholder="<?php echo $row['EmpEmail'];?>" value="<?php echo $row['EmpEmail'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="fname">First Name</label>
                <input type="text" name="fname" placeholder="<?php echo $row['EmpFname'];?>" value="<?php echo $row['EmpFname'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="lname">Last Name</label>
                <input type="text" name="lname" placeholder="<?php echo $row['EmpLname'];?>" value="<?php echo $row['EmpLname'];?>">
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
                <input type="text" name="emp_dept" placeholder="<?php echo $row['EmpDept'];?>" value="<?php echo $row['EmpDept'];?>">
            </div>
            <br>
            <div class="row-inline">
                <label for="emp_designation">Employee Designation</label>
                <input type="text" name="emp_designation" placeholder="<?php echo $row['EmpDesignation'];?>" value="<?php echo $row['EmpDesignation'];?>">
            </div>         
            <br>
            <div class="row-inline">
                <label for="emp_joining_date">Employee Joing Date(yyyy-mm-dd)</label>
                <input type="date" name="emp_joining_date" value="<?php echo $row['EmpJoining'];?>">
            </div>
            <br>

            <div class="row-inline">
                <label for="gender">Gender</label>
                <select name="gender" id="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>  
                </select>
            </div>
            <br>
            <div class="row-inline">
                <label for="register_date">Register Date</label>
                <input type="text" name="register_date" id="regDate" value="<?php echo $row['RegisterDate'];?>">
            </div>

            <input class="add-update-button" type="submit" name="update" value="Update">
        </form>
    </div>

    <?php
        include("inc/footer.php");
    ?>

</div>

</body>
</html>
