@extends('layouts.app')

@section('title', 'DeWaele Company | Dashboard')

@push('scripts')
    {{-- Login-success --}}
    @if (session('login_success'))
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            Swal.fire({
                title: 'Login Berhasil!',
                text: 'Anda telah diarahkan ke dashboard.',
                icon: "success",
                showConfirmButton: true
            });
        </script>
    @endif
@endpush

@section('konten')
    <div class="shadow p-3 mb-3 bg-white rounded d-flex justify-content-center">
        <h3>Selamat Datang {{ Auth::user()->name }}</h3>
    </div>
    <div class="mb-4"></div>
    <div class="row justify-content-center">
        {{-- Jumlah Produk --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-warning text-white shadow">
                <div class="card-body text-center">
                    <i class="fas fa-box fa-2x mb-2"></i>
                    <div id="jumlah-produk" class="fs-2 fw-bold" data-count="{{ $jumlahProduk }}">0</div>
                    <div>Jumlah Produk</div>
                </div>
            </div>
        </div>

        {{-- Jumlah User --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-success text-white shadow">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-2x mb-2"></i>
                    <div id="jumlah-user" class="fs-2 fw-bold" data-count="{{ $jumlahUser }}">0</div>
                    <div>Jumlah User</div>
                </div>
            </div>
        </div>

        {{-- Jumlah Kategori --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card bg-danger text-white shadow">
                <div class="card-body text-center">
                    <i class="fas fa-clipboard fa-2x mb-2"></i>
                    <div id="jumlah-kategori" class="fs-2 fw-bold" data-count="{{ $jumlahKategori }}">0</div>
                    <div>Jumlah Kategori</div>
                </div>
            </div>
        </div>
    </div>
@endsection
