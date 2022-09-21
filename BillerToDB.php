<?php
declare(strict_types=1);
error_reporting(0);

class BillerToDB {
    public function billerToDB(string $txn=null, string $phone=null, int $billerId=null) {
    
    $db= new mysqli('localhost','root','','pgdit_admission');
    $result= $db->query("select * from `verification` as v, applicant as a where v.txn='$txn' and a.phone='$phone'");
    $num_result= mysqli_num_rows($result);
    $row= $result->fetch_assoc();
    
    $set_biller= false;
    $set_roll0= false;
    $set_roll2= false;
    
                if($row['roll']==null ||$row['biller_id']==null ){
                    $result0= $db->query("select MAX(roll) from verification;");
                    $row0= $result0->fetch_assoc();
                    $roll=$row0['MAX(roll)']+1;
    
                if($num_result==1){
                    $set_biller= $db->query("UPDATE `verification` SET `biller_id`=$billerId, `phone`='$phone',`roll`=$roll WHERE `txn`='$txn'");
                    $set_roll0= $db->query("INSERT INTO `admission`(`roll`) VALUES ($roll);");
                    $set_roll2= $db->query("INSERT INTO `result`(`roll`) VALUES ($roll);");
                }
                }
                
    return ($set_biller && $set_roll0 && $set_roll2);           
    }
}

?>
