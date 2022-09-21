<?php
session_start();
error_reporting(0);

$regex="/^(01){1}[3456789]{1}[0-9]{8}$/";

if( isset($_GET['phone']) && preg_match($regex, $_GET['phone'])) {
    
          $_SESSION['phone']=$_GET['phone'];
          
          require_once 'C:\xampp\htdocs\PGDITAdmissionAutomation\Recovery.php';
          
          $recovery= new RecoveryFactory();
          $recovery->execute($_GET['phone'],"password");
          
} 
else {
    echo "Enter a valid phone number!";
}

