<?php include 'navbar.php' ?>
<link rel="stylesheet" href="css/packages.css">


<link rel="stylesheet" href="css/signup.css">

<style>
    #pageHeader {
        background: url(img/trip2.jpg);
        background-size: cover;
        background-position: center top;
        margin-bottom: 100px; }

</style>

<section id="pageHeader" class="pageHeadernat">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>PACKAGES<span>.</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


  <div class="container">
      <div class="row">
      <?php
      
        
        $alldata = mysqli_query($conn, "SELECT * FROM `alltour` ORDER BY id DESC");

        while ($row = mysqli_fetch_array($alldata)) {

         echo "<div class='col-lg-4'>
         <div class='card' style='width: 20rem;'>
            <img src='admin/$row[image]' class='card-img-top' alt='...'>
            <p class='myprice text-white'>৳$row[pirce]</p>
            <div class='card-body'>
               <h5 class='card-title'>$row[title]</h5>

               <p class='card-text bg-warning  text-center'>$row[offer_view]</p>
               <p class='text-dark'>$row[pacakage_time]</p>
               <p><i class='fa fa-subway' aria-hidden='true'></i> Transportation:$row[transportation]</p>
               <p><i class='fa fa-address-card' aria-hidden='true'></i> Accommodation: $row[accommodation]</p>
               <p><i class='fa fa-address-card' aria-hidden='true'></i>Total Meal: $row[total_meal]</p>
               <p><i class='fa fa-user' aria-hidden='true'></i> No of Person: $row[no_of_person]</p>
               <p><i class='fa fa-clock' aria-hidden='true'></i> Duration: $row[duration]</p>
            <hr>
            <div class='text-center'>
               <a href='#' class='btn btn-primary col-8'>More Details</a>
               </div>
            </div>
         </div>
         </div>";

        }

        ?>

      </div>
  </div>


  <?php include 'footer.php' ?>