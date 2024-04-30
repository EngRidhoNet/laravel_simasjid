@extends('templete.app')


@section('content')

<div class="container py-4">
    <h2 class="mb-4">Daftar Artikel</h2>
    <div class="row">
        @foreach($artikel as $artikel)
        <div class="col-md-4 mb-4">
            <div class="card">
                <img src="{{ asset('storage/artikel_images/' . $artikel->gambar) }}" class="card-img-top" alt="{{ $artikel->judul }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul }}</h5>
                    <p class="card-text">{{ $artikel->isi }}</p>
                    <p class="card-text"><small class="text-muted">Penulis: {{ $artikel->penulis }}</small></p>
                    <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection


