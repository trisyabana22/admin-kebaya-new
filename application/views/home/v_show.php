<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Kebaya</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />

    <!-- Favicons -->
    <link href="<?php echo base_url(); ?>assets/home/img/favicon.png" rel="icon" />
    <link href="<?php echo base_url(); ?>assets/home/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="<?php echo base_url(); ?>assets/home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/home/vendor/icofont/icofont.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/home/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/home/vendor/venobox/venobox.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/home/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="<?php echo base_url(); ?>assets/home/vendor/aos/aos.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="<?php echo base_url(); ?>assets/home/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Bethany - v2.2.1
  * Template URL: https://bootstrapmade.com/bethany-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
    <style>
      @media (min-width: 768px) {
        .bg-food {
          background-image: url("<?php echo base_url(); ?>assets/home/img//kebaya/5.jpg");
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
          background-image: url("<?php echo base_url(); ?>assets/home/img//kebaya/5.jpg");
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
              <a href="javascript:void(0);"><span><img src="<?= base_url(); ?>assets/home/img/apple-touch-icon.png" class="img-thumbnail" alt=""> Kebaya</span></a>
            </h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html"><img src="<?php echo base_url(); ?>assets/home/img/logo.png" alt="" class="img-fluid"></a>-->
          </div>

          <nav class="nav-menu d-none d-lg-block">
            <ul>
              <li class="active"><a href="#header">Beranda</a></li>
              <!-- <li><a href="#services">Services</a></li> -->
              <li><a href="#produk">Produk</a></li>
              <li><a href="#about">Tentang Kami</a></li>
             
              <li><a href="#contact">Kontak</a></li>

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
        <h1>Your New Online Presence with Bethany</h1>
        <h2>We are team of talented designers making websites with Bootstrap</h2>
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
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                  </form>
                </span>
              </div>
            </div>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="100">
            <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                <li data-filter="*" class="filter-active">All</li>
                <li data-filter=".filter-app">App</li>
                <li data-filter=".filter-card">Card</li>
                <li data-filter=".filter-web">Web</li>
              </ul>
            </div>
          </div>

          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 mt-4">
              <h3>Kebaya</h3>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
              <a href="produk-details.html" style="color: #444444">
                <div class="card mt-4 shadow-sm border border-white sudut">
                  <div class="bg-food"></div>
                  <!-- <img class="card-img-top" src="<?php echo base_url(); ?>assets/home/img/kebaya/1.jpg" alt="Card image cap" /> -->
                  <div class="card-body">
                    <!-- <p class="mb-1 line-clamp-1"><b>Kebayadsd sad</b></p> -->
                    <h6 class="card-title line-clamp">Setelan Kebaya Kerah merah kuning ukuran xl</h6>
                    <p class="card-text"><b>Rp 230.000</b></p>
                    <span class="badge badge-success">Stok 20 pcs</span>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                  </div>
                </div>
              </a>
            </div>
          </div>
          <div class="row" data-aos="fade-up" data-aos-delay="200">
            <div class="col-lg-12 mt-4">
              <h3>Batik</h3>
            </div>
            <div class="col-lg-3 col-sm-6 col-md-4 col-6">
              <div class="card mt-4 shadow-sm border border-white sudut">
                <div class="bg-food"></div>
                <!-- <img class="card-img-top" src="<?php echo base_url(); ?>assets/home/img/kebaya/1.jpg" alt="Card image cap" /> -->
                <div class="card-body">
                  <!-- <p class="mb-1 line-clamp-1"><b>Kebayadsd sad</b></p> -->
                  <h6 class="card-title line-clamp">Setelan Kebaya Kerah merah kuning ukuran xl</h6>
                  <p class="card-text"><b>Rp 230.000</b></p>
                  <span class="badge badge-danger">Stok Habis</span>
                  <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
              </div>
            </div>
          </div>

         
        </div>
      </section>
      <!-- End Portfolio Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
        <div class="container">
          <div class="row content">
            <div class="col-lg-6" data-aos="fade-right" data-aos-delay="100">
              <h2>Eum ipsam laborum deleniti velitena</h2>
              <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assum perenda sruen jonee trave</h3>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qui officia deserunt mollit anim id est laborum
              </p>
              <ul>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequa</li>
                <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit</li>
                <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in</li>
              </ul>
              <p class="font-italic">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
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
              <iframe
                style="border: 0; width: 100%; height: 270px"
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                frameborder="0"
                allowfullscreen
              ></iframe>
              <div class="info mt-4">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>A108 Adam Street, New York, NY 535022</p>
              </div>
              <div class="row">
                <div class="col-lg-6 mt-4">
                  <div class="info">
                    <i class="icofont-envelope"></i>
                    <h4>Email:</h4>
                    <p>info@example.com</p>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="info w-100 mt-4">
                    <i class="icofont-whatsapp"></i>
                    <h4>Call:</h4>
                    <p>+1 5589 55488 55s</p>
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
            &copy; Copyright <strong><span>Bethany</span></strong
            >. All Rights Reserved
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
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="<?php echo base_url(); ?>assets/home/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/php-email-form/validate.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/counterup/counterup.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/venobox/venobox.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/home/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="<?php echo base_url(); ?>assets/home/js/main.js"></script>
  </body>
</html>
