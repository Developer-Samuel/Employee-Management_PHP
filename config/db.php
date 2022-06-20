<?php

$con = mysqli_connect("localhost", "root", "", "employee-management");

if(mysqli_connect_errno())
{
    echo "Connection Fail".mysqli_connect_error();
}

?>