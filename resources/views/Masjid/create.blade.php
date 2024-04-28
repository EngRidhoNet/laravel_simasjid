@extends('layouts.app')

@section('title', 'Tambah Data Masjid')

@section('contents')
    <h1 class="mb-0">Tambah Data Masjid</h1>
    <hr />
    <form action="{{ route('masjid.store') }}" method="POST" enctype="multipart/form-data" class="form-horizontal">
        @csrf

        <div class="row mb-3">
            <label for="nama_masjid" class="col-sm-2 col-form-label">Nama Masjid</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama_masjid" name="nama_masjid"
                    placeholder="Masukkan Nama Masjid">
            </div>
        </div>



        <div class="row mb-3">
            <label for="alamat_masjid" class="col-sm-2 col-form-label">Alamat Masjid</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="alamat_masjid" name="alamat_masjid"
                    placeholder="Masukkan Alamat Masjid">
            </div>
        </div>

         <div class="row mb-3">
            <label for="email_masjid" class="col-sm-2 col-form-label">Email Masjid</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="email_masjid" name="email_masjid"
                    placeholder="Masukkan Nama Masjid">
            </div>
        </div>

        <div class="row mb-3">
            <label for="foto_masjid" class="col-sm-2 col-form-label">Foto Masjid</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="foto_masjid" name="foto_masjid">
            </div>
        </div>

        <div class="row mb-3">
            <label for="telepon_masjid" class="col-sm-2 col-form-label">Telepon Masjid</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="telepon_masjid" name="telepon_masjid"
                    placeholder="Masukkan Telepon Masjid">
            </div>
        </div>

        <div class="row mb-3">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" placeholder="Masukkan Deskripsi Masjid"></textarea>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12 d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

@endsection
