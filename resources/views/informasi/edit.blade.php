@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Informasi</h1>
    <form action="{{ route('informasi.update', $informasi->id_informasi) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" value="{{ $informasi->judul }}" required>
        </div>
        <div class="form-group">
            <label for="tanggal_informasi">Tanggal Informasi</label>
            <input type="date" class="form-control" id="tanggal_informasi" name="tanggal_informasi" value="{{ $informasi->tanggal_informasi }}" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required>{{ $informasi->deskripsi }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection