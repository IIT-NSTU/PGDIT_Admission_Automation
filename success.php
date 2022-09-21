<?php
error_reporting(0);


            
/*   Validate Payment with IPN  */


$val_id=urlencode($_POST['val_id']);
//$val_id=urlencode("151114130742Bj94IBUk4uE5GRj");
$store_id=urlencode("softb62aabbc8d6950");
$store_passwd=urlencode("softb62aabbc8d6950@ssl");
$requested_url = ("https://sandbox.sslcommerz.com/validator/api/validationserverAPI.php?val_id=".$val_id."&store_id=".$store_id."&store_passwd=".$store_passwd."&v=1&format=json");

$handle = curl_init();
curl_setopt($handle, CURLOPT_URL, $requested_url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_SSL_VERIFYHOST, false); # IF YOU RUN FROM LOCAL PC
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false); # IF YOU RUN FROM LOCAL PC

$result = curl_exec($handle);

$code = curl_getinfo($handle, CURLINFO_HTTP_CODE);

if($code == 200 && !( curl_errno($handle)))
{

	# TO CONVERT AS ARRAY
	# $result = json_decode($result, true);
	# $status = $result['status'];

	# TO CONVERT AS OBJECT
	$result = json_decode($result);

	# TRANSACTION INFO
	$status = $result->status;
	$tran_date = $result->tran_date;
	$tran_id = $result->tran_id;
	$val_id = $result->val_id;
	$amount = $result->amount;
	$store_amount = $result->store_amount;
	$bank_tran_id = $result->bank_tran_id;
	$card_type = $result->card_type;

	# EMI INFO
	$emi_instalment = $result->emi_instalment;
	$emi_amount = $result->emi_amount;
	$emi_description = $result->emi_description;
	$emi_issuer = $result->emi_issuer;

	# ISSUER INFO
	$card_no = $result->card_no;
	$card_issuer = $result->card_issuer;
	$card_brand = $result->card_brand;
	$card_issuer_country = $result->card_issuer_country;
	$card_issuer_country_code = $result->card_issuer_country_code;

	# API AUTHENTICATION
	$APIConnect = $result->APIConnect;
	$validated_on = $result->validated_on;
	$gw_version = $result->gw_version;
        

        

} else {

	echo "Failed to connect with SSLCOMMERZ";
}
?>

<?php

            
            require_once 'insert.php';
            
            $insert= new Insert();
            if($insert->insertQuery("INSERT INTO `verification`(`txn`) VALUES ('$tran_id');")){
                
        echo "</br></br>";
        echo "<div class='billerMsg' style='margin-top: 48px;margin-bottom: 25px;'>";
        echo "<h4 align='center'>Amount: $amount</h4></br>";
        echo "<h4 align='center'>Payment From: $card_type</h4></br>";
        echo "<h4 align='center'>Transaction ID: $tran_id</h4></br></div>";
            } else {
                echo "<h3 align='center'>You have to pay first!</h3>";
}
    
            require_once 'getBillerIDUI.php';        
?>
