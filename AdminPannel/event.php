<?php
error_reporting(0);

require_once 'C:\xampp\htdocs\PGDITAdmissionAutomation\insert.php';

$start   =   date("Y-m-d", strtotime($_POST['start']));
$end   =   date("Y-m-d", strtotime($_POST['end']));


if(isset($_POST['insert'])){
echo $start." ".$end;
    
    $result=  Insert::insertQuery("INSERT INTO `date_time`(`event_name`, `start_date`, `end_date`) VALUES ('".$_POST['event']."','$start','$end')");
}

if(isset($_POST['update'])){
    $result=  Insert::insertQuery("UPDATE `date_time` SET `start_date`='$start' ,`end_date`='$end'  WHERE  `event_name`='".$_POST['event']."'");
}
header("Location: eventUI.php"); exit();

