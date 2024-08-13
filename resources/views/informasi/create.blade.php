@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Add New Informasi</h1>
    <form action="{{ route('informasi.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="judul">Judul</label>
            <input type="text" class="form-control" id="judul" name="judul" required>
        </div>
        <div class="form-group">
            <label for="tanggal_informasi">Tanggal Informasi</label>
            <input type="date" class="form-control" id="tanggal_informasi" name="tanggal_informasi" required>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi</label>
            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection