@extends('layouts.app')

@section('title', 'Data pengurus')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        {{-- <h1 class="mb-0">Data Jamaah</h1> --}}
        <a href="{{ route('pengurus.create') }}" class="btn btn-primary">Tambah Data Pengurus</a>
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
                <th>Nama</th>
                <th>Jabatan</th>
                <th>No HP</th>
                <th>email</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($pengurus->count() > 0)
                @foreach($pengurus as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->masjid->nama_masjid }}</td>
                        <td class="align-middle">{{ $rs->nama}}</td>
                        <td class="align-middle">{{ $rs->jabatan }}</td>
                        <td class="align-middle">{{ $rs->no_hp }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('pengurus.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('pengurus.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('pengurus.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Data Pengurus Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
