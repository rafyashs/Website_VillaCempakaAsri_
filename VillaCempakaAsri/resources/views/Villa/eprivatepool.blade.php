@extends('layout.app')

@section('title', 'Villa E Private Pool')

@section('content')
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Villa E Private Pool</h1>
            </div>
          </div>
          <div class="col-md-12 col-lg-4">
            <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item">
                  <a href="{{ route('home') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="{{ route('villa.index') }}">Daftar Villa</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  Villa E Private Pool
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
                  <img src="{{ asset('image/PrivatePool/1.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/2.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/3.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/4.jpeg') }}" style="width:500px;height:600px;"  class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/5.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/6.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/7.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/8.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/9.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/10.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/11.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/PrivatePool/12.jpeg') }}" style="width:500px;height:600px;" class="center" alt="">
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
                      <h5>Rp 2jt - 4jt</h5>
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
                        <strong>Tipe 1 kamar</strong>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tempat tidur:</strong>
                        <span>1</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>kamar mandi:</strong>
                        <span>1</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tipe 4 kamar:</strong>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>Tempat tidur:</strong>
                        <span>5</span>
                      </li>
                      <li class="d-flex justify-content-between">
                        <strong>kamar mandi:</strong>
                        <span>2</span>
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
                    Kamar dengan type e private pool terdapat 2 buah jenis yaitu 1 kamar dengan harga 2jt dan 4 kamar 5 kasur dengan harga 4jt.
                  </p>
                  <p class="description color-text-a no-margin">
                    tipe kamar ini cocok untuk orang yang mengiginkan privasi dan senang menikmati liburannya
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
                    <li>private pool</li>
                    <li>kamar rendam</li>
                    <li>dapur dan peralatan</li>
                    <li>dispenser</li>
                    <li>smart tv</li>
                    <li>free wifi 50 mbps</li>
                    <li>karaoke</li>
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
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <video class="centervideo" src="{{ asset('image/Testimoni/videotesti.mp4') }}" controls></video>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->
@endsection