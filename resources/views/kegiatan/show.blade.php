@extends('layouts.app')

@section('title', 'Detail Kegiatan')

@section('contents')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Detail Kegiatan</div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="nama_kegiatan" class="col-md-4 col-form-label text-md-right">Nama Kegiatan:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $kegiatan->nama_kegiatan }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="deskripsi" class="col-md-4 col-form-label text-md-right">Deskripsi:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $kegiatan->deskripsi }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $kegiatan->tanggal }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="waktu_mulai" class="col-md-4 col-form-label text-md-right">Waktu Mulai:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $kegiatan->waktu_mulai }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="waktu_selesai" class="col-md-4 col-form-label text-md-right">Waktu Selesai:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $kegiatan->waktu_selesai }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tempat" class="col-md-4 col-form-label text-md-right">Tempat:</label>
                            <div class="col-md-6">
                                <p class="form-control-plaintext">{{ $kegiatan->tempat }}</p>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="foto_kegiatan" class="col-md-4 col-form-label text-md-right">Foto Kegiatan:</label>
                            <div class="col-md-6">
                                @if ($kegiatan->foto_kegiatan)
                                    <img src="{{ asset('storage/kegiatan_images/' . $kegiatan->foto_kegiatan) }}" alt="Foto Kegiatan" class="img-thumbnail">
                                @else
                                    <p class="form-control-plaintext">Tidak ada foto</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
