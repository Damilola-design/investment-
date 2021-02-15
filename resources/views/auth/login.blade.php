<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 23:01:55 GMT -->
<head>
  <!-- Title -->
  <title>Primrosepathcapital | Login</title>

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
<main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative vh-lg-100">
      <div class="px-0 col-lg-5 col-xl-4 d-none d-lg-flex align-items-center bg-dark vh-lg-100" style="background-image: url(assets/svg/components/abstract-shapes-20.svg);">
        <div class="p-5 w-100">
          <!-- SVG Quote -->
          <figure class="mx-auto mb-5 text-center">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40px" height="40px"
               viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;" xml:space="preserve">
              <path fill="#fff" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
                C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
                c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
                C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z"/>
            </svg>
          </figure>
          <!-- End SVG Quote -->

          <!-- Testimonials Carousel Main -->
          <!-- Clients -->
          <div class="bottom-0 left-0 right-0 p-5 text-center position-absolute">
            <span class="mb-3 d-block text-white-70">Primrosepathcapital partners</span>
            <div class="d-flex justify-content-center">
              <img class="mx-auto max-w-10rem" src="assets/svg/clients-logo/slack-white.svg" alt="Image Description">
              <img class="mx-auto max-w-10rem" src="assets/svg/clients-logo/google-white.svg" alt="Image Description">
              <img class="mx-auto max-w-10rem" src="assets/svg/clients-logo/spotify-white.svg" alt="Image Description">
            </div>
          </div>
          <!-- End Clients -->
        </div>
      </div>

      <div class="container">
        <div class="row no-gutters">
          <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
            <!-- Form -->
            <form class="js-validate" method="POST" action="{{ route('login') }}">
              @csrf
                <!-- Title -->
              <div class="mb-5 mb-md-7">
                <h1 class="h2">Welcome back</h1>
                <p>Login to manage your account.</p>
              </div>
              <!-- End Title -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrEmail">Email address</label>
                <input id="email" type="email" placeholder="Email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                     @if ($errors->has('email'))
                          <span class="invalid-feedback" role="alert">
                               <strong>{{ $errors->first('email') }}</strong>
                           </span>
                     @endif
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="signinSrPassword" tabindex="0">
                  <span class="d-flex justify-content-between align-items-center">
                    Password
                    </span>
                </label>
                <input id="password" type="password" placeholder="*****************" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
              <!-- End Form Group -->
              <div class="d-flex ">
                <div class="form-group row">
                    <div class="col-md-12 col-sm-6">
                        <div class="form-check">
                            <input class="form-check-input " type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="pr-3 form-check-label" for="remember">
                                {{ __('Remember ') }}
                            </label>
                        </div>
                    </div>
                </div>
                  <!-- Button -->
                  <div class="mb-0 form-group row ">
                    <div class="col-md-12 offset-md-4">
                        <button type="submit" class="btn btn-primary transition-3d-hover">
                            {{ __('Login') }}
                        </button>

                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </div>
              </div>

              <div class="mb-5 row align-items-center">
                <div class="mb-3 col-sm-6 mb-sm-0">
                  <span class="font-size-1 text-muted">Don't have an account?</span>
                  <a class="font-size-1 font-weight-bold" href="{{ route('register') }}">Signup</a>
                </div>

              </div>
              <!-- End Button -->
            </form>
            <!-- End Form -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Form -->
  </main>
    <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
  <body>
