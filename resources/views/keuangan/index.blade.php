@extends('layouts.app')

@section('title', 'Data Keuangan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        {{-- <h1 class="mb-0">Data Jamaah</h1> --}}
        <a href="{{ route('keuangan.create') }}" class="btn btn-primary">Tambah Data keuangan</a>
    </div>
    <hr />
    @if(Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Masjid</th>
                <th>Jenis Transaksi</th>
                <th>Tanggal</th>
                <th>Keterangan</th>
                <th>Jumlah</th>
                <th>Saldo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($keuangan->count() > 0)
                @foreach($keuangan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->masjid->nama_masjid }}</td>
                        <td class="align-middle">{{ $rs->jenis_transaksi }}</td>
                        <td class="align-middle">{{ $rs->tanggal }}</td>
                        <td class="align-middle">{{ $rs->keterangan }}</td>
                        <td class="align-middle">{{ $rs->jumlah }}</td>
                        <td class="align-middle">{{ $rs->saldo }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('keuangan.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('keuangan.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('keuangan.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger m-0">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td class="text-center" colspan="5">Data keuangan Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
