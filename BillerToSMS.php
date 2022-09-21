<?php
error_reporting(0);

class BillerToSMS {
    
    public function sms(int $billerId,string $phone) {
        
include_once 'sms-api.php';

$msg="PGDIT Admission - Summer 2022, NSTU. Your Biller ID is: $billerId";
 send_sms($phone, $msg);

return true;
    }
    
}
?>