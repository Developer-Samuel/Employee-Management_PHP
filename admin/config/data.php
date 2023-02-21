<?php

include('config/db.php');
error_reporting(0);

$aid = $_SESSION['aid'];
$editID = $_GET['editid'];

$ret = mysqli_query($con,"SELECT * FROM admins WHERE ID='$aid'");
$row = mysqli_fetch_array($ret);

$retEdu=mysqli_query($con,"SELECT * FROM education WHERE EmpID='$editID'");
$rowEdu=mysqli_fetch_array($retEdu);

$retExp = mysqli_query($con,"SELECT * FROM experience WHERE EmpID='$editID'");
$rowExp = mysqli_fetch_array($retExp);

$adminName = $row['AdminName'];
$adminUsername = $row['AdminUsername'];
$adminRegDate = $row['RegisterDate'];



?>