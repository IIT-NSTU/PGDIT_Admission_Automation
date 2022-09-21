

<?php

session_start();
error_reporting(0);
require_once 'C:\xampp\htdocs\PGDITAdmissionAutomation\Login.php';


$admin_login=new AdminLogin();
$check= new LoginContext($admin_login);

$msg="<b style='color:red;'>Message:</b>  ";
    
if(isset($_POST['pass']) && isset($_POST['repass']) && (strcmp($_POST['pass'], $_POST['repass'])==0)){
    
    if (($check->execute($_SESSION['mobile'], $_POST['pass'])==true) && ($admin_login->type=="Admin")) {
        
    $db= new mysqli('localhost','root','','pgdit_admission');
    $result= $db->query("DELETE FROM `ssc_info`");
    $result= $db->query("DELETE FROM `hsc_info`");
    $result= $db->query("DELETE FROM `graduation_info`");
    $result= $db->query("DELETE FROM `verification`");
    $result= $db->query("DELETE FROM `complain_box`");
    $result= $db->query("DELETE FROM `notice`");
    $result= $db->query("DELETE FROM `result`");
    $result= $db->query("DELETE FROM `date_time`");
    $result= $db->query("DELETE FROM `admission`");
    $result= $db->query("DELETE FROM `applicant`");
    
    if($result==true){
        $msg.= 'Successfully restored the server...';
        echo "<script type='text/javascript'>alert('".$msg."');</script>";
        require_once 'admissionSummary.php';
    }else{
        $msg.= "Problem to restore the server...";
        echo "<script type='text/javascript'>alert('".$msg."');</script>";
        require_once 'resetDBConfirmationUI.php';
    }
    }else {
        $msg.=" Try again with your correct password!";
        echo "<script type='text/javascript'>alert('".$msg."');</script>";
        require_once 'resetDBConfirmationUI.php';
    }
} else {
        $msg.= 'Passwords are not same.';
        echo "<script type='text/javascript'>alert('".$msg."');</script>";
        require_once 'resetDBConfirmationUI.php';
}

