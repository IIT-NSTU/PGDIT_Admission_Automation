<?php


$regex="/^(01){1}[3456789]{1}[0-9]{8}$/";

if( isset($_POST['phone']) && preg_match($regex, $_POST['phone'])) {
if(isset($_POST['name']) || !empty($_FILES['image']['name'])){

    $name=$_POST['name'];
    $phone=$_POST['phone'];
    
        $img_path= "img/";  //'C:\xampp\htdocs\PGDITAdmissionAutomation\photo\  
        $file= basename($_FILES['image']['name']);      
        $fileName = $img_path. $file; 
        $fileType = pathinfo($fileName, PATHINFO_EXTENSION); 
         
        // Allow certain file formats 
        $allowTypes = array('png'); 
        
        if(in_array($fileType, $allowTypes)){ 
            $image = $_FILES['image']['tmp_name']; 
            $imgContent = addslashes(file_get_contents($image));
                if (move_uploaded_file($_FILES['image']['tmp_name'], $fileName)) {
                  
        $db = new mysqli('localhost','root','1234mbrs','pgdit_admission') or die("Problem to connect with server...");
        $db->query("DELETE FROM `admin` WHERE type='Director';");
        $result1= $db->query("INSERT INTO `admin`(`name`, `phone`, `type`, `photo`, `recovery_time`)  VALUES ('$name','$phone','Director','$imgContent','2022-09-12 13:20:17')");
        $db->query("UPDATE `admin` SET `recovery_time`='2022-09-12 13:20:17' WHERE type= 'Director';");
        
        if($result1==true){
          require_once 'C:\xampp\htdocs\PGDITAdmissionAutomation\Recovery.php';
          
          $recovery= new RecoveryFactory();
          $recovery->execute($phone,"password");
          
            header("location: directorLoginUI.php",  true,  302 );  exit;
            
        } else {
            header("location: directorChangeUI.php",  true,  302 );  exit;
        }   
    
    $db->close();
    } else {
    echo "File not moved!";
}
} else {
    echo "Not a PNG file!";
}

                } else {
    echo "Name or File not selected!";
}
} else {
    echo "Incorrect Phone Number!";
}

