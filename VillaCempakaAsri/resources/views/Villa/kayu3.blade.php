@extends('layout.app')

@section('title', 'Rumah Kayu 3 Kamar')

@section('content')
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Rumah Kayu 3 Kamar</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('villa.index') }}">Daftar villa</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Rumah Kayu 3 Kamar
                </li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= Property Single ======= -->
    <section class="property-single nav-arrow-b">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div id="property-single-carousel" class="swiper">
              <div class="swiper-wrapper">
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/1.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/2.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/3.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/4.jpg') }}" style="width:500px;height:600px;"  class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/5.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/6.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/7.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/8.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahKayu3kamar/9.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
              </div>
            </div>
            <div class="property-single-carousel-pagination carousel-pagination"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-12">

            <div class="row justify-content-between">
              <div class="col-md-5 col-lg-4">
                <div class="property-price d-flex justify-content-center foo">
                  <div class="card-header-c d-flex">
                    <div class="card-box-ico">
                      <h5>Rp 1,5 Jt</h5>
                    </div>
                  </div>
                </div>
                <div class="property-summary">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="title-box-d section-t4">
                        <h3 class="title-d">Detail kamar</h3>
                      </div>
                    </div>
                  </div>
                  <div class="summary-list">
                    <ul class="list">
                      <li class="d-flex justify-content-between">
                        <strong>Rumah Kayu 3 </strong>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tempat tidur:</strong>
                        <span>3</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>kamar rendam:</strong>
                        <span>1</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Ruang keluarga:</strong>
                        <span>1</span>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div class="col-md-7 col-lg-7 section-md-t3">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Deskripsi Kamar</h3>
                    </div>
                  </div>
                </div>
                <div class="property-description">
                  <p class="description color-text-a">
                    Untuk rumah kayu 3 kamar terdapat 3 buah yaitu RK 9A,RK 9B dan ,RK 9C adapun mengenai fasilitas dan perlengkapann yang diterima sama.
                  </p>
                  <p class="description color-text-a no-margin">
                    Jenis kamar ini cocok untuk kamu yang bosan tinggal di perkotaan dan ingin sekali-kali mencoba menginap dengan nuansa pedesaan.
                  </p>
                </div>
                <div class="row section-t3">
                  <div class="col-sm-12">
                    <div class="title-box-d">
                      <h3 class="title-d">Kelengkapan</h3>
                    </div>
                  </div>
                </div>
                <div class="amenities-list color-text-a">
                  <ul class="list-a no-margin">
                    <li>Kolam rendam outdoor</li>
                    <li>Dispenser</li>
                    <li>Lemari Es</li>
                    <li>Dapur & peralatannya</li>
                    <li>free wifi 50 mbps</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rk9a-tab" data-bs-toggle="pill" href="#pills-rk9a" role="tab" aria-controls="pills-rk9a" aria-selected="false">RK9A</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rk9b-tab" data-bs-toggle="pill" href="#pills-rk9b" role="tab" aria-controls="pills-rk9b" aria-selected="false">RK9B</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rk9c-tab" data-bs-toggle="pill" href="#pills-rk9c" role="tab" aria-controls="pills-rk9c" aria-selected="false">RK9C</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <video class="centervideo" src="{{ asset('image/Testimoni/videotesti.mp4') }}" controls></video>
              </div>
              <div class="tab-pane fade" id="pills-rk9a" role="tabpanel" aria-labelledby="pills-rk9a-tab">
                <img src="{{ asset('image/RumahKayu3kamar/1.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="tab-pane fade" id="pills-rk9b" role="tabpanel" aria-labelledby="pills-rk9b-tab">
                <img src="{{ asset('image/RumahKayu3kamar/1.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="tab-pane fade" id="pills-rk9c" role="tabpanel" aria-labelledby="pills-rk9c-tab">
                <img src="{{ asset('image/RumahKayu3kamar/1.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->
@endsection