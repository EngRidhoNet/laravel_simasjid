@extends('layouts.app')

@section('title', 'Data Artikel')

@section('contents')
  <div class="d-flex align-items-center justify-content-between">
    {{-- <h1 class="mb-0">Data Artikel</h1> --}}
    <a href="{{ route('artikel.create') }}" class="btn btn-primary">Tambah Data Artikel</a>
  </div>
  <hr />
  @if(Session::has('success'))
    <div class="alert alert-success" role="alert">
      {{ Session::get('success') }}
    </div>
  @endif
  <div class="row row-cols-1 row-cols-md-2 g-4">
    @if($artikel->count() > 0)
      @foreach($artikel as $rs)
        <div class="col">
          <div class="card mb-3">
            @if($rs->gambar)
              <img src="{{ asset('storage/artikel_images/' . $rs->gambar) }}" class="card-img-top" alt="{{ $rs->judul }}">
            @endif
            <div class="card-body">
              <h5 class="card-title">{{ $rs->judul }}</h5>
              <p class="card-text">{{ Str::limit($rs->isi, 100) }}</p>
              <a href="{{ route('artikel.show', $rs->id) }}" class="btn btn-primary">Baca Selengkapnya</a>
              <p class="card-text text-muted"><small>{{ $rs->tanggal }}</small></p>
            </div>
          </div>
        </div>
      @endforeach
    @else
      <div class="col text-center">
        <p>Data Artikel Tidak Ditemukan</p>
      </div>
    @endif
  </div>
@endsection
