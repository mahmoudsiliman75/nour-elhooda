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
    <li data-target="#header-slider" data-slide-to="4"></li>
    <li data-target="#header-slider" data-slide-to="5"></li>
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

    <div class="carousel-item">
      <img src="assets/pics/slider/slider5.jpg" class="d-block w-100" alt="Fifth Slide Img">
    </div>

    <div class="carousel-item">
      <img src="assets/pics/slider/slider6.jpg" class="d-block w-100" alt="Fifth Slide Img">
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

<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->