

<?php
error_reporting(0);

interface Recovery{                              //------ Factory Pattern ----------//
    public function sendCode($phone);
}



class BillerIDRecovery implements Recovery{
    
public function sendCode($phone) {
    $db= new mysqli('localhost','root','','pgdit_admission');

  if($phone=="" || mysqli_connect_errno()){
      // fgdfgg
  } else {
          $query= "SELECT DATEDIFF(CURDATE(),recovery_time) as day FROM verification where phone='$phone'";
          $result= $db->query($query);
          $row= $result->fetch_assoc();
           $day= $row['day'] ;

          if($day>1){

$billerId= sprintf("%06d", mt_rand(100000,999999));
                    
$query1="UPDATE `verification` SET `biller_id`=$billerId, `recovery_time`= NOW() WHERE `phone`=$phone";
$send=$db->query($query1);
//--------------------------------------------------------------------------------------//                    

include_once 'sms-api.php';

$msg="PGDIT Batch-12 Admission 2022, NSTU. Your Biller ID is: $billerId";

if($send==true){
   
            send_sms($phone, $msg);
            
            echo "<b>   Message:</b> A Biller ID has sent to your number. If you don't find, you will try again after 24 hours.";
}}else{
            echo "<b>   Message:</b> Try again after 24 hours.";
}}}}






class PaswordRecovery implements Recovery{
    
public function sendCode($phone) {
  
    $db= new mysqli('localhost','root','','pgdit_admission');

  if($phone=="" || mysqli_connect_errno()){
     //echo 'Try again later!';
  }else {

          $query= "SELECT DATEDIFF(CURDATE(),recovery_time) as day FROM admin where phone='$phone'";
          $result= $db->query($query);
          $row= $result->fetch_assoc();
              
           $day= $row['day'] ;

          if($day>1){

$code= sprintf("%06d", mt_rand(100000,999999));
$pass=password_hash("$#hdfh0%", PASSWORD_DEFAULT);                   
$query1="UPDATE `admin` SET `code`=$code,`password`='$pass', `recovery_time`= NOW() WHERE `phone`='$phone'";
$send=$db->query($query1);
                    
//--------------------------------------------------------------------------------------//                    

include_once 'sms-api.php';

$msg="PGDIT Admission, NSTU. Your password recovery code is: $code";



if($send==true){
   
            send_sms($phone, $msg);
            
            echo "<b>   Message:</b> A recovery code has sent to your number. If you don't find, you will try again after 24 hours.";
}}else{
            echo "<b>   Message:</b> Try again after 24 hours.";
}}}}







class RecoveryFactory {
    private $recovery;
    
    public function execute($phone, $str){

        if($str=="billerid"){
            $this->recovery=new BillerIDRecovery();
        }
        else if($str=="password"){
            $this->recovery=new PaswordRecovery();
        }
        
        $this->recovery->sendCode($phone);
    }
}
?>
