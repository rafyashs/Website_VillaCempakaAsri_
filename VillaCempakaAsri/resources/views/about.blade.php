@extends('layout.app')

@section('title', 'About')

@section('content')
  <main id="main">
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Cerita tentang villa kita </h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  About
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><section class="section-about">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 position-relative">
            <div class="about-img-box">
              <img src="{{ asset('image/RumahKayu3kamar/8.jpg') }}" alt="" class="img-fluid">
            </div>
            <div class="sinse-box">
              <h3 class="sinse-title">Villa & Resort
                <span></span>
                <br> Sejak tahun 2000
              </h3>
            </div>
          </div>
          <div class="col-md-12 section-t8 position-relative">
            <div class="row">
              <div class="col-md-6 col-lg-5">
                <img src="{{ asset('image/Rumahlumbung1/1.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="col-lg-2  d-none d-lg-block position-relative">
                <div class="title-vertical d-flex justify-content-start">
                </div>
              </div>
              <div class="col-md-6 col-lg-5 section-md-t3">
                <div class="title-box-d">
                  <h3 class="title-d">Sejarah villa Cempaka Asri.
                  </h3>
                </div>
                <p class="color-text-a">
                  Villa Cempaka merupakan sebuah penginapan yang terletak di jalan Sariater No. 10 ciater, Ciater, Kabupaten Subang, Jawa Barat.
                  Penginapan ini didirikan oleh Bapak Hj. Hassan Sholeh (Alm) pada tahun 2000.
                  setelah pendiri Cempaka Villa & Resort yaitu Bapak Hj. Hassan Sholeh meninggal dunia dan kemudian villa ini dikelola oleh anak-anaknya dan menjadi bisnis keluarga.
                </p>
                <p class="color-text-a">
                  sejak saat itu lah nama villa ini pun bergati nama menjadi villa cempaka asri.
                </p>
                <div class="title-box-d">
                  <h3 class="title-d"> filosofi villa kami
                  </h3>
                </div>
                <p class="color-text-a">
                  Hunian kami memiliki filosi yaitu sentuhan keramahtamahan layaknya penduduk indonesia
                  yang diwujudkan dalam bentuk pelayanan.
                  Berdasarkan hal tersebut kami berusaha dengan sepenuh tenaga untuk meningkatkan
                  pelayanan serta profesionalisme dalam menjamu tamu yang datang ke villa kami.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection