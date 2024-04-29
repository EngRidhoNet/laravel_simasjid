@extends('layouts.app')

@section('title', 'Edit Data Artikel')

@section('contents')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Artikel</div>

                    <div class="card-body">
                        <form action="{{ route('artikel.update', $artikel->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="judul">Judul:</label>
                                <input type="text" name="judul" class="form-control"
                                    id="judul" value="{{ $artikel->judul }}">
                                </div>

                            <div class="form-group">
                                <label for="penulis">Penulis:</label>
                                <input type="text" name="penulis" class="form-control"
                                    id="penulis" value="{{ $artikel->penulis }}">
                                </div>

                            <div class="form-group">
                                <label for="isi">Isi Artikel:</label>

                                <textarea name="isi" class="form-control" id="isi" rows="5">{{ $artikel->isi }}</textarea>

                            </div>

                            <div class="form-group">
                                <label for="gambar">Upload Gambar:</label>
                                <input type="file" name="gambar" class="form-control-file"
                                    id="gambar">
                                </div>

                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                            <a href="{{ route('artikel') }}"
                                class="btn btn-secondary">Kembali</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
    </div>
@endsection
