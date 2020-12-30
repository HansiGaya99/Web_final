<?php

include_once 'connection.php';
$sql = "UPDATE counterr SET visits = visits+1 WHERE id = 1";
$con->query($sql);  

ini_set( "display_errors", 0);

session_start();
$log1=htmlspecialchars($_SESSION['NameFirst']);
$log2=htmlspecialchars($_SESSION['NameLast']);
$log3=htmlspecialchars( $_SESSION['NICno']);
$log4=htmlspecialchars($_SESSION['Email']);





$resv1=htmlspecialchars($_SESSION['NameFirst2']);
$resv2=htmlspecialchars($_SESSION["NameLast2"]);
$resv3=htmlspecialchars( $_SESSION["Email2"]);
$resv4=htmlspecialchars( $_SESSION["Phone2"]);
$resv5=htmlspecialchars($_SESSION["Arrive2"]);
$resv6=htmlspecialchars($_SESSION["Depart2"]);
$resv7=htmlspecialchars($_SESSION["Adult2"]);
$resv8=htmlspecialchars($_SESSION["Child2"]);
$resv9=htmlspecialchars($_SESSION["category2"]);



echo "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <title>Sea side south park</title>
    <link rel='stylesheet' href='../css/css.css'>
    <link rel='stylesheet' href='../css/css/bootstrap.css'>
    <link rel='stylesheet' href='../css/css/bootstrap.min.css'>
    <link rel='stylesheet' href='../css/help.css'>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css'/>
    

    <script src='https://code.jquery.com/jquery-3.5.1.slim.min.js' integrity='sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js' integrity='sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN' crossorigin='anonymous'></script>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js' integrity='sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s' crossorigin='anonymous'></script>

    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css' integrity='sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2' crossorigin='anonymous'>
    
    


    <script type='text/javascript' src='../js/js.js'></script>
    <script type='text/javascript' src='../js/js/bootstrap.js'></script>
    <script type='text/javascript' src='../js/js/bootstrap.min.js'></script>
   

    

</head>
<body class='body'  >
  <!--Navigation Bar-->
    <nav class='navbar navfont  navbar-expand-lg fixed-top' id='navbar'>
        <a href='../html/sea south side park.html' class='nav-brand navlink'><img src='../resourses/logo.png' class='navlogo'>Sea Side South Park</a>
        <button  class='navbar-toggler' data-toggle='collapse' data-target='#dropMenu'><img src='../resourses/menu.png' class='navbar-toggler-icon menuicon'></button>
        <div class='collapse navbar-collapse justify-content-end dropdownback' id='dropMenu'>
            <ul class='navbar-nav' >
                <li class='nav-item'><a href='../html/sea south side park.html' class='nav-link navlink2'> &nbsp;ABOUT US&nbsp; </a></li>
                <li class='nav-item'><a href='../html/Rooms_and_accomadations.html' class='nav-link navlink2'> &nbsp;ACCOMADATIONS&nbsp; </a></li>
                <li class='nav-item'><a href='../database/rescheck.php' class='nav-link navlink2'> &nbsp;RESERVATIONS&nbsp; </a></li>
                <li class='nav-item dropdown'>
                    <a class='nav-link dropdown-toggle nav-link navlink2' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'> &nbsp;MULTIPLE HOTELS&nbsp; 
                    </a>
                    <div class='dropdown-menu dropdown-content1' aria-labelledby='navbarDropdown'>
                        
                      <a class=' navlink2 dropdownA' href='../html/gallery.html'> GALLERY </a>
                      <a class=' navlink2 dropdownA' href='../html/facilities-main.html'> FACILITIES </a>
                     
                      
                      
                    </div>
                  </li>
                <li class='nav-item'><a href='../html/contactUs.html' class='nav-link navlink2' > &nbsp;CONTACT US&nbsp; </a></li>
                <li class='nav-item'><a href='../database/logincheck.php' class='nav-link navlink2' style='color: burlywood;'> &nbsp;ACCOUNT&nbsp; </a></li>
                <li class='nav-item'><a href='../database/logout.php' class='nav-link navlink2'> &nbsp;LOG OUT&nbsp; </a></li>
                <!--button type='button' class=' btn1 navbtn' ><a href='../database/logout.php' class=' navlink2'>LOG OUT</a></button-->
                <li class='nav-item'><a href='../html/Help.html' class='nav-link navlink2'> &nbsp;HELP ?&nbsp; </a></li>
                
            </ul>

        </div>
        

    </nav>
    <!--Navigation Bar End-->
    

    <div id='pool' class='pback container-fuild' style='background-image: url(../resourses/help.jpg); background-size: cover; width: 100%; padding: 50px; background-attachment: fixed;'>
        <br><br>
       
        <h1 style='text-align:center; color: rgb(116, 85, 19);  text-shadow: 5px 5px 5px rgba(36, 28, 2, 0.349);' > Welcome $log1 $log2  </h1><br>
        <div id='about' class='container' style='background-color: rgba(12, 8, 0, 0.486); padding: 70px; border-radius: 10px;color: white;padding-left:0%;text-align:center;'>
        
            
                   
        <br><h3 style='color: white;'>Login Details</h3><br>            

                   First Name &nbsp &nbsp;:&nbsp;&nbsp; $log1 <br>
                   <hr style='background-color:white;width:50%;padding-left:0px;'>
                    
                    Last Name &nbsp;&nbsp;: &nbsp;&nbsp;$log2 <br>
                    <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                    NIC Number &nbsp;&nbsp; : &nbsp;&nbsp;$log3 <br>
                    <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                    E-mail &nbsp;&nbsp;: &nbsp;&nbsp;$log4 <br>
                    <hr style='background-color:white;width:50%;padding-left:0px;'>
                

              
                    <br><h3 style='color: white;'>Reservation Details</h3><br>
                 First Name &nbsp;&nbsp;:&nbsp;&nbsp; $resv1 <br>
                 <hr style='background-color:white;width:50%;padding-left:0px;'>
                   
                    
                    Last Name &nbsp;&nbsp;:&nbsp;&nbsp; $resv2 <br>
                    <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                    E-mail &nbsp;&nbsp;: &nbsp;&nbsp;$resv3 <br>
                    <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                  Phone Number &nbsp;&nbsp;:&nbsp;&nbsp; $resv4 <br>
                  <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                  Arrival Date &nbsp;&nbsp;:&nbsp;&nbsp; $resv5<br>
                  <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                  Departure Date &nbsp;&nbsp;:&nbsp;&nbsp; $resv6 <br>
                  <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                   Number Of Adults &nbsp;&nbsp;:&nbsp;&nbsp; $resv7 <br>
                   <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                  Number Of Children &nbsp;&nbsp;: &nbsp;&nbsp;$resv8 <br>
                  <hr style='background-color:white;width:50%;padding-left:0px;'>
                  
                  Room Category &nbsp;&nbsp;:&nbsp;&nbsp; $resv9 <br>
                  <hr style='background-color:white;width:50%;padding-left:0px;'>
                
              <button class='buttongallery' style='padding: 2px;width: 180px; box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.582);'>Cancel Reservation</button>
        </div>        
    </div>";
            

?>






<!--Footer-->
<div class="container-fuild img-fluid" style="background-image: url(../resourses/bg4.png); background-size:cover; padding-right: 15px; ">
  <div class="row" style=" background-color: rgba(0, 0, 0, 0.568);">
    
  
  
    <div class="col-sm-12 col-xl-4 mx-auto" style="text-align: center; padding: 10px;"><br>
    
      <a href="../html/sea south side park.html" class="nav-brand navlink"><img src="../resourses/logo.png" class="footerlogo">Sea Side South Park</a><br>
       
     
      <a href="#"><img src="../resourses/map.jpg" class="media2" alt=""></a><a href="#"><img src="../resourses/mail.jpg" class="media2" alt=""></a><a href="#"><img src="../resourses/fb.jpg" class="media2" alt=""></a><a href="#"><img src="../resourses/insta.jpg" class="media2" alt=""></a><a href="#"><img src="../resourses/twit.jpg" class="media2" alt=""></a><br>
        <p style=" color: rgb(255, 255, 254); font-size: 13px;" >+94 75 700 8255 &nbsp; | &nbsp;  +94 70 555 5556<br><br>© 2019 - 2020&nbsp; &nbsp; Sea Side South Park Hotel.&nbsp; &nbsp; All Rights Reserved</p>
  
      </div>
     
        </div>
        
        </div>
        
</div>
<!--Footer End-->   



</body>
</html>