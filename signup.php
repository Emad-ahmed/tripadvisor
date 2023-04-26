<?php include 'navbar.php' ?>



<link rel="stylesheet" href="css/signup.css">

<section id="pageHeader">
      <div class="overlay">
         <div class="container">
            <div class="row">
               <div class="col">
                  <div class="txt text-center">
                     <div class="sec-header">
                        <h2>SIGNUP<span>.</span></h2>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>


   <div class="container signupbar">
        <form action="SignupAction.php" method="post" class="sign-form" id="sign-form" autocomplete="on">
           
            <label for="fname" style="font-size:0.8rem;">First Name<span class="star-required">*</span></label>
            <input type="text" name="fname" id="fname" placeholder="First Name" autofocus required>
            <label for="lname">Last Name<span class="star-required">*</span></label>
            <input type="text" name="lname" id="lname" placeholder="Last Name" autofocus required>
            <label for="mobile_number">Mobile Number<span class="star-required">*</span></label>
            <input type="text" name="mobile_number" id="mobile_number" placeholder="Mobile Number" autofocus required>

            <label for="email">Email<span class="star-required">*</span></label>
            <input type="email" name="email" id="email" placeholder="mail@website.com" required>

            <label for="password">Password<span class="star-required">*</span></label>
            <input type="password" name="password" id="password" placeholder="Min. 8 character" required>
            <label for="cpassword">Confirm Password<span class="star-required">*</span></label>
            <input type="password" name="cpassword" id="cpassword" placeholder="Min. 8 character" required>
            <br>

            <label for="divisions">Select Division</label>
      <select name="divisions" id="divisions" onchange="divisionsList();">
        <option disabled selected>Select Division</option>
        <option value="Barishal">Barishal</option>
        <option value="Chattogram">Chattogram</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Khulna">Khulna</option>
        <option value="Mymensingh">Mymensingh</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Sylhet">Sylhet</option>
      </select><!--/ Division Section-->
      <br>
      <!--Districts Section-->
      <label for="distr">Select District</label>
      <select name="distr" id="distr" onchange="thanaList();"></select><!--/ Districts Section-->
      <br>
      <label for="polic_sta">Select Police Station</label>
      <select name="polic_sta" id="polic_sta"></select> <br> <br>
            
            <input type="submit" name="signup" value="Sign Up" id="submit">

            <p class="have-account-line">Already have an Account? <a href="login.php">Sign in</a></p>

         
        </form>
    </div>

    <script src="js/javascript.js"></script>