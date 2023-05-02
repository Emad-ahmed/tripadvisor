<?php include 'navbar.php' ?>

 <?php



$ip_address = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];


$_duplicate_ip = mysqli_query($conn, "SELECT * FROM `visitors` WHERE user_agent= '$user_agent'");





?> 


   <section id="homeSection">
      <div class="owl-carousel">
         <div class="slider-box slider-box1">
            <div class="overlay">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="txt-box">
                           <div class="txt-area">
                              <p>Welcome to TPS</p>
                              <h2>Travel opens doors to new experiences.</h2>
                              <a href="service.php" class="btn layer-btn">DISCOVER MORE</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slider-box slider-box2">
            <div class="overlay">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <div class="txt-box" data-aos="fade-up" data-aos-anchor-placement="center-bottom">
                           <div class="txt-area">
                              <p>WE PROVIDE PACKAGES</p>
                              <h2>GO TO YOUR DISIRE PLACE</h2>
                              <a href="ourwork.php" class="btn layer-btn">DISCOVER MORE</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



   <?php include 'footer.php' ?>

