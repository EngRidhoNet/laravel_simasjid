@extends('layouts.app')

@section('title', 'Edit Data Donasi')

@section('contents')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Donasi</div>

                    <div class="card-body">
                        <form action="{{ route('donasi.update', $donasi->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="nama_donatur" class="col-md-4 col-form-label text-md-right">Nama Donatur:</label>
                                <div class="col-md-6">
                                    <p class="form-control-plaintext">{{ $donasi->donatur->user->name }}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="nama_masjid" class="col-md-4 col-form-label text-md-right">Nama Masjid:</label>
                                <div class="col-md-6">
                                    <p class="form-control-plaintext">{{ $donasi->masjid->nama_masjid }}</p>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="tanggal" class="col-md-4 col-form-label text-md-right">Tanggal:</label>
                                <div class="col-md-6">
                                    <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $donasi->tanggal }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="jumlah" class="col-md-4 col-form-label text-md-right">Jumlah:</label>
                                <div class="col-md-6">
                                    <input type="number" name="jumlah" class="form-control" id="jumlah" value="{{ $donasi->jumlah }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="metode_pembayaran" class="col-md-4 col-form-label text-md-right">Metode Pembayaran:</label>
                                <div class="col-md-6">
                                    <select name="metode_pembayaran" class="form-control" id="metode_pembayaran">
                                        <option value="Cash" {{ $donasi->metode_pembayaran == 'Cash' ? 'selected' : '' }}>Cash</option>
                                        <option value="Transfer" {{ $donasi->metode_pembayaran == 'Transfer' ? 'selected' : '' }}>Transfer</option>
                                        <option value="OVO" {{ $donasi->metode_pembayaran == 'OVO' ? 'selected' : '' }}>OVO</option>
                                        <option value="GoPay" {{ $donasi->metode_pembayaran == 'GoPay' ? 'selected' : '' }}>GoPay</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="bukti_pembayaran" class="col-md-4 col-form-label text-md-right">Upload Bukti Pembayaran:</label>
                                <div class="col-md-6">
                                    <input type="file" name="bukti_pembayaran" class="form-control" id="bukti_pembayaran">
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                                    <a href="{{ route('donasi') }}" class="btn btn-secondary">Kembali</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
