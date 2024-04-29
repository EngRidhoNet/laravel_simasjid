@extends('layouts.app')

@section('title', 'Edit Data Kegiatan')

@section('contents')
    <h1 class="mb-0">Edit Data Kegiatan</h1>
    <hr />

    <form action="{{ route('kegiatan.update', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group row">
            <label for="masjid-select" class="col-sm-2 col-form-label">Masjid:</label>
            <div class="col-sm-10">
                <select name="id_masjid" class="form-control" id="masjid-select">
                    <option value="">Pilih Masjid</option>
                    @foreach ($masjids as $masjid)
                        <option value="{{ $masjid->id }}" {{ $kegiatan->id_masjid == $masjid->id ? 'selected' : '' }}>{{ $masjid->nama_masjid }}</option>
                    @endforeach
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="nama_kegiatan" class="col-sm-2 col-form-label">Nama Kegiatan:</label>
            <div class="col-sm-10">
                <input type="text" name="nama_kegiatan" class="form-control" id="nama_kegiatan" value="{{ $kegiatan->nama_kegiatan }}" placeholder="Masukkan Nama Kegiatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="deskripsi" class="col-sm-2 col-form-label">Deskripsi:</label>
            <div class="col-sm-5">
                <input type="text" name="deskripsi" class="form-control" id="deskripsi" value="{{ $kegiatan->deskripsi }}" placeholder="Masukkan Deskripsi">
            </div>
            <label for="tanggal" class="col-sm-1 col-form-label text-end">Tanggal:</label>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="tanggal" id="tanggal" value="{{ $kegiatan->tanggal }}" placeholder="Pilih Tanggal">
            </div>
        </div>

        <div class="form-group row">
            <label for="waktu_mulai" class="col-sm-2 col-form-label">Waktu Mulai:</label>
            <div class="col-sm-5">
                <input type="time" name="waktu_mulai" class="form-control" id="waktu_mulai" value="{{ $kegiatan->waktu_mulai }}" placeholder="Masukkan Waktu Mulai">
            </div>
            <label for="waktu_selesai" class="col-sm-1 col-form-label text-end">Selesai:</label>
            <div class="col-sm-4">
                <input type="time" name="waktu_selesai" class="form-control" id="waktu_selesai" value="{{ $kegiatan->waktu_selesai }}" placeholder="Masukkan Waktu Selesai">
            </div>
        </div>

        <div class="form-group row">
            <label for="tempat" class="col-sm-2 col-form-label">Tempat:</label>
            <div class="col-sm-10">
                <input type="text" name="tempat" class="form-control" id="tempat" value="{{ $kegiatan->tempat }}" placeholder="Masukkan Tempat Kegiatan">
            </div>
        </div>

        <div class="form-group row">
            <label for="foto_kegiatan" class="col-sm-2 col-form-label">Foto Kegiatan:</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" name="foto_kegiatan" id="foto_kegiatan">
                @if ($kegiatan->foto_kegiatan)
                    <p>Foto sebelumnya: {{ $kegiatan->foto_kegiatan }}</p>
                @endif
            </div>
        </div>

        <!-- Submit Button -->
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
@endsection
