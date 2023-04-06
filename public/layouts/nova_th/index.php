<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mahorat Tech - Raqamli mahsulotlar bilan
yorqin kelajak sari</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/logo.svg" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Nova - v1.3.0
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="#hero" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center"><?php echo alias('brand-header'); ?></h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>

      <nav id="navbar" class="navbar">
        <ul>
        <?php $menu = \R::findAll('menu'); ?>

        <?php foreach ($menu as $link): ?>

          <li><a href="<?php echo $link['url']; ?>"><?php echo $link['title']; ?></a></li>

        <?php endforeach; ?>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up"><?php echo alias('hero-text'); ?></h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p><?php echo alias('hero-subtext'); ?></p>
          </blockquote>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="about" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo alias('about-us-header'); ?></h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/img/why-us-bg.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

              <?php $about_sections = \R::findAll('about'); ?>

              <?php foreach ($about_sections as $about_section): ?>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3"><?php echo $about_section['title']; ?></h3>
                    <p><?php echo $about_section['text']; ?></p>
                  </div>
                </div>

              <?php endforeach; ?>

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <section id="services-cards" class="services-cards">
      <div class="container aos-init aos-animate" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo alias('our-services-header'); ?></h2>

        </div>

        <div class="row gy-4">

        <?php $services = \R::findAll('service'); ?>

              <?php foreach ($services as $service): ?>
                <div class="col-lg-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <div class="row">
                <div class="col-xl-5">
                  <div class="card-bg"
                    style="background-image: url(<?php echo $service['photo_url']; ?>);">
                  </div>
                </div>
                <div class="col-xl-7 d-flex align-items-center">
                  <div class="card-body">
                    <h4 class="card-title"><?php echo $service['title']; ?></h4>
                    <p><?php echo $service['text']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End Card Item -->

              <?php endforeach; ?>
        </div>

      </div>
    </section>

    <section id="products" class="why-us" style="margin: 0px;">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2><?php echo alias('our-products-header'); ?></h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('https://wallpaperaccess.com/full/1947484.jpg')">
          </div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

              <?php $products = \R::findAll('product'); ?>

              <?php foreach ($products as $product): ?>

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3"><?php echo $product['title']; ?></h3>
                    <p><?php echo $product['text']; ?></p>
                  </div>
                </div><!-- End slide item -->

              <?php endforeach; ?>

                

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span><?php echo alias('brand-header'); ?></span>
            </a>
            <p><?php echo alias('footer-subtext'); ?></p>
            <div class="social-links d-flex  mt-3">
              <a href="https://www.facebook.com/people/MTech/100084706930188/"
                class="facebook"><i class="bi bi-facebook"></i></a>
              <a href="https://www.instagram.com/mahorat_official/"
                class="instagram"><i class="bi bi-instagram"></i></a>
              <a href="/user/" class="instagram"></a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/aos/aos.js"></script>
  <script src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo ROOT_URL . '/layouts/' . LAYOUT; ?>/assets/js/main.js"></script>

</body>

</html>