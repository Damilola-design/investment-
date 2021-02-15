<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from htmlstream.com/front/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Dec 2020 23:01:55 GMT -->
<head>
  <!-- Title -->
  <title>Primrosepathcapital | Register</title>

  <!-- Required Meta Tags Always Come First -->

  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <meta name="_token" content="{{ csrf_token() }}" />
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
          <h1 class="text-center text-white h3">Welcome to Primrosepathcapital</h1>
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
          <div class="col-md-12 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
            <!-- Form -->
            <form class="js-validate" method="POST" action="{{ route('register') }}">
                @csrf
                <!-- Title -->
              <div class="pt-5 mt-5 mb-5 mb-md-7">

                <p class="mt-5">Fill out the form to get started.</p>
              </div>
              <!-- End Title -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="username"></label>
                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}" name="username" value="{{ old('username') }}" placeholder="Username" required autofocus>
                @if ($errors->has('username'))
                     <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('username') }}</strong>
                      </span>
                 @endif
              </div>
              <!-- End Form Group -->
               <!-- Form Group -->
               <div class="js-form-message form-group">
                <label class="input-label" for="email"></label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="E-mail" required>
                @if ($errors->has('email'))
                     <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                      </span>
                 @endif
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="password"></label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                   @if ($errors->has('password'))
                       <span class="invalid-feedback" role="alert">
                             <strong>{{ $errors->first('password') }}</strong>
                        </span>
                     @endif
              </div>
              <!-- End Form Group -->

              <!-- Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="password-confirm"></label>
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
              </div>
              <!-- End Form Group -->
              <div class="js-form-message form-group">
                <label class="input-label" for="first_name"></label>
                <input id="first_name" type="text" class="form-control{{ $errors->has('first_name') ? ' is-invalid' : '' }}" placeholder="First Name" name="first_name" value="{{ old('first_name') }}" required autofocus>
              @if ($errors->has('first_name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('first_name') }}</strong>
                  </span>
              @endif
              </div>
              <div class="js-form-message form-group">
                <label class="input-label" for="last_name"></label>
                <input id="last_name" type="text" class="form-control{{ $errors->has('last_name') ? ' is-invalid' : '' }}" name="last_name" value="{{ old('last_name') }}" placeholder="Last Name" required autofocus>
              @if ($errors->has('last_name'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $errors->first('last_name') }}</strong>
                  </span>
              @endif
              </div>
              <div class="js-form-message form-group">
                <label class="input-label" for="gender"></label>
                <select name="gender" id="gender" class="form-control" required>
                    <option value="">Select a gender</option>
                    <option value="male">Male</option>
                    <option value="female" >Female</option>
                    <option value="other" >Other</option>
                </select>
                @if ($errors->has('gender'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('gender') }}</strong>
                    </span>
                @endif
              </div>
              <!-- Checkbox -->
              <div class="mb-5 js-form-message">
                <div class="custom-control custom-checkbox d-flex align-items-center text-muted">
                  <input type="checkbox" class="custom-control-input" id="termsCheckbox" name="termsCheckbox" required
                         data-msg="Please accept our Terms and Conditions.">
                  <label class="custom-control-label" for="termsCheckbox">
                    <small>
                      I agree to the
                      <a class="link-underline" href="">Terms and Conditions</a>
                    </small>
                  </label>
                </div>
              </div>
              <!-- End Checkbox -->

              <!-- Button -->
              <div class="mb-5 row align-items-center">
                <div class="mb-3 col-sm-6 mb-sm-0">
                  <span class="font-size-1 text-muted">Already have an account?</span>
                  <a class="font-size-1 font-weight-bold" href="{{ route('login') }}">Login</a>
                </div>

                <div class="col-sm-6 text-sm-right">
                  <button type="submit" class="btn btn-primary transition-3d-hover" >{{ __('Register') }}</button>
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

</body>
</html>
