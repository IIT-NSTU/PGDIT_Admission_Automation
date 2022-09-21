<?php
    session_start();
error_reporting(0);
    
    if(!isset($_SESSION['roll'])){
      header("Location: applicant_loginUI.php");exit();
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
</head>

  <script>
function myComplain() {
    
    var ajaxRequest;  // The variable that makes Ajax possible!
            
            try {        
               // Opera 8.0+, Firefox, Safari
               ajaxRequest = new XMLHttpRequest();
            } catch (e) {
               
               // Internet Explorer Browsers
               try {
                  ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
               } catch (e) {
                  
                  try {
                     ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
                  } catch (e) {
                     // Something went wrong
                     alert("Your browser broke!");
                     return false;
                  }
               }
            }
            
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('chat').innerHTML = ajaxRequest.responseText;
                  
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var complain= document.getElementById("complain").value;
    
            var queryString = "?complain=" + complain;
            
            ajaxRequest.open("GET", "ComplainAjax.php" + queryString, true);
            ajaxRequest.send(null);
            
            document.getElementById('complain').value="";
            document.getElementById('o').value="o";
            document.getElementById('time').value=new Date().getTime();
         }
    
</script>


<body onload="javascript:myComplain()">
  <section class="coverPage" id="homeArea">
    <header>
      <a href="./index.php" class="logo"><img class="" src="./img/NstuLogo.png" alt=""></a>
      <ul>
          <li><a href="./index.php" class="scroll_to">Home</a></li>
        <li><a href="./dashboard.php" class="scroll_to">Dashboard</a></li>
        
      </ul>
    </header>
  </section>
    
    <section class="div-full-container" id="getBillerID-area">
        <div class="chat-div-formating">
            <div class="mb-3">
                <img class="div-image-formating" src="./img/loginicon.jpg" alt="">
                <div class="mb-3 title">
                  <h3 class="div-title-formating">Complain Box</h3>
                </div>
              </div>
            <main>
                <ul id="chat">
                    

                </ul>
                
                <footer>
                    <textarea name="complain" id='complain' placeholder="Write your Complain..."></textarea>
                    
                    <h3 align="right"><button style="border-radius: 10px;width: 100px;border: 1px solid black;background: #d5fafa;" onclick="myComplain()">Send</button></h3>
                  
                </footer>
            </main> 
        </div>
    </section>
  <script src="./js/bootstrap.bundle.js"></script>
  <script src="./app.js">  </script>

</body>

</html>



