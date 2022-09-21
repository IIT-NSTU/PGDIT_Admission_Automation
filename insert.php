<?php
error_reporting(0);

class Insert{
   static function insertQuery($str){
        $db= new mysqli('localhost','root','','pgdit_admission');
        
        return $db->query($str);                 
    }
}

