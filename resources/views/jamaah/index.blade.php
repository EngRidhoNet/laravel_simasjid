@extends('layouts.app')

@section('title', 'Data Jamaah')

@section('contents')
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Data Jamaah</h1>
        <a href="{{ route('jamaah.create') }}" class="btn btn-primary">Tambah Data Jamaah</a>
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
                <th>nama</th>
                <th>email</th>
                <th>alamat</th>
                <th>no_hp</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>+
            @if($user->count() > 0)
                @foreach($user as $rs)
                    <tr>
                        <td class="align-middle">{{ $loop->iteration }}</td>
                        <td class="align-middle">{{ $rs->name }}</td>
                        <td class="align-middle">{{ $rs->email }}</td>
                        <td class="align-middle">{{ $rs->alamat }}</td>
                        <td class="align-middle">{{ $rs->no_hp }}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="{{ route('jamaah.show', $rs->id) }}" type="button" class="btn btn-secondary">Detail</a>
                                <a href="{{ route('jamaah.edit', $rs->id)}}" type="button" class="btn btn-warning">Edit</a>
                                <form action="{{ route('jamaah.destroy', $rs->id) }}" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
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
                    <td class="text-center" colspan="5">Data Jamaah Tidak Ditemukan</td>
                </tr>
            @endif
        </tbody>
    </table>
@endsection
