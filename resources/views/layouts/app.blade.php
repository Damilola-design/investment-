<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 23:01:55 GMT -->
<head>
  <!-- Title -->
  <title>Primrose path capital </title>

  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&amp;display=swap" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/css/vendor.min.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">
</head>

<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide"
          data-hs-header-options='{
            "fixMoment": 1000,
            "fixEffect": "slide"
          }'>
    <!-- Search -->

    <!-- End Search -->

    <div class="header-section">
      <!-- Topbar -->
          <ul class="mb-0 ml-2 list-inline">
            <!-- Search -->


            <!-- Shopping Cart -->
            <!-- End Shopping Cart -->

            <!-- Account Login -->

            <!-- End Account Login -->
          </ul>
        </div>
      </div>
      <!-- End Topbar -->

      <div id="logoAndNav" class="container">
        <!-- Nav -->
        <nav class="js-mega-menu navbar navbar-expand-lg">
          <!-- Logo -->
          <a class="navbar-brand" href="index.html" aria-label="Front">
            <img src="assets/img/primose.jpg" alt="Logo">
          </a>
          <!-- End Logo -->

          <!-- Responsive Toggle Button -->
          <button type="button" class="navbar-toggler btn btn-icon btn-sm rounded-circle"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span class="navbar-toggler-default">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M17.4,6.2H0.6C0.3,6.2,0,5.9,0,5.5V4.1c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,5.9,17.7,6.2,17.4,6.2z M17.4,14.1H0.6c-0.3,0-0.6-0.3-0.6-0.7V12c0-0.4,0.3-0.7,0.6-0.7h16.9c0.3,0,0.6,0.3,0.6,0.7v1.4C18,13.7,17.7,14.1,17.4,14.1z"/>
              </svg>
            </span>
            <span class="navbar-toggler-toggled">
              <svg width="14" height="14" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
                <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
              </svg>
            </span>
          </button>
          <!-- End Responsive Toggle Button -->

          <!-- Navigation -->
        <div id="navBar" class="collapse navbar-collapse">
         <div class="navbar-body header-abs-top-inner">
                    <div class="top-right links">
                            <ul class="navbar-nav">
                                @guest
                                    <li class="hs-has-mega-menu navbar-nav-item">
                                        <a id="homeMegaMenu" class="hs-mega-menu-invoker nav-link active" href="{{ route('home') }}" aria-haspopup="true" aria-expanded="false">Home</a>
                                    </li>
                                    <li class="hs-has-sub-menu navbar-nav-item">
                                        <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link " href="{{ route('about') }}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">About</a>
                                    </li>
                                    <li class="hs-has-sub-menu navbar-nav-item">
                                        <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link " href="{{ route('faq') }}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">FAQs</a>
                                    </li>
                                    <li class="navbar-nav-last-item">
                                        <a class="btn btn-sm btn-primary transition-3d-hover" href="{{ route('login') }}" >Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="hs-has-sub-menu navbar-nav-item">
                                            <a id="pagesMegaMenu" class="hs-mega-menu-invoker nav-link " href="{{ route('register') }}" aria-haspopup="true" aria-expanded="false" aria-labelledby="pagesSubMenu">Register</a>
                                        </li>
                                    @endif
                                 @else
                                 <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>

                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                                @endguest
                            </ul>
                    </div>
                 </div>
            </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <!-- ========== MAIN CONTENT ========== -->
<div class="mt-5 mb-5">

    @yield('content')

</div>

  <!-- ========== END MAIN CONTENT ========== -->

  <!-- ========== FOOTER ========== -->
  <footer class="bg-dark">
    <div class="container">
      <div class="space-top-2 space-bottom-1 space-bottom-lg-2">
        <div class="row justify-content-lg-between">
          <div class="mb-5 col-lg-3 ml-lg-auto mb-lg-0">
            <!-- Logo -->
            <div class="mb-4">
              <a href="index.html" aria-label="Front">
                <img class="brand" src="assets/img/primose.jpg" alt="Logo">
            </a>
            </div>

            <!-- End Logo -->
          </div>
          <div class="mb-5 col-6 col-md-3 col-lg mb-lg-0">
            <h5 class="text-white">Learn More</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#">About Primrose path capital </a></li>
              <li class="nav-item"><a class="nav-link" href="#">Frequently Asked questions </a></li>
              <li class="nav-item"><a class="nav-link" href="#">Contact Us</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="mb-5 col-6 col-md-3 col-lg mb-lg-0">
            <h5 class="text-white">Primrose path capital  Terms & Policy</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#">Terms & Conditions</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Privacy Policy</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

          <div class="col-6 col-md-3 col-lg">
            <h5 class="text-white">Contact Us</h5>

            <!-- Nav Link -->
            <ul class="nav nav-sm nav-x-0 nav-white flex-column">
              <li class="nav-item"><a class="nav-link" href="#">+234 9063679635</a></li>
              <li class="nav-item"><a class="nav-link" href="#">KM 48 BRG Building, Lekki – Epe</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Expressway, Sangotedo, Lagos</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Primrosepathcapital@gmail.com</a></li>
            </ul>
            <!-- End Nav Link -->
          </div>

        </div>
        <div class="float-right">
            <a href="https://api.whatsapp.com/send?phone=2348066586882&text=" aria-label="Front">
              <img class="brand rounded-circle" src="assets/img/download.png"  alt="Logo" style="max-width: 70px;  php;
              position: fixed;
              bottom:0;
              right:0;">
          </a>
          </div>
      </div>

      <hr class="my-0 opacity-xs">
    </div>

  </footer>
  <!-- ========== END FOOTER ========== -->

  <!-- ========== SECONDARY CONTENTS ========== -->
  <!-- Sign Up Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <!-- Header -->
        <div class="modal-close">
          <button type="button" class="btn btn-icon btn-sm btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <svg width="10" height="10" viewBox="0 0 18 18" xmlns="http://www.w3.org/2000/svg">
              <path fill="currentColor" d="M11.5,9.5l5-5c0.2-0.2,0.2-0.6-0.1-0.9l-1-1c-0.3-0.3-0.7-0.3-0.9-0.1l-5,5l-5-5C4.3,2.3,3.9,2.4,3.6,2.6l-1,1 C2.4,3.9,2.3,4.3,2.5,4.5l5,5l-5,5c-0.2,0.2-0.2,0.6,0.1,0.9l1,1c0.3,0.3,0.7,0.3,0.9,0.1l5-5l5,5c0.2,0.2,0.6,0.2,0.9-0.1l1-1 c0.3-0.3,0.3-0.7,0.1-0.9L11.5,9.5z"/>
            </svg>
          </button>
        </div>
        <!-- End Header -->

        <!-- Footer -->
        <div class="text-center modal-footer d-block py-sm-5">
          <small class="mb-4 text-cap">Trusted by the world's best teams</small>

          <div class="mx-auto w-85">
            <div class="row justify-content-between">
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/gitlab-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/fitbit-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/flow-xo-gray.svg" alt="Image Description">
              </div>
              <div class="col">
                <img class="img-fluid" src="assets/svg/brands/layar-gray.svg" alt="Image Description">
              </div>
            </div>
          </div>
        </div>
        <!-- End Footer -->
      </div>
    </div>
  </div>
  <!-- End Sign Up Modal -->
  <!-- ========== END SECONDARY CONTENTS ========== -->

  <!-- Go to Top -->
  <a class="js-go-to go-to position-fixed" href="javascript:;" style="visibility: hidden;"
     data-hs-go-to-options='{
       "offsetTop": 700,
       "position": {
         "init": {
           "right": 15
         },
         "show": {
           "bottom": 15
         },
         "hide": {
           "bottom": -15
         }
       }
     }'>
    <i class="fas fa-angle-up"></i>
  </a>
  <!-- End Go to Top -->


  <!-- JS Implementing Plugins -->
  <script src="assets/js/vendor.min.js"></script>

  <!-- JS Front -->
  <script src="assets/js/theme.min.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(document).on('ready', function () {
      // INITIALIZATION OF HEADER
      // =======================================================
      var header = new HSHeader($('#header')).init();


      // INITIALIZATION OF MEGA MENU
      // =======================================================
      var megaMenu = new HSMegaMenu($('.js-mega-menu'), {
        desktop: {
          position: 'left'
        }
      }).init();


      // INITIALIZATION OF UNFOLD
      // =======================================================
      var unfold = new HSUnfold('.js-hs-unfold-invoker').init();


      // INITIALIZATION OF TEXT ANIMATION (TYPING)
      // =======================================================
      var typed = $.HSCore.components.HSTyped.init(".js-text-animation");


      // INITIALIZATION OF AOS
      // =======================================================
      AOS.init({
        duration: 650,
        once: true
      });


      // INITIALIZATION OF FORM VALIDATION
      // =======================================================
      $('.js-validate').each(function() {
        $.HSCore.components.HSValidation.init($(this), {
          rules: {
            confirmPassword: {
              equalTo: '#signupPassword'
            }
          }
        });
      });


      // INITIALIZATION OF SHOW ANIMATIONS
      // =======================================================
      $('.js-animation-link').each(function () {
        var showAnimation = new HSShowAnimation($(this)).init();
      });


      // INITIALIZATION OF COUNTER
      // =======================================================
      $('.js-counter').each(function() {
        var counter = new HSCounter($(this)).init();
      });


      // INITIALIZATION OF STICKY BLOCK
      // =======================================================
      var cbpStickyFilter = new HSStickyBlock($('#cbpStickyFilter'));


      // INITIALIZATION OF CUBEPORTFOLIO
      // =======================================================
      $('.cbp').each(function () {
        var cbp = $.HSCore.components.HSCubeportfolio.init($(this), {
          layoutMode: 'grid',
          filters: '#filterControls',
          displayTypeSpeed: 0
        });
      });

      $('.cbp').on('initComplete.cbp', function() {
        // update sticky block
        cbpStickyFilter.update();
      });

      $('.cbp').on('filterComplete.cbp', function() {
        // update sticky block
        cbpStickyFilter.update();
      });

      $('.cbp').on('pluginResize.cbp', function() {
        // update sticky block
        cbpStickyFilter.update();
      });

      // animated scroll to cbp container
      $('#cbpStickyFilter').on('click', '.cbp-filter-item', function (e) {
        $('html, body').stop().animate({
          scrollTop: $('#demoExamplesSection').offset().top
        }, 200);
      });


      // INITIALIZATION OF GO TO
      // =======================================================
      $('.js-go-to').each(function () {
        var goTo = new HSGoTo($(this)).init();
      });
    });
  </script>

  <!-- IE Support -->
  <script>
    if (/MSIE \d|Trident.*rv:/.test(navigator.userAgent)) document.write('<script src="assets/vendor/babel-polyfill/dist/polyfill.js"><\/script>');
  </script>
</body>

<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 23:02:46 GMT -->
</html>
