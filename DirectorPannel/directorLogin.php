

<?php
session_start();
require_once 'C:\xampp\htdocs\PGDITAdmissionAutomation\Login.php';


$admin_login=new AdminLogin();
$check= new LoginContext($admin_login);

$msg="<b style='color:red;'>Message:</b>  ";
    
if(isset($_POST['phone']) && isset($_POST['pass'])){
    
    if (($check->execute($_POST['phone'], $_POST['pass'])==true) && ($admin_login->type=="Director")) {
        
        $_SESSION['mobile']=$_POST['phone'];
        $_SESSION['pass']=$_POST['pass'];
        $_SESSION['name']=$admin_login->name;
        $_SESSION['photo']=$admin_login->photo;
        
        // 301 Moved Permanently
        header("Location: ./directorProfile.php", true, 301);
        exit();
        
    }else {
        $msg.=" Try again with your correct phone number and password!";
        echo "<script type='text/javascript'>$msg</script>";
 header("Location: directorLoginUI.php"); exit();
    }
} else {
 header("Location: directorLoginUI.php"); exit();
}  