
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
  </style>
</head>

<body>
    
    <?php require_once 'header.php'; ?>

    <!-- Pay Application Fee -->
    <section class="div-full-container" id="pay-applicationFee-area">
        <form class="div-formating" action="easy-payment.php">
        <div class="mb-3">
          <img class="div-image-formating" src="./img/taka.png" alt="">
          <div class="mb-3 title">
            <h3 class="div-title-formating">Pay Application Fee</h3>
          </div>
        </div>
        <div>
            <div class="bkash" style="width: 50%; margin:auto">
              <img style="width: 80%;" src="./img/bkash.png" alt="">
            </div>
          </div>
          <div class="mb-3">
          </div>
          <div class="button-div button-center">
            <button class="button-formating">Pay</button>
          </div>

      </form>
    </section>

  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>

</body>

</html>