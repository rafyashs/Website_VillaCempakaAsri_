@extends('layout.app')

@section('title', 'Daftar Villa')

@section('content')
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Daftar villa</h1>
              <span class="color-text-a">Cempaka Asri</span>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Daftar Villa
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Grid ======= -->
    <section class="property-grid grid">
      <div class="container">
        <div class="row">
          
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{ asset('image/PrivatePool/8.jpeg') }}" style="width:500px;height:600px;" class="center img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="{{ route('villa.eprivatepool') }}">Tipe
                        <br /> E Private Pool</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">harga | RP 2jt - 4jt</span>
                    </div>
                    <a href="{{ route('villa.eprivatepool') }}" class="link-a">Tekan disini untuk informasi lebih lanjut
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span>5</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Rendam</h4>
                        <span>2</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Private Pool</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{ asset('image/Rumahlumbung1/11.jpg') }}" style="width:500px;height:600px;" class="center img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="{{ route('villa.lumbung') }}">Tipe
                        <br /> Rumah Lumbung</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">harga | RP 750 Rb</span>
                    </div>
                    <a href="{{ route('villa.lumbung') }}" class="link-a">Tekan disini untuk informasi lebih lanjut
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span>1</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Rendam</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{ asset('image/RumahCempakaAsri1/1.jpg') }}" style="width:500px;height:600px;" class="center img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="{{ route('villa.cempaka') }}">Tipe
                        <br /> Rumah Cempaka Asri</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">harga | RP 2 Jt</span>
                    </div>
                    <a href="{{ route('villa.cempaka') }}" class="link-a">Tekan disini untuk informasi lebih lanjut
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span>3</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Rendam</h4>
                        <span>1</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Ruang Keluarga</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{ asset('image/RumahKayu3kamar/1.jpg') }}" style="width:500px;height:600px;" class="center img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="{{ route('villa.kayu3') }}">Tipe
                        <br /> Rumah Kayu 3 Kamar</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">harga | RP 1,5 Jt</span>
                    </div>
                    <a href="{{ route('villa.kayu3') }}" class="link-a">Tekan disini untuk informasi lebih lanjut
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span>3</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Rendam</h4>
                        <span>1</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Ruang Keluarga</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4">
            <div class="card-box-a card-shadow">
              <div class="img-box-a">
                <img src="{{ asset('image/RumahKayu4kamar/4.jpeg') }}" style="width:500px;height:600px;" class="center img-a img-fluid">
              </div>
              <div class="card-overlay">
                <div class="card-overlay-a-content">
                  <div class="card-header-a">
                    <h2 class="card-title-a">
                      <a href="{{ route('villa.kayu4') }}">Tipe
                        <br /> Rumah Kayu 4 Kamar</a>
                    </h2>
                  </div>
                  <div class="card-body-a">
                    <div class="price-box d-flex">
                      <span class="price-a">harga | RP 2 Jt</span>
                    </div>
                    <a href="{{ route('villa.kayu4') }}" class="link-a">Tekan disini untuk informasi lebih lanjut
                      <span class="bi bi-chevron-right"></span>
                    </a>
                  </div>
                  <div class="card-footer-a">
                    <ul class="card-info d-flex justify-content-around">
                      <li>
                        <h4 class="card-info-title">Kamar Tidur</h4>
                        <span>4</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Kamar Rendam</h4>
                        <span>1</span>
                      </li>
                      <li>
                        <h4 class="card-info-title">Ruang Keluarga</h4>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </section><!-- End Property Grid Single-->

  </main><!-- End #main -->
@endsection