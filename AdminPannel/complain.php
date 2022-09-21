<?php
error_reporting(0);


             $db= new mysqli('localhost','root','','pgdit_admission');
            
                $db->query('SET CHARACTER SET utf8');             //This 2 line is used for supporting Bengali Language
                $db->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error());
                
                $result=$db->query("SELECT from_id AS ID FROM complain_box UNION SELECT to_id FROM complain_box");
                $num_result=$result->num_rows;
                
           for($i=0;$i<$num_result;$i++){
                $row= $result->fetch_assoc();
                    
                if($row['ID']!=100000){
                    
                $result1= $db->query("SELECT * FROM `complain_box` WHERE `from_id`=".$row['ID']." or `to_id`=".$row['ID']);
                $num_result1=$result1->num_rows;
                $text="";
                
                for($j=0;$j<$num_result1;$j++){
                    if($j==($num_result1-1)){
                    $row1= $result1->fetch_assoc();
                if($row1['from_id']==100000){
                    $text .="You: ".$row1['complain_and_replay_text'];
                    }
                    else if($row1['from_id']==$row['ID']){
                    $text .= "<b>Applicant:".$row1['complain_and_replay_text']."</b>";
                  } 
                    }
           }    
                    echo "<form action='complain_replybox.php' method='post'><button name='id'  class='form-control' value='".$row['ID']."'>Complain From: ".$row['ID']."</br>".$text."</button></form>";
                
                    }
           }
                
                
                
                
                
                
                
                    
