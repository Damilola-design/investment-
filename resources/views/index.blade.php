@extends('layouts.app')

@section('content')

<main id="content" role="main">
    <!-- Hero Section -->
    <div class="d-lg-flex position-relative">
      <div class="container d-lg-flex align-items-lg-center space-top-2 space-lg-0 min-vh-lg-100">
        <!-- Content -->
        <div class="w-md-100">
          <div class="row">
            <div class="col-lg-5">
              <div class="mb-5 mt-11">
                <h1 class="mb-3">
                    Primrose path capital | Earn Up To 72%
                </h1>
                <p class="lead">Primrose path capital  creates the opportunity for everyone to earn 10%, 20% and 30% return on investment over a period of 20 working days with as low as #50,000.</p>
              </div>
              <a class="btn btn-primary btn-wide transition-3d-hover" href="{{ route('dashboard') }}">Get Started</a>
            </div>
          </div>
        </div>
        <!-- End Content -->

        <!-- SVG Shape -->
        <figure class="top-0 right-0 pr-0 col-lg-7 col-xl-6 d-none d-lg-block position-absolute ie-main-hero" style="margin-top: 6.75rem;">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1137.5 979.2">
            <path fill="#F9FBFF" d="M565.5,957.4c81.1-7.4,155.5-49.3,202.4-115.7C840,739.8,857,570,510.7,348.3C-35.5-1.5-4.2,340.3,2.7,389
              c0.7,4.7,1.2,9.5,1.7,14.2l29.3,321c14,154.2,150.6,267.8,304.9,253.8L565.5,957.4z"/>
            <defs>
              <path id="mainHeroSVG1" d="M1137.5,0H450.4l-278,279.7C22.4,430.6,24.3,675,176.8,823.5l0,0C316.9,960,537.7,968.7,688.2,843.6l449.3-373.4V0z"/>
            </defs>
            <clipPath id="mainHeroSVG2">
              <use xlink:href="#mainHeroSVG1"/>
            </clipPath>
            <g transform="matrix(1 0 0 1 0 0)" clip-path="url(#mainHeroSVG2)">
              <image width="750" height="750" href="assets/img/cryptoinvest.jpg" transform="matrix(1.4462 0 0 1.4448 52.8755 0)"></image>
            </g>
          </svg>
        </figure>
        <!-- End SVG Shape -->
      </div>
    </div>
    <!-- End Hero Section -->

    <!-- Articles Section -->
    <div class="container space-2 space-top-xl-3 space-bottom-lg-3">
      <!-- Title -->
      <div class="mb-5 text-center w-md-80 w-lg-50 mx-md-auto mb-md-9">
        <h2>Primrose path capital  Options
        </h2>
      </div>
      <div class="overflow-hidden">
        <div class="container pb-4">


          <div class="row mx-lg-5">
            <div class="mb-5 col-sm-6 col-lg-4 px-lg-5">
              <!-- Pricing -->
              <div class="shadow-none card h-100">
                <!-- Header -->
                <div class="text-center border-0 card-header">
                  <span class="mb-0 d-block h3">Regular plan</span>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <div class="mb-3 media font-size-1 text-body">
                    <i class="mt-1 mr-2 fas fa-check-circle text-success"></i>
                    <div class="media-body">
                      <p>For 3 month plan ( 10% ROI in 20 working days)</p>
                    </div>
                  </div>
                </div>
                <!-- End Body -->

                <div class="border-0 card-footer">
                  <a href="{{ route('investments') }}"><button type="button" class="btn btn-soft-primary btn-block transition-3d-hover">Get Started</button></a>
                </div>
              </div>
              <!-- End Pricing -->
            </div>

            <div class="mb-5 col-sm-6 col-lg-4 px-lg-5">
              <!-- Pricing -->
              <div class="position-relative">
                <div class="shadow-lg card h-100">
                  <!-- Header -->
                  <div class="text-center border-0 card-header">
                    <span class="mb-0 d-block h3">Golden plan</span>
                  </div>
                  <!-- End Header -->

                  <!-- Body -->
                  <div class="card-body">
                    <div class="mb-3 media font-size-1">
                      <i class="mt-1 mr-2 fas fa-check-circle text-success"></i>
                      <div class="media-body">
                        <p>for 6 month plan (20% ROI in 20 working days)</p>
                      </div>
                    </div>
                  </div>
                  <!-- End Body -->

                  <div class="border-0 card-footer">
                    <a href="{{ route('premium') }}"><button type="button" class="btn btn-soft-primary btn-block transition-3d-hover">Get Started</button></a>
                  </div>
                </div>

                <!-- SVG Elements -->
                <figure class="bottom-0 left-0 max-w-19rem w-100 position-absolute z-index-n1">
                  <div class="mb-n7 ml-n7">
                    <img class="img-fluid" src="assets/svg/components/dots-2.svg" alt="Image Description">
                  </div>
                </figure>
                <figure class="top-0 right-0 max-w-15rem w-100 position-absolute z-index-n1">
                  <div class="mt-n7 mr-n7">
                    <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 260 260" xml:space="preserve">
                      <circle fill="#ffc107" cx="130" cy="130" r="130"/>
                    </svg>
                  </div>
                </figure>
                <!-- End SVG Elements -->
              </div>
              <!-- End Pricing -->
            </div>

            <div class="mb-5 col-sm-6 col-lg-4 px-lg-5">
              <!-- Pricing -->
              <div class="shadow-none card h-100">
                <!-- Header -->
                <div class="text-center border-0 card-header">
                  <span class="mb-0 d-block h3">Premium plan</span>
                </div>
                <!-- End Header -->

                <!-- Body -->
                <div class="card-body">
                  <div class="mb-3 media font-size-1 text-body">
                    <i class="mt-1 mr-2 fas fa-check-circle text-success"></i>
                    <div class="media-body">
                      <p>1 year plan (30% ROI in 20 working days)</p>
                    </div>
                  </div>
                </div>
                <!-- End Body -->

                <div class="border-0 card-footer">
                  <a href="{{ route('investments') }}"><button type="button" class="btn btn-soft-primary btn-block transition-3d-hover">Get Started</button></a>
                </div>
              </div>
              <!-- End Pricing -->
            </div>
          </div>
        </div>
      </div>
      <!-- End Title -->
    </div>
    <!-- End Articles Section -->
    <div class="container space-2 space-top-xl-3 space-bottom-lg-3">

      <div class="container space-2 space-lg-3">
        <!-- Title -->
        <div class="mb-5 text-center w-md-80 w-lg-60 mx-md-auto mb-md-9">
            <h2>WHY CHOOSE US</h2>
            <p>With interest return as high as 30% in 20 working days, Primrose path capital  is where you should invest.</p>
        </div>
        <!-- End Title -->

        <div class="mb-5 row mx-n2">
          <div class="px-2 mb-3 col-sm-6 col-lg-3">
            <!-- Team -->
            <div class="card h-100 transition-3d-hover">
              <div class="card-body">
                <h4 class="text-lh-sm">Reliability</h4>
                <p class="font-size-1 justify-content">With over 20,000 consultants subscribed to our platform and over 4 years of successful real estate dealings, We can confidently say your investment is safe with us and can count on us</p>
              </div>
            </div>
            <!-- End Team -->
          </div>

          <div class="px-2 mb-3 col-sm-6 col-lg-3">
            <!-- Team -->
            <div class="card h-100 transition-3d-hover">
              <div class="card-body">
                <h4 class="text-lh-sm">Transparency</h4>
                <p class="font-size-1">We will be providing you with steady weekly details on your investment. Also through your account created on our website, you can easily access your information as well as monitor the growth of your investment.</p>
              </div>
            </div>
            <!-- End Team -->
          </div>

          <div class="px-2 mb-3 col-sm-6 col-lg-3">
            <!-- Team -->
            <div class="card h-100 transition-3d-hover">
              <div class="card-body">
                <h4 class="text-lh-sm">Timely Delivery</h4>
                <p class="font-size-1">Based on your preferred  investment duration, your capital and accrued investment will be readily available for collection once your investment is mature.</p>
              </div>
            </div>
            <!-- End Team -->
          </div>

          <div class="px-2 mb-3 col-sm-6 col-lg-3">
            <!-- Team -->
            <div class="card h-100 transition-3d-hover">
              <div class="card-body">
                <h4 class="text-lh-sm">High Returns</h4>
                <p class="font-size-1">With interest returns as high as 72%, Landvest is where you should be investing.</p>
              </div>
            </div>
            <!-- End Team -->
          </div>
        </div>

        <!-- Info -->
        <!-- End Info -->
      </div>
      <div class="row mx-n2">
        <div class="mb-5 mb-md-7">
            <h2 class="mb-3">Real Estate Investment Is An Excellent Hedge Against Inflation</h2>
            <p>inflation affects the prices of properties positively, causing the investment value to increase. Hence, real estate investors in Nigeria are protected from both short-term and long-term negative effects of inflation. With real estate investments, one can generate as much passive income as possible. Regardless of the employment status of the investor, profit will always roll in</p>
          </div>
        <div class="px-2 mb-3 col-6 col-md">
          <div class="h-250rem bg-img-hero" style="background-image: url(assets/img/480x320/img17.jpg);"></div>
        </div>
        <div class="px-2 mb-3 col-md-3 d-none d-md-block">
          <div class="h-250rem bg-img-hero" style="background-image: url(assets/img/480x320/img6.jpg);"></div>
        </div>
        <div class="px-2 mb-3 col-6 col-md">
          <div class="h-250rem bg-img-hero" style="background-image: url(assets/img/480x320/img14.jpg);"></div>
        </div>

        <div class="w-100"></div>

        <div class="px-2 mb-3 col-6 col-md mb-md-0">
          <div class="h-250rem bg-img-hero" style="background-image: url(assets/img/480x320/img25.jpg);"></div>
        </div>
        <div class="px-2 mb-3 col-md-4 d-none d-md-block mb-md-0">
          <div class="h-250rem bg-img-hero" style="background-image: url(assets/img/480x320/img16.jpg);"></div>
        </div>
        <div class="px-2 col-6 col-md">
          <div class="h-250rem bg-img-hero" style="background-image: url(assets/img/480x320/img12.jpg);"></div>
        </div>
      </div>

    <!-- Tools Section -->
    <div class="position-relative gradient-y-gray">
      <div class="container space-2 space-top-lg-3 space-bottom-sm-3 space-bottom-lg-4">
        <!-- Title -->
        <div class="mb-5 text-center w-md-80 w-lg-50 mx-md-auto mb-md-9">
          <h2>Proudly supported by</h2>
          </div>
        <!-- End Title -->

        <div class="mb-5 w-md-80 w-lg-50 mx-md-auto mb-md-9">
          <!-- Code Sample -->

          <!-- End Code Sample -->

          <!-- Info -->

          <!-- End Info -->

          <!-- Clients -->
          <div class="row justify-content-center">
            <div class="my-2 col-4 col-sm-3">
              <!-- Logo -->
              <figure>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 226.3 88">
                  <path fill="#bdc5d1" d="M70.1,76.7c0,6.3,5.1,11.4,11.4,11.4H147c6.3,0,11.4-5.1,11.4-11.4V11.2c0-6.3-5.1-11.4-11.4-11.4H81.4
                    c-6.3,0-11.4,5.1-11.4,11.4V76.7L70.1,76.7z"/>
                  <path fill="#fff" d="M106.7,38.9V26.4h11c1,0,2.1,0.1,3,0.3c1,0.2,1.8,0.5,2.6,0.9c0.7,0.4,1.3,1.1,1.8,1.9c0.4,0.8,0.7,1.8,0.7,3.1
                    c0,2.2-0.7,3.9-2,4.9c-1.3,1-3.1,1.5-5.2,1.5L106.7,38.9L106.7,38.9z M94.9,17.2v53.4h25.9c2.4,0,4.7-0.3,7-0.9s4.3-1.5,6.1-2.8
                    c1.8-1.2,3.2-2.9,4.2-4.8c1-2,1.6-4.3,1.6-7c0-3.3-0.8-6.2-2.4-8.6c-1.6-2.4-4.1-4-7.4-5c2.4-1.1,4.2-2.6,5.4-4.4
                    c1.2-1.8,1.8-4,1.8-6.7c0-2.5-0.4-4.6-1.2-6.3c-0.8-1.7-2-3.1-3.5-4.1c-1.5-1-3.3-1.8-5.4-2.2c-2.1-0.4-4.4-0.7-7-0.7H94.9
                    L94.9,17.2z M106.7,61.5V46.9h12.8c2.5,0,4.6,0.6,6.1,1.8c1.5,1.2,2.3,3.1,2.3,5.9c0,1.4-0.2,2.5-0.7,3.4s-1.1,1.6-1.9,2.1
                    c-0.8,0.5-1.7,0.9-2.8,1.1c-1,0.2-2.1,0.3-3.3,0.3H106.7L106.7,61.5z"/>
                </svg>
              </figure>
              <!-- End Logo -->
            </div>

            <div class="my-2 col-4 col-sm-3">
              <!-- Logo -->
              <figure>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 226.3 88">
                  <path fill="#bdc5d1" d="M155.1,50.7c-4.1,0-7.6,1-10.6,2.4c-1.1-2.2-2.2-4.1-2.4-5.5C142,46,141.7,45,142,43c0.3-2,1.4-4.7,1.4-5
                    c0-0.2-0.3-1.2-2.6-1.2c-2.3,0-4.4,0.4-4.6,1.1c-0.2,0.6-0.7,2-1,3.5c-0.4,2.1-4.7,9.7-7.1,13.7c-0.8-1.6-1.5-2.9-1.6-4
                    c-0.2-1.6-0.5-2.6-0.2-4.6c0.3-2,1.4-4.7,1.4-5c0-0.2-0.3-1.2-2.6-1.2c-2.3,0-4.4,0.4-4.6,1.1c-0.2,0.6-0.5,2.1-1,3.5
                    c-0.5,1.4-6.2,14.1-7.7,17.4c-0.8,1.7-1.4,3-1.9,3.9c0,0,0,0.1-0.1,0.2c-0.4,0.8-0.6,1.2-0.6,1.2s0,0,0,0c-0.3,0.6-0.7,1.1-0.8,1.1
                    c-0.1,0-0.4-1.5,0-3.6c0.9-4.4,2.9-11.3,2.9-11.5c0-0.1,0.4-1.3-1.3-1.9c-1.7-0.6-2.3,0.4-2.4,0.4c-0.1,0-0.3,0.4-0.3,0.4
                    s1.9-7.7-3.5-7.7c-3.4,0-8,3.7-10.3,7c-1.4,0.8-4.5,2.5-7.8,4.3c-1.3,0.7-2.6,1.4-3.8,2.1c-0.1-0.1-0.2-0.2-0.3-0.3
                    C75,50.8,63,45.8,63.5,36.5c0.2-3.4,1.4-12.3,23.1-23.2c17.9-8.8,32.2-6.4,34.7-1c3.5,7.8-7.6,22.1-26.2,24.2
                    c-7.1,0.8-10.8-1.9-11.7-3c-1-1.1-1.1-1.1-1.5-0.9c-0.6,0.3-0.2,1.3,0,1.8c0.6,1.4,2.8,4,6.7,5.3c3.4,1.1,11.7,1.7,21.7-2.2
                    c11.2-4.3,20-16.4,17.4-26.5C125.2,0.8,108.1-2.5,92,3.2C82.4,6.6,72,12,64.6,18.9c-8.9,8.3-10.3,15.5-9.7,18.5
                    c2.1,10.7,16.9,17.7,22.8,22.9c-0.3,0.2-0.6,0.3-0.8,0.4c-3,1.5-14.2,7.4-17.1,13.6c-3.2,7.1,0.5,12.1,3,12.8
                    c7.6,2.1,15.4-1.7,19.6-7.9c4.2-6.3,3.7-14.4,1.7-18.1c0,0,0-0.1-0.1-0.1c0.8-0.4,1.6-0.9,2.3-1.4c1.5-0.9,3-1.7,4.3-2.4
                    c-0.7,2-1.3,4.3-1.5,7.8c-0.3,4,1.3,9.2,3.5,11.2c1,0.9,2.1,0.9,2.8,0.9c2.5,0,3.6-2.1,4.9-4.6c1.5-3,2.9-6.5,2.9-6.5
                    s-1.7,9.5,3,9.5c1.7,0,3.4-2.2,4.2-3.3c0,0,0,0,0,0s0-0.1,0.1-0.2c0.2-0.3,0.3-0.4,0.3-0.4s0,0,0,0c0.7-1.2,2.2-3.9,4.5-8.4
                    c2.9-5.8,5.8-13,5.8-13s0.3,1.8,1.1,4.7c0.5,1.7,1.6,3.6,2.4,5.5c-0.7,1-1.1,1.5-1.1,1.5s0,0,0,0c-0.6,0.7-1.1,1.5-1.8,2.3
                    c-2.3,2.8-5.1,5.9-5.5,6.9c-0.4,1.1-0.3,1.9,0.5,2.5c0.6,0.5,1.7,0.5,2.9,0.5c2.1-0.1,3.6-0.7,4.3-1c1.1-0.4,2.4-1,3.7-1.9
                    c2.3-1.7,3.7-4.1,3.5-7.3c-0.1-1.7-0.6-3.5-1.3-5.1c0.2-0.3,0.4-0.6,0.6-0.9c3.6-5.3,6.4-11,6.4-11s0.3,1.8,1.1,4.7
                    c0.4,1.5,1.3,3.1,2.1,4.7c-3.4,2.7-5.5,5.9-6.2,8c-1.3,3.9-0.3,5.6,1.7,6c0.9,0.2,2.2-0.2,3.1-0.6c1.2-0.4,2.6-1,3.9-2
                    c2.3-1.7,4.5-4,4.3-7.2c-0.1-1.4-0.4-2.9-1-4.3c2.9-1.2,6.6-1.9,11.3-1.3c10.1,1.2,12.1,7.5,11.8,10.2c-0.4,2.7-2.5,4.1-3.2,4.6
                    c-0.7,0.4-0.9,0.6-0.9,0.9c0.1,0.5,0.4,0.4,1,0.4c0.8-0.1,5.3-2.2,5.5-7C171.6,57.4,165.7,50.6,155.1,50.7z M76.9,77
                    c-3.4,3.7-8,5-10.1,3.9c-2.2-1.3-1.3-6.7,2.8-10.5c2.5-2.4,5.7-4.6,7.9-5.9c0.5-0.3,1.2-0.7,2.1-1.3c0.1-0.1,0.2-0.1,0.2-0.1
                    c0.2-0.1,0.3-0.2,0.5-0.3C81.9,68.3,80.5,73.2,76.9,77z M101.4,60.4c-1.2,2.9-3.6,10.2-5.1,9.8c-1.3-0.3-2.1-5.9-0.3-11.3
                    c0.9-2.7,2.9-6,4-7.3c1.8-2,3.9-2.7,4.3-1.9C105,50.7,102.1,58.6,101.4,60.4z M121.6,70c-0.5,0.3-1,0.4-1.2,0.3
                    c-0.1-0.1,0.2-0.4,0.2-0.4s2.5-2.7,3.5-4c0.6-0.7,1.3-1.6,2-2.5c0,0.1,0,0.2,0,0.3C126.2,66.9,123,69.1,121.6,70z M137.2,66.5
                    c-0.4-0.3-0.3-1.1,0.9-3.8c0.5-1,1.6-2.8,3.5-4.5c0.2,0.7,0.4,1.3,0.3,2C141.9,64.3,139,65.8,137.2,66.5z"/>
                </svg>
              </figure>
              <!-- End Logo -->
            </div>

            <div class="my-2 col-4 col-sm-3">
              <!-- Logo -->
              <figure>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 226.3 88">
                  <path fill="#bdc5d1" d="M78.6,45.8c-0.1,0.2-0.3,0.6-0.6,1.4c-0.3,0.8-0.6,1.8-1,3c-0.4,1.2-0.8,2.5-1.2,4c-0.4,1.5-0.9,3-1.4,4.5
                    c-0.5,1.5-0.9,3.1-1.3,4.5c-0.4,1.5-0.8,2.8-1.2,4c-0.3,1.2-0.6,2.2-0.9,3c-0.2,0.8-0.4,1.3-0.4,1.4c-0.1,0.5-0.3,1-0.6,1.6
                    c-0.3,0.6-0.6,1.1-1,1.7c-0.4,0.5-0.8,1-1.3,1.3s-0.9,0.5-1.4,0.5c-0.8,0-1.4-0.3-1.8-0.8c-0.4-0.5-0.6-1.5-0.6-3v-0.6
                    c0-0.2,0-0.4,0-0.7c0-0.5,0.2-1.4,0.6-2.7c0.4-1.3,0.8-2.8,1.3-4.5c0.5-1.7,1-3.4,1.6-5.2c0.6-1.8,1.1-3.4,1.5-4.8
                    c-1.3,1.5-2.8,3-4.4,4.5c-1.6,1.5-3.2,2.8-4.8,4c-1.6,1.2-3.3,2.2-5,2.9c-1.7,0.7-3.3,1.1-4.8,1.1c-1.8,0-3.3-0.4-4.6-1.2
                    c-1.3-0.8-2.3-1.8-3.2-3.1s-1.5-2.7-1.9-4.3C40.2,57,40,55.4,40,53.8v-0.6c0-0.2,0-0.4,0-0.5c0.2-2.9,0.6-5.8,1.2-8.9
                    c0.7-3,1.5-6,2.6-9c1.1-3,2.3-5.9,3.8-8.8c1.4-2.9,3-5.6,4.7-8.1c1.7-2.5,3.5-4.9,5.4-7c1.9-2.1,3.8-4,5.8-5.5c2-1.5,4-2.7,6-3.6
                    c2-0.9,4.1-1.3,6-1.3c2.3,0,4.5,0.6,6.7,1.9c2.1,1.3,4.2,3.3,6,6.1c0.4,0.6,0.7,1.3,0.8,1.9s0.2,1.3,0.2,1.8c0,1.3-0.3,2.4-1,3.2
                    c-0.6,0.8-1.4,1.2-2.3,1.2c-0.8,0-1.6-0.4-2.3-1.3c-0.7-0.9-1.5-2.1-2.3-3.7c-0.8-1.4-1.7-2.5-2.7-3.1c-1-0.6-2-1-3.2-1
                    c-1.8,0-3.7,0.7-5.7,2.2s-4,3.4-6,5.8c-2,2.4-3.9,5.2-5.7,8.3c-1.8,3.1-3.4,6.3-4.8,9.5c-1.4,3.2-2.5,6.5-3.3,9.6
                    c-0.8,3.2-1.2,6-1.2,8.5c0,0.8,0.1,1.7,0.2,2.6s0.3,1.7,0.6,2.4c0.3,0.7,0.7,1.3,1.3,1.8c0.5,0.5,1.2,0.7,2.1,0.7
                    c0.9,0,2-0.3,3.2-0.9c1.2-0.6,2.4-1.5,3.7-2.5c1.3-1,2.6-2.2,3.9-3.5c1.3-1.3,2.5-2.6,3.6-3.9c1.1-1.3,2.1-2.6,3-3.8
                    c0.9-1.2,1.5-2.3,1.9-3.2l3.5-10.6c0.4-1.1,1-1.9,1.7-2.4c0.7-0.5,1.4-0.7,2.1-0.7c0.4,0,0.7,0.1,1.1,0.2c0.4,0.1,0.7,0.3,0.9,0.6
                    c0.3,0.3,0.5,0.6,0.7,1s0.2,0.9,0.2,1.4c0,1.4-0.1,2.8-0.4,4c-0.3,1.3-0.6,2.5-1,3.7c-0.4,1.2-0.8,2.4-1.3,3.6
                    C79.5,43.2,79.1,44.4,78.6,45.8L78.6,45.8z M126.5,54.6c-1.1,1.5-2.4,3-3.9,4.4c-1.5,1.4-3,2.7-4.6,3.8s-3.1,2-4.6,2.7
                    c-1.5,0.7-2.9,1-4.1,1s-2.2-0.4-3-1.2c-0.8-0.8-1.1-2.2-1.1-4.1c0-1.4,0.2-3,0.6-4.8c-0.7,1.2-1.5,2.4-2.5,3.5
                    c-1,1.2-2.1,2.3-3.4,3.3c-1.3,1-2.7,1.8-4.2,2.4c-1.6,0.6-3.3,0.9-5.1,0.9c-0.8,0-1.6-0.1-2.4-0.3c-0.8-0.2-1.4-0.6-2-1.1
                    s-1-1.2-1.4-2c-0.4-0.9-0.5-1.9-0.5-3.2c0,0,0.1-0.5,0.2-1.4c0.1-0.9,0.4-2.3,1-4.2c0.5-1.9,1.4-4.4,2.5-7.4c1.1-3,2.7-6.7,4.8-11
                    c0.5-1.1,1.1-2,1.8-2.4c0.7-0.5,1.4-0.7,2.3-0.7c0.4,0,0.7,0.1,1.1,0.2c0.4,0.1,0.7,0.3,1.1,0.5c0.3,0.2,0.6,0.5,0.8,0.9
                    c0.2,0.3,0.3,0.7,0.3,1.2c0,0.3,0,0.6-0.1,0.9c-0.1,0.5-0.4,1.2-0.8,2C98.7,39,98.2,40,97.6,41c-0.6,1.1-1.1,2.2-1.8,3.4
                    c-0.6,1.2-1.2,2.5-1.7,3.8c-0.5,1.3-1,2.7-1.4,4c-0.4,1.4-0.6,2.7-0.6,4c0,0.5,0.1,1,0.4,1.5c0.3,0.4,0.7,0.7,1.3,0.7
                    c1.6,0,3.2-0.5,4.7-1.6c1.5-1.1,2.9-2.4,4.1-4c1.3-1.6,2.4-3.3,3.4-5.2c1-1.8,1.9-3.5,2.6-5.1c0.5-1,0.9-2.1,1.3-3.3
                    s0.8-2.2,1.2-3.2c0.4-1,0.9-1.8,1.5-2.5c0.6-0.7,1.3-1,2.1-1c0.9,0,1.6,0.3,2.2,1s0.8,1.5,0.8,2.5c0,0.5-0.2,1.3-0.5,2.2
                    s-0.8,2-1.3,3.2c-0.5,1.2-1.1,2.5-1.7,3.9c-0.6,1.4-1.2,2.8-1.7,4.2c-0.5,1.4-0.9,2.8-1.3,4.2c-0.3,1.4-0.5,2.6-0.5,3.8
                    c0,1.1,0.6,1.6,1.7,1.6c0.8,0,1.8-0.3,2.9-0.8c1.2-0.5,2.4-1.3,3.7-2.3c1.3-1,2.6-2.1,3.8-3.4c1.3-1.3,2.4-2.7,3.4-4.3L126.5,54.6
                    L126.5,54.6z"/>
                  <path fill="#bdc5d1" d="M127.6,52.3c-0.3,0.7-0.6,1.5-0.8,2.4c-0.3,0.9-0.4,1.7-0.4,2.4c0,0.4,0.1,0.8,0.2,1.1s0.4,0.4,0.9,0.4
                    c0.5,0,1.2-0.2,2-0.6c0.8-0.4,1.7-0.9,2.6-1.5c0.9-0.6,1.9-1.3,2.9-2.1c1-0.8,2-1.6,3-2.5c1-0.9,1.9-1.7,2.8-2.6
                    c0.9-0.9,1.7-1.6,2.4-2.4c0.2-0.2,0.4-0.4,0.7-0.4c0.3-0.1,0.5-0.1,0.7-0.1c0.5,0,0.9,0.2,1.3,0.6c0.3,0.4,0.5,1,0.5,1.7
                    c0,0.6-0.2,1.3-0.5,2.1c-0.4,0.8-1,1.5-1.9,2.3c-1.6,1.8-3.2,3.4-4.9,5c-1.6,1.6-3.3,3-4.9,4.2c-1.6,1.2-3.2,2.2-4.9,2.9
                    c-1.6,0.7-3.2,1.1-4.7,1.1c-1,0-1.9-0.2-2.6-0.5c-0.7-0.3-1.3-0.8-1.7-1.3c-0.4-0.6-0.7-1.2-0.9-2c-0.2-0.8-0.3-1.6-0.3-2.5
                    c0-1.5,0.2-3,0.6-4.5c0.4-1.5,0.8-3,1.3-4.2c0.9-2.3,1.8-4.7,2.7-7c0.9-2.3,1.7-4.4,2.5-6.3l11.5-29c0.5-1.2,1.1-2,1.8-2.5
                    c0.8-0.5,1.5-0.7,2.3-0.7s1.5,0.3,2.1,0.8c0.6,0.5,1,1.3,1,2.5c0,0.5-0.1,1.1-0.3,1.7c-0.2,0.6-0.5,1.2-0.8,1.9
                    c-0.6,1.4-1.4,3.1-2.3,5.2c-0.9,2-1.8,4.3-2.8,6.6s-2,4.9-3.1,7.5c-1,2.6-2.1,5.1-3.1,7.6c-1,2.5-1.9,4.8-2.8,7
                    C129,48.8,128.3,50.7,127.6,52.3L127.6,52.3z"/>
                  <path fill="#bdc5d1" d="M181.4,44.2c0.4-0.2,0.7-0.4,1-0.6c0.3-0.2,0.6-0.2,0.9-0.2c0.6,0,1,0.2,1.3,0.7c0.3,0.5,0.4,1.1,0.4,1.8
                    c0,0.8-0.2,1.6-0.5,2.4c-0.3,0.8-0.9,1.5-1.5,2c-2.7,2.4-5.1,4.6-7.2,6.6c-2.1,2-4.1,3.7-6,5.1c-1.9,1.4-3.7,2.5-5.5,3.3
                    c-1.8,0.8-3.7,1.2-5.8,1.2c-1.9,0-3.4-0.4-4.5-1.3c-1-0.8-1.6-2-1.6-3.5v-0.3c0-0.1,0-0.2,0-0.4c0.1-0.9,0.5-1.9,1.2-3.1
                    c0.7-1.2,1.5-2.4,2.5-3.6s2-2.5,3.1-3.8c1.1-1.3,2.1-2.5,3-3.7c0.9-1.2,1.7-2.2,2.3-3.2c0.6-1,0.9-1.7,0.9-2.3
                    c0-0.4-0.1-0.6-0.4-0.9c-0.3-0.2-0.7-0.3-1.3-0.3c-1,0-2.1,0.3-3.1,0.8s-2.1,1.2-3.2,2.1c-1,0.9-2.1,1.9-3.1,3s-1.9,2.3-2.8,3.5
                    c-0.9,1.2-1.7,2.5-2.4,3.7c-0.7,1.2-1.3,2.4-1.8,3.4c-0.2,0.3-0.4,0.8-0.6,1.4c-0.3,0.6-0.6,1.3-0.9,2c-0.3,0.7-0.7,1.5-1,2.3
                    c-0.4,0.8-0.7,1.5-1,2.2c-0.3,0.7-0.6,1.3-0.8,1.9c-0.2,0.6-0.4,0.9-0.5,1.1c-0.1,0.3-0.3,0.8-0.6,1.5s-0.6,1.6-1,2.6
                    c-0.4,1-0.8,2.1-1.2,3.2c-0.4,1.1-0.8,2.2-1.2,3.1c-0.4,1-0.7,1.9-1,2.6c-0.3,0.7-0.5,1.3-0.5,1.5c-0.3,0.8-0.6,1.5-0.9,2.2
                    c-0.3,0.7-0.7,1.3-1.2,1.8c-0.4,0.5-0.9,0.9-1.5,1.3c-0.6,0.3-1.2,0.5-1.9,0.5c-0.9,0-1.7-0.2-2.3-0.6c-0.6-0.4-0.9-1.3-0.9-2.5
                    c0-0.6,0.1-1.2,0.2-1.8c0.2-0.6,0.3-1.3,0.6-1.9c0.2-0.6,0.5-1.2,0.7-1.8c0.2-0.6,0.5-1.1,0.7-1.7c1.4-3,2.8-6,4.2-9
                    c1.4-3,2.8-6,4.1-8.9c1.3-2.9,2.5-5.8,3.6-8.7c1.1-2.8,2-5.6,2.8-8.2c0.2-0.5,0.5-1.3,0.8-2.3c0.4-1,0.8-2,1.2-2.9
                    c0.5-1,1-1.8,1.5-2.5c0.6-0.7,1.2-1.1,1.8-1.1c1,0,1.7,0.2,2.2,0.7c0.5,0.5,0.7,1.1,0.7,2c0,0.2,0,0.5-0.1,0.9S153,38.6,153,39
                    c-0.1,0.4-0.2,0.8-0.2,1.2c-0.1,0.4-0.2,0.7-0.2,0.9c0.9-1,1.9-2,3-3c1.1-1,2.2-1.9,3.4-2.7c1.2-0.8,2.3-1.5,3.6-2
                    c1.2-0.5,2.4-0.8,3.6-0.8c0.8,0,1.7,0.1,2.5,0.4c0.8,0.2,1.6,0.6,2.2,1.1c0.6,0.5,1.2,1,1.6,1.8c0.4,0.7,0.6,1.5,0.6,2.4
                    c0,1.2-0.3,2.5-0.9,3.9c-0.6,1.4-1.4,2.8-2.3,4.2c-0.9,1.4-1.9,2.8-3,4.1c-1.1,1.3-2.1,2.5-3.1,3.6c-0.9,1.1-1.7,2-2.4,2.8
                    c-0.6,0.8-1,1.3-1,1.5c0,0.4,0.1,0.6,0.3,0.9c0.2,0.2,0.6,0.3,1.1,0.3c0.4,0,1.1-0.2,1.9-0.7c0.8-0.5,2-1.3,3.5-2.5s3.4-2.8,5.7-4.8
                    C175.1,49.7,178,47.2,181.4,44.2L181.4,44.2z"/>
                </svg>
              </figure>
              <!-- End Logo -->
            </div>

            <div class="my-2 col-4 col-sm-3">
              <!-- Logo -->
              <figure>
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 226.3 88">
                  <path fill="#bdc5d1" d="M16.3,6.3h193.6v64.5h-96.8v10.7H70.2V70.9H16.3V6.3z M27.1,60.1h21.5V27.9h10.7v32.3h10.7V17.1H27.1V60.1z
                     M80.9,17.1v53.8h21.5V60.1h21.5v-43H80.9z M102.4,27.9h10.7v21.5h-10.7V27.9z M134.7,17.1v43h21.5V27.9h10.7v32.3h10.7V27.9h10.7
                    v32.3h10.7V17.1H134.7z"/>
                  <polygon fill="none" points="31.8,59.2 52.1,59.2 52.1,28.8 62.3,28.8 62.3,59.2 72.5,59.2 72.5,18.5 31.8,18.5 "/>
                  <path fill="none" d="M82.7,18.5v50.8H103V59.2h20.3V18.5H82.7z M113.1,49.1H103V28.8h10.1V49.1z"/>
                  <polygon fill="none" points="133.5,18.5 133.5,59.2 153.8,59.2 153.8,28.8 164,28.8 164,59.2 174.1,59.2 174.1,28.8 184.3,28.8184.3,59.2 194.4,59.2 194.4,18.5 "/>
                </svg>
              </figure>
              <!-- End Logo -->
            </div>
          </div>
          <!-- End Clients -->
        </div>
      </div>

      <!-- SVG Bottom Shape -->
      <figure class="bottom-0 left-0 right-0 position-absolute">
        <svg preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 1920 100.1">
          <path fill="#fff" d="M0,0c0,0,934.4,93.4,1920,0v100.1H0L0,0z"/>
        </svg>
      </figure>
      <!-- End SVG Bottom Shape -->
    </div>
    <!-- End Tools Section -->

    <!-- Stats Section -->
    <div class="container space-top-1 space-top-md-2 space-bottom-2 space-bottom-lg-3">
      <div class="row justify-content-lg-center">
        <div class="col-md-4 mb-7 mb-lg-0">
          <div data-aos="fade-up" data-aos-delay="100">
            <!-- Stats -->
            <div class="text-center px-md-3 px-lg-7">
              <figure class="mb-3">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 71.7 64" width="71" height="64">
                  <path fill="#FFC107" d="M36.8,14.6L42,25.3c0,0.2,0.2,0.2,0.3,0.3L54,27.2c0.3,0,0.5,0.5,0.3,0.8l-8.5,8.2c-0.2,0.2-0.2,0.3-0.2,0.5
                    l2,11.7c0,0.3-0.3,0.7-0.7,0.5l-10.5-5.6c-0.2,0-0.3,0-0.5,0l-10.5,5.6c-0.3,0.2-0.8-0.2-0.7-0.5l2-11.7c0-0.2,0-0.3-0.2-0.5
                    L18,28.1c-0.3-0.3-0.2-0.8,0.3-0.8L30,25.6c0.2,0,0.3-0.2,0.3-0.3l5.3-10.7C36.1,14.2,36.6,14.2,36.8,14.6z"/>
                  <path opacity=".25" fill="#FFC107" d="M56,5.9l1.5,2.8c0,0,0,0,0.2,0l3.1,0.5c0.2,0,0.2,0.2,0,0.2l-2.3,2.3c0,0,0,0,0,0.2l0.5,3.1
                    c0,0.2-0.2,0.2-0.2,0.2L56,13.6h-0.2L53,15.1c-0.2,0-0.2,0-0.2-0.2l0.5-3.1v-0.2l-2.3-2.3V9.2l3.1-0.5c0,0,0,0,0.2,0l1.5-2.8
                    C55.8,5.7,55.8,5.7,56,5.9z"/>
                  <path opacity=".25" fill="#FFC107" d="M12.3,0.3l1.3,2.8c0,0,0,0,0.2,0l3,0.5c0.2,0,0.2,0.2,0,0.2l-2.1,2.1c0,0,0,0,0,0.2l0.5,3
                    c0,0.2-0.2,0.2-0.2,0.2l-2.6-1.5c0,0,0,0-0.2,0L9.5,9.2c-0.2,0-0.2,0-0.2-0.2l0.5-3c0,0,0,0,0-0.2L7.5,3.7V3.6l3-0.5c0,0,0,0,0.2,0
                    l1.3-2.8C12.1,0.3,12.3,0.3,12.3,0.3z"/>
                  <path opacity=".25" fill="#FFC107" d="M13.9,49.9l1.5,2.8c0,0,0,0,0.2,0l3.1,0.5c0.2,0,0.2,0.2,0,0.2l-2.3,2.3c0,0,0,0,0,0.2l0.5,3.1
                    c0,0.2-0.2,0.2-0.2,0.2l-2.8-1.5h-0.2L11,59.1c-0.2,0-0.2,0-0.2-0.2l0.5-3.1v-0.2L9,53.4v-0.2l3.1-0.5c0,0,0,0,0.2,0l1.3-2.8
                    C13.8,49.8,13.9,49.8,13.9,49.9z"/>
                  <path opacity=".25" fill="#FFC107" d="M60.8,53.5l1.6,3.1c0,0,0,0,0.2,0l3.5,0.5c0.2,0,0.2,0.2,0,0.3l-2.5,2.5c0,0,0,0,0,0.2l0.7,3.5
                    c0,0.2-0.2,0.2-0.2,0.2l-3.1-1.6h-0.2l-3.1,1.6c-0.2,0-0.2,0-0.2-0.2l0.7-3.5v-0.2l-2.5-2.5c-0.2-0.2,0-0.2,0-0.3l3.5-0.5h0.2
                    l1.6-3.1C60.4,53.4,60.6,53.4,60.8,53.5z"/>
                </svg>
              </figure>
              <p class="mb-0"><span class="text-dark font-weight-bold">4.83 out of 5 starts</span> from 53 reviews</p>
            </div>
            <!-- End Stats -->
          </div>
        </div>
      </div>
    </div>

    <!-- End Stats Section -->
  </main>
@endsection
