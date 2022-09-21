<?php
require_once './Admission.php';
error_reporting(0);

$invoke= new Invoker();
$res1= new Admission();

if(isset($_GET['roll']) && isset($_GET['status'])){
    
$res2= new Admission($_GET['roll'],$_GET['status']);
$invoke->setCommand(new Update($res2));
$invoke->executeCommand();
$invoke->setCommand(new Select($res1));
$invoke->executeCommand();
}
else{
$invoke->setCommand(new Select($res1));
$invoke->executeCommand();
}