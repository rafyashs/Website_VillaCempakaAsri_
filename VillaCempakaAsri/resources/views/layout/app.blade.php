<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Villa Cempaka Asri - @yield('title')</title>

  <link href="{{ asset('image/logo/logo.jpg') }}" rel="icon">
  <link href="{{ asset('image/logo/logo.jpg') }}" rel="apple-touch-icon">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
  <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span><span></span><span></span>
      </button>

      <a class="navbar-brand text-brand" href="{{ url('/') }}" style="position: relative; display: inline-block; height: 50px; width: 160px;">
        <img src="{{ asset('image/logo/logo utama.png') }}" alt="Logo" style="max-height: 110px; width: auto; position: absolute; top: 50%; transform: translateY(-50%); left: 0; z-index: 10;">
      </a>

      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav ms-lg-5">
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}" href="{{ url('/about') }}">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('villa.index') ? 'active' : '' }}" href="{{ url('/villa') }}">Daftar Villa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" target="_blank" href="https://wa.me/6282118984114/?text=Permisi Saya Mau Booking Villa mas.">Booking</a>
          </li>
        </ul>

        <ul class="navbar-nav ms-auto">
          @guest
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('login') ? 'active' : '' }}" href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{ request()->routeIs('register') ? 'active' : '' }}" href="{{ route('register') }}">Register</a>
            </li>
          @endguest
          @auth
            <li class="nav-item">
              <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
            </li>
            <li class="nav-item">
              <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="nav-link" style="border: none; background: transparent; cursor: pointer; color: #555;">Logout</button>
              </form>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  @yield('content')

  <section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a"><h3 class="w-title-a text-brand">Kontak</h3></div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a"><span class="color-text-a">Phone : </span> 0821-3792-3325 / 0813-2023-6688</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a"><h3 class="w-title-a text-brand">CempakaAsri</h3></div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">Bosan dengan suasana perkotaan yaa staycation di villa cempaka asri aja !</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="https://www.facebook.com/raihan.a.setiawan.3/"><i class="bi bi-facebook"></i></a></li>
              <li class="list-inline-item"><a href="https://www.instagram.com/villacempakaasri/"><i class="bi bi-instagram"></i></a></li>
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">&copy; Copyright <span class="color-a">Dhimas & Rafyasha</span> All Rights Reserved.</p>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>