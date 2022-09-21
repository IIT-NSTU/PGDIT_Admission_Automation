<?php
    session_start();
error_reporting(0);
    
    if(!isset($_SESSION['roll'])){
        echo "<b color='red'>Server disconnected!</b>";
    }else{
    
    $roll=$_SESSION['roll'];   
      
                $db= new mysqli('localhost','root','','pgdit_admission');
                
            if(mysqli_connect_errno()){
            echo "Problem to connect with server.";
            }else {
                    if(isset($_GET['complain'])){
                        
                        $complain=$_GET['complain'];
                    if( isset($_SESSION['complain']) && $_SESSION['complain'] == $_GET['complain'] ){
                         // user double submitted 
                    }
                    else {
                    
                       if($complain !='' || $complain !=null){
                          $db->query("INSERT INTO `complain_box`(`from_id`, `to_id`, `complain_and_replay_text`) VALUES ($roll,100000,'$complain')");
                        }
                        $_SESSION['complain'] = $_GET['complain'];        
                    
                    }
                    
    
   // echo $_GET['complain'];
    
}


            
                $db->query('SET CHARACTER SET utf8');             //This 2 line is used for supporting Bengali Language
                $db->query("SET SESSION collation_connection ='utf8_general_ci'") or die (mysql_error());
                
                $result1= $db->query("SELECT * FROM `complain_box` WHERE `from_id`=$roll or `to_id`=$roll");
                
                if($result1==true){
                
                $num_result1=$result1->num_rows;
           for($i=0;$i<$num_result1;$i++){
           
                    $row= $result1->fetch_assoc();
                  
                if($row['from_id']==100000){    
                   echo "<li class='you'>"
                        ."<div class='entete'>"
                            ."<span class='status green'></span>"
                            ."<h3>". $row['time'] ."</h3>"
                        ."</div>"
                        ."<div class='message'>".$row['complain_and_replay_text']."</div>"
                    ."</li>";
                    }
                    else if($row['from_id']==$roll){
                   echo "<li class='me'>"
                        ."<div class='entete'>"
                            ."<h3>". $row['time'] ."</h3>"
                            ."<span class='status blue'></span>"
                        ."</div>"
                        ."<div class='message'>".$row['complain_and_replay_text']."</div>"
                    ."</li>";
                    }
                  }  
                    
                }



            }

    }