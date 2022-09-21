<?php
session_start();
error_reporting(0);

$phone=$_SESSION['phone'];// or die("76534345");

class Password {
    private $db;
    public $verify=false;            
    function __construct() {
        $this->db= new mysqli('localhost','root','','pgdit_admission');
    }

    
function check($phone){
    
  if(mysqli_connect_errno()){
     //echo 'Try again later!';
  }else {
          $query= "SELECT  `password`,`code` FROM admin where phone='$phone'";
          $result= $this->db->query($query);
          $row= $result->fetch_assoc();
              
           $password= $row['password'] ;
           $this->verify = password_verify("$#hdfh0%", $password);
          
          return $row['code'] ;
           }
        }
    
    
        
function send($phone,$password){
    
  if(mysqli_connect_errno()){
     //echo 'Try again later!';
  }else {
          $pass= password_hash($password, PASSWORD_DEFAULT); 
          
          $query= "UPDATE `admin` SET `password`='$pass' WHERE `phone`='$phone'";
          $result= $this->db->query($query);
          if($result==true){
              echo "<b style='color:green;'>Message:</b>  Your password has changed.";
          }
        }
    }
}    
    
    
    
    



$pwd=new Password();
$check=$pwd->check($phone);
$msg="<b style='color:red;'>Message:</b>  ";
    
if(isset($_GET['code']) && isset($_GET['pass']) && isset($_GET['repass'])){
    if($_GET['pass']!=$_GET['repass']){
        $msg.=" Entered passwords aren't same!";
        echo "$msg";
    }
    else if ($check != $_GET['code']) {
        echo $check ." " .  $_GET['code'];
        $msg.=" Verification code is incorrect!";
//        echo "$msg";
    }
    else if ($pwd->verify==false) {
        $msg.=" You can't change password twice using same verification code!";
        echo "$msg";
    }
    else{
        $pwd->send($phone, $_GET['pass']);
    }
}

