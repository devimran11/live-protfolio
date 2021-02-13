<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Personal Protfolio</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('frontend')}}/img/favicon.png" rel="icon">
  <link href="{{asset('frontend')}}/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Bootstrap CSS File -->
  <link href="{{asset('frontend')}}/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{asset('frontend')}}/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/lib/animate/animate.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{asset('frontend')}}/lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{asset('frontend')}}/css/style.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: DevFolio
    Theme URL: https://bootstrapmade.com/devfolio-bootstrap-portfolio-html-template/
    Author: BootstrapMade.com
    License: https://bootstrapmade.com/license/
  ======================================================= -->
</head>

<body id="page-top">

  <!--/ Nav Star /-->
    @include('frontend.header.header')
  <!--/ Nav End /-->

  <!--/ Intro Skew Star /-->
    @include('frontend.slider.slider')
  <!--/ Intro Skew End /-->

    

  <!--/ Section Services Star /-->
    @include('frontend.about.about')
    @include('frontend.services.services')
  <!--/ Section Services End /-->

  

  <!--/ Section Portfolio Star /-->
    @include('frontend.work.work')
  <!--/ Section Portfolio End /-->

  <!--/ Section Testimonials Star /-->
  

  <!--/ Section Blog Star /-->
  {{-- @include('frontend.blog.blog') --}}
  <!--/ Section Blog End /-->

  <!--/ Section Contact-Footer Star /-->
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{asset('frontend')}}/img/overlay-bg.jpg)">
    @include('frontend.contact.contact')
    
    @include('frontend.footer.footer')
  </section>
  <!--/ Section Contact-footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="{{asset('frontend')}}/lib/jquery/jquery.min.js"></script>
  <script src="{{asset('frontend')}}/lib/jquery/jquery-migrate.min.js"></script>
  <script src="{{asset('frontend')}}/lib/popper/popper.min.js"></script>
  <script src="{{asset('frontend')}}/lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="{{asset('frontend')}}/lib/easing/easing.min.js"></script>
  <script src="{{asset('frontend')}}/lib/counterup/jquery.waypoints.min.js"></script>
  <script src="{{asset('frontend')}}/lib/counterup/jquery.counterup.js"></script>
  <script src="{{asset('frontend')}}/lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="{{asset('frontend')}}/lib/lightbox/js/lightbox.min.js"></script>
  <script src="{{asset('frontend')}}/lib/typed/typed.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="{{asset('frontend')}}/contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="{{asset('frontend')}}/js/main.js"></script>

</body>
</html>
