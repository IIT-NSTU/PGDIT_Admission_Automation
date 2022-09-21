<?php
error_reporting(0);
      class Database{ 
          var $db=null;
          function __construct($db) {
              $this->db = $db? :new mysqli('localhost','root','','pgdit_admission');
          }

    
      }       
        
      
?>
