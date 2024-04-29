@extends('layouts.app')

@section('title', 'Detail Data Keuangan')

@section('contents')
  <div class="container mt-4">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">Detail Data Keuangan</div>

          <div class="card-body">
            <form>
              <div class="mb-3">
                <label for="masjid" class="form-label">Nama Masjid:</label>
                <input type="text" class="form-control" id="masjid" value="{{ $keuangan->masjid->nama_masjid }}" readonly>
              </div>

              <div class="mb-3">
                <label for="jenis_transaksi" class="form-label">Jenis Transaksi:</label>
                <input type="text" class="form-control" id="jenis_transaksi" value="{{ $keuangan->jenis_transaksi == 'pemasukan' ? 'Pemasukan' : 'Pengeluaran' }}" readonly>
              </div>

              <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal:</label>
                <input type="text" class="form-control" id="tanggal" value="{{ $keuangan->tanggal }}" readonly>
              </div>

              <div class="mb-3">
                <label for="jumlah" class="form-label">Jumlah:</label>
                <input type="text" class="form-control" id="jumlah" value="{{ number_format($keuangan->jumlah, 0, ',', '.') }}" readonly>
              </div>

              <div class="mb-3">
                <label for="saldo" class="form-label">Saldo:</label>
                <input type="text" class="form-control" id="saldo" value="{{ number_format($keuangan->saldo, 0, ',', '.') }}" readonly>
              </div>

              <div class="mb-3">
                <label for="keterangan" class="form-label">Keterangan:</label>
                <textarea name="keterangan" id="keterangan" class="form-control" rows="3" readonly>{{ $keuangan->keterangan }}</textarea>
              </div>
            </form>

            <a href="{{ route('keuangan') }}" class="btn btn-secondary mt-3">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
