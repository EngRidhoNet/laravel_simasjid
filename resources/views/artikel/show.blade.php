@extends('layouts.app')

@section('title', 'Detail Data Artikel')

@section('contents')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>{{ $artikel->judul }}</h2>
                    <p class="text-muted">Penulis: {{ $artikel->penulis }}</p>
                </div>

                <div class="card-body">
                    <img src="{{ $artikel->gambar ? asset('storage/artikel_images/' . $artikel->gambar) : 'https://via.placeholder.com/600x400?text=No+Image+Available' }}" class="img-fluid mb-4" alt="Gambar Artikel">
                    <p>{{ $artikel->isi }}</p>
                </div>
            </div>
            <div class="mt-4">
                <a href="{{ route('artikel') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </div>
    </div>
</div>
@endsection
