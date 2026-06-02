@extends('layout.app')

@section('title', 'Rumah Cempaka Asri')

@section('content')
  <main id="main">

    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Rumah Cempaka Asri</h1>
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
                  Rumah Cempaka Asri
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
                  <img src="{{ asset('image/RumahCempakaAsri1/1.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahCempakaAsri1/2.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahCempakaAsri1/3.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahCempakaAsri1/4.jpg') }}" style="width:500px;height:600px;"  class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahCempakaAsri1/5.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahCempakaAsri1/6.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahCempakaAsri1/7.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
                </div>
                <div class="carousel-item-b swiper-slide">
                  <img src="{{ asset('image/RumahCempakaAsri1/8.jpg') }}" style="width:500px;height:600px;" class="center" alt="">
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
                      <h5>Rp 2 Jt</h5>
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
                        <strong>Rumah Cempaka Asri </strong>
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
                    Untuk villa cempaka asri terdapat 4 buah varian yaitu RCA1, RCA2, RCA3, dan RCA4 adapun mengenai fasilitas dan perlengkapann yang akan diterima sama.
                  </p>
                  <p class="description color-text-a no-margin">
                    Jenis kamar ini cocok untuk kamu yang melaksanakan staycation bersama keluarga atau teman teman kalian karena dapat menampung 10 hingga 15 orang.
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
                    <li>Dispenser</li>
                    <li>Lemari es</li>
                    <li>Dapur & peralatannya</li>
                    <li>Free wifi 50 Mbps</li>
                    <li>Smart tv</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-10 offset-md-1">
            <ul class="nav nav-pills-a nav-pills mb-3 section-t3" id="pills-tab" role="tablist" >
              <li class="nav-item">
                <a class="nav-link active" id="pills-video-tab" data-bs-toggle="pill" href="#pills-video" role="tab" aria-controls="pills-video" aria-selected="true">Video</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rca1-tab" data-bs-toggle="pill" href="#pills-rca1" role="tab" aria-controls="pills-rca1" aria-selected="false">RCA1</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rca2-tab" data-bs-toggle="pill" href="#pills-rca2" role="tab" aria-controls="pills-rca2" aria-selected="false">RCA2</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rca3-tab" data-bs-toggle="pill" href="#pills-rca3" role="tab" aria-controls="pills-rca3" aria-selected="false">RCA3</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="pills-rca4-tab" data-bs-toggle="pill" href="#pills-rca4" role="tab" aria-controls="pills-rca4" aria-selected="false">RCA4</a>
              </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-video" role="tabpanel" aria-labelledby="pills-video-tab">
                <video class="centervideo" src="{{ asset('image/Testimoni/videotesti.mp4') }}" controls></video>
              </div>
              <div class="tab-pane fade" id="pills-rca1" role="tabpanel" aria-labelledby="pills-rca1-tab">
                <img src="{{ asset('image/RumahCempakaAsri1/2.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="tab-pane fade" id="pills-rca2" role="tabpanel" aria-labelledby="pills-rca2-tab">
                <img src="{{ asset('img/plan2.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="tab-pane fade" id="pills-rca3" role="tabpanel" aria-labelledby="pills-rca3-tab">
                <img src="{{ asset('img/plan2.jpg') }}" alt="" class="img-fluid">
              </div>
              <div class="tab-pane fade" id="pills-rca4" role="tabpanel" aria-labelledby="pills-rca4-tab">
                <img src="{{ asset('img/plan2.jpg') }}" alt="" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Property Single-->

  </main><!-- End #main -->
@endsection