<?php

error_reporting(0);

$eid = $_SESSION['uid'];
$empid= $_SESSION['uid'];

$ret = mysqli_query($con,"SELECT * FROM employee WHERE ID='$eid'");
$row = mysqli_fetch_array($ret);

$retEdu = mysqli_query($con,"SELECT * FROM education WHERE EmpID='$empid'");
$rowEdu = mysqli_fetch_array($retEdu);

$retExp = mysqli_query($con,"SELECT * FROM experience WHERE EmpID='$empid'");
$rowExp = mysqli_fetch_array($retExp);

$fname = $row['EmpFname'];
$lname = $row['EmpLname'];
$emp_code = $row['EmpCode'];
$emp_dept = $row['EmpDept'];
$emp_designation = $row['EmpDesignation'];
$emp_work_position = $row['EmpWorkPosition'];
$emp_joining = $row['EmpJoining'];
$gender = $row['EmpGender'];

?>