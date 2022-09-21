

    
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
            

            
    function billerRecovery(){
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
            ajaxRequest.open("GET", "billeridRecovery.php" + queryString, true);
            ajaxRequest.send(null);
    }
    
    