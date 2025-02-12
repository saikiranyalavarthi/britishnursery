<?php require_once("app/views/components/header.php") ?>

<!-- Hero Start -->
<div class="container-fluid bg-primary mb-5" style="margin-top: 10%">
      <div
        class="d-flex flex-column align-items-center justify-content-center"
        style="min-height:200px"
      >
        <h3 class="display-3 font-weight-bold text-white">Gallery</h3>
        <div class="d-inline-flex text-white">
          <p class="m-0"><a class="text-white" href="">Home</a></p>
          <p class="m-0 px-2">/</p>
          <p class="m-0">Gallery</p>
        </div>
      </div>
    </div>
    <!-- Header End -->

    <!-- Gallery Start -->
    <div class="container-fluid pt-2 pb-3">
      <div class="container">
        <div class="text-center pb-2">
          <p class="section-title px-5">
            <span class="px-2">Our Gallery</span>
          </p>
          <h1 class="mb-4">Our Gallery of FUN</h1>
          <!-- TODO: modify styles as desired -->
          <p>British Islamic Nursery is more than your round of the meal Day Care, we aspire to be a leading education provider for the entire family and an actor of progress and solidarity for the community.</p>
        </div>
        <div class="row">
          <div class="col-12 text-center mb-2">
            <ul class="list-inline mb-4" id="portfolio-flters">
              <!-- <li class="btn btn-outline-primary m-1 active" data-filter="*">
                All
              </li> -->
              <!-- TODO: handle this new content -->
              <!-- <li class="btn btn-outline-primary m-1 active" data-filter="*">
               Field Trips
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".first">
               Events (UAE national day, graduation….)
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".second">
                Parents and family activities ( Mommy and Me  playdates, workshops….) 
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".third">
                Charity (Quran distribution in Sharjah, Water distribution to building workers….) 
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".third">
                Camps (Summer camps, winter camps) 
              </li>
              <li class="btn btn-outline-primary m-1" data-filter=".third">
                Parenting Programs ( Potty training, Picky eaters, Sleep Adjustment, School Readiness…) 
              </li> -->
            </ul>
          </div>
        </div>
        <div class="row portfolio-container">
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="assets/img/gallery01.jpg" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="assets/img/gallery01.jpg" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="assets/img/gallery02.jpg" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="assets/img/gallery02.jpg" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item third">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="assets/img/gallery03.jpg" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="assets/img/gallery03.jpg" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item first">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="assets/img/gallery04.jpg" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="assets/img/gallery04.jpg" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4 portfolio-item second">
            <div class="position-relative overflow-hidden mb-2">
              <img class="img-fluid w-100" src="assets/img/gallery05.jpg" alt="" />
              <div
                class="portfolio-btn bg-primary d-flex align-items-center justify-content-center"
              >
                <a href="assets/img/gallery05.jpg" data-lightbox="portfolio">
                  <i class="fa fa-plus text-white" style="font-size: 60px"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Gallery End -->

<?php require_once("app/views/components/footer.php") ?>
