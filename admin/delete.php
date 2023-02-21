<?php 

error_reporting(0);

require 'config/db.php';

$id = $_GET['id'];

$result = mysqli_query($con, "DELETE FROM employees WHERE id=$id");

if($result)
{
    echo "<script>alert('You have successfully delete employee.')</script>";
    header("Location: employees.php");
}


?>