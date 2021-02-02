<!-- START:: INCLUDING GLOBALS FILE -->
<?php include_once('globals.php') ?>
<!-- START:: INCLUDING GLOBALS FILE -->

<!-- START:: INCLUDING THE HEADER -->
<?php include(INC.'/layouts/TheHeader.php') ?>
<!-- END:: INCLUDING THE HEADER -->

<!-- START:: PAGE CONTENT -->

<!-- START:: SLIDER SECTION -->
<div id="header-slider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#header-slider" data-slide-to="0" class="active"></li>
    <li data-target="#header-slider" data-slide-to="1"></li>
    <li data-target="#header-slider" data-slide-to="2"></li>
    <li data-target="#header-slider" data-slide-to="3"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="assets/pics/slider/slider1.jpg" class="d-block w-100" alt="First Slide Img">
    </div>

    <div class="carousel-item">
      <img src="assets/pics/slider/slider2.jpg" class="d-block w-100" alt="Second Slide Img">
    </div>

    <div class="carousel-item">
      <img src="assets/pics/slider/slider3.jpg" class="d-block w-100" alt="Third Slide Img">
    </div>

    <div class="carousel-item">
      <img src="assets/pics/slider/slider4.jpg" class="d-block w-100" alt="Fourth Slide Img">
    </div>

  </div>
  <a class="carousel-control-prev" href="#header-slider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#header-slider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- END:: SLIDER SECTION -->

<!-- START:: WELCOME SECTION -->
<div class="welcome-sec">
  <div class="container">
    <div class="row">

      <div class="welcome-img col-12 col-md-6">
        <img class="img-fluid" src="assets/pics/pic1.jpg" alt="Welcome Section Img">
      </div>

      <div class="welcome-text col-12 col-md-6 d-flex flex-column justify-content-center">
        <h2 class="text-center"> Welcome To Nour El Hooda </h2>
        <p> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga.
        Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga. </p>
      </div>

    </div>
  </div>
</div>
<!-- END:: WELCOME SECTION -->

<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->