<?php

error_reporting(0);
class Admission {
    
    private $db;
    private $roll;
    private $status;
    
    function __construct(){
        $this->db = new mysqli('localhost','root','','pgdit_admission');
        
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }
    
    function __construct1($roll) {
        $this->db = new mysqli('localhost','root','','pgdit_admission');
        $this->roll= $roll;
    }
    
    function __construct2($roll, $status) {
        $this->db = new mysqli('localhost','root','','pgdit_admission');
        $this->roll = $roll;
        $this->status = $status;
    }
    
    
    function update(){
        $this->db->query("UPDATE `admission` SET `admitted`=$this->status WHERE `roll`= $this->roll ;");
    }
    
    function select(){
        $result="<table border='1'><tr> <td>Roll</td> <td>Status</td> </tr>";
        $result1= $this->db->query("SELECT * FROM `admission` where `admitted` is NOT null ;");
        
                if($result1==true){
                
                $num_result1=$result1->num_rows;
           for($i=0;$i<$num_result1;$i++){
                $row= $result1->fetch_assoc();
                
                $stat="Rejected";
                if($row['admitted']==1){
                    $stat="Admitted";
                }
                
                $result .="<tr> <td>".$row['roll']."</td> <td>".$stat."</td> </tr>";
                  }  
                    
                }
        $result .="</table>";
        
        echo $result;

    }

}



interface Command {

    function execute();

}


class Update implements Command{
    private $result;
    function __construct(Admission $result) {
        $this->result = $result;
    }

    public function execute() {
        $this->result->update();
    }

}


class Select implements Command{
    private $result;
    function __construct(Admission $result) {
        $this->result = $result;
    }

    public function execute() {
        $this->result->select();
    }

}



class Invoker {
    private $command;

    function setCommand(Command $command)
    {
        $this->command = $command;
    }


    function executeCommand()
    {
        $this->command->execute();
    }

}
