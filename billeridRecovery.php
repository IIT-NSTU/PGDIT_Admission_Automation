<?php
error_reporting(0);

$regex="/^(01){1}[3456789]{1}[0-9]{8}$/";

if( isset($_GET['phone']) && preg_match($regex, $_GET['phone'])) {
    
          require_once 'Recovery.php';
          
          $recovery= new RecoveryFactory();
          $recovery->execute($_GET['phone'],"billerid");
} 
else {
    echo "Enter a valid phone number!";
}

