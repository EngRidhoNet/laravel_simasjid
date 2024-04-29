@extends('layouts.app')

@section('title', 'Data kegiatan')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data kegiatan</h1>
        <a href="{{ route('kegiatan.create') }}" class="btn btn-primary">Tambah Data kegiatan</a>
    </div>
    <hr />
    @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('success') }}
        </div>
    @endif
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Nama Masjid</th>
                <th>Nama Kegiatan</th>
                <th>Deskripsi</th>
                <th>Tanggal</th>
                <th>Waktu Mulai</th>
                <th>Waktu Selesai</th>
                <th>Tempat</th>
                <th>Foto Kegiatan</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if ($kegiatan->count() > 0)
                @foreach ($kegiatan as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->masjid->nama_masjid }}</td>
                        <td class="align-middle">{{ $rs->nama_kegiatan }}</td>
                        <td class="align-middle">{{ $rs->deskripsi }}</td>
                        <td class="align-middle">{{ $rs->tanggal }}</td>
                        <td class="align-middle">{{ $rs->waktu_mulai }}</td>
                        <td class="align-middle">{{ $rs->waktu_selesai }}</td>
                        <td class="align-middle">{{ $rs->tempat }}</td>
                        <td class="align-middle">
                            @if ($rs->foto_kegiatan)
                                <img src="{{ asset('storage/kegiatan_images/' . $rs->foto_kegiatan) }}"
                                    alt="{{ $rs->nama_kegiatan }} - Foto Kegiatan" width="100" height="50">
                            @else
                                No Image Available
                            @endif
                        </td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('kegiatan.show', $rs->id) }}" type="button"
                                    class="btn btn-secondary">Detail</a>
                                <a href="{{ route('kegiatan.edit', $rs->id) }}" type="button"
                                    class="btn btn-warning">Edit</a>
                                <form action="{{ route('kegiatan.destroy', $rs->id) }}" method="POST" type="button"
                                    class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Data kegiatan Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
