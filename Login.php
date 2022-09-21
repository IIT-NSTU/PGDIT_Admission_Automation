<?php
error_reporting(0);

interface Login {
    public function login($phone,$code);
}


class ApplicantLogin implements Login{
    
          public $applicantname='';
          public $id="";
          public $fname="";
          public $mname="";
          public $address="";
          public $photo="";
          public $txn='';
          public $score='';
          public $admitted='';
    
    public function login($phone, $code) {
        
        if($phone=="" || $code==""){
           // require_once 'applicant_login.html';
        } else {
             $db= new mysqli('localhost','root','','pgdit_admission');
            
            if(mysqli_connect_errno()){
           // require_once 'applicant_login.html';
            }else {
                $query= "SELECT * FROM verification as v JOIN applicant as p ON v.phone=p.phone  JOIN result as r ON v.roll=r.roll  JOIN admission as a ON v.roll=a.roll  JOIN ssc_info as s ON v.phone=s.phone  JOIN hsc_info as h ON v.phone=h.phone  JOIN graduation_info as g ON v.phone=g.phone WHERE v.phone = '$phone' and v.biller_id = '$code'" ;
                $result= $db->query($query);
                $row= $result->fetch_assoc();
                    
            $this->id= $row['roll'] ;          $this->applicantname=$row['name'] ;
            $this->fname=$row['father'] ;       $this->mname=$row['mother'] ;
            $this->address=$row['present_address'];    $this->photo=base64_encode($row['photo']);
            $this->txn=$row['txn'];            $this->score=$row['score']; 
            $this->admitted=$row['admitted']; 
                }
        }
    }

}






class AdminLogin implements Login{
    
    private $db;
    private $verify=false;
    public $name="";
    public $photo="";
    public $type=""; 
    
    function __construct() {
        $this->db= new mysqli('localhost','root','','pgdit_admission');
        }

    public function login($phone, $code) {
        
        if(mysqli_connect_errno()){
             //echo 'Try again later!';
        }else {
          $query= "SELECT * FROM admin where phone='$phone'";
          $result= $this->db->query($query);
          $row= $result->fetch_assoc();
              
           $password= $row['password'] ;
           $this->verify = password_verify($code, $password);
           
           $this->name= $row['name'] ;
           $this->photo= base64_encode($row['photo']);
           $this->type= $row['type'] ; 
          
           }
           
           return $this->verify;
    }

}







class LoginContext {
    private $strategy;

    public function __construct(Login $strategy){
        $this->strategy= $strategy;
    }

    public function execute($phone, $code){

        return $this->strategy->login($phone, $code);
    }
}


