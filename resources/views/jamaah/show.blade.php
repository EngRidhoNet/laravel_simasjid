@extends('layouts.app')

@section('title', 'Show Product')

@section('contents')
    <h1 class="mb-0">Detail Jamaah</h1>
    <hr />
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Nama</label>
            <input type="text" name="title" class="form-control" value="{{ $jamaah->name }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Email</label>
            <input type="text" name="price" class="form-control"  value="{{ $jamaah->email }}" readonly>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">alamat</label>
            <input type="text" name="product_code" class="form-control"  value="{{ $jamaah->alamat }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">No HP</label>
            <textarea class="form-control" name="description"  readonly>{{ $jamaah->no_hp }}</textarea>
        </div>
    </div>
    <div class="row">
        <div class="col mb-3">
            <label class="form-label">Created At</label>
            <input type="text" name="created_at" class="form-control" placeholder="Created At" value="{{ $jamaah->created_at }}" readonly>
        </div>
        <div class="col mb-3">
            <label class="form-label">Updated At</label>
            <input type="text" name="updated_at" class="form-control" placeholder="Updated At" value="{{ $jamaah->updated_at }}" readonly>
        </div>
    </div>
@endsection
