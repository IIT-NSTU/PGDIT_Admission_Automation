<?php
error_reporting(0);

class Result {
    
    private $db;
    private $roll;
    private $score;
    private $position;
    
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
    function __construct2($roll, $score) {
        $this->db = new mysqli('localhost','root','','pgdit_admission');
        $this->roll = $roll;
        $this->score = $score;
    }
    
    
    function update(){
        $this->db->query("UPDATE `result` SET `score`=$this->score WHERE `roll`= $this->roll ;");
    }
    
    function delete(){
        $this->db->query("DELETE FROM `result` WHERE `roll`= $this->roll ;");
        
    }
    
    function select(){
        $result="<table border='1'><tr> <td>Roll</td> <td>Score</td> <td>Position</td></tr>";
        $result1= $this->db->query("SELECT * FROM `result` where `score` is NOT null ;");
        
                if($result1==true){
                
                $num_result1=$result1->num_rows;
           for($i=0;$i<$num_result1;$i++){
                $row= $result1->fetch_assoc();
                        
$result11 = $this->db->query("SELECT RowNo, roll, score FROM (SELECT ROW_NUMBER() over ( order by score DESC) RowNo, roll, score FROM result) as t WHERE t.score = ".$row['score']);
$num_result11 = $result11->num_rows;
$row1 = $result11->fetch_assoc();

                $result .="<tr> <td>".$row['roll']."</td> <td>".$row['score']."</td> <td>".$row1['RowNo']."</td> </tr>";
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
    function __construct(Result $result) {
        $this->result = $result;
    }

    public function execute() {
        $this->result->update();
    }

}


class Delete implements Command{
    private $result;
    function __construct(Result $result) {
        $this->result = $result;
    }

    public function execute() {
        $this->result->delete();
    }

}


class Select implements Command{
    private $result;
    function __construct(Result $result) {
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