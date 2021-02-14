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
  <img src="assets/pics/pic14.jpg" alt="Intro Img" >
  <div class="curve">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" class="shape-fill"></path>
    </svg>
  </div>
</div>
<!-- END:: INTRO IMG -->


<!-- START:: PAGE CONTENT -->
<div class="videos-liberary">
  <div class="container">
    <h2 class="sec-heading mt-5"> Videos Liberary </h2>
    <p class="mb-5 mt-3">  Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae neque qui voluptates voluptas nesciunt facere dolore dolor reprehenderit quibusdam reiciendis praesentium iste, obcaecati at fugiat laborum doloremque repellat consequuntur.Lorem ipsum dolor sit amet consectetur adipisicing elit.
                          Vitae neque qui voluptates voluptas nesciunt facere dolore dolor reprehenderit quibusdam reiciendis praesentium iste, obcaecati at fugiat laborum doloremque repellat consequuntur. </p>

    <!-- START:: TABS -->
    <ul class="nav nav-pills d-flex justify-content-center my-4" id="pills-tab" role="tablist">
      <li class="nav-item mx-3" role="presentation">
        <a class="nav-link active" id="pills-all-videos-tab" data-toggle="pill" href="#pills-all-videos" role="tab" aria-controls="pills-all-videos" aria-selected="true">All</a>
      </li>

      <li class="nav-item mx-3" role="presentation">
        <a class="nav-link" id="pills-projects-tab" data-toggle="pill" href="#pills-projects" role="tab" aria-controls="pills-projects" aria-selected="false">Projects Videos</a>
      </li>

      <li class="nav-item mx-3" role="presentation">
        <a class="nav-link" id="pills-interviews-tab" data-toggle="pill" href="#pills-interviews" role="tab" aria-controls="pills-interviews" aria-selected="false">Eng. Hatem Interviews</a>
      </li>
    </ul>
    <!-- START:: TABS -->

    <!-- START:: TABS CONTENT -->
    <div class="tab-content" id="pills-tabContent">

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade show active" id="pills-all-videos" role="tabpanel" aria-labelledby="pills-all-videos-tab">
        <div class="row justify-content-center">

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 text-center">
            <?php $link = '#'; $title = 'Load More Videos' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade" id="pills-projects" role="tabpanel" aria-labelledby="pills-projects-tab">
        <div class="row justify-content-center">

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/vurZFxdAn-w" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 text-center">
            <?php $link = '#'; $title = 'Load More Videos' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>

        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->

      <!-- START:: TAB CONTENT SHEET -->
      <div class="tab-pane fade" id="pills-interviews" role="tabpanel" aria-labelledby="pills-interviews-tab">
        <div class="row justify-content-center">

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 col-md-6 col-lg-4 my-3 p-2">
            <iframe src="https://www.youtube.com/embed/-jwSrDCd-vM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <h4 class="text-center"> Video Title </h4>
          </div>

          <div class="col-12 text-center">
            <?php $link = '#'; $title = 'Load More Videos' ?>
            <?php include(INC.'/ui/MainBtn.php')?>
          </div>
        </div>
      </div>
      <!-- END:: TAB CONTENT SHEET -->
    </div>
    <!-- END:: TABS CONTENT -->

  </div>
</div>
<!-- END:: PAGE CONTENT -->

<!-- START:: INCLUDING THE FOOTER -->
<?php include(INC.'/layouts/TheFooter.php') ?>
<!-- END:: INCLUDING THE FOOTER -->