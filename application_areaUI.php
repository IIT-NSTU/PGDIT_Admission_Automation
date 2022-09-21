
<?php
error_reporting(0);
include_once 'insert.php';
$result = Insert::insertQuery("Select * from `date_time` where NOW()>`start_date` and NOW()<`end_date` and `event_name`='Application deadline'");
$num_result = $result->num_rows;
$row = $result->fetch_assoc();
if($row['event_name']!='Application deadline'){
            echo "<script type='text/javascript'>alert('Sorry! You can't apply before or after application deadline.');</script>";    
               
header("Location: index.php"); exit();
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="./css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <title>PGDIT Automation</title>
  <style>
      .coverPage {
    height:0vh;
}
.div-formating{
    margin-top: 45px;
}
  </style>
</head>

<body>
    <?php require_once 'header.php'; ?>
    
    <!-- _____________Apply Area_____________ -->

    <section class="div-full-container" id="apply-area">
      <form class="div-formating">
        <div class="mb-3">
          <img class="div-image-formating" src="./img/applicationProcess1.png" alt="">
          <div class="mb-3 title">
            <h3 class="div-title-formating">Application Process</h3>
          </div>
        </div>
        <div class="mb-3">
          <a id="step3" href="./submitApplicationFromUI.php" class="form-control">
            Step 1 : Submit Application Form</a>
        </div>
        <div class="mb-3">
          <a id="step1" href="./payApplicationFeeUI.php" class="form-control">Step 2 : Pay Application Fee</a>
        </div>
        <div class="mb-3">
          <a id="step2" href="./getBillerIDUI.php" class="form-control">Step 3 : Get Biller Id</a>
        </div>
        <div class="mb-3">
          <a href="applicant_loginUI.php" class="form-control">Step 4 : Login</a>
        </div>
      </form>
    </section>
    </body>
</html>
