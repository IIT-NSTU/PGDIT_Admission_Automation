
<?php
error_reporting(0);
if(isset($_POST['title']) && isset($_POST['message'])){
    $title=$_POST['title'];
    $message=$_POST['message'];        
    $fileContent="";
    if($title!="" && $message!=""){
    if( !empty($_FILES['pdf']['name'])){
        
        $file_path= "img/";  //'C:\xampp\htdocs\PGDITAdmissionAutomation\photo\     
        
        $file= basename($_FILES['pdf']['name']);      
        $fileName = $file_path. $file; 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('pdf'); 
        
        if(in_array($fileType, $allowTypes)){ 
            $pdf = $_FILES['pdf']['tmp_name']; 
            $pdfContent = addslashes(file_get_contents($pdf)); //If we want to upload original file
                if (move_uploaded_file($_FILES['pdf']['tmp_name'], $fileName)) {
                    $fileContent= $fileName;
                }
                
        }else{
            echo "<script language='javascript'> alert('Your file is not a pdf document.')</script>";
        }
          
    }
    
     
        $db = new mysqli('localhost','root','','pgdit_admission') or die("Problem to connect with server...");
        $result1= $db->query("INSERT INTO `notice`(`title`, `message`, `file`) VALUES ('$title','$message','$fileContent')");
        
        if($result1==true){
            echo "<script language='javascript'> alert('Success! Notice has uploaded.')</script>";
        
            $title="";
            $message="";
            
        }   
    
    $db->close();
    }
}

            header("location: noticeUI.php",  true,  302 );  exit;
?>
