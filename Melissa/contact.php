
<?php require 'contact-form.php'  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">   
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/header.css">
    <link rel="stylesheet" href="./styles/media.css">
    <link rel="stylesheet" href="./styles/slide.css">
    <link rel="stylesheet" href="./styles/contact.css">
    <link rel="stylesheet" href="./styles/contact-media.css">
    <script src="./scripts/slide.js" defer></script>
    <script defer src="./scripts/header.js"></script>
    <title>Contact</title>
</head>
<body>
    <header class="header">
        <nav>
         <div class="nav-wrapper">
           <ul id="nav-mobile" class="left hide-on-med-and-down">
             <li><a href="header.html">Home</a></li>
             <li><a href="About.html">About</a></li>
             <li><a href="contact.php">Contact</a></li>
             <li><a href="listings.html">Current Listings</a></li>
             <li><a href="#">Resources</a></li>
             <li><a href="#">Featured Areas</a></li>
             <hr class="hide-on-down-only">
           </ul>

         </div>
   <!-- This is for mobile Hamburger -->
   
             <ul id="nav-mobile" class="left hide-on-large-only">
              <img class="open-ham" src="./Img/menu-01.png" alt="Hamburger_menu" style="width: 30px; margin-top: 1rem;">
               <i class="material-icons close-ham">close</i>
             </ul>
             
   
               <ul class="left hide-on-large-only mobile-nav-container" style="display:none ; width: 100%;" data-aos="slide-down"data-aos-easing="ease-in-out" data-aos-duration="1000" > 
                 <li ><a href="header.html">Home</a></li>
                 <li><a href="About.html">About</a></li>
                 <li><a href="#">Current Listings</a></li>
                 <li><a href="#">Featured Areas</a></li>
                 <li><a href="#">Sold Properties</a></li>
                 <li><a href="#">Contact</a></li>
                 <li><a href="#">Resources</a></li> 
               </ul>
   
         </nav>
        
       </header>
      
      
       <section class="contact-info z-depth-5">
           <div class="contact-img" data-aos="fade-in" data-aos-delay="200" data-aos-duration="3000" data-aos-easing="ease-in-out">
               <img src="./Img/contact-01.png" alt="">
           </div>
           <div class="contact-form" >

               <form action="" method="post" data-aos="fade-in" data-aos-duration="1000" data-aos-easing="ease-in-out">

                   <div class="input-field">
                     <p></p>
                     <input type="text" name="fname" class="center" placeholder="Firsname">
                   </div>
                   <input type="text" name="lname" class="center" placeholder="Lastname">
                   <input type="email" name="email" class="center" placeholder="Your email">
                   <textarea id="textarea2" name="message" class="materialize-textarea center" placeholder="Message..."></textarea>
                   <button class="btn waves-effect waves-light center" type="submit" name="send-mail">Send
                  </button>   
               </form>
               <?php $sendEmail->SendMail(); ?>

            </div>

     














       
       </section>
       <footer>

        <div class="footer-divider">
          <h3> Melissa Shields</h3>
        </div>
          <a href="#" class=" footer-logo left">
          <img src="./Img/Logo-06.png" alt="MelissaShieldsLogo" style="width: 80px;">
        </a>
          <div class="footer-nav">
           
            <ul class="footer-links">
    
              <div class="social-links">
    
                <a title="Facebook" href="https:www.facebook.com/melissashieldsmt">
                  <img class="social-img" src="./Img/facebook-01.png" alt="Melissa Facebook">
                </a>
    
                <a title="Instagram" href="https://www.instagram.com/melissashieldsmt/">
                  <img class="social-img" src="./Img/instagram-01.png" alt="Melissa Instagram">
                </a>
    
                <a title="Google" href="https://www.google.com/search?q=melissa+shields">
                  <img class="social-img" src="./Img/google-plus-g2-01.png" alt=" Melissa Google" style="width: 30px;">
                </a>
              </div>
    
             <div class="right">
              <li><a class="white-text" href="header.html">Home</a></li>
              <li><a  class="white-text" href="About.html">About</a></li>
              <li><a  class="white-text" href="contact.php">Contact</a></li>
              <li><a  class="white-text" href="listings.html"> Listings </a></li>
             </div>
    
             <div class="left">
              <li><a  class="white-text" href="#">Resources</a></li>
              <li><a  class="white-text" href="#">Featured Areas</a></li>
             </div>
    
             <div class="email">
              <a href="contact.php"> <i title="Send me an email" class="material-icons">mail</i></a>
            </div>
    
            </ul>
          </div>
    
          <div class="designed-by" style="margin-bottom:20px ;">
            <p>Developed by <a href="#">Digital Circle</a> </p>
          </div>
      </footer>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
   <script> M.AutoInit();</script>    
    </body>
</html>
