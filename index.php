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

      <div class="welcome-text col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
        <h2 class="text-center"> Welcome To Nour El Hooda </h2>
        <p class="my-4"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga.
        Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga. </p>

        <!-- BTN NAME: LEARN MORE -->
        <!-- BTN DIRECTION PAGE: AboutUs.php -->
          <?php $link = 'index.php'; $title = 'Learn More' ?>
          <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: WELCOME SECTION -->

<!-- START:: INVESTOR HIGHLIGHT SECTION -->
<div class="investor">
  <div class="container">
    <div class="row">

      <div class="investor-info d-flex align-items-center col-12 col-md-7">
        <div class="row align-items-center">

          <h2 class="small-sec-heading text-center mb-5 col-12"> Our Investor Heighlights </h2>

          <div class="info-icon col-4 text-center"> 
            <img src="assets/pics/icons/chart.png" alt="">
            <h4 class="my-2"> Title </h4>
          </div>

          <div class="info-icon col-4 text-center"> 
            <img src="assets/pics/icons/idea.png" alt="">
            <h4 class="my-2"> Title </h4>
          </div>

          <div class="info-icon col-4 text-center"> 
            <img src="assets/pics/icons/contract.png" alt="">
            <h4 class="my-2"> Title </h4>
          </div>

        </div>
      </div>

      <div class="investor-video col-12 col-md-5 text-center">

        <iframe src="https://www.youtube.com/embed/8KVTpYfQzUY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        <div class="text-center">
          <h4 class="text-center my-4"> Video Title Will Go Here </h4>

          <!-- BTN NAME: VIEW MORE VIDEOS -->
          <!-- BTN DIRECTION PAGE: VideosLiberary.php -->
          <?php $link = 'index.php'; $title = 'View More Videos' ?>
          <?php include(INC.'/ui/MainBtn.php')?>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- END:: INVESTOR HIGHLIGHT SECTION -->

<!-- START:: OUR PRODUCTS SECTION -->
<div class="products">
  <div class="container">
    <h2 class="sec-heading mt-5"> Our Products </h2>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <img src="assets/pics/pic21.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Spirulina</h4>
            <a href="#" class="btn btn-primary"> 
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <img src="assets/pics/pic10.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Spirulina</h4>
            <a href="#" class="btn btn-primary"> 
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <img src="assets/pics/pic15.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title">Spirulina</h4>

            <!-- ProductDetails.php -->
            <a href="#" class="btn btn-primary"> 
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- END:: OUR PRODUCTS SECTION -->

<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->