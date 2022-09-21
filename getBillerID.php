<?php
declare(strict_types=1);
require_once 'BillerToDB.php';
require_once 'BillerToSMS.php';


$_txn=$_POST['txn'];
$_phone=$_POST['phone'];
$_billerId= sprintf("%06d", mt_rand(100000,999999));


class BillerId { //Facade
    private $toDB;
    private $toSMS;

    function __construct() {
        $this->toDB = new BillerToDB();
        $this->toSMS = new BillerToSMS();
    }
    
    function execute(string $txn, string $phone, int $biller): bool {
        $db= $this->toDB->billerToDB($txn,$phone,$biller);
        $sms= $this->toSMS->sms($biller,$phone);
        $ret=false;
        
        if($db==true && $sms==true){
        $ret= true;
        }
        
        return $ret;
    }

}
 
$_biller= new BillerId();

if( $_biller->execute($_txn,$_phone,(int)$_billerId)==true ){
    require_once 'applicant_loginUI.php';
}

?>

