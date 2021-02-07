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
  <img src="assets/pics/pic13.jpg" alt="Intro Img" >
  <div class="curve">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
    </svg>
  </div>
</div>
<!-- END:: INTRO IMG -->

<!-- START:: PAGE CONTENT -->

<!-- START:: DETAILS SECTION -->
<div class="product-details">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-6">
        <div class="project-details-img">
          <img src="assets/pics/pic5.jpg" alt="Product Details Img" class="img-fluid">
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid mt-4">
    <div class="row">
      <div class="col-12">
        <div class="project-details-text">
          <h2 class="sec-heading mb-4"> Spirulina </h2>
          <p> Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta neque, facere quae cum quis explicabo delectus velit ut? Reiciendis facilis adipisci dolorum aspernatur modi corporis quod fugit ullam asperiores quisquam. 
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- START:: DETAILS SECTION -->

<!-- START:: WHY SECTION -->
<div class="heighlights">
  <div class="container">
    <h2 class="sec-heading text-center mb-5"> Spirulina Heighlights </h2>
    <div class="row">
      <div class="col-6 col-md-3 my-3 text-center"> 
        <img src="assets/pics/icons/financ.png">
        <h4> Title </h4>
      </div>

      <div class="col-6 col-md-3 my-3 text-center"> 
        <img src="assets/pics/icons/team.png">
        <h4> Title </h4>
      </div>

      <div class="col-6 col-md-3 my-3 text-center"> 
        <img src="assets/pics/icons/chart.png">
        <h4> Title </h4>
      </div>

      <div class="col-6 col-md-3 my-3 text-center"> 
        <img src="assets/pics/icons/contract.png">
        <h4> Title </h4>
      </div>
    </div>
  </div>
</div>
<!-- END:: WHY SECTION -->

<!-- START:: INTEGERATED SECTION  -->
<div class="integerated">
  <div class="container">
    <h2 class="sec-heading mt-5"> Sperulina Integerated With </h2>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <img src="assets/pics/pic8.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Product Name</h4>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <img src="assets/pics/pic21.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Product Name</h4>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <img src="assets/pics/pic22.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title text-center">Product Name</h4>
          </div>
        </div>
      </div>

      <div class="col-12 text-center mt-5">
        <?php $link = '#'; $title = 'Load More' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: INTEGERATED SECTION  -->

<!-- START:: WHY TO INVEST SECTION -->
<div class="why-to-invest">
  <div class="container-fluid">
    <div class="row d-flex justify-content-between align-items-center">
      <h3 class="col-12 col-md-8 text-center mb-0"> To Invest With Nour El Hooda? Please Contact Us </h3> 

      <div class="col-12 col-md-4 mt-4 mt-md-0 text-center">
        <?php $link = 'ContactUs.php'; $title = 'Contact Us' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>
    </div>
  </div>
</div>
<!-- END:: WHY TO INVEST SECTION -->

<!-- START:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->