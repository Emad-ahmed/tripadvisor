<?php include 'navbar.php' ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
   .sec-pad
   {
      margin-top: 10rem !important;
   }
   nav{
      background: #222429;
   }
</style>

<link rel="stylesheet" href="css/contactus.css">



   <section class="contact-sec sec-pad">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="contact-detail">
          <h1 class="section-title">Contact us</h1>

          <ul class="contact-ul">
            <li><i class="fa fa-globe" aria-hidden="true"></i> Madina Market, Sylhet</li>

            <li>
              <i class="fa fa-phone"></i>
              <a href="tel:08510004495"><b>+880 1794-937787</b></a>
            </li>

            <li>
              <i class="fa fa-envelope"></i>
              <a href="mailto:seguptamoni89@gmail.com"><b>seguptamoni89@gmail.com</b></a>
            </li>
          </ul>

          <span>    
            <a href="#" class="fb"><i class="fa fa-facebook"></i></a>
            <a href="#" class="insta"><i class="fa fa-instagram"></i></a>
            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          </span>
        </div>
      </div>

      <div class="col-md-6">
        <form action="#" class="contFrm" method="POST">
          <div class="row">
            <div class="col-sm-6">
              <input type="text" name="name" placeholder="Your Name" class="inptFld" required />
            </div>

            <div class="col-sm-6">
              <input type="email" name="email" placeholder="Email Address" class="inptFld" required />
            </div>

            <div class="col-sm-6">
              <input type="tel" name="phone" placeholder="Phone Number" class="inptFld" required />
            </div>

            <div class="col-sm-6">
              <input type="text" name="sub" placeholder="Subject" class="inptFld" required />
            </div>

            <div class="col-12">
              <textarea class="inptFld" rows="" cols="" placeholder="Your Message..." required></textarea>
            </div>

            <div class="col-12">
              <input type="submit" name="submit" value="SUBMIT" class="inptBtn" />
            </div>
          </div>
        </form>
      </div>
    </div>

    <div style="text-align: center; margin-top: 20px;">
      
    </div>

  </div>
</section>

