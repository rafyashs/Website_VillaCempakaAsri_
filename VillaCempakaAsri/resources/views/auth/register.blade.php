@extends('layout.app')

@section('title', 'Daftar - Villa Cempaka Asri')

@section('content')
  <main id="main">
    <section class="intro-single">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 mt-5">
              <div class="card-body p-5">
                <h2 class="title-single text-center mb-4">Daftar Akun</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control form-control-lg" id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="Nama kamu">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" required placeholder="Email aktif">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" required placeholder="Minimal 8 karakter">
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control form-control-lg" id="password_confirmation" name="password_confirmation" required placeholder="Ketik ulang password">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-b btn-lg" style="background-color: #2cca6a; color: white; border-radius: 50px;">Register</button>
                    </div>

                    <div class="mt-4 text-center">
                        <p class="mb-0">Sudah punya akun? <a href="{{ route('login') }}" class="color-b">Login di sini</a></p>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
@endsection