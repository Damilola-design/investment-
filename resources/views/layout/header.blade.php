<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from uxtheme.net/demos/omega/landing-7.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 14 Dec 2020 21:26:45 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Omega - Landing Page Template</title>
  <link rel="shortcut icon" href="asset/image/png/favicon.html" type="image/x-icon">
  <!-- Bootstrap , fonts & icons  -->
  <link rel="stylesheet" href="asset/plugins/bootstrap-4/css/bootstrap.min.css">
  <link rel="stylesheet" href="asset/fonts/icon-font/css/style.css">
  <link rel="stylesheet" href="asset/fonts/typography-font/typo.css">
  <link rel="stylesheet" href="asset/fonts/fontawesome-5/css/all.css">
  <!-- Plugin'stylesheets  -->
  <link rel="stylesheet" href="asset/plugins/aos/aos.min.css">
  <link rel="stylesheet" href="asset/plugins/fancybox/jquery.fancybox.min.css">
  <link rel="stylesheet" href="asset/plugins/nice-select/nice-select.css">
  <link rel="stylesheet" href="asset/plugins/slick/slick.css">
  <!-- Vendor stylesheets  -->
  <link rel="stylesheet" href="asset/css/settings.css">
  <link rel="stylesheet" href="asset/css/main.css">
  <!-- Custom stylesheet -->
  <link rel="stylesheet" href="asset/css/custom.css">
</head>
<div id="loading">
    <div class="load-circle"><span class="one"></span></div>
  </div>
  <div class="overflow-hidden site-wrapper">
    <div class="landing-7 position-relative">
      <!-- Header Area -->
      <header class="site-header bg--conflower-blue sticky-header">
        <div class="container-fluid pr-lg--30 pl-lg--30">
          <nav class="navbar site-navbar offcanvas-active navbar-expand-lg navbar-light">
            <!-- Brand Logo-->
            <div class="brand-logo"><a href="javascript:"><img src="asset/image/png/l1-logo.png" alt=""></a></div>
            <div class="collapse navbar-collapse" id="mobile-menu">
              <div class="navbar-nav ml-lg-auto mr--10">
                <ul class="navbar-nav main-menu">
                  <li class="nav-item dropdown">
                    <a class="nav-link" href="/" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Home</a>
                  </li>
                  <li class="nav-item dropdown">
                      <a class="nav-link" href="{{ route('about') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About</a>
                    </li>
                    <li class="nav-item dropdown">
                      <a class="nav-link" href="{{ route('faq') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">FAQs</a>
                    </li>
                    <div class="navbar-nav ml-lg-auto mr--10 flex-center position-ref full-height">
                      @if (Route::has('login'))
                          <div class="top-right links">
                              @auth
                                  <a href="{{ url('/home') }}">Home</a>
                              @else

                              @if (Route::has('register'))
                              <a class="mt-3 mr-5" href="{{ route('register') }}">Register</a>
                            @endif
                                  <a class="nav-link btn btn--primary btn-header hvr-bounce-to-left goto" href="{{ route('login') }}">Login</a>
                              @endauth
                          </div>
                      @endif
            <button class="navbar-toggler btn-close-off-canvas" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
              <i class="icon icon-simple-remove icon-close"></i>
              <i class="icon icon-menu-34 icon-burger"></i>
            </button>
          </nav>
        </div>
      </header>
