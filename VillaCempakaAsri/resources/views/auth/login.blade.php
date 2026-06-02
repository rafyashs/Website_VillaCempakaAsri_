@extends('layout.app')

@section('title', 'Login - Villa Cempaka Asri')

@section('content')
  <main id="main">
    <section class="intro-single">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 mt-5">
              <div class="card-body p-5">
                <h2 class="title-single text-center mb-4">Login</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control form-control-lg" id="email" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan email">
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control form-control-lg" id="password" name="password" required placeholder="Masukkan password">
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-b btn-lg" style="background-color: #2cca6a; color: white; border-radius: 50px;">Log in</button>
                    </div>

                    <div class="mt-4 text-center">
                        <p class="mb-0">Belum punya akun? <a href="{{ route('register') }}" class="color-b">Daftar di sini</a></p>
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