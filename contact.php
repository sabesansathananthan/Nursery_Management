<!DOCTYPE html>
<html>
   <?php 
      include "loginform.php";
    ?>
   <head>
      <title>Happy Kids_Contact</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <!--css-->
      <link href="css/master.css" rel="stylesheet" type="text/css">
      <!--jquery-->
      <link rel="icon" type="image/png" href="images/fav_16.png" sizes="16x16">
      <script src="js/jquery-1.11.1.min.js" type="text/javascript"></script>
      </script>
      <script src="js/general.js" type="text/javascript"></script>
   </head>
   <body class="bg">
      
         
         <?php 
            include "topbar.php";
          ?>
         
      
<!--start of contact-->
      <div class="contact">
         <div class="row">
            <div class="col-md-12">
               <div class="contact-section">
                  <div class="col-md-6">
                     
                     <div class="form">
                        <div class="addressMain">
                           <h2>Get In Touch</h2>
                           <p>You can contact us any way that is convenient for you. We are available 24/7 via fax or email. You can also use a quick contact form below or visit our office personally. We would be happy to answer your questions.</p>
                        </div>
                        <form action="connect.php" method="POST">
                           <input type="text" name="fname" placeholder="First Name" class="formFeild">
                           <input type="text" name="lname" placeholder="Last Name" class="formFeild">
                           <input type="email" name="email" placeholder="Email " class="formFeild">
                           <input type="text" name="phone" placeholder="Phone" class="formFeild">
                           <textarea rows="7" placeholder="Message" class="formFeild" name="msg"></textarea>
                           <button class="sendBtn" type="submit" name="getintouch">SEND </button>                         
                        </form>
                     </div>
                     <!--end of form-->
                  </div>
                  <!--end of col-md-6-->
                  <div class="col-md-6">
                     <div class="addressMain">
                        <h2>REACH US</h2>
                        <h1>Phone</h1>
                        <ul>
                           <li><i class="fa fa-phone"></i>   +94(77) 731 3899</li>
                        </ul>
                        <h1>Email</h1>
                           <ul>
                           <li><i class="fa fa-envelope"></i> happykids@gmail.com</li>
                           </ul>
                        <h1>Address</h1>
                           <ul>
                              <li><i class="fa fa-building-o"></i> Happy Kids Preschool</li>
                              <li><i class="fa fa-location-arrow"></i> No:05, Queens </li>
                              <li><i class="fa fa-map-marker"></i>  Moratuwa, Sri Lanka</li>
                           </ul>
                        <h1>Opening hours</h1>
                           <ul>
                           <li><i class="fa fa-clock-o"></i> Every week days<br><span>8.00 am to 2.00 pm</span></li>
                           </ul>
                        <h1>Socials</h1>
                           <ul>
                              <li><a href="http://www.facebook.com" target="blank()"><i class="fa fa-facebook"></i>Facebook</a></li>
                              <li><a href="http://www.twitter.com" target="blank()"><i class="fa fa-twitter"></i>Twitter</a></li>
                              <li><a href="http://www.instagrame.com" target="blank()"><i class="fa fa-instagram"></i>Instagram</a></li>
                              <li><a href="http://www.youtube.com" target="blank()"><i class="fa fa-youtube"></i>Youtube</a></li>
                           </ul>
                     </div>
                     <!--end of address-->
                  </div>
                  <!--end of col-md-6-->
               </div>
               <!--end of section-->
            </div>
            <!--end of col-md-12-->
         </div>
         <!--end of row-->
      </div>


<!--end of contact-->


<!--footer-->
      <?php 
         include "footer.php";
       ?>


   </body>
</html>