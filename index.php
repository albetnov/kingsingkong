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
    header('location:https://www.youtube.com/watch?v=chY9p-XLHHk');
    exit();
  }
}
include __DIR__ . '/layouts/header.php';
?>
<!-- Customers -->
<div class="slider-1" id="cusSec">
  <div class="container" id="visibleCus">
    <div class="row">
      <div class="col-lg-12">
        <h4 class="text-center">Sponsor Kami</h4>
        <!-- Image Slider -->
        <div class="slider-container">
          <div class="swiper-container image-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <img class="img-fluid" src="images/sponsor1.png" alt="INTEL KOK KENTANG. EH" title="INTEL KOK KENTANG. EH" />
              </div>
              <div class="swiper-slide">
                <img class="img-fluid" src="images/sponsor2.png" alt="HIGH TECH TP GABOLEH LARAVEL. EH" title="HIGH TECH TP GABOLEH LARAVEL. EH" />
              </div>
              <div class="swiper-slide">
                <img class="img-fluid" src="images/powered.jpg" alt="KATANYA POWERED KOK BAJAKAN. EH." title="KATANYA POWERED KOK BAJAKAN. EH." />
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
<div class="cards-1" id="descSec">
  <div class="container" id="visibleDesc">
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
              Dibuat oleh murid murid dari Global Mind. Mindnya aja dah global. Rasanya pasti global juga.
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
  <div class="container" id="visibleVar">
    <div class="row">
      <div class="col-lg-12">
        <div class="above-heading">Varian</div>
        <h2 class="h2-heading">Varian Rasa Yang Kami Miliki</h2>
        <p class="p-heading">Saat ini kami hanya memiliki rasa original:</p>
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
            <a class="nav-link" id="nav-tab-2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><i class="fas fa-envelope-open-text"></i>AKAN DATANG</a>
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
                  <img class="img-fluid" src="images/kemasan.webp" alt="alternative" />
                </div>
                <!-- end of image-container -->
              </div>
              <!-- end of col -->
              <div class="col-lg-6">
                <div class="text-container">
                  <h3>Rasa Original</h3>
                  <p>
                    Meskipun rasanya original. Tapi bukan berarti tidak beda? Kenapa? karena kami berbeda.
                  </p>
                  <ul class="list-unstyled li-space-lg">
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Enak
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        Crispy
                      </div>
                    </li>
                    <li class="media">
                      <i class="fas fa-square"></i>
                      <div class="media-body">
                        100% Singkong
                      </div>
                    </li>
                  </ul>
                  <a class="btn-solid-reg hvr-radial-out popup-with-move-anim" href="#details-lightbox-1">Detail Kemasan</a>
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
                  <h3>COMING SOON</h3>
                  <p>
                    --COMING SOON--
                  </p>

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
          <img class="img-fluid" src="images/kemasan.webp" alt="alternative" />
        </div>
        <!-- end of image-container -->
      </div>
      <!-- end of col -->
      <div class="col-lg-4">
        <h3>Informasi Kemasan</h3>
        <hr />
        <h5>Apa Saja yang ada di kemasan?</h5>
        <p>
          Kemasan KingSingkong
        </p>
        <ul class="list-unstyled li-space-lg">
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Plastic High Quality</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Sticker HD</div>
          </li>
          <li class="media">
            <i class="fas fa-square"></i>
            <div class="media-body">Itu saja sih</div>
          </li>
        </ul>
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
<!-- end of col -->
<!-- end of lightbox-basic -->
<!-- end of details lightbox 3 -->
<!-- end of details lightboxes -->

<!-- Details -->
<div id="details" class="basic-1">
  <div class="container" id="visibleDet">
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
          <a class="btn-solid-reg hvr-radial-out page-scroll animate__animated animate__pulse animate__infinite" href="#pesan">Beli Sekarang!</a>
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
  <div class="container" id="visibleVid">
    <div class="row">
      <div class="col-lg-12">
        <!-- Video Preview -->
        <div class="image-container">
          <div class="video-wrapper">
            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" target="_blank" data-effect="fadeIn">
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
  <div class="container" id="visiblePricing">
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
            <div class="card-title">Original</div>
            <div class="price">
              <span class="currency">Rp.</span><span class="value">5000</span>
            </div>
            <div class="frequency">KingSingkong Original</div>

            <div class="button-wrapper">
              <a class="btn-solid-reg hvr-shadow page-scroll" href="#pesan">BELI</a>
            </div>
          </div>
        </div>
        <!-- end of card -->
        <!-- end of card -->

        <!-- Card-->

        <!-- end of card -->
        <!-- end of card -->

        <!-- Card-->

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
<div class="slider-2" id="testi">
  <div class="container" id="visibleTesti">
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
                  <img class="img-fluid" src="images/pelanggan.jpg" style="width:300px;height:160px" alt="alternative" />
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
                  <img class="img-fluid" src="images/pelanggan1.jpg" style="width:300px;height:160px" alt="alternative" />
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
<div class="form" id="order">
  <div class="container" id="visibleOrder">
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
            <a href="#">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-facebook-f fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-twitter fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-pinterest-p fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="https://instagram.com/kingkong.offc">
              <i class="fas fa-circle fa-stack-2x"></i>
              <i class="fab fa-instagram fa-stack-1x"></i>
            </a>
          </span>
          <span class="fa-stack">
            <a href="#">
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
<?php
$customjs = '<script src="js/anim.js"></script>';
include __DIR__ . '/layouts/footer.php' ?>