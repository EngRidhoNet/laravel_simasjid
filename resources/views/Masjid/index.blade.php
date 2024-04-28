@extends('layouts.app')

@section('title', 'Data Masjid')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Masjid</h1>
        <a href="{{ route('masjid.create') }}" class="btn btn-primary">Tambah Data Masjid</a>
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
                <th>Alamat Masjid</th>
                <th>Telepon Masjid</th>
                <th>Email Masjid</th>
                <th>Foto Masjid</th>
                <th>Deskripsi</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @if($masjid->count() > 0)
                @foreach($masjid as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->nama_masjid }}</td>
                        <td class="align-middle">{{ $rs->alamat_masjid }}</td>
                        <td class="align-middle">{{ $rs->telepon_masjid }}</td>
                        <td class="align-middle">{{ $rs->email_masjid }}</td>
                        <td class="align-middle">
                            @if($rs->foto_masjid)
                                <img src="{{ asset('storage/masjid_images/' . $rs->foto_masjid) }}" alt="{{ $rs->nama_masjid }} - Foto Masjid" width="100" height="50">
                            @else
                                No Image Available
                            @endif
                        </td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('masjid.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('masjid.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('masjid.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
