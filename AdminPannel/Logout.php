<?php
// Starting session
session_start();
error_reporting(0);
 
// Destroying session
session_destroy();

header("Location: adminLoginUI.php"); exit();
?>

