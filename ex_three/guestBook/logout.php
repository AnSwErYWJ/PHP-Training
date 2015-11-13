<?php
/**
 * User: answer
 * Date: 2015/11/6
 * Time: 15:40
 */
 
session_start();
session_destroy();
header('location:login.php');
?>
