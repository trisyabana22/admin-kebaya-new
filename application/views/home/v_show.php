<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title><?= $nama_toko; ?></title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/home/img/favicon.png" rel="icon" />
  <link href="<?= base_url(); ?>assets/home/img/apple-touch-icon.png" rel="apple-touch-icon" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/home/vendor/icofont/icofont.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/home/vendor/remixicon/remixicon.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/home/vendor/venobox/venobox.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/home/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
  <link href="<?= base_url(); ?>assets/home/vendor/aos/aos.css" rel="stylesheet" />

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/home/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <style>
    @media (min-width: 768px) {
      .bg-food {
        background-image: url("<?= base_url(); ?>assets/home/img//kebaya/5.jpg");
        -webkit-border-radius: 5px 5px 0px 0px;
        -moz-border-radius: 5px 5px 0px 0px;
        border-radius: 5px 5px 0px 0px;
        background-repeat: no-repeat;
        background-size: 100%;
        /* display: block; */
        /* width: 100%; */
        /* background-size: auto; */
        /* object-fit: cover; */
        height: 12rem;
      }
    }

    @media (max-width: 575.98px) {
      .bg-food {
        -webkit-border-radius: 5px 5px 0px 0px;
        -moz-border-radius: 5px 5px 0px 0px;
        border-radius: 5px 5px 0px 0px;
        background-repeat: no-repeat;
        background-size: 100%;
        /* object-fit: cover; */
        height: 10rem;
      }
    }

    .sudut {
      border-radius: 5px;
    }

    .line-clamp-1 {
      display: -webkit-box;
      -webkit-line-clamp: 1;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }

    .line-clamp {
      display: -webkit-box;
      -webkit-line-clamp: 2;
      -webkit-box-orient: vertical;
      overflow: hidden;
    }
  </style>
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a href="javascript:void(0);"><span><img src="<?= base_url(); ?>assets/home/img/logo/<?= $logo; ?>" class="img-thumbnail" alt=""> <?= $nama_toko; ?></span></a>
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="<?= base_url(); ?>assets/home/img/logo.png" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <li class="active"><a href="<?= base_url(); ?>">Beranda</a></li>
            <!-- <li><a href="#services">Services</a></li> -->
            <li><a href="#produk">Produk</a></li>
            <li><a href="#about">Tentang Kami</a></li>

            <li><a href="#contact">Kontak</a></li>
            <li><a href="<?= base_url('login'); ?>">Login</a></li>

            <!-- <li class="get-started"><a href="#about">Get Started</a></li> -->
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
      <!-- End Header Container -->
    </div>
  </header>
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
      <h1><?= $judul; ?></h1>
      <h2><?= $sub_judul; ?></h2>
      <!-- <a href="#about" class="btn-get-started scrollto">Get Started</a> -->
    </div>
  </section>
  <!-- End Hero -->

  <main id="main">





    <!-- ======= Portfolio Section ======= -->
    <section id="produk" class="portfolio">
      <div class="container">
        <div class="section-title" data-aos="fade-left">
          <div class="row">
            <div class="col-md-10">
              <h2>Produk Kami</h2>
            </div>
            <div class="col-md-2 col-12">
              <span class="">
                <form class="form-inline mb-2">
                  <input class="form-control" type="search" id="kategori-search" placeholder="Search" value="_" aria-label="Search" hidden />
                  <input class="form-control" type="text" id="produk-search" placeholder="Search" aria-label="Search" />
                </form>
              </span>
            </div>
          </div>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="_" data-filter2="ALL" class="filter-active">All</li>
              <?php
              foreach ($kategori as $ctg) {
                echo "<li data-filter=" . $ctg['id_kategori'] . " data-filter2=" . $ctg['nama_kategori'] . ">" . $ctg['nama_kategori'] . "</li>";
              }
              ?>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-9 col-sm-6 col-md-8 col-6 mt-4" data-aos="fade-up" data-aos-delay="200">
            <spann id="kategori">All</spann>
            <spann id="pencarian"></spann>

          </div>
          <div class="col-lg-3 col-sm-6 col-md-4 col-6 mt-4" data-aos="fade-up" data-aos-delay="200">
            <select class="form-control" id="urutkan">
              <option value="">Urutkan</option>
              <option value="ORDER-BY-nama_produk-asc">Berdasarkan Nama</option>
              <option value="ORDER-BY-harga_produk-asc">Harga Terendah</option>
              <option value="ORDER-BY-harga_produk-desc">Harga Tertinggi</option>
              <option value="ORDER-BY-date_create-asc">Produk Terbaru</option>
              <option value="ORDER-BY-date_create-desc">Produk Terlama</option>
            </select>
          </div>
        </div>
        <!-- bawaan tri -->
        <div class="col-lg-3 col-sm-6 col-md-4 col-6" hidden>
          <a href="<?= base_url('home/detail'); ?>" style="color: #444444">
            <div class="card mt-4 shadow-sm border border-white sudut">
              <div>
                <img class="bg-food" src="<?= base_url(); ?>assets/home/img/produk/5.jpg">
              </div>
              <!-- <img class="card-img-top" src="<?= base_url(); ?>assets/home/img/kebaya/1.jpg" alt="Card image cap" /> -->
              <div class="card-body">
                <!-- <p class="mb-1 line-clamp-1"><b>Kebayadsd sad</b></p> -->
                <h6 class="card-title line-clamp">BAWAAN</h6>
                <p class="card-text"><b>Rp 230.000</b></p>
                <span class="badge badge-success">Stok 20 pcs</span>
                <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
              </div>
            </div>
          </a>
        </div>
        <!-- end bawaan tri -->
        <div class="row" data-aos="fade-up" data-aos-delay="200" id="produkna">

        </div>


      </div>
    </section>
    <!-- End Portfolio Section -->

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
            <h2><?= $judul; ?></h2>
            <h3><?= $sub_judul; ?></h3>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
            <p>
              <?= $tentang_toko; ?>
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <div class="section-title">
              <h2>Contact</h2>
            </div>
          </div>

          <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
            <?= $url_maps; ?>
            <div class="info mt-4">
              <i class="icofont-google-map"></i>
              <h4>Location:</h4>
              <p><?= $alamat; ?></p>
            </div>
            <div class="row">
              <div class="col-lg-6 mt-4">
                <div class="info">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p><?= $alamat; ?></p>
                </div>
              </div>
              <div class="col-lg-6">
                <div class="info w-100 mt-4">
                  <i class="icofont-whatsapp"></i>
                  <h4>Call:</h4>
                  <p><?= $no_wa; ?></p>
                </div>
              </div>
            </div>


          </div>
        </div>
      </div>
    </section>
    <!-- End Contact Section -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">


    <div class="container d-md-flex py-4">
      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Bethany</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <?php if ($twitter <> '') { ?><a href="https://twitter.com/<?= $twitter; ?>" target="_blank" class="twitter"><i class="bx bxl-twitter"></i></a> <?php } ?>
        <?php if ($facebook <> '') { ?><a href="https://facebook.com/<?= $facebook; ?>" target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a> <?php } ?>
        <?php if ($instagram <> '') { ?><a href="https://instagram.com/<?= $instagram; ?>" target="_blank" class="instagram"><i class="bx bxl-instagram"></i></a> <?php } ?>
        <?php if ($youtube <> '') { ?><a href="https://youtube.com/<?= $youtube; ?>" target="_blank" class="google-plus"><i class="bx bxl-youtube"></i></a> <?php } ?>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url(); ?>assets/home/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url(); ?>assets/home/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url(); ?>assets/home/js/main.js"></script>
  <script src="<?= base_url(); ?>assets/dinamis/home.js"></script>
</body>

</html>