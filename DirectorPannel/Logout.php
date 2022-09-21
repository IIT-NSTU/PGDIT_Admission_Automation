<?php
// Starting session
session_start();
unset($_SESSION['name']);
unset($_SESSION['mobile']);
unset($_SESSION['pass']);
// Destroying session
session_destroy();

header("Location: directorLoginUI.php"); exit();

?>

