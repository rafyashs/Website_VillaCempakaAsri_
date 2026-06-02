@extends('layout.app')

@section('title', 'Home')

@section('content')
  <div class="intro intro-carousel swiper position-relative">
    <div class="swiper-wrapper">

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('{{ asset('image/PrivatePool/7.jpeg') }}')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Cempaka, Asri <br> 41281</p>
                    <h1 class="intro-title mb-4 "><span class="color-b">Tipe </span> <br> E Private Pool</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('villa.eprivatepool') }}"><span class="price-a">Informasi</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-slide carousel-item-a intro-item bg-image" style="background-image: url('{{ asset('image/Rumahlumbung1/12.jpg') }}')">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">Cempaka, Asri <br> 41281</p>
                    <h1 class="intro-title mb-4"><span class="color-b">Tipe </span> <br> Rumah Lumbung</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="{{ route('villa.lumbung') }}"><span class="price-a">Informasi</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>

  <main id="main">
    <section class="section-services section-t8">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="title-wrap d-flex justify-content-between">
              <div class="title-box">
                <h2 class="title-a">Service kita</h2>
              </div>
            </div>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4">
            <div class="card-box-c foo" style="background-color: #2cca6a; padding: 25px; border-radius: 15px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
              <div class="card-header-c d-flex">
                <div class="card-box-ico" style="color: white; font-size: 2rem;"><span class="bi bi-wifi"></span></div>
                <div class="card-title-c align-self-center" style="color: white; margin-left: 15px;"><h2 class="title-c" style="color: white;">Free Wifi</h2></div>
              </div>
              <div class="card-body-c" style="color: white;"><p class="content-c" style="color: rgba(255,255,255,0.9);">Nikmati wifi gratis pada setiap kamar yang tersedia.</p></div>
            </div>
          </div>

          
          <div class="col-md-4">
            <div class="card-box-c foo" style="background-color: #2cca6a; padding: 25px; border-radius: 15px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
              <div class="card-header-c d-flex">
                <div class="card-box-ico" style="color: white; font-size: 2rem;">
                  <span class="bi bi-house-heart-fill"></span>
                </div>
                <div class="card-title-c align-self-center" style="color: white; margin-left: 10px;">
                  <h2 class="title-c" style="color: white; font-size: 1.5rem; line-height: 1.2;">Village Atmosphere</h2>
                </div>
              </div>
              <div class="card-body-c" style="color: white;">
                <p class="content-c" style="color: rgba(255,255,255,0.9);">
                  Nikmati liburan di villa kami dengan suasana pedesaan ditambah kolam rendam air panas.
                </p>
              </div>
            </div>
          </div>

          
          <div class="col-md-4">
            <div class="card-box-c foo" style="background-color: #2cca6a; padding: 25px; border-radius: 15px; height: 100%; box-shadow: 0 4px 15px rgba(0,0,0,0.1);">
              <div class="card-header-c d-flex">
                <div class="card-box-ico" style="color: white; font-size: 2rem;"><span class="bi bi-lamp-fill"></span></div>
                <div class="card-title-c align-self-center" style="color: white; margin-left: 15px;"><h2 class="title-c" style="color: white;">Classic Furniture</h2></div>
              </div>
              <div class="card-body-c" style="color: white;"><p class="content-c" style="color: rgba(255,255,255,0.9);">Fasilitas lengkap dengan perpaduan furnitur unsur classic dan modern.</p></div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection