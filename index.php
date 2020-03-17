<?php
  $current = "home";
  $title="Manatharam - Human Welfare Council";
  require 'templates/header.php';

 ?>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active " style="background-image:url('./assets/images/slider_1.jpg') !important;">

          <div class="carousel-caption d-none d-md-flex flex-column text-center">

            <h5>YOU Can</h5>
            <h5>Educate Them.</h5>
            <p>Let's Empower and Educate the Students</p>

            <button type="button" class="btn btn-success" name="button" data-toggle="modal" data-target="#DonateUs">Donate Now <i class="fas fa-donate"></i></button>
          </div>
        </div>
        <div class="carousel-item"  style="background-image:url('./assets/images/slider_2.png') !important;">
          <div class="carousel-caption d-none d-md-flex flex-column text-center">

            <h5 class="">Small Effort</h5>
            <h5 class="">Make Big Changes.</h5>
            <p>Volunteers donot necessarily have the time they just have the heart</p>

              <button type="button" class="btn btn-success" name="button"  data-toggle="modal" data-target="#joinTeam">Join Us <i class="far fa-handshake"></i></button>

          </div>
        </div>
      </div>

      <div class="overlay">

      </div>

      <ol class="carousel-indicators" style="z-index:10;">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      </ol>

      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
      </div>

      <main class="container-fluid pt-2 bg-white">
        <div class="row">
          <div class="container about">
            <div class="row">
              <div class="col-12 col-lg-6 d-flex align-content-center justify-content-center py-5">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/6lt2JfJdGSY?controls=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="false"></iframe>
              </div>
              <div class="col-12 col-lg-6 text-center">
                <h2 class="text-center text-uppercase py-2 my-0 my-lg-4">Who we Are?</h2>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <a class="" href="#">
                  <button class="btn" type="button" name="button">Know More <i class="fas fa-angle-double-right"></i> </button>
                </a></br></br>
              </div>
            </div>
          </div>
        </div>
        <div class="row mission-section">
            <div class=" col-12 jumbotron m-0">
              <div class="container">
                <div class="row d-flex justify-content-between">
                  <div class="mission text-center bg-white col-12 col-lg-3 px-4">
                    <div class="icons d-flex justify-content-center align-items-center">
                        <i class="fas fa-eye"></i>
                    </div>
                    <h2 class="">Vision</h2>
                    <p class="text-justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>

                  <div class="mission text-center bg-white col-12 col-lg-3 px-4 my-5 my-lg-0">
                    <div class="icons d-flex justify-content-center align-items-center">
                        <i class="fas fa-crosshairs"></i>
                    </div>
                    <h2 class="">objectives</h2>
                    <p class="text-justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>

                  <div class="mission text-center bg-white col-12 col-lg-3 px-4">
                    <div class="icons d-flex justify-content-center align-items-center">
                        <i class="fas fa-rocket "></i>
                    </div>
                    <h2 class="">Mission</h2>
                    <p class="text-justify">
                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </div>
        <div class="row bg-white we-do py-5">
          <div class="col-12">
            <div class="container">
              <div class="row d-flex flex-column flex-lg-row-reverse">
                <div class="col-12 col-lg-6">
                  <img class="img img-fluid" src="assets/images/slider_1.jpg" alt="">
                </div>
                <div class="col-12 col-lg-6">
                  <div class="we-do-head d-block">
                    <span>You can Join Us</span>
                    <h5>What We Are Doing</h5>
                  </div>
                  <div class="we-do-table container-fluid p-3">
                    <div class="row my-4">
                      <div class="col-12 col-md-6 d-flex flex-row align-items-center justify-content-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <i class="fas fa-book-open"></i>
                        </div>
                        <div class="p-3">
                          <h6>Education</h6>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 d-flex flex-row align-items-center justify-content-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <i class="fas fa-procedures"></i>
                        </div>
                        <div class="p-3">
                          <h6>Blood Donation</h6>
                        </div>
                      </div>
                    </div>
                    <div class="row my-4">
                      <div class="col-12 col-md-6 d-flex flex-row align-items-center justify-content-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <i class="fas fa-heartbeat"></i>
                        </div>
                        <div class="p-3">
                          <h6>Organ Donation</h6>
                        </div>
                      </div>
                      <div class="col-12 col-md-6 d-flex flex-row align-items-center justify-content-start">
                        <div class="icon d-flex align-items-center justify-content-center">
                          <i class="fas fa-hand-holding-usd"></i>
                        </div>
                        <div class="p-3">
                          <h6>Charity</h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
      <div class="help-block" >
        <div class="help-overlay d-flex flex-column justify-content-center align-items-center">
          <h2 class="text-white text-center" style="font-size:40px;">HOW CAN YOU HELP?</h2>
          <p class="d-block text-white text-center" style="font-size:20px; font-weight:lighter;"  >
            Your donation will help us to empore and educate the students,</br>
            Save lives and enlighten the farmers.
          </p>
          <div class="my-3">
            <button class="btn btn-success mx-4" type="button" name="button"  data-toggle="modal" data-target="#DonateUs">Donate Us</button>
            <button class="btn btn-success mx-4" type="button" name="button"  data-toggle="modal" data-target="#joinTeam">Join Us</button>
          </div>
        </div>
      </div>


      <div class="main-gallery py-0">
        <div class="gallery-cell py-0">
          <div class="testimonial my-5">
            <img class="testimonial-avatar" src="https://www.biography.com/.image/t_share/MTE1ODA0OTcxODAxNTQ0MjA1/mother-teresa-9504160-1-402.jpg">
            <q class="testimonial-quote">Love is not patronizing and charity isn't about pity, it is about love. Charity and love are the same -- with charity you give love, so don't just give money but reach out your hand instead.</q>
            <span class="testimonial-author">Mother Teresa</span>
          </div>
        </div>
        <div class="gallery-cell py-0">
          <div class="testimonial my-5">
            <img class="testimonial-avatar" src="https://www.biography.com/.image/t_share/MTIwNjA4NjMzODA1NzY4MjA0/ralph-waldo-emerson-9287153-1-402.jpg">
            <q class="testimonial-quote">The purpose of life is not to be happy. It is to be useful, to be honorable, to be compassionate, to have it make some difference that you have lived and lived well.</q>
            <span class="testimonial-author">Ralph Waldo Emerson</span>
          </div>
        </div>
        <div class="gallery-cell py-0">
          <div class="testimonial my-5">
            <img class="testimonial-avatar" src="https://www.biography.com/.image/t_share/MTY2NTQ1NTM2OTM2MDYwMTQ2/charles-dickens.jpg">
            <q class="testimonial-quote">No one is useless in this world who lightens the burdens of another.</q>
            <span class="testimonial-author">Charles Dickens</span>
          </div>
        </div>
      </div>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/flickity/1.0.0/flickity.pkgd.min.js" charset="utf-8"></script>

<script type="text/javascript">
var flkty = new Flickity( '.main-gallery', {
cellAlign: 'left',
contain: true,
wrapAround: true,
prevNextButtons: false,
autoPlay: 5000,
pageDots:false
});
</script>
<?php

  require 'templates/footer.php';

 ?>
