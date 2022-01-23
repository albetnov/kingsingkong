<?php
session_start();

if (isset($_POST['submit'])) {
  if (empty($_POST['agreed'])) {
    $_SESSION['error'] = 'Anda harus menyetujui aturan pembelian dahulu!';
    $validate = true;
  }
  if (empty($_POST['pesan'])) {
    $_SESSION['error'] = 'Kolom pesan tidak boleh kosong!';
    $validate = true;
  }
  if ($validate) {
    header('location:index.php#pesan');
    exit();
  } else {
    header('location:https://facebook.com');
    exit();
  }
}
include __DIR__ . '/layouts/header.php';
?>
<!-- Customers -->
<div class="slider-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="text-center">Sponsor Kami</h4>
        <!-- Image Slider -->
        <div class="slider-container">
          <div class="swiper-container image-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="img-fluid" src="images/customer-logo-1.png" alt="alternative" />
              </div>
              <div class="swiper-slide">
                <img class="img-fluid" src="images/customer-logo-2.png" alt="alternative" />
              </div>
              <div class="swiper-slide">
                <img class="img-fluid" src="images/customer-logo-3.png" alt="alternative" />
              </div>
              <div class="swiper-slide">
                <img class="img-fluid" src="images/customer-logo-4.png" alt="alternative" />
              </div>
              <div class="swiper-slide">
                <img class="img-fluid" src="images/customer-logo-5.png" alt="alternative" />
              </div>
              <div class="swiper-slide">
                <img class="img-fluid" src="images/customer-logo-6.png" alt="alternative" />
              </div>
            </div>
            <!-- end of swiper-wrapper -->
          </div>
          <!-- end of swiper container -->
        </div>
        <!-- end of slider-container -->
        <!-- end of image slider -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of slider-1 -->
<!-- end of customers -->

<!-- Description -->
<div class="cards-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="above-heading">Deskripsi</div>
        <h2 class="h2-heading">Apa yang kami tawarkan?</h2>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="images/description-1.png" alt="alternative" />
          </div>
          <div class="card-body">
            <h4 class="card-title">Rasa Enak</h4>
            <p>
              Lorem ipsum dolor sit amet consectetur, adipisicing elit.
              Mollitia architecto rerum repudiandae rem, nisi molestias enim
              accusamus consequuntur pariatur. Veritatis, iste deleniti
              soluta maxime laboriosam doloribus quod at tempore eum.
            </p>
          </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="images/description-2.png" alt="alternative" />
          </div>
          <div class="card-body">
            <h4 class="card-title">Karya Anak SMK</h4>
            <p>SMK BISA SMK HEBAT</p>
          </div>
        </div>
        <!-- end of card -->

        <!-- Card -->
        <div class="card">
          <div class="card-image">
            <img class="img-fluid" src="images/description-3.png" alt="alternative" />
          </div>
          <div class="card-body">
            <h4 class="card-title">Kami Beda</h4>
            <p>Seperti sekolah kami, produk kami juga berbeda!</p>
          </div>
        </div>
        <!-- end of card -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of cards-1 -->
<!-- end of description -->

<!-- Features -->
<div id="features" class="tabs">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="above-heading">Varian</div>
        <h2 class="h2-heading">Varian Rasa Yang Kami Miliki</h2>
        <p class="p-heading">Kami memiliki 3 varian rasa:</p>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Tabs Links -->
        <ul class="nav nav-tabs" id="argoTabs" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="nav-tab-1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><i class="fas fa-list"></i>Original</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-envelope-open-text"></i>Balado</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="nav-tab-3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><i class="fas fa-chart-bar"></i>Barbeque</a>
          </li>
        </ul>
        <!-- end of tabs links -->

        <!-- Tabs Content -->
        <div class="tab-content" id="argoTabsContent">
          <!-- Tab -->
          <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab-1">
            <div class="row">
              <div class="col-lg-6">
                <div class="image-container">
                  <img class="img-fluid" src="images/features-1.png" alt="alternative" />
                </div>
                <!-- end of image-container -->
              </div>
              <!-- end of col -->
              <div class="col-lg-6">
                <div class="text-container">
                  <h3>List Building Is Easier Than Ever</h3>
                  <p>
                    It's very easy to start using Tivo. You just need to
                    fill out and submit the
                    <a class="blue page-scroll" href="sign-up.html">Sign Up Form</a>
                    and you will receive access to the app and all of its
                    features in no more than 24h.
                  </p>
                  <ul class="list-unstyled li-space-lg">
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Create and embed on websites newsletter sign up
                        forms
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Manage forms and landing pages for your services
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Add and remove subscribers using the control panel
                      </div>
                    </li>
                  </ul>
                  <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-1">LIGHTBOX</a>
                </div>
                <!-- end of text-container -->
              </div>
              <!-- end of col -->
            </div>
            <!-- end of row -->
          </div>
          <!-- end of tab-pane -->
          <!-- end of tab -->

          <!-- Tab -->
          <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab-2">
            <div class="row">
              <div class="col-lg-6">
                <div class="image-container">
                  <img class="img-fluid" src="images/features-2.png" alt="alternative" />
                </div>
                <!-- end of image-container -->
              </div>
              <!-- end of col -->
              <div class="col-lg-6">
                <div class="text-container">
                  <h3>Campaigns Monitoring Tools</h3>
                  <p>
                    Campaigns monitoring is a feature we've developed since
                    the beginning because it's at the core of Tivo and
                    basically to any marketing activity focused on results.
                  </p>
                  <ul class="list-unstyled li-space-lg">
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Easily plan campaigns and schedule their starting
                        date
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Start campaigns and follow their evolution closely
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Evaluate campaign results and optimize future
                        actions
                      </div>
                    </li>
                  </ul>
                  <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-2">LIGHTBOX</a>
                </div>
                <!-- end of text-container -->
              </div>
              <!-- end of col -->
            </div>
            <!-- end of row -->
          </div>
          <!-- end of tab-pane -->
          <!-- end of tab -->

          <!-- Tab -->
          <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab-3">
            <div class="row">
              <div class="col-lg-6">
                <div class="image-container">
                  <img class="img-fluid" src="images/features-3.png" alt="alternative" />
                </div>
                <!-- end of image-container -->
              </div>
              <!-- end of col -->
              <div class="col-lg-6">
                <div class="text-container">
                  <h3>Analytics Control Panel</h3>
                  <p>
                    Analytics control panel is important for every marketing
                    team so it's beed implemented from the begging and
                    designed to produce reports based on very little input
                    information.
                  </p>
                  <ul class="list-unstyled li-space-lg">
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        If you set it up correctly you will get acces to
                        great intel
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Easy to integrate in your websites and landing pages
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        The generated reports are important for your
                        strategy
                      </div>
                    </li>
                  </ul>
                  <a class="btn-solid-reg popup-with-move-anim" href="#details-lightbox-3">LIGHTBOX</a>
                </div>
                <!-- end of text-container -->
              </div>
              <!-- end of col -->
            </div>
            <!-- end of row -->
          </div>
          <!-- end of tab-pane -->
          <!-- end of tab -->
        </div>
        <!-- end of tab content -->
        <!-- end of tabs content -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of tabs -->
<!-- end of features -->

<!-- Details Lightboxes -->
<!-- Details Lightbox 1 -->
<div id="details-lightbox-1" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="container">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <div class="image-container">
          <img class="img-fluid" src="images/details-lightbox.png" alt="alternative" />
        </div>
        <!-- end of image-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>List Building</h3>
        <hr />
        <h5>Core service</h5>
        <p>
          It's very easy to start using Tivo. You just need to fill out and
          submit the Sign Up Form and you will receive access to the app.
        </p>
        <ul class="list-unstyled li-space-lg">
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">List building framework</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Easy database browsing</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">User administration</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Automate user signup</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Quick formatting tools</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Fast email checking</div>
          </li>
        </ul>
        <a class="btn-solid-reg mfp-close" href="sign-up.html">SIGN UP</a>
        <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of lightbox-basic -->
<!-- end of details lightbox 1 -->

<!-- Details Lightbox 2 -->
<div id="details-lightbox-2" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="container">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <div class="image-container">
          <img class="img-fluid" src="images/details-lightbox.png" alt="alternative" />
        </div>
        <!-- end of image-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Campaign Monitoring</h3>
        <hr />
        <h5>Core service</h5>
        <p>
          It's very easy to start using Tivo. You just need to fill out and
          submit the Sign Up Form and you will receive access to the app.
        </p>
        <ul class="list-unstyled li-space-lg">
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">List building framework</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Easy database browsing</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">User administration</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Automate user signup</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Quick formatting tools</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Fast email checking</div>
          </li>
        </ul>
        <a class="btn-solid-reg mfp-close" href="sign-up.html">SIGN UP</a>
        <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of lightbox-basic -->
<!-- end of details lightbox 2 -->

<!-- Details Lightbox 3 -->
<div id="details-lightbox-3" class="lightbox-basic zoom-anim-dialog mfp-hide">
  <div class="container">
    <div class="row">
      <button title="Close (Esc)" type="button" class="mfp-close x-button">
        ×
      </button>
      <div class="col-lg-8">
        <div class="image-container">
          <img class="img-fluid" src="images/details-lightbox.png" alt="alternative" />
        </div>
        <!-- end of image-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Analytics Tools</h3>
        <hr />
        <h5>Core service</h5>
        <p>
          It's very easy to start using Tivo. You just need to fill out and
          submit the Sign Up Form and you will receive access to the app.
        </p>
        <ul class="list-unstyled li-space-lg">
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">List building framework</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Easy database browsing</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">User administration</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Automate user signup</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Quick formatting tools</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Fast email checking</div>
          </li>
        </ul>
        <a class="btn-solid-reg mfp-close" href="sign-up.html">SIGN UP</a>
        <a class="btn-outline-reg mfp-close as-button" href="#screenshots">BACK</a>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of lightbox-basic -->
<!-- end of details lightbox 3 -->
<!-- end of details lightboxes -->

<!-- Details -->
<div id="details" class="basic-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="text-container">
          <h2>Ayo! Tunggu Apa Lagi? Beli Keripik KingSingkong Segera!</h2>
          <p>Saat ini kami hanya tersedia di:</p>
          <ul class="list-unstyled li-space-lg">
            <li class="media">
              <i class="fas fa-square"></i>
              <div class="media-body">Kota Batam</div>
            </li>
            <li class="media">
              <i class="fas fa-square"></i>
              <div class="media-body">Whatsapp</div>
            </li>
          </ul>
          <a class="btn-solid-reg page-scroll animate__animated animate__pulse animate__infinite" href="#pesan">Beli Sekarang!</a>
        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-6">
        <div class="image-container">
          <img class="img-fluid" src="images/details.png" alt="alternative" />
        </div>
        <!-- end of image-container -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of basic-1 -->
<!-- end of details -->

<!-- Video -->
<div id="video" class="basic-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <!-- Video Preview -->
        <div class="image-container">
          <div class="video-wrapper">
            <a class="popup-youtube" href="https://www.youtube.com/watch?v=fLCjQJCekTs" data-effect="fadeIn">
              <img class="img-fluid" src="images/video-image.png" alt="alternative" />
              <span class="video-play-button">
                <span></span>
              </span>
            </a>
          </div>
          <!-- end of video-wrapper -->
        </div>
        <!-- end of image-container -->
        <!-- end of video preview -->

        <div class="p-heading">
          Dokumentasi pembuatan KingSingkong yang pastinya terjamin bersih
          dan layak dikonsumsi.
        </div>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of basic-2 -->
<!-- end of video -->

<!-- Pricing -->
<div id="pricing" class="cards-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="above-heading">Harga</div>
        <h2 class="h2-heading">Harga Per Varian</h2>
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <!-- Card-->
        <div class="card">
          <div class="card-body">
            <div class="card-title">BASIC</div>
            <div class="price">
              <span class="currency">$</span><span class="value">Free</span>
            </div>
            <div class="frequency">14 days trial</div>
            <div class="divider"></div>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">Email Marketing Module</div>
              </li>
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">User Control Management</div>
              </li>
              <li class="media">
                <i class="fas fa-times"></i>
                <div class="media-body">List Building And Cleaning</div>
              </li>
              <li class="media">
                <i class="fas fa-times"></i>
                <div class="media-body">Collected Data Reports</div>
              </li>
              <li class="media">
                <i class="fas fa-times"></i>
                <div class="media-body">Planning And Evaluation</div>
              </li>
            </ul>
            <div class="button-wrapper">
              <a class="btn-solid-reg page-scroll" href="sign-up.html">SIGN UP</a>
            </div>
          </div>
        </div>
        <!-- end of card -->
        <!-- end of card -->

        <!-- Card-->
        <div class="card">
          <div class="card-body">
            <div class="card-title">ADVANCED</div>
            <div class="price">
              <span class="currency">$</span><span class="value">29.99</span>
            </div>
            <div class="frequency">monthly</div>
            <div class="divider"></div>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">Email Marketing Module</div>
              </li>
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">User Control Management</div>
              </li>
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">List Building And Cleaning</div>
              </li>
              <li class="media">
                <i class="fas fa-times"></i>
                <div class="media-body">Collected Data Reports</div>
              </li>
              <li class="media">
                <i class="fas fa-times"></i>
                <div class="media-body">Planning And Evaluation</div>
              </li>
            </ul>
            <div class="button-wrapper">
              <a class="btn-solid-reg page-scroll" href="sign-up.html">SIGN UP</a>
            </div>
          </div>
        </div>
        <!-- end of card -->
        <!-- end of card -->

        <!-- Card-->
        <div class="card">
          <!--<div class="label">
                            <p class="best-value">Best Value</p>
                        </div> -->
          <div class="card-body">
            <div class="card-title">COMPLETE</div>
            <div class="price">
              <span class="currency">$</span><span class="value">39.99</span>
            </div>
            <div class="frequency">monthly</div>
            <div class="divider"></div>
            <ul class="list-unstyled li-space-lg">
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">Email Marketing Module</div>
              </li>
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">User Control Management</div>
              </li>
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">List Building And Cleaning</div>
              </li>
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">Collected Data Reports</div>
              </li>
              <li class="media">
                <i class="fas fa-check"></i>
                <div class="media-body">Planning And Evaluation</div>
              </li>
            </ul>
            <div class="button-wrapper">
              <a class="btn-solid-reg page-scroll" href="sign-up.html">SIGN UP</a>
            </div>
          </div>
        </div>
        <!-- end of card -->
        <!-- end of card -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of cards-2 -->
<!-- end of pricing -->

<!-- Testimonials -->
<div class="slider-2">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3 class="text-center">Apa Kata Pembeli Kami?</h3>
        <!-- Text Slider -->
        <div class="slider-container">
          <div class="swiper-container text-slider">
            <div class="swiper-wrapper">
              <!-- Slide -->
              <div class="swiper-slide">
                <div class="image-wrapper">
                  <img class="img-fluid" src="images/testimonial-1.jpg" alt="alternative" />
                </div>
                <!-- end of image-wrapper -->
                <div class="text-wrapper">
                  <div class="testimonial-text">Woenak loh. Beli lah!</div>
                  <div class="testimonial-author">Asiong Kasiong</div>
                </div>
                <!-- end of text-wrapper -->
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="image-wrapper">
                  <img class="img-fluid" src="images/testimonial-2.jpg" alt="alternative" />
                </div>
                <!-- end of image-wrapper -->
                <div class="text-wrapper">
                  <div class="testimonial-text">Mantul Pokoknya</div>
                  <div class="testimonial-author">Asep Surasep</div>
                </div>
                <!-- end of text-wrapper -->
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="image-wrapper">
                  <img class="img-fluid" src="images/testimonial-3.jpg" alt="alternative" />
                </div>
                <!-- end of image-wrapper -->
                <div class="text-wrapper">
                  <div class="testimonial-text">Enak bet dah</div>
                  <div class="testimonial-author">Sendy Wahyudi</div>
                </div>
                <!-- end of text-wrapper -->
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->

              <!-- Slide -->
              <div class="swiper-slide">
                <div class="image-wrapper">
                  <img class="img-fluid" src="images/testimonial-4.jpg" alt="alternative" />
                </div>
                <!-- end of image-wrapper -->
                <div class="text-wrapper">
                  <div class="testimonial-text">
                    Kruncih keruancuih gimana gitu
                  </div>
                  <div class="testimonial-author">Siti</div>
                </div>
                <!-- end of text-wrapper -->
              </div>
              <!-- end of swiper-slide -->
              <!-- end of slide -->
            </div>
            <!-- end of swiper-wrapper -->

            <!-- Add Arrows -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
            <!-- end of add arrows -->
          </div>
          <!-- end of swiper-container -->
        </div>
        <!-- end of slider-container -->
        <!-- end of text slider -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of slider-2 -->
<!-- end of testimonials -->

<!-- Newsletter -->
<div class="form">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="text-container">
          <div class="above-heading">Pesan Sekarang</div>
          <h2>Fomulir Pesan KingSingkong</h2>

          <!-- Pesan KingSingkong-->
          <form id="pesankignsingkong" method="POST">
            <div class="form-group">
              <input type="text" class="form-control-input" id="pesan" name="pesan" value="Saya mau beli KingSingkong" required />
              <div class="help-block with-errors"></div>
            </div>
            <div class="form-group checkbox">
              <input type="checkbox" id="nterms" value="Agreed-to-Terms" name="agreed" />Saya menyetujui
              <a href="privacy-policy.html">Aturan Pembelian</a> dan
              memahami
              <a href="terms-conditions.html">Informasi Pemakaian</a>
            </div>
            <div class="form-group">
              <button type="submit" class="form-control-submit-button animate__animated animate__pulse animate__infinite" name="submit">
                Pesan & Hubungi Kami
              </button>
              <?php
              if (isset($_SESSION['error'])) {
                echo '<div class="alert alert-danger">' . $_SESSION['error'] . '</div>';
              }
              unset($_SESSION['error']);
              ?>
            </div>
            <div class="form-message">
              <div id="nmsgSubmit" class="h3 text-center hidden"></div>
            </div>
          </form>
          <!-- end of Pesan KingSingkong-->
        </div>
        <!-- end of text-container -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
    <div class="row">
      <div class="col-lg-12">
        <div class="icon-container">
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-pinterest-p fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#your-link">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-linkedin-in fa-stack-1x"></i>
            </a>
          </span>
        </div>
        <!-- end of col -->
      </div>
      <!-- end of col -->
    </div>
    <!-- end of row -->
  </div>
  <!-- end of container -->
</div>
<!-- end of form -->
<!-- end of newsletter -->
<?php include __DIR__ . '/layouts/footer.php' ?>