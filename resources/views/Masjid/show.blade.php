@extends('layouts.app')

@section('title', 'Show Data Masjid')

@section('contents')
    <h1 class="mb-0">Detail Masjid</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama Masjid</label>
            <input type="text" name="title" class="form-control" value="{{ $masjid->nama_masjid }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email Masjid</label>
            <input type="text" name="price" class="form-control"  value="{{ $masjid->email_masjid }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Alamat Masjid</label>
            <input type="text" name="product_code" class="form-control"  value="{{ $masjid->alamat_masjid }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Telepon Masjid</label>
            <textarea class="form-control" name="description"  readonly>{{ $masjid->telepon_masjid }}</textarea>
        </div>
    </div>
     <div class="row">
        <div class="col mb-3">
            <label class="form-label">Foto Masjid</label>
            <input type="text" name="product_code" class="form-control"  value="{{ $masjid->foto_masjid }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Deskripsi</label>
            <textarea class="form-control" name="description"  readonly>{{ $masjid->deskripsi}}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $masjid->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $masjid->updated_at }}" readonly>
        </div>
    </div>
@endsection
