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
        <h2 class="text-center mt-3"> Welcome To Nour El Hooda </h2>
        <p class="my-4"> Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga.
        Dolorum laudantium quisquam aspernatur repellat illum eius! Impedit perspiciatis accusamus inventore animi ullam iusto ipsam, enim blanditiis magnam. Ipsum enim error fuga. </p>

        <!-- BTN NAME: LEARN MORE -->
        <!-- BTN DIRECTION PAGE: AboutUs.php -->
          <?php $link = 'AboutUs.php'; $title = 'Learn More' ?>
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

      <div class="investor-info d-flex align-items-center col-12 col-md-7 mb-5">
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

<!-- START:: OUR PROJECTS SECTION -->
<div class="projects">
  <div class="container">
    <h2 class="sec-heading mt-5"> Our Projects </h2>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="ProjectDetails.php"> 
            <img src="assets/pics/pic8.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body">
            <h4 class="card-title">Spirulina</h4>

            <a href="ProjectDetails.php" class="btn btn-primary"> 
              <i class="fas fa-plus"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 text-center mt-2">
        <?php $link = 'Projects.php'; $title = 'More Projects' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: OUR PROJECTS SECTION -->

<!-- START:: GALLERY SECTION -->
<div class="gallery">
  <div class="container">

    <h2 class="sec-heading mb-5"> Gallery </h2>

    <div id="gallery-slider" class="owl-carousel owl-theme">
      <div class="gallery-slider-item"> 
        <img src="assets/pics/pic20.jpg">
      </div>

      <div class="gallery-slider-item"> 
        <img src="assets/pics/pic9.jpg">
      </div>

      <div class="gallery-slider-item"> 
        <img src="assets/pics/pic11.jpg">
      </div>

      <div class="gallery-slider-item"> 
        <img src="assets/pics/pic16.jpg">
      </div>

      <div class="gallery-slider-item"> 
        <img src="assets/pics/pic19.jpg">
      </div>

      <div class="gallery-slider-item"> 
        <img src="assets/pics/pic22.jpg">
      </div>

      <div class="gallery-slider-item"> 
        <img src="assets/pics/pic18.jpg">
      </div>
    </div>

      <div class="col-12 text-center mt-5">
        <?php $link = 'Gallery.php'; $title = 'View More' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>
  </div>
</div>
<!-- END:: GALLERY SECTION -->

<!-- START:: OUR PRODUCTS SECTION -->
<div class="products">
  <div class="container">
    <h2 class="sec-heading mt-5"> Our Products </h2>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="ProductsDetails.php">
            <img src="assets/pics/pic21.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body d-flex justify-content-between">
            <h4 class="card-title">Spirulina</h4>
            <a href="ProductsDetails.php" class="btn btn-primary">
              Read More
              <i class="far fa-arrow-alt-circle-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="ProductsDetails.php">
            <img src="assets/pics/pic10.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body d-flex justify-content-between">
            <h4 class="card-title">Spirulina</h4>
            <a href="ProductsDetails.php" class="btn btn-primary">
              Read More 
              <i class="far fa-arrow-alt-circle-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <a href="ProductsDetails.php">
            <img src="assets/pics/pic15.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body d-flex justify-content-between">
            <h4 class="card-title">Spirulina</h4>

            <a href="ProductsDetails.php" class="btn btn-primary">
              Read More 
              <i class="far fa-arrow-alt-circle-right"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-12 text-center mt-2">
        <?php $link = 'Products.php'; $title = 'More Products' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: OUR PRODUCTS SECTION -->

<!-- START:: NEWS SECTION -->
<div class="news">
  <div class="container">
    <h2 class="sec-heading mt-5"> News </h2>
    <div class="row justify-content-center">

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            <span class="inner-badge"> 20, Jan </span> 
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic22.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <!-- ArticleDetails.php -->
            <?php $link = 'ArticleDetails.php'; $title = 'More Details' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            <span class="inner-badge"> 20, Jan </span> 
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic1.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <!-- ArticleDetails.php -->
            <?php $link = 'ArticleDetails.php'; $title = 'More Details' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
        <div class="card">
          <span class="badge"> 
            <span class="inner-badge"> 20, Jan </span> 
          </span>
          <a href="ArticleDetails.php">
            <img src="assets/pics/pic3.jpg" class="card-img-top" alt="...">
          </a>
          <div class="card-body text-center">
            <h4 class="card-title mb-3 mt-2">Spirulina</h4>
            <p class="card-text mb-4"> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Accusantium consequatur itaque voluptatibus non. Impedit voluptas tempora assumenda voluptatem autem nostrum, reprehenderit iusto, non, expedita dolores distinctio nisi unde sed velit. </p>

            <!-- ArticleDetails.php -->
            <?php $link = 'ArticleDetails.php'; $title = 'More Details' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>

      <div class="col-12 text-center mt-5">
        <!-- AllNews.php -->
        <?php $link = 'AllNews.php'; $title = 'View More Articles' ?>
        <?php include(INC.'/ui/MainBtn.php')?>
      </div>

    </div>
  </div>
</div>
<!-- END:: NEWS SECTION -->

<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->