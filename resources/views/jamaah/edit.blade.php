@extends('layouts.app')

@section('title', 'Edit Product')

@section('contents')
    <h1 class="mb-0">Edit Product</h1>
    <hr />
    <form action="{{ route('jamaah.update', $jamaah->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="name" class="form-control"  value="{{ $jamaah->name }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control"  value="{{ $jamaah->email }}" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">alamat</label>
                <input type="text" name="alamat" class="form-control"  value="{{ $jamaah->alamat }}" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Telepon Masjid</label>
                <input type="text" class="form-control" name="telepon_masjid" value="{{ $jamaah->telepon_masjid }}">
            </div>
            <div class="col mb-3">
                <label class="form-label">Deskripsi</label>
                <textarea type="text" class="form-control" name="foto_masjid" value="{{ $masjid->deskripsi }}">
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
@endsection
