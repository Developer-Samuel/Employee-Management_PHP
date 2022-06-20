<?php
if(strlen($_SESSION['aid'] == 0))
{
    header('location:logout.php');
}
?>