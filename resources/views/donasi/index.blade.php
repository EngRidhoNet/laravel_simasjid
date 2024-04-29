@extends('layouts.app')

@section('title', 'Data Donasi')

@section('contents')
    {{-- <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Masjid</h1>
        <a href="{{ route('masjid.create') }}" class="btn btn-primary">Tambah Data Masjid</a>
    </div> --}}
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
                <th>Nama Donatur</th>
                <th>Nama Masjid</th>
                <th>Tanggal</th>
                <th>Jumlah</th>
                <th>Metode Pembayaran</th>
                <th>Bukti Pembayaran</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($donasi->count() > 0)
                @foreach($donasi as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->donatur->user->name }}</td>
                        <td class="align-middle">{{ $rs->masjid->nama_masjid }}</td>
                        <td class="align-middle">{{ $rs->tanggal }}</td>
                        <td class="align-middle">{{ $rs->jumlah }}</td>
                        <td class="align-middle">{{ $rs->metode_pembayaran }}</td>
                        <td class="align-middle">
                            @if($rs->bukti_pembayaran)
                                <img src="{{ asset('storage/pembayaran_images/' . $rs->bukti_pembayaran) }}" alt="{{ $rs->donatur->user->name }} - Foto Masjid" width="100" height="50">
                            @else
                                No Image Available
                            @endif
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('donasi.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('donasi.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('donasi.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="8">Data masjid Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
