<!-- START:: INCLUDING GLOBALS FILE -->
<?php include_once('globals.php') ?>
<!-- START:: INCLUDING GLOBALS FILE -->

<!-- START:: INCLUDING THE HEADER -->
<?php include(INC.'/layouts/TheHeader.php') ?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: PAGE CONTENT -->

<!-- START:: INTRO IMG -->
<div class="intro-img-box">
  <div class="overlay"></div>
  <img src="assets/pics/pic19.jpg" alt="Intro Img" >
  <div class="curve">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
    </svg>
  </div>
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->
<div class="contact-us-page">
  <div class="container">
    <h2 class="sec-heading mt-5"> Our Farms Addresses </h2>

    <!-- START:: FARMS ADRESSES SECTION -->
    <div class="row justify-content-center mb-5">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card p-3">
          <h4 class="card-title text-center"> Adminstrative Headquarters </h4>

          <ul class="card-list container list-unstyled">
            <li> 
              <i class="fas fa-map-marker-alt"></i>
              <span> 48 Farid Semeika Street Nozha </span>
            </li>

            <li> 
              <i class="fas fa-mobile-alt"></i>
              <span> 01000000001 </span>
            </li>

            <li> 
              <i class="fas fa-envelope"></i>
              <span> info@NourElHooda.com </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card p-3">
          <h4 class="card-title text-center"> Farmer </h4>

          <ul class="card-list container list-unstyled">
            <li class="d-flex align-items-start"> 
              <i class="fas fa-map-marker-alt"></i>
              <span> Misr Agriculture Assosiation, Cairo Ismailia Road, In Front Of El Shorouk Gate, A. </span>
            </li>

            <li> 
              <i class="fas fa-mobile-alt"></i>
              <span> 01000000002 </span>
            </li>

            <li> 
              <i class="fas fa-envelope"></i>
              <span> info@NourElHooda.com </span>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card p-3">
          <h4 class="card-title text-center"> Farmer </h4>

          <ul class="card-list container list-unstyled">
            <li class="d-flex align-items-start">
              <i class="fas fa-map-marker-alt"></i>
              <span> Abu Ghaleb City At The Beginning Of The Revolution, Next To Shabrawishi's Farm </span>
            </li>

            <li> 
              <i class="fas fa-mobile-alt"></i>
              <span> 01000000003 </span>
            </li>

            <li> 
              <i class="fas fa-envelope"></i>
              <span> info@NourElHooda.com </span>
            </li>
          </ul>
        </div>
      </div>

    </div>
    <!-- END:: FARMS ADRESSES SECTION -->

    <!-- START:: CONTACT INFO SECTION -->
    <div class="row justify-content-center">
      <div class="col-12 col-md-6"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d110532.89549083744!2d31.30329406893522!3d30.032468600716175!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14583c1380cba7ef%3A0xd541260e9e06978d!2sNasr%20City%2C%20Cairo%20Governorate!5e0!3m2!1sen!2seg!4v1601175174423!5m2!1sen!2seg" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>

      <div class="col-12 col-md-6"> 
          <h4 class="small-sec-heading text-center my-3"> Write Us A Message </h4>
          <form>
            <div class="row">
              <div class="col-12 col-md-6 p-2">
                <input type="text" placeholder="Your Name" name="the_name">
              </div>

              <div class="col-12 col-md-6 p-2">
                <input type="email" placeholder="Email Address" name="email_address">
              </div>

              <div class="col-12 col-md-6 p-2">
                <input type="tele" placeholder="Phone Number" name="phone_number">
              </div>

              <div class="col-12 col-md-6 p-2">
                <input type="text" placeholder="Subject" name="the_subject">
              </div>

              <div class="col-12 p-2">
                <textarea placeholder="Write Message" name="the_message"></textarea>
              </div>

              <div class="col-12 text-center p-2">
                <button type="submit" class="hover-effect"> Send Message </button>
              </div>
            </div>
          </form>
      </div>
    </div>
    <!-- START:: CONTACT INFO SECTION -->
  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->