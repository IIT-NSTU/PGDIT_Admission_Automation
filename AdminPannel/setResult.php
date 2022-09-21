<?php
error_reporting(0);
require_once './Result.php';

$invoke= new Invoker();
$res1= new Result();

$msg="<b style='color:red;'>Message:</b>  Result not saved to the server!";
    
if(isset($_GET['roll']) && isset($_GET['score'])){
    
$res2= new Result($_GET['roll'],$_GET['score']);
$invoke->setCommand(new Update($res2));
$invoke->executeCommand();
$invoke->setCommand(new Select($res1));
$invoke->executeCommand();

}
else{
$invoke->setCommand(new Select($res1));
$invoke->executeCommand();
}


