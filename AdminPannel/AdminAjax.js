
    
    var ajaxRequest;  // The variable that makes Ajax possible!
            
     function request(){
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
        }    
            // Create a function that will receive data
            // sent from the server and will update
            // div section in the same page.
            

            
    function passRecovery(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText);
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var phone= document.getElementById("phone").value;
    
            var queryString = "?phone=" + phone;
            ajaxRequest.open("GET", "adminForgetPass.php" + queryString, true);
            ajaxRequest.send(null);
    }
            
          
          
            
    function password(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText);
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var code= document.getElementById("code").value;
            var pass= document.getElementById("pass").value;
            var repass= document.getElementById("repass").value;
    
            var queryString = "?code="+code+"&pass="+pass+"&repass="+repass;
            ajaxRequest.open("GET", "setPassword.php" + queryString, true);
            ajaxRequest.send(null);
    }
            
          
          
            
    function login(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                   if(ajaxRequest.responseText=="success"){
                       window.location.href = "./adminProfile.php";
                   }
                   else{
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText); 01930878889
                   }
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var phone= document.getElementById("phone").value;
            var pass= document.getElementById("pass").value;
    
            var queryString = "?phone="+phone+"&pass="+pass;
            ajaxRequest.open("GET", "adminLogin.php" + queryString, true);
            ajaxRequest.send(null);
    }
         


    function setResult(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                 
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText); 
                 
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var roll= document.getElementById("roll").value;
            var score= document.getElementById("score").value;
    
            var queryString = "?roll="+roll+"&score="+score;
            ajaxRequest.open("GET", "setResult.php" + queryString, true);
            ajaxRequest.send(null);
    }
         


    function admit(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                 
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText); 
                 
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var roll= document.getElementById("roll").value;
            var status= parseInt(document.getElementById("status").value);
    
            var queryString = "?roll="+roll+"&status="+status;
            ajaxRequest.open("GET", "admissionPannel.php" + queryString, true);
            ajaxRequest.send(null);
    }
         


    function complainAdmin(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                 
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText); 
                 
               }
            };
    
            ajaxRequest.open("GET", "complain.php?", true);
            ajaxRequest.send(null);
    }
            
       


function replyComplain() {
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('chat').innerHTML = ajaxRequest.responseText;
                  
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var complain= document.getElementById("complain").value;
    
            var queryString = "?complain=" + complain;
            
            ajaxRequest.open("GET", "complain_reply.php" + queryString, true);
            ajaxRequest.send(null);
            
            document.getElementById("complain").value="";
         }
            
          
          
            
    function directorLogin(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                   if(ajaxRequest.responseText=="success"){
                       window.location.href = "DirectorPannel/directorProfile.php";
                   }
                   else{
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText); 01930878889
                   }
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var phone= document.getElementById("phone").value;
            var pass= document.getElementById("pass").value;
    
            var queryString = "?phone="+phone+"&pass="+pass;
            ajaxRequest.open("GET", "DirectorPannel/directorLogin.php" + queryString, true);
            ajaxRequest.send(null);
    }
            
          
          
            
    function director_password(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText);
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var code= document.getElementById("code").value;
            var pass= document.getElementById("pass").value;
            var repass= document.getElementById("repass").value;
    
            var queryString = "?code="+code+"&pass="+pass+"&repass="+repass;
            ajaxRequest.open("GET", "directorSetPass.php" + queryString, true);
            ajaxRequest.send(null);
    }
         


            
    function passRecovery(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText);
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var phone= document.getElementById("phone").value;
    
            var queryString = "?phone=" + phone;
            ajaxRequest.open("GET", "adminForgetPass.php" + queryString, true);
            ajaxRequest.send(null);
    }
    
    
            
    function directorpassRecovery(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText);
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            var phone= document.getElementById("phone").value;
    
            var queryString = "?phone=" + phone;
            ajaxRequest.open("GET", "directorForgetPass.php" + queryString, true);
            ajaxRequest.send(null);
    }
    
    
            
    function exportDb(){
          request();
            ajaxRequest.onreadystatechange = function() {
            
               if(ajaxRequest.readyState === 4 && ajaxRequest.status === 200) {
                  document.getElementById('alert').innerHTML = ajaxRequest.responseText;
                  //alert(ajaxRequest.responseText);
               }
            };
            
            // Now get the value from user and pass it to
            // server script.
            
            ajaxRequest.open("GET", "exportDB.php?", true);
            ajaxRequest.send(null);
    }
            
           



         
         
         
