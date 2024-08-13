@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Informasi Details</h1>
    <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{ $informasi->judul }}" readonly>
    </div>
    <div class="form-group">
        <label for="tanggal_informasi">Tanggal Informasi</label>
        <input type="date" class="form-control" id="tanggal_informasi" name="tanggal_informasi" value="{{ $informasi->tanggal_informasi }}" readonly>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" readonly>{{ $informasi->deskripsi }}</textarea>
    </div>
    <a href="{{ route('informasi.index') }}" class="btn btn-primary">Back</a>
</div>
@endsection
