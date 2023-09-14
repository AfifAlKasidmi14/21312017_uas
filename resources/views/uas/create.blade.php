@extends('layout.master')

@section('judul')
    Tambah data
@endsection

@section('content')
<form method="post" action="/uas">
    @csrf
    <div class="form-group">
        <label>NPM</label>
        <input type="text" name="npm" value="" class="form-control">
    </div>
    @error('npm')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Nama</label>
        <textarea class="form-control" name="nama"> </textarea>
    </div>
    @error('nama')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
        <label>Alamat</label>
        <textarea class="form-control" name="alamat"> </textarea>
    </div>
    @error('alamat')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
@endsection
