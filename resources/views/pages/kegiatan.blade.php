@extends('templete.app')

@section('content')
<div class="container">
    <h2>Daftar Kegiatan</h2>
    <div class="row">
        @foreach($kegiatan as $kegiatan)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/kegiatan_images/'.$kegiatan->foto_kegiatan) }}" class="card-img-top" alt="{{ $kegiatan->nama_kegiatan }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $kegiatan->nama_kegiatan }}</h5>
                    <p class="card-text">{{ $kegiatan->deskripsi }}</p>
                    <p class="card-text"><strong>Tanggal:</strong> {{ $kegiatan->tanggal }}</p>
                    <p class="card-text"><strong>Waktu:</strong> {{ $kegiatan->waktu_mulai }} - {{ $kegiatan->waktu_selesai }}</p>
                    <p class="card-text"><strong>Tempat:</strong> {{ $kegiatan->tempat }}</p>
                    <a href="#" class="btn btn-primary">Lihat Detail</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>



@endsection
