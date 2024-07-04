@extends('layout.app-no-sidebar')

@section('title', 'Pesan Produk')

@section('content')
    <div class="card">
        <!--Header-->
        <div class="card-header">
            <h4 class="card-title">Pesan Produk</h4>
        </div>

        <!--Body-->
        <div class="card-content">
            <div class="card-body">
                <!--Form-->
                <form class="form" action="{{ route('pemesanan.store') }}" method="POST">
                    @csrf

                    <!--Gambar Produk-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>{{ $atraksi->nama_atraksi }} (Rp {{ number_format($atraksi->harga, 0, ',', '.') }})</h4>
                                </div>
                                <div class="card-body">
                                    <div id="carouselExampleSlidesOnly" class="carousel slide pointer-event"
                                        data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="{{ asset($atraksi->gambar) }}" class="d-block w-100"
                                                    alt="Gambar {{ $atraksi->nama_atraksi }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Id Atraksi-->
                    <input type="hidden" name="atraksi_id" value="{{ $atraksi->id }}">

                    <div class="row">
                        <!--Nama-->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" id="nama" class="form-control" placeholder="Nama Lengkap"
                                    name="nama" required>
                            </div>
                        </div>

                        <!--Email-->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" class="form-control" name="email" placeholder="Email"
                                    required>
                            </div>
                        </div>

                        <!--Jumlah-->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="jumlah">Jumlah</label>
                                <input type="number" id="jumlah" class="form-control"
                                    placeholder="Jumlah Produk ingin Dibeli" name="jumlah" required>
                            </div>
                        </div>

                        <!--AlMAT-->
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" id="alamat" class="form-control" placeholder="Alamat Lengkap"
                                    name="alamat" required>
                            </div>
                        </div>
                        <div class="col-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
