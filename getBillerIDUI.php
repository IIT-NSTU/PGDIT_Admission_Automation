
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
</head>
 <style>
      .coverPage {
    height:0vh;
    margin-top: -185px;
}
 .billerMsg{
        margin-top: 100px;
    }
    .div-formating{
        margin-top: 194px;
    }
  </style>

<body>
    
    
    <?php require_once 'header.php'; ?>
    
    
    <!-- Pay Application Fee -->
    <section class="div-full-container" id="getBillerID-area">
    
        <form class="div-formating" action="getBillerID.php" method="post">
        <div class="mb-3">
          <img class="div-image-formating" src="./img/loginicon.jpg" alt="">
          <div class="mb-3 title">
            <h3 class="div-title-formating">Get Biller Id</h3>
          </div>
        </div>
        <div class=" mb-3">
            <input type="number" class="form-control" name="phone" placeholder="Enter Your Mobile Number" required>
          </div>
          <div class="mb-3">
            <input type="text" class="form-control" name="txn" placeholder="Enter Your Txn ID " required>
          </div>
        <div class="mb-3">
            
          <h6>* Mobile number should be same as the number used in application form.</h4>
          <h6>** Biller Id will be sent to this number.</h4>
        </div>
        <div class="button-div button-center">
          <button class="button-formating">Submit</button>
        </div>
      </form>


    </section>

  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>

</body>

</html>