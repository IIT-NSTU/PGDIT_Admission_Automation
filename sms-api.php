<?php
error_reporting(0);

function send_sms($phone, $msg) 
    {
    $mobile = $phone;
    //$message = urlencode($msg);
    $message = $msg;
    $url = "http://sms.joybangla.com/smsapi";   //Demo URL
    $data = [
            "api_key" => "kfjiflfkofikldfgyds985568itkikjt4874853",  // Demo Key
            "type" => "text",
            "contacts" => $mobile,
            "senderid" => "096989432736", //Demo SID
            "msg" => $message
            ];
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    curl_close($ch);
    $error_code = array(1002, 1003, 1004, 1005, 1006, 1007, 1008, 1009, 1010, 1011);
    if(in_array($response, $error_code)) $messageStatus = "error";
    else $messageStatus = "A six digit code has sent to this number.";
    return $messageStatus;
    }
    
?>
