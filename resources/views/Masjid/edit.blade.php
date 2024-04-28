@extends('layouts.app')

@section('title', 'Edit masjid')

@section('contents')
    <h1 class="mb-0">Edit Masjid</h1>
    <hr />
    <form action="{{ route('masjid.update', $masjid->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


            <div class="row mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama_masjid" class="form-control" value="{{ $masjid->nama_masjid }}">
            </div>
            <div class="row mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email_masjid" class="form-control" value="{{ $masjid->email_masjid }}">
            </div>


            <div class="row mb-3">
                <label class="form-label">Alamat Masjid</label>
                <input type="text" name="alamat_masjid" class="form-control" value="{{ $masjid->alamat_masjid }}">
            </div>
            <div class="row mb-3">
                <label class="form-label">Telepon masjid</label>
                <input type="text" class="form-control" name="telepon_masjid" value="{{ $masjid->telepon_masjid }}"> </div>
            <div class="row mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="deskripsi">{{ $masjid->deskripsi }}</textarea>
            </div>


            <div class="row mb-3">
                @if($masjid->foto_masjid) <img src="{{ asset('storage/masjid_images/' . $masjid->foto_masjid) }}" alt="{{ $masjid->name }} - Foto masjid" width="100" height="50">
                    <br>
                @endif
                <label for="foto_masjid" class="form-label">Update Foto (Optional)</label>
                <input type="file" name="foto_masjid" class="form-control" id="foto_masjid">
            </div>


        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
