<?php
if(strlen($_SESSION['uid'] == 0))
{
    header('location:logout.php');
}
?>