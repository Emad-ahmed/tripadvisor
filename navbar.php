<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="shortcut icon" href="img/icon/shsb.png">
   <!-- GOOGLE FONTS CDN LINK -->
   <link rel="preconnect" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800&family=Teko:wght@400;500;600;700&display=swap" rel="stylesheet">
   <!-- CSS LINK -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- AOS ANIAMATION PLUGIN -->
   <link rel="stylesheet" href="css/animate.css">
   <!-- OWL CAROUSEL PLUGIN -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <!-- MAGNIFIC POPUP PLUGIN -->
   <link rel="stylesheet" href="css/magnific-popup.css">
   <link rel="stylesheet" href="css/custom.css">
   <title>Tour Plan</title>
</head>
<body>

<?php
include 'config.php';


?>


<!-- <img class="imagelogo" src="img/icon/shsb.png" alt=""> -->
   <!-- ======================================== NAVIGRATION ======================================== -->
   <nav id="navigration" class="navbar fixed-top p-0">
      <div class="container">
         <a class="logo" href="#">TPS</a>
         <a class="logo" href="index.php"></a>
         <div class="sidenav">
            <div class="header">
               <a class="logo d-lg-none" href="index.php"><img class="imagelogo" src="img/icon//shsb.png" alt=""></a>
               <a href="#" class="d-lg-none" id="showsidenav"><img src="img/letter-x.png" alt=""> </a>
            </div>
            <ul class="mb-0">
               <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
               <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
               <li class="nav-item"><a class="nav-link" href="index.php">Tourist Place</a></li>
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="collapse" href="#menu1">Packages <i class="fal fa-angle-down"></i></a>
                  <div id="menu1" class="dropdown-menus collapse">
                     <a class="dropdown-item" href="pacakages.php"><span>Packages</span></a>
                     <a class="dropdown-item" href="customzied.php"><span>Customized Plan</span></a>
                    
                     <!-- <a class="dropdown-item" href="#"><span>Development Process</span></a>
                     <a class="dropdown-item" href="#"><span>Our Clients</span></a>
                     <a class="dropdown-item" href="#"><span>Mission & Vision</span></a> -->
                   
                  </div>
               </li>
              
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="collapse" href="#menu3">Blog <i class="fal fa-angle-down"></i></a>
                  <div id="menu3" class="dropdown-menus collapse">
                     <a class="dropdown-item" href="blog.php"><span>Blog</span></a>
                     <!-- <div class="dropdown-2">
                        <a class="dropdown-item" data-toggle="collapse" href="#menu4"><span>Blog Details</span> <i class="fal fa-angle-right"></i></a>
                        <div id="menu4" class="dropdown-menus-2 collapse">
                           <a class="dropdown-item" href="#"><span>Blog Details 1</span></a>
                           <a class="dropdown-item" href="#"><span>Blog Details 2</span></a>
                           <a class="dropdown-item" href="#"><span>Blog Details 3</span></a>
                        </div>
                     </div> -->
                  </div>
               </li>
               <li class="nav-item"><a class="nav-link" href="feedback.php">Feedback</a></li>
               <li class="nav-item"><a class="nav-link mr-5" href="contactus.php">Contact Us</a></li>
               <?php
               if(isset($_SESSION['mobile']))
               {
                  echo "<li class='nav-item'><a class='nav-link logoutcolor' href='logout.php'>Logout</a></li>
                  <li class='nav-item'><a class='nav-link myaccount' href='profile.php'>My Account</a></li>
                  <li class='nav-item'><a class='nav-link' href='mplan.php'>My Plan</a></li>
                  ";
               } else{
                  echo "<li class='nav-item'><a class='nav-link' href='login.php'>Login</a></li>";
               }
               

               ?>

               <?php
               if(isset($_SESSION['mobile']))
               {
                  echo "<li class='nav-item'><a class='nav-link login' href='logout.php'>Logout</a></li>";
               } else{
                  echo "<li class='nav-item'><a class='nav-link login' href='login.php'>Login</a></li>";
               }
               

               ?>
            </ul>
         </div>
         
         <div id="hamburger" class="d-lg-none">
            <img src="img/menu.png" class="img01" alt="">
         </div>
      </div>
   </nav>






   
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/font-awesome-pro.js"></script>
   <!-- SCROLL ANIAMATION Plugin -->
   <script src="js/wow.min.js"></script>
   <!-- MIXIT UP Plugin -->
   <script src="js/mixitup.min.js"></script>
   <!-- MAGNIFIC POPUP Plugin -->
   <script src="js/jquery.magnific-popup.min.js"></script>
   <!-- CounterUp Plugin -->
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/jquery.waypoints.min.js"></script>
   <!-- OWL CAROUSEL Plugin -->
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/custom.js"></script>
   <script>

   </script>
</body>
</html>
