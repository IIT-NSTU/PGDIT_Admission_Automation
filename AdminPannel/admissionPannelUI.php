<?php
session_start();
error_reporting(0);


  if(!isset($_SESSION['name'])){
header("Location: adminLoginUI.php"); exit();
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Pannel</title>
    <link rel="stylesheet" href="./setResult.css">
    <script src="AdminAjax.js"></script>
    <style>
    .navbar{
            background: #070a35;
            height: 80px;
            background: #070a35;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
    }
    .navbar .logo img{
        width: 50px;
    }
    .navbar .links{
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
        
    }
    a{
        text-decoration: none;
        color: white;
    }
    form button{
        background: lavender;
    }
    a:hover{
        color: yellow;
    }
    .link-style{
        
    }
    .padding{
        padding: 5px;
    }
    </style>
</head>
<body onload="javascript: admit()">
    <?php include_once 'adminHeader.php'; ?>

      <!-- Update  Notice -->
      <section class="admissionPannel-section">
        <div class="container1">
            <div class="admissionPannel-form">
                <div class="content">
                    <div class="main-div">
                        <div class="title">
                         Admission Status
                        </div>
                        <div class="row" id='alert' align='center'>
                        </div>
                    </div>
                </div>
            </div>
            <div>&emsp; &emsp;</div>
            <div class="admissionPannel-form">
                <div class="content">
                    <div class="main-div">
                        <div class="title">
                         Admission Panel
                        </div>
                        <div class="row">
                        <input type="number" name="roll" id="roll"  placeholder="Applicant's Roll">
                        
                       <select name="status" id="status">
                        <option value="1">Admit</option>
                        <option value="0">Reject</option>
                       </select>
                        </div>
                        <div class="submit-button">
                            <button onclick="admit()">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>