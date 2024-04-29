@extends('layouts.app')

@section('title', 'Detail Data Donasi')

@section('contents')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Data Donasi</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama_donatur" class="col-md-4 col-form-label text-md-right">Nama Donatur:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $donasi->donatur->user->name }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_masjid" class="col-md-4 col-form-label text-md-right">Nama Masjid:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $donasi->masjid->nama_masjid }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $donasi->tanggal }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="jumlah" class="col-md-4 col-form-label text-md-right">Jumlah:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $donasi->jumlah }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="metode_pembayaran" class="col-md-4 col-form-label text-md-right">Metode Pembayaran:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $donasi->metode_pembayaran }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bukti_pembayaran" class="col-md-4 col-form-label text-md-right">Bukti Pembayaran:</label>
                            <div class="col-md-6">
                                @if($donasi->bukti_pembayaran)
                                    <img src="{{ asset('storage/pembayaran_images/' . $donasi->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="img-thumbnail">
                                @else
                                    <p class="form-control-plaintext">Tidak ada bukti pembayaran</p>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <a href="{{ route('donasi') }}" class="btn btn-primary">Kembali</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
