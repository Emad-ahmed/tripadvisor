<?php include 'navbar.php' ?>



<link rel="stylesheet" href="css/signup.css">

<section id="pageHeader">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>USER VERIFICATION<span>.</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>



<div class="container mt-5">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="userotpAction.php" method="POST" autocomplete="off">
                    <h2 class="text-center">Code Verification</h2>
                    <?php 
                  
                    if(isset($_SESSION['info'])){
                        ?>
                        <div class="alert alert-success text-center">
                            <?php echo $_SESSION['info']; ?>
                        </div>
                        <?php
                    }
                    ?>
                    
                    <div class="form-group">
                        <input class="form-control" type="number" name="otp" placeholder="Enter verification code" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="check" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
   

<script src="js/javascript.js"></script>