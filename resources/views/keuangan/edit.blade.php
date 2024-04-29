@extends('layouts.app')

@section('title', 'Edit Data Keuangan')

@section('contents')
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Keuangan</div>

                    <div class="card-body">
                        <form action="{{ route('keuangan.update', $keuangan->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="masjid">Nama Masjid:</label>
                                <select name="id_masjid" id="masjid" class="form-control">
                                    <option value="">Pilih Masjid</option>
                                    @foreach ($masjids as $masjid)
                                        <option value="{{ $masjid->id }}" {{ $keuangan->id_masjid == $masjid->id ? 'selected' : '' }}>
                                            {{ $masjid->nama_masjid }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="jenis_transaksi">Jenis Transaksi:</label>
                                <select name="jenis_transaksi" id="jenis_transaksi" class="form-control">
                                    <option value="pemasukan" {{ $keuangan->jenis_transaksi == 'pemasukan' ? 'selected' : '' }}>Pemasukan</option>
                                    <option value="pengeluaran" {{ $keuangan->jenis_transaksi == 'pengeluaran' ? 'selected' : '' }}>Pengeluaran</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="tanggal">Tanggal:</label>
                                <input type="date" name="tanggal" id="tanggal" class="form-control" value="{{ $keuangan->tanggal }}">
                            </div>

                            <div class="form-group">
                                <label for="jumlah">Jumlah:</label>
                                <input type="text" name="jumlah" id="jumlah" class="form-control" value="{{ $keuangan->jumlah }}" placeholder="Masukkan Jumlah">
                            </div>

                            <div class="form-group">
                                <label for="saldo">Saldo:</label>
                                <input type="text" name="saldo" id="saldo" class="form-control" value="{{ $keuangan->saldo }}" placeholder="Masukkan Saldo">
                            </div>

                            <div class="form-group">
                                <label for="keterangan">Keterangan:</label>
                                <textarea name="keterangan" id="keterangan" class="form-control" rows="3" placeholder="Masukkan Keterangan">{{ $keuangan->keterangan }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
