
        <?php
error_reporting(0);
    if(isset($_POST['check'])){     
 
// Personal Information
   
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $present_address=$_POST['present_address'];
    $permanent_address=$_POST['permanent_address'];
    $birth_date=$_POST['birth_date'];
    $gender=$_POST['gender'];
    $religion=$_POST['religion'];
    $nationality=$_POST['nationality'];
    $blood_group=$_POST['blood_group'];
    $nid_number=$_POST['nid_number'];
    $Mobile=$_POST['Mobile'];

// SSC Information
$ssc_exam=$_POST['ssc_exam'];
$ssc_roll=$_POST['ssc_roll'];
$ssc_board=$_POST['ssc_board'];
$ssc_group=$_POST['ssc_group'];
$ssc_result=$_POST['ssc_result'];
$ssc_year=$_POST['ssc_year'];



// HSC Information
$hsc_exam=$_POST['hsc_exam'];
$hsc_board=$_POST['hsc_board'];
$hsc_group=$_POST['hsc_group'];
$hsc_roll=$_POST['hsc_roll'];
$hsc_year=$_POST['hsc_year'];
$hsc_result=$_POST['hsc_result'];

    
    
// Graduate Information    
    
    $program_name=$_POST['program_name'];
    $institute=$_POST['institute'];
    $year=$_POST['year'];
    $course_duration=$_POST['course_duration'];
    $grad_result=$_POST['result'];
    
  if($name=="" || $fname=="" || $mname=="" || $present_address=="" || $permanent_address=="" || !isset($birth_date)|| !isset($gender) || $religion=="" || $nationality=="" || !isset($blood_group) || $nid_number=="" || $Mobile==""){
      echo "<script type='text/javascript'>alert('Your request is not accepted! Please, Fill All Personal Fields and Select Appropriate Value/s.');</script>";
      require_once 'submitApplicationFromUI.php';
   }
  else if( !isset($ssc_exam)|| !isset($ssc_board)|| !isset($ssc_group) || $ssc_roll=="" || $ssc_result=="" ||  $ssc_year==""){
      echo "<script type='text/javascript'>alert('Your request is not accepted! Please, Fill All SSC or Equivalent Level Fields and Select Appropriate Value/s.');</script>";
      require_once 'submitApplicationFromUI.php';
   } 
  else if( !isset($hsc_exam)|| !isset($hsc_board)|| !isset($hsc_group) || $hsc_roll=="" || $hsc_result=="" ||  $hsc_year==""){
      echo "<script type='text/javascript'>alert('Your request is not accepted! Please, Fill All HSC or Equivalent Level Fields and Select Appropriate Value/s.');</script>";
      require_once 'submitApplicationFromUI.php';
   } 
  else if( $program_name=="" ||  $institute=="" ||  $year=="" ||  $grad_result=="" ||  !isset($course_duration) ){
      echo "<script type='text/javascript'>alert('Your request is not accepted! Please, Fill All Graduation Fields and Select Appropriate Value/s.');</script>";
      require_once 'submitApplicationFromUI.php';
   }  
  else if( $ssc_result<3 ||  $hsc_result<3 ||  $grad_result<2.5 || $ssc_result>5 ||  $hsc_result>5 ||  $grad_result>4 ){
      echo "<script type='text/javascript'>alert('Your request is not accepted! Your SSC/HSC/Graduation result is not acceptable.');</script>";
      require_once 'submitApplicationFromUI.php';
   }        
  else{
      
     $db= new mysqli('localhost','root','','pgdit_admission');
            
            if(mysqli_connect_errno()){
                echo "<script type='text/javascript'>alert('Error to connect Database!');</script>";
                require_once 'submitApplicationFromUI.php';
   } 
            else{
        $img_path= "photo/";  //'C:\xampp\htdocs\PGDITAdmissionAutomation\photo\     
        
        $file= basename($_FILES['image']['name']);      
        $fileName = $img_path. $file; 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('png'); 
        
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));
                if (move_uploaded_file($_FILES['image']['tmp_name'], $fileName)) {
                  
                $query0= "select `phone` from `verification` where `phone`='$Mobile';";
                $result0= $db->query($query0);
                    $row= $result0->fetch_assoc();
                    $phone1=$row['phone'];
                    if($Mobile != $phone1){
                    
    $result= $db->query("DELETE FROM `ssc_info` where `phone`='$Mobile';");
    $result= $db->query("DELETE FROM `hsc_info` where `phone`='$Mobile';");
    $result= $db->query("DELETE FROM `graduation_info` where `phone`='$Mobile';");
    $result= $db->query("DELETE FROM `verification` where `phone`='$Mobile';");
    
                  //  echo $_FILES['image']['tmp_name'];
                    
                    $query="INSERT INTO `applicant`(`phone`, `name`, `father`, `mother`, `birth_date`, `gender`, `religion`, `blood_group`, `nationality`, `nid_number`, `present_address`, `permanent_address`, `photo`) 
                                            VALUES ('$Mobile','$name','$fname','$mname','$birth_date','$gender','$religion','$blood_group','$nationality','$nid_number','$present_address','$permanent_address','$imgContent');";   
                           
                         
                    $result= $db->query($query);   
                               
                         $query="INSERT INTO `graduation_info`(`phone`, `program_name`, `institute`, `year`, `course_duration`, `result`) 
                                                 VALUES ('$Mobile','$program_name','$institute','$year','$course_duration','$grad_result'); " ;
                            
                        
                    $result= $db->query($query); 
                            
                     $query="INSERT INTO `hsc_info`(`phone`, `exam_name`, `board`, `year`, `group`, `hsc_roll`, `result`) 
                                          VALUES ('$Mobile','$hsc_exam','$hsc_board','$hsc_year','$hsc_group','$hsc_roll','$hsc_result');"  ;
                       
                       
                    $result= $db->query($query);     
                            
                         $query="INSERT INTO `ssc_info`(`phone`, `exam_name`, `board`, `year`, `group`, `ssc_roll`, `result`) 
                                          VALUES ('$Mobile','$ssc_exam','$ssc_board','$ssc_year','$ssc_group','$ssc_roll','$ssc_result');"  ;
                       
                    
                    $result= $db->query($query);
                    
                    
                if($result==true){
               require 'easy-payment.php';
                } 
                else if($result==false){
                    echo "<script type='text/javascript'>alert('Please,try again later! Your given information aren`t saved to the server.');</script>";
                    require_once 'submitApplicationFromUI.php';
   }
                    }
                    else {
                        echo "<script type='text/javascript'>alert('Mr. $name,</br>Your given phone number $Mobile has used!');</script>";
                        require_once 'submitApplicationFromUI.php';
                    }
            } 
            else{
            echo "<script type='text/javascript'>alert('File not moved! Try again Later.');</script>";    
               require_once 'submitApplicationFromUI.php';
             }      
        }
        else {
                echo "<script type='text/javascript'>alert('Photo isn't in PNG format!');</script>";
             require_once 'submitApplicationFromUI.php';
   }
   
    }
            
            
            $db->close();
  }
  
   } else {
       
    require_once 'submitApplicationFromUI.php';
   }
    ?>
    </body>
</html>


