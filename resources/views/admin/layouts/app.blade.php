<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ 'Admin Area || ' . Auth::user()->username }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

        <!-- Scripts -->
        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.0/dist/alpine.js" defer></script>
        @stack('admin.layouts.style')
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">

                </div>
            </header>

            <!-- Page Content -->
            <main>
                @yield('content')
            </main>
        </div>
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
        @stack('admin.layouts.scripts.scripts')
    </body>
</html>
