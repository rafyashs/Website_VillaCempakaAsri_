@extends('layout.app')

@section('content')
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Selamat Datang di Halaman Admin</h1>
            <p class="lead">Halo, Admin! Di sini Anda bisa mengelola data Villa Cempaka Asri.</p>
            
            <div class="card mt-4">
                <div class="card-body">
                    <p>Hanya pemilik website yang boleh melihat halaman ini.</p>
                    
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-danger">Logout</button>
                    </form>
                    <hr class="mt-4 mb-4">
                    <h3>Daftar Villa</h3>
                    <table class="table table-bordered table-striped mt-3">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Villa</th>
                                <th>Tipe</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                    <tbody>
                     @foreach($villas as $index => $villa)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $villa->nama_villa }}</td>
                                <td>{{ $villa->tipe }}</td>
                                <td>Rp {{ number_format($villa->harga, 0, ',', '.') }}</td>
                                <td>
                                    <button class="btn btn-sm btn-primary">Edit</button>
                                    <button class="btn btn-sm btn-danger">Hapus</button>
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection