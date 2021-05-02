<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />

  <title><?= $detail['nama_produk']; ?></title>
  <meta content="" name="description" />
  <meta content="" name="keywords" />

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/home/img/logo/<?= $logo; ?>" rel="icon" />
  <link href="<?= base_url(); ?>assets/home/img/logo/<?= $logo; ?>" rel="apple-touch-icon" />

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

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet" />

  <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container">
      <div class="header-container d-flex align-items-center">
        <div class="logo mr-auto">
          <h1 class="text-light">
            <a href="<?= base_url(); ?>"><span>Kebaya</span></a>
          </h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html"><img src="<?= base_url(); ?>assets/home/img/produkng" alt="" class="img-fluid"></a>-->
        </div>

        <nav class="nav-menu d-none d-lg-block">
          <ul>
            <!-- <li><a href="index.html">Beranda</a></li> -->
          </ul>
        </nav>
        <!-- .nav-menu -->
      </div>
      <!-- End Header Container -->
    </div>
  </header>
  <!-- End Header -->

  <main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <!-- <div class="container">
          <div class="d-flex justify-content-between align-items-center">
            <h2>Portfolio Details</h2>
          </div>
        </div> -->
    </section>
    <!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->

    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row">
          <div class="col-md-4 mb-3" data-aos="fade-up" data-aos-delay="100">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="false">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                <?php
                $i = 1;
                foreach ($gambar as $gb) {
                  echo '<li data-target="#carouselExampleIndicators" data-slide-to="' . $i++ . '"></li>';
                }
                ?>

              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="<?= base_url(); ?>assets/home/img/produk/<?= $detail['gambar_produk']; ?>" class="d-block w-100" alt="" />
                </div>
                <?php
                foreach ($gambar as $gbr) {
                  echo '<div class="carousel-item"><img class="d-block w-100" src="' . base_url() . 'assets/home/img/produk/' . $gbr['gambar_produk'] . '" alt="Second slide" /></div>';
                }
                ?>

              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
          <div class="col-md-5" data-aos="fade-up" data-aos-delay="100">
            <div class="section-title">
              <h2>Detail Produk</h2>
              <h3><?= $detail['nama_produk']; ?></h3>
              <h4 style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif">
                <b>
                  <?php
                  if ($detail['min_harga'] == $detail['max_harga']) {
                    echo "Rp " . number_format((float)$detail['min_harga'], 0, ',', '.');
                  } else {
                    echo "Rp " . number_format((float)$detail['min_harga'], 0, ',', '.');
                    echo " - Rp " . number_format((float)$detail['max_harga'], 0, ',', '.');
                  }
                  ?>
                </b>
              </h4>
              <p><b>Bahan :</b> <?= $detail['bahan']; ?></p>
              <p><b>Ukuran : </b>
                <select id="ukuran">
                  <?php
                  foreach ($stok as $ukuran) {
                    echo "<option value='" . $ukuran['id_stok'] . "' data-id='" . $ukuran['id_stok'] . "'>" . $ukuran['ukuran_stok'] . "</option>";
                  }
                  ?>
                </select>
              </p>
              <p id="stokna"><b>Stok :</b> <?= $stok[0]['jumlah_stok']; ?> Pcs</p>
              <p id="hargana"><b>Harga :</b> Rp <?= number_format((float)$stok[0]['harga'], 0, ',', '.'); ?></p>
              <p><?= $detail['deskripsi']; ?></p>
            </div>
            <h4></h4>
          </div>
          <div class="col-md-3">
            <div class="card">
              <div class="card-body">
                <p class="card-title"><b>100% Produk Original</b></p>
                <!-- <form action="">
                  <label for="">Ukuran</label>
                  <select name="" id="" class="form-control mb-3">
                    <option value="">Pilih Ukuran</option>
                    <option value=""></option>
                  </select>
                </form> -->

                <a target="_blank" href="<?= base_url('home/wa/'); ?>Apakah produk <?= $detail['nama_produk']; ?> tersedia?"> <button type="button" class="btn btn-success"><i class="icofont-whatsapp"></i> Pesan Sekarang</button></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Portfolio Details Section -->
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
  <script src="<?= base_url(); ?>assets/dinamis/detail.js"></script>
</body>

</html>