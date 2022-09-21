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
    <title>Complain Section</title>
  <link rel="stylesheet" href="/PGDITAdmissionAutomation/path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="/PGDITAdmissionAutomation/css/bootstrap.min.css">
  <link rel="stylesheet" href="/PGDITAdmissionAutomation/style.css">
  <link rel="stylesheet" href="complain.css">
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
  <script src="AdminAjax.js">
    $(document).ready(function () {
    complainAdmin();
});
  </script>
</head>
<body onload="javascript: complainAdmin()">
    
    
    <?php include_once 'adminHeader.php'; ?>

      <!-- Update  Notice -->
      
    <section class="div-full-container" id="apply-area">
      <div class="div-formating">
        <div class="mb-3">
          <div class="mb-3 title">
            <h3 class="div-title-formating">Complain Box</h3>
          </div>
        </div>
        <div class="mb-3" id="alert">

        </div>
      </div>
    </section>





</body>
</html>