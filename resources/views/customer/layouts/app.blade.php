<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 23:01:55 GMT -->
<head>
  <!-- Title -->
  <title>Primrosepathcapital | Customer</title>

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
  <link rel="stylesheet" href="assets/css/theme.minc619.css?v=1.0">

  <link href="asset/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="asset/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="asset/vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="asset/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
  <!-- Custom styling plus plugins -->
  <link href="asset/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="bg-white">
  <!-- ========== HEADER ========== -->
  <header id="header" class="header header-box-shadow-on-scroll header-abs-top header-bg-transparent header-show-hide">
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
                                 <li class="nav-item ">
                                    <a id="" class="nav-link" href="#" >
                                        {{ Auth::user()->email }}
                                    </a>

                                    <div class="dropdown-menu menu-right" >
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
<div class="mt-5 mb-5">@yield('content')</div>
  <!-- ========== END MAIN CONTENT ========== -->


</body>
<!-- JS Implementing Plugins -->
<script src="assets/js/vendor.min.js"></script>
<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 23:02:46 GMT -->
</html>

