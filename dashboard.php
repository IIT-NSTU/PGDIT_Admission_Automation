<?php
    session_start();
    error_reporting(0);
    echo "";
    if(isset($_SESSION['phone'])&& isset($_SESSION['biller_id'])){
  
        
    require_once('Login.php');
    
    $applicant_login=new ApplicantLogin();
    $applicant_context= new LoginContext($applicant_login);
    $applicant_context->execute($_SESSION['phone'], $_SESSION['biller_id']);
    
            $roll=$applicant_login->id;            $applicantname=$applicant_login->applicantname;
            $fname=$applicant_login->fname;        $mname=$applicant_login->mname;
            $address=$applicant_login->address;    $photo=$applicant_login->photo;
            $txn=$applicant_login->txn;            $score=$applicant_login->score;
            $admitted=$applicant_login->admitted;
    
    if($roll==null || $roll==""){
    
header("Location: applicant_loginUI.php");exit();
    }
 else {
     
    $_SESSION['roll']= $roll;   
}

  }else{
      if(isset($_POST['phone']) && isset($_POST['billerid'])){
    $_SESSION['phone']=$_POST['phone'];
    $_SESSION['biller_id']=$_POST['billerid']; 
    header("Location: dashboard.php");exit();
      } else {
      header("Location: applicant_loginUI.php");exit();
      }
  }
?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="./dashboard.css">
  <!-- <link rel="stylesheet" href="./getBillerID.css"> -->
  <link rel="stylesheet" href="font-awesome.min.css">
  <link rel="stylesheet" href="./fontawesome/css/fontawesome.min.css">

  <title>Dashboard</title>
  <style>
      body{
          background: lavender;
      }
    header {
    border-radius: 0px;
    background: #070a35;
}
.div-full-container{
    margin-top: 55px;
    background: lavender;
}
.div-formating{
    box-shadow: 5px 5px 12px #bdbdcd,
        -5px -5px 12px #ffffff;
}
.leftcol{
    background: lavender;
}
.rightcol{
    background: lavender;
    box-shadow: inset 5px 5px 9px #b6b6c6,
    inset -5px -5px 9px #ffffff;
}
.row1 .leftcol .photo img{
    box-shadow: none;
}
.row1 .leftcol .admit a:hover{
    color : white;
    background: black;
    padding: 10px;
    
}
  </style>
</head>

<body>
  <section class="coverPage" id="homeArea">
    <header>
      <a href="./index.php" class="logo"><img class="" src="./img/NstuLogo.png" alt=""></a>
      <ul>
          <li><a href="./index.php" class="scroll_to">Home</a></li>
        <li><a href="./Complain.php" class="scroll_to">Complain Box</a></li>
        
      </ul>
    </header>
  </section>


    <!-- Pay Application Fee -->
    <section class="div-full-container" id="getBillerID-area">
        <div class="div-formating">
             <div class="mb-3">
                <img class="div-image-formating" src="./img/aca.jpg" alt="">
                <div class="mb-3 title">
                  <h3 class="div-title-formating">Dashboard</h3>
                </div>
                <div class="mb-3 title">
                    </br>
                </div>
              </div>
              <div class="row1">
                <div class="leftcol col-lg-6 ">
                    <div class="photo">
                        <?php echo "<img src='data:image/png;charset=utf8;base64,$photo'/>"; ?>
                    </div>
                    <div class="admit">
                        <?php echo "  </br> "; ?>
                    </div>
                    <div class="admit">
                        <?php 
                        if($admitted==null){ 
                            
                                    
include_once 'insert.php';
$result = Insert::insertQuery("Select * from `date_time` where NOW()>`start_date` and NOW()<`end_date` and `event_name`='Admit card download'");
$num_result = $result->num_rows;
$row = $result->fetch_assoc();
if($row['event_name']=='Admit card download'){
  
                            echo "<a href='./admitcard.php' download='admitcard.pdf'>Download Admit Card</a>";
                        }   
                        }
                        else if($admitted==1){
                            echo "<a href='./studentID.php' download='student_id.pdf'>Download ID Card</a>";
                        } 
                        else {
                            echo " ";
                        }
                        ?>
                    </div>
                    <div class="admit">
                        <a href="./Logout.php">Log Out</a>
                    </div>
                </div>
                <div class="rightcol col-lg-6">
                        <div class="row">
                            <div class="row ">
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                  <label for="date-of-birth">Applicant's Name :</label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                    <label for="date-of-birth"><b><?php echo "$applicantname";  ?></b></label>
                                </div>
                              </div>
                            <div class="row ">
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                  <label for="date-of-birth">Fathers's Name :</label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                    <label for="date-of-birth"><?php echo "$fname";  ?></label>
                                </div>
                              </div>
                            <div class="row ">
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                  <label for="date-of-birth">Mother's Name :</label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                    <label for="date-of-birth"><?php echo "$mname";  ?></label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                  <label for="date-of-birth">Roll:</label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1 ">
                                    <label for="date-of-birth"><b><?php echo "$roll";  ?></b></label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                  <label for="date-of-birth">Result (Score) :</label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1 ">
                                    <label for="date-of-birth">
                                    <?php 
                                    
include_once 'insert.php';
$result = Insert::insertQuery("Select * from `date_time` where NOW()>`start_date` and NOW()<`end_date` and `event_name`='Result Publication'");
$num_result = $result->num_rows;
$row = $result->fetch_assoc();
if($row['event_name']=='Result Publication' && $score!=null){
            
echo $score;
}
else echo 'N/A';
                                     ?></label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                  <label for="date-of-birth">Position :</label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1 ">
                                    <label for="date-of-birth"><b>
                                        <?php 
                                    
include_once 'insert.php';
$result = Insert::insertQuery("Select * from `date_time` where NOW()>`start_date` and NOW()<`end_date` and `event_name`='Result Publication'");
$num_result = $result->num_rows;
$row = $result->fetch_assoc();
if($row['event_name']=='Result Publication' && $score!=null){
            
$result1 = Insert::insertQuery("SELECT RowNo, roll, score FROM (SELECT ROW_NUMBER() over ( order by score DESC) RowNo, roll, score FROM result) as t WHERE t.score = $score");
$num_result1 = $result1->num_rows;
$row1 = $result1->fetch_assoc();
echo $row1['RowNo'];
}
else echo 'N/A';
                                     ?></b></label>
                                </div>
                              </div>
                              <div class="row">
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1">
                                  <label for="date-of-birth">Eligibility Status :</label>
                                </div>
                                <div class="col-sm-12 col-md-6 col-lg-6 mt-1 ">
                                    <label for="date-of-birth"><?php echo($score<=30)? "N/A" : "Eligible";  ?></label>
                                </div>
                              </div>
                        </div>
                </div>
              </div>
            <div class="mb-3">
                <div class="mb-3 title">
                    </br>
                </div>
              </div>
        </div>
    </section>

  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>

</body>

</html>
