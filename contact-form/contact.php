<!DOCTYPE html>
<html lang="en">


<head>

<!-- Meta -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Title -->
<title>Planquadrat-Contact Us</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../css/planquadrataabc.css" media="all">
<script src="../script/lib/modernizr-2.8.3.min06ac.js" type="text/javascript"></script>
<link rel="canonical" href="index.html" />


</head>

<body>
           
    


<?php include('header.php'); ?>












    
    <div class="site-wrap">
        <div class="page-container main-content">

            <div class="pack">
                <div class="form-head text-center">
                    <h4></i>Get In Touch</h4>
                    <span class="dash"></span>
                </div>
                <form method="post" >
                     <p id="errorpop" style="display: none;"></p>     
                    <div class="contact-body">
                        <div class="contact-head">
                            <h4><i class=""></i>Leave Us Message</h4>
                        </div>
                        <div class="name">                   
                            <input type="text" id="fname" class="form-control" name="fname" placeholder="Name :">
                        </div>
                        <div class="email">
                        </div>
                            
                        <div class=" phne">
                            <input type="text" id="phone" class="form-control" name="phone"  placeholder="Phone No :">
                        </div>
                        <div class="msg">
                            <textarea rows="4" id="message" placeholder="Message :" class="form-control" name="msg" ></textarea>
                        </div>
                        <div class="send">
                            <button class="send-but" type="button" onclick="SubmitEnquiry()" formaction="">Send</button>
                        </div>
                    </div>    
                   
                </form>
                <div class="cntct-info">
                    <div class="cntct-address">
                        <i class="material-icons ico">add_location</i>
                        <p class="inli-blck">3rd Floor, Akshar Blue Chip IT Park, Turbhe MIDC,<br> Turbhe,Navi Mumbai, Maharashtra 400705</p>
                    </div>

                    <div class="cntct-phne">
                        <i class="material-icons ico">phone</i>
                        <p class="inli-blck">876-345-21-321</p>
                    </div>
                    <div class="cntct-email">
                        <!--i class="material-icons">email</i-->
                        <img src="../img/mail.png">
                        <p class="inli-blck">loremepsum@gmail.com</p>
                    </div>
                    
                    <div class="cntct-map" id="map">
                        
                    </div>
                </div>
            </div>
        </div>



<?php include('../footer.php');?>

     </div> <!-- Site Wrap -->          


 <script async src="../script/planquadrat07a0.js?1494228967" type="text/javascript"></script>

    <script type="text/javascript">
        

        document.addEventListener('DOMContentLoaded', function() {
            window.isReady = true;
        });

    </script>

    <script>
      function initMap() {
        var uluru = {lat: 19.069308, lng: 73.019718};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfO6yI7IWnSEAPrEfsrJwoMtEXVWjMozE&callback=initMap">
    </script>
    <script type="text/javascript">
            function SubmitEnquiry(){
              
             console.log("click");
              //alert('haii');
             //  var triptype = document.getElementsByName('triptype').value;
             
             // // var tripstatus = document.getElementsByName('tripstatus').value;
               var name = document.getElementById('fname').value;
               var phone = document.getElementById('phone').value;
               var message = document.getElementById('message').value;
               var email = document.getElementById('email').value;
               
               
             console.log("hi hello")
               console.log(name,phone,message,email);
               if( name == ''){
                 document.getElementById('errorpop').style.display="block";
                 document.getElementById('errorpop').innerHTML = 'Please Enter Your Name';
                 setTimeout(function() {
                   $('#errorpop').fadeOut('fast');
                 }, 2000);
               } 
               else if( phone == '')
               { 
                 document.getElementById('errorpop').style.display="block";
                 document.getElementById('errorpop').innerHTML = 'Please Enter Your Phone Number ';
                 setTimeout(function() {
                   $('#errorpop').fadeOut('fast');
                 }, 2000);
               }
               
               else if( email == '')
               { 
                 document.getElementById('errorpop').style.display="block";
                 document.getElementById('errorpop').innerHTML = 'Please Enter Your Email ';
                 setTimeout(function() {
                   $('#errorpop').fadeOut('fast');
                 }, 2000);
               }
              
               else if( message == '')
               { 
                 document.getElementById('errorpop').style.display="block";
                 document.getElementById('errorpop').innerHTML = 'Please Enter a Message ';
                 setTimeout(function() {
                   $('#errorpop').fadeOut('fast');
                 }, 2000);
               }
             
                else {
                 var sms="mail.php";
                 
                 var url = sms+"?name="+name+"&phone="+phone+"&email="+email+"&message="+message;
                 console.log(url);
                 if(window.XMLHttpRequest){
                     var xmlhttp=new XMLHttpRequest();
                 } else {
                     var xmlhttp=new ActiveXObject("Microsoft.XMLHTTP"); 
                 }
                 xmlhttp.onreadystatechange=function(){
                     if(xmlhttp.readyState==4){
                         var response=xmlhttp.responseText;
                         if(response == 1){
                            
                       document.getElementById('errorpop').style.display="block";
                       document.getElementById('errorpop').innerHTML = 'Message Has Been  Send Successfully';
                       setTimeout(function() {
                           $('#errorpop').fadeOut('fast');
                          // window.location='index.html';                       
                       }, 2000);
                   }
                   else {
                       document.getElementById('errorpop').style.display="block";
                       document.getElementById('errorpop').innerHTML = 'Error';
                       setTimeout(function() {
                           $('#errorpop').fadeOut('fast');
                       }, 2000);
                   }
               }
           }
           xmlhttp.open("GET",url,true);
           xmlhttp.send();

       }
   
   }
          </script>

</body>


</html>
