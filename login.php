<?php include 'navbar.php' ?>



<link rel="stylesheet" href="css/signup.css">

<section id="pageHeader">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>LOGIN<span>.</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <div class="container signupbar">
        <form action="LoginAction.php" method="post" class="sign-form" id="sign-form" autocomplete="on">
           
            <label for="mobile" style="font-size:0.8rem;">Mobile Number</label>
            <input type="number" name="mobile" id="mobile" placeholder="Mobile Number" autofocus required>

            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Password" required>
           
            <br> <br>

           

            <input type="submit" name="login" value="Sign Up" id="submit">

            <p class="have-account-line">Create An Account? <a href="signup.php">Sign up</a></p>

           
        </form>
    </div>