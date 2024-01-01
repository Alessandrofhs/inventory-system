<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>{{ $Title?? __('Inventory TRO') }}</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('Arsha/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('Arsha/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('Arsha/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('Arsha/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Arsha/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('Arsha/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Arsha/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('Arsha/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('Arsha/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top ">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="index.html">{{ config('app.name','INTRO') }}</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="getstarted scrollto" href="{{ url('login') }}">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up" data-aos-delay="200">
          <h1>Inventory TRO</h1>
          <h2>Welcome to Inventory TRO <br> Politeknik STMI Jakarta</h2> <!-- Teks baru ditambahkan di sini -->
          <div class="d-flex justify-content-center justify-content-lg-start mt-2"> <!-- Mengatur margin-top di sini -->
            <a href="{{ url('login') }}" class="btn-get-started scrollto">Login</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{ asset('Arsha/assets/img/logointro.png') }}" class="img-fluid animated" alt="" style="width: 100%;">
        </div>
      </div>
    </div>    
    
  </section>

  <!-- End Hero -->

  <!-- Vendor JS Files -->
  <script src="{{ asset('Arsha/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('Arsha/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('Arsha/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('Arsha/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('Arsha/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('Arsha/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('Arsha/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('Arsha/assets/js/main.js') }}"></script>

</body>

</html>