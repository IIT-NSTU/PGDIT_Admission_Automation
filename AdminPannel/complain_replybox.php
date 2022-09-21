<?php
session_start();
error_reporting(0);


  if(!isset($_SESSION['name'])){
    header("Location: adminLoginUI.php"); exit();
  }else{
    $_SESSION['roll']=$_POST['id']; 
  }
    ?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/PGDITAdmissionAutomation/css/bootstrap.min.css">
  <link rel="stylesheet" href="/PGDITAdmissionAutomation/dashboard.css">
  <!-- <link rel="stylesheet" href="./getBillerID.css"> -->
  <link rel="stylesheet" href="/PGDITAdmissionAutomation/fontawesome/css/fontawesome.min.css">

  <title>Complain Box</title>
  <style>
    ::placeholder {
  color: green;
  opacity: 1; /* Firefox */
}

:-ms-input-placeholder { /* Internet Explorer 10-11 */
 color: red;
}

::-ms-input-placeholder { /* Microsoft Edge */
 color: red;
}
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
#chat{
    height: 200px;
}
#chat .you .message{
    background: #273459;
}
#chat .me .message{
    background: #01908d;
}
.chat-div-formating{
    box-shadow: 5px 5px 12px #bdbdcd,
        -5px -5px 12px #ffffff;
}

.div-formating{
    box-shadow: 5px 5px 12px #bdbdcd,
        -5px -5px 12px #ffffff;
}
main footer textArea{
    background: lavender;
    height: 60px;
    box-shadow: inset 5px 5px 9px #b6b6c6,
    inset -5px -5px 9px #ffffff;
}  
  
  </style>
  <script src="AdminAjax.js"></script>
</head>

<body onload="javascript: replyComplain()">
  <section class="coverPage" id="homeArea">
    <header>
      <a href="#" class="logo"><img class="" src="/PGDITAdmissionAutomation/img/NstuLogo.png" alt=""></a>
      <ul>
          <li><a href="./complainUI.php" class="scroll_to"><< Back</a></li>
          <li><a href="./adminProfile.php" class="scroll_to">Profile</a></li>
        
      </ul>
    </header>
  </section>
    
    <section class="div-full-container" id="getBillerID-area">
        <div class="chat-div-formating">
            <div class="mb-3">
                <img class="div-image-formating" src="/PGDITAdmissionAutomation/img/loginicon.jpg" alt="">
                <div class="mb-3 title">
                  <h3 class="div-title-formating">Reply Box</h3>
                </div>
              </div>
            <main>
                <ul id="chat">
                    
                </ul>
                
                <footer>
                    <textarea name="complain" id='complain' placeholder="Write your Solution..."></textarea>
                   
                    <h3 align="right"><button style="border-radius: 10px;width: 100px;border: 1px solid black;background: #d5fafa;" onclick="replyComplain()">Send</button></h3>
                  
                </footer>
            </main> 
        </div>
    </section>
  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>

</body>

</html>




